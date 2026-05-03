import { Component, AfterViewInit } from '@angular/core';

@Component({
  selector: 'app-hero',
  templateUrl: './hero.html',
  styleUrl: './hero.css',
  host: { '[class.hero-animating]': 'animating' }
})
export class HeroComponent implements AfterViewInit {
  animating = true;
  letters = 'INFLUNIAS'.split('');

  ngAfterViewInit() {
    setTimeout(() => { this.animating = false; }, 0);
  }
}
