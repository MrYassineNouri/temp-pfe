import { Injectable } from '@angular/core';
import {
  ActivatedRouteSnapshot,
  CanActivate,
  RouterStateSnapshot,
  UrlTree,
  Router,
} from '@angular/router';
import { Observable } from 'rxjs';
import { AuthService } from './services/auth.service';
import Swal from 'sweetalert2';

@Injectable({
  providedIn: 'root',
})
export class HasRoleGuard implements CanActivate {
  constructor(private authService: AuthService, private router: Router) {}

  canActivate(
    route: ActivatedRouteSnapshot,
    state: RouterStateSnapshot
  ): Observable<boolean | UrlTree> | Promise<boolean | UrlTree> | boolean | UrlTree {
    const user = this.authService.getCurrentUser();
    const roles = route.data['role'] as string[];
    if (user && user.roles && roles.some(role => user.roles.includes(role))) {
      return true;
    } else {
        Swal.fire({
            position: "center",
            icon: "error",
            title: "Vous éte n'est pas authoriser..!!!",
            showConfirmButton: false,
            timer: 2000
          });     
           return false;
    }
  }
}
