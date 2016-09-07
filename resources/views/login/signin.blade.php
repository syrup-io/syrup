@extends('layouts.app')

@section('content')

<div class="container" id="loginCard">
    <div class="ui raised centered card">
      <div class="content">
          <div class="ui centered header">
              Login
          </div>
          <form class="ui form">
            <div class="field">
              <label>Username</label>
              <input type="text" name="first-name" placeholder="Username">
            </div>
            <div class="field">
              <label>Password</label>
              <input type="text" name="last-name" placeholder="Password">
            </div>
            <div class="ui center aligned basic segment">
                <button class="ui button" type="submit">Submit</button>
            </div>
          </form>
          <div class="ui horizontal divider">
              Register
          </div>
          <div class="container">

            <div class="ui center aligned basic segment">
              <div class="ui large buttons">
                <a href="auth/github"><button class="ui button"><i class="fa fa-github"></i></button></a>
                <div class="or"></div>
                <a href="auth/bitbucket"><button class="ui button"><i class="fa fa-bitbucket"></i></button></a>
              </div>

            </div>
          </div>
      </div>
    </div>
</div>

@endsection
