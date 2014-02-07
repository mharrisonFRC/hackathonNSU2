colors = [];
colors.push(['White', 'ffffff']);
colors.push(['Black', '000000']);
colors.push(['Peach', 'f5dabc']);
colors.push(['Brown', '754c24']);
colors.push(['Red', 'ff0000']);
colors.push(['Green', '00ff00']);
colors.push(['Blue', '0000ff']);
colors.push(['Purple', '662d91']);
colors.push(['Orange', 'f7941d']);
colors.push(['Yellow', 'ffff00']);
//OLD COLORS , 'ff0000', '00ff00', '0000ff', '000000', 'ffa500', 'ffff00', '800080', '808080', '000080', 'fae7do', 'dfc183', 'aa724b', '7b4b2a', 'feb186', 'b58a3f', 'ff0033'];
totalColors = colors.length-1;

genders = [['Male', '1101'], ['Female', '1102']];
expressions = [['Happy', '67'], ['Sad', '69']];
hairs = [['Ponytail', '12'], ['Spikey', '15'], ['Balding', '17'], ['Medium length', '18']];
beards = [['Mustache', '7'], ['Goatee', '8'], ['Beard', '11']];
glasses = [['Round', '123'], ['Square', '126']];
shirts = [['Tuxedo', '38'], ['Sweater', '41'], ['Logo', '47'], ['Baseball', '45']];
pants = [['Pants', '95'], ['Gym shorts', '96'], ['Hearts', '101'], ['Tight', '111'], ['Skirt', '117']];
shoes = [['Boots', '119'], ['High heels', '121'], ['Sandals', '122'], ['Sneakers', '190']];
hats = [['Ballcap', '20'], ['Beanie', '22'], ['Top hat', '25']];

//declare default values
png = 'http://www.doppelme.com/avatar.png?xx=';
if(skinColor){
	gender = genders[Math.floor(Math.random()*genders.length)][1];
	expression = expressions[1][1];//Default to sad until money is earned
	beard = null;
	glass = null;
	hair = null;
	shirt = shirts[2][1];
	pant = pants[3][1];
	shoe = shoes[3][1];
	hat = null;
	
	skinColor = colors[0][1];
	hairColor = colors[0][1];
	beardColor = colors[0][1];
	shirtColor = colors[0][1];
	pantColor = colors[0][1];
	shoeColor = colors[0][1];
	hatColor = colors[0][1];
}

$(function(){
	buildAvatar();
	
	for(var i=0; i<genders.length; i++){
		$('#drpGenderStyle').append('<option value="' + genders[i][1] + '">' + genders[i][0] + '</option>');
	}
	for(var i=0; i<expressions.length; i++){
		$('#drpExpressionStyle').append('<option value="' + expressions[i][1] + '">' + expressions[i][0] + '</option>');
	}
	for(var i=0; i<hairs.length; i++){
		$('#drpHairStyle').append('<option value="' + hairs[i][1] + '">' + hairs[i][0] + '</option>');
	}
	for(var i=0; i<beards.length; i++){
		$('#drpBeardStyle').append('<option value="' + beards[i][1] + '">' + beards[i][0] + '</option>');
	}
	for(var i=0; i<glasses.length; i++){
		$('#drpGlassesStyle').append('<option value="' + glasses[i][1] + '">' + glasses[i][0] + '</option>');
	}
	for(var i=0; i<shirts.length; i++){
		$('#drpShirtStyle').append('<option value="' + shirts[i][1] + '">' + shirts[i][0] + '</option>');
	}
	for(var i=0; i<pants.length; i++){
		$('#drpPantStyle').append('<option value="' + pants[i][1] + '">' + pants[i][0] + '</option>');
	}
	for(var i=0; i<shoes.length; i++){
		$('#drpShoeStyle').append('<option value="' + shoes[i][1] + '">' + shoes[i][0] + '</option>');
	}
	for(var i=0; i<hats.length; i++){
		$('#drpHatStyle').append('<option value="' + hats[i][1] + '">' + hats[i][0] + '</option>');
	}
	for(var i=0; i<colors.length; i++){
		$('.colorChooser').append('<option value="' + colors[i][1] + '">' + colors[i][0] + '</option>');
	}
	
	$('#drpGenderStyle').on('change', function(){
		gender = $('#drpGenderStyle>option:selected').attr('value');
		buildAvatar();
	});
	$('#drpExpressionStyle').on('change', function(){
		expression = $('#drpExpressionStyle>option:selected').attr('value');
		buildAvatar();
	});
	$('#drpHairStyle').on('change', function(){
		hair = $('#drpHairStyle>option:selected').attr('value');
		buildAvatar();
	});
	$('#drpBeardStyle').on('change', function(){
		beard = $('#drpBeardStyle>option:selected').attr('value');
		buildAvatar();
	});
	$('#drpGlassesStyle').on('change', function(){
		glass = $('#drpGlassesStyle>option:selected').attr('value');
		buildAvatar();
	});
	$('#drpShirtStyle').on('change', function(){
		shirt = $('#drpShirtStyle>option:selected').attr('value');
		buildAvatar();
	});
	$('#drpPantStyle').on('change', function(){
		pant = $('#drpPantStyle>option:selected').attr('value');
		buildAvatar();
	});
	$('#drpShoeStyle').on('change', function(){
		shoe = $('#drpShoeStyle>option:selected').attr('value');
		buildAvatar();
	});
	$('#drpHatStyle').on('change', function(){
		hat = $('#drpHatStyle>option:selected').attr('value');
		buildAvatar();
	});
	$('#drpSkinColor').on('change', function(){
		skinColor = $(this).find('option:selected').attr('value');
		buildAvatar();
	});
	$('#drpHairColor').on('change', function(){
		hairColor = $(this).find('option:selected').attr('value');
		buildAvatar();
	});
	$('#drpBeardColor').on('change', function(){
		beardColor = $(this).find('option:selected').attr('value');
		buildAvatar();
	});
	$('#drpShirtColor').on('change', function(){
		shirtColor = $(this).find('option:selected').attr('value');
		buildAvatar();
	});
	$('#drpPantColor').on('change', function(){
		pantColor = $(this).find('option:selected').attr('value');
		buildAvatar();
	});
	$('#drpShoeColor').on('change', function(){
		shoeColor = $(this).find('option:selected').attr('value');
		buildAvatar();
	});
	$('#drpHatColor').on('change', function(){
		hatColor = $(this).find('option:selected').attr('value');
		buildAvatar();
	});
});

function buildAvatar(){
	img = png + '&style=' + gender + '&s=' + skinColor + '&fa=' + expression + '&ff=' + beard + '&ha=' + hat + '&h=' + hair + '&t=' + shirt + '&b=' + pant + '&f=' + shoe + '&e=' + glass + '&ffc=' + beardColor + '&hac=' + hatColor + '&hc=' + hairColor + '&tc=' + shirtColor + '&bc=' + pantColor + '&fc=' + shoeColor;
	$('#avatar').attr('src', img);
	$('#debug').html('&f=' + shoe + '<br/>');
}