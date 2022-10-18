import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute, ParamMap } from '@angular/router';
import { faCalendarDays, faEye } from '@fortawesome/free-solid-svg-icons';
import { Post } from '../interfaces/post';
import { TagService } from '../services/tag/tag.service';

@Component({
  selector: 'app-tag',
  templateUrl: './tag.component.html',
  styleUrls: ['./tag.component.css']
})
export class TagComponent implements OnInit {

  faCalendarDays = faCalendarDays;
  faEye = faEye;

  slug: any = '';
  name: any = '';
  posts: Post[] = [];
  loading: boolean = false

  constructor(private route: ActivatedRoute, public tagservice: TagService ) { }

  ngOnInit(): void {
    this.route.paramMap.subscribe((params: ParamMap) => {
      this.slug = params.get('slug');
      this.getResult()
    });
  }

  getResult(){
    this.loading = true;
    this.tagservice.getArticles(this.slug).subscribe((response: any)=>{
      this.loading = false;
      this.name = response.data.name;
      this.posts = response.data.articles;
    })
  }

}
