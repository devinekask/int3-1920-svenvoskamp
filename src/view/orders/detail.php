<ul class="container ul__cart--nav">
  <li class="li__cart--nav ">1 Winkelmand</li>
  <li class="li__cart--nav li__cart--active">2 Jouw Gegevens</li>
  <li class="li__cart--nav">3 Checkout</li>
</ul>
<hr class="grey__line grey__line--cart">

<section class="section__cart--detail">
  <div class="container__dashed section__cart--main">
    <div class="div__h2--flex">
      <h2 class="h2__spotlight h2__spotlight--black"><span class="h2__background--red">Jouw Gegevens</span></h2>
    </div>
    <div class="div__cartdetails">
      <div class="div__cartdetails--left">
        <p class="bold medium uppercase p__cart--title">Jouw gegevens</p>
        <form action="index.php?page=cart-detail" class="form--detail" method="post">
          <input type="hidden" name="action" value="insertCustomer">
          <p class="error"></p>
          <div class="fields">
            <div class="field--wrapper">
              <label class="field--wrapper__label" for="name">
                <span class="field--wrapper__label small p">Naam:</span>
                <input type="text" minlength=2 required id="name" placeholder="Sven" name="name"
                  value="<?php if(!empty($_POST['name'])){ echo $_POST['name'];} ?>" class="error--active input" />
                <span class="error">
                  <?php if (!empty($errors['name'])) {echo $errors['name'];}?>
                </span>
              </label>
            </div>
            <div class="field--wrapper">
              <label class="field--wrapper__label" for="surname">
                <span class="field--wrapper__label small p">Achternaam:</span>
                <input type="text" minlength=2 required id="surname" placeholder="Voskamp" name="surname"
                  value="<?php if(!empty($_POST['surname'])){ echo $_POST['surname'];} ?>"
                  class="error--active input" />
                <span class="error">
                  <?php if (!empty($errors['name'])) {echo $errors['name'];}?>
                </span>
              </label>
            </div>
            <div class="field--wrapper">
              <label class="field--wrapper__label" for="email">
                <span class="field--wrapper__label small p">E-mail:</span>
                <input type="email" minlength=2 required id="email" placeholder="svenvoskamp@gmail.com" name="email"
                  value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];} ?>" class="error--active input" />
                <span class="error">
                  <?php if (!empty($errors['email'])) {echo $errors['email'];}?>
                </span>
              </label>
            </div>
            <div class="field--wrapper">
              <label class="field--wrapper__label" for="telephone">
                <span class="field--wrapper__label small p">Telefoonnummer:</span>
                <input type="tel" minlength=2 required id="telehpone" placeholder="0622932305" name="telephone"
                  value="<?php if(!empty($_POST['telephone'])){ echo $_POST['telephone'];} ?>"
                  class="error--active input" />
                <span class="error">
                  <?php if (!empty($errors['telephone'])) {echo $errors['telephone'];}?>
                </span>
              </label>
            </div>
            <div class="field--wrapper__adress">
              <div class="field--wrapper">
                <label class="field--wrapper__label" for="adres">
                  <span class="field--wrapper__label small p">Adres:</span>
                  <input type="text" minlength=2 required id="adres" placeholder="Steenstraat" name="adres"
                    value="<?php if(!empty($_POST['adres'])){ echo $_POST['adres'];} ?>" class="error--active input" />
                  <span class="error">
                    <?php if (!empty($errors['adres'])) {echo $errors['adres'];}?>
                  </span>
                </label>
              </div>
              <div class="field--wrapper">
                <label class="field--wrapper__label" for="number">
                  <span class="field--wrapper__label small p">Huisnummer:</span>
                  <input class="input__cart--number" type="number" required id="number" placeholder="10" name="number"
                    value="<?php if(!empty($_POST['number'])){ echo $_POST['number'];} ?>"
                    class="error--active input" />
                  <span class="error">
                    <?php if (!empty($errors['number'])) {echo $errors['number'];}?>
                  </span>
                </label>
              </div>
            </div>
            <div class="field--wrapper">
              <label class="field--wrapper__label" for="zip">
                <span class="field--wrapper__label small p">Postcode:</span>
                <input class="input__cart--zip" type="text" pattern="[0-9]{4}" required id="number" placeholder="8500"
                  name="zip" value="<?php if(!empty($_POST['zip'])){ echo $_POST['zip'];} ?>"
                  class="error--active input" />
                <span class="error">
                  <?php if (!empty($errors['zip'])) {echo $errors['zip'];}?>
                </span>
              </label>
            </div>
            <input class="input__cart--toggle" type="checkbox" id="checkbox_adres" name="toggle" />
            <label class="small label__cart--toggle" for="checkbox_adres">Factuuradres is anders dan bezorgadres
            </label>
            <div class="field--wrapper__fadress">
              <div class="field--wrapper">
                <label class="field--wrapper__label" for="fname">
                  <span class="field--wrapper__label small p">Naam:</span>
                  <input type="text" minlenght="2" id="fname" placeholder="Sven" name="fname"
                    value="<?php if(!empty($_POST['fname'])){ echo $_POST['fname'];} ?>" class="error--active input" />
                  <span class="error">
                    <?php if (!empty($errors['fname'])) {echo $errors['fname'];}?>
                  </span>
                </label>
              </div>
              <div class="field--wrapper">
                <label class="field--wrapper__label" for="fsurname">
                  <span class="field--wrapper__label small p">Achternaam:</span>
                  <input type="text" minlenght="2" id="fsurname" placeholder="Voskamp" name="fsurname"
                    value="<?php if(!empty($_POST['fsurname'])){ echo $_POST['fsurname'];} ?>"
                    class="error--active input" />
                  <span class="error">
                    <?php if (!empty($errors['fname'])) {echo $errors['fname'];}?>
                  </span>
                </label>
              </div>

              <div class="field--wrapper__adress">
                <div class="field--wrapper">
                  <label class="field--wrapper__label" for="fadres">
                    <span class="field--wrapper__label small p">Adres:</span>
                    <input type="text" minlength=2 id="fadres" placeholder="Steenstraat" name="fadres"
                      value="<?php if(!empty($_POST['fadres'])){ echo $_POST['fadres'];} ?>"
                      class="error--active input" />
                    <span class="error">
                      <?php if (!empty($errors['fadres'])) {echo $errors['fadres'];}?>
                    </span>
                  </label>
                </div>
                <div class="field--wrapper">
                  <label class="field--wrapper__label" for="fnumber">
                    <span class="field--wrapper__label small p">Huisnummer:</span>
                    <input class="input__cart--number" type="number"  id="fnumber" placeholder="10"
                      name="fnumber" value="<?php if(!empty($_POST['fnumber'])){ echo $_POST['fnumber'];} ?>"
                      class="error--active input" />
                    <span class="error">
                      <?php if (!empty($errors['fnumber'])) {echo $errors['fnumber'];}?>
                    </span>
                  </label>
                </div>
              </div>
              <div class="field--wrapper">
              <label class="field--wrapper__label" for="fzip">
                <span class="field--wrapper__label small p">Postcode:</span>
                <input class="input__cart--zip" type="text" pattern="[0-9]{4}"  id="number" placeholder="8500"
                  name="fzip" value="<?php if(!empty($_POST['fzip'])){ echo $_POST['fzip'];} ?>"
                  class="error--active input" />
                <span class="error">
                  <?php if (!empty($errors['fzip'])) {echo $errors['fzip'];}?>
                </span>
              </label>
            </div>
            </div>
          </div>
          <input type="submit" class="button__spotlight button__cart--details" value="Checkout">
        </form>
      </div>
      <div class="div__cartdetails--right">
        <p class="bold medium uppercase p__cart--title p__cartdetail--right">Jouw bestelling</p>
        <div class = "div__cart--recipe div__details--recipe">
      <div class = " div__recipe--top">
        <?php foreach($orderItems as $orderItem): ?>
        <div class="flex div__recipe--basic div__details--recipe-basic">
          <p class = "small p__basic--text"><span class = "bold"><?php echo $orderItem['quantity'] .'x' . '</span>' . " " . $orderItem['name'];?></p>
          <?php $ticketTotal = $orderItem['price'] * $orderItem['quantity']; ?>
          <p class = "small p__basic--amount">&#8364;<?php echo $ticketTotal; ?></p>
        </div>
        <?php endforeach; ?>
        <div class="flex div__recipe--discount div__details--recipe-discount">
          <p class = "small span__green p__recipe--text">Korting:</p>
          <p class = "small span__green p__recipe--amount">- &#8364; 0,00</p>
        </div>
        <div class = "flex div__recipe--deliver ">
          <p class = "small  p__total--text">Standaard levering (morgen):</p>

          <p class = "small uppercase   p__total--amount"><?php if ($delivery == 4.95){echo '&#8364;';}?><?php echo $delivery;?></p>
        </div>
      </div>
      <div class = "flex div__recipe--bottom div__recipe--details-bottom">
        <p class = "medium uppercase bold p__bottom--text">Totaal:</p>
        <p class = "medium bold p__bottom--amount">&#8364;<?php echo $orderItem['amount'];?>
        </p>
        <input type="hidden" name="total" value="<?php echo $orderItem['amount'];?>">
      </div>
    </div>
      </div>
    </div>
  </div>
</section>
