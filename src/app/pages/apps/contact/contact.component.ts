import { Component, OnInit, Inject, Optional } from '@angular/core';
import { MatTableDataSource } from '@angular/material/table';
import { MatDialog, MatDialogRef, MAT_DIALOG_DATA } from '@angular/material/dialog';
import { Group } from './contact';
import { ContactService } from './contact.service';
import { Router } from '@angular/router';
import { HttpClient } from '@angular/common/http';
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
  groupList = new MatTableDataSource<Group>([]);
  
  constructor(
    private router: Router,
    public dialog: MatDialog,
    private contactService: ContactService,
    private http: HttpClient 
  ) {}

  ngOnInit(): void {
    this.affGroup();
  }

  affGroup() {
    this.http.get<Group[]>("http://localhost:5555/api/v1/groupes/list")
      .subscribe(
        (resultData: Group[]) => {
          this.contacts = resultData;
          this.groupList.data = this.contacts; // Assign data to MatTableDataSource
        },
        (error: any) => {
          console.error(error);
        }
      );
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
              if(resultData==="Modification réussie"){
                Swal.fire({
                  position: "center",
                  icon: "success",
                  title: "Groupe modifié avec succès.",
                  timer: 2000
                });
              } else {
                Swal.fire({
                  position: "center",
                  icon: "error",
                  title: resultData,
                  timer: 2000
                });
              }
              this.affGroup();
            },
            (error) => {
              console.error('Erreur lors du modification du groupe', error);
              Swal.fire({
                position: "center",
                icon: "error",
                title: "Erreur lors de la modification du groupe.",
                showConfirmButton: true,
              });
            }
          );
      } else if (swalResult.isDenied) {
        Swal.fire({
          position: "center",
          icon: "warning",
          title: "Les modifications ne seront pas enregistrées",
          showConfirmButton: true,
          timer: 2000
        });
      }
    });
  }

  addContact(result: any){
    this.http.post('http://localhost:5555/api/v1/groupes/new', result, { responseType: 'text' })
      .subscribe(
        (resultData: any) => {
          if(resultData==="création avec succés"){
            Swal.fire({
              position: "center",
              icon: "success",
              title: "Groupe ajouté avec succès.",
              showConfirmButton: true,
              timer: 2000
            });
          } else {
            Swal.fire({
              position: "center",
              icon: "error",
              title: resultData,
              showConfirmButton: true,
              timer: 2000
            });
          }
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

  applyFilter(filterValue: string): void {
    this.groupList.filter = filterValue.trim().toLowerCase();
  }
}

@Component({
  selector: 'app-dialog-content',
  templateUrl: 'contact-dialog-content.html',
})
export class AppContactDialogContentComponent {
  action: string;
  local_data: any;

  constructor(
    public dialogRef: MatDialogRef<AppContactDialogContentComponent>,
    @Optional() @Inject(MAT_DIALOG_DATA) public data: ContactData
  ) {
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