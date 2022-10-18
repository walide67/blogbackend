import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PostListComponentComponent } from './post-list-component.component';

describe('PostListComponentComponent', () => {
  let component: PostListComponentComponent;
  let fixture: ComponentFixture<PostListComponentComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ PostListComponentComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PostListComponentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
