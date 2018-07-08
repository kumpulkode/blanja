@extends('layouts.backend')

@section('content-css')
@endsection

@section('title')
	<i class="icon-home2 position-left"></i> <span class="text-semibold">Admin</span> - Dashboard
@endsection

@section('breadcrumb')
	<li><a href="{{ route('index') }}"><i class="icon-home2 position-left"></i> Home</a></li>
	<li><a href="{{route('admin')}}">Admin</a></li>
	<li class="active">Dashboard</li>

	{{-- <a href="{{ route('admin.form.create') }}" class="btn btn-primary">Create Form</a> --}}

@endsection

@section('breadcrumb-right')
<ul class="breadcrumb-elements">
	<li><a href="{{ route('admin.form.create') }}" class="btn btn-default"><i class="icon-plus2 position-left"></i>Create Form</a></li>
</ul>
@endsection

@section('content')
	<!-- Simple panel -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Form Example</h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			<p>Welcome to Dashboard Admin, Use it with responsibility</p>
			<blockquote>
			  	<p>With great power comes great responsibility.</p>
			</blockquote>
		</div>
	</div>
	<!-- /simple panel -->

	<!-- Example Table -->
	@include('admin.form.exampletable')
	<!-- /Example Table -->

	<!-- jGrowl notifications -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">jGrowl notifications</h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			jGrowl is a pretty flexible and easy to use jQuery plugin that raises unobtrusive messages within the browser, similar to the way that OS X's Growl Framework works. The idea is simple, deliver notifications to the end user in a noticeable way that doesn't obstruct the work flow and yet keeps the user informed. Supports 6 screen positions, 5 contextual color alternatives and various options.
		</div>

		<div class="table-responsive">
			<table class="table">
				<tbody>
					<tr>
						<th colspan="3" class="active">Solid color notifications</th>
					</tr>
					<tr>
						<td style="width: 20%;">Default notice</td>
						<td style="width: 20%;"><button type="button" class="btn btn-primary btn-sm" id="jgrowl-default">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Basic configuration using <code>theme: 'bg-primary'</code> theme added to the config</td>
					</tr>
					<tr>
						<td>Danger notice</td>
						<td><button type="button" class="btn btn-danger btn-sm" id="jgrowl-danger">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Danger notification. To use, add <code>theme: 'bg-danger'</code> option to the notification configuration</td>
					</tr>
					<tr>
						<td>Success notice</td>
						<td><button type="button" class="btn btn-success btn-sm" id="jgrowl-success">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Success notification. To use, add <code>theme: 'bg-success'</code> option to the notification configuration</td>
					</tr>
					<tr>
						<td>Warning notice</td>
						<td><button type="button" class="btn btn-warning btn-sm" id="jgrowl-warning">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Warning notification. To use, add <code>theme: 'bg-warning'</code> option to the notification configuration</td>
					</tr>
					<tr>
						<td>Info notice</td>
						<td><button type="button" class="btn btn-info btn-sm" id="jgrowl-info">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Info notification. To use, add <code>theme: 'bg-info'</code> option to the notification configuration</td>
					</tr>
					<tr class="border-solid">
						<td>Notice with left icon</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-solid-styled-left">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Solid color notification with left icon. To use, add <code>'bg-* alert-styled-left'</code> to the <code>theme</code> option</td>
					</tr>
					<tr>
						<td>Notice with right icon</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-solid-styled-right">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Solid color notification with right icon. To use, add <code>'bg-* alert-styled-right'</code> to the <code>theme</code> option</td>
					</tr>
					<tr>
						<td>Custom colors</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-solid-custom-styled">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Alert sith custom styles. To use, add <code>'alert-styled-custom'</code> with other classes to the <code>theme</code> option</td>
					</tr>
					<tr>
						<td>Rounded alert</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-rounded">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Alert with rounded corners. To use, add <code>'alert-rounded'</code> to the <code>theme</code> option</td>
					</tr>

					<tr class="border-double">
						<th colspan="3" class="active">Basic notification styling</th>
					</tr>
					<tr>
						<td>Default notice</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-alert-default">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Default notification style. To use, add <code>theme: 'alert-*'</code> contextual class to the plugin configuration</td>
					</tr>
					<tr>
						<td>Left icon</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-styled-left">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Notification with left icon. To use, add <code>'alert-styled-left'</code> with contextual class to the <code>theme</code> option</td>
					</tr>
					<tr>
						<td>Right icon</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-styled-right">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Notification with right icon. To use, add <code>'alert-styled-right'</code> with contextual class to the <code>theme</code> option</td>
					</tr>
					<tr>
						<td>Custom styles</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-custom-styled">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Notification with custom color variations of text, border and background</td>
					</tr>
					<tr>
						<td>Display arrow</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-styled-arrow">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Display arrow. To use, add <code>'alert-arrow-left'</code> or <code>*-right</code> to the <code>theme</code> option</td>
					</tr>

					<tr class="border-double">
						<th colspan="3" class="active">jGrowl options</th>
					</tr>
					<tr>
						<td>Sticky notice</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-sticky">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>When set to <code>true</code> a message will stick to the screen until it is intentionally closed by the user</td>
					</tr>
					<tr>
						<td>Long life</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-long-life">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>The lifespan of a non-sticky message on the screen. In current example it is 10 seconds</td>
					</tr>
					<tr>
						<td>Animation speed</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-animation">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>The animation speed used to open and close a notification. In current example it is <code>100ms</code></td>
					</tr>
					<tr>
						<td>Callbacks</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-callbacks">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>All callbacks receive the notification's DOM context, the notifications message and it's option object. Check out your <code>console</code></td>
					</tr>

					<tr class="border-double">
						<th colspan="3" class="active">jGrowl positions</th>
					</tr>
					<tr>
						<td>Top left position</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-top-left">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Top left notification position. To use, add <code>position: 'top-left'</code> option to the notification config</td>
					</tr>
					<tr>
						<td>Top center position</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-top-center">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Top center notification position. To use, add <code>position: 'top-center'</code> option to the notification config</td>
					</tr>
					<tr>
						<td>Top right position</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-top-right">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Top right notification position. To use, add <code>position: 'top-right'</code> option to the notification config</td>
					</tr>
					<tr>
						<td>Page center position</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-center">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Center notification position. To use, add <code>position: 'center'</code> option to the notification config</td>
					</tr>
					<tr>
						<td>Bottom left position</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-bottom-left">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Bottom left notification position. To use, add <code>position: 'bottom-left'</code> option to the notification config</td>
					</tr>
					<tr>
						<td>Bottom center position</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-bottom-center">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Bottom center notification position. To use, add <code>position: 'bottom-center'</code> option to the notification config</td>
					</tr>
					<tr>
						<td>Bottom right position</td>
						<td><button type="button" class="btn btn-default btn-sm" id="jgrowl-bottom-right">Launch <i class="icon-play3 position-right"></i></button></td>
						<td>Bottom right notification position. To use, add <code>position: 'bottom-right'</code> option to the notification config</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- /jGrowl notifications -->

