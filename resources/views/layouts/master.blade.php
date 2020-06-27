<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>@yield('title')</title>

	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

	<!-- Morris -->
	<link href="{{ asset('assets/css/plugins/morris/morris-0.4.3.min.css') }}" rel="stylesheet">

	<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

	@yield('css')

</head>

<body>
	<div id="wrapper">
		<nav class="navbar-default navbar-static-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav metismenu" id="side-menu">
					<li class="nav-header">
						<div class="dropdown profile-element">
							<span>
								<img alt="image" class="img-circle" src="img/profile_small.jpg" />
							</span>
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<span class="clear">
									<span class="block m-t-xs">
										<strong class="font-bold">David Williams</strong>
									</span>
									<span class="text-muted text-xs block">Art Director
										<b class="caret"></b>
									</span>
								</span>
							</a>
							<ul class="dropdown-menu animated fadeInRight m-t-xs">
								<li>
									<a href="profile.html">Profile</a>
								</li>
								<li>
									<a href="contacts.html">Contacts</a>
								</li>
								<li>
									<a href="mailbox.html">Mailbox</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="login.html">Logout</a>
								</li>
							</ul>
						</div>
						<div class="logo-element">
							IN+
						</div>
					</li>
					<li>
						<a href="{{ url('/')}}">
							<i class="fa fa-pie-chart"></i>
							<span class="nav-label">Dashboard</span>
						</a>
					</li>

					<li>
						<a href="#">
							<i class="fa fa-bar-chart-o"></i>
							<span class="nav-label">Siswa</span>
							<span class="fa arrow"></span>
						</a>
						<ul class="nav nav-second-level collapse">
							<li>
								<a href="graph_flot.html">Daftar Siswa</a>
							</li>
							<li>
								<a href="{{ url('tambah') }}">Tambah Siswa</a>
							</li>
						</ul>
					</li>					
					
					<li class="landing_link">
						<a target="_blank" href="landing.html">
							<i class="fa fa-star"></i>
							<span class="nav-label">Landing Page</span>
							<span class="label label-warning pull-right">NEW</span>
						</a>
					</li>
					<li class="special_link">
						<a href="package.html">
							<i class="fa fa-database"></i>
							<span class="nav-label">Package</span>
						</a>
					</li>
				</ul>

			</div>
		</nav>

		<div id="page-wrapper" class="gray-bg">
			<div class="row border-bottom">
				<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
							<i class="fa fa-bars"></i>
						</a>
						<form role="search" class="navbar-form-custom" action="search_results.html">
							<div class="form-group">
								<input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
							</div>
						</form>
					</div>
					<ul class="nav navbar-top-links navbar-right">

					<li>
							<a href="login.html">
								<i class="fa fa-sign-out"></i> Log out
							</a>
						</li>
					</ul>

				</nav>
			</div>
	
	@yield('content')

		


		</div>
	</div>

	<!-- Mainly scripts -->
	<script src="{{ asset('assets/js/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

	<!-- Flot -->
	<!-- <script src="{{ asset('assets/js/plugins/flot/jquery.flot.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/flot/jquery.flot.spline.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/flot/jquery.flot.resize.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/flot/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/flot/jquery.flot.symbol.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/flot/curvedLines.js') }}"></script> -->

	<!-- Peity -->
	<!-- <script src="{{ asset('assets/js/plugins/peity/jquery.peity.min.js') }}"></script>
	<script src="{{ asset('assets/js/demo/peity-demo.js') }}"></script> -->

	<!-- Custom and plugin javascript -->
	<script src="{{ asset('assets/js/inspinia.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/pace/pace.min.js') }}"></script>

	<!-- jQuery UI -->
	<!-- <script src="{{ asset('assets/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script> -->

	<!-- Jvectormap -->
	<!-- <script src="{{ asset('assets/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script> -->

	<!-- Sparkline -->
	<!-- <script src="{{ asset('assets/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script> -->

	<!-- Sparkline demo data  -->
	<!-- <script src="{{ asset('assets/js/demo/sparkline-demo.js') }}"></script> -->


	@yield('js')

	
</body>

</html>