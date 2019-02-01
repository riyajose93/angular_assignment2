import { Component, OnInit } from '@angular/core';
import { checkAndUpdateBinding } from '@angular/core/src/view/util';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.css']
})
export class ProfileComponent implements OnInit {
  user:any;
  check:boolean=true;
  constructor() { 
    this.user=
    {
      name:'RIYA',
      qualification:'MCA',
      institute:'Amal Jyothi',
      Ph:['123','123654']
};
  }
togglecheck(){
  this.check=!this.check;
}
  ngOnInit() {
  }

}
