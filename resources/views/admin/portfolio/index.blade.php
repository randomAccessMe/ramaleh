@extends('#admin')

@section('content')
<div class="row">
	<a class="pull-right btn btn-primary buffer" href="{{ route('admin::admin.site.create') }}">Add Website <i class="fa fa-globe"></i></a>
</div>
<div class="list-group">
  @foreach($sites as $site)
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">{{ $site->screenshot }}</h4>
    <p class="list-group-item-text">...</p>
  </a>
  @endforeach
</div>
@stop