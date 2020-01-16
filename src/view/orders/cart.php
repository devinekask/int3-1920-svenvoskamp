<?php if($numItems <= 0): ?>
  <hr class = "grey__line grey__line--nav">
  <div class = "div__emptycart container">
    <p class = "verybig bold p__emptycart">🙀 Je hebt nog geen producten in je winkelmand! </p>
    <form action="index.php">
      <button class = "button__spotlight button__emptycart" type="submit">Naar de shop</button>
    </form>
    <img class = "img__emptycart" src="./assets/img/empty.png" alt="Suske en wiske renned">

  </div>


<?php else: ?>
<ul class = "container ul__cart--nav">
  <li class = "li__cart--nav li__cart--active">1 Winkelmand</li>
  <li class = "li__cart--nav">2 Jouw Gegevens</li>
  <li class = "li__cart--nav">3 Checkout</li>
</ul>
<hr class = "grey__line grey__line--cart">

<section class = "container section__cart">
  <div class = "container__dashed section__cart--main">
    <div class = "div__h2--flex">
    <h2 class = "h2__spotlight h2__spotlight--black"><span class = "h2__background--red">Jouw Winkelwagen</span></h2>
    </div>
    <p class = "bold medium uppercase p__cart--title">Wat een goede keuze!</p>
    <div class = "div__cart--flex">
    <div class = "div__cart">
    <form action="index.php?page=cart" method="post">
      <?php
      $discount = 0.00;
      if ($_SESSION['discount']){
        $discount = $discount = 8.00;
        $discount = (float)$discount;
      }
      $totalTotal = 0;
      $orderTotal = 0;
      $afterDiscountTotal = 0;
      $delivering = 4.95;
      foreach($_SESSION['cart'] as $product) {
          $productTotal = (float)$product['product']['price'] * (float)$product['quantity'];
          $orderTotal += (float)$productTotal;
          $orderTotal = (float)$orderTotal;
      ?>



      <div class = "cart__item">
        <img src="<?php echo $product['product']['cart_image'];?>" alt="<?php echo $product['product']['name']?>">
        <div class = "div__cart--info">
        <?php if(isset ($product['product']['bookclass'])) :?>
          <p class = "bold uppercase verysmall p__cart--info"><?php echo $product['product']['bookclass'];?></p>
        <?php elseif(isset ($product['product']['color'])) :?>
          <p class ="bold uppercase verysmall p__cart--info <?php echo $product['product']['color'];?>"><?php echo $product['product']['color'];?></p>
        <?php elseif(isset ($product['product']['month'])) :?>
          <p class = "bold uppercase verysmall p__cart--info"><?php echo $product['product']['month'];?></p>
        <?php else:?>
          <p class = "bold uppercase verysmall p__cart--info">standaard</p>
        <?php endif; ?>
          <p class = "p__cart--info-name verysmall bold "><?php echo $product['product']['name'];?> </p>
          <input class="td__quantity" type="number" name="quantity[<?php echo $product['product']['id']?>]" value="<?php echo $product['quantity']?>" class="replace" required />
          <p class = "red bold small p__cart--info-price">&#8364;<?php echo $productTotal;?></p>
        </div>
        <button type="submit" class="button__cart--remove" name="remove" value="<?php echo $product['product']['id']?>">&#215;
      </div>




      <?php }
      $afterDiscountTotal = $orderTotal - $discount;
      if ($afterDiscountTotal >= 20) {$delevering = "gratis"; } else {$delevering = '4.95';} ?>
      <button type="submit" id="update-cart" class="button__cart--update" name="action" value="update">
          <img width="14" height="14" src="./assets/img/refresh.png" alt="refresh"></img>
      </button>
      </div>
    <div class = "div__recipe--flex">
    <div class = "div__cart--recipe div__cart--recipe-2">
      <div class = " div__recipe--top">
        <div class="flex div__recipe--basic">
          <p class = "small p__basic--text">Bestelling:</p>
          <p class = "small p__basic--amount">&#8364;<?php echo $orderTotal?></p>
        </div>
        <div class="flex div__recipe--discount">
          <p class = "small span__green p__recipe--text">Korting:</p>
          <p class = "small span__green p__recipe--amount">- &#8364;<?php echo number_format((float)$discount, 2, '.', '');?></p>
        </div>
      </div>
      <div class = "flex div__recipe--total">
        <p class = "small  p__total--text">Bestelling producten:</p>
        <p class = "small  p__total--amount">&#8364;<?php echo $afterDiscountTotal?></p>
      </div>
      <div class = "flex div__recipe--deliver">
      <p class = "small  p__total--text">Standaard levering (morgen):</p>
        <?php if ($delevering > 1) { ?>
        <p class = "small  p__total--amount">&#8364;<?php echo $delevering;?></p>
        <?php } else { ?>
        <p class = "span__green small uppercase bold  p__total--amount"><?php echo $delevering;?></p>
        <?php } ?>
        <input type="hidden" name="delivery" value=<?php echo $delevering;?>>
      </div>
      <div class = "flex div__recipe--bottom">
        <p class = "medium uppercase bold p__bottom--text">Totaal:</p>
        <p class = "medium bold p__bottom--amount">&#8364;<?php $totalTotal += $afterDiscountTotal;
          if ($totalTotal <= 20){$totalTotal = $totalTotal + $delevering;} else {$totalTotal = $totalTotal;} $totalTotalTotal = str_replace(',', '.', $totalTotal); echo $totalTotalTotal; ?>
        </p>
        <input type="hidden" name="total" value=<?php echo $totalTotalTotal;?>>
      </div>

        </div>
        <div class = "div__cart--discount">
          <div class = "div__input--discount">
            <label class = "label--discount verysmall uppercase"  for="discount">Kortingscode:</label>
            <input class = "input--discount" type="text" name = "discount" id="discount">
          </div>
          <button type="submit" class = "button__submit--discount" name = "action" value = "check">
            PAK DIE KORTING
          </button>
      </div>
        </div>

    </div>
    <button class = "button__spotlight button__cart" type ="submit" name = "action" value = "details">JOUW GEGEVENS</button>
    </form>
    <div class = "div__cart--bottom">


    </div>
  </div>
</section>
<?php endif;?>
