const button1 = document.querySelector('#button1');
const button2 = document.querySelector('#button2');
const div1 = document.querySelector('#div1');
const div2 = document.querySelector('#div2');

button1.addEventListener('click', () => {
  div1.classList.add('active');
  div2.classList.remove('active');
  button1.classList.add('extra-class');
  button2.classList.remove('extra-class');
});

button2.addEventListener('click', () => {
  div1.classList.remove('active');
  div2.classList.add('active');
  button1.classList.remove('extra-class');
  button2.classList.add('extra-class');
});