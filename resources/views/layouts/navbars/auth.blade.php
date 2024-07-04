<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{asset('assets')}}/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active d-none">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="../demo1/index.html">
                                    <span class="sub-item">Dashboard 1</span>
                                </a>
                            </li>
                            <li>
                                <a href="../demo2/index.html">
                                    <span class="sub-item">Dashboard 2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Start of WMS -->
                <li class="nav-item">
                    <a href="/">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="badge badge-success d-none">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#user">
                        <i class="fas fa-users"></i>
                        <p>User</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ $elementActive == 'user' || $elementActive == 'customer' ? 'show' : '' }}" id="user">
                        <ul class="nav nav-collapse">
                            <li class="{{ $elementActive == 'user' ? "active" : ""}}">
                                <a href="{{url('/users')}}">
                                    <span class="sub-item">Employee</span>
                                </a>
                            </li>
                            <li class="{{ $elementActive == 'customer' ? "active" : ""}}">
                                <a href="{{url('/customers')}}">
                                    <span class="sub-item">Customer</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Management</h4>
                </li>
                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fas fas fa-box"></i>
                        <p>Inventory</p>
                        <span class="badge badge-success d-none">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fas fa-shopping-cart"></i>
                        <p>Order</p>
                        <span class="badge badge-success d-none">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fas fa-inbox"></i>
                        <p>Product</p>
                        <span class="badge badge-success d-none">4</span>
                    </a>
                </li>
                <!-- End of WMS -->
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->