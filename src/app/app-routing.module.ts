import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {RouterModule, Routes} from '@angular/router';
import {HomepageComponent} from './homepage/homepage.component';
import {CsspageComponent} from './csspage/csspage.component';
import {HtmlpageComponent} from './htmlpage/htmlpage.component';
import {NavigationpageComponent} from './navigationpage/navigationpage.component';
import {BlogComponent} from "./blog/blog.component";
const routes: Routes = [
  { path: '', component: HomepageComponent },
  { path: 'htmlpage', component: HtmlpageComponent},
  { path: 'csspage', component: CsspageComponent},
  { path: 'navigation', component: NavigationpageComponent},
  { path: 'blog', component: BlogComponent},
];

@NgModule({
  declarations: [],
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
