import { Routes } from '@angular/router';

// widgets
import { AppBannersComponent } from './banners/banners.component';
import { AppCardsComponent } from './cards/cards.component';
import { AppChartsComponent } from './charts/charts.component';

export const WidgetsRoutes: Routes = [
  {
    path: '',
    children: [
      {
        path: 'banners',
        component: AppBannersComponent,
        data: {
          title: 'Trificateur',
          urls: [
            { title: '', url: '/dashboards/dashboard1' },
            { title: 'Tarificateur' },
          ],
        },
      },
      {
        path: 'cards',
        component: AppCardsComponent,
        data: {
          title: 'Cards',
          urls: [
            { title: 'Dashboard', url: '/dashboards/dashboard1' },
            { title: 'Cards' },
          ],
        },
      },
      {
        path: 'charts',
        component: AppChartsComponent,
        data: {
          title: 'Charts',
          urls: [
            { title: 'Dashboard', url: '/dashboards/dashboard1' },
            { title: 'Charts' },
          ],
        },
      },
    ],
  },
];
