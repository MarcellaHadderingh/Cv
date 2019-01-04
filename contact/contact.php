<?php  
if(isset($_POST['email'])){

    $email_to = "marcellavanduyn@gmail.com";
    $email_subject = "Your email subject line";

    Function died($error) {
        echo "I am verry sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /> <br />";
        echo $error."<br /> <br />";
        echo "Please go back and fix these errors. <br /><br />";
        die();
    }

    if(!isset($_POST['naam']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telefoon']) ||
        !isset($_POST['bericht'])) {
            died(' I am sorry, but there appears to be a problem with the form you submitted.');
        } 

    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $telefoon = $_POST['telefoon'];
    $bericht = $_POST['bericht'];
    
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email)) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
      }

      $string_exp = "/^[A-Za-z .'-]+$/";

      if(!preg_match($string_exp,$naam)) {
        $error_message .= 'The First Name you entered does not appear to be valid.<br />';
      }

     
      if(strlen($bericht) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
      }
     
      if(strlen($error_message) > 0) {
        died($error_message);
      }
     
        $email_message = "Form details below.\n\n";
     

function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }

   

  $email_message .= "Naam: ".clean_string($naam)."\n";
  $email_message .= "Email: ".clean_string($email)."\n";
  $email_message .= "Telefoon: ".clean_string($telefoon)."\n";
  $email_message .= "Bericht: ".clean_string($bericht)."\n";
}
$headers = 'van: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
        <h2>Thank you for you message</h2>
        <h4>I will contact you as soon as possible</h4>
        <br>
        <a href="/index.php"><img src="/foto/mhd-logo-white.svg" alt="logo"></a>

    </div>
</body>

</html>