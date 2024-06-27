import { HttpClient } from '@angular/common/http';
import { Component, Inject, ViewChild } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import {
  MatDialog,
  MatDialogRef,
  MAT_DIALOG_DATA,
} from '@angular/material/dialog';
import { MatMenuTrigger } from '@angular/material/menu';
import Swal from 'sweetalert2';

export interface DialogData {
  animal: 'panda' | 'unicorn' | 'lion';
}

//  1
@Component({
  selector: 'dialog-overview',
  templateUrl: 'dialog-overview.component.html',
})
export class AppDialogOverviewComponent {
  constructor(public dialogRef: MatDialogRef<AppDialogOverviewComponent>) {}
}

/**
 * @title 2 Dialog with header, scrollable content and actions
 */
@Component({
  selector: 'dialog-content',
  templateUrl: 'dialog-content.component.html',
})
export class AppDialogContentComponent {
  constructor(private http: HttpClient,
    public dialogRef: MatDialogRef<AppDialogContentComponent>) {}
  form = new FormGroup({
    dest: new FormControl('', [Validators.required]),
    obj: new FormControl('', [Validators.required]),
    msg: new FormControl('', [Validators.required]),
  });

  devis(){
    if (this.form.valid) {
      const formData = this.form.getRawValue();
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
export class AppDialogMenuComponent {}

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
