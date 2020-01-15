{
  const $form = document.querySelector('.form--detail');
  const $active = document.querySelector('.error--active');

  const init = () => {

    if ($form) {
      $form.noValidate = true;
    }
    if ($form) {
      $form.querySelectorAll('input').forEach($input => {
        $input.addEventListener('blur', validateInput);
        $input.addEventListener('input', handleInput);
      });
      $form.addEventListener('submit', handleSubmit);
    }
  };
  const handleSubmit = event => {
    if ($form.checkValidity()) {} else {
      event.preventDefault();
      $form.querySelectorAll('input').forEach(showValidationMessage);
    }
  };

  const validateInput = event => {
    const $input = event.currentTarget;
    showValidationMessage($input);
  };

  const showValidationMessage = $input => {
    const $error = $input.parentElement.querySelector('.error');
    if ($input.checkValidity()) {
      console.log('is valid');
    } else {
      console.log('niet valid');
      if ($input.validity.valueMissing) {
        $error.textContent = `Oeps! Je hebt niks ingevuld!`;
        $input.style.borderColor = 'red';

      } else if ($input.validity.typeMismatch) {
        $error.textContent = `Oeps! Vul het juiste item in!`;
        $input.style.borderColor = 'red';

      } else if ($input.validity.tooShort) {
        $error.textContent = `Oeps! Je hebt te weinig ingevuld`;
        console.log('error');
        $input.style.borderColor = 'red';

      } else {
        console.log($input.validity);
      }
    }
  };

  const handleInput = event => {
    const $input = event.currentTarget;
    const $error = $input.parentElement.querySelector('.error');
    if ($input.checkValidity()) {
      $error.textContent = '';
      $input.style.borderColor = '#7FFF00';
    }

  };

  init();
}
