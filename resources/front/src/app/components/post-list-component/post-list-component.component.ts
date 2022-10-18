import { Component, OnInit } from '@angular/core';
import { faCalendarDays, faHeart } from '@fortawesome/free-solid-svg-icons';
import { Post } from '../../interfaces/post';
import { PostService } from '../../services/post/post.service';


@Component({
  selector: 'app-post-list-component',
  templateUrl: './post-list-component.component.html',
  styleUrls: ['./post-list-component.component.css']
})
export class PostListComponentComponent implements OnInit {

  faCalendarDays = faCalendarDays;
  faHeart = faHeart;

  posts: Post[] = [];
  loading: boolean = false;



  constructor(public postService: PostService) { }

  ngOnInit(): void {
    this.getPosts();
  }


  public getPosts(){
    this.loading = true;
    this.posts = [];
    this.postService.getAll().subscribe((response: any)=>{
      this.loading = false;
      this.posts = response.data;
    })
  }

  public getPostsByLanguage(){
    this.loading = true;
    this.posts = [];
    this.postService.getAll().subscribe((response: any)=>{
      this.loading = false;
      this.posts = response.data;
    })
  }

}
