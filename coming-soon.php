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
                    <div class="coming-soon-wrapper-main">
                        <div class="timer-area">
                            <div class="countdown" id="countdown" data-end-date="2025-12-31T23:59:59">
                                <h3>Coming Soon</h3>
                                <div class="timer-section">
                                    <div class="time-unit">
                                        <span id="days">0</span>
                                        <small>Days</small>
                                    </div>
                                    <div class="time-unit">
                                        <span id="hours">0</span>
                                        <small>Hours</small>
                                    </div>
                                    <div class="time-unit">
                                        <span id="minutes">0</span>
                                        <small>Minutes</small>
                                    </div>
                                    <div class="time-unit">
                                        <span id="seconds">0</span>
                                        <small>Seconds</small>
                                    </div>
                                </div>
                            </div>
                            <p class="para">Comeback again when we’re live!
                                Thank you for understanding and patience!</p>
                        </div>
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