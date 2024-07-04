import { NgModule } from '@angular/core';
import { RouterModule } from '@angular/router';
import { CommonModule, DatePipe } from '@angular/common';
import { StarterComponent } from './starter/starter.component';
import { PagesRoutes } from './pages.routing.module';
import { MaterialModule } from '../material.module';
import { FormsModule } from '@angular/forms';
import { MatNativeDateModule } from '@angular/material/core';

@NgModule({
  imports: [
    CommonModule,
    MaterialModule,
    FormsModule,
    MatNativeDateModule,
    RouterModule.forChild(PagesRoutes),
    StarterComponent
  ],
  providers: [
    DatePipe,
    // other providers
  ],
})
export class PagesModule {}
