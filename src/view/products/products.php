<hr class = "grey__line grey__line--nav">
<section class = "section__spotlight">
  <div class = "container__dashed section__spotlight--main">
    <h2 class = "h2__spotlight"><span class = "h2__background--red">In de spotlight</span></h2>
      <div class = "spotlight__textcontent">
        <p class = "p__spotlight--header">Boekenactie 2020 - Week 6:</p>
        <p class = "p__spotlight--title">The Road - Cormac Mccarthy</p>
      </div>
      <div class="spotlight__explained">
        <p class = "p__spotlight--explained">*Bij aankoop van een HUMO magazine van deze week ontvangt u een kortingscode die is te
          gebruiken op de 10 actieboeken. </p>
        <button class = "button__spotlight">&rarr; Ontdek "The Road"</button>
      </div>
  </div>
</section>

<section class = "section__filter">
  <hr class = "grey__line">
    <h2 class = "hidden">Filter</h2>
      <div class = "container section__filter--main">
        <form id="form__filter" method="get" action="index.php">
          <input type="hidden" name="page" value="home">
            <div class="form__wrap">
              <div class="checkbox__wrap">
                <label class="checkbox">
                    <input class = "input__checkbox" type="checkbox" name="type[]" value="1"
                        <?php if(isset($_GET['type'])){ if (!empty($_GET['type'][0] == 1)){ echo 'checked';}}?>>
                    <span class = "p__checkbox">Boeken</span>
                </label>
                <label class="checkbox">
                    <input class = "input__checkbox" type="checkbox" name="type[]" value="2"
                        <?php if(isset($_GET['type'])){ if (!empty($_GET['type'][0] == 2)){ echo 'checked';}}?>>
                    <span class = "p__checkbox">Accesoires</span>
                </label>
                <label class="checkbox">
                    <input class = "input__checkbox" type="checkbox" name="type[]" value="3"
                        <?php if(isset($_GET['type'])){ if (!empty($_GET['type'][0] == 3)){ echo 'checked';}}?>>
                    <span class = "p__checkbox">Abonnement</span>
                </label>
            </div>
            <div class="submit__wrap">
              <input type="submit" value="FILTER" class="button__filter">
            </div>
          </div>
        </form>
      </div>
    </div>
  <hr class = "grey__line grey__line--2">
</section>

<section class = " container container__dashed section__products">
  <h2 class = "h2__spotlight h2__products"><span class = "h2__background--red h2__background--padding">Producten</span></h2>
    <ul class = "ul__products">
      <?php foreach ($products as $product): if (strlen($product['title']) > 24) $product['title'] = substr($product['title'], 0, 21) . '...'; ?>
      <li class = "li__product">
        <div class = "li__product--info">
          <a href="index.php?page=product-detail&amp;id=<?php echo $product['id'];?>&amp;type=<?php echo $product['type_id']?>">
          <img src="<?php echo $product['product_image'];?>" alt="<?php echo $product['title'];?>">
          <p class = "p__product--type tiny uppercase red"><?php echo $product['type'];?></p>
          <p class = "p__product--title verysmall uppercase bold"><?php echo $product['title'];?></p>
          <p class = "p__product--price red bold uppercase medium ">€<?php echo $product['price'];?></p>
          </a>
        </div>
        <div class = "li__product--link">
          <a href="index.php?page=product-detail&amp;id=<?php echo $product['id'];?>&amp;type=<?php echo $product['type_id']?>">
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
