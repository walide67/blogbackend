import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {  Observable, throwError } from 'rxjs';

import { BaseService } from '../base.service';

@Injectable({
  providedIn: 'root'
})
export class TagService extends BaseService  {

  constructor(private httpClient: HttpClient) {super()}

  getAll(): Observable<any> {
    return this.httpClient.get<any>(this.apiURL + '/tags')
    
  }

  getArticles(tagSlug: any): Observable<any> {
    return this.httpClient.get<any>(this.apiURL + '/tags/'+tagSlug+'/articles')
  }
}
