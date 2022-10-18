import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SidbarComponentComponent } from './sidbar-component.component';

describe('SidbarComponentComponent', () => {
  let component: SidbarComponentComponent;
  let fixture: ComponentFixture<SidbarComponentComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ SidbarComponentComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(SidbarComponentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
