<?php
include_once "helpers/function.php";
require_once 'models/model.php';
?>
<!DOCTYPE html>
<html lang="fr" data-theme="bumblebee">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- font google -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;700;800;900;1000&display=swap"
			rel="stylesheet"
		/>
		<!-- font awesome cdn -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
			integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<!-- TAILWINDCSS -->
		<script src="https://cdn.tailwindcss.com"></script>
		<!-- DAISY.UI -->
		<link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.4/dist/full.css" rel="stylesheet" type="text/css" />
		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css" />
		<title>Happy_School | <?=$title ?></title>
	</head>
	<body class="bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500">
		<!-- header -->
		<header class="px-52 py-10 no-underline bg-gray-800 flex justify-between text-white text-xl items-center">
			<!-- div logo -->
			<div class="text-xl font-black">
				<a href="index.php" class="text-3xl">Happy sch<span class="text-3xl">∞</span>l</a>
			</div>
			<!-- end div logo -->
			<!-- navigation -->
			<?php include "helpers/data.php" ?>
			<!-- DYNAMIQUE NAVIGATION -->
			<nav>
				<div class="space-x-5">
					<?php foreach ($navItems as $navItem) { ?>
						<a href="<?=$navItem["url"] ?>" class=""><?=$navItem["name"] ?></a>
					<?php } ?>
				</div>
			</nav>
		</header>
		<main class="min-h-screen py-20 px-60">
			<h1 class="font-black text-3xl text-black- text-center uppercase pb-10"><?=$title ?></h1>
			<?=$content ?>
		</main>
		<!-- footer -->
		<footer class="bg-gray-800 text-white py-10 px-32">
			<!-- icons social media -->
			<div class="text-center pt-10 text-3xl space-x-4 justify-center">
				<a href="https://www.facebook.com/" target="_blank">
					<i class="fa-brands fa-facebook" class=""></i>
				</a>
				<a href="https://www.instagram.com/" target="_blank">
					<i class="fa-brands fa-instagram"></i>
				</a>
				<a href="https://www.youtube.com/" target="_blank">
					<i class="fa-brands fa-youtube"></i>
				</a>
			</div>
		</footer>
	</body>
</html>



