{
  const handleCheckEvent = e => {
    getProducts();
  };

  const getProducts = async () => {
    const $form = document.getElementById("form__filter");
    console.log($form);
    const data = new FormData($form);
    const entries = [...data.entries()];
    console.log("entries:", entries);
    const qs = new URLSearchParams(entries).toString();
    console.log("querystring", qs);
    const url = `${$form.getAttribute("action")}?${qs}`;
    console.log("url", url);

    const response = await fetch(url, {
      headers: new Headers({
        Accept: "application/json"
      })
    });

    const products = await response.json();

    handleLoadProducts(products);
    console.log(products);

    window.history.pushState(
      {},
      "",
      `${window.location.href.split("?")[0]}?action=&${qs}`
    );
  };

  const handleLoadProducts = products => {
    const $list = document.querySelector(`.ul__products`);
    $list.innerHTML = products.map(product => createListItem(product)).join(``);
  };

  const createListItem = product => {
    return `
    <li class = "li__product">
      <div class = "li__product--info">
        <a href="">
        <img src="${product.product_image}" alt="${product.title}">
        <p class = "p__product--type tiny uppercase red">${product.type}</p>
        <p class = "p__product--title verysmall uppercase bold">${product.title}</p>
        <p class = "p__product--price red bold uppercase medium ">€${product.price}</p>
        </a>
      </div>
      <div class = "li__product--link">
        <a href=""><img class = "img__cart" src="./assets/img/cart.png" alt="cart"></a>
        <a href="">
          <div class = "li__product--more">
            <p class = "p__product--more tiny ">&rarr; meer info</p>
          </div>
        </a>
        </div>
      </div>
    </li>`;
  };

  const init = () => {
    const $button = document.querySelector(`.button__filter`);
    $button.classList.add(`has-js`);
    const $checkboxes = document.querySelectorAll("input[type=checkbox]");
    console.log($checkboxes);
    $checkboxes.forEach(checkbox => {
      checkbox.addEventListener("click", handleCheckEvent);
    });
  };
  init();
}
