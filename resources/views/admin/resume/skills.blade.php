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
        'route'   => ['admin::skills.update'],
        'class'   => 'form-inline'
      ]) !!}
        <div id="form-container">
            @foreach($skills as $skill)
            <div class="row buffer">
                <div class="col-lg-4">
                    <div class="input-group'">
                        <div class="row">
                            <label for="">Skill</label>
                        </div>
                        <div class="row">
                            {!! Form::text('name['.$skill->id.']', $skill->name, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="input-group'">
                        <label for="">Date Started Practicing</label>
{{--                        {!! Form::date('start_date['.$skill->id.']', $skill->start_date, ['class'=>'form-control']) !!}--}}
                        {!! Form::date('start_date['.$skill->id.']', null, ['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="input-group'">
                        <label for="">Date Stopped Practicing</label>
                        {!! Form::date('end_date['.$skill->id.']', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row buffer" id="skill-form-fields">
                <div class="col-lg-4">
                    <div class="input-group'">
                        <div class="row">
                            <label for="">Skill</label>
                        </div>
                        <div class="row">
                            {!! Form::text('new[][name]', null, ['class'=>'form-control']) !!}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="input-group'">
                        <label for="">Date Started Practicing</label>
                        {!! Form::date('new[][start_date]', null, ['class'=>'form-control']) !!}
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="input-group'">
                        <label for="">Date Stopped Practicing</label>
                        {!! Form::date('new[][end_date]', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right buffer']) !!}
        </div>

    {!! Form::close() !!}


</div>
@stop

@push('scripts')
<script>
    $('#add-skill').on('click', function(){
        var clone = $('#skill-form-fields').clone();
        clone.find('input').each(function () {
            $(this).val(null);
        });
        clone.appendTo('#form-container')
    });
</script>
@endpush