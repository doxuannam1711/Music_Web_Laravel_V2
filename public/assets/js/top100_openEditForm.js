const editBtns = document.querySelectorAll(".js-action-top100-edit");
const edit = document.querySelector(".js-top100-edit");
const closeBtnTop100FormEdit = document.querySelector(".js-top100-edit-close-btn");


function openTop100EditForm() {
    edit.classList.add("open");
}
//Hàm ẩn login (bỏ class open vào vào login)
function closeTop100EditForm() {
    edit.classList.remove("open");
}

for (const editBtn of editBtns) {
    editBtn.addEventListener("click", openTop100EditForm);
}
closeBtnTop100FormEdit.addEventListener("click", closeTop100EditForm);
