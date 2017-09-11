<!-- /header -->   
<!DOCTYPE html>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7555171924828663",
    enable_page_level_ads: true
  });
</script>
<?php include 'images/bgMod.php' ?>
<style>
#home.home-particles {
	background-image: url('<?php bgMod('login'); ?>')!important;
	background-size: cover;
	overflow: hidden;
}
.main-content-tablecell {
	display: table-cell;
	z-index: 700;
	padding-top: 50px;
}
.main-content-tablecell {
	display: table-cell;
	vertical-align: top;
	z-index: 700;
}
</style>
<section id="home" class="home-particles">
  <div class="shadow-overlay"></div>
  <div class="content-wrap-table">
    <div class="main-content-tablecell">
      <style>
.main-content-tablecell #counter {
margin-bottom: 0px;
}

a, a:visited {
color: #057f78;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-webkit-transition: all 0.3s ease-in-out;
-ms-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}
#info {
background: #FFFFFF;
background-image: url(../images/bg.jpg);
background-attachment: fixed;
background-repeat: no-repeat;
background-position: center;
-webkit-background-size: cover;
-moz-background-size: cover;
background-size: cover;
padding: 60px 0 9rem;
position: relative;
color: rgba(17, 17, 17, 0.7);
}
</style>
      <div class="row" >
        <div class="container" align="center" style="background:rgba(0, 0, 0, 0.74);padding:20px;">
          <center>
            <h1 style="font-size:35px;">21<sup>st</sup> September, 2017</h1>
            <h2 style="color:#ffffff;">National Level Technical Symposium</h2>
            <script>
	            var ele = document.getElementById('counter');
            	ele.style.visibility='hidden';
            
            	
            	// window.open("http://google.com", '_blank');
            </script>
            <!--<div id="counter" >-->
            	
            <!--  <div class="half"> <span style="font-size:90px;">30<sup>days</sup></span> <span style="font-size:90px;">23 <sup>hours</sup></span> </div>-->
            <!--  <div class="half"> <span style="font-size:90px;">50 <sup>mins</sup></span> <span style="font-size:90px;">33 <sup>secs</sup></span> </div>-->
            <!--</div>-->
            <div class="main-content-tablecell" style="padding-top: 10px;">
            	<img src="images/logoun.png" style="height:120px;">
              <h1 style="font-size:30px;">SRM University, Ramapuram campus</h1>
              <h1 style="font-size:20px;">Department Of Information Technology</h1>
              <h1 style="font-size:20px;">Presents</h1>
              <h1 style="font-size:35px;">Aurganon '17</h1>
              <script>
              	function openInNewTab(url) {
				  var win = window.open(url, '_blank');
				  win.focus();
				}
              </script>
              <p style="
    margin-bottom: 0px;
">
      
<?php
 
function detectDevice(){
	$userAgent = $_SERVER["HTTP_USER_AGENT"];
	$devicesTypes = array(
        "computer" => array("msie 10", "msie 9", "msie 8", "windows.*firefox", "windows.*chrome", "x11.*chrome", "x11.*firefox", "macintosh.*chrome", "macintosh.*firefox", "opera"),
        "tablet"   => array("tablet", "android", "ipad", "tablet.*firefox"),
        "mobile"   => array("mobile ", "android.*mobile", "iphone", "ipod", "opera mobi", "opera mini"),
        "bot"      => array("googlebot", "mediapartners-google", "adsbot-google", "duckduckbot", "msnbot", "bingbot", "ask", "facebook", "yahoo", "addthis")
    );
 	foreach($devicesTypes as $deviceType => $devices) {           
        foreach($devices as $device) {
            if(preg_match("/" . $device . "/i", $userAgent)) {
                $deviceName = $deviceType;
            }
        }
    }
    return ucfirst($deviceName);
 	}

 
?>  
              	 <a onClick='openInNewTab("https://www.facebook.com/search/top/?q=%23lumos&ref=eyJzaWQiOiIwLjkwMzI5NTEyNjIyMDc0NzYiLCJxcyI6IkpUVkNKVEl5SlRJemNHOTNaWEoxY0NVeU1pVTFSQSIsImd2IjoiYmVlMDlmOTNmYTczMmNmYTU5YTFjYjZkOWY0NTBkMzg5MjQyNGU0OSJ9")'><font color="orange">#Lumos</font></a> </p>
           
           <?php if( detectDevice()=='Mobile')
           {
           	
           }else
           {
           	?>
       
            <a href="https://play.google.com/store/apps/details?id=com.aurganonlite.android"><img src="https://storage.googleapis.com/support-kms-prod/D90D94331E54D2005CC8CEE352FF98ECF639" style="width:200px"></a><br>
           <br>
           <?php   } ?></a> 
            <a href="#info" style="" class="button" style="letter-spacing:0rem;"><i class="fa fa-tasks" ></i> Browse Events</a>
            </div>
            <!--<a href="#info" style=""  style="letter-spacing:0rem;"><img src="images/browse.png" style="width:180px;"> -->
               
            <!-- /scroll-icon -->
          </center>
        </div>
        <!-- /twelve --> 
        
      </div>
      <!-- /row --> 
      
    </div>
    <!-- /main-content --> 
    
  </div>
  <!-- /content-wrap --> 
  
</section>
<!-- /home -->

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$(document).ready(function(){
	var obj = $('#home');
	
	var backgrounds = new Array(
		'url(imsges/slides/01.jpg)'
		'url(imsges/slides/01.jpg)'
		'url(imsges/slides/01.jpg)'
	
		// ,'url(images/flashvbat.jpg)'
	
        
	);
	
	var current = 0;
	
	function nextBackground() {
		current++;
		current = current % backgrounds.length;
		obj.css('background-image', backgrounds[current]);
	}
	setInterval(nextBackground, 10000);
	
	obj.css('background-image', backgrounds[0]);
});
</script>