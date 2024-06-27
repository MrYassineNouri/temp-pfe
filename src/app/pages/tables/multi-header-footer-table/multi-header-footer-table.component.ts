import { Component, OnInit } from '@angular/core';
import { MaterialModule } from '../../../material.module';
import { CommonModule } from '@angular/common';
import { MatTableDataSource } from '@angular/material/table';
import { SelectionModel } from '@angular/cdk/collections';
import { Router } from '@angular/router';
import { HttpClient } from '@angular/common/http';
import Swal from 'sweetalert2';

export interface SupperviseurElement {
  id: number;
  nom: string;
  prenom: string;
}

const ELEMENT_DATA: SupperviseurElement[] = [
  {
    id: 1,
    nom: 'as',
    prenom: 'Sunil Joshi',
  },
  {
    id: 2,
    nom: 'as',
    prenom: 'Sunil Joshi',
  },
];

@Component({
  selector: 'app-multi-header-footer-table',
  standalone: true,
  imports: [MaterialModule, CommonModule],
  templateUrl: './multi-header-footer-table.component.html',
  styleUrls: ['./multi-header-footer-table.component.scss'],
})
export class AppMultiHeaderFooterTableComponent implements OnInit {

displayedColumns: string[] = [
  'select',
  'id',
  'nom',
  'prenom',
];
dataSource = new MatTableDataSource<SupperviseurElement>(ELEMENT_DATA);
selection = new SelectionModel<SupperviseurElement>(false, []);
data: number;

/** The label for the radio button on the passed row */
radioButtonLabel(row?: SupperviseurElement): string {
  if (!row) {
    return `select row`;
  }
  return `${this.selection.isSelected(row) ? 'deselect' : 'select'} row ${
    row.id + 1
  }`;
}

constructor(private router: Router, private http: HttpClient) {}

ngOnInit(): void {
  const navigation = this.router.getCurrentNavigation();
  if (navigation?.extras.state) {
    this.data = navigation.extras.state['data'];
  } else {
    // Fallback to accessing the state from the history state
    const historyState = window.history.state;
    this.data = historyState?.data ?? null;
  }
  console.log(this.data);
  this.aff(this.data);
}

aff(id: number) {
  this.http.get<SupperviseurElement[]>(`http://localhost:5555/api/v1/groupes/listSupp?id=${id}`)
    .subscribe(
      (resultData: SupperviseurElement[]) => {
        this.dataSource = new MatTableDataSource<SupperviseurElement>(resultData);
      },
      (error: any) => {
        console.error(error);
      }
    );
}

logSelected(): void {
  const selectedElement = this.selection.selected[0];
  console.log('Selected element:', selectedElement);
  this.addComm(selectedElement)
  // Here you can also perform other actions with the selected elements
}

addComm(sel: any): void {
  console.log("add");
  console.log(this.data);
  const id = this.data; // Assurez-vous que la variable id est correctement assignée
  this.http.post(`http://localhost:5555/api/v1/groupes/supp?id=${id}`, sel, { responseType: 'text' })
    .subscribe(
      (resultData: any) => {
        console.log(resultData);
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Assignement avec succès",
          showConfirmButton: true,
        });
        this.router.navigate(['/apps/tickets'], { state: { data: id } });
      },
      (error) => {
        console.error('Erreur lors de l\'assignement du superviseur', error);
        alert('Une erreur est survenue. Veuillez réessayer plus tard.');
      }
    );
}
}