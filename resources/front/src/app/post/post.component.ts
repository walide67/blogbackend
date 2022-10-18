import { Component, OnInit } from '@angular/core';
import { HighlightLoader } from 'ngx-highlightjs';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { HttpErrorResponse } from '@angular/common/http';

import { faCalendarDays, faHeart } from '@fortawesome/free-solid-svg-icons';
import { Post } from '../interfaces/post';
import { PostService } from '../services/post/post.service';
import { ErrorHandlerService } from '../services/error-handler.service';


@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.css']
})
export class PostComponent implements OnInit {
  faCalendarDays = faCalendarDays;
  faHeart = faHeart;

  post: Post;
  loading: boolean = false
  errorMessage: string = '';


  code = `<!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Bootstrap Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/styles/default.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/highlight.min.js"></script>
  <!-- and it's easy to individually load additional languages -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/languages/go.min.js"></script>
  </head>
  <body>

    <h2>Python highlight</h2>
      <pre><code class="python">
        def hello_world():
          return "hello world"
      </code></pre>

    <h2>Javascript highlight</h2>
      <pre><code class="javascript">
        function helloWorld(){
          return "hello world";
        }
    </code></pre>
  <script>hljs.initHighlightingOnLoad();</script>
  </body>
  </html>`;

  constructor(private hljsLoader: HighlightLoader, public postService: PostService, private route: ActivatedRoute,  private errorHandler: ErrorHandlerService) { }

  ngOnInit(): void {
    this.getPost();
  }

  getPost(){
    this.loading = true
    this.route.paramMap.subscribe((params: ParamMap) => {
      let slug: any = params.get('slug');
      this.postService.getBySlug(slug).subscribe({
        next: (response: any) => {
        this.post = response.data;
        this.loading = false;
      },
      error: (err: HttpErrorResponse) => {
        this.errorHandler.handleError(err);
        this.errorMessage = this.errorHandler.errorMessage;
    }
    })
    });
  }

}
