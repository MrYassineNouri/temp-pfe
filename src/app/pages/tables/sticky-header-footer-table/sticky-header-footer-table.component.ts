import { Component, OnInit } from '@angular/core';
import { MaterialModule } from '../../../material.module';
import { CommonModule } from '@angular/common';
import { AppDialogContentComponent } from '../../ui-components/dialog/dialog.component';
import { MatDialog } from '@angular/material/dialog';
import { DataSource } from '@angular/cdk/collections';
import { HttpClient } from '@angular/common/http';
import { MatTableDataSource } from '@angular/material/table';


export interface UserData{
  id:number,
  numeroClient:number,
  pid:string,
  dateA:Date,
}


@Component({
  selector: 'app-sticky-header-footer-table',
  standalone: true,
  imports: [MaterialModule, CommonModule],
  templateUrl: './sticky-header-footer-table.component.html',
  styleUrls: ['./sticky-header-footer-table.component.scss'],
})
export class AppStickyHeaderFooterTableComponent implements OnInit {
  // Fixed header
  displayedColumns = ['id', 'client', 'produit','date'];
  dataSource: MatTableDataSource<UserData>;

  constructor(private http: HttpClient) {}

  ngOnInit() {
    this.dataSource=new MatTableDataSource<UserData>([]);
    this.getContrat();
  }
  getContrat() {
    this.http.get("http://localhost:5555/api/v1/contrat/afficher")
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
}
