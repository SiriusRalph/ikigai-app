import { Component, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';
import { Router } from '@angular/router';
import { RouterModule } from '@angular/router';

@Component({
  selector: 'app-recommendations',
  standalone: true,
  imports: [FormsModule, CommonModule, RouterModule],
  templateUrl: './recommendations.component.html',
  styleUrl: './recommendations.component.css'
})
export class RecommendationsComponent implements OnInit{
  recommendedExperts: any[] = [];

  ngOnInit(): void {
    const experts = localStorage.getItem('recommendedExperts');
    this.recommendedExperts = experts ? JSON.parse(experts) : [];
  }

}
