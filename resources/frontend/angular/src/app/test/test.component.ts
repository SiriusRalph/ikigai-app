import { Component, OnInit } from '@angular/core';
import { ApiService } from '../services/api.service';
import { Router, RouterModule} from '@angular/router';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';


@Component({
  selector: 'app-test',
  standalone: true,
  imports: [FormsModule, CommonModule, RouterModule],
  templateUrl: './test.component.html',
  styleUrl: './test.component.css'
})
export class TestComponent implements OnInit{
  questions: any[] = [];
  answers: any = {};

  constructor(private apiService: ApiService, private router: Router) {}

  ngOnInit(): void {
    this.apiService.getQuestions().subscribe((data) => {
      this.questions = data;
    });
  }

  submitTest() {
    const answersArray = Object.values(this.answers);
    this.apiService.recommendExperts(answersArray).subscribe((experts) => {
      // Stocker les experts recommandés et rediriger
      localStorage.setItem('recommendedExperts', JSON.stringify(experts));
      this.router.navigate(['/recommendations']);
    });
  }
}
