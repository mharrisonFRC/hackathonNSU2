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
$gender = '&style=' . $genders[0];
$expression = '&fa=' . $expressions[0];
$beard = '&ff=' . $beards[0];
$hat = '&ha=' . $hats[0];
$hair = '&h=' . $hairs[0];
$shirt = '&t=' . $shirts[0];
$pant = '&b=' . $pants[0];
$shoe = '&f=' . $shoes[0];
$glass = '&e=' . $glasses[0];
$bg = '&back=' . $backgrounds[0];

$totalColors = count($colors)-1;

$beardColor = '&ffc=' . $colors[rand(0, $totalColors)];
$hatColor = '&hac=' . $colors[rand(0, $totalColors)];
$hairColor = '&hc=' . $colors[rand(0, $totalColors)];
$shirtColor = '&tc=' . $colors[rand(0, $totalColors)];
$pantColor = '&bc=' . $colors[rand(0, $totalColors)];
$shoeColor = '&fc=' . $colors[rand(0, $totalColors)];

$img = $png . $gender . $expression . $beard . $hat . $hair . $shirt . $pant . $shoe . $glass . $bg . $beardColor . $hatColor . $hairColor . $shirtColor . $pantColor . $shoeColor;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Untitled Document</title>
	</head>
	<body>
		<form>
			<select id="drpShirtColor">
				<?php foreach($shirts as $key=>$shirt){ ?>
					<option value="<?= $shirt; ?>"><?= $shirt; ?></option>
				<?php } ?>
			</select>
		</form>
		<img src="<?= $img; ?>" alt="avatar"/>
		<script>
			
		</script>
	</body>
</html>
