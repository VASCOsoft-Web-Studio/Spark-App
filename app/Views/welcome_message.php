<!doctype html>
<html data-theme="light">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<title>Welcome to Spark App!</title>

	<!-- CSS - Rendered by Tailwind v3 CLI -->
	<!-- npx tailwindcss -i ./src/css/input.css -o ./public/assets/css/main.css --watch -->
	<link href="../assets/css/main.css" rel="stylesheet">

</head>
<body>


	<!-- HEADER -->
	<header>

		<div class="m-auto max-w-6xl p-10">
			<h1 class="mt-5 text-5xl font-semibold underline decoration-sky-400">Welcome to Spark App</h1>
			<h2 class="pt-3 text-2xl font-light">Built on CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h2>
		</div>

	</header>


	<!-- CONTENT -->
	<section class="m-auto max-w-6xl px-10 pt-2 pb-10">

		<h1 class="mb-6 text-2xl font-bold">About this page</h1>
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
		<p>If you would like to edit this page you will find it located at:</p>
		<pre class="text-sm p-5 my-7 border border-stone-200 bg-stone-100 break-all"><code>app/Views/welcome_message.php</code></pre>
		<p>The corresponding controller for this page can be found at:</p>
		<pre class="text-sm p-5 my-7 border border-stone-200 bg-stone-100 break-all"><code>app/Controllers/Home.php</code></pre>

	</section>


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
