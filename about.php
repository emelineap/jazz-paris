<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Jazz Paris: contact</title>
	<!-- FAVICON -->
	<link rel="shortcut icon" href="assets/pictures/favicon.ico" type="image/x-icon">
	<link rel="icon" href="assets/pictures/favicon.ico" type="image/x-icon">


	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type ="text/css" href="assets/css/header.css" />
	<link rel="stylesheet" type ="text/css" href="assets/css/footer.css" />
	<link rel="stylesheet" type ="text/css" href="assets/css/about.css" />

	<!-- FONT -->
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500" rel="stylesheet">
</head>

<body>

	<?php include ("includes/header.php");
	?>
	<!--Header réalisé par Emeline /include -->
	<!--Nav bar réalisée par Emeline /include -->

	<div class="container" >
		<div class="row">
			<div class="col-xs-12 col-lg-6">
				<p class="lead"> Paris Jazz est ravi de vous compter parmi ses nombreux web-lecteurs. N'hésitez pas à nous contacter, Bien musicalement, la team jazz-paris. <br />
					Prochainement sur notre site: petit portrait de notre équipe, 100% féminine.<br />
				Egalement à venir, un fil d'actu jazzy qui sera mis à jour régulièrement afin de vous avertir des prochains évènements musicaux. </p> 
			</div>

			<div class="col-xs-4 col-lg-6 form" >
				<form action="/en/contact/contact/" method="POST" id="contact-form">

					<div class="form-group">
						<label for="list_contact">Pourquoi nous contactez vous?</label><br />
						<select name="reason" id="list">
							<option value="info">Je veux des infos supplémentaires</option>
							<option value="réclamation">J'ai une réclamation à faire</option>
							<option value="équipe">Je souhaiterai intégrer la team Jazz Paris</option>
						</select>
					</div>

						<div class="form-group">
							<input type="text" class="form-control contact-input" id="id_lastName" name="lastName" placeholder="Nom*" required="" aria-required="true">
						</div>

						<div class="form-group">
							<input type="text" class="form-control contact-input" id="id_firstName" name="firstName" placeholder="Prénom*" required="" aria-required="true">
						</div>

						<div class="form-group">
							<input type="text" class="form-control contact-input" id="id_street" name="street" placeholder="Numéro de rue">
						</div>

						<div class="form-group">
							<input type="text" class="form-control contact-input" id="id_city" name="city" placeholder="Ville/code postal*" required="" aria-required="true">
						</div>

						<div class="form-group">
							<input type="text" class="form-control contact-input" id="id_email" name="email" placeholder="Email*" required="" aria-required="true">
						</div>

						<div class="form-group">
							<input type="text" class="form-control contact-input" id="id_phone" name="phone" placeholder="Telephone">
						</div>
						<div>
							<textarea class="form-control contact-input" rows="3" placeholder="Commentaires" id="id_notes" name="notes"></textarea>
						</div>
					
						<input type="submit" value="Envoyer" />
				</form>
			</div>
		</div>

		<div>
			<p>
				<small>*Merci de remplir les champs avec une étoile</small>
			</p>
		</div>
	</div>

	<!--footer par Emeline /include -->

	<?php include ("includes/footer.php"); 
	?>


</body>
</html>