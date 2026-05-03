import { Component } from '@angular/core';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.html',
  styleUrl: './contact.css'
})
export class ContactComponent {
  submitted = false;
  sending = false;

  async onSubmit(event: Event) {
    event.preventDefault();
    const form = event.target as HTMLFormElement;
    const data = new FormData(form);
    this.sending = true;
    try {
      await fetch('https://tyrolium.fr/Contenu/Php/api/influnias/api.php', {
        method: 'POST',
        body: data
      });
      this.submitted = true;
    } catch {
      this.submitted = true;
    } finally {
      this.sending = false;
    }
  }
}
