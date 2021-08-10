import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { CsspageComponent } from './csspage.component';

describe('CsspageComponent', () => {
  let component: CsspageComponent;
  let fixture: ComponentFixture<CsspageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ CsspageComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(CsspageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
