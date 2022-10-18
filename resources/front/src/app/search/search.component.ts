import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute, ParamMap } from '@angular/router';
import { faCalendarDays, faEye } from '@fortawesome/free-solid-svg-icons';

import { Post } from '../interfaces/post';
import { PostService } from '../services/post/post.service';

@Component({
  selector: 'app-search',
  templateUrl: './search.component.html',
  styleUrls: ['./search.component.css']
})
export class SearchComponent implements OnInit {

  faCalendarDays = faCalendarDays;
  faEye = faEye;


  keyword: any = "";
  loading: boolean = false;
  posts: Post[] = [];

  constructor(private route: ActivatedRoute, public postService: PostService) {
    
   }

  ngOnInit(): void {
    this.route.paramMap.subscribe((params: ParamMap) => {
      this.keyword = params.get('keyword');
      this.getResult()
    });
  }

  getResult(){
    this.loading = true;
    this.posts = [];
    this.postService.search(this.keyword).subscribe((response: any)=>{

      this.loading = false;
      this.posts = response.data;
    })
  }

}
