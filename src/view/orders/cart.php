
<ul class = "container ul__cart--nav">
  <li class = "li__cart--nav li__cart--active">1 Winkelmand</li>
  <li class = "li__cart--nav">2 Jouw Gegevens</li>
  <li class = "li__cart--nav">3 Checkout</li>
</ul>
<hr class = "grey__line grey__line--cart">

<section class = "section__cart">
  <div class = "container__dashed section__cart--main">
    <div class = "div__h2--flex">
    <h2 class = "h2__spotlight h2__spotlight--black"><span class = "h2__background--red">Jouw Winkelwagen</span></h2>
    </div>
    <p class = "bold medium uppercase p__cart--title">Wat een goede keuze!</p>
    <div class = "div__cart">
    <form action="index.php?page=cart" method="post">
      <table class="table__nav">
        <thead>
            <tr>
              <th class="bold medium th__product">Product</th>
              <th class="bold medium th__name">Naam</th>
              <th class="bold medium th__quantity">Aantal</th>
              <th class="bold medium th__itemprice">Prijs per item</th>
              <th class="bold medium th__itemtotal">Item Totaal</th>
            </tr>
        </thead>
      <tbody>
      <?php
      $discount = 0.00;
      $totalTotal = 0;
      $orderTotal = 0;
      $afterDiscountTotal = 0;
      $delivering = 4.95;
      foreach($_SESSION['cart'] as $product) {
          $productTotal = (float)$product['product']['price'] * (float)$product['quantity'];
          $orderTotal += (float)$productTotal;
          $orderTotal = (float)$orderTotal;
      ?>
          <tr>
            <td> <img class = "td__product" src="./assets/img/test.png" alt=""></td>
            <td><p class="td__name small"><?php echo $product['product']['name'];?></p></td>
            <td><input class="td__quantity" type="number" name="quantity[<?php echo $product['product']['id']?>]" value="<?php echo $product['quantity']?>" class="replace" required /></td>
            <td><p class = "td__itemprice">&#8364;<?php echo $product['product']['price'];?></p></td>
            <td><p class = "td__itemtotal">&#8364;<?php echo $productTotal; ?>,-</p></td>
            <td><button type="submit" class="button__cart--remove" name="remove" value="<?php echo $product['product']['id']?>">&#215;</button></td>
          </tr>
      </tbody>
      <?php }
      $afterDiscountTotal = $orderTotal - $discount;
      if ($afterDiscountTotal >= 20) {$delevering = "gratis"; } else {$delevering = '4.95';} ?>
      </table>
      <div class = "div__cart--bottom">
        <button type="submit" id="update-cart" class="button__cart--update" name="action" value="update">
          <img width="14" height="14" src="./assets/img/refresh.png" alt="refresh"></img>
        </button>
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
    <div class = "div__cart--recipe">
      <div class = " div__recipe--top">
        <div class="flex div__recipe--basic">
          <p class = "small p__basic--text">Bestelling:</p>
          <p class = "small p__basic--amount">&#8364;<?php echo $orderTotal?></p>
        </div>
        <div class="flex div__recipe--discount">
          <p class = "small span__green p__recipe--text">Korting:</p>
          <p class = "small span__green p__recipe--amount">- &#8364;<?php echo $discount;?></p>
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
      </div>
      <div class = "flex div__recipe--bottom">
        <p class = "medium uppercase bold p__bottom--text">Totaal:</p>
        <p class = "medium bold p__bottom--amount">&#8364;<?php $totalTotal += $afterDiscountTotal;
          if ($totalTotal <= 20){$totalTotal = $totalTotal + $delevering;} else {$totalTotal = $totalTotal;} $totalTotalTotal = str_replace(',', '.', $totalTotal); echo $totalTotalTotal; ?>
        </p>
        <input type="hidden" name="total" value=<?php echo $totalTotalTotal;?>>
      </div>
    </div>
    <button class = "button__spotlight button__cart" type ="submit" name = "action" value = "details">JOUW GEGEVENS</button>
    </form>
  </div>
</section>
