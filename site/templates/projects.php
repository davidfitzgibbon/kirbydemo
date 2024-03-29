<?php snippet("header") ?>
<?php

$filter = get('filter');

$list = $page
  ->children()
  ->listed();

$projects = $list
  ->when($filter, function($filter){
    return $this->filterBy("category",$filter);
  })
  ->paginate(3);

$pagination = $projects->pagination();

$filters = $list->pluck("category",null,true);

?>
  <main>
    <h1><?= $page->title() ?></h1>

    <nav class="filter">
      <a href="<?= $page->url() ?>">All</a>
      <?php foreach($filters as $filter): ?>
        <a href="<?= $page->url() ?>?filter=<?= $filter ?>">
          <?= $filter ?>
        </a>
      <?php endforeach ?>
    </nav>
    
    <ul class="projects">
      <?php foreach($projects as $project): ?>
        <li>
          <a href="<?= $project->url() ?>">
          
            <figure>
              <?= $project->image()->crop(400, 300) ?>
              <figcaption>
                <?= $project->title() ?><br>
                <small><?= $project->category() ?></small>
              </figcaption>
            </figure>
          </a>
        </li>
      <?php endforeach ?>
    </ul>

    <?php if($pagination->hasPages()): ?>
      <nav class="pagination">
        <?php if($pagination->hasPrevPage()): ?>
          <a href="<?= $pagination->prevPageUrl() ?>" aria-label="Go to previous page">&larr;</a>
        <?php else: ?>
          <span>&larr;</span>
        <?php endif ?>

        <span>Page <?= $pagination->page() ?> of <?= $pagination->pages() ?></span>

        <?php if($pagination->hasNextPage()): ?>
          <a href="<?= $pagination->nextPageUrl() ?>" aria-label="Go to next page">&rarr;</a>
        <?php else: ?>
          <span>&rarr;</span>
        <?php endif ?>
      </nav>
    <?php endif ?>
  </main>
<?php snippet("footer") ?>