import { Component } from '@angular/core';

@Component({
  selector: 'app-founders',
  templateUrl: './founders.html',
  styleUrl: './founders.css'
})
export class FoundersComponent {
  founders = [
    {
      name: 'Maxime Tournier',
      role: 'Co-fondateur & CEO',
      text: "J'ai eu l'envie de créer un projet qui révolutionnerait l'influence et l'art sur internet en France. Aujourd'hui, c'est chose faite.",
      photo: 'assets/Maxime_Tournier.jpg'
    },
    {
      name: 'Maëwan Marthelot',
      role: 'Co-fondateur',
      text: "J'ai grandi avec l'idée de créer et partager… Alors, pourquoi pas vous ? Une passion est une source infinie de motivation, alors voici la nôtre.",
      photo: 'assets/Maewan_Marthelot.jpg'
    }
  ];
}
