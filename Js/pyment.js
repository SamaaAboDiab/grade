// =================Global Const====================
const orderBtn = document.querySelector(".order_btn");
const modal = document.querySelector(".container_modal");
const layer = document.querySelector(".layer");
const closeModal = document.querySelector(".close_modal");
const addressDiv = document.querySelector(".address");

const sendBtn = document.querySelector(".send_btn");
// ALL inputs
const inputs = document.querySelectorAll(".form_input");
// form input
const userInput = document.querySelector(".input_user");
const phoneInput = document.querySelector(".input_tel");
const streetInput = document.querySelector(".input_address_street");
const unityInput = document.querySelector(".input_address_unit");
const cityInput = document.querySelector(".input_address_city");
const boycottInput = document.querySelector(".input_address_boycott");
const postalInput = document.querySelector(".input_address_postal");

// form Change
const userChange = document.querySelector(".input_user_change");
const phoneChange = document.querySelector(".input_tel_change");
const streetChange = document.querySelector(".input_address_street_change");
const unityChange = document.querySelector(".input_address_unit_change");
const postalChange = document.querySelector(".input_address_city_change");
const cityChange = document.querySelector(".input_address_boycott_change");
const boycottChange = document.querySelector(".input_address_postal_change");
// modal card
const paymentCard = document.getElementById("card-payment");
const closeCardBtn = document.getElementById("close_visa_card");
const modalCard = document.querySelector(".modal_card");
// modal popup
const popup = document.querySelector(".popup");
const popupBtn = document.querySelector(".popup_btn");

// ---------------------------------Order Total --------------------------------------->
const orderTotal = document.querySelectorAll(".order_total");
// Add Total_Price To orderTotal=> div
orderTotal.forEach((ele) => {
  ele.textContent = window.localStorage.getItem("total_Price");
});

// Add Class Active Of Modal Card And Layer
paymentCard.addEventListener("click", () => {
  modalCard.classList.add("modal_active");
  layer.classList.add("layer_active");
});

// Remove Class Active Of Modal Card And Layer
closeCardBtn.addEventListener("click", () => {
  modalCard.classList.remove("modal_active");
  layer.classList.remove("layer_active");
});

// Add Class Active Of Modal And Layer
orderBtn.addEventListener("click", () => {
  if (addressDiv.innerHTML === "") {
    modal.classList.add("modal_active");
    layer.classList.add("layer_active");
  } else {
    popup.classList.add("modal_active");
    layer.classList.add("layer_active");
  }
});

// Remove Class Active Of Modal And Layer
closeModal.addEventListener("click", () => {
  modal.classList.remove("modal_active");
  layer.classList.remove("layer_active");
  // Function Inputs Empty
  inputsEmpty(inputs);
  // Loop On Inputs Of Change Border Color
  inputs.forEach((input) => {
    input.style.borderColor = "#a9a9a9";
  });
});

