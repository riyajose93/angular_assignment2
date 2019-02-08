import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-studlist',
  templateUrl: './studlist.component.html',
  styleUrls: ['./studlist.component.css']
})
export class StudlistComponent implements OnInit {public StudentDetails:any=
  [{rollno:"1",name:"Riya",batch:"batch1",department:"mca"},
  {rollno:"2",name:"helen",batch:"batch2",department:"mca"},
  {rollno:"3",name:"neethu",batch:"batch3",department:"mca"}];

  studdetail:any;
  addStudent(data:any){
    this.studdetail=data;
  }

  constructor() { }

  ngOnInit() {
  }

}
