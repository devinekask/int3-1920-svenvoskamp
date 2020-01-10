<section class="section pubs">
  <h1 class = "hidden">Pub form:</h1>
    <p class="pubs__city">City: <?php echo $city['city_name'];?>
    </p>


<form class="crawl__form" action = "index.php?page=cities-detail&amp;city_id=<?php echo $city['id'];?>" method="post">
  <article class = "pubs__form">
    <h1 class="pubs__title">Choose your pub:</h1>
  <div class = "pubs__form--grid" for="pubs">
  <?php foreach ($pubs as $pub):
  ?>

  <div class="pub">
    <label for="<?php echo strtolower($pub['pub_name']);?>">
      <input class = "pub__input" type="radio" required name="pubs" value="<?php echo $pub['id'];?>" id = "<?php echo strtolower($pub['pub_name']);?>">
      <span class="error">
        <?php if (!empty($errors['pub_id'])) { echo $errors['pub_id'];}?>
     </span>
      <article class="article pubs__pub">
        <div class="pub__image">
          <img src="<?php echo $pub['pub_image']; ?>" alt="<?php echo $pub['pub_name'];?>">
        </div>
        <div class="pub__information">
          <h2 class="pub__name"><?php echo $pub['pub_name'];?></h2>
          <p class = "pub__adres"><?php echo $pub['pub_adres'];?></p>
        <div class="pub__outside">
      <?php if ($pub['outside'] == 1) {?><img src="./assets/images/outside_image.png" alt="Outside icon" class="outside__image"><?php
      } else {?>
       <img src="./assets/images/false_image.png" alt="False icon" class="false__image">
      <?php } ?>
        </div>
      </div>
    </article>
  </label>
  </div>
    <?php endforeach;?>
  </div>
  </div>
  </article>

<article class="beer__form">
  <h1 class = "pubs__title">Choose your beer:</h2>
  <div class ="beers__form--grid" for="beers"  >

<?php foreach ($beers as $beer):?>
 <div class="beers">
    <label for="<?php echo strtolower($beer['beer_name']);?>">
      <input type="radio" required name="beers" value="<?php echo $beer['id'];?>" id = "<?php echo strtolower($beer['beer_name']);?>">
      <span class="error">
      <?php
      if (!empty($errors['beer_id'])) {
      echo $errors['beer_id'];
      }
      ?>
     </span>
    <div class="beer__wrapper">
      <div class = "beer__image" >
        <img src="<?php echo $beer['beer_image'];?>" alt="<?php echo strtolower($beer['beer_name']);?>">
      </div>
    <div class="beer__information">
      <h2 class="beer__name"><?php echo $beer['beer_name'];?></h2>
      <p class = "beer__percentage"><?php echo $beer['alcohol_percentage'];?>%</p>
    </div>
    </div>
    </label>
    </div>
    <?php endforeach;?>
    </div>
 </div>
</article>


<article class="snacks__form">
<h1 class = "pubs__title">Choose your snack:</h2>
<div class = "snacks__form--grid" for="snacks">
<?php foreach ($snacks as $snack):?>
 <div class="snacks">
  <label for="<?php echo $snack['snack_name'];?>">
    <input type="radio" required name="snacks" value="<?php echo $snack['id'];?>" id = "<?php echo $snack['snack_name'];?>">
    <span class="error">
    <?php
    if (!empty($errors['snack_id'])) { echo $errors['snack_id'];
    }?>
   </span>
    <div class="beer__wrapper">
    <div class="snack__image">
      <img src="<?php echo $snack['snack_image'];?>" alt="<?php echo $snack['snack_name'];?>">
      </div>
    <div class="snack__information">
        <h2 class="snack__name"><?php echo $snack['snack_name'];?></h2>
  </div>
  </div>
  </label>
  </div>
<?php endforeach;?>
   </div>
</div>
</article>

<article class="locations__form">
<h1 class = "pubs__title">Choose your location in the pub:</h2>
<div class = "locations__form--grid" for="locations">
<?php
foreach ($locations as $location):
?>
 <div class = "locations">
    <label for="<?php echo $location['location_name'];?>">
    <input type="radio" required name="locations" value="<?php echo $location['id'];?>" id = "<?php echo $location['location_name'];?>">
    <span class="error">
    <?php
    if (!empty($errors['location_id'])) {
        echo $errors['location_id'];
    }
    ?>
   </span>
    <div class="location__wrapper">
    <div class="location__image">
      <img src="<?php echo $location['location_image'];?>" alt="<?php echo $location['location_name'];?>">
      </div>
    <div class="location__information">
        <h2 class="location__name"><?php echo $location['location_name'];?></h2>
  </div>
  </div>
  </label>
  </div>
<?php
endforeach;
?>
   </div>
</article>
<article class = "participants__form">
  <h1 class = "pubs__title">Choose the amount of participants:</h2>
  <div class = "participants__form--grid" for="participants">
  <label for="1-3">
  <div class="participants">
  <input type="radio" required name="participants" id = "1-3"  value= "1-3">
  <div class = "participants__wrapper">
  <h2 class="white daytime__name">1 - 3 Mates</h2>
  </div>
  </div>
  </label>
  <label for="4-6">
  <div class="participants">
  <input type="radio" required name="participants" id = "4-6" value= "4-6">
  <div class = "participants__wrapper">
  <h2 class="white daytime__name">4 - 6 Mates</h2>
  </div>
  </div>
  </label>
  <div class="participants">
  <label for="7-9">
  <input type="radio" required name="participants" id = "7-9" value= "7-9">
  <div class = "participants__wrapper">
  <h2 class="white daytime__name">7 - 9 Mates</h2>
  </div>
  </div>
  </label>
  <span class="error">
  <?php
    if (!empty($errors['participants'])) { echo $errors['participants'];}
  ?>
 </span>
  </div>
</article>
<article class = "daytime__form">
  <h1 class = "pubs__title">Choose the daytime:</h2>
  <div class = "daytime__form--grid" for="daytime">
  <label for="18:00-20:00">
    <div class="daytime">
      <input class = "input__daytime" type="radio" required name="daytime" id = "18:00-20:00" value= "18:00-20:00">
      <div class = "daytime__wrapper">
        <h2 class="white daytime__name">18:00-20:00</h2>
      </div>
    </div>
  </label>
  <label for="20:00-22:00">
    <div class="daytime">
      <input class = "input__daytime" type="radio" required name="daytime" id = "20:00-22:00" value= "20:00-22:00">
      <div class = "daytime__wrapper">
        <h2 class="white daytime__name">20:00-22:00</h2>
     </div>
    </div>
  </label>
  <label for="22:00-24:00">
  <div class="daytime">
  <input class = "input__daytime" type="radio" required name="daytime" id = "22:00-24:00" value= "22:00-24:00">
  <div class = "daytime__wrapper">
  <h2 class="white daytime__name">22:00-24:00</h2>
  </div>
  </div>
  </label>
  <span class="error">
    <?php
    if (!empty($errors['daytime'])) {
    echo $errors['daytime'];
    }?>
 </span>
  </div>
</article>
<button class = "finish__button confirm__button" type="submit" name="action" value="confirm">confirm</button>
    </form>
<button class="button__back">
  Back
</button>
</section>
