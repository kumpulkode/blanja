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
@endsection


@section('content')
	<!-- Simple panel -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Welcome Message</h5>
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

@endsection

@section('modal')
@endsection

@section('content-js')
@endsection