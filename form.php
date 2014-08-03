<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssreset/cssreset-min.css">
	<link type="text/css" rel="stylesheet" href="clearfix.css"/>
	<link type="text/css" rel="stylesheet" href="stylesheetform.css"/>
	<title>form</title>
</head>
<body>
	<div class="wrapper clearfix">
		<div class="left-form">
			<form id="left-form" action="processApplication.php" method="post">
				<p class="background">Address</p>
				<div class="clearfix">
					<label for="gender-tutle">Anrede und Titel</label>
					<label for="herr" class="width1"><input type="radio" id="herr" class="position">Herr</label>
					<label for="frau" class="width1"><input type="radio" id="frau" class="position">Frau</label>
					<select class="width2" id="title">
						<option value="dr">Dr</option>
						<option value="Pf">Pf</option>
					</select>
				</div>
				<div class="clearfix">
					<label for="namensvor">Namensvor-/zusatz</label>
					<select class="width3" id="destination">
						<option value="zu">zu</option>
						<option value="on">on</option>
					</select>
					<input type="text" id="hause" class="width4">
				</div>
				<div class="clearfix">
					<label for="nackname">Nachname</label>
					<input type="text" id="nackname">
				</div>
				<div class="clearfix">
					<label for="vorname">Vorname</label>
					<input type="text" id="vorname">
				</div>
				<div class="clearfix">
					<label for="geburtsname">Geburtsname</label>
					<input type="text" id="geburtsname">
				</div>
				<div class="clearfix">
					<label for="stase" class="margin">Strase und Hausnummer</label>
					<input type="text" class="width4" id="strase">
					<input type="text" class="width1" id="nummer">
				</div>
				<div class="clearfix">
					<label for="plz-ort">PLZ und Ort</label>
					<input type="text" id="plz" class="width1">
					<input type="text" id="ort" class="width4">
				</div>
				<div class="clearfix">
					<label for="date">Geburtsdatum</label>
					<input type="text" id="date" class="width4">
				</div>
				<div class="clearfix">
					<label for="geburtsort">Geburtsort</label>
					<input type="text" id="geburtsort">
				</div>
				<div class="clearfix">
					<label for="familiestand">Familiestand</label>
					<select id="stand">
						<option value="ledig">ledig</option>
						<option value="single">single</option>
					</select>
				</div >
				<div class="clearfix" > 
					<label class="confirm">Adress hat sich in den letzten e Jahren geander</label>
					<input type="checkbox" id="confirm" class="width5">
				</div>
				<p class="background">Bisherige Adresse</p>
				<div class="clearfix">
					<label for="strase-hausnummer" class="margin">Strase und Hausnummer</label>
					<input type="text" class="width4" id="strase">
					<input type="text" class="width1" id="hausnummer">
				</div>
				<div class="clearfix">
					<label for="plz/oz">PLZ/Ort</label>
					<input type="text" id="plz" class="width1">
					<input type="text" id="ort" class="width4">
				</div>
				<input type="submit" class="button" value="Formular absenden">
			</form>
		</div>
				

		<div class="right-form">
			<p class="background">Beruf</p>
		</div>
	</div>
</body>
</html>
