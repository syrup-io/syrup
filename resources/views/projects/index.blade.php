@foreach($organizations as $organization)
<div class="ui top attached tabular menu">
  <div class="item">{{ $organization['login'] }}</div>
</div>
@endforeach
