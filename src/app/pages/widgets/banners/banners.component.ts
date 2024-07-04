import { SelectionModel } from '@angular/cdk/collections';
import { HttpClient } from '@angular/common/http';
import { Component, OnInit, ViewChild } from '@angular/core';
import { MatSnackBarVerticalPosition } from '@angular/material/snack-bar';
import { Data, Router } from '@angular/router';
import { DataSource } from './banners';
import { MatTableDataSource } from '@angular/material/table';
import { MatSort } from '@angular/material/sort';
import { MatPaginator } from '@angular/material/paginator';
import { ServicebannerService } from './servicebanners.service';
import { N } from '@angular/cdk/keycodes';


@Component({
  selector: 'app-banners',
  templateUrl: './banners.component.html'
})
export class AppBannersComponent implements OnInit {
[x: string]: any;
  verticalPosition1: MatSnackBarVerticalPosition = 'bottom';
  verticalPosition2: MatSnackBarVerticalPosition = 'bottom';
  verticalPosition3: MatSnackBarVerticalPosition = 'bottom';
  verticalPosition4: MatSnackBarVerticalPosition = 'bottom';
  verticalPosition5: MatSnackBarVerticalPosition = 'bottom';
  disabled = false;
  max = 500;
  min = 0;
  value = 0;
  data: number;
  offres: any[] = [];
  allComplete: boolean = false;
  dataSource: MatTableDataSource<DataSource>;
  displayedColumns = [
    'select',
    'société',
    'prod',
    'cotisation',
  ];
 

  constructor(private router: Router, private invoiceService: ServicebannerService, private http: HttpClient) {
  }

  ngOnInit(): void {
    const bannersListData = this.invoiceService.getBannersList();
    this.dataSource = new MatTableDataSource(bannersListData);
    const navigation = this.router.getCurrentNavigation();
    if (navigation?.extras.state) {
      this.data = navigation.extras.state['data'];
    } else {
      // Fallback to accessing the state from the history state
      const historyState = window.history.state;
      this.data = historyState?.data ?? null;
    }
    console.log(this.data)
    this.getOffres(this.data);
  }

  selection = new SelectionModel<DataSource>(true, []);
  selectedRows: DataSource[] = [];
  selectedCompany: string = 'All';

  isAllSelected(): any {
    const numSelected = this.selection.selected.length;
    const numRows = this.dataSource.data.length;
    return numSelected === numRows;
  }

  /** Selects all rows if they are not all selected; otherwise clear selection. */
  selectedCount = 0;

  toggleSelection(row: DataSource): void {
    const maxSelection = 3; // Maximum number of rows that can be selected
  
    if (this.selection.isSelected(row)) {
      this.selection.deselect(row);
      this.selectedRows = this.selectedRows.filter(r => r !== row);
    } else if (this.selectedRows.length < maxSelection) {
      this.selection.select(row);
      this.selectedRows.push(row);
    }
  
    if (this.selectedRows.length > maxSelection) {
      this.selectedRows.splice(maxSelection); // Limit to maxSelection
      this.selection.clear(); // Clear any extra selections
    }
  }
  applyFiltre(filterValue: string): void {
    this.dataSource.filter = filterValue.trim().toLowerCase();
  }
  filterByCompany() {
    if (this.selectedCompany === 'All') {
      this.dataSource.filter = '';
    } else {
      this.dataSource.filter = this.selectedCompany.trim().toLowerCase();
    }
  }
  compareRows(): void {
    console.log('Button clicked'); // Check if this message appears in the console
    console.log('Selected rows:', this.selectedRows); // Check if selectedRows contains the expected data
  
    if (this.selectedRows.length === 3) {
      this.router.navigate(['/theme-pages/pricing'], {
        state: {
          selectedRows: this.selectedRows,
          data: this.data
        }
      });  
    } else {
      console.log('Incorrect number of selected rows:', this.selectedRows.length);
    }
  }
  Souscrire(prod:any,soc:any){
    console.log(prod)
    this.router.navigate(['/forms/souscription'], {
      state: {
        data: this.data,
        produit: prod,
        societe: soc
      }
    });
  }
 

  getOffres(id:any)
  {
    console.log(id)
    this.http.get(`http://localhost:5555/api/v1/prods/tar?id=${id}`)
      .subscribe(
        (resultData: any) => {
          resultData.forEach((item: any, index: number) => {
            if(item["societe"]=="Néoliane"){
              item.im="assets/images/logos/neoliane.jpg";
            }else if(item["societe"]=="Zenioo"){
              item.im="assets/images/logos/zenioo.jpg";
            }else if(item["societe"]=="Apivia"){
              item.im="assets/images/logos/apivia.jpg";
            }
          });
          this.dataSource = new MatTableDataSource<DataSource>(resultData);
        },
        (error: any) => {
          console.error(error);
        }
      );
  }
}