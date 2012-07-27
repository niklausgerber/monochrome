<?php

$search = new search(array(
  'searchfield' => 'q',
  'words' => true,
  'in' => 'articles',
  'paginate'    => 10
));

$results = $search->results();

?>

<?php

$blog = $pages->find('articles');
$tags = tagcloud($blog);

?>

<?php snippet('header') ?>

<?php snippet('navigation') ?>

<!-- Search -->
<div class="grid">
	<div class="row">
		<div class="slot-6-7-8-9">
			<form action="<?php echo thisURL() ?>">
				<input type="text" placeholder="Search" name="q" id="search" /><br />
				<input type="submit" value="Search" />
			</form>		
		</div>		
	</div>
	<?php if($results): ?>
	<?php foreach($results as $result): ?>
	<div class="row">
		<div class="slot-6-7-8-9">
			<h1 class="article-title"><a href="<?php echo $result->url() ?>"><?php echo $result->title() ?></a></h1>
			<p>
				<?php echo $result->description() ?> <?php echo excerpt($result->text(), 300) ?> [...] <a href="<?php echo $result->url() ?>">Read more.</a>
			</p>				
		</div>		
	</div>
	<?php endforeach ?>
	<div class="row">
		<div class="slot-6-7-8-9">
			<?php snippet('pagination', array('pagination' => $results->pagination())) ?>				
		</div>		
	</div>
	<?php elseif($search->query()): ?>
	<div class="row">
		<div class="slot-6-7-8-9">
			<h3>No posts found matching «<?php echo html($search->query()) ?>».</h3>
			<p>Your search for <strong><?php echo html($search->query()) ?></strong> returned no results.</p>				
		</div>		
	</div>
	<?php endif ?>
	<div class="row">
		<div class="slot-6-7-8-9">
			<h3>Tags</h3>
			<p>
			<?php foreach($tags as $tag): ?>
			  <a href="<?php echo $tag->url() ?>">#<?php echo $tag->name() ?></a>
			<?php endforeach ?>	
			</p>					
		</div>		
	</div>
</div>

<?php snippet('footer') ?>