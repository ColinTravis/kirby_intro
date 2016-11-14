<?php snippet('header') ?>
<!-- Drop in the header file from the snippets folder -->
<h1><?php echo $page->title()->html() ?></h1>
<p>
  <?php echo $page->text()->kirbytext() ?>
</p>
<div class="images">

<?php echo $page->images() ?>
</div>

<?php echo $page->subtext() ?>

<?php snippet('footer') ?>
