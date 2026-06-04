import { Component, inject, ViewEncapsulation } from '@angular/core';
import { TyroUiCTA, TyroUiLangService } from 'tyrolium-ui';
import {AboutComponent} from "../../components/about/about";
import {FoundersComponent} from "../../components/founders/founders";
import {HeroComponent} from "../../components/hero/hero";
import {PartnersComponent} from "../../components/partners/partners";
import {ServicesComponent} from "../../components/services/services";

@Component({
    selector: 'app-home',
    imports: [TyroUiCTA, AboutComponent, FoundersComponent, HeroComponent, PartnersComponent, ServicesComponent],
    templateUrl: './home.html',
    encapsulation: ViewEncapsulation.None,
})
export class Home {
    readonly lang = inject(TyroUiLangService).lang;

}