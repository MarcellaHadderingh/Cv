<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Me</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="../foto/mhd-logo-black.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form id="contact-form" action="contact.php" method="post">
        <a href="/index.php"><img src="/foto/mhd-logo-black.svg" alt="logo"></a>
        <a href="https://www.linkedin.com/in/marcella-hadderingh-013115176/"><i id="linked" class="fa fa-linkedin-square fa-3x social"></i></a>
            <a href="https://github.com/MarcellaHadderingh"><i id="git" class="fa fa-github-square fa-3x social"></i></a>

        <h3>Contact Me</h3>
        <label>
                <span>Naam (verplicht)</span>
                <input placeholder="Vul hier je naam in" type="text"  name="naam" required autofocus>
            </label>
        </div>
        <div>
            <label>
					<span>Email (verplicht)</span>
					<input placeholder="Vul hier je E-mail in " name="email" type="email" required>
				</label>
        </div>
        <div>
            <label>
					<span>Telefoon (verplicht)</span>
					<input placeholder=" Vul hier je telefoonnummer in" name="telefoon" type="tel"  required>
				</label>
        </div>
        <label>
					<span>Bericht</span>
					<textarea placeholder="Aanvullende informatie" name="bericht" required></textarea>
				</label>
        </div>
        <div>
            <button name="submit" type="submit" id="contact-submit">Send Message</button>

        </div>
        </div>

    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>