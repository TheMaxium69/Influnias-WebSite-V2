import { Component, inject, ViewEncapsulation } from '@angular/core';
import { TyroUiCTA, TyroUiLangService } from 'tyrolium-ui';
import {AboutComponent} from "../../components/about/about";
import {FoundersComponent} from "../../components/founders/founders";
import {HeroComponent} from "../../components/hero/hero";
import {HowItWorksComponent} from "../../components/how-it-works/how-it-works";
import {ServicesComponent} from "../../components/services/services";

@Component({
    selector: 'app-home',
    imports: [TyroUiCTA, AboutComponent, FoundersComponent, HeroComponent, HowItWorksComponent, ServicesComponent],
    templateUrl: './home.html',
    encapsulation: ViewEncapsulation.None,
})
export class Home {
    readonly lang = inject(TyroUiLangService).lang;

}