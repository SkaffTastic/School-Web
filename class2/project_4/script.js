 //all of the code is from examples in class chopped and screwed to make work for me
 
 $(document).ready(
			function() {
				$(".loadin").load("home.txt");
				$('.menu a').click (
					function() {
						var src = $(this).attr('href');
						$('.loadin').load(src);
						return false;
					}
					
				);
				
					$('.footermenu a').click (
					function() {
						var src = $(this).attr('href');
						$('.loadin').load(src);
						return false;
					}
					
				);
			}
			
			
			//INSERT MORE HERE
			
			
		);





function printdate() {
				var today = new Date();
				document.write(today.toDateString());
				}