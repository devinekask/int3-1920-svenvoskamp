
<section class="section overview__cities">
    <h1 class="overview__title">
      Choose your city:
    </h1>


<?php foreach($cities as $city): ?>
  <a class = "overview__item__a" href="index.php?page=cities-detail&amp;city_id=<?php echo $city['id'];?>">
<article class="article city__item">
<img src="<?php echo $city['image_select'];?>" alt="Picture from city" class="city__item--image">

<div class="city__item__information">
<h3 class="h2__country"><?php echo  $city['country']; ?></h3>
<h2 class="h1__city"><?php echo $city['city_name']; ?></h2>
</div>
</article>
</a>
<?php endforeach;?>
</form>

<button class="addCrawl__button back__button"><a class = "white" href="index.php?page=home">Go back to overview</a></button>

</section>

