import { Component } from '@angular/core';

@Component({
  selector: 'app-founders',
  templateUrl: './founders.html',
  styleUrl: './founders.css'
})
export class FoundersComponent {
  activeIndex = 0;

  founders = [
    {
      name: 'Maxime Tournier',
      text: "J'ai eu l'envie de créer un projet qui révolutionnerait l'influence et l'art sur internet en France. Aujourd'hui, c'est chose faite.",
      photo: 'images/Maxime_Tournier.jpg'
    },
    {
      name: 'Maëwan Marthelot',
      text: "J'ai grandi avec l'idée de créer et partager… Alors, pourquoi pas vous ? Une passion est une source infinie de motivation, alors voici la nôtre.",
      photo: 'images/Maewan_Marthelot.jpg'
    }
  ];

  prev() {
    this.activeIndex = (this.activeIndex - 1 + this.founders.length) % this.founders.length;
  }

  next() {
    this.activeIndex = (this.activeIndex + 1) % this.founders.length;
  }

  goTo(i: number) {
    this.activeIndex = i;
  }
}
