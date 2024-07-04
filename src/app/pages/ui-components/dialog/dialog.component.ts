import { DatePipe } from '@angular/common';
import { HttpClient } from '@angular/common/http';
import { Component, Inject, Optional, ViewChild } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import {
  MatDialog,
  MatDialogRef,
  MAT_DIALOG_DATA,
} from '@angular/material/dialog';
import { MatMenuTrigger } from '@angular/material/menu';
import Swal from 'sweetalert2';
import { Invoice } from '../../apps/invoice/invoice-list/invoice';
import { AppInvoiceDialogContentComponent } from '../../apps/invoice/invoice-list/invoice-list.component';

export interface DialogData {
  animal: 'panda' | 'unicorn' | 'lion';
}

//  1
@Component({
  selector: 'dialog-overview',
  templateUrl: 'dialog-overview.component.html',
})
export class AppDialogOverviewComponent {
  action: string;
  effectDatePicker: any;
  local_data: any;
  selectedImage: any = '';
  joiningDate: any = '';

  constructor(
    public datePipe: DatePipe,
    public dialogRef: MatDialogRef<AppDialogOverviewComponent>,
    @Optional() @Inject(MAT_DIALOG_DATA) public data: any,
  ) {
    this.local_data = { ...data };
    this.action = this.local_data.action;
    if (this.local_data.DateOfJoining !== undefined) {
      this.joiningDate = this.datePipe.transform(
        new Date(this.local_data.DateOfJoining),
        'yyyy-MM-dd',
      );
    }
    if (this.local_data.imagePath === undefined) {
      this.local_data.imagePath = 'assets/images/profile/user-1.jpg';
    }
  }

  doAction(): void {
    Swal.fire({
      position: "center",
      icon: "success",
      title: "Modification avec succès",
      showConfirmButton: false,
      timer: 5000
    });
    this.dialogRef.close({ event: this.action, data: this.local_data });
    
  }

  closeDialog(): void {
    this.dialogRef.close({ event: 'Cancel' });
  }
}

/**
 * @title 2 Dialog with header, scrollable content and actions
 */
