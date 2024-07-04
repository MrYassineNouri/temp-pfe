import { Component, OnInit, Inject, Optional, ViewChild } from '@angular/core';
import { MatTableDataSource, MatTable } from '@angular/material/table';
import {
  MatDialog,
  MatDialogRef,
  MAT_DIALOG_DATA,
} from '@angular/material/dialog';
import { MatPaginator } from '@angular/material/paginator';
import { Router } from '@angular/router';
import { HttpClient } from '@angular/common/http';
import Swal from 'sweetalert2';

export interface TicketElement {
  id: number;
  nom: string;
  prenom: string;
  role: string;
}

const tickets: TicketElement[] = [];

@Component({
  selector: 'app-ticket-list',
  templateUrl: './ticketlist.component.html',
})
export class AppTicketlistComponent implements OnInit {
  @ViewChild(MatTable, { static: true }) table: MatTable<any> =
    Object.create(null);
    @ViewChild(MatPaginator, { static: true }) paginator: MatPaginator = Object.create(null);
  searchText: any;
  totalCount = -1;
  Closed = -1;
  Inprogress = -1;
  Open = -1;

  displayedColumns: string[] = [
    'id',
    'nom',
    'prenom',
    'role',
    'action',
  ];
  dataSource = new MatTableDataSource(tickets);
  idgrp: number;

  constructor(public dialog: MatDialog,private router: Router, private http: HttpClient) {}

  ngOnInit(): void {
    const navigation = this.router.getCurrentNavigation();
    if (navigation?.extras.state) {
      this.idgrp = navigation.extras.state['data'];
    } else {
      // Fallback to accessing the state from the history state
      const historyState = window.history.state;
      this.idgrp = historyState?.data ?? null;
    }
    console.log(this.idgrp)
    this.aff(this.idgrp);
    this.totalCount = this.dataSource.data.length;
    this.Open = this.btnCategoryClick('Open');
    this.Closed = this.btnCategoryClick('Closed');
    this.Inprogress = this.btnCategoryClick('InProgress');
    this.dataSource = new MatTableDataSource(tickets);
  }

  aff(id: number) {
    this.http.get<TicketElement[]>(`http://localhost:5555/api/v1/groupes/employees?id=${id}`)
      .subscribe(
        (resultData: TicketElement[]) => {
          resultData.forEach((item: any, index: number) => {
            console.log(item["role"])
            console.log(item["role"].nom)
            item["role"] = item["role"].nom;
          });
          console.log(resultData);
          this.dataSource = new MatTableDataSource<TicketElement>(resultData);
          this.dataSource.paginator = this.paginator;
        },
        (error: any) => {
          console.error(error);
        }
      );
  }
  



  ngAfterViewInit(): void {
    this.dataSource.paginator = this.paginator;
  }

  applyFilter(filterValue: string): void {
    this.dataSource.filter = filterValue.trim().toLowerCase();
  }

  btnCategoryClick(val: string): number {
    this.dataSource.filter = val.trim().toLowerCase();
    return this.dataSource.filteredData.length;
  }

  openDialog(action: string, obj: any): void {
    obj.action = action;
    const dialogRef = this.dialog.open(AppTicketDialogContentComponent, {
      data: obj,
    });
    dialogRef.afterClosed().subscribe((result) => {
      if (result.event === 'Delete') {
        this.deleteRowData(result.data.id);
      }
    })
  }
  // tslint:disable-next-line - Disables all
  addComm() {
    this.router.navigate(['/tables/selection-table'], { state: { data: this.idgrp } });
  }

  addSupp() {
    this.router.navigate(['/tables/multi-header-footer-table'], { state: { data: this.idgrp } });
  }


  // tslint:disable-next-line - Disables all
  /*updateRowData(row_obj: TicketElement): boolean | any {
    this.dataSource.data = this.dataSource.data.filter((value, key) => {
      if (value.id === row_obj.id) {
        value.title = row_obj.title;
        value.subtext = row_obj.subtext;
        value.assignee = row_obj.assignee;
        value.status = row_obj.status;
        value.date = row_obj.date;
      }
      return true;
    });
  }*/

  // tslint:disable-next-line - Disables all
  deleteRowData(id:any): boolean | any {
    console.log(id)
    Swal.fire({
      title: "Voulez vous supprimer ?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Annuler",
      confirmButtonText: "Oui!"
    }).then((result) => {
      if (result.isConfirmed) {
        this.http.post(`http://localhost:5555/api/v1/groupes/del`, id, { responseType: 'text' })
              .subscribe(
                  (resultData: any) => {
                      console.log(resultData);
                      Swal.fire({
                        title: "Supprimer!",
                        text: "L'employée retiré du groupe.",
                        icon: "success"
                      });
                      this.ngOnInit();
                  },
              );
    }else if(result.isDenied) {
      Swal.fire({
        position: "center",
        icon: "warning",
        title: "Les modifications ne sont pas enregistrées",
        showConfirmButton: false,
        timer: 1000
    });
  }
});
  }
}
@Component({
  // tslint:disable-next-line - Disables all
  selector: 'app-dialog-content',
  templateUrl: 'ticket-dialog-content.html',
})
// tslint:disable-next-line - Disables all
export class AppTicketDialogContentComponent {
  action: string;
  // tslint:disable-next-line - Disables all
  local_data: any;

  constructor(
    public dialogRef: MatDialogRef<AppTicketDialogContentComponent>,
    @Optional() @Inject(MAT_DIALOG_DATA) public data: TicketElement
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