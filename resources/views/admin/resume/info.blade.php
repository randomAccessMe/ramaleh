@extends('#admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Resume</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            @include('admin.resume.partials._tabs')
            {!! Form::open([
                'route'   => ['admin::admin.site.create'],
                'class'   => 'buffer-top'
              ]) !!}

                <label for="">Name</label>
                {!! Form::text('name', null, ['class'=>'form-control']) !!}

                <label for="">Address</label>
                {!! Form::text('address', null, ['class'=>'form-control']) !!}

                <label for="">E Mail</label>
                {!! Form::email('email', null, ['class'=>'form-control']) !!}

                <label for="">Phone</label>
                {!! Form::text('phone', null, ['class'=>'form-control']) !!}

                <label for="">Summary</label>
                {!! Form::textarea('summary', null, ['class'=>'form-control']) !!}

                {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right buffer']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    <!-- /.row -->
</div>
@stop