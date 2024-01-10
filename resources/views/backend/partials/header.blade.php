<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
                <div class="header-left d-flex align-items-center">
                    <div class="menu-toggle-btn mr-20">
                        <i id="menu-toggle" class="lni lni-list lni-32 text-primary"></i>
                    </div>
                    <div class="header-search d-none d-md-flex">
                        <form action="#">
                            <input type="text" placeholder="Search..."/>
                            <button><i class="lni lni-search-alt"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
                <div class="header-right">
                    <!-- profile start -->
                    <div class="profile-box ml-15">
                        <button
                            class="dropdown-toggle bg-transparent border-0"
                            type="button"
                            id="profile"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <div class="profile-info">
                                <div class="info">
                                    <h6>{{auth()->user()->name}}</h6>
                                    <div class="image">
                                        <img
                                            src="{{auth()->user()->profile_photo_path}}"
                                            alt=""
                                        />
                                        <span class="status"></span>
                                    </div>
                                </div>
                            </div>
                            <i class="lni lni-chevron-down"></i>
                        </button>
                        <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="profile"
                        >
                            <li>
                                <a href="{{route('admin.profile.show')}}">
                                    <i class="lni lni-user"></i> Profile
                                </a>
                            </li>
                            @can('role_access')
                                <li>
                                    <a href="{{route('admin.role.index')}}">
                                        <i class="lni lni-users"></i>User Roles
                                    </a>
                                </li>
                            @endcan

                            @can('user_access')
                                <li>
                                    <a href="{{route('admin.user.index')}}">
                                        <i class="lni lni-user"></i> User
                                    </a>
                                </li>
                            @endcan

                            @can('document_category_access')
                                <li>
                                    <a href="{{route('admin.documentCategory.index')}}">
                                        <i class="lni lni-list"></i> Main Category
                                    </a>
                                </li>
                            @endcan
                            <li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit"><i class="lni lni-exit"></i> Sign Out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <!-- profile end -->
                </div>
            </div>
        </div>
    </div>
</header>