@Component({
  selector: 'dialog-content',
  templateUrl: 'dialog-content.component.html',
})
export class AppDialogContentComponent {
  prods: string[];
constructor(
  private http: HttpClient,
  public dialogRef: MatDialogRef<AppDialogContentComponent>,
  @Inject(MAT_DIALOG_DATA) public data: { prods: string[] }
) {
  this.prods = data.prods;
}

form = new FormGroup({
  dest: new FormControl('', [Validators.required]),
  obj: new FormControl('', [Validators.required]),
  msg: new FormControl('', [Validators.required]),
});

devis() {
  if (this.form.valid) {
    const formData = this.form.getRawValue();
    formData.msg = this.constructMessage(); // Set the message with selected products
    this.http.post('http://localhost:5555/api/v1/sous/dev', formData, { responseType: 'text' }).subscribe(
      (resultData: any) => {
        const Toast = Swal.mixin({
          toast: true,
          position: "center",
          showConfirmButton: false,
          timer: 4000,
          timerProgressBar: true,
        });
        Toast.fire({
          iconHtml: '<i-tabler name="send" class="icon-18 d-flex align-items-center"></i-tabler>',
          title: "Envois en cours..."
        });
        this.dialogRef.close();
      },
      (error: any) => {
        console.error('Error:', error);
        alert("An error occurred. Please try again later.");
      }
    );
  } else {
    alert("Invalid form");
  }
}

private constructMessage(): string {
  let message = `<p>Bonjour Mr./Mme,

              Veuillez trouver ci-joint votre étude personnalisée mutuelle individuelle. Devis
              Vous pouvez consulter la documentation en ligne :
              Les produits choisis, Conditions générales, Document d’information sur le produit d’assurance (IPID)
             Dans le cadre de la loi Naegelen, la souscription de notre proposition d'assurance ne pourra être effectuée que dans un délai de 24h.
              Nous avons le plaisir de vous faire parvenir votre étude personnalisée mutuelle individuelle .
              Ce projet vous est donné à titre indicatif et n’a aucune valeur contractuelle.
              Il se base sur les informations que vous nous avez communiquées et du tarif en vigueur à la date du projet. 
              Nous vous précisons que les cotisations et garanties indiquées ci-après demeurent subordonnées à l'acceptation de votre dossier.
              Cordialement, <br>
  </p>`;

  if (this.prods.includes('Neoliane Plenitude')) {
    message += `<p>Neoliane Plenitude:</p>` + this.constructLinks([
      './assets/kit_neo/plent/plaquette-neoliane-667.pdf',
            './assets/kit_neo/plent/cgv-neoliane-667.pdf',
            './assets/kit_neo/plent/ipid-neoliane-667.pdf',
            './assets/kit_neo/plent/ba-neoliane-667.pdf'
    ]);
  }
  if (this.prods.includes('Neoliane Tonik')) {
    message += `<p>Neoliane Tonik:</p>` + this.constructLinks([
      './assets/kit_neo/tonik/ba-neoliane-654.pdf',
      './assets/kit_neo/tonik/plaquette-neoliane-654.pdf',
      './assets/kit_neo/tonik/ipid-neoliane-654.pdf',
      './assets/kit_neo/tonik/cgv-neoliane-654.pdf'
    ]);
  }
  if (this.prods.includes("Neoliane Innov'Sante")) {
    message += `<p>Neoliane Innov'Sante:</p>` + this.constructLinks([
      './assets/kit_neo/kit innov sante/plaquette-neoliane-668.pdf',
            './assets/kit_neo/kit innov sante/ipid-neoliane-668.pdf',
            './assets/kit_neo/kit innov sante/ba-neoliane-668.pdf',
            './assets/kit_neo/kit innov sante/cgv-neoliane-668.pdf'
    ]);
  }
  if (this.prods.includes("Neoliane Optima")) {
    message += `<p>Neoliane Optima:</p>` + this.constructLinks([
      './assets/kit_neo/KIT MAJ OPTIMA/Fiche produit.pdf',
          './assets/kit_neo/KIT MAJ OPTIMA/LV OPTIMA 2022 - 2023 V08.2022_BD.pdf',
        './assets/kit_neo/KIT MAJ OPTIMA/BA NEOLIANE OPTIMA V08.2022_BD.pdf'
    ]);
  }
  if (this.prods.includes("Néoliane Quietude")) {
    message += `<p>Néoliane Quietude:</p>` + this.constructLinks([
      './assets/kit_neo/quit/ba-neoliane-657.pdf',
            './assets/kit_neo/quit/plaquette-neoliane-657.pdf',
            './assets/kit_neo/quit/ipid-neoliane-657.pdf',
            './assets/kit_neo/quit/cgv-neoliane-657.pdf'
    ]);
  }
  if (this.prods.includes("Néoliane Dynamique")) {
    message += `<p>Néoliane Dynamique:</p>` + this.constructLinks([
      './assets/kit_neo/kit dyna/plaquette-neoliane-660.pdf',
            './assets/kit_neo/kit dyna/ba-neoliane-660.pdf',
            './assets/kit_neo/kit dyna/cgv-neoliane-660.pdf',
            './assets/kit_neo/kit dyna/ipid-neoliane-660.pdf'
    ]);
  }
  if (this.prods.includes("Néoliane Performance")) {
    message += `<p>Néoliane Performance:</p>` + this.constructLinks([
      './assets/kit_neo/perf/ni-neoliane-661.pdf',
            './assets/kit_neo/perf/plaquette-neoliane-661.pdf',
            './assets/kit_neo/perf/ba-neoliane-661.pdf',
            './assets/kit_neo/perf/ipid-neoliane-661.pdf'
    ]);
  }
  if (this.prods.includes("Néoliane HospiSante")) {
    message += `<p>Néoliane HospiSante:</p>` + this.constructLinks([
      './assets/kit_neo/kit hospi sante/ipid-neoliane-671.pdf',
      './assets/kit_neo/kit hospi sante/plaquette-neoliane-671.pdf',
      './assets/kit_neo/kit hospi sante/cgv-neoliane-671.pdf',
      './assets/kit_neo/kit hospi sante/ba-neoliane-671.pdf'
    ]);
  }
  if (this.prods.includes("Neoliane AltoSante")) {
    message += `<p>Neoliane AltoSante:</p>` + this.constructLinks([
      './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/ipid-neoliane-687.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/ba-neoliane-687.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/ni-neoliane-687.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/plaquette-neoliane-687.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/TG-COMPLET NEOLIANE ALTOSANTE V10.2023.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/IPID NEOLIANE ALTOSANTE V10.2023.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/BA SEUL NEOLIANE ALTOSANTE V10.2023.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/NI + IPID NEOLIANE ALTOSANTE V10.2023.pdf',
            './assets/kit_neo/KIT CRM - NEOLIANE ALTOSANTE/MANDAT SEPA - NEOLIANE ALTOSANTE V10.2023.pdf'
    ]);
  }
  if (this.prods.includes("Sakifo3")) {
    message += `<p>Sakifo3:</p>` + this.constructLinks([
      './assets/APIVIA/sakifo3/ipid-apivia-sakim3.pdf',
              './assets/APIVIA/sakifo3/ba-apivia-sakim3.pdf',
              './assets/APIVIA/sakifo3/cgv-apivia-sakim3.pdf',
              './assets/APIVIA/sakifo3/plaquette-apivia-sakim3.pdf'
    ]);
  }
  if (this.prods.includes("Sakifo3 - HOSPI")) {
    message += `<p>Sakifo3 - HOSPI:</p>` + this.constructLinks([
      './assets/APIVIA/Sakifo Hospi 3/ipid-apivia-sakih3.pdf',
              './assets/APIVIA/Sakifo Hospi 3/ba-apivia-sakih3.pdf',
              './assets/APIVIA/Sakifo Hospi 3/cgv-apivia-sakih3.pdf',
              './assets/APIVIA/Sakifo Hospi 3/plaquette-apivia-sakih3.pdf'
    ]);
  }
  if (this.prods.includes("Sakifo3 - PRO")) {
    message += `<p>Sakifo3 - PRO:</p>` + this.constructLinks([
      './assets/APIVIA/Sakifo Pro 3/ipid-apivia-sakit3.pdf',
              './assets/APIVIA/Sakifo Pro 3/ba-apivia-sakit3.pdf',
              './assets/APIVIA/Sakifo Pro 3/cgv-apivia-sakit3.pdf',
              './assets/APIVIA/Sakifo Pro 3/plaquette-apivia-sakit3.pdf'
    ]);
  }
  if (this.prods.includes("Vitamin3")) {
    message += `<p>Vitamin3:</p>` + this.constructLinks([
      './assets/APIVIA/Vitamin\' 3/ipid-apivia-vitamm3.pdf',
              './assets/APIVIA/Vitamin\' 3/ba-apivia-vitamm3.pdf',
              './assets/APIVIA/Vitamin\' 3/cgv-apivia-vitamm3.pdf',
              './assets/APIVIA/Vitamin\' 3/plaquette-apivia-vitamm3.pdf'
    ]);
  }
  if (this.prods.includes("Vitamin3 - HOSPI")) {
    message += `<p>Vitamin3 - HOSPI:</p>` + this.constructLinks([
      './assets/APIVIA/Vitamin\' Hospi 3/ipid-apivia-vitamh3.pdf',
      './assets/APIVIA/Vitamin\' Hospi 3/ba-apivia-vitamh3.pdf',
      './assets/APIVIA/Vitamin\' Hospi 3/cgv-apivia-vitamh3.pdf',
      './assets/APIVIA/Vitamin\' Hospi 3/plaquette-apivia-vitamh3.pdf'
    ]);
  }
  if (this.prods.includes("Vitamin3 - PRO")) {
    message += `<p>Vitamin3 - PRO:</p>` + this.constructLinks([
      './assets/APIVIA/Vitamin\' Pro 3/ipid-apivia-vitamt3.pdf',
              './assets/APIVIA/Vitamin\' Pro 3/ba-apivia-vitamt3.pdf',
              './assets/APIVIA/Vitamin\' Pro 3/cgv-apivia-vitamt3.pdf',
              './assets/APIVIA/Vitamin\' Pro 3/plaquette-apivia-vitamt3.pdf'
    ]);
  }
  if (this.prods.includes("Zen Santé Intégrale 55+")) {
    message += `<p>Zen Santé Intégrale 55+:</p>` + this.constructLinks([
      './assets/Zenioo/Zen Santé Intégrale 55 +/ipid-zenioo-p50.pdf',
                './assets/Zenioo/Zen Santé Intégrale 55 +/notice-zenioo-p50.pdf',
                './assets/Zenioo/Zen Santé Intégrale 55 +/ba-zenioo-p50.pdf',
                './assets/Zenioo/Zen Santé Intégrale 55 +/ni-zenioo-p50.pdf',
                './assets/Zenioo/Zen Santé Intégrale 55 +/plaquette-zenioo-p50.pdf'
    ]);
  }
  if (this.prods.includes("Zen Santé Intégrale Famille")) {
    message += `<p>Zen Santé Intégrale Famille:</p>` + this.constructLinks([
      './assets/Zenioo/Zen Santé Intégrale Famille/ipid-zenioo-p60.pdf',
                  './assets/Zenioo/Zen Santé Intégrale Famille/notice-zenioo-p60.pdf',
                  './assets/Zenioo/Zen Santé Intégrale Famille/ba-zenioo-p60.pdf',
                  './assets/Zenioo/Zen Santé Intégrale Famille/ni-zenioo-p60.pdf',
                  './assets/Zenioo/Zen Santé Intégrale Famille/plaquette-zenioo-p60.pdf'
    ]);
  }
  if (this.prods.includes("Zen Santé Senior")) {
    message += `<p>Zen Santé Senior:</p>` + this.constructLinks([
      './assets/Zenioo/Zen Santé Senior/ipid-zenioo-p11.pdf',
                    './assets/Zenioo/Zen Santé Senior/notice-zenioo-p11.pdf',
                    './assets/Zenioo/Zen Santé Senior/ba-zenioo-p11.pdf',
                    './assets/Zenioo/Zen Santé Senior/ni-zenioo-p11.pdf',
                    './assets/Zenioo/Zen Santé Senior/plaquette-zenioo-p11.pdf'
    ]);
  }
  return message;
}

private constructLinks(links: string[]): string {
  let linksHtml = '';
  links.forEach(link => {
    const fileName = link.split('/').pop(); // Extract file name from link
    linksHtml += `<br><a href="${link}" target="_blank">${fileName}</a>`;
  });
  return linksHtml;
}


}

