import { Component } from '@angular/core';

@Component({
  selector: 'app-partners',
  templateUrl: './partners.html',
  styleUrl: './partners.css'
})
export class PartnersComponent {
  partners = [
    { name: 'Tyrolium', logo: 'images/tyrolium.png', url: 'https://tyrolium.fr/' },
    { name: 'La French Tech', logo: 'images/frenchtechlyon.png', url: 'https://www.lafrenchtech-onelse.com/' },
    { name: 'Auvergne-Rhône-Alpes', logo: 'images/auvergne-Rhone-Alphes.png', url: 'https://www.auvergnerhonealpes.fr/' },
    { name: 'Grand Est', logo: 'images/grandest.png', url: 'https://www.grandest.fr/' },
    { name: 'Génération IUM', logo: 'images/Generatium-ium.png', url: 'https://www.linkedin.com/company/génération-ium/' },
  ];
}
