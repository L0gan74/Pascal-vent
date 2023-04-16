import Swiper, { Navigation } from 'swiper';
import 'swiper/css/bundle';
import axios from 'axios';

const button1 = document.querySelector("#button1");
const button2 = document.querySelector("#button2");
const div1 = document.querySelector("#div1");
const div2 = document.querySelector("#div2");

if (button1 !== null) {
  button1.addEventListener("click", () => {
    div1.classList.add("active");
    div2.classList.remove("active");
    button1.classList.add("extra-class");
    button2.classList.remove("extra-class");
  });
}

if (button2 !== null) {
  button2.addEventListener("click", () => {
    div1.classList.remove("active");
    div2.classList.add("active");
    button1.classList.remove("extra-class");
    button2.classList.add("extra-class");
  });
}

const swiper = new Swiper(".mySwiper", {
  modules: [Navigation],
  slidesPerView: 4,
  spaceBetween: 30,
  grabCursor: true,
  slidesOffsetBefore: 150,
  slidesOffsetAfter: 400,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    360: {
      slidesPerView: 1,
      spaceBetween: 30,
      slidesOffsetBefore: 10,
      slidesOffsetAfter: 10,
    },
    1200: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
});

const swiper2 = new Swiper(".mySwiper2", {
  modules: [Navigation],
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

if (popup !== null) {
  openButton.addEventListener("click", showPopup);
  closeButton.addEventListener("click", hidePopup);
  popup.addEventListener("click", function (event) {
    if (event.target === this) {
      hidePopup();
    }
  });
}

const popup2 = document.querySelector(".popup2");
if (popup2 !== null) {
  const closeButton2 = document.querySelector(".close-button2");
  document.querySelectorAll(".open-button2").forEach((openBtn2) => {
    openBtn2.addEventListener('click', () => {
      popup2.classList.add("active");
    });
  });
  closeButton2.addEventListener("click", hidePopup2);
  popup2.addEventListener("click", function (event) {
    if (event.target === this) {
      hidePopup2();
    }
  });
}

function hidePopup2() {
  popup2.classList.remove("active");
}

document.addEventListener('DOMContentLoaded', () => {
  let forms = document.querySelectorAll('.request');
  if (forms[0] !== null) {
    forms.forEach((form) => {
      let elements = form.elements;
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        e.stopPropagation();
        document.querySelectorAll('.form-error').forEach(e => e.remove());
        axios.post('/api/send', { name: elements[0].value, tel: elements[1].value })
          .then(response => {
            form.reset();
            hidePopup2();
          })
          .catch(error => {
            let errors = error.response.data.errors;
            if (errors.hasOwnProperty('name')) {
              let div = document.createElement('div');
              div.className = "form-error";
              div.innerHTML = errors.name;
              elements[0].after(div);
            }
            if (errors.hasOwnProperty('tel')) {
              let div = document.createElement('div');
              div.className = "form-error";
              div.innerHTML = errors.tel;
              elements[1].after(div);
            }
          });
      });
    });
  }
});