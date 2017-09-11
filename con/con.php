<?php
@ob_start();
@session_start();
$con = mysqli_connect("localhost","hashbird_hash","hash123","hashbird_aurganon");

 function crypto($string, $action)
 {
    $output = false;

    $encrypt_method = "AES-256-ECB";
    $secret_key = 'hello';
    $secret_iv = 'shikshavenue';

    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if( $action == 'encrypt' ) {
        @$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ) {
        @$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
    }
    
    if(isset($_SESSION['admin']))

{
	$idses = $_SESSION['admin'];
	
    	$checkuser = "SELECT * FROM registered_users WHERE ID='$idses'";
    	$runch = mysqli_query($con,$checkuser);
    	while($userd = mysqli_fetch_assoc($runch))
    	{
    		$user_name=$userd['NAME'];
    		$user_email=$userd['EMAIL'];
    		$user_phone=$userd['PHONE'];
    		$user_otp=$userd['SALT'];
    		$user_active=$userd['ACTIVE'];
    		$user_emails = $userd['EMAILSEN'];
    		
    if($user_otp =='')
    {
    	$number = '123456789098738383930303030383389438938493987282183236828132913621873721378213892717321839721392189732173721382173821312';
    	$shuff = str_shuffle($number);
    $otp = substr($shuff,0,4);
    $create = "UPDATE  `registered_users` SET  `SALT` =  '$otp' WHERE  `ID` ='$idses'";
    
    mysqli_query($con,$create);
    
    
    	
    }
    
     if($user_emails =='0')
    {
    	
    	
    	 include 'email/smtp/Send_Mail.php';

  include 'phpqrcode/qrlib.php';  
  
$dataaa=mysqli_query($con,"select * from registered_users WHERE ID='$idses'");
    
    while($nameaa= mysqli_fetch_assoc($dataaa)){
    	    	
   $name=$nameaa['NAME'];
   $ID = $nameaa['ID'];

    

$idey=$ID;
$checkdbs="SELECT * FROM event_reg WHERE UID='$idey'";
$data = mysqli_query($con,$checkdbs);
while($da = mysqli_fetch_assoc($data))
{
	$eveid = $da['EVENT'];
	$querye = "SELECT * FROM  `events` WHERE ID='$eveid'";	

$spoe = mysqli_query($con,$querye);

while($eve = mysqli_fetch_assoc($spoe))
{
	
 $evep .=  '<li>&nbsp;'.$eve['NAME'].'</li>'; 
 
	
}


	
}
$checkdbs1="SELECT * FROM event_regt1 WHERE UID='$idey'";
$data1 = mysqli_query($con,$checkdbs1);
while($da1 = mysqli_fetch_assoc($data1))
{
	$eveid = $da1['EVENT'];
	$querye1 = "SELECT * FROM  `events` WHERE ID='$eveid'";	

$spoe1 = mysqli_query($con,$querye1);
while($eve1 = mysqli_fetch_assoc($spoe1))
{
	
 $evep .=  '<li>&nbsp;'.$eve1['NAME'].'</li>'; 
 
	
}


	
}

//echo $evep;


				    
   $PNG_TEMP_DIR = 'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';
 
   
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
//$count=mysqli_num_rows($do);






    
    $filename = $PNG_TEMP_DIR.crypto($ID,'encrypt').'test.png';
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'L';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 8;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 8);


    
    
        //default data
      // echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';    
      // QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        QRcode::png(crypto($ID,'encrypt'),$filename, $errorCorrectionLevel, $matrixPointSize, 8); 




$to=$nameaa['EMAIL'];
$subject="Aurganon Greetings";
$body=' <!-- topHeader -->
      <table border="0" cellspacing="0" cellpadding="0" width="100%" summary="" class="topHeader">
        <tr>
          <td>
            <!-- Logo (branding) -->
            <table border="0" cellspacing="0" cellpadding="0" width="640" align="center" summary="">
              <tr>
                <td class="logoContainer" align="center">
                
                    <img class="logo" src="http://www.aurganon.com/images/Untitled%202.png" alt="Lorem logo" />
                  </a>
                </td>
              </tr>
            </table>
            <!-- End Logo (branding) -->
          </td>
        </tr>
      </table>
      <!-- End topHeader -->
      
      <!-- featuredHeader -->
      <table border="0" cellspacing="0" cellpadding="0" width="100%" summary="" class="featuredHeader" style="background-image:url(http://www.aurganon.com/123.jpg);">
        <tr>
          <td class="section">
            <table border="0" cellspacing="0" cellpadding="0" width="640" align="center" summary="">
              <tr>
                <td class="column">
                  <table border="0" cellspacing="0" cellpadding="0" width="395" summary="">
                    <tr>
                      <td class="featuredTitle">
                        
                      </td>
                    </tr>
                    <tr>
                      <td class="featuredContent" style="color:#ffffff;" >
                     <span style="color:#ffffff;">   Hi '.ucfirst($name).' <br><br>
                         <font color="white"> Greetings for Aurganon\'17. We are excited to inform that you have registered for Aurganon\'17 successfully.
                          We hope to see you there on 21rd September, 2017.<br><br>Keep your QR code handy to avoid queue on registration desk. It can be found on MyQR code section.<br><br>
                          Thanks & Regards<br>
                          Team Aurganon.
                          <br>
                          
                          
                          
                         
	

                        </font>  
            <h5>You Have Succcessfully Registered For</h5>
                          <ul>'.$evep.'</ul>
<p style="color:#ffffff;">Like Our Facebook Page To Stay Upto Dated <a href="http://www.facebook.com/aurganon">www.facebook.com/auganon</a></p>
                      <a href="https://play.google.com/store/apps/details?id=com.aurganonlite.android"><img src="https://storage.googleapis.com/support-kms-prod/D90D94331E54D2005CC8CEE352FF98ECF639" style="width:200px"></a>
                    *Please Ignore if any mail recieved before.
                    </span>  </td>
                       
                          
                    </tr>
                  </table>
                </td>
                <td id="featuredImage" class="column"><img src="http://aurganon.com/mail/mobile-phone.png" ></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    
      <table border="0" cellspacing="0" cellpadding="0" width="100%" summary="" class="socialMedia">
        <tr><td class="whitespace" height="20">&nbsp;</td></tr>
        <tr>
          <td>
            <table border="0" cellspacing="0" cellpadding="0" width="120" align="center" summary="">
              <tr>
                <td align="center" width="32">
                <font color="Black">Show this QR Code in the registration desk.</font><br>
                  <img src="http://www.aurganon.com/'.$filename.'" width="200px" height="200px" alt="some error occured" />
                </td>
                
              </tr>
            </table>
          </td>
        </tr>
        <tr><td class="whitespace" height="10">&nbsp;</td></tr>
      </table>
      <!-- End Social media -->
      
    
    </span>
  </body>
</html>

';
// try{

Send_Mail($to,$subject,$body);

 	
    $create = "UPDATE  `registered_users` SET  `EMAILSEN` =  '1' WHERE  `ID` ='$idses'";
    
    mysqli_query($con,$create);
    
// }
// catch(exception $e)
// {
// 	echo $e;
// }
// echo $to;
// $inset = "INSERT INTO `hashbird_aurganon`.`email` (`id`, `uid`, `dat`) VALUES (NULL, '$ID', CURRENT_TIMESTAMP)";
// mysqli_query($con,$inset);
// $evep='';

}
    	
    // $create = "UPDATE  `registered_users` SET  `SALT` =  '$otp' WHERE  `ID` ='$idses'";
    
    // mysqli_query($con,$create);
    
    
    	
    }
    else
    {
    	
    }
    
    	}
    	
    	if($user_active=='0' && $_SERVER["PHP_SELF"]!='/verifyphone.php')
    	{
    	// header('location:verifyphone.php');	
    	// echo '<script>window.location.replace("verifyphone.php");</script>';
    	}
    	
    	
    	
    	
    }
    
    
    
?>