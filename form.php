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
					<label for="herr" class="width1"><input type="radio" id="herr" name="gender"class="position"> Herr</label>
					<label for="frau" class="width1"><input type="radio" id="frau" name="gender" class="position">Frau</label>
					<select class="width2" id="title">
						<option value="dr">Dr</option>
						<option value="Pf">Pf</option>
					</select>
				</div>
				<div class="clearfix">
					<label for="namensvor" class="paddingtop3">Namensvor-/zusatz</label>
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
					<input type="text" id="geburtsname" >
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
					<input type="date" min="2014-01-01" max="2014-12-31"  id="date" class="width4">
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
				<div class="clearfix inline"> 
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
			<form id="right-form" action="processApplication.php" method="post">
				<p class="background">Beruf</p>
				<div class="clearfix">
					<label for="art" class="paddingtop3">Art der Beschaftigung</label>
					<select id="art">
						<option value="Rentner(in)/Pensionar(in)">Rentner(in)/Pensionar(in)</option>
						<option value="bllllllllll">Blllllllll</option>
					</select>
				</div>
				<div class="clearfix">
					<label for="beruf"> Beruf</label>
					<input id="beruf" type="text" placeholder="Musterjob">
				</div>
				<div class="clearfix">
					<label for="seit" class="margin">ungekundigt beschaftigt seit</label>
					<input id="seit" type="date" min="01-01-2001" max="12-31-2001" class="width4">
				</div>
				<div class="clearfix">
					<label for="monatl" class="margin">Monatl. Nettoeinkommen</label>
					<input id="monalt" type="text" class="width6" placeholder="5000">
				</div>
				<p class="background margintop">Kontakt/Einverstandnis & Werbung</p>
				<div class="clearfix">
					<label for="teltag">Tel.(tagsuber)</label>
					<select id="teltag">
						<option value="DE">DE</option>
						<option value="ME">ME</option>
					</select>
					<input type="text" id="teltag1" class="width1" placeholder="040">
					<input type="text" id="teltag2" class="width4" placeholder="123456">
				</div>
				<div class="clearfix">
					<label for="telber">Tel.(Beratung)</label>
					<select id="telber">
						<option value="DE">DE</option>
						<option value="ME">ME</option>
					</select>
					<input type="text" id="telber1" class="width1" placeholder="0177">
					<input type="text" id="telber2" class="width4" placeholder="123456">
				</div>
				<div class="clearfix">
					<label for="confirmtel" >Einverstandnis Telefonwerbung</label>
					<input type="checkbox" id="confirmtel" class="position">
				</div>
				<div class="clearfix margintop">
					<label for="confirmjeder">jederzeit</label>
					<input type="checkbox" id="confirmjeder" class="position">
				</div>
				<div class="clearfix">
					<label for="tagen" class="width25 margin">An folgenden tagen/zu folgenden Zeiten</label>
					<input type="text" id="tagen" placeholder="Montag Vormittag oder Freitag al">
				</div>
				<div class="clearfix">
					<label for="email-address">Email-Adresse</label>
					<input type="text" id="email-address" placeholder="max.mustermann@provider.de">
				</div>
				<div class="clearfix">
					<label for="confirmemail" class="margin">Einverstandnis Emailwebung</label>
					<input type="checkbox" id="confirmemail" class="position">
				</div>
				<div class="clearfix inline">
					<label for="cornfirm2" class="confirm width100">Der Kunde wiligt in die Ubermittlung der in der SCHUFA-Erklarung genannten Daten an die SCHUFA-Hoding AG ein.</label>
					<label for="yes" class="width1"><input id="yes" type="radio" name="confirm" class="position"> ja</label>
					<label for="no" class="width1"><input id="no" type="radio" name="confirm" class="position">nein</label>	
				</div>
			</form>
		</div>
	</div>
</body>
</html>
