"use strict";

console.log("test");

const duckRandom = document.querySelector(".random-number");
duckRandom.textContent = Math.trunc(Math.random() * 100000000000000);

const duckName = document.getElementById("duck-name");
const duckEmail = document.getElementById("duck-email");
const duckPhone = document.getElementById("duck-phone");
const duckBtn = document.querySelector(".submit-btn");

const duckInfo = [...document.querySelectorAll(".input-items")];
const duckSubmit = duckInfo.forEach((duck) => duck.value);

console.log(duckName.value);
console.log(duckInfo);
console.log(duckSubmit);

duckBtn.addEventListener("click", function (e) {
  e.preventDefault();
  console.log(duckName.value);
  console.log(duckEmail.value);
  console.log(duckPhone.value);

  console.log("button test");
});
