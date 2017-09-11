<?php $_GET['info'];
$etype=$_GET['info']; 
?>

<!DOCTYPE html><section id="info" style="background-image:url('<?php bgMod('login'); ?>')!important;">
<!--<section id="info" style="background-image:url(<?php if($etype=="1"  ||$etype == ""){ 
	// echo 'http://www.pptback.com/uploads/technology-turquoise-technical-powerpoint-backgrounds-powerpoint.jpg'; 
	echo 'images/bg.jpg';
}
else if($etype=='3') {
// echo 'http://www.horsefun.org/wp-content/uploads/2015/01/freetetris.jpg'; 
	echo 'http://i.imgur.com/pE90uTS.jpg'; 
}
else if($etype=='4') {
// echo 'http://www.horsefun.org/wp-content/uploads/2015/01/freetetris.jpg'; 
	echo '/images/online_event.jpg'; 
}?>);">-->
	
  <div class="info-overlay"></div>
  <center>
    <h1>EVENTS - <?php if($etype=="1"  ||$etype == "") {echo "Technical"; }else if($etype=="3"){ echo "Non Technical";  }else if($etype=="4"){ echo "Online";  }?></h1>
  </center>
  <div class="row">
    <div class="col-twelve tabs-wrap" style="margin: 0rem 0;">
      <style>
#info .tabs-wrap .tab-content {
padding: 0rem 0;
}
#info .tabs-wrap ul.tab li.active {
    background: #151515;
    color: #FFFFFF;
    border: none;
}
#info .tabs-wrap ul.tab li:hover {
    background: rgba(255, 255, 255, 0.2);
    color: rgba(17, 17, 17, 0.8);
    box-shadow: 10px 10px 5px rgba(0,0,0,.5);
}
#info .tabs-wrap ul.tab li:last-child {
    margin-right: 0;
}
#info .tabs-wrap ul.tab li {
    display: inline-block;
    font-family: "roboto-black", sans-serif;
    text-transform: uppercase;
    background: transparent;
    font-size: 1.4rem;
    letter-spacing: .2rem;
    color: rgb(0, 0, 0);
    padding: .9rem 3rem;
    margin: 0 1rem 0 0;
    border: 1px solid rgb(0, 0, 0);
    cursor: pointer;
}
</style>
      <ul class="tab" style="margin: 0 0 0rem 0;">
       <a  href="http://www.aurganon.com/index.php?info=1#info" style="text-decoration:none;color:#fff;">
       	 <li  <?php if($etype=="1" ||$etype == "") { ?>class="active" <?php } ?>  style="margin: 0rem 0;"><i class="fa fa-laptop"></i><span>Technical</span></li></a>
       	 <a  href="http://www.aurganon.com/index.php?info=3#info" style="color:#fff;text-decoration:none;">
        <li  <?php if($etype=="3") { ?>class="active" <?php } ?>data-id="non"><i class="fa fa-pencil-square-o"></i><span>Non-technical</span></li></a>
        	 <a  href="http://www.aurganon.com/index.php?info=4#info" style="color:#fff;text-decoration:none;">  <li  <?php if($etype=="4") { ?>class="active" <?php } ?>data-id="non"><i class="fa fa-cloud"></i><span>Online Events</span></li></a>
       <!--	<li data-id="tab-subscribe"><i class="icon-newspaper"></i><span>Subscribe</span></li>	
<li data-id="tab-subscribe"><i class="icon-newspaper"></i><span>Subscribe</span></li> -->
        
      </ul>
      <!-- /tabs -->
      
      <div class="tab-container"> 
        <font style="color:red;background:#fff;">Registrations are Open</font><br>
     
        <!--<font style="color:#fff;background:rgba(0, 0, 0, 0.74);">*FREE events are covered in common registration fees of Rs 150.</font>-->
        <!-- tab content - about
