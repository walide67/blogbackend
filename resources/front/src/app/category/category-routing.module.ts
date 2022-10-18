import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CategoryComponent } from './category.component';
import { PostListComponent } from './components/post-list/post-list.component';


const routes: Routes = [
  { path: '', component: CategoryComponent },
  { path: ':slug/posts', component: PostListComponent },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class CategoryRoutingModule { }
