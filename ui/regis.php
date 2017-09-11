<?php

// 'con/con.php';

//$teamea=$dat['CATEGORY'];




if(isset($_POST['btn']))
{
$Ses=$_SESSION['admin'];
	
	
$eventname="SELECT * FROM events WHERE ID='$idi'";
$do1 = mysqli_query($con,$eventname);
$do2=mysqli_fetch_array($do1);
$eveid=$do2['ID'];
$team=$do2['TEAM'];




//if($team=='1'){
	
	
//	$tt="";
///	}








	$querry= "SELECT * FROM registered_users WHERE ID='$Ses'";
	
			$runq = mysqli_query($con,$querry);
	$do=mysqli_fetch_array($runq);
	
	//$a=$do['ID'];
	$mail=$do['EMAIL'];

if($team=='0'){
	
$check="select * from event_reg WHERE UID='$Ses' AND EVENT='$idi'";	  
$cquery=mysqli_query($con,$check);
$cou=mysqli_num_rows($cquery);

if($cou=='0'){


$sql = "INSERT INTO `hashbird_aurganon`.`event_reg` (`ID`, `UID`, `EVENT`, `TEAM`, `REGISTERED_ON`) VALUES (NULL, '$Ses', '$idi', '$team', CURRENT_TIMESTAMP)";
$querrry=mysqli_query($con,$sql); 
}
	




}
else
{
	$check="select * from event_regt1 WHERE UID='$Ses' AND EVENT='$idi'";	  
$cquery=mysqli_query($con,$check);
$cou=mysqli_num_rows($cquery);

if($cou=='0'){

	
	$name1=trim($_POST['name1']);
	$name2=trim($_POST['name2']);
	$name3=trim($_POST['name3']);
	$name4=trim($_POST['name4']);
	$name5=trim($_POST['name5']);
	$name=trim($_POST['teamname']);
	
	
	
	
	$sql = "INSERT INTO `hashbird_aurganon`.`event_regt1` (`UID`, `NAME1`, `NAME2`, `NAME3`, `NAME4`,`NAME5`, `team name`,`EVENT`) VALUES ('$Ses', '$name1', '$name2', '$name3', '$name4', '$name5','$name', '$idi')";
	
	$querrry=mysqli_query($con,$sql);
}
}
 
  if ($querrry) {


   $errTyp = "success";

   $errMSG = "successfully registered";

$dat['TEAM']='0';
// if($eveid=='1')
// {
// 	header('location:http://www.hackerrank.com/crack-jack');
// exit();
	
// }else
// {
header("location:myregistrations.php");
exit();
// }

// $to = $mail;
// $subj = 'Aurganon 16';
// $mess = "Your have been registered  ";

// $mailsend = mail($to,$subj,$mess);

  }  if (!$querrry)  {
  	
   $errTyp = "danger";
   $errMSG = "Already Registered"; 

  } 




//header("Location: site/index.php");	
}





?>



	<section id="cta">

   	<div class="row cta-wrap">

   		<div class="col-twelve cta-content">  

	     		<h2 class="h01">Register For - <?php echo $dat['NAME']; ?></h2>
 <?php
 if(0==0)

 {
   if ( !isset($errMSG) ) {
    
    ?>
		      <p class="lead">
	Do you want to confirm ?
				<!--Get <span>here</span>  <span></span>. -->
				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
				</p>
				          <?php
   }
   ?>

				<div class="action">

  <div class="form-group">
  	
  	        <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   
   ?>
   
    
   <div class="form-group">
   
   	<?php

   	
   	if($dat['TEAM']=='1')
   	{
   	?>
   	<p>Fill in Up some Details</p>
    <form method="post">
	<div class="text"><p><input type="text" class="form-control" name="teamname" id="email" placeholder="Whats your team name?" autocomplete="off"></p></div> 
   <?php
   $lim=$dat['LIMIT'];
   for($P=1;$P<=$lim;$P++)
   {
   	?>
   <div class='text'><p><input type='text' class='form-control' name='name<?php echo $P;?>' id='email' placeholder='Enter name <?php echo $P;?>' autocomplete='off'></p></div>
    
    <?php
   }
   ?>
    <div class="col-sm-offset-2 col-sm-10">
    
    	<input type="hidden" name="btn" value="0">	
      <button type="submit" class="" name="">Confirm</button>
     </form>
   
   
      <?php
      
      }
      if($dat['TEAM']=='0')
     { 
      ?>
      <img src="<?php echo $dat['IMG']; ?>">
     <form method="post">
    <div class="col-sm-12">
    
    	<input type="hidden" name="btn" value="0">	
      <button type="submit" class="button"  name="">Confirm</button>
     </form>
         
    </div>
    <?php
   }
 }
    ?>
    <form method="post" >
      <button type="submit" class="button" name="btn1">GO TO HOMEPAGE</button>
    	
    
    
    
    
	
</form>
  </div>

<!--					  <select id="edition" onchange="func()">
      <option value="none" selected >----Select ----</option>
      <option id="1">1</option>
      <option id="2">2</option>
      <option id="2">3</option>
       <option id="2">4</option>
     </select>
	-->				
			       
		      </div>		     	

   		</div>

   	</div> <!-- /cta-content -->

   </section> <!-- /cta --> 