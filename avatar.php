<?php
/*
http://www.doppelme.com/avatar.png?xx=
&style=1101 // gender 
&s=FF101//skin color
&fa=null //expression 
&fac=0000FF// eye color
&ff=null // beard
&ffc=null // beard color 
&ha=null // hat 
&hac=null // hat color 
&h=null  // hair // hat 
&hc=null // hair color
&t=null // shirt 
&tc=null // shirt color 
&b=null  // pants 
&bc=null // pants color 
&fc=null // shoe color 
&f=null  // shoes
&e=null  //glasses
&ec=null // glasses color 
&i=null // mess with hair ??? 
&ic=null // did not change 
&back=null // background 
&p=null //did not change 
&pc=null //did not change
&g=null // did not change
*/

/* declare array values */
$colors = ['ff0000', '00ff00', '0000ff', '000000', 'ffffff', 'ffa500', 'ffff00', '800080', '808080', '000080', 'fae7do', 'dfc183', 'aa724b', '7b4b2a', 'feb186', 'b58a3f', 'ff0033'];
$totalColors = count($colors)-1;

$genders = array('1101', '1102');
$expressions = array('67', '69');
$beards = array('7', '11', '8');
$hats = array('20', '22', '25');
$hairs = array('12', '15', '17', '18');
$shirts = array('38', '41', '47', '45');
$pants = array('95', '96', '101', '117', '111');
$shoes = array('121', '190', '122', '119');
$glasses = array('126', '123');
$backgrounds = array('319', '316', '317', '320', '0');

$png = 'http://www.doppelme.com/avatar.png?xx=';
$gender = $genders[rand(0, count($genders)-1)];
$expression = $expressions[rand(0, count($expressions)-1)];
$beard = $beards[rand(0, count($beards)-1)];
$hat = $hats[rand(0, count($hats)-1)];
$hair = $hairs[rand(0, count($hairs)-1)];
$shirt = $shirts[rand(0, count($shirts)-1)];
$pant = $pants[rand(0, count($pants)-1)];
$shoe = $shoes[rand(0, count($shoes)-1)];
$glass = $glasses[rand(0, count($glasses)-1)];
$bg = $backgrounds[rand(0, count($backgrounds)-1)];

$totalColors = count($colors)-1;
$beardColor = $colors[rand(0, $totalColors)];
$hatColor = $colors[rand(0, $totalColors)];
$hairColor = $colors[rand(0, $totalColors)];
$shirtColor = $colors[rand(0, $totalColors)];
$pantColor = $colors[rand(0, $totalColors)];
$shoeColor = $colors[rand(0, $totalColors)];

