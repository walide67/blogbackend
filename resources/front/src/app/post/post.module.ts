import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { NgxShimmerLoadingModule } from  'ngx-shimmer-loading';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';

import { PostRoutingModule } from './post-routing.module';
import { PostComponent } from './post.component';
import {
  HighlightModule,
  HIGHLIGHT_OPTIONS,
} from 'ngx-highlightjs';

@NgModule({
  declarations: [
    PostComponent
  ],
  imports: [
    CommonModule,
    PostRoutingModule,
    NgxShimmerLoadingModule,
    FontAwesomeModule,
    HighlightModule,
  ],
  providers: [
    {
      provide: HIGHLIGHT_OPTIONS,
      useValue:{
        fullLibraryLoader: () => import('highlight.js'),
        themePath: '/assets/highlightjs/monokai.css',
      }
    }
  ],
})
export class PostModule { }
