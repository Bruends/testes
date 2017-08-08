import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-databinding',
  templateUrl: './databinding.component.html',
  styleUrls: ['./databinding.component.css']
})
export class DatabindingComponent implements OnInit {
  
  url: string ='http://google.com';
  cursoAngular: boolean = true;   
  imgUrl: string = 'http://lorempixel.com/400/200';

  getValor(){
    return 1;
  }

  getCurtirCurso(){
    return false;
  }

  constructor() { }

  ngOnInit() {
  }

}
