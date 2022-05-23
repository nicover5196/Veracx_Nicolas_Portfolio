<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veracx Web</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/233f556d4c.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-main">
        <header>
            <a href="#" class="logo">Veracx Web</a>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Projets</a></li>
                <li><a href="#">Formation</a></li>
                <li><a href="#">Github</a></li>
                <li><a href="#">Expérience</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </header>
        <section class="banner"></section>
        <section>
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="col-8 m-4">
                        <form action="form.php" method="POST">
                            <div class="form-group">
                                <div class="text-center">
                                    <h1>Contactez-moi ! </h1>
                                </div>
                                <div class="d-flex">
                                    <input type="text" name="surname" placeholder="Nom" autocomplete="off" class="form-control"/>
                                    <input type="text" name="firstname" placeholder="Prénom" autocomplete="off" class="form-control"/>
                                </div>
                                <br/>
                                <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control"/>
                                <br/>
                                <textarea rows="10" name="message" placeholder="Votre message" class="form-control"></textarea>
                                <br/>
                                <button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer>
                <span>Copyright © 2022 - Tous droits réservés.</span>
                <a href="https://github.com/nicover5196">Github<img src="img/GitHub-Mark-32px.png" alt="logo GitHub"/></a>
        </footer>
    </div>
    <script type="text/javascript">
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    })
    </script>
</body>
</html>
