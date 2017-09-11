 <link href="http://vjs.zencdn.net/5.11.6/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 -->
  <script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

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
	
		

   	<div class="container" style="max-width:100%;">

   		<div class="col-twelve cta-content" style="background-color: rgba(0, 0, 0, 0.82); padding:0px 0px;">  

	     		<h2 class="h01">My Registrations</h2>


		      <p class="lead" style="color:#ffffff">
		     Here are events you've registered for
				<!--Get <span>here</span>  <span></span>. -->
				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
				</p>

				<div class="action">
			
  <div class="form-group" style="margin-bottom: 0px;">
  
    <div class="col-x col-full">
      
<!--      <form id="upload_form" enctype="multipart/form-data" method="post">-->
<!--  <input type="file" name="file1" id="file1" accept="video/*"><br>-->
<!--  <input type="button" value="Upload File" onclick="uploadFile()">-->
<!--  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>-->
<!--  <h3 id="status"></h3>-->
<!--  <p id="loaded_n_total"></p>-->
<!--</form>-->
<style>
	.card
	{
		background:#fff;
		border:10px solid #000;
	}
</style>
<?php 
$idey=$_SESSION['admin'];
$checkdbs="SELECT * FROM event_reg WHERE UID='$idey'";
$data = mysqli_query($con,$checkdbs);
while($da = mysqli_fetch_assoc($data))
{
	$eveid = $da['EVENT'];
	$querye = "SELECT * FROM  `events` WHERE ID='$eveid'";	

$spoe = mysqli_query($con,$querye);
while($eve = mysqli_fetch_assoc($spoe))
{
	
?>
  <div class="card col-sm-4" style="padding:10px;">
  <div class="card-block">
    <h4 class="card-title"><?php echo $eve['NAME']; ?></h4>
    <h6 class="card-subtitle text-muted" style="font-size:10px;"><?php echo $eve['DESCRIPTION']; ?></h6>
  </div>
  <img src="<?php echo $eve['IMG']; ?>" alt="Card image">
  <div class="card-block">
    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
    <!--<a href="#" class="card-link">Card link</a>-->
    <!--<a href="#" class="card-link">De-Register</a>-->
  </div>
</div>
  
<?php }  }
?>
<?php 
$idey=$_SESSION['admin'];
$checkdbs="SELECT * FROM event_regt1 WHERE UID='$idey'";
$data = mysqli_query($con,$checkdbs);
while($da = mysqli_fetch_assoc($data))
{
	$eveid = $da['EVENT'];
	$querye = "SELECT * FROM  `events` WHERE ID='$eveid'";	

$spoe = mysqli_query($con,$querye);
while($eve = mysqli_fetch_assoc($spoe))
{
	
?>
  <div class="card col-sm-4" style="padding:10px;">
  <div class="card-block">
    <h4 class="card-title"><?php echo $eve['NAME']; ?></h4>
    <h6 class="card-subtitle text-muted" style="font-size:10px;"><?php echo $eve['DESCRIPTION']; ?></h6>
  </div>
  <img src="<?php echo $eve['IMG']; ?>" alt="Card image">
  <div class="card-block">
    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
    <!--<a href="#" class="card-link">Card link</a>-->
    <!--<a href="#" class="card-link">De-Register</a>-->
  </div>
</div>
  
<?php }  }
?>
      
      
  </div>

  </div>

			       
		      </div>
		   
   		</div>

   	</div> <!-- /cta-content -->

   </section> <!-- /cta --> 