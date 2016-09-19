<div class="right menu">
  @if(Auth::user())

      <div class="ui dropdown item">
          <span class="screen-only" style="padding-right:1em;">
            {{ Auth::user()->name }}
          </span>
        <img class="ui avatar image" src="{{ Auth::user()->github_avatar_url }}"></img>
          <div class="ui pointing menu">
            <div class="item"><i class="fa fa-cog"></i>Settings</div>
            <a href="/logout"><div class="item"><i class="fa fa-sign-out"></i>Logout</div></a>
          </div>
      </div>

  @else

      <a class="ui item" href="login/">
        Sign In
      </a>

  @endif

</div>
