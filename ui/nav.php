<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
	<?php 
	if(isset($_SESSION['admin']))
	{
		$see = $_SESSION['admin'];
		$queryrr = "SELECT * FROM registered_users WHERE ID='$see'";
		$ruui = mysqli_query($con,$queryrr);
		while($ud = mysqli_fetch_assoc($ruui))
		{
			$udd= $ud;
		}
		
		?>
Tawk_API.visitor = {
	name  : '<?php echo $udd["NAME"]; ?>',
	email : '<?php echo $udd["EMAIL"]; ?>'
};
<?php
		
	}
?>
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57d29d15311d6c5be06348be/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->
<style>
.navbar {
   margin-bottom:0px;
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
</style><nav class="navbar navbar-inverse navbar-fixed-top" style="z-index:2000;background:;box-shadow:0px 0px 1px #ffffff;">
 <div class="container"><div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="images/Untitled 2.png"
                style=" max-height: 100%;
    height: auto;
    width: auto9;"></a></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
         <?php
            
             $pg = basename($_SERVER['PHP_SELF']);
            if ($pg=="index.php"){
            	$cl="page-scroll";
            }
            else{
            	$cl="page-scroll";
            }
            
            
            
            ?>
      <ul class="nav navbar-nav navbar-right">
          <li>
                        <a class="<?php echo @$cl; ?>" href="http://www.aurganon.com/index.php" style="color:#ffffff">Home</a>
                    </li>
                    <li>
                        <a class="<?php echo @$cl; ?>" href="http://www.aurganon.com/index.php?info=1#info" style="color:#ffffff">Events</a>
                    </li>
                    <li>
                        <a class="<?php echo @$cl; ?>" href="http://www.aurganon.com/index.php?spo=2#cta" style="color:#ffffff">Sponsors</a>
                    </li>
                      <li>
                        <a class="<?php echo @$cl; ?>" href="http://www.aurganon.com/team.php" style="color:#ffffff">Team</a>
                    </li>
                     <?php if(isset($_SESSION['admin'])&&!empty($_SESSION['admin']))
                    {
                    	
                    ?>
                    
                      <li class="dropdown" style="background:#1c1c1d;font-size:12px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          	<i class="icon-user"></i> <span style="font-weight:900;">Vanakkam</span>, <?php echo $_SESSION['name']; ?> <span class="caret"></span></a>
          	
          	</a>
          <ul class="dropdown-menu">
            <li><a href="myqr.php">My QR Code</a></li>
            <li><a href="#">Account Settings</a></li>
            <li><a href="myregistrations.php">My Registrations</a></li>
            <!--<li><a href="#">Something else here</a></li>-->
            <li role="separator" class="divider"></li>
           <li style="">
                        	<a href="logout.php" style="font-weight:900;"><i class="fa fa-power-off"></i> Logout</a>
                    </li>
          </ul>
        </li>
                       
                    
                    <?php
                    
                    }else
                    {
                    	
                    ?>
                  <li class="active">
                        <a href="login.php" style=""><i class="icon-key"></i> LOGIN</a>
                    </li>
                    <li class="active">
                        <a  href="signup.php" style=""><i class="icon-users"></i> REGISTER</a>
                    </li>
<!--                     <li class="" style="font-size: 1rem;margin-top: 5px;line-height: 2rem;"> -->
<!--                         Registrations are <br> temporarily closed -->
<!--                     </li> -->
                    <?php
                    }
                    ?>
                    
                   
      
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</nav>