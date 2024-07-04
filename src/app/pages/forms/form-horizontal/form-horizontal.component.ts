import { Component } from '@angular/core';
import { MaterialModule } from '../../../material.module';
import { TablerIconsModule } from 'angular-tabler-icons';
import { FormGroup, FormsModule, ReactiveFormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { timer } from 'rxjs';
import Swal from 'sweetalert2';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-form-horizontal',
  standalone: true,
  imports: [MaterialModule, FormsModule, ReactiveFormsModule, TablerIconsModule],
  templateUrl: './form-horizontal.component.html',
})
export class AppFormHorizontalComponent {
  form: FormGroup;
  selectedValue: number;
  data:any;
  prod:any;
  soc:any;

  titulaireComptePrev: string;
  ibanPrev: string;
  bicPrev: string;
  titulaireCompteRemb: string;
  ibanRemb: string;
  bicRemb: string;
  nomBanquePrev: string;
  nomBanqueRemb: string;
  typeDeContrat: string;
  fraisDeDossier: string;
  fonctionnement: string;
  moisOffert: string;
  dateDePrelevement: Date;
  modeDePaiement: string;
  compagnie: string;
  numeroClient: string;
  produit: string;
  dateEcheance: Date;
  

  ngOnInit(): void {
    const navigation = this.router.getCurrentNavigation();
    if (navigation?.extras.state) {
      this.data = navigation.extras.state['data'];
      this.prod = navigation.extras.state['produit'];
      this.soc = navigation.extras.state['societe'];
    } else {
      const historyState = window.history.state;
      this.data = historyState?.data ?? null;
      this.prod = historyState?.produit ?? null;
      this.soc = historyState?.societe ?? null;
    }
    console.log(this.data);
    console.log(this.prod);
    console.log(this.soc);
  }

  onSelectionChange(event: any): void {
    this.selectedValue = event.value;
    console.log('Selected value:', this.selectedValue);
  }
  back(){
    Swal.fire({
      icon: "error",
      title: "Oops...",
      text: "Souscription annulée !!!",
      showConfirmButton: false,
      timer:2000
    });
    this.router.navigate(['/widgets/banners']);
  }
  enreg(){
    const requestData = {
      titulaireComptePrev: this.titulaireComptePrev,
      ibanPrev: this.ibanPrev,
      bicPrev: this.bicPrev,
      titulaireCompteRemb: this.titulaireCompteRemb,
      ibanRemb: this.ibanRemb,
      bicRemb: this.bicRemb,
      nomBanquePrev: this.nomBanquePrev,
      nomBanqueRemb: this.nomBanqueRemb,
      typeDeContrat: this.typeDeContrat,
      fraisDeDossier: this.fraisDeDossier,
      fonctionnement: this.fonctionnement,
      moisOffert: this.moisOffert,
      dateDePrelevement: this.dateDePrelevement,
      modeDePaiement: this.modeDePaiement,
      compagnie: this.compagnie,
      numeroClient: this.numeroClient,
      produit: this.produit,
      dateEcheance: this.dateEcheance,
    };

    this.http.post('http://localhost:5555/api/v1/sous/sous', requestData).subscribe(
      (response:any) => {
        console.log('souscription avec succès', response);
        Swal.fire({
          icon: "success",
          title: "Félicitations !!!",
          text: "Souscription enregistrées.",
          showConfirmButton: true,
          timer: 3000
        });
      },
      (error:any) => {
        console.error('Erreur lors de la souscription', error);
      }
    );
  }
  constructor(private router: Router,private http:HttpClient) {}
  hide = true;
  hide2 = true;
  conhide = true;
  alignhide = true;

  // 3 accordian
  step = 0;

  setStep(index: number) {
    this.step = index;
  }

  nextStep() {
    this.step++;
  }

  prevStep() {
    this.step--;
  }

  panelOpenState = false;
}
