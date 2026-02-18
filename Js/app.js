/* =======================================CART========================================== */
// open and close cart

const cartIcon = document.querySelector("#cart-shop");
const cart = document.querySelector(".cart");
const cartClose = document.querySelector("#cart-close");

// Add Class Active
cartIcon.addEventListener("click", () => cart.classList.add("showCart"));

// Remove Class Active
cartClose.addEventListener("click", () => cart.classList.remove("showCart"));

// Add Card To  Cart & Done
const addCartBtn = document.querySelectorAll(".card_btn");
const cartContent = document.querySelector(".cart_content");
const total = document.querySelector(".total");
const btnBuy = document.querySelector(".btn_buy");
const cartEmpty = document.querySelector(".cart_empty");

// Add Event On Btn Shopping Of Remove Class Cart Show
cartEmpty.addEventListener("click", () => {
  cart.classList.remove("showCart");
});

// Empty Array To Store The Cards
let arrayOfCards = [];

// Check if Theres Cards In Locale Storage
if (localStorage.getItem("cards")) {
  arrayOfCards = JSON.parse(localStorage.getItem("cards"));
}

// Trigger Get Data From Locale Storage Function
getData();

// Check on Cart Content
if (cartContent.children.length !== 0) {
  total.style.display = "flex";
  btnBuy.style.display = "block";
  cartEmpty.style.display = "none";
}

// Event On Click On Btns Elements
addCartBtn.forEach((btn) => {
  btn.addEventListener("click", (event) => {
    const myCard = event.target.closest(".card");
    const cardImgSrc = myCard.querySelector(".card_image").src;
    const cardTitle = myCard.querySelector(".card_title").textContent;
    const cardPrice = myCard.querySelector("p").textContent;

    if (btn.classList.contains("done")) {
      return;
    } else {
      addCardToArray(cardImgSrc, cardTitle, cardPrice);
    }

    btn.textContent = "تم أضافة";
    btn.classList.add("done");
    total.style.display = "flex";
    btnBuy.style.display = "block";
    cartEmpty.style.display = "none";
  });

  arrayOfCards.forEach((e) => {
    if (
      btn.parentElement.querySelector(".card_title").textContent === e.title
    ) {
      btn.textContent = "تم أضافة";
      btn.classList.add("done");
    }
  });
});

// Chick On Card Element
cartContent.addEventListener("click", (e) => {
  // Delete Btn
  if (e.target.classList.contains("cart_remove")) {
    // Remove CartBox Form CartContent
    e.target.parentElement.parentElement.remove();

    // Remove Card From Locale Storage
    deleteCardWith(
      e.target.parentElement.parentElement.getAttribute("data-id")
    );

    // Delete Class Done & Change TextContent Of Btn
    addCartBtn.forEach((btn) => {
      if (
        btn.parentElement.querySelector(".card_title").textContent ===
        e.target.parentElement.querySelector(".cart_product_title").textContent
      ) {
        btn.classList.remove("done");
        btn.textContent = "اضافة إلى العربة";
      }
    });

    // Check On Cart Content Of Display Total Div
    if (cartContent.children.length === 0) {
      total.style.display = "none";
      btnBuy.style.display = "none";
      cartEmpty.style.display = "block";
    }

    // Function Updata Cart Count
    updateCartCount(arrayOfCards);
    // Function Updata Total Price
    updateTotalPrice();
  }
});

// Function Add Card To Array
function addCardToArray(cardImgSrc, cardTitle, cardPrice) {
  // Card Data
  const cardData = {
    id: Date.now(),
    src: cardImgSrc,
    title: cardTitle,
    price: cardPrice,
    completed: false,
  };

  // Push Card To Array Of Cards
  arrayOfCards.push(cardData);
  // Add Card To Cart
  addToCart(arrayOfCards, cardTitle);
  // Add Cards To Locale Storage
  addToLocaleStorage(arrayOfCards);
}

