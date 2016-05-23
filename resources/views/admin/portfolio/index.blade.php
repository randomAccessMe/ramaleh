@extends('#admin')

@section('content')
<div class="row">
	<a class="pull-right btn btn-primary buffer" href="{{ route('admin::admin.site.create') }}">Add Website <i class="fa fa-globe"></i></a>
</div>
<div class="list-group col-md-6">
  @foreach($sites as $site)
  <a href="{{ route('admin::admin.site.edit', $site) }}" class="list-group-item">
    <div class="left-side" style="width: 70%; display: inline-block">
      <h4 class="list-group-item-heading">{{ $site->name }}</h4>
      <p class="list-group-item-text">{{$site->description}}</p>
    </div>
    <img class="pull-right screenshot"  src="/uploads/screenshots/{{$site->screenshot}}" style=" width: 50px; height: 50px">
  </a>
  @endforeach
</div>
@stop