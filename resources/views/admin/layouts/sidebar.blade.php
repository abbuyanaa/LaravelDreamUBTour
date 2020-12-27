<div class="page-sidebar-wrapper">
	<div class="page-sidebar navbar-collapse collapse">
		<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<li class="nav-item start active">
				<a href="{{ route('admin.index') }}" class="nav-link nav-toggle">
					<i class="icon-home"></i>
					<span class="title">Home</span>
					<span class="selected"></span>
				</a>
			</li>
			<li class="heading">
				<h3 class="uppercase">Menu</h3>
			</li>
			<li class="nav-item">
				<a href="{{ route('admin.posts.index') }}" class="nav-link">
					<i class="icon-diamond"></i>
					<span class="title">Post</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{ route('admin.news.index') }}" class="nav-link">
					<i class="icon-diamond"></i>
					<span class="title">News</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{ route('admin.agents.index') }}" class="nav-link">
					<i class="icon-diamond"></i>
					<span class="title">Agents</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">
					<i class="icon-diamond"></i>
					<span class="title">About</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{ route('admin.socials.edit', ['1']) }}" class="nav-link">
					<i class="icon-diamond"></i>
					<span class="title">Social</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{ route('admin.bairshil.index') }}" class="nav-link">
					<i class="icon-diamond"></i>
					<span class="title">Address</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="{{ route('admin.category.index') }}" class="nav-link">
					<i class="icon-diamond"></i>
					<span class="title">Category</span>
				</a>
			</li>
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
	<!-- END SIDEBAR -->
</div>