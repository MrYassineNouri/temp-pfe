import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root',
})
export class AuthService {
  constructor() {}

  getCurrentUser() {
    const userData = localStorage.getItem('localUserData');
    return userData ? JSON.parse(userData) : null;
  }

  getUserRole() {
    const user = this.getCurrentUser();
    return user ? user.role : null;
  }
}