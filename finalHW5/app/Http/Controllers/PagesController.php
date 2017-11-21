<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function signup(){




      return view('pages.signUp')->with('error',"");
    }
    public function login(){
      return view('pages.login');
    }
    public function signInValidate(){
      //in here is where we verify if the new user stuff is ok
      $isValid = true;
      //check the Username valitity and if it already exists
      //check the passwords
      //check email
      //check phoneNumber


      //Depending if the fields were valid open up new views or not
      if( $isValid ){
        //Everything is valid

        //Add user to the users database table
        //Open up the login window

        return view('pages.login');
      } else {
        return view('pages.signUp')->with('error',"Fields are not valid, try again");
      }
    }

}
