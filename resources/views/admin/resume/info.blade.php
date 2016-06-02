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
                    'route'   => ['admin::resume.update', $resume],
                    'class'   => 'buffer-top'
                  ]) !!}

                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', $resume->name, ['class'=>'form-control']) !!}

                {!! Form::label('address', 'Address') !!}
                {!! Form::text('address', $resume->address, ['class'=>'form-control']) !!}

                {!! Form::label('email', 'E Mail') !!}
                {!! Form::email('email', $resume->email, ['class'=>'form-control']) !!}

                {!! Form::label('phone', 'Phone') !!}
                {!! Form::text('phone', $resume->phone, ['class'=>'form-control']) !!}

                {!! Form::label('summary', 'Summary') !!}
                {!! Form::textarea('summary', $resume->summary, ['class'=>'form-control']) !!}

                {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right buffer']) !!}

                {!! Form::close() !!}
            </div>
        </div>
        <!-- /.row -->
    </div>
@stop