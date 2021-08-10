import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { AppRoutingModule } from './app-routing.module';
import { HomepageComponent } from './homepage/homepage.component';
import { HtmlpageComponent } from './htmlpage/htmlpage.component';
import { CsspageComponent } from './csspage/csspage.component';
import { NavigationpageComponent } from './navigationpage/navigationpage.component';

@NgModule({
  declarations: [
    AppComponent,
    HomepageComponent,
    HtmlpageComponent,
    CsspageComponent,
    NavigationpageComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
