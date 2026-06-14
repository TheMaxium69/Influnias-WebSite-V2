import { Component, inject } from '@angular/core';
import { TyroUiLangService } from 'tyrolium-ui';

@Component({
  selector: 'app-about',
  templateUrl: './about.html',
  styleUrl: './about.css'
})
export class AboutComponent {
  readonly lang = inject(TyroUiLangService).lang;
}
