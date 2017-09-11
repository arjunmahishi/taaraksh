  <header>
  	 <link rel="stylesheet" href="css/scrolling-nav.css"> 
  	
<style>
	.navbar-brand {
    padding-top: 0px;
}
input{
    margin-bottom: 1rem;
}
input[type="email"], input[type="number"], input[type="search"], input[type="text"], input[type="tel"], input[type="url"], input[type="password"], textarea, select {
    display: block;
    height: 4rem;
    padding: 1.5rem 2rem;
    border: none;
    border-bottom: 1px solid rgba(17, 17, 17, 0.5);
    outline: none;
    vertical-align: middle;
    color: #333333;
    font-family: "roboto-regular", sans-serif;
    font-size: 1.2rem;
    line-height: 3rem;
    max-width: 100%;
    background: #ffffff;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.shrink {
  min-height: 35px;
}
.navbar{
  /*background-color:#ccc;*/
  background-color:rgba(0, 0, 0, 0.76);
   // Animation
   -webkit-transition: all 0.4s ease;
   transition: all 0.4s ease;
}


	
</style>
<script>
$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});
</script>
	
<nav class="navbar navbar-default navbar-fixed-top" id="nav" role="navigation" >
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php#top"><img src="images/Untitled 2.png"
                style=" max-width: 250px;
    height: auto;
    width: auto9;">
            </div>
            <?php
            
             $pg = basename($_SERVER['PHP_SELF']);
            if ($pg=="index.php"){
            	$cl="smoothscroll";
            }
            else{
            	$cl="page-scroll";
            }
            
            ?>
        
           
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" style="float:right;">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="<?php echo @$cl; ?>" href="index.php#top" style="color:#ffffff">Home</a>
                    </li>
                    <li>
                        <a class="<?php echo @$cl; ?>" href="index.php#info" style="color:#ffffff">Events</a>
                    </li>
                    <li>
                        <a class="<?php echo @$cl; ?>" href="index.php#cta" style="color:#ffffff">Sponsors</a>
                    </li>
                   
                    
                    	<style>
                    
                    	
.navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
    color: #333;
    background:#F79C58;
}


.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background:#F79C58;
}
                    
.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #EC6502  ;
    color: white;
}
}

                    		
                    	</style>
                    <?php if(isset($_SESSION['admin'])&&!empty($_SESSION['admin']))
                    {
                    	
                    ?>
                    
                     <li>
                        	<a class="page-scroll button5" href="#" role="button">Hii, <?php echo $_SESSION['name']; ?></a>
                    </li>
                       <li>
                        	<a class="page-scroll button5" href="logout.php" role="button">LogOut</a>
                    </li>
                    
                    <?php
                    
                    }else
                    {
                    	
                    ?>
                    <li>
                    
                    	<a class="page-scroll button5" href="login.php" role="button" data-toggle="" data-target="">Log In</a>
                    </li>
                    <li>
                    	<a class="page-scroll button5" href="signup.php" role="button" data-toggle="" data-target="">Sign Up</a>
                    
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
              <!-- Trigger the modal with a button -->
  

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	 <!--script>
      (function() {
        'use strict';
 
        var nav   = document.querySelector('.fixed-nav');
        if(!nav) return true;
 
        var navHeight   = 0,
            navTop      = 0,
            scrollCurr  = 0,
            scrollPrev  = 0,
            scrollDiff  = 0;
 
        window.addEventListener('scroll', function() {
          navHeight = nav.offsetHeight;
          scrollCurr = window.pageYOffset;
          scrollDiff = scrollPrev - scrollCurr;
          navTop = parseInt(window.getComputedStyle(nav).getPropertyValue('top')) + scrollDiff;
 
          // Scroll to top: fix navbar to top
          if(scrollCurr < 0) 
            nav.style.top = '0px';
 
          // Scroll up: show navbar
          else if(scrollDiff > 0) 
            nav.style.top = (navTop > 0 ? 0 : navTop) + 'px';
 
          // Scroll down: hide navbar
          else if(scrollDiff <= 0) {
            nav.style.top = (Math.abs(navTop) > navHeight ? - navHeight : navTop) + 'px';
          }
 
          // Note last scroll position
          scrollPrev = scrollCurr;
        });
 
      }());
      </script>
      <script>
      $(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
    <script -->
	
   </header> 