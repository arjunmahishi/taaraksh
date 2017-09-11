<!DOCTYPE html>
    <?php
     if(isset($_SESSION['admin']))
     {
      $seid = $_SESSION['admin'];
    $checkadd = "SELECT * FROM more_detail WHERE uid='$seid'";
    $rac = mysqli_query($con,$checkadd);
    if(mysqli_num_rows($rac)=='0')
    {
     
     ?>
      
      
       <?php 
      
      if(isset($_POST['college'])&&isset($_POST['year'])&&isset($_POST['dept'])&&isset($_POST['regno']))
      {
      	 	$college = addslashes($_POST['college']);
      		$year = addslashes($_POST['year']);
      			$dept = addslashes($_POST['dept']);
      				$regno = addslashes($_POST['regno']);
      	
      	  if(!empty($_POST['college'])&&!empty($_POST['year'])&&!empty($_POST['dept'])&&!empty($_POST['regno']))
      {
      	$college = addslashes($_POST['college']);
      		$year = addslashes($_POST['year']);
      			$dept = addslashes($_POST['dept']);
      				$regno = addslashes($_POST['regno']);
     
      
      $addrun = "INSERT INTO `more_detail` (`id`, `uid`, `college`, `department`, `year`, `registration`, `pic`) 
      VALUES (NULL, '$seid', '$college', '$dept', '$year', '$regno', '')";
      $adr = mysqli_query($con,$addrun);
      if($adr)
      {
   header("location:");
      	exit();
      }
      else
      {
      	$errun = "Some Error Occured Please Try Again Or Contact Our Technical Team";
      }
      
      	
      }
      
      
      	
      }
      
      
      
      
      
      
      ?>
      
      
    
      
       <div class="modal show" id="signup" role="dialog" style="padding-top:50px;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style=" height: 50px;    padding: 0px 10px 0px 10px;">
          
          <h4 class="modal-title" style="padding:10px;"><center> Just One More Step</center></h4>
        </div>
        <div class="modal-body">
          <!--<p>Some text in the modal.</p>-->
          <form class="form-horizontal" method="post">
  <div class="form-group" style="margin-bottom: 0px;">
  
    <div class="col-twelve col-full">
      <input type="text" class="form-control" id="name" name="college" placeholder="Enter College Name">
    </div>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
  
    <div class="col-twelve col-full">
      <input type="text" class="form-control"  name="year" id="email" placeholder="Enter Year">
    </div>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
  
    <div class="col-twelve col-full"> 
      <input type="text" class="form-control" name="dept" id="pwd" placeholder="Enter Department">
    </div>
  </div>
    <div class="form-group" style="    margin-bottom: 0px;">
  
    <div class="col-twelve col-full"> 
      <input type="text" name="regno" class="form-control" id="pwd" placeholder="Enter Registration Number">
    </div>
  </div>
  
  <div class="form-group" style="    margin-bottom: 0px;"> 
    <div class="col-twelve">
      <button type="submit" class="button" style="width:100%;">Complete My Profile</button>
    </div>
    
  </div>
</form>
          
  
        </div>
      
      </div>
      </div>
      </div>
      <?php
      
    }
    else
    {
    	
    	
    }
     }
    ?>

<footer style="background:#222222;">
  <div class="social-wrap" style="background:#e9ab0c;">
    <div class="row">
      <ul class="footer-social-list">
      	<style>
      		footer .footer-social-list a:hover{
      			color:#222222;
      		}
      	</style>
        <li><a href="https://www.facebook.com/aurganon"> <i class="fa fa-facebook"></i><span>Facebook</span> </a></li>
        <li><a href="https://twitter.com/aurganon16"> <i class="fa fa-twitter"></i><span>Twitter</span> </a></li>
        <li><a href="https://www.instagram.com/aurganon/"> <i class="fa fa-instagram"></i><span>Instagram</span> </a></li>
        <li><a href="https://www.youtube.com/channel/UC4OOJFrzWzqrSNCyPZxJAfw"> <i class="fa fa-youtube"></i><span>Youtube</span> </a></li>
        <li><a href="https://www.linkedin.com/company/15092210"> <i class="fa fa-linkedin"></i><span>LinkedIn</span> </a></li>
      </ul>
    </div>
    <!-- /row --> 
  </div>
  
  <!--footer-start-->
  <div class="footer-bottom">
  	
    <div class="copyright" style="color:#ffffff;"> <span>©Copyright Department Of Information Technology SRM University Ramapuram Campus</span> <br>
      <span><i class="fa fa-code"></i> Developed by <a href="https://www.facebook.com/Project-Club-1579789532326643/" 
      style="color:#E9AB0C; font-weight:900">Project Club</a></span> </div>
  </div>
  <!-- /footer-end -->
  
  <div class="back-to-top" style="bottom: 31px;"> <a href="#top" class="smoothscroll"><span>Back to Top</span></a> </div>
</footer>
