<aside class="sidebar-nav-wrapper">
    <div class="navbar-logo">
        <a href="{{ route('admin.dashboard') }}">
            <h4>{{ config('app.name') }}</h4>
        </a>
    </div>
    <nav class="sidebar-nav">
        <ul>
            {{-- dashboard --}}
            <li class="nav-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22">
                            <path
                                d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                        </svg>
                    </span>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            @can('office_setting_access')
                <li class="nav-item nav-item-has-children">
                    <a href="#" class="{{ request()->is('admin/setting/*') ? '' : 'collapsed' }}"
                        data-bs-toggle="collapse" data-bs-target="#setting" aria-controls="setting"
                        aria-expanded="{{ request()->is('admin/setting/*') }}" aria-label="Toggle navigation">
                        <span class="icon">
                            <i class="mdi mdi-home"></i>
                        </span>
                        <span class="text">Office Details</span>
                    </a>
                    <ul id="setting" class="collapse dropdown-nav {{ request()->is('admin/setting/*') ? 'show' : '' }}">
                        <li>
                            <a class="{{ request()->is('admin/setting/officeSetting*') ? 'active' : '' }}"
                                href="{{ route('admin.officeSetting.index') }}"> Office Setting </a>
                        </li>
                        <li>
                            <a class="{{ request()->is('admin/setting/officeDetail*') ? 'active' : '' }}"
                                href="{{ route('admin.officeDetail.index') }}">Office Details </a>
                        </li>

                    </ul>
                </li>
            @endcan
            {{-- @can('menu_access')
              <li class="nav-item {{request()->is('admin/menu*') ? 'active': ''}}">
                    <a href="{{route('admin.menu.index')}}">
                <span class="icon">
                   <i class="mdi mdi-view-list"></i>
               </span>
                       <span class="text">Menu</span>
                   </a>
                </li>
            @endcan --}}

            <li class="nav-item nav-item-has-children">
                <a href="#" class="{{ request()->is('admin/events/*') ? '' : 'collapsed' }}"
                    data-bs-toggle="collapse" data-bs-target="#event" aria-controls="Report"
                    aria-expanded="{{ request()->is('admin/events/*') }}" aria-label="Toggle navigation">
                    <span class="icon">
                        <i class="mdi mdi-wallet-membership"></i>
                    </span>
                    <span class="text">Events</span>
                </a>
                <ul id="event" class="collapse dropdown-nav {{ request()->is('admin/events/*') ? 'show' : '' }}">
                    <li>
                        <a class="{{ request()->is('admin/events/eventDetail') ? 'active' : '' }}"
                            href="{{ route('admin.eventDetail.index') }}"> Event Detail </a>
                        <a class="{{ request()->is('admin/events/event') ? 'active' : '' }}"
                            href="{{ route('admin.event.index') }}"> Events </a>
                    </li>
                </ul>
            </li>

            {{-- <li class="nav-item">
                <a href="{{ route('admin.blog.index', 'blog') }}">
                    <span class="icon">
                        <i class="mdi mdi-message-text"></i>
                    </span>
                    <span class="text">Blogs</span>
                </a>
            </li> --}}



            <li class="nav-item nav-item-has-children">
                <a href="#" class="{{ request()->is('admin/blogs/*') ? '' : 'collapsed' }}"
                    data-bs-toggle="collapse" data-bs-target="#blog" aria-controls="Report"
                    aria-expanded="{{ request()->is('admin/blogs/*') }}" aria-label="Toggle navigation">
                    <span class="icon">
                        <i class="mdi mdi-wallet-membership"></i>
                    </span>
                    <span class="text">Blogs</span>
                </a>
                <ul id="blog" class="collapse dropdown-nav {{ request()->is('admin/blogs/*') ? 'show' : '' }}">
                    <li>
                        <a class="{{ request()->is('admin/blogs/blog') ? 'active' : '' }}"
                            href="{{ route('admin.blog.index') }}"> Blogs </a>
                        <a class="{{ request()->is('admin/blogs/comment') ? 'active' : '' }}"
                            href="{{ route('admin.comment.index') }}"> Comment </a>
                    </li>
                </ul>
            </li>

            
            
            
            <li class="nav-item">
                <a href="{{ route('admin.popup.index') }}">
                    <span class="icon">
                        <i class="mdi mdi-message-text"></i>
                    </span>
                    <span class="text">Popup Notification</span>
                </a>
            </li>


            {{--            @can('employee_access') --}}
            {{--               --}}
            {{--                <li class="nav-item nav-item-has-children"> --}}
            {{--                    <a --}}
            {{--                        href="#" --}}
            {{--                        class="{{request()->is('admin/employees/*') ? '' : 'collapsed'}}" --}}
            {{--                        data-bs-toggle="collapse" --}}
            {{--                        data-bs-target="#Employees" --}}
            {{--                        aria-controls="Employees" --}}
            {{--                        aria-expanded="{{request()->is('admin/employees/*')}}" --}}
            {{--                        aria-label="Toggle navigation" --}}
            {{--                    > --}}
            {{--              <span class="icon"> --}}
            {{--               <i class="mdi mdi-account-tie"></i> --}}
            {{--              </span> --}}
            {{--                        <span class="text">कर्मचारी विवरण</span> --}}
            {{--                    </a> --}}
            {{--                    <ul id="Employees" --}}
            {{--                        class="collapse dropdown-nav {{request()->is('admin/employees/*') ? 'show' : ''}}"> --}}
            {{--                        <li> --}}
            {{--                            <a class="{{request()->is('admin/employees/department*') ? 'active' : ''}}" --}}
            {{--                               href="{{route('admin.department.index')}}"> शाखा </a> --}}
            {{--                        </li> --}}
            {{--                        <li> --}}
            {{--                            <a class="{{request()->is('admin/employees/designation*') ? 'active' : ''}}" --}}
            {{--                               href="{{route('admin.designation.index')}}"> पद </a> --}}
            {{--                        </li> --}}
            {{--                        <li> --}}
            {{--                            <a class="{{request()->is('admin/employees/employee*') ? 'active' : ''}}" --}}
            {{--                               href="{{route('admin.employee.index')}}"> कर्मचारीहरु </a> --}}
            {{--                        </li> --}}
            {{--                        <li> --}}
            {{--                            <a class="{{request()->is('admin/employees/exEmployee*') ? 'active' : ''}}" --}}
            {{--                               href="{{route('admin.exEmployee.index')}}"> पूर्व कर्मचारीहरु </a> --}}
            {{--                        </li> --}}

            {{--                    </ul> --}}
            {{--                </li> --}}
            {{--            @endcan --}}

            {{-- @foreach ($sharedDocumentCategories as $sharedDocumentCategory)

                <li class="nav-item nav-item-has-children">
                    @can('category_access')
                        <a
                            href="#"
                            class="{{request()->is('admin/documentCategory/'.$sharedDocumentCategory->id.'/*') ? '' :'collapsed'}}"
                            data-bs-toggle="collapse"
                            data-bs-target="#document{{$sharedDocumentCategory->id}}"
                            aria-controls="document{{$sharedDocumentCategory->id}}"
                            aria-expanded="{{request()->is('admin/documentCategory/'.$sharedDocumentCategory->id.'/*')}}"
                            aria-label="Toggle navigation"
                        >
                      <span class="icon">
                       <i class="mdi mdi-file-document"></i>
                      </span>
                            <span class="text">{{$sharedDocumentCategory->title}}</span>
                        </a>
                    @endcan
                    <ul id="document{{$sharedDocumentCategory->id}}"
                        class="collapse dropdown-nav {{request()->is('admin/documentCategory/'.$sharedDocumentCategory->id.'/*') ? 'show' : ''}}">
                        <li>
                            @can('category_access')
                                <a class="{{request()->is('admin/documentCategory/'.$sharedDocumentCategory->id.'/category*') ? 'active' : ''}}"
                                   href="{{route('admin.documentCategory.category.index',$sharedDocumentCategory)}}">
                                    वर्ग थप्नुहोस
                                </a>
                            @endcan
                            @can('category_access')
                                <a class="{{request()->is('admin/documentCategory/'.$sharedDocumentCategory->id.'/document*') ? 'active' : ''}}"
                                   href="{{route('admin.documentCategory.document.index',$sharedDocumentCategory)}}"> {{$sharedDocumentCategory->title}}
                                    लिस्ट
                                </a>
                            @endcan
                        </li>
                    </ul>
                </li>
            @endforeach --}}

            @can('photoGallery_access')
                <li class="nav-item nav-item-has-children">
                    <a href="#" class="{{ request()->is('admin/gallery/*') ? '' : 'collapsed' }}"
                        data-bs-toggle="collapse" data-bs-target="#gallery" aria-controls="Employees"
                        aria-expanded="{{ request()->is('admin/gallery/*') }}" aria-label="Toggle navigation">
                        <span class="icon">
                            <i class="mdi mdi-image-search-outline"></i>
                        </span>
                        <span class="text">Gallery</span>
                    </a>
                    <ul id="gallery" class="collapse dropdown-nav {{ request()->is('admin/gallery/*') ? 'show' : '' }}">
                        <li>
                            <a class="{{ request()->is('admin/gallery/photoGallery*') ? 'active' : '' }}"
                                href="{{ route('admin.photoGallery.index') }}"> Photo Gallery </a>
                            <a class="{{ request()->is('admin/gallery/videoGallery*') ? 'active' : '' }}"
                                href="{{ route('admin.videoGallery.index') }}"> Video Gallery </a>
                            {{-- <a class="{{request()->is('admin/gallery/audio*') ? 'active' : ''}}"
                               href="{{route('admin.audio.index')}}"> Audio Gallery </a> --}}
                            {{-- <a class="{{request()->is('admin/gallery/tikTok*') ? 'active' : ''}}"
                               href="{{route('admin.tikTok.index')}}"> Tiktok</a> --}}
                        </li>
                    </ul>
                </li>
            @endcan


            {{-- <li class="nav-item nav-item-has-children">
                <a
                    href="#"
                    class="{{request()->is('admin/report/*') ? '' : 'collapsed'}}"
                    data-bs-toggle="collapse"
                    data-bs-target="#reportCategory"
                    aria-controls="Report"
                    aria-expanded="{{request()->is('admin/report/*')}}"
                    aria-label="Toggle navigation"
                >
          <span class="icon">
           <i class="mdi mdi-image-search-outline"></i>
          </span>
                    <span class="text">Report</span>
                </a>
                <ul id="reportCategory"
                    class="collapse dropdown-nav {{request()->is('admin/report/*') ? 'show' : ''}}">
                    <li>
                        <a class="{{request()->is('admin/report/reportCategory') ? 'active' : ''}}"
                           href="{{route('admin.reportCategory.index')}}"> Add Category </a>
                           <a class="{{request()->is('admin/report/report') ? 'active' : ''}}"
                            href="{{route('admin.report.index')}}"> Add Report </a>
                    </li>
                </ul>
            </li>
 --}}

            <li class="nav-item nav-item-has-children">
                <a href="#" class="{{ request()->is('admin/membership/*') ? '' : 'collapsed' }}"
                    data-bs-toggle="collapse" data-bs-target="#membershipCategory" aria-controls="Report"
                    aria-expanded="{{ request()->is('admin/membership/*') }}" aria-label="Toggle navigation">
                    <span class="icon">
                        <i class="mdi mdi-wallet-membership"></i>
                    </span>
                    <span class="text">Membership</span>
                </a>
                <ul id="membershipCategory"
                    class="collapse dropdown-nav {{ request()->is('admin/membership/*') ? 'show' : '' }}">
                    <li>
                        <a class="{{ request()->is('admin/membership/membershipCategory') ? 'active' : '' }}"
                            href="{{ route('admin.membershipCategory.index') }}"> Add Category </a>
                        <a class="{{ request()->is('admin/membership/membership') ? 'active' : '' }}"
                            href="{{ route('admin.membership.index') }}"> Introduction </a>
                        <a class="{{ request()->is('admin/membership/member') ? 'active' : '' }}"
                            href="{{ route('admin.member.index') }}">Add Member </a>
                        <a class="{{ request()->is('admin/membership/membershipJoin') ? 'active' : '' }}"
                            href="{{ route('admin.joinRequest.index') }}">Membership Join Request </a>
                    </li>
                </ul>
            </li>



            <li class="nav-item nav-item-has-children">
                <a href="#" class="{{ request()->is('admin/job/*') ? '' : 'collapsed' }}"
                    data-bs-toggle="collapse" data-bs-target="#addCity" aria-controls="Report"
                    aria-expanded="{{ request()->is('admin/job/*') }}" aria-label="Toggle navigation">
                    <span class="icon">
                        <i class="mdi mdi-wallet-membership"></i>
                    </span>
                    <span class="text">Job</span>
                </a>
                <ul id="addCity" class="collapse dropdown-nav {{ request()->is('admin/job/*') ? 'show' : '' }}">
                    <li>
                        <a class="{{ request()->is('admin/job/addCity') ? 'active' : '' }}"
                            href="{{ route('admin.addCity.index') }}"> Add City </a>

                        <a class="{{ request()->is('admin/job/job') ? 'active' : '' }}"
                            href="{{ route('admin.job.index') }}"> Add Job </a>

                    </li>
                </ul>
            </li>




            {{-- <li class="nav-item nav-item-has-children">
                <a
                    href="#"
                    class="{{request()->is('admin/works/*') ? '' : 'collapsed'}}"
                    data-bs-toggle="collapse"
                    data-bs-target="#work"
                    aria-controls="Work"
                    aria-expanded="{{request()->is('admin/works/*')}}"
                    aria-label="Toggle navigation"
                >
          <span class="icon">
            <i class="mdi mdi-briefcase"></i>
          </span>
                    <span class="text">About</span>
                </a>
                <ul id="work"
                    class="collapse dropdown-nav {{request()->is('admin/works/*') ? 'show' : ''}}">
                    <li>
                        <a class="{{request()->is('admin/works/workCategory') ? 'active' : ''}}"
                           href="{{route('admin.workCategory.index')}}"> Add category </a>
                           <a class="{{request()->is('admin/works/work') ? 'active' : ''}}"
                            href="{{route('admin.work.index')}}"> Add about </a>
                    </li>
                </ul>
            </li> --}}

            {{-- <li class="nav-item nav-item-has-children">
                    <a
                        href="#"
                        class="{{request()->is('admin/training/*') ? '' : 'collapsed'}}"
                        data-bs-toggle="collapse"
                        data-bs-target="#training"
                        aria-controls="Training"
                        aria-expanded="{{request()->is('admin/training/*')}}"
                        aria-label="Toggle navigation"
                    >
              <span class="icon">
               <i class="mdi mdi-image-search-outline"></i>
              </span>
                        <span class="text">Training</span>
                    </a>
                    <ul id="training"
                        class="collapse dropdown-nav {{request()->is('admin/training/*') ? 'show' : ''}}">
                        <li>
                            <a class="{{request()->is('admin/training/trainingCategory') ? 'active' : ''}}"
                               href="{{route('admin.trainingCategory.index')}}"> Add category </a>
                               <a class="{{request()->is('admin/training/training') ? 'active' : ''}}"
                                href="{{route('admin.training.index')}}"> Add Training </a>
                        </li>
                    </ul>
                </li> --}}


            {{-- <li class="nav-item {{request()->is('admin/tranning*') ? 'active': ''}}">
                   <a href="{{route('admin.tranning.index')}}">
                <span class="icon">
                     <i class="mdi mdi-book-account"></i>
                 </span>
                         <span class="text">Professional Short Courses</span>
                     </a>
                 </li> --}}


            {{-- <li class="nav-item {{request()->is('admin/announcement*') ? 'active': ''}}">
                    <a href="{{route('admin.announcement.index')}}">
                <span class="icon">
                     <i class="mdi mdi-bullhorn"></i>
                 </span>
                         <span class="text">Announcement</span>
                     </a>
                 </li> --}}

            <li class="nav-item {{ request()->is('admin/slider*') ? 'active' : '' }}">
                <a href="{{ route('admin.slider.index') }}">
                    <span class="icon">
                        <i class="mdi mdi-image"></i>
                    </span>
                    <span class="text">Slider</span>
                </a>
            </li>


            <li class="nav-item {{ request()->is('admin/link*') ? 'active' : '' }}">
                <a href="{{ route('admin.link.index') }}">
                    <span class="icon">
                        <i class="mdi mdi-link"></i>
                    </span>
                    <span class="text">Useful Links</span>
                </a>
            </li>


            @can('contact_message_access')
                <li class="nav-item {{ request()->is('admin/contactMessage*') ? 'active' : '' }}">
                    <a href="{{ route('admin.contactMessage.index') }}">
                        <span class="icon">
                            <i class="mdi mdi-message-text"></i>
                        </span>
                        <span class="text">Contact us</span>
                    </a>
                </li>
            @endcan
            {{--            @can('color_access') --}}
            {{--                <li class="nav-item"> --}}
            {{--                    <a href="{{route('admin.color.index')}}"> --}}
            {{--                <span class="icon"> --}}
            {{--                    <i class="mdi mdi-message-text"></i> --}}
            {{--                </span> --}}
            {{--                        <span class="text">रंग</span> --}}
            {{--                    </a> --}}
            {{--                </li> --}}
            {{--            @endcan --}}

        </ul>
    </nav>


</aside>