$img = $png . '&style=' . $gender . '&fa=' . $expression . '&ff=' . $beard . '&ha=' . $hat . '&h=' . $hair . '&t=' . $shirt . '&b=' . $pant . '&f=' . $shoe . '&e=' . $glass . '&back=' . $bg . '&ffc=' . $beardColor . '&hac=' . $hatColor . '&hc=' . $hairColor . '&tc=' . $shirtColor . '&bc=' . $pantColor . '&fc=' . $shoeColor;
?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Untitled Document</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<link type="text/css" href="css/hack.css" rel="stylesheet"/>
	</head>
	<body>
		<form>
			<select id="drpShirtStyle" class="dBlock mb10 p5">
				<option value="null">Choose a shirt</option>
				<?php foreach($shirts as $key=>$shirt){ ?>
					<option value="<?= $shirt; ?>">Shirt <?= $key+1; ?></option>
				<?php } ?>
			</select>
			<select id="drpPantsStyle" class="dBlock mb10 p5">
				<option value="null">Choose pants</option>
				<?php foreach($pants as $key=>$pant){ ?>
					<option value="<?= $pant; ?>">Pants <?= $key+1; ?></option>
				<?php } ?>
			</select>
			<select id="drpShoesStyle" class="dBlock mb10 p5">
				<option value="null">Choose shoes</option>
				<?php foreach($shoes as $key=>$shoe){ ?>
					<option value="<?= $shoe; ?>">Shoes <?= $key+1; ?></option>
				<?php } ?>
			</select>
			<select id="drpGlassesStyle" class="dBlock mb10 p5">
				<option value="null">Choose glasses</option>
				<?php foreach($glasses as $key=>$glass){ ?>
					<option value="<?= $glass; ?>">Glasses <?= $key+1; ?></option>
				<?php } ?>
			</select>
			<select id="drpGendersStyle" class="dBlock mb10 p5">
				<option value="null">Choose genders</option>
				<?php foreach($genders as $key=>$gender){ ?>
					<option value="<?= $gender; ?>">Genders <?= $key+1; ?></option>
				<?php } ?>
			</select>
			<select id="drpExpressionsStyle" class="dBlock mb10 p5">
				<option value="null">Choose expression</option>
				<?php foreach($expressions as $key=>$expression){ ?>
					<option value="<?= $expression; ?>">Expressions <?= $key+1; ?></option>
				<?php } ?>
			</select>
			<select id="drpBeardsStyle" class="dBlock mb10 p5">
				<option value="null">Choose beard</option>
				<?php foreach($beards as $key=>$beard){ ?>
					<option value="<?= $beard; ?>">Beards <?= $key+1; ?></option>
				<?php } ?>
			</select>
			<select id="drpHatsStyle" class="dBlock mb10 p5">
				<option value="null">Choose hat</option>
				<?php foreach($hats as $key=>$hat){ ?>
					<option value="<?= $hat; ?>">Hats <?= $key+1; ?></option>
				<?php } ?>
			</select>
			<select id="drpHairsStyle" class="dBlock mb10 p5">
				<option value="null">Choose hair</option>
				<?php foreach($hairs as $key=>$hair){ ?>
					<option value="<?= $hair; ?>">Hairs <?= $key+1; ?></option>
				<?php } ?>
			</select>
			<select id="drpBackgroundStyle" class="dBlock mb10 p5">
				<option value="null">Choose background</option>
				<?php foreach($backgrounds as $key=>$bg){ ?>
					<option value="<?= $bg; ?>">Backgrounds <?= $key+1; ?></option>
				<?php } ?>
			</select>
		</form>
		<img src="<?= $img; ?>" id="avatar" alt="avatar"/>
		<div id="debug" class="p5 bdrGray"></div>
		<script>
			png = 'http://www.doppelme.com/avatar.png?xx=';
			gender = '<?= $gender; ?>';
			expression = '<?= $expression; ?>';
			beard = '<?= $beard; ?>';
			hat = '<?= $hat; ?>';
			hair = '<?= $hair; ?>';
			shirt = '<?= $shirt; ?>';
			pant = '<?= $pant; ?>';
			shoe = '<?= $shoe; ?>';
			glass = '<?= $glass; ?>';
			bg = '<?= $bg; ?>';
			beardColor = '<?= $beardColor; ?>';
			hatColor = '<?= $hatColor; ?>';
			hairColor = '<?= $hairColor; ?>';
			shirtColor = '<?= $shirtColor; ?>';
			pantColor = '<?= $pantColor; ?>';
			shoeColor = '<?= $shoeColor; ?>';
			
			$('#drpShirtStyle').on('change', function(){
				shirt = $('#drpShirtStyle>option:selected').val()
				buildAvatar();
			});
			$('#drpPantsStyle').on('change', function(){
				pant = $('#drpPantsStyle>option:selected').val()
				buildAvatar();
			});
			$('#drpShoesStyle').on('change', function(){
				pant = $('#drpShoesStyle>option:selected').val()
				buildAvatar();
			});
			$('#drpGlassesStyle').on('change', function(){
				glass = $('#drpGlassesStyle>option:selected').val()
				buildAvatar();
			});
			$('#drpGendersStyle').on('change', function(){
				gender = $('#drpGendersStyle>option:selected').val()
				buildAvatar();
			});
			$('#drpExpressionsStyle').on('change', function(){
				expression = $('#drpExpressionsStyle>option:selected').val()
				buildAvatar();
			});
			$('#drpBeardsStyle').on('change', function(){
				beard = $('#drpBeardsStyle>option:selected').val()
				buildAvatar();
			});
			$('#drpHatsStyle').on('change', function(){
				hat = $('#drpHatsStyle>option:selected').val()
				buildAvatar();
			});
			$('#drpHairsStyle').on('change', function(){
				hair = $('#drpHairsStyle>option:selected').val()
				buildAvatar();
			});
			$('#drpBackgroundStyle').on('change', function(){
				bg = $('#drpBackgroundsStyle>option:selected').val()
				buildAvatar();
			});
			function buildAvatar(){
				img = png + '&style=' + gender + '&fa=' + expression + '&ff=' + beard + '&ha=' + hat + '&h=' + hair + '&t=' + shirt + '&b=' + pant + '&f=' + shoe + '&e=' + glass + '&back=' + bg + '&ffc=' + beardColor + '&hac=' + hatColor + '&hc=' + hairColor + '&tc=' + shirtColor + '&bc=' + pantColor + '&fc=' + shoeColor;
				$('#avatar').attr('src', img);
				$('#debug').append(img + '<br/>');
			}
		</script>
	</body>
</html>
