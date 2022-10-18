import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { NgxShimmerLoadingModule } from  'ngx-shimmer-loading';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';


import { SearchRoutingModule } from './search-routing.module';
import { SearchComponent } from './search.component';



@NgModule({
  declarations: [
    SearchComponent
  ],
  imports: [
    CommonModule,
    SearchRoutingModule,
    FontAwesomeModule,
    NgxShimmerLoadingModule
  ]
})
export class SearchModule { }
