<!doctype html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<title>Welcome to Spark App!</title>

	<!-- CSS - Compiled by Tailwind v3 CLI -->
	<!-- npx tailwindcss -i ./src/css/input.css -o ./public/assets/css/main.css --watch -->
	<link href="../assets/css/main.css" rel="stylesheet">

</head>
<body>


	<!-- NAVIGATION -->
	<nav>
	</nav>


	<!-- CONTAINER -->
	<div class="m-auto max-w-6xl">


		<!-- HEADER/HERO -->
		<header class="p-10">

			<h1 class="mt-5 text-5xl font-semibold underline decoration-sky-400">Welcome to Spark App</h1>
			<h2 class="pt-3 text-2xl font-light">Built on CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h2>

		</header>


		<!-- CONTENT -->
		<section class="px-10 pt-2 pb-10">

			<h1 class="mb-6 text-2xl font-bold">About this page</h1>

			The page you are looking at is being generated dynamically by CodeIgniter.
			<!-- daisyUI - Helper Dropdown -->
			<div class="dropdown dropdown-end">
				<label tabindex="0" class="btn btn-circle btn-ghost btn-xs text-info">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
				</label>
				<div tabindex="0" class="card compact dropdown-content shadow bg-base-100 rounded-box w-64">
					<div class="card-body">
						<h2 class="card-title">Welcome to daisyUI!</h2>
						<p>View all components <a href="https://daisyui.com/components" target="_blank" class="text-sky-400">HERE</a></p>
					</div>
				</div>
			</div>

			<p>If you would like to edit this page you will find it located at:</p>
			<pre class="text-sm p-5 my-7 border border-stone-200 bg-stone-100 break-all"><code>app/Views/welcome_message.php</code></pre>

			<p>The corresponding controller for this page can be found at:</p>
			<pre class="text-sm p-5 my-7 border border-stone-200 bg-stone-100 break-all"><code>app/Controllers/Home.php</code></pre>

		</section>


	</div>


	<!-- FOOTER -->
	<footer class="text-center bg-sky-400">

		<div class="text-white p-10">
			<p>Page rendered in {elapsed_time} seconds</p>
			<p>Environment: <?= ENVIRONMENT ?></p>
		</div>

		<div class="p-1 text-stone-300 bg-stone-700">
			<p>Made with 🧡 by <a href="https://vascosoft.com" target="_blank">VASCOsoft Web Studio</a></p>
		</div>

	</footer>


	<!-- SCRIPTS -->


</body>
</html>
