<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts._head_panel')
</head>

<body class="fix-header">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
    </svg>
</div>
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
        <div class="navbar-header">
            <div class="top-left-part">
                <!-- Logo -->
                <a class="logo" href="index.html">
                    <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="../images/admin-logo.png" alt="home"
                                                          class="dark-logo"/><!--This is light logo icon--><img
                                src="../images/admin-logo-dark.png" alt="home" class="light-logo"/>
                    </b>
                    <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="../images/admin-text.png" alt="home"
                                                          class="dark-logo"/><!--This is light logo text--><img
                                src="../images/admin-text-dark.png" alt="home" class="light-logo"/>
                     </span> </a>
            </div>
            <!-- /Logo -->
            <ul class="nav navbar-top-links navbar-right pull-right">

                <li>
                    <a class="profile-pic" href="#"> <img src="../images/users/varun.jpg" alt="user-img"
                                                          width="36" class="img-circle"><b class="hidden-xs">Steave</b></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-header -->
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>
    <!-- End Top Navigation -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
            <div class="sidebar-head">
                <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span>
                </h3>
            </div>
            <ul class="nav" id="side-menu">
                <li style="padding: 70px 0 0;">
                    <a href="/panel" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Статистика</a>
                </li>
                <li>
                    <a href="/panel/news" class="waves-effect"><i class="fa fa-hacker-news fa-fw" aria-hidden="true"></i>Новости</a>
                </li>
            </ul>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Left Sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="page-wrapper">
        <div class="container-fluid">

            {{$content}}

        </div>
    </div>
    <!-- /.container-fluid -->
    <footer class="footer text-center"> 2018 &copy; Quenix Software</footer>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
</div>
@include('layouts._scripts_panel')
</body>

</html>
