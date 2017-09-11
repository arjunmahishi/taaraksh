<?php include 'images/bgMod.php'; ?>

	<section id="cta" style="background-image: url('<?php bgmod('login'); ?>');
			background-repeat: no-repeat;
   			background-size: 100% 100%;padding-top:6rem;
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
	
		

   	<div class="container" style="">

   		<div class="col-twelve cta-content" style="background-color: rgba(0, 0, 0, 0.82)">  

	     		<h2 class="h01">Team Aurganon</h2>

		      <p class="lead" style="color:#ffffff">
		     Here's The List Of Members Behind the Event
				<!--Get <span>here</span>  <span></span>. -->
				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
				</p>

				<div class="action">
				
		<?php	$querye = "SELECT * FROM  `teams`";	

$spoe = mysqli_query($con,$querye);
while($eve = mysqli_fetch_assoc($spoe))
{
	?>
         <div class="bgrid item" style="
padding:5px 10px;
">
                  <div class="card card-outline-warning" style="background-color: #F6F6F6 ; border-color: #0513EA;
">
                    <div class="card-block">
                      <style>
.text-muted {
color: #080808;
}
</style>


                      <h4 class="card-title"><?php echo $eve['NAME']; ?></h4>
                      <h6 class="card-subtitle text-muted">&nbsp;<?php echo $eve['DESCRIPTION']; ?></h6>
                    </div>
                    <!--<img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSPhIxhDkQNdYKpgeJWysNYfVwM9LEwUF6m7v53YGg7_7rYTDrl" alt="Card image">--> 
                    <img src="images/team/<?php echo $eve['IMG']; ?>" alt="Card image" style="
    width: 200px;
    height: 200px;
    margin:10px;
">
                    <div class="card-block">
                      <p class="card-text"></p>
            <a href="<?php echo $eve['FB'];
?>" class="button" style="background: #151515;
color: #FFFFFF;
<!--border: none;">Connect Now</a> 

</div>
                  </div>
                </div>
                <?php } ?>

					
					
			       
		      </div>		     	

   		</div>

   	</div> <!-- /cta-content -->

   </section> <!-- /cta --> 