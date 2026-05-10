import { Component } from '@angular/core';

@Component({
  selector: 'app-partners',
  templateUrl: './partners.html',
  styleUrl: './partners.css'
})
export class PartnersComponent {
  partners = [
    { name: 'La French Tech', logo: 'assets/frenchtechlyon.png', url: 'https://www.lafrenchtech-onelse.com/' },
    { name: 'Auvergne-Rhône-Alpes', logo: 'assets/auvergne-Rhone-Alphes.png', url: 'https://www.auvergnerhonealpes.fr/' },
    { name: 'Grand Est', logo: 'assets/grandest.png', url: 'https://www.grandest.fr/' },
    { name: 'Génération IUM', logo: 'assets/Generatium-ium.png', url: 'https://www.linkedin.com/company/génération-ium/' },
  ];
}