// Function Add Card To Cart
function addToCart(arrayOfCards, cardTitle) {
  const cartItems = cartContent.querySelectorAll(".cart_product_title");
  for (let i of cartItems) {
    if (i.textContent === cardTitle) {
      return;
    }
  }

  // Empty cartContent Div
  cartContent.innerHTML = "";
  // Loop On Array Of Cards
  arrayOfCards.forEach((card) => {
    const cartBox = document.createElement("div");
    cartBox.className = "cart_box";
    cartBox.setAttribute("data-id", card.id);

    cartBox.innerHTML = `
    <img src="${card.src}" class="cart_img">
    <div class="cart_detail">
      <p class="cart_product_title">${card.title}</p>
      <span class="cart_price">${card.price}</span>
      <div class="cart_quantity">
        <button id="increment">+</button>
        <span class="number">1</span>
        <button id="decrement">-</button>
      </div>
      <i class="fa-solid fa-trash cart_remove"></i>
    </div>
  `;
    cartContent.appendChild(cartBox);

    let cartQuantity = cartBox.querySelector(".cart_quantity");
    cartQuantity.addEventListener("click", (e) => {
      const numberElement = cartBox.querySelector(".number");
      const decrementBtn = cartBox.querySelector("#decrement");
      let quantity = numberElement.textContent;

      if ((e.target.id === "decrement") & (quantity > 1)) {
        quantity--;
        if (quantity === 1) {
          decrementBtn.style.color = "#999";
        }
      } else if (e.target.id === "increment") {
        quantity++;
        decrementBtn.style.color = "#333";
      }

      numberElement.textContent = quantity;
      updateTotalPrice();
    });
  });
  updateCartCount(arrayOfCards);
  updateTotalPrice();

  arrayOfCards.forEach((e) => {
    if (e.completed === false) {
      e.completed = true;
    }
  });
}

// Function Add Cards To Locale Storage
function addToLocaleStorage(arrayOfCards) {
  window.localStorage.setItem("cards", JSON.stringify(arrayOfCards));
}

// Function Get Data From Locale Storage
function getData() {
  let data = window.localStorage.getItem("cards");
  if (data) {
    cards = JSON.parse(data);
    addToCart(cards);
  }
}

// Function Remove From Locale Storage
function deleteCardWith(cardId) {
  arrayOfCards = arrayOfCards.filter((card) => card.id != cardId);
  addToLocaleStorage(arrayOfCards);
}

// Update Total Price
function updateTotalPrice() {
  let totalPriceElement = document.querySelector(".total_price");
  const cartBoxes = document.querySelectorAll(".cart_box");
  let total = 0;

  cartBoxes.forEach((cartBox) => {
    const priceElement = cartBox.querySelector(".cart_price").textContent;
    const quantityElement = cartBox.querySelector(".number");
    const price = priceElement.replace("جنيه", "");
    const quantity = quantityElement.textContent;
    total += Number(price) * Number(quantity);
  });

  totalPriceElement.textContent = `${Number(total.toFixed(2))} جنية`;

  window.localStorage.setItem("total_Price", Number(total.toFixed(2)));
}

// Function Count

function updateCartCount(arrayOfCards) {
  const cartCountElement = document.querySelector(".cart_count");
  if (arrayOfCards.length > 0) {
    cartCountElement.style.visibility = "visible";
    cartCountElement.textContent = arrayOfCards.length;
  } else {
    cartCountElement.style.visibility = "hidden";
    cartCountElement.textContent = arrayOfCards.length;
  }
}

// ================================== Filter Products =================================>
const allFilterCards = document.querySelectorAll(".card");
const allFilterBtns = document.querySelectorAll(".filter_btn");

allFilterBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    showFilterContent(btn);
  });
});

function showFilterContent(btn) {
  allFilterCards.forEach((card) => {
    if (card.classList.contains(btn.id)) {
      removeActiveBtn();
      btn.classList.add("active_btn");
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });
}

function removeActiveBtn() {
  allFilterBtns.forEach((btn) => {
    btn.classList.remove("active_btn");
  });
}
