<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pomodoro</title>
    <link rel="stylesheet" href="/trello/static/css/foundation.css">
    <link rel="stylesheet" href="/trello/static/css/app.css">
    <link rel="stylesheet" href="/trello/static/css/style.css">
  </head>
<header>
    <div class="top-bar">
      <div class="top-bar-left">
        <div id="header">
        <ul class="menu" data-dropdown-menu>
          <li><a id="header_marche" href="index.php?page=index">Bienvenue</a>
          <li><a id="header_marche" href="index.php?page=formulaire">Formulaire</a>
        </ul>
        </div>
      </div>

        <div class="top-bar-right">
          <form method="post" action="index.php?page=login&status=controler">
            <ul class="menu">

              <li>
                  <input type="text" name="admin_id" placeholder="Votre identifiant">
                </li>


              <li>
                  <input type="password" name="admin_mdp" placeholder="Votre mot de passe">
                </li>


                <li>  <input type="submit" class="button expanded" value="Connexion"> </li>
              </ul>

          </div>



      </form>
      </div>
</header>
