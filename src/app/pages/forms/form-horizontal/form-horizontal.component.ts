import { Component } from '@angular/core';
import { MaterialModule } from '../../../material.module';
import { TablerIconsModule } from 'angular-tabler-icons';
import { FormGroup, FormsModule, ReactiveFormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { timer } from 'rxjs';
import Swal from 'sweetalert2';

@Component({
  selector: 'app-form-horizontal',
  standalone: true,
  imports: [MaterialModule, FormsModule, ReactiveFormsModule, TablerIconsModule],
  templateUrl: './form-horizontal.component.html',
})
export class AppFormHorizontalComponent {
  form: FormGroup;
  selectedValue: number;

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
    console.log("souscription avec succès");
    Swal.fire({
      icon: "success",
      title: "Félicitations !!!",
      text: "Souscription enregistrées.",
      showConfirmButton: true,
      timer:3000
    });
  }
  constructor(private router: Router) {}
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
