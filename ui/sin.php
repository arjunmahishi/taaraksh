
<?php include 'images/bgMod.php'; ?>
<!--<body id="top" style="background-image: url();">-->
	<section id="cta" style="background-image: url(<?php bgmod('login'); ?>);
			background-repeat: no-repeat;
   			background-size: 100% 100%;
	">

   	<div class="row cta-wrap">

   		<div class="col-twelve cta-content" style="background-color: rgba(0, 0, 0, 0.82)">  

	     		<h2 class="h01">SIGN UP AURGANON</h2>

		      <p class="lead" style="color:#ffffff">
		      Register Your Account
				<!--Get <span>here</span>  <span></span>. -->
				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
				</p>

				<div class="action">
				 <form class="form-horizontal" method="post">
				 	<div class="form-group" style="margin-bottom: 0px;">
  
    <div class="col-twelve col-full">
      <input type="text" class="form-control" name="name" id="email" placeholder="Enter Name" autocomplete="off" required>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
  
    <div class="col-twelve col-full">
      <input type="tel" class="form-control" name="phone" id="email" placeholder="Enter Phone" autocomplete="off" required >
    </div>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
  
    <div class="col-twelve col-full">
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" autocomplete="off" required>
    </div>
  </div>
  <div class="form-group" style="    margin-bottom: 0px;">
  
    <div class="col-twelve col-full"> 
      <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password"  autocomplete="off" required>
    </div>
  </div>
 <?php echo @$error; ?>
  <div class="form-group" style="    margin-bottom: 0px;"> 
    <div class="col-twelve">
      <button type="submit" class="button" style="width:100%;">REGISTER</button>
    </div>
    <div class="col-twelve" style="color:#ffffff">
      Already registered?<a href="login.php" style="color:#fff"> <u>Login</u></a>
    </div>
  </div>
</form>
					
					
			       
		      </div>		     	

   		</div>

   	</div> <!-- /cta-content -->

   </section> <!-- /cta --> 