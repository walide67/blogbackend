import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { NgxShimmerLoadingModule } from  'ngx-shimmer-loading';

import { TagRoutingModule } from './tag-routing.module';
import { TagComponent } from './tag.component';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';



@NgModule({
  declarations: [
    TagComponent
  ],
  imports: [
    CommonModule,
    TagRoutingModule,
    NgxShimmerLoadingModule,
    FontAwesomeModule
  ]
})
export class TagModule { }
