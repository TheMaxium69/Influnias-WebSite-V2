import { Component, inject } from '@angular/core';
import { TyroUiLangService } from 'tyrolium-ui';

@Component({
  selector: 'app-hero',
  templateUrl: './hero.html',
  styleUrl: './hero.css'
})
export class HeroComponent {
  readonly lang = inject(TyroUiLangService).lang;
}
