import { Routes, RouterModule } from '@angular/router';
import { NgModule } from '@angular/core';
import { TestComponent } from './test/test.component';
import { RecommendationsComponent } from './recommendations/recommendations.component';
import { ReservationComponent } from './reservation/reservation.component';


export const routes: Routes = [
    { path: 'test', component: TestComponent },
    { path: 'recommendations', component: RecommendationsComponent },
    { path: 'reservation/:id', component: ReservationComponent },
    { path: '', redirectTo: '/test', pathMatch: 'full' }
];
