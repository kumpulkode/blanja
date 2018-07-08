@extends('layouts.backend')

@section('content-css')
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote.css') }}">
@endsection

@section('title')
	<i class="icon-home2 position-left"></i> <span class="text-semibold">Admin</span> - Dashboard
@endsection

@section('breadcrumb')
	<li><a href="{{ route('index') }}"><i class="icon-home2 position-left"></i> Home</a></li>
	<li><a href="{{route('admin')}}">Admin</a></li>
	<li><a href="{{route('admin.form')}}">Form</a></li>
	<li class="active">Create</li>
@endsection


@section('content')
	<!-- Simple panel -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Insert Form Example</h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			<p>Welcome to Dashboard Admin, Use it with responsibility</p>
			<br>
			  	{!!
                    Form::open([
                        'role' => 'form',
                        'url' => '',
                        'method' => 'post',
                        'enctype' => 'multipart/form-data'
                    ])
                !!}
				
					@include('admin.form._form')

				  	<div class="form-group">
				    	<button type="submit" class="btn btn-primary pull-right">Save</button>
				  	</div>

				{!! Form::close() !!}
		</div>
	</div>
	<!-- /simple panel -->

@endsection

@section('modal')
@endsection

@section('content-js')
<script type="text/javascript" src="{{ mix('js/datepicker.js') }}"></script>
<script type="text/javascript" src="{{ mix('js/pickadate.js') }}"></script>
<script type="text/javascript">
	$('.single-date').datepicker({ 
        format: "dd/mm/yyyy",
	    autoclose: true,
	    todayHighlight: true
    });

	$('.daterange-time').daterangepicker({
        timePicker: true,
        applyClass: 'bg-slate-600',
        cancelClass: 'btn-default',
        locale: {
            format: 'MM/DD/YYYY h:mm a'
        }
    });

    //pickdate.js
    $('.pickadate').pickadate();
</script>
<script src="{{ asset('/vendor/summernote/summernote.js') }}"></script>
<script>
    $('.summernote').summernote({
        placeholder: 'Silahkan isi Content',
        height: 300,
        toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link', 'picture'] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    });
</script>
@endsection