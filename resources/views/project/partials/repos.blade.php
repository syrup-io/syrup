<div class="ui container">
    <div class="ui centered header" style="padding-top:2em;">
        <h3> Repositories </h3>
    </div>
    <div class="ui pointing secondary menu">
      @foreach($repos as $repo)
      <a class="item" data-tab="organization">{{ $repo['name'] }}</a>
      @endforeach
    </div>
</div>