@endsection

@section('modal')
@endsection

@section('content-js')
{{-- <script type="text/javascript" src="{{ mix('vendor/datatables/datatables.min.js') }}"></script> --}}
<script src="{{ asset('/vendor/datatables/datatables.min.js') }}"></script>

<script type="text/javascript">
	// Setting datatable defaults
    $.extend( $.fn.dataTable.defaults, {
        autoWidth: false,
        columnDefs: [{ 
            orderable: false,
            width: '100px',
            targets: [ 5 ]
        }],
        dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
        language: {
            search: '<span>Filter:</span> _INPUT_',
            searchPlaceholder: 'Type to filter...',
            lengthMenu: '<span>Show:</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
        drawCallback: function () {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
        },
        preDrawCallback: function() {
            $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
        }
    });


    // Datatable 'length' options
    $('.datatable-show-all').DataTable({
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
</script>
<script type="text/javascript">
	 // Contoh jGrowl plugin
    // ------------------------------

    // Defaults override - hide "close all" button
    $.jGrowl.defaults.closer = false;


    //
    // Contextual options
    //

    // Solid color theme
    $('#jgrowl-default').on('click', function () {
        $.jGrowl('We are glad to see you again', {
            header: 'Good morning!',
            theme: 'bg-primary'
        });
    });

    // Danger notification
    $('#jgrowl-danger').on('click', function () {
        $.jGrowl('Change a few things up and try submitting again', {
            header: 'Oh snap!',
            theme: 'bg-danger'
        });
    });

    // Success notification
    $('#jgrowl-success').on('click', function () {
        $.jGrowl('You successfully read this important alert message', {
            header: 'Well done!',
            theme: 'bg-success'
        });
    });

    // Warning notification
    $('#jgrowl-warning').on('click', function () {
        $.jGrowl('Better check yourself, you\'re not looking too good', {
            header: 'Attention Here!',
            theme: 'bg-warning'
        });
    });

    // Info notification
    $('#jgrowl-info').on('click', function () {
        $.jGrowl('This alert needs your attention, but it\'s not super important.', {
            header: 'Heads up!',
            theme: 'bg-info'
        });
    });



    //
    // Notification styling
    //

    // Solid left
    $('#jgrowl-solid-styled-left').on('click', function () {
        $.jGrowl('Solid color notification with left icon', {
            header: 'Left icon',
            theme: 'alert-styled-left bg-danger'
        });
    });

    // Solid right
    $('#jgrowl-solid-styled-right').on('click', function () {
        $.jGrowl('Solid color notification with right icon', {
            header: 'Right icon',
            theme: 'alert-styled-right bg-info'
        });
    });

    // Solid custom
    $('#jgrowl-solid-custom-styled').on('click', function () {
        $.jGrowl('Notification with custom colors', {
            header: 'Custom styling',
            theme: 'bg-teal alert-styled-left alert-styled-custom'
        });
    });


    // Styled left
    $('#jgrowl-styled-left').on('click', function () {
        $.jGrowl('Notification with left contextual icon', {
            header: 'Left icon',
            theme: 'alert-bordered alert-styled-left alert-danger'
        });
    });

    // Styled right
    $('#jgrowl-styled-right').on('click', function () {
        $.jGrowl('Notification with right contextual icon', {
            header: 'Right icon',
            theme: 'alert-bordered alert-styled-right alert-danger'
        });
    });

    // Custom style
    $('#jgrowl-custom-styled').on('click', function () {
        $.jGrowl('Notification with custom style', {
            header: 'Custom style',
            theme: 'alert-styled-left alert-styled-custom alpha-teal text-teal-900'
        });
    });

    // Styled with arrow
    $('#jgrowl-styled-arrow').on('click', function () {
        $.jGrowl('Styled alert with arrow', {
            header: 'Styled with arrow',
            theme: 'alert-styled-left alert-arrow-left alert-primary'
        });
    });


    // Rounded
    $('#jgrowl-rounded').on('click', function () {
        $.jGrowl('Alert with rounded corners', {
            theme: 'bg-primary alert-rounded'
        });
    });

    // Basic style
    $('#jgrowl-alert-default').on('click', function () {
        $.jGrowl('Default alert style example', {
            header: 'Default alert style',
            theme: 'alert-bordered alert-primary'
        });
    });



    //
    // Options
    //

    // Sticky notification
    $('#jgrowl-sticky').on('click', function () {
        $.jGrowl('I am a sticky message', {
            header: 'Sticky message',
            sticky: true,
            theme: 'bg-slate-600'
        });
    });

    // Long life message
    $('#jgrowl-long-life').on('click', function () {
        $.jGrowl('A message that will live a little longer.', {
            header: 'Long life message',
            life: 10000,
            theme: 'bg-slate-600'
        });
    });

    // Callbacks
    $('#jgrowl-callbacks').on('click', function () {
        $.jGrowl('Check out your console', {
            theme: 'bg-slate-600',
            life: 5000,
            header: 'Callbacks',
            beforeOpen: function(e,m,o) {
                console.log("I am going to be opened!", this);
            },
            afterOpen: function(e,m,o) {
                console.log("I am opened!", this);
            },
            close: function(e,m,o) {
                console.log("I am closed!", this);
            }
        });
    });

    // Animation options
    $('#jgrowl-animation').on('click', function () {
        $.jGrowl('I am a notice!', {
            speed: 100,
            theme: 'bg-danger',
            header: 'Fast animation speed'
        });
    });



    //
    // Positions
    //

    // Top left
    $('#jgrowl-top-left').on('click', function () {
        $('body').find('.jGrowl').attr('class', '').attr('id', '').hide();
        $.jGrowl('I am a jGrowl notice!', {
            position: 'top-left',
            theme: 'bg-teal',
            header: 'Top Left position'
        });
    });

    // Top center
    $('#jgrowl-top-center').on('click', function () {
        $('body').find('.jGrowl').attr('class', '').attr('id', '').hide();
        $.jGrowl('I am a jGrowl notice!', {
            position: 'top-center',
            theme: 'bg-teal',
            header: 'Top Center position'
        });
    });

    // Top right
    $('#jgrowl-top-right').on('click', function () {
        $('body').find('.jGrowl').attr('class', '').attr('id', '').hide();
        $.jGrowl('I am a jGrowl notice!', {
            position: 'top-right',
            theme: 'bg-teal',
            header: 'Top Right position'
        });
    });


    // Center
    $('#jgrowl-center').on('click', function () {
        $('body').find('.jGrowl').attr('class', '').attr('id', '').hide();
        $.jGrowl('I am a jGrowl notice!', {
            position: 'center',
            theme: 'bg-danger',
            header: 'Center position'
        });
    });


    // Bottom left
    $('#jgrowl-bottom-left').on('click', function () {
        $('body').find('.jGrowl').attr('class', '').attr('id', '').hide();
        $.jGrowl('I am a jGrowl notice!', {
            position: 'bottom-left',
            theme: 'bg-info',
            header: 'Bottom Left position'
        });
    });

    // Bottom right
    $('#jgrowl-bottom-right').on('click', function () {
        $('body').find('.jGrowl').attr('class', '').attr('id', '').hide();
        $.jGrowl('I am a jGrowl notice!', {
            position: 'bottom-right',
            theme: 'bg-info',
            header: 'Bottom Right position'
        });
    });

    // Bottom center
    $('#jgrowl-bottom-center').on('click', function () {
        $('body').find('.jGrowl').attr('class', '').attr('id', '').hide();
        $.jGrowl('I am a jGrowl notice!', {
            position: 'bottom-center',
            theme: 'bg-info',
            header: 'Bottom Center position'
        });
    });
</script>
@endsection