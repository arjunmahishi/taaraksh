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

	     		<h2 class="h01">LOGIN</h2>

		      <p class="lead" style="color:#ffffff">
		      Login To Your Account
				<!--Get <span>here</span>  <span></span>. -->
				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
				</p>

				<div class="action">
				 <form class="form-horizontal" method="post">
  <div class="form-group" style="margin-bottom: 0px;color:#fff">
  
    <div class="col-x col-full">
      <input type="email" class="form-control" name="uname" id="email" placeholder="Enter email" autocomplete="off">

      <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password"  autocomplete="off">

 <?php echo @$error; ?>
      <button type="submit" class="button" style="width:100%;">LOGIN</button>
      <!--<a href="signup.php"><button class="button" action="signup.php" style="width:100%;">REGISTER</button></a>-->
      Not a member yet?<a href="signup.php" style="color:#fff"> <u> Join us!</u></a>
        <!--<a href="signup.php"><button class="button" action="signup.php" style="width:100%;">REGISTER</button></a>-->
      <!--<a class="button" href="forgotkeyreq.php" role="button" style="width:100%;">Forgot Password ?</a>-->
  </div>
  </div>
  </form>

					
					
			       
		      </div>		     	

   		</div>

   	</div> <!-- /cta-content -->

   </section> <!-- /cta --> 