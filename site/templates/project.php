<?php snippet("header") ?>
  <main>
    <article>
      <h1><?= $page->title() ?></h1>
      <div class="project-layout">
        <div class="project-info">
          <?= $page->text() ?>

          <br>
          <br>

          <dl>
            
            <?php if($page->client()->isNotEmpty()):?>
              <dt>Client:</dt>
              <dd><?= $page->client() ?></dd>
              <br>
            <?php endif ?>
            
            <?php if($page->year()->isNotEmpty()):?>
              <dt>Year:</dt>
              <dd><?= $page->year() ?></dd>
              <br>
            <?php endif ?>
            
            <?php if($page->category()->isNotEmpty())  :?>
              <dt>Category:</dt>
              <dd><?= $page->category() ?></dd>
              <br>
            <?php endif ?>
            
            <?php if($page->link()->isNotEmpty())  :?>
              <dt>Link:</dt>
              <dd><?= $page->link() ?></dd>
              <br>
            <?php endif ?>
          </dl>
        </div>
        <div class="project-gallery">
        <ul>
          <?php foreach($page->images() as $image): ?>
            <li>
              <a href="<?= $image->url() ?>">
                <img src="<?=$image->resize(600,600)->url()?>" alt="<?=$image->alt()?>">
              </a>
            </li>
          <?php endforeach ?>
        </ul>
        </div>
      </div>
    </article>
    
  </main>
<?php snippet("footer") ?>