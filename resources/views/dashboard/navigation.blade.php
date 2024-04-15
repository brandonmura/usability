<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello World SV - Dashboard</title>
    {{--    <link rel="icon" type="img/png" sizes="16x16" href="img/favicon.png">--}}
    <link href="/css/styledashboard.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ URL::asset('css/bootstrap.min.css'); }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ URL::asset('css/style.css'); }} " rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Yantramanav:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
<div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
     data-boxed-layout="full">

    {{--Topbar Start--}}

    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header" data-logobg="skin5">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                    <i class="ti-menu ti-close"></i>
                </a>
                <div class="navbar-brand">
                    <a href="/" class="logo dashboard-logo">
                        <b class="logo-icon">
                            <i class="fas fa-laptop me-3"></i> <b class="transition-hov">SA Hello World</b>
                        </b>
                    </a>
                </div>

            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                <ul class="navbar-nav float-start me-auto">
                    <li class="nav-item search-box">
                        <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <div class="ms-1 d-none d-sm-block">
                                    <span>Search</span>
                                </div>
                            </div>
                        </a>
                        <form class="app-search position-absolute">
                            <input type="text" class="form-control" placeholder="Search &amp; enter">
                            <a class="srh-btn">
                                <i class="ti-close"></i>
                            </a>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav float-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/img/team-1.jpg" alt="user" class="rounded-circle" width="31">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard/profile"><i class="ti-user me-1 ms-1"></i>
                                My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email me-1 ms-1"></i>
                                Inbox</a>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    {{--Topbar end--}}

    {{--Left sidebar Start--}}

    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
{{--                    <li class="sidebar-item">--}}
{{--                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard"--}}
{{--                           aria-expanded="false">--}}
{{--                            <i class="fas fa-table me-3"></i>--}}
{{--                            <span class="hide-menu">Dashboard</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard/profile"
                           aria-expanded="false">
                            <i class="fas fa-user me-3"></i>
                            <span class="hide-menu">Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard/activities"
                           aria-expanded="false">
                            <i class="fas fa-clipboard me-3"></i>
                            <span class="hide-menu">activities</span>
                        </a>
                    </li>
{{--                    <li class="sidebar-item">--}}
{{--                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard/news"--}}
{{--                           aria-expanded="false">--}}
{{--                            <i class="fas fa-newspaper me-3"></i>--}}
{{--                            <span class="hide-menu">News</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="sidebar-item">--}}
{{--                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/dashboard/form"--}}
{{--                           aria-expanded="false">--}}
{{--                            <i class="fas fa-file me-3"></i>--}}
{{--                            <span class="hide-menu">Form</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                </ul>
            </nav>
        </div>
    </aside>

    {{--Left sidebar end--}}


