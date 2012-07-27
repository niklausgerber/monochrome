<!--Footer-->
<div class="footer">
	<p><?php echo html($site->copyright()) ?></p>
</div>

<!--jQuery Plugin-->
<?php echo js('assets/js/jquery-1.7.1.min.js') ?>

<!-- TinyNav.js -->
<?php echo js('assets/js/tinynav.js') ?>
<script>
	//<![CDATA[
	$(function () {	
		$('#navigation').tinyNav({
			header: true
		});
	});
	//]]>
</script>

<!-- Enable CSS active pseudo styles in Mobile Safari -->
<script language="JavaScript">
  //<![CDATA[
    document.addEventListener("touchstart", function() {},false);
  //]]>
</script>

<!-- Twitter Button -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<!-- Google+ Button -->
<script type="text/javascript">
  window.___gcfg = {lang: 'en-GB'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

</body>
</html>

<!-- Theme by Niklaus Gerber | http://niklausgerber.com -->