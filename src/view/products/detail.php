<hr class = "grey__line grey__line--nav">
<p class = "container tiny p__product--back"><a class = "tiny" href="index.php?page=products">< terug naar shop</a></p>
<section class = "container section__product--detail">

  <h2 class = "hidden">Product Detail</h2>

  <div class = "div__product--title">
    <p class = "uppercase bold big p__product--title"><?php echo $product['title'];?></p>
    <?php if($product['id'] >= 1 && $product['id'] <= 10): ?>
      <p class = "p__product--discount small bold span__green">*In de humo van deze week is op de flap een kortingscode voor dit product te vinden.</p>
    <?php endif; ?>
    <img class = "img__product--detail" src="<?php echo $product['product_detail_image'];?>" alt="<?php echo $product['title'];?>">
  </div>
  <div class = "div__product--info">
    <form method="post" action="index.php?page=cart">

      <?php if(($product['id'] == '14') || $product['id'] == '13' || $product['id'] == '19') :?>
      <div class = "div__product--input div__product--input-active">
        <?php else: ?>
        <div class = "div__product--input">
        <?php endif;?>
        <?php foreach ($allproducts as $allproduct): ?>
        <?php if(isset ($allproduct['bookclass'])) :?>
        <input type="radio" <?php if($allproduct['bookclass'] == 'Paperback'){ echo 'checked';}; ?> id = "radio<?php echo $allproduct['id'];?>" name="product_id" value="<?php echo $allproduct['id'];?>"/>
        <label class = "uppercase medium label__radio"  for="radio<?php echo $allproduct['id'];?>"><?php echo $allproduct['bookclass'];?> <br> €<?php echo $allproduct['price'];?></label>
        <input type="hidden" name="type_id" value="<?php echo $allproduct['type_id']?>">
        <input type="hidden" name="link_id" value="<?php echo $product['id']?>">
        <?php elseif(isset ($allproduct['color'])) :?>
        <input type="radio" <?php if($allproduct['color'] == 'blauw'){ echo 'checked';}; ?> id = "radio<?php echo $allproduct['id'];?>" name="product_id" value="<?php echo $allproduct['id'];?>"/>
        <label class = "<?php echo $allproduct['color'];?> uppercase medium label__radio"  for="radio<?php echo $allproduct['id'];?>"><?php echo $allproduct['color'];?> <br> €<?php echo $allproduct['price'];?></label>
        <input type="hidden" name="type_id" value="<?php echo $allproduct['type_id']?>">
        <input type="hidden" name="link_id" value="<?php echo $product['id']?>">
        <?php elseif(isset ($allproduct['month'])) :?>
        <input type="radio" <?php if($allproduct['month'] == '36 Maanden'){ echo 'checked';}; ?> id = "radio<?php echo $allproduct['id'];?>" name="product_id" value="<?php echo $allproduct['id'];?>"/>
        <label class = "uppercase medium label__radio"  for="radio<?php echo $allproduct['id'];?>"><?php echo $allproduct['month'];?> <br> €<?php echo $allproduct['price'];?> per maand</label>
        <input type="hidden" name="type_id" value="<?php echo $allproduct['type_id']?>">
        <input type="hidden" name="link_id" value="<?php echo $product['id']?>">
        <?php else :?>
        <input type="radio" checked  id = "radio<?php echo $allproduct['id'];?>" name="product_id" value="<?php echo $allproduct['id'];?>"/>
        <label class = "uppercase medium label__radio"  for="radio<?php echo $allproduct['id'];?>">€<?php echo $allproduct['price'];?></label>
        <input type="hidden" name="type_id" value="<?php echo $allproduct['type_id']?>">
        <input type="hidden" name="link_id" value="<?php echo $product['id']?>">
        <?php endif;?>
        <?php endforeach; ?>
      </div>
      <ul class = "ul__product--benefits">
        <li class = " li__product--benefit"><img class = "img__product--benefit" src="./assets/img/check.png" alt="check icon"><p class = "verysmall p__product--benefit"> voor <span class = "bold span__green">23,59uur besteld</span>, morgen in huis!</p>
        </li>
        <li class = " li__product--benefit"><img class = "img__product--benefit" src="./assets/img/check.png" alt="check icon"><p class = "verysmall p__product--benefit"><span class = " bold span__green">gratis</span> retourneren binnen 30 dagen!</p>
        </li>
        <li class = " li__product--benefit"><img class = "img__product--benefit" src="./assets/img/check.png" alt="check icon"><p class = "verysmall p__product--benefit"><span class = " bold span__green">gratis</span> bezorging vanaf €20,-</p>
        </li>
      </ul>

      <button class = " button__spotlight button__product--detail" type = "submit" name = "action" value = "add"><img class ="img__button--detail " src="./assets/img/cart.svg" width = "18" height = "18" alt="cart icon"><p class = "p__button--detail">IN WINKELMAND</p></button>

      <?php if($_SESSION['tocart']): ?>
        <button class = " button__spotlight button__product--detail button__product--tocart" type = "submit" name = "action" value = "tocart"> <p class = "p__button--detail p__button--detail-2">NAAR WINKELMAND</p></button>
      <?php endif;?>
      <?php if ($product['longread']): ?>
      <?php if ($product['longread'] == 1): ?>
      <button class = " button__spotlight button__product--detail button__product--discover"><p class = "p__button--detail">ONTDEK</p></button>

      <?php else: ?>
      <p class = "p__product--discover red bold verysmall"> Longread beschikbaar vanaf <?php echo $product['longread'];?></p>
      <?php endif;?>
      <?php endif;?>
    </form>
  </div>
