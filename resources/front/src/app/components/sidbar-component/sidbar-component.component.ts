import { Component, OnInit } from '@angular/core';

import { faArrowDown, faArrowUp } from '@fortawesome/free-solid-svg-icons';
import { CategoryService } from '../../services/category/category.service';
import { TagService } from '../../services/tag/tag.service';
import { PostService } from '../../services/post/post.service';
import { Post } from '../../interfaces/post';
import { Category } from '../../interfaces/category';
import { Tag } from '../../interfaces/tag';
import { Language } from '../../interfaces/language';
import {Router} from '@angular/router';

import * as $ from 'jquery';

@Component({
  selector: 'app-sidbar-component',
  templateUrl: './sidbar-component.component.html',
  styleUrls: ['./sidbar-component.component.css']
})
export class SidbarComponentComponent implements OnInit {

  faArrowDown = faArrowDown;
  faArrowUp = faArrowUp;

  keywordSearch: string = '';

  posts: Post[] = [];
  categories: Category[] = [];
  tags: Tag[] = [];
  categoryLoading: boolean = false;
  tagLoading: boolean = false;
  postLoading: boolean = false;
  languagesLoading: boolean = false;
  languages: Language[] = [];

  constructor(public categoryservice: CategoryService,public PostService: PostService, private route:Router, public tagService: TagService) { }

  ngOnInit(): void {
    this.getCategories();
    this.getTags();
    this.getRecentPost();
    this.getLanguages();
  }

   menuSeeMore($event: any){
    $($event.target).closest('.menu').find('ul').css('max-height', '100%')
    $($event.target).closest('.menu').find('.see-less-link').css('display', 'block')

    if($event.target.tagName == "A"){
      $($event.target).hide();
    }else{
      $($event.target).closest('a').hide();
    }
    $event.preventDefault()

  }

  public getCategories(){
    this.categoryLoading = true;
    this.categoryservice.getAll().subscribe((response: any)=>{
      this.categoryLoading = false;
      this.categories = response.data;
    })
  }

  public getTags(){
    this.tagLoading = true;
    this.tagService.getAll().subscribe((response: any)=>{
      this.tagLoading = false;
      this.tags = response.data;
    })
  }

  public getRecentPost(){
    this.postLoading = true;
    this.PostService.getRecent().subscribe((response: any)=>{
      this.postLoading = false;
      this.posts = response.data;
    })
  }

  public getLanguages(){
    this.languagesLoading = true;
    this.categoryservice.getLanguages().subscribe((response: any)=>{
      this.languagesLoading = false;
      this.languages = response.data;
    })
  }

  menuSeeLess($event: any){
    $($event.target).closest('.menu').find('ul').css('max-height', '150px')
    $($event.target).closest('.menu').find('.see-more-link').css('display', 'block')
    if($event.target.tagName == "A"){
      $($event.target).hide();
    }else{
      $($event.target).closest('a').hide();
    }
    $event.preventDefault()
  }

  search(){
    if(this.keywordSearch!== ""){
      this.route.navigate([`/search/${this.keywordSearch}`]);
    }
  }

}
