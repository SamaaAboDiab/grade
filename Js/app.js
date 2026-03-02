/* ======================================= CART ========================================== */
// open and close cart

const cartIcon = document.querySelector("#cart-shop");
const cart = document.querySelector(".cart");
const cartClose = document.querySelector("#cart-close");

// التحقق من وجود العناصر
console.log("✅ جارٍ تحميل الكود...");

// Add Class Active
if (cartIcon && cart) {
  cartIcon.addEventListener("click", () => {
    cart.classList.add("showCart");
    console.log("🛒 تم فتح العربة");
  });
}

// Remove Class Active
if (cartClose && cart) {
  cartClose.addEventListener("click", () => {
    cart.classList.remove("showCart");
    console.log("🛒 تم غلق العربة");
  });
}

// Add Card To Cart & Done
const addCartBtn = document.querySelectorAll(".card_btn");
const cartContent = document.querySelector(".cart_content");
const total = document.querySelector(".total");
const btnBuy = document.querySelector(".btn_buy");
const cartEmpty = document.querySelector(".cart_empty");

console.log("🔍 عدد أزرار الإضافة:", addCartBtn.length);

// Add Event On Btn Shopping Of Remove Class Cart Show
if (cartEmpty && cart) {
  cartEmpty.addEventListener("click", () => {
    cart.classList.remove("showCart");
  });
}

// Empty Array To Store The Cards
let arrayOfCards = [];

// Check if There's Cards In Local Storage
if (localStorage.getItem("cards")) {
  try {
    arrayOfCards = JSON.parse(localStorage.getItem("cards"));
    console.log("📦 تم تحميل البيانات من localStorage:", arrayOfCards.length);
  } catch (e) {
    console.error("خطأ في قراءة localStorage", e);
  }
}

// Trigger Get Data From Local Storage Function
getData();

// Check on Cart Content
function updateCartUI() {
  if (!cartContent || !total || !btnBuy || !cartEmpty) return;
  
  if (cartContent.children.length > 0) {
    total.style.display = "flex";
    btnBuy.style.display = "block";
    cartEmpty.style.display = "none";
  } else {
    total.style.display = "none";
    btnBuy.style.display = "none";
    cartEmpty.style.display = "block";
  }
}

// Initial UI update
updateCartUI();

// Event On Click On Btns Elements
addCartBtn.forEach((btn, index) => {
  btn.addEventListener("click", (event) => {
    console.log(`🔄 تم الضغط على زر الإضافة رقم ${index + 1}`);
    
    const myCard = event.target.closest(".card");
    if (!myCard) return;
    
    const cardImgSrc = myCard.querySelector(".card_image")?.src || "";
    const cardTitle = myCard.querySelector(".card_title")?.textContent || "";
    const cardPriceElement = myCard.querySelector(".card_price") || myCard.querySelector("p");
    const cardPrice = cardPriceElement?.textContent || "0 جنيه";

    if (btn.classList.contains("done")) {
      console.log("⚠️ هذا المنتج مضاف بالفعل");
      return;
    } else {
      addCardToArray(cardImgSrc, cardTitle, cardPrice);
    }

    btn.textContent = "تم أضافة";
    btn.classList.add("done");
    updateCartUI();
  });

  // Check if button should be marked as done from localStorage
  arrayOfCards.forEach((e) => {
    const cardTitle = btn.closest(".card")?.querySelector(".card_title")?.textContent;
    if (cardTitle && e.title === cardTitle) {
      btn.textContent = "تم أضافة";
      btn.classList.add("done");
    }
  });
});

// Click On Cart Element
if (cartContent) {
  cartContent.addEventListener("click", (e) => {
    // Delete Btn
    if (e.target.classList.contains("cart_remove")) {
      const cartBox = e.target.closest(".cart_box");
      if (cartBox) {
        const cardId = cartBox.getAttribute("data-id");
        cartBox.remove();

        // Remove Card From Local Storage
        deleteCardWith(cardId);

        // Delete Class Done & Change TextContent Of Btn
        addCartBtn.forEach((btn) => {
          const cartProductTitle = cartBox.querySelector(".cart_product_title")?.textContent;
          const btnCardTitle = btn.closest(".card")?.querySelector(".card_title")?.textContent;
          
          if (btnCardTitle && cartProductTitle && btnCardTitle === cartProductTitle) {
            btn.classList.remove("done");
            btn.textContent = "أضافة إلى العربة";
          }
        });

        updateCartUI();
        updateCartCount(arrayOfCards);
        updateTotalPrice();
      }
    }
    
    // Handle quantity buttons
    if (e.target.id === "increment" || e.target.id === "decrement") {
      const cartBox = e.target.closest(".cart_box");
      if (cartBox) {
        const numberElement = cartBox.querySelector(".number");
        const decrementBtn = cartBox.querySelector("#decrement");
        let quantity = parseInt(numberElement.textContent) || 1;

        if (e.target.id === "decrement" && quantity > 1) {
          quantity--;
          if (quantity === 1 && decrementBtn) {
            decrementBtn.style.color = "#999";
          }
        } else if (e.target.id === "increment") {
          quantity++;
          if (decrementBtn) {
            decrementBtn.style.color = "#333";
          }
        }

        numberElement.textContent = quantity;
        updateTotalPrice();
      }
    }
  });
}

