<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title>Hackathon NSU Team 2 - Avatars</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/avatar.js"></script>
		<link type="text/css" href="css/hack.css" rel="stylesheet"/>
		<meta name="viewport" content="width=360, scale=1, user-scalable=0"/>
	</head>
	<body class="m5">
		<form id="avatarForm" action="#" method="GET">
			<input type="hidden" name="uname" value="<?= $_GET['uname']; ?>"/>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpGenderStyle" name="gender" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose gender...</option>
					</select>
				</div>
				<select id="drpSkinColor" name="skinColor" class="unit bdrBox bdrGray p5 size1of2 colorChooser">
					<option value="null">Choose skin color...</option>
				</select>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpExpressionStyle" name="expression" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose expression...</option>
					</select>
				</div>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpHairStyle" name="hair" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose hair...</option>
					</select>
				</div>
				<select id="drpHairColor" name="hairColor" class="unit bdrBox bdrGray p5 size1of2 colorChooser">
					<option value="null">Choose color...</option>
				</select>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpBeardStyle" name="beard" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose beard...</option>
					</select>
				</div>
				<select id="drpBeardColor" name="beardColor" class="unit bdrBox bdrGray p5 size1of2 colorChooser">
					<option value="null">Choose color...</option>
				</select>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpGlassesStyle" name="glasses" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose glasses...</option>
					</select>
				</div>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpShirtStyle" name="shirt" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose a shirt...</option>
					</select>
				</div>
				<select id="drpShirtColor" name="shirtStyle" class="unit bdrGray p5 size1of2 colorChooser">
					<option value="null">Choose color...</option>
				</select>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpPantStyle" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose pants...</option>
					</select>
				</div>
				<select id="drpPantColor" name="pantColor" class="bdrBox bdrGray p5 size1of2 colorChooser">
					<option value="null">Choose color...</option>
				</select>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpShoeStyle" name="shoe" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose shoes...</option>
					</select>
				</div>
				<select id="drpShoeColor" name="showColor" class="unit bdrBox bdrGray p5 size1of2 colorChooser">
					<option value="null">Choose color...</option>
				</select>
			</div>
			<div class="line mb10">
				<div class="unit bdrBox pr5 size1of2">
					<select id="drpHatStyle" name="hat" class="bdrBox bdrGray p5 wFull">
						<option value="null">Choose hat...</option>
					</select>
				</div>
				<select id="drpHatColor" name="hatColor" class="unit bdrBox bdrGray p5 size1of2 colorChooser">
					<option value="null">Choose color...</option>
				</select>
			</div>
			<input type="submit" value="Submit" class="mb10 bdrBox bdrGray p5 wFull csrPointer"/>
		</form>
		<img src="" id="avatar" class="dBlock balance mb10"/>
		<div id="debug" class="p5 bdrGray hide"></div>
		<script>
			$('#avatarForm').submit(function(e){
				url = 'set-avatar.php?';
				e.preventDefault();
				$.each($(this).serializeArray(), function(key, value){
					if(key > 0){
						url += '&';
					}
					url += this.name + '=' + this.value;
				});
				$.ajax(url).done(function(e){
					//window.location = '';
				});
				console.log(url);
			});
		</script>
	</body>
</html>
