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

    <div class="row">
        <button class="btn btn-primary buffer pull-right" id="add-skill">
            <i class="fa fa-plus-circle"></i>
        </button>
    </div>

    {!! Form::open([
        'route'   => ['admin::skills.update'],
        'class'   => 'form-inline'
      ]) !!}
        <div id="form-container">
            @forelse($skills as $skill)
                @include('admin.resume.partials._skills_form')
            @empty
                @include('admin.resume.partials._skills_form')
            @endforelse

        </div>

        <div class="row">
            {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right buffer']) !!}
        </div>

    {!! Form::close() !!}


</div>
@stop

@push('scripts')
<script>

    //TODO: extract into a function
    $('#add-skill').data('iterator', 1).on('click', function () {
        $(this).data('iterator', $(this).data('iterator') + 1);
        var iteration = $(this).data('iterator');
        var clone = $('.skill-form-fields').first().clone();
        clone.find('input, textarea').each(function () {
            var fieldName = $(this).attr('name');
            $(this).val(null).attr({
                name: fieldName.replace(/[a-z]{3}\[\d\]/i, 'new['+iteration+']')
            });
        });
        clone.find('.delete-skill').removeAttr('href')
        clone.appendTo('#form-container');
    });

    $('#form-container').on('click', '.delete-skill', function() {
        if($('.skill-form-fields').length <= 1) {
            alert('This is the last Skill!');
            return;
        }
        $(this).parents('.skill-form-fields').remove();
    });
</script>
@endpush