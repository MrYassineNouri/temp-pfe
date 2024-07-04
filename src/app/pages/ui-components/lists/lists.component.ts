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
  getPdfUrl(): string [] {
    switch (this.data.nom) {
      case 'Neoliane Optima':
        return ['./assets/kit_neo/KIT MAJ OPTIMA/Fiche produit.pdf',
          './assets/kit_neo/KIT MAJ OPTIMA/LV OPTIMA 2022 - 2023 V08.2022_BD.pdf',
        './assets/kit_neo/KIT MAJ OPTIMA/BA NEOLIANE OPTIMA V08.2022_BD.pdf'];
      case 'Neoliane Tonik':
        return [
          './assets/kit_neo/tonik/ba-neoliane-654.pdf',
          './assets/kit_neo/tonik/plaquette-neoliane-654.pdf',
          './assets/kit_neo/tonik/ipid-neoliane-654.pdf',
          './assets/kit_neo/tonik/cgv-neoliane-654.pdf'
        ];
      case 'Néoliane Quietude':
          return [
            './assets/kit_neo/quit/ba-neoliane-657.pdf',
            './assets/kit_neo/quit/plaquette-neoliane-657.pdf',
            './assets/kit_neo/quit/ipid-neoliane-657.pdf',
            './assets/kit_neo/quit/cgv-neoliane-657.pdf'
          ];
      case 'Néoliane Dynamique':
          return [
            './assets/kit_neo/kit dyna/plaquette-neoliane-660.pdf',
            './assets/kit_neo/kit dyna/ba-neoliane-660.pdf',
            './assets/kit_neo/kit dyna/cgv-neoliane-660.pdf',
            './assets/kit_neo/kit dyna/ipid-neoliane-660.pdf'
          ];
      case 'Néoliane Performance':
          return [
            './assets/kit_neo/perf/ni-neoliane-661.pdf',
            './assets/kit_neo/perf/plaquette-neoliane-661.pdf',
            './assets/kit_neo/perf/ba-neoliane-661.pdf',
            './assets/kit_neo/perf/ipid-neoliane-661.pdf'
          ];
      case 'Neoliane Plenitude':
          return [
            './assets/kit_neo/plent/plaquette-neoliane-667.pdf',
            './assets/kit_neo/plent/cgv-neoliane-667.pdf',
            './assets/kit_neo/plent/ipid-neoliane-667.pdf',
            './assets/kit_neo/plent/ba-neoliane-667.pdf'
          ];
      case 'Neoliane Innov\'Sante':
          return [
            './assets/kit_neo/kit innov sante/plaquette-neoliane-668.pdf',
            './assets/kit_neo/kit innov sante/ipid-neoliane-668.pdf',
            './assets/kit_neo/kit innov sante/ba-neoliane-668.pdf',
            './assets/kit_neo/kit innov sante/cgv-neoliane-668.pdf'
          ];
      case 'Néoliane HospiSante':
          return [
            './assets/kit_neo/kit hospi sante/ipid-neoliane-671.pdf',
            './assets/kit_neo/kit hospi sante/plaquette-neoliane-671.pdf',
            './assets/kit_neo/kit hospi sante/cgv-neoliane-671.pdf',
            './assets/kit_neo/kit hospi sante/ba-neoliane-671.pdf'
          ];
      case 'Neoliane AltoSante':
          return [
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/ipid-neoliane-687.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/ba-neoliane-687.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/ni-neoliane-687.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/plaquette-neoliane-687.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/TG-COMPLET NEOLIANE ALTOSANTE V10.2023.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/IPID NEOLIANE ALTOSANTE V10.2023.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/BA SEUL NEOLIANE ALTOSANTE V10.2023.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/NI + IPID NEOLIANE ALTOSANTE V10.2023.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/MANDAT SEPA - NEOLIANE ALTOSANTE V10.2023.pdf'
          ];
      case 'Sakifo3':
            return [
              './assets/APIVIA/sakifo3/ipid-apivia-sakim3.pdf',
              './assets/APIVIA/sakifo3/ba-apivia-sakim3.pdf',
              './assets/APIVIA/sakifo3/cgv-apivia-sakim3.pdf',
              './assets/APIVIA/sakifo3/plaquette-apivia-sakim3.pdf'
            ];
      case 'Sakifo3 - HOSPI':
            return [
              './assets/APIVIA/Sakifo Hospi 3/ipid-apivia-sakih3.pdf',
              './assets/APIVIA/Sakifo Hospi 3/ba-apivia-sakih3.pdf',
              './assets/APIVIA/Sakifo Hospi 3/cgv-apivia-sakih3.pdf',
              './assets/APIVIA/Sakifo Hospi 3/plaquette-apivia-sakih3.pdf'
            ];
      case 'Sakifo3 - PRO':
            return [
              './assets/APIVIA/Sakifo Pro 3/ipid-apivia-sakit3.pdf',
              './assets/APIVIA/Sakifo Pro 3/ba-apivia-sakit3.pdf',
              './assets/APIVIA/Sakifo Pro 3/cgv-apivia-sakit3.pdf',
              './assets/APIVIA/Sakifo Pro 3/plaquette-apivia-sakit3.pdf'
            ];
      case 'Vitamin3':
            return [
              './assets/APIVIA/Vitamin\' 3/ipid-apivia-vitamm3.pdf',
              './assets/APIVIA/Vitamin\' 3/ba-apivia-vitamm3.pdf',
              './assets/APIVIA/Vitamin\' 3/cgv-apivia-vitamm3.pdf',
              './assets/APIVIA/Vitamin\' 3/plaquette-apivia-vitamm3.pdf'
            ];
      case 'Vitamin3 - HOSPI':
            return [
              './assets/APIVIA/Vitamin\' Hospi 3/ipid-apivia-vitamh3.pdf',
              './assets/APIVIA/Vitamin\' Hospi 3/ba-apivia-vitamh3.pdf',
              './assets/APIVIA/Vitamin\' Hospi 3/cgv-apivia-vitamh3.pdf',
              './assets/APIVIA/Vitamin\' Hospi 3/plaquette-apivia-vitamh3.pdf'
            ];
      case 'Vitamin3 - PRO':
            return [
              './assets/APIVIA/Vitamin\' Pro 3/ipid-apivia-vitamt3.pdf',
              './assets/APIVIA/Vitamin\' Pro 3/ba-apivia-vitamt3.pdf',
              './assets/APIVIA/Vitamin\' Pro 3/cgv-apivia-vitamt3.pdf',
              './assets/APIVIA/Vitamin\' Pro 3/plaquette-apivia-vitamt3.pdf'
            ];
      case 'Zen Santé Intégrale 55+':
              return [
                './assets/Zenioo/Zen Santé Intégrale 55 +/ipid-zenioo-p50.pdf',
                './assets/Zenioo/Zen Santé Intégrale 55 +/notice-zenioo-p50.pdf',
                './assets/Zenioo/Zen Santé Intégrale 55 +/ba-zenioo-p50.pdf',
                './assets/Zenioo/Zen Santé Intégrale 55 +/ni-zenioo-p50.pdf',
                './assets/Zenioo/Zen Santé Intégrale 55 +/plaquette-zenioo-p50.pdf'
              ];
      case 'Zen Santé Intégrale Famille':
                return [
                  './assets/Zenioo/Zen Santé Intégrale Famille/ipid-zenioo-p60.pdf',
                  './assets/Zenioo/Zen Santé Intégrale Famille/notice-zenioo-p60.pdf',
                  './assets/Zenioo/Zen Santé Intégrale Famille/ba-zenioo-p60.pdf',
                  './assets/Zenioo/Zen Santé Intégrale Famille/ni-zenioo-p60.pdf',
                  './assets/Zenioo/Zen Santé Intégrale Famille/plaquette-zenioo-p60.pdf'
                ]; 
      case 'Zen Santé Sénior':
                  return [
                    './assets/Zenioo/Zen Santé Senior/ipid-zenioo-p11.pdf',
                    './assets/Zenioo/Zen Santé Senior/notice-zenioo-p11.pdf',
                    './assets/Zenioo/Zen Santé Senior/ba-zenioo-p11.pdf',
                    './assets/Zenioo/Zen Santé Senior/ni-zenioo-p11.pdf',
                    './assets/Zenioo/Zen Santé Senior/plaquette-zenioo-p11.pdf'
                  ];                             
      default:
        return ['INTROUVABLE'];
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