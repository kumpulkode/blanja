<div class="sidebar sidebar-main">
	<div class="sidebar-content">

		<!-- User menu -->
		<div class="sidebar-user">
			<div class="category-content">
				<div class="media">
					<a href="#" class="media-left"><img src="{{ asset('images/image.png') }}" class="img-circle img-sm" alt=""></a>
					<div class="media-body">
						<span class="media-heading text-semibold">Candra ATP</span>
						<div class="text-size-mini text-muted">
							<i class="icon-pin text-size-small"></i> &nbsp;SMG, ID
						</div>
					</div>

					<div class="media-right media-middle">
						<ul class="icons-list">
							<li>
								<a href="#"><i class="icon-cog3"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /user menu -->


		<!-- Main navigation -->
		<div class="sidebar-category sidebar-category-visible">
			<div class="category-content no-padding">
				<ul class="navigation navigation-main navigation-accordion">

					<!-- Main -->
					<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
					<li><a href="{{ route('admin') }}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
					<li>
						<a href="#"><i class="icon-stack"></i> <span>Starter kit</span></a>
						<ul>
							<li>
								<a href="#">Form Example</a>
								<ul>
									<li class="active"><a href="{{route('admin.form')}}">Form</a></li>
									<li><a href="#">How To</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="http://lokavor.studio"><i class="icon-lifebuoy"></i> <span>About Lokavor Studio</span></a></li>
					<!-- /main -->

				</ul>
			</div>
		</div>
		<!-- /main navigation -->

	</div>
</div>