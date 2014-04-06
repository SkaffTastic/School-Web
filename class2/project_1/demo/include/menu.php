<ul class="secondary menu">
		<li>
			<a href="amon.php">
				<img src="images/amon.jpg"/>
				<p> Amon </p>
			</a>
		</li>
		<li>
			<a href="asami.php">
				<img src="images/asami.jpg"/>
				<p> Asami </p>
			</a>
		</li>
		<li>
			<a href="beifong.php">
				<img src="images/beifong.jpg"/>
				<p> Beifong </p>
			</a>
		</li>
		<li>
			<a href="korra.php">
				<img src="images/korra.jpg"/>
				<p> Korra </p>
			</a>
		</li>
		<li>
			<a href="mako.php">
				<img src="images/mako.jpg"/>
				<p> Mako </p>
			</a>
		</li>
		<li>
			<a href="#">
				<img src="images/tarlok.jpg"/>
				<p> Tarlok </p>
			</a>
		</li>
		<li>
			<a href="#">
				<img src="images/tenzin.jpg"/>
				<p> Tenzin </p>
			</a>
		</li>
		<li>
			<a href="#">
				<img src="images/bolin.jpg"/>
				<p> Bolin </p>
			</a>
		</li>
		
		
	</ul>
	
	<?php if ($menu and $menu != '' ) { ?>
	
		<style>
		
			.menu li img[src*="<?php echo $menu; ?>"] {
				border: 2px solid black;
				
			}
		</style>
		
	<?php } ?> 