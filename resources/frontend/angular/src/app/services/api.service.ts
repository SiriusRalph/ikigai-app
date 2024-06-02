import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  private apiUrl = 'http://127.0.0.1:8000/api';

  constructor(private http: HttpClient) { }


  getQuestions(): Observable<any> {
    return this.http.get(`${this.apiUrl}/questions`);
  }

  recommendExperts(answers: any): Observable<any> {
    return this.http.post(`${this.apiUrl}/recommendations`, { answers });
  }

  getExperts(): Observable<any> {
    return this.http.get(`${this.apiUrl}/experts`);
  }

  addConsultation(data: any): Observable<any> {
    return this.http.post(`${this.apiUrl}/consultations`, data);
  }
}
