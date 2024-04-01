<nav>
	<h3 id="menu_toggler">Menu<span>/</span></h3>
	<ul id="menu">  
    <?php foreach($site->children()->listed() as $item): ?>
      <li><a href="<?= $item->url() ?>"><?= $item->title() ?></a></li>
    <?php endforeach ?>
		<li><div class="circle" /></li>
	</ul>

	<button id="menu_close" class="">&cross;</button>
</nav>

<script>
	const menu = document.getElementById("menu")
	const menu_toggler = document.getElementById('menu_toggler');
	const menu_close = document.getElementById('menu_close');
	let width = Infinity;
	let isOpen = false;
	const triggerWidth = 510;

	window.addEventListener('resize', () => {
		const newWidth = window.innerWidth;
		if (width > triggerWidth && newWidth <= triggerWidth) {
			isOpen = false;
		}
		width = newWidth;
	});
	menu_toggler.addEventListener('click',()=>{
		toggle();
	})
	menu_close.addEventListener('click',()=>{
		toggle();
	})

	const assign = () => {
		menu.classList = isOpen?"open":"";
		menu_close.classList = isOpen?"open":"";
	}

	function toggle() {
		isOpen = !isOpen;
		assign();
	}
</script>

<style>
	nav {
		position: absolute;
		top: calc(var(--sml) * -1);
		right: 0;
		left: 0;
		bottom: 0;
		padding: 0 1rem;
		text-align: right;
		pointer-events: none;
	}
	@media screen and (min-width: 510px) {
		nav {
			width: calc(var(--big) * 2.5);
			height: 100vh;
			border-left: 1px solid var(--grey);
			left: auto;
			bottom: auto;
		}
	}
	h3 {
		line-height: calc(var(--big) * 2.5);
		height: calc(var(--big) * 2.5);
		display: block;
		pointer-events: initial;
	}
	@media screen and (min-width: 510px) {
		h3 {
			text-align: left;
			width: 100%;
			height: calc(var(--big) * 2);
			display: block;
		}
	}
	span {
		color: var(--red);
	}
	ul {
		pointer-events: initial;
		position: absolute;
		text-align: center;
		display: grid;
		align-items: center;
		font-size: var(--mid);
		font-weight: var(--light);
		top: var(--sml);
		left: 0;
		width: 100vw;
		height: 100vh;
		padding: 0;
		margin: 0;
		list-style: none;
		line-height: 2;
		background: var(--white);
		transform: translate3d(100vw, 0, 0);
		transition: transform ease-in var(--animationDuration);
	}
	ul.open {
		transform: translate3d(0, 0, 0);
		transition-timing-function: ease-out;
	}
	#menu_close {
		pointer-events: initial;
		position: absolute;
		right: var(--sml);
		top: calc(var(--sml) * 2);
		background: transparent;
		border: none;
		font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell,
			'Open Sans', 'Helvetica Neue', sans-serif;
		opacity: 0;
		transition: opacity ease-in var(--animationDuration);
	}
	#menu_close.open {
		opacity: 1;
		transition-timing-function: ease-out;
	}
	@media screen and (min-width: 510px) {
		ul,
		ul.open {
			margin-top: calc(var(--big) * 0.75);
			transform: translate3d(0, 0, 0);
			background: initial;
			display: block;
			font-size: initial;
			position: initial;
			text-align: left;
		}
		#menu_close {
			display: none;
		}
	}
	a,
	a:focus,
	a:visited {
		color: var(--green);
		text-decoration: none;
	}
	a.active {
		color: var(--red);
	}
	.circle {
		width: var(--big);
		height: var(--big);
		background: var(--stripes);
		border-radius: 50%;
		margin: 0 auto;
	}
	@media screen and (min-width: 510px) {
		.circle {
			display: none;
		}
	}
</style>
