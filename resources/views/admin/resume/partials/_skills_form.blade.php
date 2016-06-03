@php($prefix = (isset($skill) ? 'old['.$skill->id.']' : 'new[1]'))
<div class="row buffer skill-form-fields">
    <div class="col-lg-4 col-md-4">
        <div class="row">
            {!! Form::label($prefix . '[name]', 'Skill') !!}
        </div>
        <div class="row">
            {!! Form::text($prefix . '[name]', isset($skill) ? $skill->name : null, ['class'=>'form-control', 'required']) !!}
        </div>
    </div>

    <div class="col-lg-4 col-md-4">
        <div class="row">
            {!! Form::label($prefix . '[start_date]', 'Date Started Practicing') !!}
        </div>
        <div class="row">
            {!! Form::date($prefix . '[start_date]', isset($skill) ? $skill->start_date : null, ['class'=>'form-control', 'required']) !!}
        </div>
    </div>

    <div class="col-lg-4 col-md-4">
        <div class="row">
            {!! Form::label($prefix . '[end_date]', 'Date Stopped Practicing') !!}
        </div>
        <div class="row">
            {!! Form::date($prefix . '[end_date]', isset($skill) ? $skill->end_date : null, ['class'=>'form-control', 'required']) !!}
            <a class="btn btn-danger delete-skill" href="{{ isset($skill) ? route('admin::skills.delete', $skill) : '' }}">
                <i class="fa fa-trash"></i>
            </a>
        </div>
    </div>
</div>