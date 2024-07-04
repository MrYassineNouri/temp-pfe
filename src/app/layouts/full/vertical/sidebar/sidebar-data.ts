import { NavItem } from './nav-item/nav-item';

export const navItems: NavItem[] = [
  {
    navCap: 'Acceuil',
  },
  {
    displayName: 'Tableau de board',
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
        displayName: 'Souscription',
        iconName: 'certificate',
        route: 'tables/mix-table',
      },
      {
        displayName: 'List Contrats',
        iconName: 'signature',
        route: 'tables/sticky-header-footer-table',
      },


  
];
