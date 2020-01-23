{
  const dreams = [{
      dream: `#Droom 12`,
      text: `“Ik loop rond door het bos. Ik ben mijn vader kwijt. Hij zij mij nooit alleen laten. Hij was op zoek naar voedsel en zou binnen twee minuten terug zijn. Ik schreeuw de naam van mijn vader, maar het enige wat ik hoor is mijn eigen echo. Ik begin te rennen. Ik moet mijn vader vinden. Ik hoor een geweerschot. Ik volg het geluid en zie dat mijn vader op de grond ligt. Ik schrik wakker.”`
    },
    {
      dream: `#Droom 52`,
      text: `“Mijn vader is in slaap gevallen. Na een paar lange dagen kan het ook niet anders dat hij moe is. Ik kan niet in slaap komen. Langzaam hoor ik een ritselend geluid door de bomen. Ik ga mijn tent uit om te kijken wat er is. Ik word bij mijn keel gegrepen door een onbekend persoon. Hij wilt al ons voedsel hebben. Ik probeer me los te rukken en op dat moment wil hij mijn keel doorsnijden. Ik schrik wakker.”`
    },
    {
      dream: `#Droom 87`,
      text: `“Het enige wat ik zie is zwarte rook. Ik kan niet ademhalen en ik begin in paniek te raken. Alles om mij heen is zwart. Alles, maar dan ook alles. Op het moment dat ik om hulp wil roepen voel ik een verstikkend gevoel in mijn keel. Ik kan nergens heen. Dit is het moment dat ik heen zal gaan. Op het moment dat ik de warmte van het vuur op mijn huid kan voelen, schrik ik wakker.”`
    }
  ];

  const cans = [{
      id: 1,
      can: `Cola`,
      text: `“Ik loop rond door het bos. Ik ben mijn vader kwijt. Hij zij mij nooit alleen laten. Hij was op zoek naar voedsel en zou binnen twee minuten terug zijn. Ik schreeuw de naam van mijn vader, maar het enige wat ik hoor is mijn eigen echo. Ik begin te rennen. Ik moet mijn vader vinden. Ik hoor een geweerschot. Ik volg het geluid en zie dat mijn vader op de grond ligt. Ik schrik wakker.”`,
      img: `./assets/img/img_road/cola_1280.png 221w,
      ./assets/img/img_road/cola.png 388w"
       sizes="(max-width: 1280px) 250px,
              400px" src="./assets/img/img_road/cola.png" alt="cola"`
    },
    {
      id: 2,
      can: `Orange`,
      text: `“Mijn vader is in slaap gevallen. Na een paar lange dagen kan het ook niet anders dat hij moe is. Ik kan niet in slaap komen. Langzaam hoor ik een ritselend geluid door de bomen. Ik ga mijn tent uit om te kijken wat er is. Ik word bij mijn keel gegrepen door een onbekend persoon. Hij wilt al ons voedsel hebben. Ik probeer me los te rukken en op dat moment wil hij mijn keel doorsnijden. Ik schrik wakker.”`,
      img: `./assets/img/img_road/orange_1280.png 221w,
      ./assets/img/img_road/orange.png 388w"
       sizes="(max-width: 1280px) 250px,
              400px" src="./assets/img/img_road/orange.png" alt="orange"`
    },
    {
      id: 3,
      can: `Lemon`,
      text: `“Het enige wat ik zie is zwarte rook. Ik kan niet ademhalen en ik begin in paniek te raken. Alles om mij heen is zwart. Alles, maar dan ook alles. Op het moment dat ik om hulp wil roepen voel ik een verstikkend gevoel in mijn keel. Ik kan nergens heen. Dit is het moment dat ik heen zal gaan. Op het moment dat ik de warmte van het vuur op mijn huid kan voelen, schrik ik wakker.”`,
      img: `./assets/img/img_road/lemon_1280.png 221w,
      ./assets/img/img_road/lemon.png 388w"
       sizes="(max-width: 1280px) 250px,
              400px" src="./assets/img/img_road/lemon.png" alt="lemon"`
    }
  ];

  const createButton = dream => {
    const $button = document.createElement(`button`);
    $button.classList.add(`button__dream`);
    $button.dataset.dream = dream.dream;
    $button.dataset.text = dream.text;
    $button.addEventListener(`click`, handleButtonClick);
    document.querySelector(`.div__dreams--buttons`).appendChild($button);
  };

  const makeButtons = dreams => {
    dreams.forEach(dream => {
      createButton(dream);
    });
  };

  const loadContent = cans => {
    cans.forEach(can => {

      if (can.id === index) {
        console.log('can gevonden');
        createContent(can);
      }
    });
  };

  const createContent = can => {
    $selectContent = document.querySelector(`.div__vending--content`);
    if ($selectContent.childElementCount > 0) {
      $selectContent.classList.remove(`fadein`);
      $selectContent.classList.add(`fadeout`);
      $selectContent.innerHTML = ``;
    }
    $selectContent.classList.add(`fadein`);
    $selectContent.innerHTML = `
    <img class = "image__can" srcset="${can.img}">
    <div class = "container">
    <h2 class="white h2__road h2__road--vending">${can.can}</h2>
    <p class="white p__road--text p__road">${can.text}</p>
    </div>
  `;
  };

  const handleButtonClick = e => {
    const $dream = e.currentTarget;
    const $selectContent = document.querySelector(`.div__dreams--textcontent`);
    if ($selectContent.childElementCount > 0) {
      $selectContent.innerHTML = ``;
    }

    const $h2 = document.createElement(`h2`);
    $h2.classList.add(`white`);
    $h2.classList.add(`h2__road`);
    $h2.classList.add(`h2__road--dream`);
    $h2.textContent = ($dream.dataset.dream);

    const $p = document.createElement(`p`);
    $p.classList.add(`white`);
    $p.classList.add(`p__road--text`);
    $p.classList.add(`p__road`);
    $p.classList.add(`p__dreams`);
    $p.textContent = ($dream.dataset.text);

    $selectContent.appendChild($h2);
    $selectContent.appendChild($p);

  };


  let index = 0;
  const handleClick = () => {
    index = index + 1;
    if (index === 4) {
      index = 1;
    }
    loadContent(cans);
    console.log(index);
    const $vending = document.querySelector(`.image__vending`);

    if ($vending.classList.contains(`shake`)) {
      $vending.classList.remove(`shake`);
      $vending.classList.add(`shake`);
      $vending.style.webkitAnimationPlayState = 'running';
      setTimeout(function () {
        $vending.style.webkitAnimationPlayState = 'paused';
      }, 500);
    }

    $vending.classList.add(`shake`);
    $vending.style.webkitAnimationPlayState = 'running';
    console.log('toegevoegd!');
    setTimeout(function () {
      $vending.style.webkitAnimationPlayState = 'paused';
    }, 500);
  };

  const init = () => {
    if (document.querySelector(`.div__dreams--flex`)) {
      document.querySelector(`.image__vending`).addEventListener(`click`, handleClick);
      makeButtons(dreams);


    }
  };

  init();
}
