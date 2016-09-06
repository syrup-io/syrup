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
              Or
          </div>
          <div class="container">

            <div class="ui center aligned basic segment">

              <button class="ui basic button" style="margin-bottom: 10px">
                  Sign In With Github
                  <i class="fa fa-github"></i>
              </button>

              <button class="ui basic button">
                  Sign In With Bitbucket
                  <i class="fa fa-bitbucket"></i>
              </button>

            </div>
          </div>
      </div>
    </div>
</div>

@endsection
