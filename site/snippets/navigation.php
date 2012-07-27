<!--Navigation-->
<div class="header">
	<ul id="navigation">
		<?php foreach($pages->visible() AS $p): ?>
		<li><a href="<?php echo $p->url() ?>" class="nav"><?php echo html($p->title()) ?></a></li>
		<?php endforeach ?>		
	</ul>
</div>
<hr />
