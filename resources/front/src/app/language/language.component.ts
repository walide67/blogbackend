import { Component, OnInit } from '@angular/core';
import { HighlightLoader } from 'ngx-highlightjs';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { HttpErrorResponse } from '@angular/common/http';

import { faCalendarDays, faHeart } from '@fortawesome/free-solid-svg-icons';
import { Post } from '../interfaces/post';
import { PostService } from '../services/post/post.service';
import { ErrorHandlerService } from '../services/error-handler.service';

@Component({
  selector: 'app-language',
  templateUrl: './language.component.html',
  styleUrls: ['./language.component.css']
})
export class LanguageComponent implements OnInit {

  local: any = "";
  loading: boolean = false;
  faCalendarDays = faCalendarDays;
  faHeart = faHeart;

  posts: Post[] = [];
  errorMessage: string = '';

  constructor(private hljsLoader: HighlightLoader, public postService: PostService, private route: ActivatedRoute,  private errorHandler: ErrorHandlerService) { }

  ngOnInit(): void {
    this.route.paramMap.subscribe((params: ParamMap) => {
      this.local = params.get('local');
      this.getResult()
    });
  }

  getResult(){
    this.postService.getByLanguages(this.local).subscribe({
      next: (response: any) => {
      this.posts = response.data;
      this.loading = false;
    },
    error: (err: HttpErrorResponse) => {
      this.errorHandler.handleError(err);
      this.errorMessage = this.errorHandler.errorMessage;
  }
  })
  }

}
