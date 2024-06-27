import { NavItem } from './nav-item/nav-item';

export const navItems: NavItem[] = [
  {
    navCap: 'Home',
  },
  {
    displayName: 'Dashboard',
    iconName: 'aperture',
    route: '/dashboards/dashboard1',
  },
  {
    displayName: 'Comptes',
    iconName: 'users',
    route: 'apps/employee',
  },
  {
    displayName: 'Groupes',
    iconName: 'users-group',
    route: 'apps/groups',
  },
  {
    displayName: 'Prospet',
    iconName: 'files',
    route: '/forms/prospet',
  },
  {
    displayName: 'List des fiches',
    iconName: 'file-invoice',
    route: 'apps/fiches',
  },
  {
    displayName: 'Produits',
    iconName: 'basket',
    route: 'apps/produits',
  },
 

  {
        displayName: 'Tarificateur',
        iconName: 'signature',
        route: 'widgets/banners',
  },
  {
    displayName: 'Souscription',
    iconName: 'certificate',
    route: '/forms/souscription',
  },

  {
    navCap: 'Tables',
  },
  {
    displayName: 'Tables',
    iconName: 'layout',
    route: 'tables',
    children: [
      {
        displayName: 'Basic Table',
        iconName: 'point',
        route: 'tables/basic-table',
      },
      {
        displayName: 'Dynamic Table',
        iconName: 'point',
        route: 'tables/dynamic-table',
      },
      {
        displayName: 'Expand Table',
        iconName: 'point',
        route: 'tables/expand-table',
      },
      {
        displayName: 'Filterable Table',
        iconName: 'point',
        route: 'tables/filterable-table',
      },
      {
        displayName: 'Footer Row Table',
        iconName: 'point',
        route: 'tables/footer-row-table',
      },
      {
        displayName: 'HTTP Table',
        iconName: 'point',
        route: 'tables/http-table',
      },
      {
        displayName: 'Mix Table',
        iconName: 'point',
        route: 'tables/mix-table',
      },
      {
        displayName: 'Multi Header Footer',
        iconName: 'point',
        route: 'tables/multi-header-footer-table',
      },
      {
        displayName: 'Pagination Table',
        iconName: 'point',
        route: 'tables/pagination-table',
      },
      {
        displayName: 'Row Context Table',
        iconName: 'point',
        route: 'tables/row-context-table',
      },
      {
        displayName: 'Selection Table',
        iconName: 'point',
        route: 'tables/selection-table',
      },
      {
        displayName: 'Sortable Table',
        iconName: 'point',
        route: 'tables/sortable-table',
      },
      {
        displayName: 'Sticky Column',
        iconName: 'point',
        route: 'tables/sticky-column-table',
      },
      {
        displayName: 'Sticky Header Footer',
        iconName: 'point',
        route: 'tables/sticky-header-footer-table',
      },
    ],
  },
  {
    displayName: 'Data table',
    iconName: 'border-outer',
    route: '/datatable/kichen-sink',
  },
];
