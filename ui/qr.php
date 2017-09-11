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

	     		<h2 class="h01">My QR Code</h2>

		      <p class="lead" style="color:#ffffff">
		      Show This QR Code at Registration Desk to Avoid Queue
				<!--Get <span>here</span>  <span></span>. -->
				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
				</p>

				<div class="action">
				
				
				<?php
				    
   $PNG_TEMP_DIR = 'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';
 
    include 'phpqrcode/qrlib.php';   
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.crypto($_SESSION["admin"],'encrypt').'test.png';
    
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
        QRcode::png(crypto($_SESSION['admin'],'encrypt'),$filename, $errorCorrectionLevel, $matrixPointSize, 8); 
      
      
        
        
    ?>
      <img src="<?php echo $filename; ?>">

					
					
			       
		      </div>		     	

   		</div>

   	</div> <!-- /cta-content -->

   </section> <!-- /cta --> 