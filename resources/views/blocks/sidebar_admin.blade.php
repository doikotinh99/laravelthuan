<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="{{ asset('upload/images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{config('app.name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item border-bottom">
                    <div href="#" class="nav-link border-bottom-0 user-panel p-0 my-2 d-flex" style="background: #fff0 !important; color: #c2c7d0 !important; cursor: pointer">
                        <div class="image">
                            <img src="{{ asset('upload/images/user2-160x160.jpg') }}" class="img-circle elevation-2"
                                 alt="User Image">
                        </div>
                        <div class="info">
                            <p href="#" class="d-block w-100">{{ Auth::user()->name }} <i class="fas fa-angle-left"
                                                                                    style="position: absolute;right: 1rem;top: 0.7rem;"></i>
                            </p>
                        </div>
                    </div>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/mailbox/mailbox.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/compose.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/read-mail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?php if(isset($sidebar) && $sidebar == 'product') echo 'menu-is-opening menu-open'; ?>">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>
                            Products
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" <?php if(isset($sidebar) && $sidebar == 'product') echo 'style="display: block;"'; ?>>
                        <li class="nav-item" id="allPrdAdm">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Products</p>
                            </a>
                        </li>
                        <li class="nav-item" id="list_ctgr">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categoris</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/product/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Product</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?php if(isset($sidebar) && $sidebar == 'blog') echo 'menu-is-opening menu-open'; ?>">
                    <a href="#" class="nav-link">
                        <i class="bi bi-newspaper"></i>
                        <p>
                            Blogs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" <?php if(isset($sidebar) && $sidebar == 'blog') echo 'style="display: block;"'; ?>>
                        <li class="nav-item" id="allBlogAdm">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Blogs</p>
                            </a>
                        </li>
                        <li class="nav-item" id="list_ctgrBlog">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Categoris</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/tin-tuc/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Blog</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" id="admin_all_user">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All User</p>
                            </a>
                        </li>
                        <li class="nav-item" id="admin_vender_user">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nh?? cung c???p</p>
                            </a>
                        </li>
                        <li class="nav-item" id="admin_admin_user">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Qu???n tr??? vi??n</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" id="show_cart_admin">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            shopping cart
                        </p>
                    </a>
                </li>
                <li class="nav-item" id="show_order_admin">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Order
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
