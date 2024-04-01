<?php snippet("header") ?>
<?php
$therapists = $page
  ->children()
  ->listed();
?>
  <main>
    <h1><?= $page->title() ?></h1>    
    <div class="therapists">
      <?php foreach($therapists as $therapist): ?>
        <div class="therapist" <?php if($therapist->image()): ?>class="img"<?php endif ?>>
          <?php if($therapist->image()): ?>
            <?= $therapist->image() ?>
          <?php endif ?>
          
          <h1><?= $therapist->title() ?></h1>
          <p><?= $therapist->desc() ?></p>
        </div>
      <?php endforeach ?>
    </div>
  </main>
<?php snippet("footer") ?>