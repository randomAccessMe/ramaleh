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

                <label for="">Position Title</label>
                {!! Form::text('title', null, ['class'=>'form-control']) !!}

                <label for="">Employer</label>
                {!! Form::text('employer', null, ['class'=>'form-control']) !!}

                <label for="">City</label>
                {!! Form::text('city', null, ['class'=>'form-control']) !!}

                <label for="">State</label>
                {!! Form::text('state', null, ['class'=>'form-control']) !!}

                <label for="">Country</label>
                {!! Form::text('country', null, ['class'=>'form-control']) !!}

                <label for="">Experience</label>
                {!! Form::textarea('experience', null, ['class'=>'form-control']) !!}

                <label for="">Start Date</label>
                {!! Form::date('start_date', null, ['class'=>'form-control']) !!}

                <label for="">Until</label>
                {!! Form::date('until_date', null, ['class'=>'form-control']) !!}

                {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right buffer']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    <!-- /.row -->
</div>
@stop