</section>

<div class = "container section__flex">
  <section class = "container container__dashed section__product--info">
    <h2 class = "h2__product__info h2__spotlight h2__products"><span class = "h2__background--red h2__background--padding">Productinformatie</span></h2>
    <p class = "p__product--info"><?php echo $product['information'];?></p>
  </section>

  <section class = "container container__dashed section__product--specs">
    <h2 class = "h2__product--specs h2__spotlight h2__products"><span class = "h2__background--red h2__background--padding">Specificaties</span></h2>
    <ul class = "ul__product--specs">
      <?php foreach ($specs as $spec) :?>
      <li class = "li__product--specs"><?php echo $spec['spec'];?></li>
      <?php endforeach;?>
    </ul>
  </section>
</div>

<section class = " container container__dashed section__products">
  <h2 class = "h2__spotlight h2__products"><span class = "h2__background--red h2__background--padding">Relevante Producten</span></h2>
    <ul class = "ul__products">
      <?php foreach ($relatedproducts as $relatedproduct): if (strlen($relatedproduct['title']) > 24) $relatedproduct['title'] = substr($relatedproduct['title'], 0, 21) . '...'; ?>
      <li class = "li__product">
        <div class = "li__product--info">
          <a href="index.php?page=product-detail&amp;id=<?php echo $relatedproduct['id'];?>&amp;type=<?php echo $product['type_id']?>">
          <img src="<?php echo $relatedproduct['product_image'];?>" alt="<?php echo $relatedproduct['title'];?>">
          <p class = "p__product--type tiny uppercase red"><?php echo $relatedproduct['type'];?></p>
          <p class = "p__product--title verysmall uppercase bold"><?php echo $relatedproduct['title'];?></p>
          <p class = "p__product--price red bold uppercase medium ">€<?php echo $relatedproduct['price'];?></p>
          </a>
        </div>
        <div class = "li__product--link">
          <a href="index.php?page=product-detail&amp;id=<?php echo $relatedproduct['id'];?>&amp;type=<?php echo $relatedproduct['type_id']?>">
            <div class = "li__product--more">
              <p class = "p__product--more tiny ">&rarr; meer info</p>
            </div>
          </a>
          </div>
        </div>
      </li>
      <?php endforeach;?>
    </ul>
</section>
