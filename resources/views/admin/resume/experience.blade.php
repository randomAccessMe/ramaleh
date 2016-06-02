@extends('#admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Resume</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @include('admin.resume.partials._tabs')

                <div class="row">
                    <button class="btn btn-primary buffer pull-right" id="add-job">
                        <i class="fa fa-plus-circle"></i>
                    </button>
                </div>

                {!! Form::open([
                    'route'   => ['admin::experience.update'],
                    'class'   => 'buffer-top'
                  ]) !!}

                <div id="form-container">
                    @forelse($jobs as $job)
                        @include('admin.resume.partials._experience_form')
                    @empty
                        @include('admin.resume.partials._experience_form')
                    @endforelse
                </div>

                {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right buffer']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@push('scripts')
<script>
    $('#add-job').data('iterator', 1).on('click', function () {
        $(this).data('iterator', $(this).data('iterator') + 1);
        var iteration = $(this).data('iterator');
        var clone = $('#job-form-fields').clone();
        clone.find('input, textarea').each(function () {
            var fieldName = $(this).attr('name');
            $(this).val(null).attr({
                name: fieldName.replace(/[a-z]{3}\[\d\]/i, 'new['+iteration+']')
            });
        });
        clone.appendTo('#form-container');
    });
</script>
@endpush