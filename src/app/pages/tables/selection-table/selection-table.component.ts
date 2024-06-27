import { Component, OnInit } from '@angular/core';
import { SelectionModel } from '@angular/cdk/collections';
import { MatTableDataSource } from '@angular/material/table';
import { MaterialModule } from '../../../material.module';
import { CommonModule } from '@angular/common';
import { Router } from '@angular/router';
import { HttpClient } from '@angular/common/http';
import Swal from 'sweetalert2';

export interface PeriodicElement {
  id: number;
  nom: string;
  prenom: string;
}

const ELEMENT_DATA: PeriodicElement[] = [
  {
    id: 1,
    nom: 'as',
    prenom: 'Sunil Joshi',
  },
];

@Component({
  selector: 'app-selection-table',
  standalone: true,
  imports: [MaterialModule, CommonModule],
  templateUrl: './selection-table.component.html',
})
export class AppSelectionTableComponent implements OnInit {
  displayedColumns: string[] = [
    'select',
    'id',
    'nom',
    'prenom',
  ];
  dataSource = new MatTableDataSource<PeriodicElement>(ELEMENT_DATA);
  selection = new SelectionModel<PeriodicElement>(true, []);
  data: number;

  /** Whether the number of selected elements matches the total number of rows. */
  isAllSelected(): any {
    const numSelected = this.selection.selected.length;
    const numRows = this.dataSource.data.length;
    return numSelected === numRows;
  }

  /** Selects all rows if they are not all selected; otherwise clear selection. */
  masterToggle(): void {
    this.isAllSelected()
      ? this.selection.clear()
      : this.dataSource.data.forEach((row) => this.selection.select(row));
  }

  /** The label for the checkbox on the passed row */
  checkboxLabel(row?: PeriodicElement): string {
    if (!row) {
      return `${this.isAllSelected() ? 'select' : 'deselect'} all`;
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
    console.log(this.data)
    this.aff(this.data);
  }
  aff(id: number) {
    this.http.get<PeriodicElement[]>(`http://localhost:5555/api/v1/groupes/listComm?id=${id}`)
      .subscribe(
        (resultData: PeriodicElement[]) => {
          this.dataSource = new MatTableDataSource<PeriodicElement>(resultData);
        },
        (error: any) => {
          console.error(error);
        }
      );
  }

  logSelected(): void {
    const selectedElements = this.selection.selected;
    console.log('Selected elements:', selectedElements);
    this.addComm(selectedElements)
    // Here you can also perform other actions with the selected elements
  }

  addComm(sel: any): void {
    console.log("add");
    console.log(this.data);
    const id = this.data; // Assurez-vous que la variable id est correctement assignée
    this.http.post(`http://localhost:5555/api/v1/groupes/comm?id=${id}`, sel, { responseType: 'text' })
      .subscribe(
        (resultData: any) => {
          console.log(resultData);
          Swal.fire({
            position: "center",
            icon: "success",
            title: "Ajout avec succès",
            showConfirmButton: true,
          });
          this.router.navigate(['/apps/tickets'], { state: { data: id } });
        },
        (error) => {
          console.error('Erreur lors de l\'ajout du commerciale', error);
          alert('Une erreur est survenue. Veuillez réessayer plus tard.');
        }
      );
  };
  
}