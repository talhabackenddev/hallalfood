		<!-- main-sidebar -->
		<div class="app-sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header ">
				<a href="#" class="desktop-logo logo-light "><img src="{{url('/')}}/dashboard/images/chef.png" ; margin-top: -29px;" class="main-logo" alt="logo"></a>

			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="user-info">


					</div>
				</div>
				<ul class="side-menu">




					<li class="side-item side-item-category">Orders</li>
					<li class="slide">
						<a class="side-menu__item" href="{{route('request.index')}}"><i class="side-menu__icon las la-store-alt"></i><span class="side-menu__label">Chef Request</span></a>
					</li>
					<li class="side-item side-item-category">Settings</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon las la-atom"></i><span class="side-menu__label">Setting</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">

							<li>
								<form action="{{ route('logout') }}" method="POST">
									@csrf

									<button type="submit" class=" sub-slide-item" style=" color:red; background-color: Transparent; background-repeat:no-repeat; border: none; cursor:pointer; overflow: hidden; outline:none;">Log Out</button>

								</form>
							</li>
							<li class="slide">
								<a class=" sub-slide-item" href="{{route('admin.password.change')}}">Password Change</a>
							</li>
						</ul>
					</li>
				</ul>

			</div>
		</aside>
		<!-- main-sidebar -->