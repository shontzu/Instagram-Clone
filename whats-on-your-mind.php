<html>
<head>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<article>
		<div class="article-nav">
			<b>What's on your mind?</b> <b><script> document.write(new Date().toLocaleDateString()); </script></b>
		</div>
		<hr>
		<div style="display: flex;">
			<div style="width: 10vw" class="fa fa-user-circle fa-3x"></div>
			<div style="width: 90vw">
				<form action="uploaded.php" method="post"
					enctype="multipart/form-data" autocomplete="off">
					<div>
						<input type="text" name="message" value="Type something..."
							style="width: 100%; height: 7vh; border: none;"></input>
					</div>
					<div class="article-nav">
						<input type="file" name="fileToUpload" id="fileToUpload"></input>
						<input type="submit" name="submit" value="Post"></input>
					</div>
				</form>
			</div>
		</div>
	</article>
</body>
</html>