// Add Address To AddressDiv And Send Address
sendBtn.addEventListener("click", () => {
  // Chick on Inputs Values
  if (
    userInput.value === "" ||
    phoneInput.value === "" ||
    streetInput.value === "" ||
    unityInput.value === "" ||
    cityInput.value === "" ||
    boycottInput.value === "" ||
    postalInput.value === ""
  ) {
    chickInputs(inputs);
    return;
  } else {
    // Function Add Address
    addAddress();

    const changeBtn = document.querySelector(".change_btn");
    changeBtn.addEventListener("click", () => {
      const modalChange = document.querySelector(".modal_change");
      const closeChangeBtn = document.querySelector(".close_change_btn");
      const doneChangeBtn = document.querySelector(".done_change_btn");

      // Add Class Modal Active & Layer Active
      modalChange.classList.add("modal_active");
      layer.classList.add("layer_active");
      // Function Get Data From addressDiv
      getData();
      // Function Chick On Inputs
      chickInputs(inputs);

      // Event On CloseChangeBtn Of Remove Class Modal_Active & Layer_active
      closeChangeBtn.addEventListener("click", () => {
        modalChange.classList.remove("modal_active");
        layer.classList.remove("layer_active");
      });

      doneChangeBtn.addEventListener("click", () => {
        // Chick On Inputs
        if (
          userChange.value === "" ||
          phoneChange.value === "" ||
          streetChange.value === "" ||
          unityChange.value === "" ||
          cityChange.value === "" ||
          boycottChange.value === "" ||
          postalChange.value === ""
        ) {
          chickInputs(inputs);
          return;
        } else {
          // Add Values Inputs To AddressDiv
          document.getElementById("user-Address").textContent =
            userChange.value;
          document.getElementById("phone-Address").textContent =
            phoneChange.value;
          document.getElementById("street-Address").textContent =
            streetChange.value;
          document.getElementById("unity-Address").textContent =
            unityChange.value;
          document.getElementById("postal-Address").textContent =
            postalChange.value;
          document.getElementById("city-Address").textContent =
            cityChange.value;
          document.getElementById("boycott-Address").textContent =
            boycottChange.value;
          // Remove Class Active Of Modal And Layer
          modalChange.classList.remove("modal_active");
          layer.classList.remove("layer_active");
        }
      });
    });

    // Change innerHTML Of Order Button
    orderBtn.innerHTML = "تأكيد الطلب";
    // Inputs Empty
    inputsEmpty(inputs);

    // Remove Class Active Of Modal And Layer
    modal.classList.remove("modal_active");
    layer.classList.remove("layer_active");
  }
});

// Add Event On popup Button
popupBtn.addEventListener("click", () => {
  popup.classList.remove("modal_active");
  layer.classList.remove("layer_active");
  orderBtn.textContent = "إكمال الطلب";
  document.getElementById("item-payment").innerHTML = "";
  addressDiv.innerHTML = "";
  window.localStorage.clear();
});

// ====================================HANDEL FUNCTIONS ====================================

// Function Inputs Empty
function inputsEmpty(inputs) {
  inputs.forEach((input) => (input.value = ""));
}

// Function Add Address
function addAddress() {
  // Add Data To Address Div From Form
  addressDiv.innerHTML = `
  <h4 class="title_payment">عنوان التسليم</h4>
        <div class="details_payment">
          <div>
            <p class="address_payment">
              <span id='user-Address'>${userInput.value}</span>
              <span> , </span>
              <span id='phone-Address'>${phoneInput.value}+</span>
            </p>

            <p class="address_payment">
              <span id='street-Address'>${streetInput.value}</span>
              <span> / </span>
              <span id='unity-Address'>${unityInput.value}</span>
            </p>

            <p class="address_payment">
              <span id='postal-Address'>${postalInput.value}</span>
              <span> , </span>
              <span id='city-Address'>${cityInput.value}</span>
              <span> - </span>
              <span id='boycott-Address'>${boycottInput.value}</span>
              <span> - </span>
              <span>مصر</span>
            </p>
          </div>

          <a href="javascript:;" class="change_btn">تغير</a>
        </div>
  `;
}

// Function Get Data From addressDiv
function getData() {
  userChange.value = document.getElementById("user-Address").textContent;
  phoneChange.value = document.getElementById("phone-Address").textContent;
  streetChange.value = document.getElementById("street-Address").textContent;
  unityChange.value = document.getElementById("unity-Address").textContent;
  postalChange.value = document.getElementById("postal-Address").textContent;
  cityChange.value = document.getElementById("city-Address").textContent;
  boycottChange.value = document.getElementById("boycott-Address").textContent;
}

// Function Chick on Inputs of Value
function chickInputs(inputs) {
  inputs.forEach((input) => {
    if (input.value === "") {
      input.style.borderColor = "#d9534f";
    } else {
      input.style.borderColor = "#a9a9a9";
    }
    input.addEventListener("keyup", (e) => {
      if (input.value.length > 0) {
        input.style.borderColor = "#a9a9a9";
      }
    });
  });
}
