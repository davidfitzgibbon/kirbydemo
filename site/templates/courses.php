<?php snippet("header") ?>
<?php
$therapists = $page
  ->children()
  ->listed();
?>
  <main>
    <h1><?= $page->title() ?></h1>
    
    <ul class="therapists">
      <?php foreach($therapists as $therapist): ?>
        <li>
          <?= $therapist->title() ?>
          <?php if($therapist->image()): ?>
            <?= $therapist->image()->crop(400, 300) ?>
          <?php endif ?>
          <?= $therapist->desc() ?>
        </li>
      <?php endforeach ?>
    </ul>
  </main>
<?php snippet("footer") ?>