import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import {  Observable, throwError } from 'rxjs';

import { BaseService } from '../base.service';


@Injectable({
  providedIn: 'root'
})
export class CategoryService extends BaseService {

  constructor(private httpClient: HttpClient) { super() }

  getAll(): Observable<any> {
    return this.httpClient.get<any>(this.apiURL + '/categories')
  }

  getArticles(catSlug: any): Observable<any> {
    return this.httpClient.get<any>(this.apiURL + '/categories/'+catSlug+'/articles')
  }

  getLanguages(): Observable<any>{
    return this.httpClient.get<any>(this.apiURL + '/languages/')
  }
}
