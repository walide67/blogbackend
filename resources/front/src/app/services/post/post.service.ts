import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {  Observable, throwError } from 'rxjs';

import { BaseService } from '../base.service';

@Injectable({
  providedIn: 'root'
})
export class PostService extends BaseService{

  constructor(private httpClient: HttpClient) { super()}

  getAll(): Observable<any> {
    return this.httpClient.get<any>(this.apiURL + '/articles')
    
  }

  search(keyWord: any): Observable<any> {
    return this.httpClient.get<any>(this.apiURL + '/articles/search/'+keyWord)
  }

  find(id :any): Observable<any> {
    return this.httpClient.get<any>(this.apiURL + '/articles/show/' + id)
  }

  getBySlug(slug: any){
    return this.httpClient.get<any>(this.apiURL + '/articles/' + slug)
  }

  getByCategory(catId: any){
    return this.httpClient.get<any>(this.apiURL + '/articles/category' + catId)
  }

  getByTag(TagId: any){
    return this.httpClient.get<any>(this.apiURL + '/articles/tag' + TagId)
  }

  getRecent(){
    return this.httpClient.get<any>(this.apiURL + '/articles/recent')
  }

  getByLanguages(local: any){
    return this.httpClient.get<any>(this.apiURL + '/articles/languages/'+local)
  }

  errorHandler(error: any) {
    let errorMessage = '';
    if(error.error instanceof ErrorEvent) {
      errorMessage = error.error.message;
    } else {
      errorMessage = `Error Code: ${error.status}\nMessage: ${error.message}`;
    }
    return throwError(errorMessage);
 }
}
