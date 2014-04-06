<?php 
	$title = "Product Details";
	$bodyclass = "page-shop";
	include "includes/header.php"; 
	
?>

<section class="row">
<div class="grid two">	
	<div id="slider" class="item">
		<figure> 
			<img id="feature" src="images/shirts/big/1.jpg">
		</figure>
		<nav>
			<img  src="images/shirts/thumbs/1.jpg">
			<img src="images/shirts/thumbs/2.jpg">
			<img src="images/shirts/thumbs/3.jpg">
			<img src="images/shirts/thumbs/4.jpg">
		</nav>
		
	</div> <!------SLIDER------>
	
	<div id="description" class="item">
		<h1> This is the page title</h1>
		
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer faucibus sapien ullamcorper sem molestie fermentum. Maecenas mollis, eros id euismod molestie, nisl risus ullamcorper nisi, et porttitor quam felis id felis. Vestibulum ultricies rhoncus sapien sit amet tempor. Sed dignissim sodales aliquam. Donec felis lacus, vestibulum vitae fringilla ac, rutrum ac libero. Curabitur faucibus aliquam lorem eget interdum. </p>
		
		<form id="sizes">
			<fieldset>
				<input type="radio" name="size" id="small" value="small"><label for="small"> S</label>
				<input type="radio" name="size" id="med" value="med"><label for="med"> M</label>
				<input type="radio" name="size" id="large" value="large"><label for="large"> L</label>
				<input type="radio" name="size" id="xlarge" value="xlarge"><label for="xlarge"> XL</label>
				<input type="radio" name="size" id="XXL" value="XXLarge"><label for="XXL"> 2X</label>
			</fieldset>
				<button type="button">Add To Cart</button>			
		</form>
	</div><!------DESCRIPTION------>
	</>
</section>

<script> 
	
	 var thumbs = document.getElementById("slider").getElementsByTagName("nav")[0].getElementsByTagName("img");
	 
	 for(var i=0; i<thumbs.length; i++) {
	 
		 var thumb = thumbs[i];
		 
		 
		 thumb.onclick = function() {
		 var src = this.src;
		 var big = src.replace("thumbs/", "big/");
		 document.getElementById("feature").src = big;
		 
		 }
	 }
	 
	
</script>

<?php 
	include "includes/footer.php"; 
?>