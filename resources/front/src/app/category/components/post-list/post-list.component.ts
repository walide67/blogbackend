import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute, ParamMap } from '@angular/router';
import { faCalendarDays, faEye } from '@fortawesome/free-solid-svg-icons';
import { Post } from '../../../interfaces/post';
import { CategoryService } from '../../../services/category/category.service';

@Component({
  selector: 'app-post-list',
  templateUrl: './post-list.component.html',
  styleUrls: ['./post-list.component.css']
})
export class PostListComponent implements OnInit {

  faCalendarDays = faCalendarDays;
  faEye = faEye;

  slug: any = "";
  name: any = "";
  loading: boolean = false;
  posts: Post[] = [];

  constructor(private route: ActivatedRoute, public categoryService: CategoryService) {
    
   }

  ngOnInit(): void {
    this.route.paramMap.subscribe((params: ParamMap) => {
      this.slug = params.get('slug');
      this.getResult()
    });
  }


  getResult(){
    this.loading = true;
    this.posts = [];
    this.categoryService.getArticles(this.slug).subscribe((response: any)=>{
      this.loading = false;
      this.name = response.data.name;
      this.posts = response.data.articles;
    })
  }

}
