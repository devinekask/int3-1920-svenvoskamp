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
          <input type="hidden" name="page" value="products">
            <div class="form__wrap">
              <div class="checkbox__wrap">
                <label class="checkbox">
                    <input class = "input__checkbox" type="checkbox" name="type[]" value="1"
                        <?php if(isset($_GET['type'])){ if (!empty($_GET['type'][0] == 1)){ echo 'checked';}}?>>
                    <p class = "p__checkbox">Boeken</p>
                </label>
                <label class="checkbox">
                    <input class = "input__checkbox" type="checkbox" name="type[]" value="2"
                        <?php if(isset($_GET['type'])){ if (!empty($_GET['type'][0] == 2)){ echo 'checked';}}?>>
                    <p class = "p__checkbox">Accesoires</p>
                </label>
                <label class="checkbox">
                    <input class = "input__checkbox" type="checkbox" name="type[]" value="3"
                        <?php if(isset($_GET['type'])){ if (!empty($_GET['type'][0] == 3)){ echo 'checked';}}?>>
                    <p class = "p__checkbox">Abonnement</p>
                </label>
            </div>
            <div class="submit__wrap">
              <input type="submit" value="FILTER" class="button__filter">
            </div>
        </form>
      </div>
    </div>
  <hr class = "grey__line">
</section>

<section class = " container container__dashed section__products">
  <h2 class = "h2__spotlight h2__products"><span class = "h2__background--red">Producten</span></h2>
</section>
