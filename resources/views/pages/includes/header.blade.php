<script src="{{ url() }}/js/nav-style.js"></script>
<style type="text/css">
  #cssmenu #menu-button {
    display: none;
  } 
  .header .primary .navbar .nav > li.parent:hover > a{
    background-color: transparent;
  }
  .header .primary .navbar .nav > li > a, .header .primary .navbar .nav > li > a:visited,
  .header .primary .navbar .nav > li.parent:hover > a:after{
    background-color: transparent;
  }
  .megamenu .mega-content{
    margin-bottom: 10px;
    padding: 20px;
  }
  .header .primary .sub,
  .header .primary .megamenu > .sub{
      webkit-box-shadow: 0 0 5px rgba(0,0,0,.15);
      -moz-box-shadow: 0 0 5px rgba(0,0,0,.15);
      box-shadow: 0 0 5px rgba(0,0,0,.15);
  }
  .mega-table>div>a>img{
    height: 60px;
    width: 90px;
  }
  .megamenu ul li .sub-list h2{
      font-size: 18px !important;
  }
  .megamenu .sub-list ul{
    min-height: 150px;
    margin-top: 30px;
  }
  .megamenu .sub-list>div>ul>li{
    max-width: 90%;
    margin-bottom: 5px;
  }
  .underline{
    border-bottom: solid 3px rgb(55, 153, 210);
    text-decoration: none;
  }
  .non-underline{
    border-bottom: solid 3px transparent;
  }
  .mega-content>.row>div>a{
      min-height: 100px;
  }
  .mega-content .btn{
    color: white !important;
  }
  .mega-content>.row>div>a>img{
    vertical-align: middle;
    padding: 2%;
  }
  .mega-content>.row>div>p>span{
    min-height: 200px;
  }
  .mega-content .row>div{
    min-height: 200px;
  }
  .header .primary .megamenu > .sub>a {
      display: inline;
      padding: 3px 0;
  }

  .phone-active>span{
    color: rgba(0, 0, 0, 0.8);
    padding: 5px;
    text-transform: uppercase;
  }

  @media all and (max-width: 768px){
    .sub-list .lotto>.row>div{
      border-bottom: solid 2px rgba(99, 99, 99, 0.24);
    }
    .phone-active .title {
      display: inline-block;
    }  
    .mega-menu{
      background-color: #f7f7f7 !important;
    }
    .header .primary .megamenu > .sub {
        padding: 0 !important;
    }
    .mega-content>.row>div>p a,
    .mega-content>.row>div>p a:visited{
      display: block !important;
      width: auto !important;
      padding: 0 !important;
      max-width: 40% !important;
      background-color: rgba(55, 153, 210, 1) !important;
    }

  }
  @media all and (max-width: 990px){
    .megamenu .sub-list ul{
      min-height: 150px;
      margin-top: 30px;
    }
    .megamenu .sub-list>div>ul>li>a{
      padding: 0 !important;
    }
  }
  @media all and (min-width: 991px){
      #menu-line {
        position: absolute;
        top: 0;
        left: 0;
        height: 5px;
        /*background: #009ae1;*/
        background: rgba(65, 148, 248, 1);
        -webkit-transition: all 0.25s ease-out;
        -moz-transition: all 0.25s ease-out;
        -ms-transition: all 0.25s ease-out;
        -o-transition: all 0.25s ease-out;
        transition: all 0.25s ease-out;
      }
      .header .primary .navbar .nav > li {
          padding: 0px 5px;
          position: relative;
      }
      .navbar nav ul .parent{
        position: relative;
      }
      .navbar nav ul .parent>a::before{
          position: absolute;
          top: 40%;
          right: 0;
          content: '';
          width: 0;
          height: 0;
          /*right: 20px;*/
          right: 0px;
          border-top: 5px solid rgba(99, 99, 99, 0.8);
          border-left: 5px solid transparent;
          border-right: 5px solid transparent;
      }
      .navbar nav ul .parent>a::after{
        position: absolute;
        top: 80%;
        right: 2%;
        width: 0;
        height: 0;
        border-bottom: 10px solid rgb(99, 99, 99);
        border-right: 10px solid transparent;
        border-left: 10px solid transparent;
        content: "";
        /*-webkit-transform: rotate(226deg);
        -moz-transform: rotate(226deg);
        -ms-transform: rotate(226deg);
        -o-transform: rotate(226deg);
        transform: rotate(226deg);*/
        -webkit-transition: border-color 0.2s ease;
        -moz-transition: border-color 0.2s ease;
        -ms-transition: border-color 0.2s ease;
        -o-transition: border-color 0.2s ease;
        transition: border-color 0.2s ease;
      }  
  }

