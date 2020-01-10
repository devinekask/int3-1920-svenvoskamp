<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content = "initial-scale=1.0, width = device-width"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Pub Planner - <?php echo $title;?></title>
    <?php /* NEW */ ?>
    <?php echo $css;?>
  </head>
  <body>
    <header class="header">
        <a class="header__title" href="index.php?page=home"><img src="assets/images/logo.png" alt="Pub Planner Logo" class="header__image"></a>
        <h1 class="header__title"><a class="header__title" href="index.php?page=home">Pub Planner</a></h1>
      </header>
    <main>
      <?php echo $content;?>
    </main>
    <footer class="footer">
  <div class="footer__settings">
    <img src="assets/images/settings.png" alt="Settings icon" class="settings__icon">
  </div>
  <div class="footer__home">
    <img src="assets/images/home.png" alt="Home icon" class="home__icon">
  </div>
  <div class="footer__crawl">
    <img src="assets/images/beer.png" alt="Beer icon" class="crawl__icon">
  </div>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
