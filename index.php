<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">

			body {
				background: #000;
				font-family: Arial;
			}

			.loader {
				width: 280px;
				margin-left: auto;
				margin-right: auto;
				color: #fc0;
				text-align: center;
			}

			.loader div.bar {
				width: 10px;
				height: 30px;
				background-color: #fc0;
				display: inline-block;
			}

			.loader div.text {
				display: block;
				font-size: 26px;
			}

			.loader div.bar1{
				animation: bar_anim 1s linear infinite;
			 }
			.loader div.bar2 {
				animation: bar_anim 1s linear -0.25s infinite;
			}
			.loader div.bar3 {
				animation: bar_anim 1s linear -0.5s infinite;
			}

			.loader2 {
				margin: 50px auto 0px auto;
				width: 200px;
			}

			.loader2 .round {
				margin: 0px auto 0px auto;				
				color: #fc0;
				text-align: center;
				width: 80px;
				height: 80px;
				border-radius: 50%;
				border-top: 5px solid #ccc;
				border-right: 5px solid #ccc;
				/*border-bottom: 5px solid #ccc;*/
				animation: round 2s linear infinite;
			}

			.loader2 .text {
				margin-top: 15px;
				color: #ccc;
				font-size: 18px;
			}

			.loader3 {
				margin: 50px auto 0px auto;
				width: 200px;
			}

			.loader3 .square {
				width: 20px;
				height: 20px;
				background-color: #f00;
				padding: 20px;
				border-radius: 5px;
				animation: square 2s linear infinite;
				text-align: center;
				margin: 0px auto 0px auto;
			}

			.loader3 .text {
				font-size: 20px;
				color: #f00;
				text-align: center;
				margin-top: 20px;
				animation: loader3_text 2s linear infinite;
			}

			@keyframes bar_anim {
				0%{
					transform: scaleY(0);
					opacity: 1;
				}
				50%{
					transform: scaleY(1);
					opacity: 0.4;
				}
				100%{
					transform: scaleY(0);
					opacity: 1;
				}
			}

			@keyframes round {
				0%{
					transform: rotate(0deg);
					opacity: 1;
				}
				50%{
					transform: rotate(180deg);
					opacity: 0.4;
				}
				100%{
					transform: rotate(360deg);
					opacity: 1;
				}
			}

			@keyframes square {
				0%{
					transform: rotate(0deg);
				}
				50%{
					transform: rotate(180deg);
					background: #00f;
				}
				100%{
					transform: rotate(360deg);
					background: #f00;
				}
			}

			@keyframes loader3_text {
				50%{
					color: #00f;
				}
				100%{
					color: #f00;
				}

			}

		</style>
	</head>
	<body>
		<div class="loader">
			<div class="bar bar1"></div>
			<div class="bar bar2"></div>
			<div class="bar bar3"></div>
			<div class="text">Veuillez patentier...</div>
		</div>

		<div class="loader2">
			<div class="round"></div>
			<div class="text">Chargement en cours...</div>
		</div>

		<div class="loader3">
			<div class="square"></div>
			<div class="text">Un instant...</div>
		</div>
	</body>
</html>