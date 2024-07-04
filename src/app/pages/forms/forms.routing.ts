import { Routes } from '@angular/router';

// Forms
import {
  AppAutocompleteComponent,
  AppButtonComponent,
  AppCheckboxComponent,
  AppDatepickerComponent,
  AppRadioComponent,
} from './form-elements';
import { AppFormHorizontalComponent } from './form-horizontal/form-horizontal.component';
import { AppFormLayoutsComponent } from './form-layouts/form-layouts.component';
import { AppFormVerticalComponent } from './form-vertical/form-vertical.component';
import { AppProspetComponent } from './prospet/prospet.component';

export const FormsRoutes: Routes = [
  {
    path: 'forms-elements',
    children: [
      {
        path: 'autocomplete',
        component: AppAutocompleteComponent,
        data: {
          title: 'Autocomplete',
          urls: [
            { title: 'Dashboard', url: '/dashboards/dashboard1' },
            { title: 'Autocomplete' },
          ],
        },
      },
      {
        path: 'button',
        component: AppButtonComponent,
        data: {
          title: 'Button',
          urls: [
            { title: 'Dashboard', url: '/dashboards/dashboard1' },
            { title: 'Button' },
          ],
        },
      },
      {
        path: 'checkbox',
        component: AppCheckboxComponent,
        data: {
          title: 'Checkbox',
          urls: [
            { title: 'Dashboard', url: '/dashboards/dashboard1' },
            { title: 'Checkbox' },
          ],
        },
      },

      {
        path: 'radio',
        component: AppRadioComponent,
        data: {
          title: 'Radio Button',
          urls: [
            { title: 'Dashboard', url: '/dashboards/dashboard1' },
            { title: 'Radio Button' },
          ],
        },
      },
      {
        path: 'datepicker',
        component: AppDatepickerComponent,
        data: {
          title: 'Datepicker',
          urls: [
            { title: 'Dashboard', url: '/dashboards/dashboard1' },
            { title: 'Datepicker' },
          ],
        },
      },
    ],
  },
  {
    path: '',
    children: [
      {
        path: 'form-layouts/:id',
        component: AppFormLayoutsComponent,
        data: {
          title: 'Souscription',
          urls: [
            { title: '', url: '/dashboards/dashboard1' },
            { title: 'Souscription' },
          ],
        },
      },
      {
        path: 'souscription',
        component: AppFormHorizontalComponent,
        data: {
          title: 'Souscription',
          urls: [
            { title: 'Dashboard', url: '/dashboards/dashboard1' },
            { title: 'Souscription' },
          ],
        },
      },
      {
        path: 'form-vertical',
        component: AppFormVerticalComponent,
        data: {
          title: 'Form Vertical',
          urls: [
            { title: 'Dashboard', url: '/dashboards/dashboard1' },
            { title: 'Form Vertical' },
          ],
        },
      },
      {
        path: 'prospet',
        component: AppProspetComponent,
        data: {
          title: 'Prospet',
          urls: [
            { title: 'Dashboard', url: '/dashboards/dashboard1' },
            { title: 'Prospet' },
          ],
        },
      },
    ],
  },
];
