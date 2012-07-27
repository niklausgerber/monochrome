<?php if($pagination->hasPrevPage()): ?>
<a href="<?= $pagination->prevPageURL() ?>">« Previous</a>
<?php endif ?>

<?php if($pagination->hasPrevPage() && $pagination->hasNextPage()): ?>
|
<?php endif ?>

<?php if($pagination->hasNextPage()): ?>
<a href="<?= $pagination->nextPageURL() ?>">Next »</a>
<?php endif ?>