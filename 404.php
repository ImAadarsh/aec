<!DOCTYPE html>
<html lang="en">

<head>
<?php include "include/meta.php"; ?>
</head>

<body class="account-page-body">

    <!-- rts coming soon area start -->
    <div class="rts-coming-soon-area rts-section-gap d-flex align-items-center h-100-vh">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-not-found-main">
                        <h1 class="title">404</h1>
                        <h3 class="para">Page Not Found</h3>
                        <p>Sorry, the page you seems looking for,
                            has been moved, redirected or removed permanently.</p>
                        <a href="index.php" class="rts-btn btn-primary">Go Back Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts coming soon area end -->

<?php include "include/sidebar.php"; ?>
    <!-- inner menu area desktop End -->


    <!-- offcanvase search -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <div id="anywhere-home" class="">
    </div>

    <!-- rtl btn area start -->
    <div class="rtl-ltr-switcher-btn">
        <span class="rtl show">View RTL</span>
        <span class="ltr">View LTR</span>
    </div>
    <!-- rtl btn area end -->

    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>
    <!-- progress area end -->

<?php include "include/scripts.php"; ?>
</body>


</html>