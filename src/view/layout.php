<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name = "viewport" content="initial-scale=1.0, width = device-width">
    <title>HUMO - <?php echo $title;?></title>
    <?php echo $css;?>
  </head>
  <body>
    <header>
      <nav class = "nav__desktop">
        <div class = "nav__top container">
          <div class = "nav__top--left">
            <li class = "li__nav--left"><span class = span__nav--background>Video</span></li>
            <li class = "li__nav--left">TV-Gids</li>
            <li class = "li__nav--left">Zoekertjes</li>
            <li class = "li__nav--left">Abonnement Huren</li>
          </div>
          <div class = "nav__top--right">
            <li class = "li__nav--right"><span class = span__nav--red>Nu in HUMO</span></li>
            <li class = "li__nav--right">Login</li>
            <li class = "li__nav--right">Registreer</li>
            <li class = "li__nav--right">Winkelmand (<span class = span__nav--red>1</span>)</li>
          </div>
        </div>
        <div class="nav__main">
          <div class = "container nav__main--flex">
            <li class = "li__nav--main">Home</li>
            <li class = "li__nav--main">Actua</li>
            <li class = "li__nav--main">Humor</li>
            <li class = "li__nav--main">TV/Film</li>
            <img class = "img__nav--main" src="../assets/img/logo.png" alt="Humo logo">
            <li class = "li__nav--main">Muziek</li>
            <li class = "li__nav--main">Boeken</li>
            <li class = "li__nav--main"><span class = "span__main--background">Shop</span></li>
            <img width = "24" height = "24" class = "img__nav--main img__nav--search" src="../assets/img/search.png" alt="Search Icon">
          </div>
        </div>
      </nav>
      <nav class = "nav__tablet">
        <div class = "nav__top container">
          <div class = "nav__top--left">
          <img width = "24" height = "24" class = "img__nav--main" src="../assets/img/hamburger.png" alt="Hamburger Icon">
          <img width = "24" height = "24" class = "img__nav--main img__nav--search" src="../assets/img/search.png" alt="Search Icon">
          </div>
          <div class = "nav__top--right">
            <li class = "li__nav--right"><span class = span__nav--red>Nu in HUMO</span></li>
            <li class = "li__nav--right">Login</li>
            <li class = "li__nav--right">Registreer</li>
            <li class = "li__nav--right">Winkelmand (<span class = span__nav--red>1</span>)</li>
          </div>
        </div>
        <div class="nav__main">
          <div class = "container nav__main--flex">
            <li class = "li__nav--main">Home</li>
            <li class = "li__nav--main">Actua</li>
            <img class = "img__nav--main" src="../assets/img/logo.png" alt="Humo logo">
            <li class = "li__nav--main">Boeken</li>
            <li class = "li__nav--main"><span class = "span__main--background">Shop</span></li>
          </div>
        </div>
      </nav>
      <nav class = "nav__mobile">
        <div class = "nav__top container">
          <div class = "nav__top--left">
            <img width = "24" height = "24"  src="../assets/img/hamburger.png" alt="Hamburger Icon">
            <img class = "img__mobile--left" width = "24" height = "24"  src="../assets/img/search.png" alt="Search Icon">
          </div>
          <div class = "nav__top--mid">
            <img class = "img__mobile--logo" src="./assets/img/logosmall.png" alt="Small logo">
          </div>
          <div class = "nav__top--right">
            <img class = "img__mobile--right" width = "24" height = "24"  src="../assets/img/user.png" alt="Hamburger Icon">
            <div class = "nav__right--cart">
                <img width = "24" height = "24"  src="../assets/img/cart24x24.png" alt="Shopping cart">
                <li class = "li__nav--right">(<span class = span__nav--red>1</span>)</li>
            </div>
          </div>
        </div>
      </nav>
      </header>
    <main>
      <?php echo $content;?>
    </main>
    <footer>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
