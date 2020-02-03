<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../../dist/img/user2-160x160.jpg"  class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Mohamed Adel</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <br>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <li class="{{isActive('home')}}">
                <a href="{{route('admin.home')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{isActive('users')}}">
                <a href="{{route('users.index')}}">
                    <i class="fa fa-users"></i><span>Users</span>
                    
                </a>
            </li>  

            <li class="{{isActive('categories')}}">
                <a href="{{route('categories.index')}}">
                    <i class="fa fa-th"></i><span>Categories</span>
                </a>
            </li> 

            <li class="{{isActive('skills')}}">
                <a href="{{route('skills.index')}}">
                    <i class="fa fa-asterisk"></i><span>Skills</span>
                </a>
            </li> 

            <li class="{{isActive('tags')}}">
                <a href="{{route('tags.index')}}">
                    <i class="fa fa-tags"></i><span>Tags</span>
                </a>
            </li>   
            <li class="{{isActive('pages')}}">
                <a href="{{route('pages.index')}}">
                    <i class="fa fa-bookmark"></i><span>Pages</span>
                </a>
            </li>
            <li class="{{isActive('videos')}}">
                <a href="{{route('videos.index')}}">
                    <i class="fa fa-play"></i><span>Videos</span>
                </a>
            </li>
            <li class="{{isActive('messages')}}">
                <a href="{{route('messages.index')}}">
                    <i class="fa fa-envelope"></i><span>Messages</span>
                </a>
            </li>         

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
