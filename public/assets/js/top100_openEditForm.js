const editBtns = document.querySelectorAll(".js-action-top100-edit");
const edit = document.querySelector(".js-top100-edit");
const closeBtnTop100FormEdit = document.querySelector(".js-top100-edit-close-btn");

const top100EditTitle = document.querySelector(".top100-edit-input-title")
const top100EditSingers = document.querySelector(".top100-edit-input-singers")
const top100EditImage = document.querySelector(".top100-edit-input-image")
const top100Save = document.querySelector("#top100-edit-btnSave")

const textTitleTop100 = document.querySelectorAll(".top100__title-text")
const textSingersTop100 = document.querySelectorAll(".top100__singers-text")
const imageTop100El = document.querySelectorAll(".card-image")

var key

function closeTop100EditForm() {
    edit.classList.remove("open");
}





for (const editBtn of editBtns) {
    editBtn.addEventListener("click", function(){
        edit.classList.add("open")
        key = editBtn.parentElement.getAttribute("value")
        console.log(key)
    })


}
closeBtnTop100FormEdit.addEventListener("click", closeTop100EditForm);


top100Save.addEventListener("click", function() {
    textTitleTop100[key-1].innerHTML = top100EditTitle.value
    textSingersTop100[key-1].innerHTML = top100EditSingers.value
    console.log(top100EditImage.value)
    var stringTextImg = String(top100EditImage.value)
    var stringNew = stringTextImg.substring(12)
    console.log(stringNew);
    // imageTop100El[key-1].children.style.backgroundImage = "url('./assets/img/Zingchart/" + stringNew


    imageTop100El[key-1].children[0].src = "./assets/img/top100/" + stringNew
    console.log(imageTop100El[key-1].children[0].src)
    edit.classList.remove("open");

})
    // textTitleTop100[key-1].innerHTML = top100EditTitle.value
    // textSingersTop100[key-1].innerHTML = top100EditSingers.value
    // console.log(top100EditImage.value)

    // console.log(stringNew)
    // 


