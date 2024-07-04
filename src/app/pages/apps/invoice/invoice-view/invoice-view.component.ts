import { Component, OnInit } from '@angular/core';
import { ServiceinvoiceService } from '../serviceinvoice.service';
import { InvoiceList } from '../invoice';
import { ActivatedRoute, Router } from '@angular/router';
import { MatTableDataSource } from '@angular/material/table';
import { HttpClient } from '@angular/common/http';


export interface Section {
  id: number;
  nom: string;
  prenom: string;
  DN:Date;
  regime:string;
  nomc: string;
  prenomc: string;
  DNC:Date;
  regimec:string;
  adresse:string
  email: string;
  codeP: string;
  tel: string;
  etat:string;
  DE: Date;
  DNE1:Date;
  DNE2:Date;
}

@Component({
  selector: 'app-invoice-view',
  templateUrl: './invoice-view.component.html',
  styleUrls: ['./invoice-view.component.scss'],
})

export class AppInvoiceViewComponent implements OnInit {
  folders: Section;
  data: any;

  constructor(private http: HttpClient, private router: Router) {}

  ngOnInit(): void {
    const navigation = this.router.getCurrentNavigation();
    if (navigation?.extras.state) {
      this.data = navigation.extras.state['data'];
    } else {
      // Fallback to accessing the state from the history state
      const historyState = window.history.state;
      this.data = historyState?.data ?? null;
    }
    if (this.data) {
      console.log(this.data);
      this.affFiche(this.data);
    } else {
      console.error('No data available');
    }
  }

  affFiche(id:number): void {
    this.http.get<Section>(`http://localhost:5555/api/v1/fiches/find?id=${id}`)
      .subscribe(
        (resultData) => {
          console.log(resultData);
          this.folders = resultData;
        },
        (error) => {
          console.error(error);
        }
      );
  }

}
