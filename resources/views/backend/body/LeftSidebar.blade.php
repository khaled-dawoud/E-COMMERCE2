<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-tags"></i>
                        <span> Categories</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route("admin.category.index") }}">All Category</a></li>
                        <li><a href="{{ route("admin.category.create") }}">Add New Category</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-heart"></i>
                        <span> Products</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route("admin.product.index") }}">All Products</a></li>
                        <li><a href="{{ route("admin.product.create") }}">Add New Product</a></li>
                    </ul>
                </li>

                {{-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-home"></i>
                        <span> Categories</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="">All Category</a></li>
                        <li><a href="">Add New Category</a></li>
                    </ul>
                </li> --}}

                <li class="mm-active">
                    <a href="" class="waves-effect active">
                        <i class="fa fa-users"></i><span class="badge rounded-pill bg-success float-end"></span>
                        <span>Users</span>
                    </a>
                </li>

                <li class="mm-active">
                    <a href="" class="waves-effect active">
                        <i class="fa fa-shopping-cart"></i><span class="badge rounded-pill bg-success float-end"></span>
                        <span>Orders</span>
                    </a>
                </li>

                <li class="mm-active">
                    <a href="" class="waves-effect active">
                        <i class="fa fa-credit-card"></i><span class="badge rounded-pill bg-success float-end"></span>
                        <span>Payments</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
