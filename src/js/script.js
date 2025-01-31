{
  const handleCheckEvent = e => {
    getProducts();
  };

  const getProducts = async () => {
    const $form = document.getElementById('form__filter');
    console.log($form);
    const data = new FormData($form);
    const entries = [...data.entries()];
    console.log('entries:', entries);
    const qs = new URLSearchParams(entries).toString();
    console.log('querystring', qs);
    const url = `${$form.getAttribute('action')}?${qs}`;
    console.log('url', url);

    const response = await fetch(url, {
      headers: new Headers({
        Accept: 'application/json'
      })
    });

    const products = await response.json();

    handleLoadProducts(products);
    console.log(products);

    window.history.pushState({},
      '',
      `${window.location.href.split('?')[0]}?action=&${qs}`
    );
  };

  const handleLoadProducts = products => {
    const $list = document.querySelector(`.ul__products`);
    $list.innerHTML = products.map(product => createListItem(product)).join(``);
  };

  const createListItem = product => {
    if (product.title.length > 24) {
      product.title = `${product.title.substring(0, 21)}...`;
    }
    console.log(product.title);
    return `
    <li class = "li__product">
      <div class = "li__product--info">
        <a href="index.php?page=product-detail&amp;id=${product.id}&amp;type=${product.type_id}">
        <img src="${product.product_image}" alt="${product.title}">
        <p class = "p__product--type tiny uppercase red">${product.type}</p>
        <p class = "p__product--title verysmall uppercase bold">${product.title}</p>
        <p class = "p__product--price red bold uppercase medium ">€${product.price}</p>
        </a>
      </div>
      <div class = "li__product--link">
        <a href="index.php?page=product-detail&amp;id=${product.id}&amp;type=${product.type_id}">
          <div class = "li__product--more">
            <p class = "p__product--more tiny ">&rarr; meer info</p>
          </div>
        </a>
      </div>
    </li>`;
  };



  const handleSubmit = e => {
    console.log('test');

  };

  const init = () => {
    const $button = document.querySelector(`.button__filter`);
    if ($button) {
      $button.classList.add(`has-js`);
    }

    if (document.querySelector('.button__product--detail')) {
      const $cartbutton = document.querySelector('.button__product--detail');
      console.log($cartbutton);
      $cartbutton.addEventListener('click', handleSubmit);
    }

    const $checkboxes = document.querySelectorAll('input[type=checkbox]');
    console.log($checkboxes);
    $checkboxes.forEach(checkbox => {
      checkbox.addEventListener('click', handleCheckEvent);



    });
  };
  init();
}
