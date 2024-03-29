<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page->title() ?> | <?= $site->title() ?></title>

  <?= css('assets/css/index.css') ?>
  <?= css('@auto') ?>

</head>
<body>

<?php snippet("menu") ?>
  