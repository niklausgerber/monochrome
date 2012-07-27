<?php snippet('header') ?>

<?php snippet('navigation') ?>

<!-- Error 404 -->
<div class="grid">
	<div class="row">		
		<div class="slot-6-7-8-9 error">
			<h2><?php echo html($page->title()) ?></h2>
			<p>The requested page could not be found. If you're really lost, try <a href="<?php echo html($pages->find('search')->url()) ?>">searching</a> for something.</p>
		</div>				
	</div>
</div>

<?php snippet('footer') ?>