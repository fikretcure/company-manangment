<!doctype html>
<html lang="en"><!-- [Head] start -->
<head>
    <title>@yield('title') | {{env('APP_NAME')}}</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective.">
    <meta name="author" content="phoenixcoded"><!-- [Favicon] icon -->
    @yield('css_specific')
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap"
          rel="stylesheet"><!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href=" {{asset('assets/fonts/phosphor/duotone/style.css')}}">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{asset('assets/fonts/tabler-icons.min.css')}}">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{asset('assets/fonts/tabler-icons.min.css')}}">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{asset('assets/fonts/feather.css')}}">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome.css')}}">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{asset('assets/fonts/material.css')}}"><!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" id="main-style-link">
    <link rel="stylesheet" href="{{asset('assets/css/style-preset.css')}}">
</head><!-- [Head] end --><!-- [Body] Start -->
<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
      data-pc-theme="light"><!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div><!-- [ Pre-loader ] End --><!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header d-flex justify-content-center align-items-center">
            <a href="{{ route('home') }}" class="b-brand text-primary">
                <img src="" alt="logo image" class="logo-lg">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><i
                                class="ph-duotone ph-layout"></i></span><span class="pc-mtext"
                                                                              data-i18n="Müşteri Yönetimi">Müşteri Yönetimi</span><span
                            class="pc-arrow"><i
                                data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="{{ route('companies.create') }}"
                                               data-i18n="Müşteri Ekleme">Müşteri Ekleme</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('companies.index') }}"
                                               data-i18n="Müşteri Listeleme">Müşteri Listeleme</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="card pc-user-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0"><img src="{{asset('assets/images/user/avatar-1.jpg')}}" alt="user-image"
                                                    class="user-avtar wid-45 rounded-circle"></div>
                    <div class="flex-grow-1 ms-3">
                        <div class="dropdown"><a href="#" class="arrow-none dropdown-toggle"
                                                 data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 me-2">
                                        <h6 class="mb-0">{{auth()->user()->name . ' ' . auth()->user()->surname}}</h6>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="btn btn-icon btn-link-secondary avtar"><i
                                                class="ph-duotone ph-windows-logo"></i></div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="pc-user-links" href="{{route('logout')}}"><i
                                                class="ph-duotone ph-power"></i>
                                            <span>Logout</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav><!-- [ Sidebar Menu ] end --><!-- [ Header Topbar ] start -->
<header class="pc-header">
    <div class="header-wrapper"><!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled"><!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse"><a href="#" class="pc-head-link ms-0" id="sidebar-hide"><i
                            class="ti ti-menu-2"></i></a></li>
                <li class="pc-h-item pc-sidebar-popup"><a href="#" class="pc-head-link ms-0" id="mobile-collapse"><i
                            class="ti ti-menu-2"></i></a></li>
                <li class="dropdown pc-h-item d-inline-flex d-md-none"><a
                        class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false"><i
                            class="ph-duotone ph-magnifying-glass"></i></a>
                    <div class="dropdown-menu pc-h-dropdown drp-search">
                        <form class="px-3">
                            <div class="mb-0 d-flex align-items-center"><input type="search"
                                                                               class="form-control border-0 shadow-none"
                                                                               placeholder="Search...">
                                <button
                                    class="btn btn-light-secondary btn-search">Search
                                </button>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div><!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">


                <li class="dropdown pc-h-item header-user-profile"><a
                        class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false"><img
                            src="{{asset('assets/images/user/avatar-1.jpg')}}" alt="user-image" class="user-avtar"></a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Profile</h5>
                        </div>
                        <div class="dropdown-body">
                            <div class="profile-notification-scroll position-relative"
                                 style="max-height: calc(100vh - 225px)">
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0"><img
                                                    src="{{asset('assets/images/user/avatar-1.jpg')}}"
                                                    alt="user-image"
                                                    class="wid-50 rounded-circle"></div>
                                            <div class="flex-grow-1 mx-3">
                                                <h5 class="mb-0">{{auth()->user()->name . ' ' . auth()->user()->surname}}</h5>
                                                <a class="link-primary"
                                                   href="mailto:{{auth()->user()->email}}">{{auth()->user()->email}}</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="{{route('logout')}}" class="dropdown-item"><span
                                                class="d-flex align-items-center"><i
                                                    class="ph-duotone ph-power"></i> <span>Logout</span></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header><!-- [ Header ] end --><!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content"><!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                @yield(section: 'breadcrumb')
            </div>
        </div><!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->
        @yield(section: 'content')
    </div>
