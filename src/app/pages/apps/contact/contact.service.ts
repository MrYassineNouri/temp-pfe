import { Injectable } from '@angular/core';
import { Group } from './contact';
import { groupList } from './contact-data';

@Injectable({
  providedIn: 'root'
})
export class ContactService {
  public Contact = groupList;
  public getContacts(): Group[] {
    return this.Contact;
  }
}
