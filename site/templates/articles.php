<?php snippet('header') ?>

<?php snippet('navigation') ?>

<!--Article-->
<div class="grid">
	<? if(param('tag')) {
	
	  $articles = $pages->find('articles')
	                    ->children()
	                    ->visible()
	                    ->filterBy('tags', param('tag'), ',')
	                    ->flip()
	                    ->paginate(10);
	
	} else {
	
	  $articles = $pages->find('articles')
	                    ->children()
	                    ->visible()
	                    ->flip()
	                    ->paginate(10);
	
	} ?>
	<? foreach($articles as $article): ?>
	<div class="row">		
		<div class="slot-6-7-8-9">
			<p class="date"><?php echo html($article->published()) ?></p>
			<h1 class="article-title"><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h1>
			<p>
				<?php echo $article->description() ?> <?php echo excerpt($article->text(), 800) ?> <a href="<?php echo $article->url() ?>">Read more</a>
			</p>			
		</div>
	</div>
	<?php endforeach ?>
	<? if($articles->pagination()->hasPages()): ?>
	<div class="row">		
		<div class="slot-6-7-8-9">
			<p>    						
				<? if($articles->pagination()->hasPrevPage()): ?>
				<a class="prev" href="<?= $articles->pagination()->prevPageURL() ?>">« Previous</a>
				<? endif ?>
				
				<?php if($articles->pagination()->hasPrevPage() && $articles->pagination()->hasNextPage()): ?>
				|
				<?php endif ?>
				
				<? if($articles->pagination()->hasNextPage()): ?>
				<a class="next" href="<?= $articles->pagination()->nextPageURL() ?>">Next  »</a>
				<? endif ?>
			</p>			
		</div>
	</div>
	<? endif ?>
</div>


<?php snippet('footer') ?>