</style>
<header class="header header-two">
  <div class="header-wrapper">
  <div class="container">
    <div class="row">
    <div class="col-xs-6 col-md-2 col-lg-3 logo-box">
      <div class="logo">
          <a href="{{ public_path() }}">
            <img src="{{ url() }}/images/logo.png" class="logo-img" alt="Winners Learners logo">
          </a>
      </div>
    </div><!-- .logo-box -->
    
    <div class="col-xs-6 col-md-10 col-lg-9 right-box">
      <div class="right-box-wrapper">
      <div class="header-icons">
        <div class="search-header">
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
          <path d="M12.001,10l-0.5,0.5l-0.79-0.79c0.806-1.021,1.29-2.308,1.29-3.71c0-3.313-2.687-6-6-6C2.687,0,0,2.687,0,6
          s2.687,6,6,6c1.402,0,2.688-0.484,3.71-1.29l0.79,0.79l-0.5,0.5l4,4l2-2L12.001,10z M6,10c-2.206,0-4-1.794-4-4s1.794-4,4-4
          s4,1.794,4,4S8.206,10,6,10z"></path>
          <image src="img/png-icons/search-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
          </svg>
        </a>
        </div><!-- .search-header
        
        --><div class="phone-header">
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
          <path d="M11.001,0H5C3.896,0,3,0.896,3,2c0,0.273,0,11.727,0,12c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2
          c0-0.273,0-11.727,0-12C13.001,0.896,12.105,0,11.001,0z M8,15c-0.552,0-1-0.447-1-1s0.448-1,1-1s1,0.447,1,1S8.553,15,8,15z
          M11.001,12H5V2h6V12z"></path>
          <image src="img/png-icons/phone-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
          </svg>
        </a>
        </div><!-- .phone-header -->
      </div><!-- .header-icons -->
      
      <div class="primary">
        <div class="navbar navbar-default" role="navigation">
        <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
          <span class="text"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
    
        <nav id="cssmenu" class="collapse collapsing navbar-collapse">
          <ul class="nav navbar-nav navbar-center" id="main-nav">
            <li class="<?php //if($page == "index") echo "active-link"; ?>">
              <a href="{{ url() }}/">Home</a>
            </li>
            <li class="<?php //if( $page == "about_us" ) echo "active-link"; ?>">
              <a href="{{ url() }}/about">About Us</a>
            </li>
            <li class="parent megamenu promo class="<?php //if( ($page == "euromillions-simulator") || ($page == "megasena-simulator") || ($page == "powerball-simulator") || ($page == "service2") || ($page == "service3") ) ?> ">
                <a href="#">Services</a>
                <ul class="sub">
                  <li class="sub-wrapper">
                    <div class="sub-list">
                      <div class="col-xs-2">
                        <ul>
                          <li><a href="#" data-mega="lotto" class="underline">Lotto Strategies</a></li>
                          <li><a href="#" data-mega="motor">Motor</a></li>
                          <li><a href="#" data-mega="ads">Ads</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-10 lotto mega-content">
                            
                        <div class="row">
                            
                            <div class="col-xs-12 col-sm-4">
                              <a href="megasena-simulator.php"><img src="{{ url() }}/images/lotto/megasena-logo.png"></a>
                              <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><a href="{{ url() }}/lotto/mega-sena" class="btn btn-default btn-sm">Give it a try?</a></p>
                            </div><!-- //col-sm-4 -->
                            <div class="col-xs-12 col-sm-4">  
                              <a href="{{ url() }}/lotto/power-ball"><img src="{{ url() }}/images/lotto/powerball-logo.png" ></a>
                              <p><span><b>Lottos </b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><a href="{{ url() }}/lotto/power-ball" class="btn btn-default btn-sm">Give it a try?</a></p>
                              
                            </div><!-- ///col-sm-4 -->
                            <div class="col-xs-12 col-sm-4">
                              <a href="euromillions-simulator.php"><img src="{{ url() }}/images/lotto/euromillions-logo.png" ></a>
                              <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><a href="{{ url() }}/lotto/euro-millions" class="btn btn-default btn-sm">Give it a try?</a></p>
                            </div><!-- ///col-sm-4 -->
                        
                        </div><!-- ///.roww -->


                      </div><!-- .box col-sm-10 -->
                      <div class="col-xs-10 hidden ads mega-content">
                        
                        
                        <div class="row">
                          <div class="col-sm-6 col-md-5">
                              <img src="abc.png" class="img img-responsive">
                          </div><!-- ///col-sm-6 -->
                          <div class="col-sm-6 col-md-5">
                              <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span></p>
                          </div><!-- //col-sm-6 -->
                        </div><!-- //row -->

                      </div><!-- .box -->
                      <div class="col-xs-10 hidden motor mega-content">
                        
                        <div class="row">
                          <div class="col-sm-6 col-md-5">
                              <img src="abc.png" class="img img-responsive">
                          </div><!-- ///col-sm-6 -->
                          <div class="col-sm-6 col-md-5">
                              <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</span></p>
                          </div><!-- //col-sm-6 -->
                        </div><!-- //row -->
                      </div><!-- .box -->
                                           

                    </div><!-- .sub-list -->
                    
                  </li>
                </ul><!-- .sub -->
            </li>
            <li class="<?php //if($page == "news") echo "active-link"; ?>">
              <a href="{{ url() }}/news">Globe News</a>
            </li>
            <li class="<?php //if($page == "blog") echo " active-link "; ?>">
              <a href="{{ url() }}/blog">Blog</a>
            </li>
            <li class="<?php //if($page == "channel") echo "active-link"; ?>">
              <a href="{{ url() }}/videos">Videos</a>
            </li>
            <li class="<?php //if($page == "ads") echo "active-link"; ?>">
              <a href="{{ url() }}/ads">Advertising</a>
            </li>
            <li class="<?php //if($page == "contact_us") echo "active-link"; ?>">
              <a href="{{ url() }}/contact-us">Contact Us</a>
            </li>
          </ul>
        </nav>
        </div>
      </div><!-- .primary -->
      </div>
    </div>
    
    <div class="phone-active col-sm-9 col-md-9">
      <a href="#" class="close"><span>close</span>×</a>
      <span class="title">BUY Site Credits?</span><a href="#"><strong>Click Here</strong></a>
    </div>
    <div class="search-active col-sm-9 col-md-9">
      <a href="#" class="close"><span>close</span>×</a>
      <form name="search-form" class="search-form">
      <input class="search-string form-control" type="search" placeholder="Search here" name="search-string">
      <button class="search-submit">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
        <path fill="#231F20" d="M12.001,10l-0.5,0.5l-0.79-0.79c0.806-1.021,1.29-2.308,1.29-3.71c0-3.313-2.687-6-6-6C2.687,0,0,2.687,0,6
        s2.687,6,6,6c1.402,0,2.688-0.484,3.71-1.29l0.79,0.79l-0.5,0.5l4,4l2-2L12.001,10z M6,10c-2.206,0-4-1.794-4-4s1.794-4,4-4
        s4,1.794,4,4S8.206,10,6,10z"></path>
        <image src="img/png-icons/search-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
        </svg>
      </button>
      </form>
    </div>
    </div><!--.row -->
  </div>
  </div><!-- .header-wrapper -->
</header><!-- .header -->

<script type="text/javascript">
  //script for switching content in the mega menu
  $(".megamenu>ul>li .sub-list>div>ul>li>a").on("mouseenter", function(){
      //settingthe width of the mega-menu as per the width of ul 
      var $this1 = $(this);
      //remove text underline from each nav
      $.each( $('.megamenu>ul>li .sub-list>div>ul>li>a'), function(){
          $(this).removeClass('underline').addClass('non-underline');
      });
      //fetch the data-mega of the hovered element
      var divToShow = $(this).attr('data-mega');
      $.each( $('.megamenu .mega-content'), function(){
          $(this).addClass('hidden');
          if( $(this).hasClass(divToShow) )
          {  
            $this1.removeClass('non-underline').addClass('underline');
            //$this1.css('color', 'rgba(0, 0, 0, 0.95)').css('border-bottom', 'solid 4px rgb(55,153,210)').css('text-decoration', 'none');
            $(this).removeClass('hidden');
          }
      });
  });


</script>