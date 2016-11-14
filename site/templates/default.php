<?php snippet('header') ?>
<!-- Drop in the header file from the snippets folder -->
<!--  Add in the title -->
<h1><?php echo $page->title()->html() ?></h1>

<!--  Add in default text field -->
  <?php echo $page->text()->kirbytext() ?>

<!--  -->
<div class="images">
<?php echo $page->images() ?>
</div>

<!-- Date -->
<?php echo $page->date() ?> <!-- Curently, the problem is that it's defaulting to the number of seconds after Linux Epoch (jan 1 1970)-->

<!-- Add subtext custom field -->
<?php echo $page->subtext() ?>

<?php snippet('footer') ?>
