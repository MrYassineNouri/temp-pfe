import { Component, OnInit } from '@angular/core';
import { MaterialModule } from '../../../material.module';
import { TablerIconsModule } from 'angular-tabler-icons';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';

export interface Section {
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

@Component({
  selector: 'app-form-layouts',
  standalone: true,
  imports: [MaterialModule, TablerIconsModule],
  templateUrl: './form-layouts.component.html',
})
export class AppFormLayoutsComponent implements OnInit {
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
      this.affSous(this.data);
    } else {
      console.error('No data available');
    }
  }

  affSous(id:number): void {
    this.http.get<Section>(`http://localhost:5555/api/v1/sous/found?id=${id}`)
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
