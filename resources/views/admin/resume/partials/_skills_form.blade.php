@php($prefix = (isset($skill) ? 'old['.$skill->id.']' : 'new[1]'))
<div class="row buffer" id="skill-form-fields">
    <div class="col-lg-4 col-md-4">
            <div class="row">
                <label for="">Skill</label>
            </div>
            <div class="row">
                {!! Form::text($prefix . '[name]', isset($skill) ? $skill->name : null, ['class'=>'form-control', 'required']) !!}
            </div>
    </div>

    <div class="col-lg-4 col-md-4">
            <div class="row">
                <label for="">Date Started Practicing</label>
            </div>
            <div class="row">
                {!! Form::date($prefix . '[start_date]', isset($skill) ? $skill->start_date : null, ['class'=>'form-control', 'required']) !!}
            </div>
    </div>

    <div class="col-lg-4 col-md-4">
            <div class="row">
                <label for="">Date Stopped Practicing</label>
            </div>
            <div class="row">
                {!! Form::date($prefix . '[end_date]', isset($skill) ? $skill->end_date : null, ['class'=>'form-control', 'required']) !!}
            </div>
    </div>
</div>