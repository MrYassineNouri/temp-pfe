import { Component, OnInit, Inject, Optional } from '@angular/core';
import { MatTableDataSource, MatTable } from '@angular/material/table';
import { groupList } from './contact-data';
import {
  MatDialog,
  MatDialogRef,
  MAT_DIALOG_DATA,
} from '@angular/material/dialog';
import { Group } from './contact';
import { ContactService } from './contact.service';
import { Router } from '@angular/router';
import { HttpClient } from '@angular/common/http';
import { GroupByOptionsWithElement } from 'rxjs';
import Swal from 'sweetalert2';


export interface ContactData {
  contacts: Group[];
}

@Component({
  templateUrl: './contact.component.html',
})
export class AppContactComponent implements OnInit {
  
  closeResult = '';
  contacts: Group[] = [];
  groupList=new MatTableDataSource<Group>([]);
  constructor(
    private router: Router,
    public dialog: MatDialog,
    private contactService: ContactService,
    private http: HttpClient 
  ) {
    this.contacts = this.contactService.getContacts();
    //console.log(this.contacts);
  }
  navigateToo(id: number): void {
    this.router.navigate(['/apps/tickets'], { state: { data: id } });
  }
  
openDialog(action: string, obj: any): void {
    obj.action = action;
    const dialogRef = this.dialog.open(AppContactDialogContentComponent, {
      data: obj,
    });

    dialogRef.afterClosed().subscribe((result) => {
      if (result.event === 'Ajouter') {
        this.addContact(result.data.nom);
      }
      if (result.event === 'Modifier') {
        this.ModContact(result.data);
      }
    });
  }

  ModContact(result: any) {
    Swal.fire({
      title: "Voulez-vous enregistrer les modifications?",
      showDenyButton: true,
      showCancelButton: false,
      confirmButtonText: "Confirmer",
      denyButtonText: `Annuler`
    }).then((swalResult) => {
      if (swalResult.isConfirmed) {
        this.http.post(`http://localhost:5555/api/v1/groupes/mod?id=${result.id}`, result.nom, { responseType: 'text' })
          .subscribe(
            (resultData: any) => {
              console.log(resultData);
              Swal.fire({
                position: "center",
                icon: "success",
                title: "Groupe modifié avec succès.",
                showConfirmButton: true,
                timer: 2000
              });
              this.affGroup();
            },
            (error) => {
              console.error('Erreur lors du modification du groupe', error);
              Swal.fire({
                position: "center",
                icon: "error",
                title: "Erreur lors de l'ajout du groupe.",
                showConfirmButton: true,
              });
            }
          );
      } else if (swalResult.isDenied) {
        Swal.fire({
          position: "center",
          icon: "warning",
          title: "Les modifications ne seront pas enregistrés",
          showConfirmButton: true,
          timer: 2000
      });
      }
    });
  }

  addContact(result:any){
    console.log(result);
    this.http.post('http://localhost:5555/api/v1/groupes/new', result, { responseType: 'text' })
            .subscribe(
                (resultData: any) => {
                    console.log(resultData);
                    Swal.fire({
                      position: "center",
                      icon: "success",
                      title: "Groupe ajoutée avec succès.",
                      showConfirmButton: true,
                      timer: 200
                  });
                    this.affGroup();
                },
                (error) => {
                    console.error('Erreur lors de l\'ajout du groupe', error);
                    Swal.fire({
                      position: "center",
                      icon: "error",
                      title: "Erreur lors de l\'ajout du groupe",
                      showConfirmButton: true,
                      timer: 2000
                  });
                }
            );
    
  }

  applyFilter(event: Event): void {
    const filterValue = (event.target as HTMLInputElement).value;
    this.contacts = this.filter(filterValue);
  }

  filter(v: string): Group[] {
    return this.contactService
      .getContacts()
      .filter(
        (x) => x.nom.toLowerCase().indexOf(v.toLowerCase()) !== -1
      );
  }

  ngOnInit(): void {
    // this.contacts = [];
    this.groupList = new MatTableDataSource<Group>([]);
    this.affGroup();
  }

  affGroup() {
    this.http.get<Group[]>("http://localhost:5555/api/v1/groupes/list")
      .subscribe(
        (resultData: Group[]) => {
          console.log(resultData);
          this.contacts = resultData; // Assign the result to contacts
        },
        (error: any) => {
          console.error(error);
        }
      );
  }
}

@Component({
  // tslint:disable-next-line: component-selector
  selector: 'app-dialog-content',
  templateUrl: 'contact-dialog-content.html',
})
// tslint:disable-next-line: component-class-suffix
export class AppContactDialogContentComponent {
  action: string;
  // tslint:disable-next-line - Disables all
    local_data: any;

  constructor(
    public dialogRef: MatDialogRef<AppContactDialogContentComponent>,
    // @Optional() is used to prevent error if no data is passed
    @Optional() @Inject(MAT_DIALOG_DATA) public data: ContactData
  ) {
    // console.log(data);
    this.local_data = { ...data };
    this.action = this.local_data.action;
  }

  doAction(): void {
    this.dialogRef.close({ event: this.action, data: this.local_data });
  }

  closeDialog(): void {
    this.dialogRef.close({ event: 'Cancel' });
  }
}