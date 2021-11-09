<div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Tin Tức</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('Admin/show-news')}}">Xem DS Tin Tức</a></li>
						<li><a href="{{URL::to('Admin/add-news')}}">Thêm Tin Tức</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Lời Chúa</span>
                    </a>
                    <ul class="sub">
                        <li><a href="basic_table.html">Xem Lời Chúa</a></li>
                        <li><a href="responsive_table.html">Thêm Lời Chúa</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Thông Báo</span>
                    </a>
                    <ul class="sub">
                        <li><a href="form_component.html">Xem Thông Báo</a></li>
                        <li><a href="form_validation.html">Thêm Thông Báo</a></li>
						<li><a href="dropzone.html">Dropzone</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Trực Tuyến </span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.html">Video Trực tuyến</a></li>
                        <li><a href="mail_compose.html">Thêm Link Video</a></li>
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Poter</span>
                    </a>
                    <ul class="sub">
                        <li><a href="gallery.html">Gallery</a></li>
						<li><a href="404.html">404 Error</a></li>
                        <li><a href="registration.html">Registration</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{URL::to('Admin/logout')}}">
                        <i class="fa fa-user"></i>
                        <span>Login out</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
    