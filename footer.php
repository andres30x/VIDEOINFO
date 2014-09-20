    
     <!-- footer 2 -->
	<div id="footer2">
		<div class="container">
			<div class="row">
				<div class="span12">
				<div class="copyright">
							VIDEOINFO
							&copy;
							<script type="text/javascript">
							//<![CDATA[
								var d = new Date()
								document.write(d.getFullYear())
								//]]>
								</script>
							 - All Rights Reserved 
						</div>
						</div>
					</div>
				</div>
			</div>
			<!-- up to top -->
				<a href="#"><i class="go-top hidden-phone hidden-tablet  icon-double-angle-up"></i></a>
				<!--//end-->
<?php include "login.php"; ?>
<script src="js/jquery.js"></script>			
<script src="js/bootstrap.min.js"></script>	
<script src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/sorting.html"></script>
<script type="text/javascript">
//<![CDATA[
	$(window).load(function(){	
	$('.projects').isotope({
  });
});
//]]>
</script>		
<script type="text/javascript">
//<![CDATA[
		$(function () {
			$('div.element').hide();
		});
		var i = 0;//initialize
		var int=0;
		$(window).bind("load", function() {
			var int = setInterval("doThis(i)",100);fade in speed in milliseconds
		}); 
	function doThis() {
			var imgs = $('div.element').length;
			if (i >= imgs) {
				clearInterval(int);
			}
			$('div.element:hidden').eq(0).fadeIn(100);
			i++;//add 1 to the count
		}
		//]]>
</script>
</body>
</html>	