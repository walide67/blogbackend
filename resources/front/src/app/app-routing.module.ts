import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { PostListComponentComponent } from "./components/post-list-component/post-list-component.component"
import { NotFoundComponent } from "./components/not-found/not-found.component"

const routes: Routes = [
  { path: '',   component: PostListComponentComponent},
  { path: 'articles/languages', loadChildren: () => import('./language/language.module').then(m => m.LanguageModule)},
  { path: 'posts', loadChildren: () => import('./post/post.module').then(m => m.PostModule) },
  { path: 'categories', loadChildren: () => import('./category/category.module').then(m => m.CategoryModule) },
  { path: 'search', loadChildren: () => import('./search/search.module').then(m => m.SearchModule) },
  { path: 'tags', loadChildren: () => import('./tag/tag.module').then(m => m.TagModule) },
  { path: '**', pathMatch: 'full', component: NotFoundComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes,{onSameUrlNavigation: 'reload'})],
  exports: [RouterModule]
})
export class AppRoutingModule { }
