import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { StudlistComponent } from './studlist/studlist.component';

const routes: Routes = [{path:"studentlist",component:StudlistComponent}];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
