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
 <h3>Featured Image</h3>
 <?php echo $page->image($page->featureImage() ) ?>

 <!-- This is the HTML option of it -->

<!-- Add subtext custom field -->
<br>
<?php echo $page->subtext() ?>

<h3>Sizing Images, 200x200, bad Quality</h3>
<?php foreach ($page->images() as $editableImage): ?>
  <?php echo $editableImage->resize(200,200,10) ?>

<?php endforeach ?>

<h3>Load images from child Pages</h3>
<?php foreach($page->children() as $childpage ): ?>
  <?php echo $childpage->images() ?>
<?php endforeach ?>

<h3>Children of the page tagged 'subpage'</h3>
<!-- https://getkirby.com/docs/cookbook/tags -->
<ul class='tagMenu'>
  <?php foreach($page->children()->filterBy('tags', 'subPage', ',')  as $subPage ): ?>
    <li>
      <a href="<?php echo $subPage->url() ?>"><?php echo $subPage->title() ?></a>
    </li>
<?php endforeach ?>
</ul>

<?php snippet('footer') ?>
