import { Component, computed, inject } from '@angular/core';
import { TyroUiLangService } from 'tyrolium-ui';

@Component({
  selector: 'app-founders',
  templateUrl: './founders.html',
  styleUrl: './founders.css'
})
export class FoundersComponent {
  readonly lang = inject(TyroUiLangService).lang;

  readonly founders = computed(() => this.lang() === 'en' ? [
    {
      name: 'Maxime Tournier',
      role: 'Co-founder & CEO',
      text: "I wanted to create a project that would revolutionize influence and art on the internet in France. Today, it's done.",
      photo: 'assets/founders/Maxime_Tournier.jpg'
    },
    {
      name: 'Maëwan Marthelot',
      role: 'Co-founder',
      text: "I grew up with the idea of creating and sharing… So, why not you? Passion is an endless source of motivation - here's ours.",
      photo: 'assets/founders/Maewan_Marthelot.jpg'
    }
  ] : [
    {
      name: 'Maxime Tournier',
      role: 'Co-fondateur & CEO',
      text: "J'ai eu l'envie de créer un projet qui révolutionnerait l'influence et l'art sur internet en France. Aujourd'hui, c'est chose faite.",
      photo: 'assets/founders/Maxime_Tournier.jpg'
    },
    {
      name: 'Maëwan Marthelot',
      role: 'Co-fondateur',
      text: "J'ai grandi avec l'idée de créer et partager… Alors, pourquoi pas vous ? Une passion est une source infinie de motivation, alors voici la nôtre.",
      photo: 'assets/founders/Maewan_Marthelot.jpg'
    }
  ]);
}
