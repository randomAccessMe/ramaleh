@extends('#admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Resume</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    @include('admin.resume.partials._tabs')

    <div class="row" id="add-skill">
        <button class="btn btn-primary buffer pull-right"><i class="fa fa-plus-circle"></i></button>
    </div>

    {!! Form::open([
        'route'   => ['admin::admin.site.edit'],
        'class'   => 'form-inline'
      ]) !!}

        <div class="row buffer" id="skill-form-fields">
            <div class="col-lg-4">
                <div class="input-group'">
                    <div class="row">
                        <label for="">Skill</label>
                    </div>
                    <div class="row">
                        {!! Form::text('name[]', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="input-group'">
                    <label for="">Date Started Practicing</label>
                    {!! Form::date('start_date[]', null, ['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="col-lg-4">
                <div class="input-group'">
                    <label for="">Date Stopped Practicing</label>
                    {!! Form::date('end_date[]', null, ['class'=>'form-control']) !!}
                </div>
            </div>
        </div>

    {!! Form::close() !!}

    <div class="row">
        {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right buffer']) !!}
    </div>

</div>
@stop

@push('scripts')
<script>
    $('#add-skill').on('click', function(){
        $('#skill-form-fields').clone().appendTo('form');
    });
</script>
@endpush