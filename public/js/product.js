// SLIDER

var swiper = new Swiper('.swiper', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  
  const quantity = document.querySelector('.product_quantity');
  const buttons = document.querySelectorAll('#plus-btn, #minus-btn');
  
  // TOTAL
  
  function update_total() {
    const quantity = parseFloat(document.querySelector('#quantity').value);
    console.log(quantity);
    const price = parseFloat(
      document.querySelector('.product__price--actual').getAttribute('data-value')
    );
    const total = parseFloat(quantity * price);
    if (!isNaN(total)) {
      document.querySelector('.product__footer-total').innerHTML =
        'Total: €' + total.toFixed(2);
    }
  }
  
  quantity.addEventListener('input', update_total);
  
  // COUNTER
  
  let minusBtn = document.getElementById('minus-btn');
  let plusBtn = document.getElementById('plus-btn');
  
  minusBtn.addEventListener('click', () => {
    const quantity = document.querySelector('.product_quantity');
    if (parseInt(quantity.value) > 100) {
      quantity.value = 100;
      update_total();
    } else if (parseInt(quantity.value) > 1) {
      quantity.value -= 1;
      update_total();
    } else {
      quantity.value = 1;
      update_total();
    }
  });
  
  plusBtn.addEventListener('click', () => {
    const quantity = document.querySelector('.product_quantity');
    if (parseInt(quantity.value) < 100) {
      quantity.value = parseInt(quantity.value) + 1;
      update_total();
    } else if (parseInt(quantity.value) > 100) {
      quantity.value = 100;
      update_total();
    } else {
      quantity.value = 1;
      update_total();
    }
  });
  
  // SIZE CHOOSE
  const sizeButtons = document.querySelectorAll('.size-button');
  const selectedSize = document.querySelector('#selected-size');
  const firstSize = document.querySelector('.size-button:first-child');
  firstSize.classList.add('selected');
  
  sizeButtons.forEach((button) => {
    button.addEventListener('click', () => {
      sizeButtons.forEach((btn) => btn.classList.remove('selected'));
      button.classList.add('selected');
      selectedSize.textContent = button.getAttribute('data-size');
    });
  });
  
  // TOOGLE SPECIFICATIONS/CARE/REVIEWS
  
  const btns = document.querySelectorAll('.product__buttons button');
  
  const productDetails = document.querySelector('.product__details');
  const productReviews = document.querySelector('.product__reviews');
  const productCare = document.querySelector('.product__care');
  const firstReview = document.querySelector('.reviews-list li:first-child');
  
  const btnSpecifications = document.getElementById('product-specifications');
  const btnCare = document.getElementById('product-care');
  const btnReviews = document.getElementById('product-reviews');
  
  for (button of btns) {
    button.addEventListener('click', function () {
      if (this.classList.contains('product-reviews')) {
        btnSpecifications.classList.remove('product__button-clicked');
        btnCare.classList.remove('product__button-clicked');
        btnReviews.classList.toggle('product__button-clicked');
  
        productDetails.classList.remove('active');
        productReviews.classList.toggle('active');
        productCare.classList.remove('active');
      } else if (this.classList.contains('product-specifications')) {
        btnSpecifications.classList.toggle('product__button-clicked');
        btnCare.classList.remove('product__button-clicked');
        btnReviews.classList.remove('product__button-clicked');
  
        productDetails.classList.toggle('active');
        productReviews.classList.remove('active');
        productCare.classList.remove('active');
      } else {
        btnSpecifications.classList.remove('product__button-clicked');
        btnCare.classList.toggle('product__button-clicked');
        btnReviews.classList.remove('product__button-clicked');
  
        productDetails.classList.remove('active');
        productReviews.classList.remove('active');
        productCare.classList.toggle('active');
      }
    });
  }
  
  // SLIDER = RELATED PRODUCTS
  
  // var swiper = new Swiper(".myswiper", {
  //   slidesPerView: 3,
  //   spaceBetween: 30,
  //   pagination: {
  //     el: ".swiper-pagination",
  //     clickable: true,
  //   },
  // });
  