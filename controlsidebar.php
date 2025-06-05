<style>
    .g-sidenav-hidden .navbar-vertical .nav-item .collapse .nav {
     margin-left: 0px !important; 
     padding-left: 0px !important; 
}


.g-sidenav-hidden .navbar-vertical .nav-item .collapse .nav .nav-link .fa{
   padding-left: 20px !important;
    padding-top: 0px !important;
}

.g-sidenav-hidden .navbar-vertical:hover .nav-item .collapse .nav .nav-link .fa {
    padding-left: 0px !important;
    padding-top: 0px !important;
}


.g-sidenav-hidden .navbar-vertical:hover .nav-item .collapse .nav {
    margin-left: 0rem !important;
    padding-left: 0rem !important;
}
.navbar-vertical.navbar-expand-xs {

    background-color: #313A46 !important;
    color: #8391a2;
}



.navbar-vertical.navbar-expand-xs P:hover {


    color: #bccee4;
}

.navbar-vertical.navbar-expand-xs .navbar-nav>.nav-item {
    margin-top: -5px;
}

.navbar-vertical .navbar-nav .nav-link {
    padding-left: 1rem;
    padding-right: 1rem;
    font-weight: 400;
    color: #8391a2;
}

.navbar-vertical .navbar-nav .nav-link:hover {
    padding-left: 1rem;
    padding-right: 1rem;
    font-weight: 400;
    color: #bccee4;
}

ul.navbar-nav>li .app-nav .nav-link.active {
    background: #17A2B7 !important;
    color: white !important;
    border-left: 3px solid #15a362;
    font-weight: 500;
}

.nav>.active>a {
    
    background: #17A2B7 !important;
    color: white !important;
    border-left: 3px solid #bccee4;
}


.subnav>.active>a {
    background: #17A2B7 !important;
    color: white !important;
    border-left: 3px solid #bccee4;
}

.navbar-nav>.active>a {

    border-left: 3px solid #8391a2;
    font-weight: 500;
}

.navbar-vertical .navbar-nav .nav-link[data-bs-toggle="collapse"]:after {
    display: inline-block;
    font-style: normal;
    font-variant: normal;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    font-family: 'Font Awesome 5 Free';
    font-weight: 700;
    content: "\f107";
    margin-left: 5px;
    margin-top: 3px;
    color: #8391a2;
    transition: all 0.2s ease-in-out;
}

.sidebroder>li {
    border-left: 3px solid #8391a2;
}

.navbar-vertical .navbar-nav .nav-link>i {
    min-width: 0px;
    font-size: 0.9375rem;
    line-height: 1.5rem;
}

.navbar-vertical .navbar-nav .nav-link[data-bs-toggle="collapse"][aria-expanded="true"]:after {
    color: #8391a2;
    transform: rotate(180deg);
}

.navbar-vertical .navbar-nav .nav-item .collapse .nav .nav-item.active .nav-link,
.navbar-vertical .navbar-nav .nav-item .collapsing .nav .nav-item.active .nav-link {
    color: #8391a2;
}

.navbar-vertical .navbar-nav .nav-item .collapse .nav .nav-item .nav-link:hover,
.navbar-vertical .navbar-nav .nav-item .collapsing .nav .nav-item .nav-link:hover {
    color: #bccee4;
}

.navbar-vertical .navbar-nav .nav-item .collapse .nav .nav-item .nav-link,
.navbar-vertical .navbar-nav .nav-item .collapsing .nav .nav-item .nav-link {
    
    background-color: transparent;
    box-shadow: none;
    color: #8391a2;
    margin-left: 1.35rem;
	z-index: 111;
}

.navbar-vertical.navbar-expand-xs .navbar-nav {
    color: #8391a2;
}

.navbar-vertical.navbar-expand-xs .navbar-nav .nav-link i {
    color: #8391a2;
}


.navbar-vertical .navbar-nav .nav-item .collapse .nav .nav-item.active .nav-link:before, .navbar-vertical .navbar-nav .nav-item .collapsing .nav .nav-item.active .nav-link:before {
  
     background: none;
}
.navbar-vertical .navbar-nav .nav-item .collapse .nav .nav-item .nav-link:before, .navbar-vertical .navbar-nav .nav-item .collapsing .nav .nav-item .nav-link:before {
    
    background: none;
}

