 <link href="http://vjs.zencdn.net/5.11.6/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 -->
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<script>
/* Script written by Adam Khoury @ DevelopPHP.com */
/* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
	var file = _("file1").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file1", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "flashupload.php");
	ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	if(event.target.responseText == '1')
	{
window.location.reload();
	}
	_("progressBar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
</script>
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
.my-video-dimensions
{
	width:100%;
}
		</style>
	
		

   	<div class="container" style="max-width:600px;">

   		<div class="col-twelve cta-content" style="background-color: rgba(0, 0, 0, 0.82); padding:0px 0px;">  

	     		<h2 class="h01">Online Event - Flash Write</h2>
	     		  <?php
	     if(0==0)

	     {
	     	?>
<?php 
$idey=$_SESSION['admin'];
$checkdbs="SELECT * FROM flashwrite WHERE userid='$idey'";
$data = mysqli_query($con,$checkdbs);
$cou = mysqli_num_rows($data);


if($cou!=2){
?>

		      <p class="lead" style="color:#ffffff">
		     Submit a Selfie and Letter To Favourite Superhero
				<!--Get <span>here</span>  <span></span>. -->
				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
				</p>

				<div class="action">
			
  <div class="form-group" style="margin-bottom: 0px;">
  
    <div class="col-x col-full">
    <?php
   if($cou == 0)
   {
    
    
    ?>
    	<p>STEP-1 - Submit Your Selfie</p>
      
      <form id="upload_form" enctype="multipart/form-data" method="post">
  <input type="file" name="file1" id="file1" accept="images/*"><br>
  <input type="button" value="Upload File" onclick="uploadFile()">
  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
</form>
     <?php
   }
    else if($cou == 1)
   {
    
    
    ?>
    	<p>STEP-2 - Submit Your Letter</p>
      
      <form id="upload_form" enctype="multipart/form-data" method="post">
  <input type="file" name="file1" id="file1" accept="images/*"><br>
  <input type="button" value="Upload File" onclick="uploadFile()">
  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
</form>
     <?php
   }
   ?>
      
      
  </div>
  	    
  </div>

			       
		      </div>
		        <?php
  }else if($cou ==2)
  {
  
  ?>
		      <p class="lead" style="color:#ffffff">
		     You have successfully Submitted your selfie and letter
				<!--Get <span>here</span>  <span></span>. -->
				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
				</p>

				<div class="action">
	
			
<?php //while($img = mysqli_fetch_assoc($data))
// {
// 	?>

   
 <?php

// }
?>

			       
		      </div> 
	
	
	  <script src="http://vjs.zencdn.net/5.11.6/video.js"></script>
	
	
	
		      
<?php }} ?>
   		</div>

   	</div> <!-- /cta-content -->

   </section> <!-- /cta --> 