// Function Add Card To Array
function addCardToArray(cardImgSrc, cardTitle, cardPrice) {
  // Card Data
  const cardData = {
    id: Date.now(),
    src: cardImgSrc,
    title: cardTitle,
    price: cardPrice,
  };

  // Push Card To Array Of Cards
  arrayOfCards.push(cardData);
  // Add Card To Cart
  addToCart(arrayOfCards, cardTitle);
  // Add Cards To Local Storage
  addToLocaleStorage(arrayOfCards);
}

// Function Add Card To Cart
function addToCart(arrayOfCards, cardTitle) {
  if (!cartContent) return;
  
  // Check if item already exists in cart
  const cartItems = cartContent.querySelectorAll(".cart_product_title");
  for (let item of cartItems) {
    if (item.textContent === cardTitle) {
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
      <img src="${card.src}" class="cart_img" alt="${card.title}">
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
  });
  
  updateCartCount(arrayOfCards);
  updateTotalPrice();
}

// Function Add Cards To Local Storage
function addToLocaleStorage(arrayOfCards) {
  try {
    window.localStorage.setItem("cards", JSON.stringify(arrayOfCards));
  } catch (e) {
    console.error("فشل في حفظ البيانات في localStorage", e);
  }
}

// Function Get Data From Local Storage
function getData() {
  let data = window.localStorage.getItem("cards");
  if (data) {
    try {
      let savedCards = JSON.parse(data);
      if (savedCards.length > 0) {
        arrayOfCards = savedCards;
        addToCart(arrayOfCards, "");
      }
      console.log("✅ تم تحميل البيانات من localStorage:", arrayOfCards.length);
    } catch (e) {
      console.error("خطأ في قراءة البيانات من localStorage", e);
    }
  }
}

// Function Remove From Local Storage
function deleteCardWith(cardId) {
  arrayOfCards = arrayOfCards.filter((card) => card.id != cardId);
  addToLocaleStorage(arrayOfCards);
}

// Load Total Price from Local Storage
function loadTotalPrice() {
  const savedTotal = localStorage.getItem("total_Price");
  if (savedTotal) {
    const totalPriceElement = document.querySelector(".total_price");
    if (totalPriceElement) {
      totalPriceElement.textContent = `${savedTotal} جنية`;
    }
  }
}

// Update Total Price
function updateTotalPrice() {
  const totalPriceElement = document.querySelector(".total_price");
  if (!totalPriceElement) return;
  
  const cartBoxes = document.querySelectorAll(".cart_box");
  let total = 0;

  cartBoxes.forEach((cartBox) => {
    const priceElement = cartBox.querySelector(".cart_price")?.textContent || "0";
    const quantityElement = cartBox.querySelector(".number")?.textContent || "1";
    const price = parseFloat(priceElement.replace("جنيه", "").replace(",", "").trim()) || 0;
    const quantity = parseInt(quantityElement) || 1;
    total += price * quantity;
  });

  const formattedTotal = total.toFixed(2);
  totalPriceElement.textContent = `${formattedTotal} جنية`;
  window.localStorage.setItem("total_Price", formattedTotal);
}

// Update Cart Count
function updateCartCount(arrayOfCards) {
  const cartCountElement = document.querySelector(".cart_count");
  if (!cartCountElement) return;
  
  if (arrayOfCards.length > 0) {
    cartCountElement.style.visibility = "visible";
    cartCountElement.textContent = arrayOfCards.length;
  } else {
    cartCountElement.style.visibility = "hidden";
    cartCountElement.textContent = "0";
  }
}

// Load total price on page load
loadTotalPrice();

/* ================================== Filter Products ================================= */
const filterButtons = document.querySelectorAll(".filter_btn");
const productCards = document.querySelectorAll(".card");

console.log("🔍 عدد أزرار الفلتر:", filterButtons.length);
console.log("🔍 عدد البطاقات:", productCards.length);

// Add click event to filter buttons
filterButtons.forEach(button => {
  button.addEventListener("click", function() {
    // Remove active class from all buttons
    filterButtons.forEach(btn => btn.classList.remove("active_btn"));
    
    // Add active class to clicked button
    this.classList.add("active_btn");
    
    // Get filter value
    const filterValue = this.id;
    console.log("🔄 تصفية حسب:", filterValue);
    
    // Filter cards
    productCards.forEach(card => {
      if (filterValue === "all") {
        card.style.display = "block";
      } else if (card.classList.contains(filterValue)) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });
  });
});

// Activate "all" button by default
const allButton = document.querySelector(".filter_btn#all");
if (allButton) {
  allButton.click();
}

console.log("✅ الكود تحمّل بالكامل!");