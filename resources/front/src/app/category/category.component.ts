import { Component, OnInit } from '@angular/core';
import { Router, ActivatedRoute, ParamMap } from '@angular/router';


@Component({
  selector: 'app-category',
  templateUrl: './category.component.html',
  styleUrls: ['./category.component.css']
})
export class CategoryComponent implements OnInit {

  slug:any = '';
  loading: boolean = false;

  constructor(private route: ActivatedRoute) { }

  ngOnInit(): void {
    this.route.paramMap.subscribe((params: ParamMap) => {
      this.slug = params.get('slug');
      this.getResult()
    });
  }

  getResult(){
    this.loading = true;
    setInterval(()=>{this.loading = false}, 3000);
    return {};
  }
}