#iconSidenav{
    z-index: 600 !important;
    margin-top: -5px !important;
    margin-left: -90px !important;
    width: 100% !important;
    height: 100% !important;
    background-color: white !important;
    padding-left: 210px !important;
    font-weight: bolder !important;
    display: none;
}

</style>
<i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0"
            aria-hidden="true" id="iconSidenav" onclick="closefun()" style="display: none;"></i>
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start " id="sidenav-main" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
    <div class="sidenav-header">
        <a class="navbar-brand m-0" href="controldashboard.php" style="background-color:#ffffff; height:47px; text-align:left">
            <img src="assets/img/headerlogo.png" id="main_logo" class="navbar-brand-img" alt="main_logo"
                style="height:40px;">
            <img src="assets/img/logo.png" id="single_logo" class="navbar-brand-img" alt="main_logo"
                style="height:40px; display:none">
            <script type="text/javascript">
                function closefun() {
                    var bar = document.getElementById('bar');
                    bar.style.display = 'block';
                    var eye = document.getElementById('eye');
                    eye.style.display = 'none';
                    var iissnn = document.getElementById('iconSidenav');
                    iissnn.style.display = 'none';
                }
            </script>

        </a>
    </div>
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            <li class="nav-item ">
                <a data-bs-toggle="collapse" href="#show" class="nav-link " aria-controls="show"
                    role="button" aria-expanded="true"
                    style="border-left: 3px solid none;padding-left: 12px;padding-bottom: 3px;padding-top: 10px;font-size:14px;font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">

                    <span class="nav-link-text ms-1">Overview</span>
                </a>
                <div class="collapse collapseshow <?=(($current_file_name=='controldashboard.php')||($current_file_name=='users.php')||($current_file_name=='useradd.php')||($current_file_name=='useredit.php')||($current_file_name=='userview.php'))?'show':'show'?>" id="show">
                    <ul class="nav">
                        <li class="nav-item <?=($current_file_name=='controldashboard.php')?'active':''?>">
                            <a style="height:30px !important;margin-left: 0px;margin-top: 0px;margin-bottom: 5px;padding-bottom: 9px;padding-top: 9px;font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;font-size: .9375rem;" class="nav-link" href="controldashboard.php" onclick="javascript:window.open('controldashboard.php','_self')">
                                <p class="fa fa-home" style="margin-top:8.1%;padding-right:3px;"></p>
                                <span class="nav-link-text ms-1">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item <?=($current_file_name=='argonidgenerate.php')?'active':''?>">
                            <a style="height:30px !important;margin-left: 0px;margin-top: 0px;margin-bottom: 5px;padding-bottom: 9px;padding-top: 9px;font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;font-size: .9375rem;" class="nav-link" href="argonidgenerate.php" onclick="javascript:window.open('argonidgenerate.php','_self')">
                                <p class="fa fa-lock" style="margin-top:8.1%;padding-right:3px;"></p>
                                <span class="nav-link-text ms-1">Argon2id</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <hr style="margin-bottom: 5px;margin-top: 0px;">




        </ul>
    </div>
    <script>
    $(document).ready(function() {
        "use strict";



        $('ul.navbar-nav1 > li').click(function(e) {

            e.preventDefault();
            $('ul.navbar-nav > li').removeClass('active');
            $(this).addClass('active');
        });


        $('ul.nav > li').click(function(e) {
            //  alert("yes");
            e.preventDefault();
            $('ul.nav > li').removeClass('active');
            $(this).addClass('active');
        });

        $('ul.subnav > li').click(function(e) {
              alert("yes");
            e.preventDefault();
            $('ul.nav > ul.subnav > li').removeClass('active');
            $(this).addClass('active');
        });


    });
    $(document).on('click', '.sidenav-toggler-inner', function () {
$('.collapseshow').collapse('show');
});

    $(document).ready(function() {
      e.preventDefault();
            $('ul.nav > li').addClass('active');
           
    
});
    </script>


</aside>