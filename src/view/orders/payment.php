<ul class="container ul__cart--nav">
  <li class="li__cart--nav ">1 Winkelmand</li>
  <li class="li__cart--nav ">2 Jouw Gegevens</li>
  <li class="li__cart--nav li__cart--active">3 Checkout</li>
</ul>
<hr class="grey__line grey__line--cart">

<section class="section__cart--detail">
  <div class="container__dashed section__cart--main">
    <div class="div__h2--flex">
      <h2 class="h2__spotlight h2__spotlight--black"><span class="h2__background--red">Jouw Gegevens</span></h2>
    </div>
    <div class="div__cartdetails">
      <div class="div__cartdetails--left">
        <p class="bold medium uppercase p__cart--title">Hoe wil je betalen?</p>
        <form action="index.php?page=cart-payment" class="form--payment" method="post">
        <input type="hidden" name="action" value="insertPayment">
        <?php foreach($payments as $payment) : ?>
        <div class = "div__input--payment">
          <input type="radio" id="<?php echo $payment['payment'];?>" name="payments" value="<?php echo $payment['id'];?>" <?php if ($payment['payment'] == "Bancontact") {echo "checked";}?> >
          <label class = "label__payment" for="<?php echo $payment['payment'];?>">
          <p class = "p__label--payment small "><?php echo $payment['payment'];?></p>
          <img  src="<?php echo $payment['payment_image'];?>" alt="<?php echo $payment['payment'];?>">
        </label>
       </div>
        <?php endforeach; ?>
      </div>
      <div class = "div__flex--payment">
        <div class="div__cartdetails--right">
          <p class="bold medium uppercase p__cart--title p__cartdetail--right">Jouw bestelling</p>
          <div class="div__cart--recipe div__details--recipe">
            <div class=" div__recipe--top">
              <a class = "a--edit" href="index.php?page=cart"><img width= "20" height = "20"src="./assets/img/edit.svg" alt="edit icon"></a>
              <?php foreach($orderItems as $orderItem): ?>
              <div class="flex div__recipe--basic div__details--recipe-basic">
                <p class="small p__basic--text"><span
                    class="bold"><?php echo $orderItem['quantity'] .'x' . '</span>' . " " . $orderItem['name'];?>:</p>
                <?php $ticketTotal = $orderItem['price'] * $orderItem['quantity']; ?>
                <p class="small p__basic--amount">&#8364;<?php echo $ticketTotal; ?></p>
              </div>
              <?php endforeach; ?>
              <div class="flex div__recipe--discount div__details--recipe-discount">
                <p class="small span__green p__recipe--text">Korting:</p>
                <p class="small span__green p__recipe--amount">- &#8364; 0,00</p>
              </div>
              <div class="flex div__recipe--deliver ">
                <p class="small  p__total--text">Standaard levering (morgen):</p>
                <p class="small uppercase   p__total--amount">
                  <?php if ($delivery == 4.95){echo '&#8364;';}?><?php echo $delivery;?></p>
              </div>
            </div>
            <div class="flex div__recipe--bottom div__recipe--details-bottom">
              <p class="medium uppercase bold p__bottom--text">Totaal:</p>
              <p class="medium bold p__bottom--amount">&#8364;<?php echo $orderItem['amount'];?>
              </p>
              <input type="hidden" name="total" value="<?php echo $orderItem['amount'];?>">
            </div>
          </div>
        </div>
        <div class="div__cartdetails--right">
          <p class="bold medium uppercase p__cart--title p__cartdetail--right">Jouw Gegevens</p>
          <div class="div__cart--recipe div__details--recipe">
          <a class = "a--edit" href="index.php?page=cart-detail"><img class = "img--edit" width= "20" height = "20"src="./assets/img/edit.svg" alt="edit icon"></a>
            <ul class = "ul__cartdetails">
              <li class = "small li__cartdetails p__basic--text"><?php echo $customer['name'] . " " . $customer['surname']; ?></li>
              <li class = "small li__cartdetails p__basic--text"><?php echo $customer['adres'] . " " . $customer['number']; ?></li>
              <li class = "small li__cartdetails p__basic--text"><?php echo $customer['zip'];?></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <input type="submit" class="button__spotlight button__cart--details" value="Naar betaalsysteem">
    </form>
  </div>
</section>
