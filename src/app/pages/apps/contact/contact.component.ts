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
  navigateToo(){
    this.router.navigate(['/apps/employee']);
  }
openDialog(action: string, obj: any): void {
    obj.action = action;
    const dialogRef = this.dialog.open(AppContactDialogContentComponent, {
      data: obj,
    });

    dialogRef.afterClosed().subscribe((result) => {
      if (result.event === 'Add') {
        this.addContact(result.data.nom);
      }
    });
  }
  addContact(result:any){
    console.log(result);
    this.http.post('http://localhost:5555/api/v1/groupes/new', result, { responseType: 'text' })
            .subscribe(
                (resultData: any) => {
                    console.log(resultData);
                    alert('Fiche ajoutée avec succès.');
                    this.affGroup();
                },
                (error) => {
                    console.error('Erreur lors de l\'ajout de la fiche:', error);
                    alert('Une erreur est survenue. Veuillez réessayer plus tard.');
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
