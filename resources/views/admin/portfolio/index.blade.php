@extends('#admin')

@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">My Websites</h1>
        <div class="row">
            <a class="pull-right btn btn-primary buffer" href="{{ route('admin::admin.site.create') }}">Add Website <i
                        class="fa fa-globe"></i></a>
        </div>
        <div class="list-group col-md-6">
            @foreach($sites as $site)
                <div class="list-group-item"
                   style="background: url('/uploads/screenshots/{{$site->screenshot}}') no-repeat;
                           background-position: center; background-size: cover"
                >
                    <div class="left-side">

                        <h4 class="list-group-item-heading">{{ $site->name }}</h4>
                        <p class="list-group-item-text">{{$site->description}}</p>
                    </div>
                    <a href="{{ route('admin::admin.site.destroy', $site) }}" class="badge"
                       data-method="delete"
                       data-confirm="Are you sure that you want to delete `{!! $site->name !!}`?">
                        <i class="fa fa-trash"></i>
                    </a>
                    <a href="{{ route('admin::admin.site.edit', $site) }}" class="badge">
                        <i class="fa fa-pencil-square-o"></i>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@stop