// 3
@Component({
  selector: 'dialog-data-example-dialog',
  templateUrl: 'dialog-data.component.html',
})
export class AppDialogDataComponent {
  constructor(@Inject(MAT_DIALOG_DATA) public data: DialogData) {}
}

// 4
@Component({
  selector: 'dialog-menu',
  templateUrl: 'dialog-menu.component.html',
})
export class AppDialogMenuComponent {
  
}

@Component({
  selector: 'app-dialog',
  templateUrl: './dialog.component.html',
})
export class AppDialogComponent {
  // 4
  @ViewChild('menuTrigger') menuTrigger: MatMenuTrigger;

  constructor(public dialog: MatDialog) {}

  // 1
  openDialog(
    enterAnimationDuration: string,
    exitAnimationDuration: string
  ): void {
    this.dialog.open(AppDialogOverviewComponent, {
      width: '290px',
      enterAnimationDuration,
      exitAnimationDuration,
    });
  } 

  // 2
  openHeaderDialog() {
    const dialogRef = this.dialog.open(AppDialogContentComponent);

    dialogRef.afterClosed().subscribe((result) => {
      console.log(`Dialog result: ${result}`);
    });
  }

  // 3
  openInjectDialog() {
    this.dialog.open(AppDialogDataComponent, {
      data: {
        animal: 'panda',
      },
    });
  }

  // 4

  openMenuDialog() {
    const dialogRef = this.dialog.open(AppDialogMenuComponent, {
      restoreFocus: false,
    });

    // Manually restore focus to the menu trigger since the element that
    // opens the dialog won't be in the DOM any more when the dialog closes.
    dialogRef.afterClosed().subscribe(() => this.menuTrigger.focus());
  }
}
