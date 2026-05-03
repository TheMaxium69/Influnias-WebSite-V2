import { Component } from '@angular/core';

@Component({
  selector: 'app-services',
  templateUrl: './services.html',
  styleUrl: './services.css'
})
export class ServicesComponent {
  services = [
    { icon: 'fa-camera', title: 'Production Créative', desc: 'Organisation de shootings photo, de tournages importants, services vidéo complets, et recherche de lieux de tournage.' },
    { icon: 'fa-gear', title: 'Gestion de Projets', desc: 'Accompagnement de projets majeurs, planification d\'événements pour créateurs, et facilitation des recrutements dans divers domaines.' },
    { icon: 'fa-bullhorn', title: 'Aide à la Visibilité', desc: 'Mise en relation avec partenariats, créateurs, et influenceurs, ainsi qu\'optimisation de la visibilité et promotion de produits.' },
    { icon: 'fa-computer', title: 'Services Techniques', desc: 'Informatique personnalisée, création de musique "Libre de Droits," gestion des médias sociaux, et mise en place de la production vidéo.' },
    { icon: 'fa-magnifying-glass', title: 'Analyse et Rapports Personnalisés', desc: 'Études mensuelles des statistiques, récapitulatif des données clés, et suivi du succès du projet.' },
    { icon: 'fa-square-rss', title: 'Optimisation de Communication', desc: 'Amélioration de la communication traditionnelle et numérique sur différents canaux.' },
    { icon: 'fa-calendar-days', title: 'Organisation Administrative', desc: 'Gestion des rendez-vous et agent dédié avec FAQ.' },
    { icon: 'fa-tag', title: 'Mise en Avant des Produits', desc: 'Promotion de divers produits de créateurs.' },
    { icon: 'fa-brain', title: 'Soutien Psychologique', desc: 'Fourniture de soutien émotionnel et psychologique.' },
  ];
}
