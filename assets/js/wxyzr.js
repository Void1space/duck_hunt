"use strict";

console.log("test");

const duckBtn = document.getElementById("submit-btn");

console.log(duckBtn);
duckBtn.addEventListener("click", function (e) {
  e.preventDefault();
  console.log(duckName.value);
  console.log(duckEmail.value);
  console.log(duckPhone.value);

  console.log("button test");
});
