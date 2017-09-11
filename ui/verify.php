<?php
if($user_active=='0')
{
}
   else
   {
   
   ?>
   
   
  <script>window.location.replace("index.php");</script> 
   
   
   <?php
   
   }
   ?>
   <?php
if(isset($_POST['otp']))
{
	if(!empty($_POST['otp']))
	{
		$ots  = addslashes($_POST['otp']);
		if($user_otp==$ots)
		{
			$sssid = $_SESSION['admin'];
			
			$act = "UPDATE  `registered_users` SET  `ACTIVE` =  '1' WHERE  `ID` ='$sssid'";
    
    mysqli_query($con,$act);
			header('location:index.php');
			exit();
		}
		else
		{
			$erroro = "INVALID CODE";
		}
	}
}

if(isset($_POST['phn']))
{
	if(!empty($_POST['phn']))
	{
		$ot  = addslashes($_POST['phn']);
	
			$sssid = $_SESSION['admin'];
			
			$act = "UPDATE  `registered_users` SET  `PHONE` =  '$ot' WHERE  `ID` ='$sssid'";
    
    $cha = mysqli_query($con,$act);
    if($cha)
    {
			header('location:index.php');
			exit();
    }
    else
    {
    	$erroro = "SOME ERROR OCCOURED KINDLY CONTACT LIVE SUPPORT TEAM";
    }

	}
}


$sms = "Hello ".$user_name." Thankyou For Registering With AURGANON 16.Your OTP for Aurganon Verify is:".$user_otp;


$ex ="http://bhashsms.com/api/sendmsg.php?user=injector53&pass=omkarshiv123&sender=ARGNON&phone=".$user_phone."&text=".urlencode($sms)."&priority=sdnd&stype=normal";

//$url = 'http://yoursmsgateway.com/WebSMS/SMSAPI.jsp?username='.$smsuser.'&password='.$smspwd.'&sendername='.$smssender.'&mobileno='.$number.'&message='.urlencode($message);



   $mystring = get_data($ex);

//echo "hi!";


function get_data($url) {
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}



?>
<?php include 'images/bgMod.php'; ?>

	<section id="cta" style="background-image: url('<?php bgmod('login'); ?>');
			background-repeat: no-repeat;
   			background-size: 100% 100%;
	">
		<style>
			@media screen and (min-width: 400px){
[class*="col-x"] {
    float: none !important;
    clear: both !important;
    margin-left: 0;
    margin-right: 0;
    padding: 20px;
}}
@media screen and (max-width: 400px){
[class*="col-x"] {
    width: 100% !important;
    float: none !important;
    clear: both !important;
    margin-left: 0;
    margin-right: 0;
    padding: 15px;
}
	.cta-content
	{
		background:transparent;
	}
	
}

@media screen and (max-width: 600px){
[class*="col-x"] {
    padding: 0 10px;
}}
@media screen and (max-width: 768px){
[class*="col-x"] {
    padding: 0 15px;
}}
		</style>
	
		

   	<div class="container" style="max-width:600px;">

   		<div class="col-twelve cta-content" style="background-color: rgba(0, 0, 0, 0.82)">  

	     		<h2 class="h01">Verify Phone</h2>

		      <p class="lead" style="color:#ffffff">
		    For No Spaming You Need To Verify Your Phone
				<!--Get <span>here</span>  <span></span>. -->
				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
				</p>

				<div class="action">
				
				<?php
				
				if(isset($_GET['action'])=='changephone')
				{
					?>
						<form method="POST">
					<label style="color:#fff;">Please Enter New Phone</label>
					
					
					<input type='text' name='phn' class="form-control" placeholder="Enter New Phone Number">
					
					<button type="submit" class="btn btn-success">CHANGE</button>
				<?php echo $erroro; ?>&nbsp;<br><br>
					
					<!--<a href='resend.php' class="btn btn-primary">RESEND</a>-->
					<!--<a href='?action=change' class="btn btn-warning">CHANGE PHONE</a>-->
				</form>
		<?php			
				}
				else
				{
			
				?>
				
				<form method="POST">
					<label style="color:#fff;">Please Enter OTP</label>
					
					
					<input type='text' name='otp' class="form-control" placeholder="OTP SENT TO <?php echo $user_phone; ?>">
					
					<button type="submit" class="btn btn-success">VERIFY</button>
				<?php echo $erroro; ?>&nbsp;<br><br>
					
					<a href='index.php' class="btn btn-primary">RESEND</a>
					<a href='?action=changephone' class="btn btn-warning">CHANGE PHONE</a>
				</form>
					
				<?php } ?>	
			       
		      </div>		     	

   		</div>

   	</div> <!-- /cta-content -->

   </section> <!-- /cta --> 
  