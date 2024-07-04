import { Component } from '@angular/core';
import { CoreService } from 'src/app/services/core.service';
import { FormGroup, FormControl, Validators, FormsModule, ReactiveFormsModule } from '@angular/forms';
import { Router, RouterModule } from '@angular/router';
import { CommonModule } from '@angular/common';
import { MaterialModule } from '../../../material.module';
import { HttpClient } from '@angular/common/http';
import Swal from 'sweetalert2';

@Component({
  selector: 'app-side-login',
  standalone: true,
  imports: [RouterModule, CommonModule, MaterialModule, FormsModule, ReactiveFormsModule],
  templateUrl: './side-login.component.html',
})
export class AppSideLoginComponent {
  options = this.settings.getOptions();
  message: string | null = null;
  data: any;

  constructor(private settings: CoreService, private router: Router, private http: HttpClient) { }

  form = new FormGroup({
    login: new FormControl('', [Validators.required, Validators.minLength(4)]),
    password: new FormControl('', [Validators.required]),
  });

  onSubmit() {
    if (this.form.valid) {
      const formData = this.form.getRawValue();
      this.http.post('http://localhost:5555/api/v1/auth/auth', formData, { responseType: 'text' }).subscribe(
        (resultData: string) => {
          const user = { roles: [resultData] }; // Store roles as an array
          localStorage.setItem("localUserData", JSON.stringify(user));
          this.data = resultData;
          if (resultData === "admin") {
            this.router.navigate(['/dashboards/dashboard1']);
            Swal.fire({
              position: "center",
              icon: "success",
              title: "Bienvenue..!!!",
              showConfirmButton: false,
              timer: 2000
            });
          } else if (resultData === "commercial" || resultData === "superviseur") {
            this.router.navigate(['/apps/fiches']);
            Swal.fire({
              position: "center",
              icon: "success",
              title: "Bienvenue..!!!",
              showConfirmButton: false,
              timer: 2000
            });
          } else {
            this.message = resultData;
          }
        },
        (error: any) => {
          console.error('Error:', error);
          this.message = "Une erreur est servenue.essayer de nouveau s'il vous plait.";
        }
      );
    } else {
      this.message = "Invalid form";
    }
  }
}