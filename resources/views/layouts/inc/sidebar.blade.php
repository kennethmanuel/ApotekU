<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo"><a href="#" class="simple-text logo-normal">Apoteku</a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/dashboard')  }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('categories') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('categories')  }}">
                    <i class="material-icons">person</i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('categories/create') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('categories/create')  }}">
                    <i class="material-icons">person</i>
                    <p>Add Category</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('medicines') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('medicines')  }}">
                    <i class="material-icons">person</i>
                    <p>Medicines</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('medicines/create') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('medicines/create')  }}">
                    <i class="material-icons">person</i>
                    <p>Add Medicines</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/orders') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin/orders') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Orders</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('users') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('users')  }}">
                    <i class="material-icons">content_paste</i>
                    <p>Users</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('report2') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('report2')  }}">
                    <i class="material-icons">content_paste</i>
                    <p>Report 2</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('report1') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('report1')  }}">
                    <i class="material-icons">content_paste</i>
                    <p>Report 1</p>
                </a>
            </li>
        </ul>
    </div>
</div>
