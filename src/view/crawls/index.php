<section class="section overview">
  <h1 class="overview__title">
    Overview
  </h1>

  <div class = "overview__items">
    <?php foreach($crawls as $crawl): ?>
      <article class="article overview__item">
        <a href="index.php?page=home-detail&amp;id=<?php echo $crawl['id'];?>">
          <div class="item__header <?php echo strtolower($crawl['city_name']);?>">
            <form action="index.php?page=home" method="post">
            <button type="submit" class="button__remove" action="remove" name="id"
             value="<?php echo $crawl['id']?>">&#215;</button>
            </form>
              <p class="header__country"><?php echo $crawl['country'];?></p>
             <h2 class="header__city"><?php echo $crawl['city_name'];?></h2>
          </div>
         <div class="item__information">
         <div class="information__participants">
          <img src="assets/images/participants.png" alt="Icon person" class="participants__icon">
          <p class="participants__amount"><?php echo $crawl['participants'];?></p>
        </div>
        <div class="information__pubs">
          <img src="assets/images/beers.png" alt="Icon beers" class="pubs__icon">
          <p class="pubs__amount"><?php echo "1";?></p>
        </div>
        <div class="information__time">
          <img src="assets/images/clock.png" alt="Icon clock" class="time__icon">
          <p class="time__duration"><?php echo $crawl['daytime'];?></p>
        </div>
      </div>
    </a>
    </article>
    <?php endforeach; ?>
   </div>
   <a class="addCrawl__button--link" href="index.php?page=cities">
    <button class="addCrawl__button">Add new crawl</button>
    </a>
</section>
