<header class="app-header fixed-top" style="height:48px !important;z-index: 1 !important;background-color: #fff !important;">
        <div class="app-header-inner">  
            <div class="py-2 px-3">
                <style type="text/css">
                    @media screen and (max-width: 1199px){
                        .app-header-content{
                            margin-left: 0px !important;
                        }
                        #bar{
                            margin-left: -7px !important;
                        }
                    }
                </style>
                <script type="text/javascript">
                    function bars() {
                        var element = document.querySelector('body');
                        var ilu = document.getElementById('ilu');
                        var bar = document.getElementById('bar');
                        var eye = document.getElementById('eye');
                        var isn = document.getElementById('iconSidenav');
                        if (element.classList.contains('g-sidenav-pinned', 'g-sidenav-hidden')) {
                           element.classList.remove('g-sidenav-pinned', 'g-sidenav-hidden');
                           ilu.style.marginLeft='213px';
                           bar.style.display = 'block';
                           eye.style.display = 'none';
                        } else {
                            if (x.matches) { 
                             element.classList.remove('g-sidenav-hidden');
                             element.classList.add('g-sidenav-pinned');
                             isn.style.display = 'block';
                           }
                           else {
                             element.classList.add('g-sidenav-pinned', 'g-sidenav-hidden');
                             ilu.style.marginLeft='123px';
                             bar.style.display = 'none';
                             eye.style.display = 'block';
                             }
                        }
}
var x = window.matchMedia("(max-width: 1199px)");
myFunction(x);
x.addListener(myFunction);
                </script>
                <div class="app-header-content" style="margin-left: 213px;" id="ilu"> 
                    <div class="row">
                    <div class="col-auto pt-1" style="width:34px !important;margin-top: 1px !important;" onclick="bars()">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="30" viewBox="0 0 30 30" role="img" id="bar" style="cursor: pointer;margin-top: -5px;margin-left: -13px;">
    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="square" stroke-linejoin="bevel" id="eye" style="display: none;cursor: pointer;;margin-top: -2px;margin-left: -13px;transform: rotate(-90deg);"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                    </div>
                    <div class="col" style="width:34px !important;margin-top: 1px !important;margin-left: -9px !important;">
                    </div>
                    <div class="app-utilities col-auto" style="margin-top:-1px !important;padding-right: 0px !important;padding-left: 0px !important;margin-right: -18px !important;">
                        <div class="app-utility-item" style="margin-right: 8px !important;">
              <a class="nav-link  <?=($current_file_name=='controllogout.php')?'active':''?>" href="controllogout.php">
                   
                    <span class="nav-link-text ms-2" style="font-family:'Myriad Set Pro','Helvetica Neue',Helvetica,Arial,sans-serif;color: black !important;">  <i class="fa fa-sign-out-alt"></i> Logout</span>
                  </a>
                </div>
                </div>

                </div>
                </div>
            </div>
        </div>
    </header>