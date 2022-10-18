import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { NgxShimmerLoadingModule } from  'ngx-shimmer-loading';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';

import { CategoryRoutingModule } from './category-routing.module';
import { CategoryComponent } from './category.component';
import { ListComponent } from './components/list/list.component';
import { PostListComponent } from './components/post-list/post-list.component';


@NgModule({
  declarations: [
    CategoryComponent,
    ListComponent,
    PostListComponent
  ],
  imports: [
    CommonModule,
    CategoryRoutingModule,
    NgxShimmerLoadingModule,
    FontAwesomeModule
  ]
})
export class CategoryModule { }
