import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

export interface Section {
  libelle: string;
  code: string;
  options: string[];
  renforts: string[] | null;
  produit: string | null;
}

export interface Option {
  ordre: number;
  id: any; // ajuster le type en fonction de votre structure de données
  libelle_option_long: string;
  libelle_option_court: string;
  code_option: string;
}

export interface Renfort {
  id: any; // ajuster le type en fonction de votre structure de données
  options: Option[];
  libelle_combinaison_long: string;
  libelle_combinaison_court: string;
  code_combinaison: string;
}

@Component({
  selector: 'app-lists',
  templateUrl: './lists.component.html',
})
export class AppListsComponent implements OnInit {
  folders: Section[] = [];
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
      console.log(this.data.soc);
      this.det(this.data);
    } else {
      console.error('No data available');
    }
  }

  det(d: any): void {
    if (d.soc === "Apivia") {
      this.affProd(d.nom);
    } else if (d.soc === "Zenioo") {
      this.affProdZen(d.code);
    }else if (d.soc === "Néoliane") {
      this.affProdNeo(d.nom);
    }
  }

  affProd(nom: string): void {
    this.http.get<Section[]>(`http://localhost:5555/api/v1/prods/detail?nom=${nom}`)
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

  affProdZen(nom: string): void {
    console.log(nom);
    this.http.get<any[]>(`http://localhost:5555/api/v1/prods/det?code=${nom}`)
      .subscribe(
        (resultData) => {
          console.log(resultData);
  
          // Mapping des données reçues dans la structure Section
          this.folders = resultData.map(item => ({
            libelle: item.libelle_formule_long,
            code: item.code_formule,
            options: item.options.map((opt: any) => opt.libelle_option_long),
            renforts: item.renforts.map((ren: any) => ren.libelle_combinaison_long),
            produit: item.produit
          }));
  
          console.log(this.folders);
        },
        (error) => {
          console.error(error);
        }
      );
  }
  
  affProdNeo(nom: string): void {
    console.log(nom)
    this.http.get<any[]>(`http://localhost:5555/api/v1/prods/deta?nom=${nom}`)
      .subscribe(
        (resultData) => {
          console.log(resultData);
  
          // Mapping des données reçues dans la structure Section
          this.folders = resultData.map(item => ({
            libelle: item.gammeLabel,
            code: item.gammeId,
            options: item.options,
            renforts: item.renforts,
            produit: item.produit
          }));
  
          console.log(this.folders);
        },
        (error) => {
          console.error(error);
        }
      );
  }

}