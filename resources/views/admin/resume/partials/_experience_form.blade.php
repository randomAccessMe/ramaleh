@php($prefix = (isset($job) ? 'old['.$job->id.']' : 'new[1]'))
<div id="job-form-fields">
    <div class="panel panel-default">
        <div class="panel-heading">Job</div>
        <div class="panel-body">
            <div class="row buffer">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="row">
                        <label for="">Position Title</label>
                    </div>
                    <div class="row">
                        {!! Form::text($prefix . '[title]', isset($job) ? $job->title : null, ['class'=>'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="row">
                        <label for="">Employer</label>
                    </div>
                    <div class="row">
                        {!! Form::text($prefix . '[employer]', isset($job) ? $job->employer : null, ['class'=>'form-control', 'required']) !!}
                    </div>
                </div>
            </div>

            <div class="row buffer">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row">
                        <label for="">City</label>
                    </div>
                    <div class="row">
                        {!! Form::text($prefix . '[city]', isset($job) ? $job->city : null, ['class'=>'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row">
                        <label for="">State</label>
                    </div>
                    <div class="row">
                        {!! Form::text($prefix . '[state]', isset($job) ? $job->state : null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="row">
                        <label for="">Country</label>
                    </div>
                    <div class="row">
                        {!! Form::text($prefix . '[country]', isset($job) ? $job->country : null, ['class'=>'form-control', 'required']) !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <label for="">Experience</label>
                {!! Form::textarea($prefix . '[experience]', isset($job) ? $job->experience : null, ['class'=>'form-control', 'required']) !!}
            </div>

            <div class="row buffer">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="row">
                        <label for="">Start Date</label>
                    </div>
                    <div class="row">
                        {!! Form::date($prefix . '[start_date]', isset($job) ? $job->start_date : null, ['class'=>'form-control', 'required']) !!}
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="row">
                        <label for="">Until</label>
                    </div>
                    <div class="row">
                        {!! Form::date($prefix . '[until_date]', isset($job) ? $job->until_date : null, ['class'=>'form-control', 'required']) !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>