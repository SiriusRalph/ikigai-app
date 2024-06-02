import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { ApiService } from '../services/api.service';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterModule } from '@angular/router';

@Component({
  selector: 'app-reservation',
  standalone: true,
  imports: [CommonModule, FormsModule, RouterModule],
  templateUrl: './reservation.component.html',
  styleUrl: './reservation.component.css'
})
export class ReservationComponent implements OnInit{
  expertId: number | null = null;
  reservationData: any = {
    date_consultation: '',
    heure_debut: '',
    duree: '',
    montant: 0
  };

  constructor(
    private route: ActivatedRoute,
    private apiService: ApiService,
    private router: Router
  ) {}

  ngOnInit(): void {
    const id = this.route.snapshot.paramMap.get('id');
    if (id) {
      this.expertId = +id;
    } else {
      // Gestion de l'erreur si l'ID est manquant
      console.error('Expert ID is missing in the route.');
      this.router.navigate(['/']); // Redirection vers une autre page
    }
  }

  submitReservation() {
    if (this.expertId === null) {
      console.error('Expert ID is not set.');
      return;
    }

    const data = {
      ...this.reservationData,
      expert_id: this.expertId,
      user_id: 1 // Remplacer par l'ID utilisateur actuel
    };

    this.apiService.addConsultation(data).subscribe((response) => {
      // Rediriger ou afficher un message de succès
      this.router.navigate(['/confirmation']);
    });
  }

}
