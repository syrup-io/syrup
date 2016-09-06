@extends('layouts.app')

@section('content')

<div class="container" id="loginCard">
    <div class="ui raised centered card">
      <div class="content">
          <div class="ui centered header">
              Syrup
          </div>
          <form class="ui form">
            <div class="field">
              <label>First Name</label>
              <input type="text" name="first-name" placeholder="First Name">
            </div>
            <div class="field">
              <label>Last Name</label>
              <input type="text" name="last-name" placeholder="Last Name">
            </div>
            <div class="field">
              <div class="ui checkbox">
                <input type="checkbox">
                <label>I agree to the Terms and Conditions</label>
              </div>
            </div>
            <button class="ui button" type="submit">Submit</button>
          </form>
      </div>
    </div>
</div>

@endsection
