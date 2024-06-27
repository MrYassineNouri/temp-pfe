import { Component, OnInit, ViewChild } from '@angular/core';
import { produitService } from './produit.service';
import { produit } from './produit';
import { MatDialog } from '@angular/material/dialog';
import { AppDialogOverviewComponent } from '../../ui-components/dialog/dialog.component';
import { HttpClient } from '@angular/common/http';
import { MatTableDataSource } from '@angular/material/table';
import { MatSort } from '@angular/material/sort';
import { MatPaginator } from '@angular/material/paginator';
import Swal from 'sweetalert2';
import { Router } from '@angular/router';

@Component({
  selector: 'app-produits',
  templateUrl: './produits.component.html',
  styleUrls: ['./produits.component.scss'],
})
export class AppproduitsComponent implements OnInit{
[x: string]: any;
  //produitList: produit[] = [];
  @ViewChild(MatSort) sort: MatSort;
  @ViewChild(MatPaginator) paginator: MatPaginator;
  selectedCategory = 'All';
  produitListOriginal: produit[];

  constructor(public dialog: MatDialog,private produitService: produitService,private http: HttpClient,private router: Router) {
  }
  produitList: MatTableDataSource<produit>
  private initialProduits: produit[] = [];

  
  ngOnInit(): void {
    this.produitList = new MatTableDataSource<produit>(this.produitService.getproduit());
    this.produitList.paginator = this.paginator;
    this.produitList.sort = this.sort;
    this.affProd();
  }
  affProd() {
    this.http.get("http://localhost:5555/api/v1/prods/neo")
      .subscribe(
        (resultData: any) => {
          console.log(resultData);
          resultData.forEach((item: any) => {
            console.log(item.soc);
            if(item.soc==='Zenioo'){
              item.courseType='error';
            }else if(item.soc==='Néoliane'){
              item.courseType='accent';
            }else if(item.soc==='Apivia'){
              item.courseType='success';
            }
            
          });
          this.produitList.data = resultData;
          this.produitList.paginator = this.paginator;
          this.produitList.sort = this.sort;
        },
        (error: any) => {
          console.error(error);
        }
      );
  }

  openDialog(
    enterAnimationDuration: string,
    exitAnimationDuration: string
  ): void {
    this.dialog.open(AppDialogOverviewComponent, {
      width: '900px',
      height:'400px',
      enterAnimationDuration,
      exitAnimationDuration,
    });
  }
  
  
 filtrer(event: Event): void {
    const filterValue = (event.target as HTMLInputElement).value.trim().toLowerCase();
    this.produitList.data = this.filter(filterValue);
  }
  
  filter(v: string): produit[] {
    return this.produitList.data.filter((x) => x.soc.toLowerCase().indexOf(v.toLowerCase()) !== -1);
  }
  initialiser(): void {
    this.affProd()
  }
  ActDes(id: any){
    this.http.post('http://localhost:5555/api/v1/prods/activer',id ,{ responseType: 'text' })
              .subscribe(
                  (resultData: any) => {
                      console.log(resultData);
                      Swal.fire({
                        position: "center",
                        icon: "success",
                        title: resultData,
                        showConfirmButton: true,
                        timer: 2000
                      });
                  },
                  (error) => {
                      alert( error);
                      alert('Une erreur est survenue. Veuillez réessayer plus tard.');
                  }
              );
    
  }
  toggleIconAndAct(course: { etat: string; code: any; }): void {
    course.etat = course.etat === 'A' ? 'D' : 'A';
    this.ActDes(course.code);
  }
  toggleIcon(course: { etat: string; }): void {
    course.etat = course.etat === 'A' ? 'D' : 'A';
  }
  trackByFn(index: number, item: produit): any {
    return item.Id; // Remplacez 'Id' par la clé unique de votre objet produit
  }
  navigateToo(c:any): void {
    console.log("xfghjkl");
    this.router.navigate(['/ui-components/lists'], { state: { data: c } });
  }
   /*ddlChange(ob: any): void {
    const filterValue = ob.value;
    if (filterValue === 'All') {
      this.produitList = this.produitService.getproduit();
    } else {
      this.produitList = this.produitService
        .getproduit()
        // tslint:disable-next-line: no-shadowed-variable
        .filter((produit) => produit.produitFramework === filterValue);
    }
    // this.todos.filter(produit => produit.produitType==filterValue);
  }*/
}