================================================== -->
        <div id="tab-technical" class="tab-content">
          <div class="tab-entry">
            <div class="row tab-entry-intro">
              <div class="col-twelve with-bottom-line"> </div>
            </div>
            <!-- /tab-content-intro -->
            
            <div class="row about-content tab-entry-content">
              <div class="about-list block-1-3 block-s-1-2 block-tab-full">
                <?php 
                if($etype == "1" ||$etype == "")
                {
$querye = "SELECT * FROM  `events` WHERE CATEGORY='1'";
}
else if($etype=="3")
{
$querye = "SELECT * FROM  `events` WHERE CATEGORY='0'";	
}
else if($etype=="4")
{
$querye = "SELECT * FROM  `events` WHERE CATEGORY='2'";	
}
$spoe = mysqli_query($con,$querye);
while($eve = mysqli_fetch_assoc($spoe))
{
?>
                <div class="bgrid item" style="
padding-bottom: 20px;
">
                  <div class="card card-outline-warning" style="background-color: #F6F6F6 ; border-color: #0513EA;
">
                    <div class="card-block">
                      <style>
.text-muted {
color: #080808;
}
</style>
                      <h4 class="card-title"><?php echo $eve['NAME']; ?></h4>
                      <h6 class="card-subtitle text-muted">&nbsp;<?php echo $eve['DESCRIPTION']; ?></h6>
                    </div>
                    <!--<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSPhIxhDkQNdYKpgeJWysNYfVwM9LEwUF6m7v53YGg7_7rYTDrl" alt="Card image">--> 
                    <img src="<?php echo $eve['IMG']; ?>" alt="Card image">
                    <div class="card-block">
                      <p class="card-text"></p>
                      <a href="aboutevent.php?id=<?php echo crypto($eve['ID'], 'encrypt'); ?>" class="button" style="background: #151515;
color: #FFFFFF;
border: none;">Know more</a> 
<?php
if($etype!='4')
{
	?>

<a href="evereg.php?id=<?php echo crypto($eve['ID'], 'encrypt'); ?>" class="button" style="background: #151515;color: #FFFFFF;border: none;" role="button">Register</a>
<?php
}
else
{
?>

<a href="http://<?php echo $eve['PLACE']; ?>" class="button" style="background: #151515;color: #FFFFFF;border: none;" role="button">Register</a>
<?php
}
?>
</div>
                  </div>
                </div>
                <?php } ?>
                <!-- /bgrid --> 
                
              </div>
              <!-- /about-list --> 
              
            </div>
            <!-- /row about-content --> 
            
          </div>
          <!-- /tab-entry --> 
          
        </div>
        <!-- /tab-about -->
        <div id="tab-non" class="tab-content">
          <div class="tab-entry">
            <div class="row tab-entry-intro">
              <div class="col-twelve with-bottom-line"> </div>
            </div>
            <!-- /tab-content-intro -->
            
            <div class="row about-content tab-entry-content">
              <div class="about-list block-1-3 block-s-1-2 block-tab-full">
                <?php 
$querye = "SELECT * FROM  `events` where CATEGORY='0'";
$spoe = mysqli_query($con,$querye);
while($eve = mysqli_fetch_assoc($spoe))
{
?>
                <div class="bgrid item" style="padding-bottom: 20px; opacity:0.9; 
">
                  <div class="card card-outline-warning" style="background-color: #F6F6F6    ; border-color: #0513EA;  box-shadow: 10px 10px 5px #2B2B2B;">
                    <div class="card-block">
                      <h4 class="card-title"><?php echo $eve['NAME']; ?></h4>
                      <h6 class="card-subtitle text-muted"><?php echo $eve['DESCRIPTION']; ?></h6>
                    </div>
                   <img src="<?php echo $eve['IMG']; ?>" alt="Card image">
                    <div class="card-block">
                      <p class="card-text"></p>
                      <a href="aboutevent.php?id=<?php echo crypto($eve['ID'], 'encrypt'); ?>" class="button" style="background: #151515;
color: #FFFFFF;
border: none;">Know more</a> <a href="evereg.php?id=<?php echo crypto($eve['ID'], 'encrypt'); ?>" class="button" style="       background: #151515;
color: #FFFFFF;
border: none;" role="button">Register</a> </div>
                  </div>
                </div>
                <?php } ?>
                <!-- /bgrid --> 
                
              </div>
              <!-- /about-list --> 
              
            </div>
            <!-- /row about-content --> 
            
          </div>
          <!-- /tab-entry --> 
          
        </div>
      </div>
      <!-- /tab-container --> 
      
    </div>
    <!-- twelve --> 
  </div>
  <!-- row --> 
  
</section>
<!-- /info --> 
