import { Component, computed, inject } from '@angular/core';
import { ITyroUiNavbarPages, TyroUiFooter, TyroUiLangService, TyroUiNavbar } from 'tyrolium-ui';
import {RouterOutlet} from "@angular/router";

@Component({
  selector: 'app-root',
    imports: [TyroUiNavbar, TyroUiFooter, RouterOutlet],
  templateUrl: './app.html',
  styleUrl: './app.css'
})
export class App {

  private readonly langService = inject(TyroUiLangService);

  public APP_ENV = 'DEV';
  public currentUser: any = [];

  /*
   * PROJECT
   */

  public PROJECT_NAME = 'Influnias';
  public PROJECT_LOGO = 'assets/tyrolium-ui/projects/Influnias.png';

  public PROJECT_CONTENT = computed(() =>
    this.langService.lang() === 'en'
      ? `<strong>Influnias</strong> is a <strong>content creator agency</strong> built to give digital talents the tools they deserve. From <strong>editorial strategy</strong> to <strong>brand partnerships</strong>, we support every creator with expertise and passion. <em>Passion doesn't wait.</em>`
      : `<strong>Influnias</strong> est une <strong>agence de créateurs de contenu</strong> qui donne aux talents du numérique les moyens de grandir. De la <strong>stratégie éditoriale</strong> aux <strong>partenariats de marque</strong>, nous accompagnons chaque créateur avec expertise et passion. <em>Une filiale de Tyrolium.</em>`
  );

  /*
   * NAVIGATION
   */

  public pages = computed<ITyroUiNavbarPages[]>(() =>
    this.langService.lang() === 'en'
      ? [
          { label: 'Home',      link: '/',     icon: 'ri-home-line' },
          { label: 'How it works', ancre: 'process', icon: 'ri-route-line' },
          { label: 'Services',  ancre: 'services', icon: 'ri-briefcase-line' },
          { label: 'Founders',  ancre: 'founder',  icon: 'ri-team-line' },
          { label: 'Contact',   href: 'https://tyrolium.fr/contact?from=influnias', icon: 'ri-mail-line' },
        ]
      : [
          { label: 'Accueil',     link: '/',              icon: 'ri-home-line' },
          { label: 'Comment ça marche', ancre: 'process', icon: 'ri-route-line' },
          { label: 'Services',    ancre: 'services',     icon: 'ri-briefcase-line' },
          { label: 'Fondateurs',  ancre: 'founder',      icon: 'ri-team-line' },
          { label: 'Contact',     href: 'https://tyrolium.fr/contact?from=influnias',   icon: 'ri-mail-line' },
        ]
  );

  public socials: ITyroUiNavbarPages[] = [
      { label: 'instagram', link: 'https://www.instagram.com/influnias/', icon: 'ri-instagram-line' },
      { label: 'x',         link: 'https://x.com/influnias',                         icon: 'ri-twitter-x-fill' },
      { label: 'youtube',   link: 'https://www.youtube.com/channel/UCm0ASpIy2CJsS9hzVedo_yg',               icon: 'ri-youtube-fill' },
      { label: 'tiktok',    link: 'https://www.tiktok.com/@influnias',                icon: 'ri-tiktok-fill' },
      { label: 'twitch',    link: 'https://www.twitch.tv/influnias',                  icon: 'ri-twitch-fill' },
      { label: 'github',    link: 'https://github.com/Influnias',                     icon: 'ri-github-fill' },
  ];

}
