@extends('#admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">New Website</h1>
            {!! Form::open(['route' => ['admin::admin.site.store'], 'enctype' => 'multipart/form-data']) !!}

            <div class="col-lg-12 col-md-12 col-sm-12">
                @include('admin.portfolio.partials._form')
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@stop