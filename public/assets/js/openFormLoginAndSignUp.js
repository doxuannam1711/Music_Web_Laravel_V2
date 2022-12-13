// Login
const loginBtns = document.querySelectorAll(".js-action-login");
const login = document.querySelector(".js-login");
const closeBtnFormLogin = document.querySelector(".js-login-close-btn");
const loginContainer = document.querySelector(".js-login-container");

//Hàm hiển thị login (thêm class open vào vào login)
function openLoginForm() {
  login.classList.add("open");
}
//Hàm ẩn login (bỏ class open vào vào login)
function closeLoginForm() {
  login.classList.remove("open");
}

for (const loginBtn of loginBtns) {
  loginBtn.addEventListener("click", openLoginForm);
}
closeBtnFormLogin.addEventListener("click", closeLoginForm);
login.addEventListener("click", closeLoginForm);
//Ngăn hiện tượng "nổi bọt" khi muốn click vào login để closeBuyTicket
loginContainer.addEventListener("click", function (event) {
  event.stopPropagation();
});

//Sign up
const signUpBtns = document.querySelectorAll(".js-action-signUp");
const signUp = document.querySelector(".js-signUp");
const closeBtnFormSignUp = document.querySelector(".js-signUp-close-btn");
const signUpContainer = document.querySelector(".js-signUp-container");

//Hàm hiển thị login (thêm class open vào vào login)
function openSignUpForm() {
  signUp.classList.add("open");
}
//Hàm ẩn login (bỏ class open vào vào login)
function closeSignUpForm() {
  signUp.classList.remove("open");
}

for (const signUpBtn of signUpBtns) {
  signUpBtn.addEventListener("click", openSignUpForm);
}
closeBtnFormSignUp.addEventListener("click", closeSignUpForm);
signUp.addEventListener("click", closeSignUpForm);
//Ngăn hiện tượng "nổi bọt" khi muốn click vào login để closeBuyTicket
signUpContainer.addEventListener("click", function (event) {
  event.stopPropagation();
});
