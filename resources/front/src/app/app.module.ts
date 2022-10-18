import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';
import { NgxShimmerLoadingModule } from  'ngx-shimmer-loading';
import { FormsModule } from '@angular/forms';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { FontAwesomeModule } from '@fortawesome/angular-fontawesome';
import { SidbarComponentComponent } from './components/sidbar-component/sidbar-component.component';
import { PostListComponentComponent } from './components/post-list-component/post-list-component.component';
import {
  HighlightModule,
  HIGHLIGHT_OPTIONS,
} from 'ngx-highlightjs';
import { NotFoundComponent } from './components/not-found/not-found.component';
import { SearchModule } from './search/search.module';

@NgModule({
  declarations: [
    AppComponent,
    SidbarComponentComponent,
    PostListComponentComponent,
    NotFoundComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FontAwesomeModule,
    HighlightModule,
    HttpClientModule,
    NgxShimmerLoadingModule,
    SearchModule,
    FormsModule
  ],
  providers: [
    {
      provide: HIGHLIGHT_OPTIONS,
      useValue:{
        fullLibraryLoader: () => import('highlight.js'),
        themePath: 'assets/angular/assets/highlightjs/dracula.css',
      }
    }
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
