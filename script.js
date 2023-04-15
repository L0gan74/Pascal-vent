const button1 = document.querySelector("#button1");
const button2 = document.querySelector("#button2");
const div1 = document.querySelector("#div1");
const div2 = document.querySelector("#div2");

button1.addEventListener("click", () => {
  div1.classList.add("active");
  div2.classList.remove("active");
  button1.classList.add("extra-class");
  button2.classList.remove("extra-class");
});

button2.addEventListener("click", () => {
  div1.classList.remove("active");
  div2.classList.add("active");
  button1.classList.remove("extra-class");
  button2.classList.add("extra-class");
});

var swiper = new Swiper(".mySwiper", {
  slidesPerView: "auto",
  slidesPerView: 4,
  spaceBetween: 30,
  centeredSlides: true,
  grabCursor: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper = new Swiper(".mySwiper2", {
  slidesPerView: "auto",

  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

const openButton = document.querySelector(".open-button");
const popup = document.querySelector(".popup");
const closeButton = document.querySelector(".close-button");

function showPopup() {
  popup.classList.add("active");
}

function hidePopup() {
  popup.classList.remove("active");
}

openButton.addEventListener("click", showPopup);
closeButton.addEventListener("click", hidePopup);
popup.addEventListener("click", function (event) {
  if (event.target === this) {
    hidePopup();
  }
});

const openButton2 = document.querySelector(".open-button2");
const popup2 = document.querySelector(".popup2");
const closeButton2 = document.querySelector(".close-button2");

function showPopup() {
  popup2.classList.add("active");
}

function hidePopup() {
  popup2.classList.remove("active");
}

openButton2.addEventListener("click", showPopup);
closeButton2.addEventListener("click", hidePopup);
popup2.addEventListener("click", function (event) {
  if (event.target === this) {
    hidePopup();
  }
});

const openButton3 = document.querySelector(".open-button3");
const popup3 = document.querySelector(".popup3");
const closeButton3 = document.querySelector(".close-button3");

function showPopup() {
  popup3.classList.add("active");
}

function hidePopup() {
  popup3.classList.remove("active");
}

openButton3.addEventListener("click", showPopup);
closeButton3.addEventListener("click", hidePopup);
popup3.addEventListener("click", function (event) {
  if (event.target === this) {
    hidePopup();
  }
});

function toggleMenu() {
  const menuWrapper = document.querySelector(".menu-wrapper");

  if (menuWrapper.style.display === "block") {
    menuWrapper.style.display = "none";
    document.body.style.overflow = "";
  } else {
    menuWrapper.style.display = "block";
    document.body.style.overflow = "hidden";
  }
}

document.addEventListener("click", function (event) {
  const target = event.target;
  const menuWrapper = document.querySelector(".menu-wrapper");

  if (!target.closest(".menu") && !target.closest(".menu-toggler")) {
    menuWrapper.style.display = "none";
    document.body.style.overflow = "";
  }
});
