@extends('layouts.app')

@section('content')
<div class="signUpDiv">
  <form name="signUpForm" action="/signInValidate" >
    Username <input type="text" name="username"> <br/>
    Password <input type="text" name="password"> <br/>
    Confirm Password <input type="text" name="confirmPassword"> <br/>
    Email <input type="text" name="email"> <br/>
    Phone Number <input type="text" name="phoneNumber"> <br/>
    Librarian <input type="checkbox" name="isLibrarian"> <br/>
    <input type="button" value="Cancel" onclick="" name="cancelButton"></input>
    <input type="submit" value="Sign Up" onclick="" name="signUpButton"></input>
  </form>
  <br/>
  @if($error != "")
    <div class="error">
      {{$error}}
    </div>
  @endif
</div>
@endsection
