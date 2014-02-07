<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Hackathon NSU Team 2 - Avatars</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/avatar.js"></script>
		<link type="text/css" href="css/hack.css" rel="stylesheet"/>
		<meta name="viewport" content="width=320"/>
	</head>
	<body class="m5">
		<form id="avatarForm" action="avatar-update.php" method="POST">
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpGenderStyle" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose gender...</option>
					</select>
				</div>
				<select id="drpSkinColor" class="unit bdrBox bdrGray p5 size1of2 colorChooser">
					<option value="null">Choose skin color...</option>
				</select>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpExpressionStyle" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose expression...</option>
					</select>
				</div>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpHairStyle" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose hair...</option>
					</select>
				</div>
				<select id="drpHairColor" class="unit bdrBox bdrGray p5 size1of2 colorChooser">
					<option value="null">Choose color...</option>
				</select>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpBeardStyle" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose beard...</option>
					</select>
				</div>
				<select id="drpBeardColor" class="unit bdrBox bdrGray p5 size1of2 colorChooser">
					<option value="null">Choose color...</option>
				</select>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpGlassesStyle" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose glasses...</option>
					</select>
				</div>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpShirtStyle" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose a shirt...</option>
					</select>
				</div>
				<select id="drpShirtColor" class="unit bdrGray p5 size1of2 colorChooser">
					<option value="null">Choose color...</option>
				</select>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpPantStyle" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose pants...</option>
					</select>
				</div>
				<select id="drpPantColor" class="bdrBox bdrGray p5 size1of2 colorChooser">
					<option value="null">Choose color...</option>
				</select>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpShoeStyle" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose shoes...</option>
					</select>
				</div>
				<select id="drpShoeColor" class="unit bdrBox bdrGray p5 size1of2 colorChooser">
					<option value="null">Choose color...</option>
				</select>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpHatStyle" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose hat...</option>
					</select>
				</div>
				<select id="drpHatColor" class="unit bdrBox bdrGray p5 size1of2 colorChooser">
					<option value="null">Choose color...</option>
				</select>
			</div>
			<input type="submit" value="Submit" class="mb10 bdrBox bdrGray p5 wFull"/>
		</form>
		<img src="" id="avatar" alt="avatar" class="dBlock balance mb10"/>
		<p>debug: </p>
		<div id="debug" class="p5 bdrGray"></div>
		<script>
		</script>
	</body>
</html>
