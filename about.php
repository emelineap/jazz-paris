<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" type ="text/css" href="assets/css/header.css" />
  <link rel="stylesheet" type ="text/css" href="assets/css/footer.css" />
  <link rel="stylesheet" href="assets/css/about.css" />
  <title> Contact </title>
</head>
<?php include ("includes/header.php");
?>

<body>
  <!--Header réalisé par Emeline /include -->
  <!--Nav bar réalisée par Emeline /include -->


  <header class="row col-sm-12 col-lg-12">
  </header>

  <div class="container" >
      <div class="row">
        <div class="col-xs-12 col-lg-6">
            <p class="lead"> Paris Jazz est ravi de vous compter parmi ses nombreux web-lecteurs. N'hésitez pas à nous contacter, Bien musicalement, la team jazz-paris. <br />
              Prochainement sur notre site: petit portrait de notre équipe, 100% féminine.<br />
              Egalement à venor, un fil d'actu, tout beau tout neuf qui sera mis à jour régulièrement afin de vous avertir des évènements musicaux à venir. </p> 
          </div>

          <div class="col-xs-4 col-lg-6 form" >
            <form action="/en/contact/contact/" role="form" method="POST" id="contact-form" novalidate="novalidate">
              <input type="hidden" name="csrfmiddlewaretoken" value="tvBc2mqlYIyf6RSBSNMUJUE0NxU2PV8z">
              <!-- hidden referral code -->
              <input type="hidden" name="referral" value="ohne Newsletter" id="id_referral">
              <!-- options -->
              <div class="contact-options">
                <span>
                  <input name="wantsinfo" type="checkbox">
                  <label>Besoin d'une information complémentaire?</label>
                </span>
              </div>
              
              <div>
                <span>
                  <input name="wantsNewsletter" type="checkbox"> <label>Newsletter</label>
                </span>
              </div>
              
              <div>
                <span>
                  <input name="wantstowork" type="checkbox" id="counsel-checkbox">
                  <label>Vous voulez travailler avec nous</label>
                </span>
              </div>

              <div>
                <span>
                  <input name="wantssubmit" type="checkbox" id="brochure-checkbox">
                  <label>Des infos/suggestions pour Jazz-Paris?</label>
                </span>
              </div>

<div class="form-group">
            <input type="text" class="form-control contact-input" id="id_title" name="title" placeholder="Titre*" required="" aria-required="true">
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


          <div>
            <p>
              <small>*Merci de remplir les champs avec une étoile</small>
            </p>
          </div>

            </form>
          </div>
        </div>
      </div>
    


      </div>
    </div>

    <!--footer par Emeline /include -->

    <?php include ("includes/footer.php"); 
    ?>


  </body>
  </html>