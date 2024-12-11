<aside class="left-sidebar">
	<!-- Sidebar scroll-->
	<div>
		<!-- Sidebar navigation-->
		<nav class="sidebar-nav scroll-sidebar container-fluid">
			<ul id="sidebarnav">
				<!-- ============================= -->
				<!-- Home -->
				<!-- ============================= -->
				<li class="nav-small-cap">
					<i class="ti ti-dots nav-small-cap-icon fs-4"></i>
					<span class="hide-menu">Home</span>
				</li>
				<!-- =================== -->
				<!-- Dashboard -->
				<!-- =================== -->
				<x-ui.sidebar.sidebar-item icon="ti ti-dashboard" text="Dashboard" :url="route('home')"/>


				<!-- ============================= -->
				<!-- Permissions -->
				<!-- ============================= -->
				<x-ui.sidebar.sidebar-item text="Accounts"  is-group>
					<x-slot name="groupItem">
						<x-ui.sidebar.sidebar-item :url="route('home')" text=" Utilisateur"/>
						<x-ui.sidebar.sidebar-item :url="route('home')" text="Administrateurs"/>
					</x-slot>
				</x-ui.sidebar.sidebar-item>
				<!-- ============================= -->
				<!-- Connections -->
				<!-- ============================= -->
                <x-ui.sidebar.sidebar-item icon="ti ti-list"  :active="request()->routeIs('home')" text="Services"  is-group>
                    <x-slot name="groupItem">
                        <x-ui.sidebar.sidebar-item icon="ti ti-file" :active="request()->routeIs('home')" text="List" :url="route('home')" />
                        <x-ui.sidebar.sidebar-item icon="ti ti-plus" :active="request()->routeIs('home')" text="Create " :url="route('home')" />
                    </x-slot>
                </x-ui.sidebar.sidebar-item>
                        <x-ui.sidebar.sidebar-item text="Reservations" :url="route('home')" />
				<!-- ============================= -->
				<!-- Accounts -->
				<!-- ============================= -->
				<x-ui.sidebar.sidebar-item icon="ti ti-blockquote" text="Blog"  is-group>
					<x-slot name="groupItem">
						<x-ui.sidebar.sidebar-item :url="route('home')" text="Publications"/>
						<x-ui.sidebar.sidebar-item :url="route('home')" text="Tags de publications"/>
						<x-ui.sidebar.sidebar-item :url="route('home')" text="Categories de publications"/>
					</x-slot>
				</x-ui.sidebar.sidebar-item>
				<!-- ============================= -->
				<!-- Structures -->
				<!-- ============================= -->
                <x-ui.sidebar.sidebar-item :active="request()->routeIs('home')" icon="ti ti-blockquote" text="Team"  is-group>
                    <x-slot name="groupItem">
                        <x-ui.sidebar.sidebar-item :active="request()->routeIs('home')" icon="ti ti-users" text="List" :url="route('home')"/>
                        <x-ui.sidebar.sidebar-item :active="request()->routeIs('home')" icon="ti ti-plus" text="Create" :url="route('home')"/>
                    </x-slot>
                </x-ui.sidebar.sidebar-item>

				<!-- ============================= -->
				<!-- Log  / Audit -->
				<!-- ============================= -->
				<x-ui.sidebar.sidebar-item text="Clients" url="{{route("home")}}"/>

			</ul>

		</nav>
		<!-- End Sidebar navigation -->
	</div>
	<!-- End Sidebar scroll-->
	<div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3 mx-9 d-block d-lg-none">
		<div class="hstack gap-3 justify-content-between">
			<div class="john-img">
				<img src="{{asset('_materialize_v2/dist/images/profile/user-1.jpg')}}" class="rounded-circle" width="42" height="42" alt="">
			</div>
			<div class="john-title">
				<h6 class="mb-0 fs-4">{{auth('admin')?->user()?->name}}</h6>
				<span class="fs-2">Admin</span>
			</div>
            <form action="{{route('home')}}" method="post">
                @csrf
                <button  class="border-0 bg-transparent text-primary ms-2" tabindex="0" type="submit" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                    <i class="ti ti-power fs-6"></i>
                </button>
            </form>

		</div>
	</div>
</aside>
