import { Component, ViewChild, AfterViewInit, OnInit } from '@angular/core';
import { MatPaginator } from '@angular/material/paginator';
import { MatSort } from '@angular/material/sort';
import { MatTableDataSource } from '@angular/material/table';
import { BreakpointObserver } from '@angular/cdk/layout';
import { MaterialModule } from '../../../material.module';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';
import { produit } from '../../apps/produits/produit';
import { MatDialog } from '@angular/material/dialog';
import { AppDialogOverviewComponent } from '../../ui-components/dialog/dialog.component';

/** Constants used to fill up our data base. */

@Component({
  selector: 'app-mix-table',
  standalone: true,
  imports: [MaterialModule],
  templateUrl: './mix-table.component.html',
})
export class AppMixTableComponent implements OnInit {
  displayedColumns = ['id', 'dateSous', 'Produit', 'Client','Action'];
  dataSource: MatTableDataSource<UserData>;

  @ViewChild(MatPaginator, { static: true }) paginator: MatPaginator =
    Object.create(null);
  @ViewChild(MatSort, { static: true }) sort: MatSort = Object.create(null);

  constructor(private dialog: MatDialog,private router: Router,breakpointObserver: BreakpointObserver, private http: HttpClient) {
    breakpointObserver.observe(['(max-width: 600px)']).subscribe((result) => {
      this.displayedColumns = result.matches
        ? ['id', 'dateSous', 'produit','client', 'action']
        : ['id', 'dateSous', 'produit', 'client','action'];
    });

    // Create 100 users
    const users: UserData[] = [];
    

    // Assign the data to the data source for the table to render
    this.dataSource = new MatTableDataSource(users);
  }
  ngOnInit(): void {
    this.dataSource=new MatTableDataSource<UserData>([]);
    this.getSous();
  }

  getSous() {
    this.http.get("http://localhost:5555/api/v1/sous/aff")
    .subscribe(
      (resultData: any) => {
        console.log(resultData);
        this.dataSource = new MatTableDataSource<UserData>(resultData);
      },
      (error: any) => {
        console.error(error);
      }
    );
  }

  valider(row_obj: UserData): void {
    console.log("fdghjk")
    console.log(row_obj);
    this.dataSource.data = this.dataSource.data.filter((value: any) => {
      if (value.id === row_obj.id) {
        console.log(value.pid);
        value.numeroClient= row_obj.numeroClient;
        value.pid= row_obj.pid;
      }
      })
      const rowDataToSend: any = {
        numeroClient: row_obj.numeroClient,
        pid: row_obj.pid,
        };
        console.log(rowDataToSend)
       this.http.post('http://localhost:5555/api/v1/contrat/newC', rowDataToSend, { responseType: 'text' })
              .subscribe(
                  (resultData: any) => {
                      console.log(resultData);
                      this.getSous();
                  },
                  (error) => {
                      console.error('Erreur lors de la modification de la fiche:', error);
                  }
                );
    }
naviger(id:number){
    console.log(id)                                                                                                     
    this.router.navigate(['/forms/form-layouts/id'] ,{ state: { data: id } });
}

openDialog(action: string, obj: any):void {
  const rowDataToSend = this.dataSource;
  const prods = rowDataToSend;

    const dialogRef = this.dialog.open(AppDialogOverviewComponent, {
      width: '1000px',
      maxHeight: '90vh', // Ensure the dialog can grow to this height
      data: obj
    });
    console.log("rdfghnjk")
    dialogRef.afterClosed().subscribe((result: any) => {
      this.getSous();
      this.updateRowData(result.data);
    });
  }
  updateRowData(row_obj: UserData): void {
    console.log("fdghjk")
    this.dataSource.data = this.dataSource.data.filter((value: any) => {
      if (value.id === row_obj.id) {
        console.log(value.id);
        value.compagnie= row_obj.compagnie;
        value.typeDeContrat= row_obj.typeDeContrat;
        value.dateSous= row_obj.dateSous;
        value.cout= row_obj.cout;
        value.nomBanquePrev= row_obj.nomBanquePrev;
        value.nomBanqueRemb= row_obj.nomBanqueRemb;
        value.titulaireComptePrev= row_obj.titulaireComptePrev;
        value.titulaireCompteRemb= row_obj.titulaireCompteRemb;
        value.ibanPrev=row_obj.ibanPrev;
        value.ibanRemb=row_obj.ibanRemb;
        value.bicPrev=row_obj.bicPrev;
        value.bicRemb= row_obj.bicRemb;
        value.dateDePaiement= row_obj.dateDePaiement;
        value.moisOffert= row_obj.moisOffert;
        value.fraisDeDossier= row_obj.fraisDeDossier;
        value.modeDePaiement= row_obj.modeDePaiement;
        value.numeroClient= row_obj.numeroClient;
        value.pid= row_obj.pid;
      }
      })
      const rowDataToSend: any = {
        id: row_obj.id,
        compagnie:row_obj.compagnie,
        typeDeContrat: row_obj.typeDeContrat,
        dateSous:row_obj.dateSous,
        cout: row_obj.cout,
        nomBanquePrev: row_obj.nomBanquePrev,
        nomBanqueRemb:row_obj.nomBanqueRemb,
        titulaireComptePrev: row_obj.titulaireComptePrev,
        titulaireCompteRemb: row_obj.titulaireCompteRemb,
        ibanPrev:row_obj.ibanPrev,
        ibanRemb:row_obj.ibanRemb,
        bicPrev:row_obj.bicPrev,
        bicRemb: row_obj.bicRemb,
        dateDePaiement: row_obj.dateDePaiement,
        moisOffert: row_obj.moisOffert,
        fraisDeDossier: row_obj.fraisDeDossier,
        modeDePaiement: row_obj.modeDePaiement,
        numeroClient: row_obj.numeroClient,
        pid: row_obj.pid,
        };
        console.log(rowDataToSend)



        this.http.post('http://localhost:5555/api/v1/sous/modif', rowDataToSend, { responseType: 'text' })
              .subscribe(
                  (resultData: any) => {
                      console.log(resultData);
                      this.getSous();
                  },
                  (error) => {
                      console.error('Erreur lors de la modification de la fiche:', error);
                  }
                );
    }
  /**
   * Set the paginator and sort after the view init since this component will
   * be able to query its view for the initialized paginator and sort.
   */
  ngAfterViewInit(): void {
    this.dataSource.paginator = this.paginator;
    this.dataSource.sort = this.sort;
  }

  applyFilter(event: Event) {
    const filterValue = (event.target as HTMLInputElement).value;
    this.dataSource.filter = filterValue.trim().toLowerCase();
  }
}


/** Builds and returns a new User. */


export interface UserData {
  id: number;
  compagnie: string;
  typeDeContrat: string;
  dateSous:Date;
  cout:string;
  nomBanquePrev: string;
  nomBanqueRemb: string;
  titulaireComptePrev:string;
  titulaireCompteRemb:string;
  ibanPrev:string;
  ibanRemb:string
  bicPrev: string;
  bicRemb: string;
  dateDePaiement:Date;
  moisOffert: number;
  fraisDeDossier:number;
  modeDePaiement: String;
  numeroClient:number;
  pid:String;
}


