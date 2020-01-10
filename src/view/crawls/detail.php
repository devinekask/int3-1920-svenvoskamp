<section class="section details">
    <h1 class="details__title">
      Details
    </h1>
    <article class="article details__content">
      <h2 class = "hidden">Details</h2>
      <div class = details__city>
        <p class = "p__center">Your city:</p>
        <p class = "p__bold p__center"><?php echo $crawl['city_name'];?></p>
      </div>
      <div class = details__pubs>
      <p class = "p__center">Your pub configuration:</p>
        <p class = "p__bold p__center"><?php echo $crawl['pub_name'];?> (<?php echo $crawl['location_name'];?>)</p>
        <p class = "p__bold p__center"><?php echo $crawl['beer_name'];?></p>
        <p class = "p__bold p__center"><?php echo $crawl['snack_name'];?></p>
      </div>
      <div class = details__participants>
      <p class = "p__center">Participants:</p>
        <p class = "p__bold  p__center"><?php echo $crawl['participants'];?></p>
      </div>
      <div class = details__time>
      <p class = "p__center">Time:</p>
        <p class = "p__bold p__center"><?php echo $crawl['daytime'];?></p>
      </div>
    </article>
  <a href="index.php?page=home"><button class="addCrawl__button back__button">Go back to overview</button></a>
</section>
