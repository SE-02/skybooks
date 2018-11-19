<body class="hold-transition skin-blue fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <?= $this->Html->link('<span class="logo-mini"><b>BS</b></span><span class="logo-lg"><b>BookStore</b></span>', '/', ['class' => 'logo' ,'escape' => false]) ?>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="/Acounts/logout" >
                               Đăng xuất
                            </a>
                           
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">DANH MỤC</li>
                    <li><?= $this->Html->link('<i class="fa fa fa-home"></i> <span>Trang chủ</span>', '/', ['escape' => false]) ?></li>

                    
                     <li class="treeview">

                        <a href="">
                            <i class="fa fa-plus"></i> <span>Quản lí sản phẩm </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> <span>Thêm sản phẩm</span>', ['controller' => 'Products','action' => 'add'], ['escape' => false]) ?></li>
                            <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> <span>Danh sách sản phẩm </span>', ['controller' => 'Products', 'action' => 'view'], ['escape' => false]) ?></li>
                            
                        </ul>
                    </li> 

                    <li><?=
                            $this->Html->link('<i class="fa fa-book"></i> <span>Danh mục sách</span>', [
                                'controller' => 'Catalog', 'action' => 'add'], ['escape' => false])
                    ?></li>
                    
                    <li class="treeview">

                        <a href="">
                            <i class="fa fa-plus"></i> <span>Quản lí kho hàng </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> <span>Tạo mới kho</span>', ['controller' => 'WareHouses','action' => 'add'], ['escape' => false]) ?></li>
                            
                            <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> <span>quản lí kho hàng</span>', ['controller' => 'ManageWareHouses', 'action' => 'quanlikho'], ['escape' => false]) ?></li>
                            <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> <span>Chi tiết kho hàng</span>', ['controller' => 'ManageWareHouses', 'action' => 'chitietkho'], ['escape' => false]) ?></li>
                            
                        </ul>
                    </li> 

                    <li class="treeview">

                        <a href="">
                            <i class="fa fa-truck"></i> <span>Quản lí đơn hàng </span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> <span>Đơn hàng chưa giao</span>', ['controller' => 'Bills','action' => 'donhangchuagiao'], ['escape' => false]) ?></li>
                            <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> <span>Đơn hàng đang giao</span>', ['controller' => 'Bills', 'action' => 'donhangdanggiao'], ['escape' => false]) ?></li>
                            <li><?= $this->Html->link('<i class="fa fa-circle-o"></i> <span>Đơn hàng đã giao</span>', ['controller' => 'Bills', 'action' => 'donhangdagiao'], ['escape' => false]) ?></li>
                        </ul>
                    </li>
                    <li><?=
                            $this->Html->link('<i class="fa fa-plus"></i> <span>Báo cáo bán hàng</span>', [
                                'controller' => 'DetailBills', 'action' => 'Baocaobanhang'], ['escape' => false])
                    ?></li>

                   </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- =============================================== -->

