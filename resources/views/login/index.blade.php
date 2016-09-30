@extends('layouts.login')

@section('content')
  <div class="container" id="loginCard">
    <div class="ui raised centered card">
      <div class="content">
          <div class="ui centered header" style="margin-bottom: -.5em; padding-top: .5em; text-transform: uppercase; font-size:2rem; font-family:raleway;">
              Syrup
          </div>
          <div class="ui center aligned row">
            <svg height="120px" width="120px" style="padding-top: -2em;">
              <image xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/image/syrup.svg" x="0" y="0" width="100%" height="100%"></image>
            </svg>
          <div>
          <form class="ui form">
            <div class="field">
              <div class="ui left icon input">
                <i class="lock icon"></i>
                <input type="username" name="username" placeholder="Username">
              </div>
            </div>
            <div class="field">
              <div class="ui left icon input">
                <i class="user icon"></i>
                <input type="password" name="password" placeholder="Password">
              </div>
            </div>
            <div class="ui center aligned basic segment">
                <button class="ui blue button" type="submit">Login</button>
            </div>
          </form>
          <div class="ui horizontal divider">
              Register
          </div>
          <div class="container">

            <div class="ui center aligned basic segment">
              <div class="ui large buttons">
                <a href="/auth/github"><button class="ui button"><i class="fa fa-github"></i></button></a>
                <div class="or"></div>
                <a href="/auth/bitbucket"><button class="ui button"><i class="fa fa-bitbucket"></i></button></a>
              </div>

            </div>
          </div>
      </div>
    </div>
  </div>

@endsection
