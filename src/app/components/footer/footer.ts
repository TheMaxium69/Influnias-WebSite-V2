import { Component } from '@angular/core';

@Component({
  selector: 'app-footer',
  templateUrl: './footer.html',
  styleUrl: './footer.css'
})
export class FooterComponent {
  socialLinks = [
    { id: 'Twitter', bg: '#55acee', href: 'https://twitter.com/influnias', icon: 'fa-brands fa-twitter' },
    { id: 'Instagram', bg: '#ac2bac', href: 'https://www.instagram.com/influnias/', icon: 'fa-brands fa-instagram' },
    { id: 'Linkedin', bg: '#0082ca', href: 'https://www.linkedin.com/company/influnias', icon: 'fa-brands fa-linkedin' },
    { id: 'YouTube', bg: '#c4302b', href: 'https://www.youtube.com/channel/UCm0ASpIy2CJsS9hzVedo_yg', icon: 'fa-brands fa-youtube' },
    { id: 'Twitch', bg: '#6441a5', href: 'https://www.twitch.tv/influnias', icon: 'fa-brands fa-twitch' },
    { id: 'Github', bg: '#333333', href: 'https://github.com/Influnias', icon: 'fa-brands fa-github' },
    { id: 'Mail', bg: '#FFA500', href: 'mailto:officiel@tyrolium.fr', icon: 'fa-solid fa-envelope' },
  ];
}
