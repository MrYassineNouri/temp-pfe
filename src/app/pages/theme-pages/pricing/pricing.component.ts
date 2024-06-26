import { Component, TrackByFunction } from '@angular/core';
import { MatDialog } from '@angular/material/dialog';
import { AppDialogContentComponent } from '../../ui-components/dialog/dialog.component';

// card 1
interface rules {
  title: string;
  limit: boolean;
}

interface pricecards {
  id: number;
  imgSrc: string;
  plan: string;
  btnText: string;
  free: boolean;
  planPrice?: Number;
  popular?: boolean;
  rules: rules[];
}

@Component({
  selector: 'app-pricing',
  templateUrl: './pricing.component.html',
  styleUrls: ['./pricing.component.scss'],
})
export class AppPricingComponent {
  dataSource: any[] = [];
  selectedRows: any;
show: any;
trackByPlan: TrackByFunction<any>;


 /* displayedColumns = ['item', 'cost'];

 openHeaderDialog() {
    const dialogRef = this.dialog.open(AppDialogContentComponent);

    dialogRef.afterClosed().subscribe((result) => {
      console.log(`Dialog result: ${result}`);
    });
  }
  transactions: Transaction[] = [
    { img: '/assets/images/products/s1.jpg', item: 'Beach ball', cost: 4 },
    { img: '/assets/images/products/s2.jpg', item: 'Towel', cost: 5 },
    { img: '/assets/images/products/s3.jpg', item: 'Frisbee', cost: 2 },
    { img: '/assets/images/products/s4.jpg', item: 'Sunscreen', cost: 4 },
    { img: '/assets/images/products/s5.jpg', item: 'Cooler', cost: 25 },
    { img: '/assets/images/products/s6.jpg', item: 'Swim suit', cost: 15 },
  ]; 

  /** Gets the total cost of all transactions.
  getTotalCost(): any {
    return this.transactions
      .map((t) => t.cost)
      .reduce((acc, value) => acc + value, 0);
  } */
  
  
  constructor(private dialog: MatDialog) {}
  openDialog() {
    console.log("fgvhbjnk")
      const dialogRef = this.dialog.open(AppDialogContentComponent);
      console.log("rdfghnjk")
      dialogRef.afterClosed().subscribe((result: any) => {
        console.log(`Dialog result: ${result}`);
      });
    }
  

  ngOnInit() {
    this.selectedRows = history.state.selectedRows || [];
    this.dataSource = this.selectedRows;
  }
}
