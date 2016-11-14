<?php snippet('header') ?>
<!-- Drop in the header file from the snippets folder -->
<!--  Add in the title -->
<h1><?php echo $page->title()->html() ?></h1>

<!--  Add in default text field -->
  <?php echo $page->text()->kirbytext() ?>

<!-- Add our images associated with this $page -->
<div class="images">
<?php echo $page->images() ?>
</div>

<!-- Date -->
<?php echo $page->date('m/d/y') ?>
 <!-- Curently, the problem is that it's defaulting to the number of seconds after Linux Epoch (jan 1 1970)-->

 <!-- Featured Image (Gets a specific image from the page. The image is the filename that is placed into the code, and the filename of course comes from the panel.) -->
 <?php echo $page->image($page->featureImage() ) ?>

 <img src="<?php echo $page->image($page->featureImage())->url() ?>" alt="a feature image" />

<!-- Add subtext custom field -->
<?php echo $page->subtext() ?>

<?php snippet('footer') ?>
