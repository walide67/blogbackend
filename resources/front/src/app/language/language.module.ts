import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { LanguageComponent } from '../language/language.component';
import { NgxShimmerLoadingModule } from  'ngx-shimmer-loading';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';
import { LanguageRoutingModule } from './language-routing.module';



@NgModule({
  declarations: [
    LanguageComponent
  ],
  imports: [
    CommonModule,
    NgxShimmerLoadingModule,
    FontAwesomeModule,
    LanguageRoutingModule
  ]
})
export class LanguageModule { }