</div><!-- [ Main Content ] end -->
<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        <div class="row">
            <div class="col my-1">
                <p class="m-0">Made with ♥ by Team <a href="https://green.com.tr/"
                                                      target="_blank">GREEN HOLDING</a></p>
            </div>
        </div>
    </div>
</footer><!-- Required Js -->
<script src="{{asset('assets/js/plugins/popper.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/simplebar.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/i18next.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/i18nextHttpBackend.min.js')}}"></script>
<script src="{{asset('assets/js/icon/custom-font.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/theme.js')}}"></script>
<script src="{{asset('assets/js/multi-lang.js')}}"></script>
<script src="{{asset('assets/js/plugins/feather.min.js')}}"></script>
<script>
    layout_change('light');
</script>
<script>
    layout_sidebar_change('light');
</script>
<script>
    change_box_container('false');
</script>
<script>
    layout_caption_change('true');
</script>
<script>
    layout_rtl_change('false');
</script>
<script>
    preset_change('preset-1');
</script>
<div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
    <div class="offcanvas-header justify-content-between">
        <h5 class="offcanvas-title">Settings</h5>
        <button type="button" class="btn btn-icon btn-link-danger"
                data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x"></i></button>
    </div>
    <div class="pct-body customizer-body">
        <div class="offcanvas-body py-0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="pc-dark">
                        <h6 class="mb-1">Theme Mode</h6>
                        <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
                        <div class="row theme-color theme-layout">
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="true"
                                            onclick="layout_change('light');"><span class="btn-label">Light</span> <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="false"
                                            onclick="layout_change('dark');"><span class="btn-label">Dark</span> <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="default"
                                            onclick="layout_change_default();" data-bs-toggle="tooltip"
                                            title="Automatically sets the theme based on user's operating system's color scheme."><span
                                            class="btn-label">Default</span> <span
                                            class="pc-lay-icon d-flex align-items-center justify-content-center"><i
                                                class="ph-duotone ph-cpu"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item pc-sidebar-color">
                    <h6 class="mb-1">Sidebar Theme</h6>
                    <p class="text-muted text-sm">Choose Sidebar Theme</p>
                    <div class="row theme-color theme-sidebar-color">
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn" data-value="true"
                                        onclick="layout_sidebar_change('dark');"><span class="btn-label">Dark</span>
                                    <span
                                        class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn active" data-value="false"
                                        onclick="layout_sidebar_change('light');"><span class="btn-label">Light</span>
                                    <span
                                        class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Accent color</h6>
                    <p class="text-muted text-sm">Choose your primary theme color</p>
                    <div class="theme-color preset-color"><a href="#!" class="active" data-value="preset-1"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-2"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-3"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-4"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-5"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-6"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-7"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-8"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-9"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-10"><i
                                class="ti ti-check"></i></a></div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Sidebar Caption</h6>
                    <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
                    <div class="row theme-color theme-nav-caption">
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn active" data-value="true"
                                        onclick="layout_caption_change('true');"><span class="btn-label">Caption
                                            Show</span> <span
                                        class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn" data-value="false"
                                        onclick="layout_caption_change('false');"><span class="btn-label">Caption
                                            Hide</span> <span
                                        class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="pc-rtl">
                        <h6 class="mb-1">Theme Layout</h6>
                        <p class="text-muted text-sm">LTR/RTL</p>
                        <div class="row theme-color theme-direction">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="false"
                                            onclick="layout_rtl_change('false');"><span class="btn-label">LTR</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="true"
                                            onclick="layout_rtl_change('true');"><span class="btn-label">RTL</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item pc-box-width">
                    <div class="pc-container-width">
                        <h6 class="mb-1">Layout Width</h6>
                        <p class="text-muted text-sm">Choose Full or Container Layout</p>
                        <div class="row theme-color theme-container">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="false"
                                            onclick="change_box_container('false')"><span class="btn-label">Full
                                                Width</span> <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="true"
                                            onclick="change_box_container('true')"><span class="btn-label">Fixed
                                                Width</span> <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-grid">
                        <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        document.querySelector('.logo-lg').src = "data:image/png;base64,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";
    });
</script>
@yield('js_specific')
</body><!-- [Body] end -->
</html>
