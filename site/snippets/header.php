<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="icon" href="/imgs/favicon/favicon.ico" />
		<link rel="icon" href="/imgs/favicon/favicon.svg" type="image/svg+xml" />
		<link rel="apple-touch-icon" href="/imgs/favicon/apple-touch-icon.png" />

		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;800&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="/css/global.css" />
		<title><?= $page->title() ?> | <?= $site->title() ?></title>
    <?= css('assets/css/index.css') ?>
    <?= css('@auto') ?>
	</head>
<body>

<!-- <script>
	import Nav from './Nav.svelte';
	import Logo from '$lib/Logo.svelte';
</script> -->

<div class="header">
	<?php snippet("logo") ?>
	<?php snippet("menu") ?>
</div>

<style>
	.header {
		height: calc(var(--big) * 2);
		width: 100vw;
		border-bottom: 1px solid var(--grey);
		position: fixed;
		top: 0;
		background: var(--white);
		z-index: 1;
		padding-right: calc(var(--big) * 3);
		display: grid;
		align-items: center;
	}
</style>


