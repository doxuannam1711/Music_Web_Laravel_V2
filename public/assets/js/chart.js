
const btnEditChartEl = document.querySelectorAll(".chart__btn-edit")
const formEditEl = document.querySelector(".app_edit")
const btnCloseEditEl = document.querySelector(".btn-close-edit")
const btnUpdateEditEl = document.querySelector(".btn-close-update")
const textTitleChartEditEl = document.querySelector(".chart__text-title")
const textSingerCharEdittEl = document.querySelector(".chart__text-singer")
const textImageChartEditEl = document.querySelector(".chart__file-image")
const textTitleChartEls = document.querySelectorAll(".info__title")
const textSingerChartEls = document.querySelectorAll(".info__author")
const fileImageChartEls = document.querySelectorAll(".media__thumb")

// console.log(btnEditChartEl)


var key

btnEditChartEl.forEach(function(btn) {
    btn.addEventListener("click", function() {
        key = btn.parentElement.getAttribute("value")
        formEditEl.style.display = "block"
        console.log(key)

    })
})


btnCloseEditEl.addEventListener("click", function() {
    formEditEl.style.display = "none"
})

btnUpdateEditEl.addEventListener("click", function() {

    formEditEl.style.display = "none"

    textTitleChartEls[key-1].innerHTML = textTitleChartEditEl.value
    textSingerChartEls[key-1].innerHTML = textSingerCharEdittEl.value

    var stringTextImg = String(textImageChartEditEl.value)
    console.log(stringTextImg);
    var stringNew = stringTextImg.substring(12)
    console.log(stringNew)
    fileImageChartEls[key-1].style.backgroundImage = "url('./assets/img/Zingchart/" + stringNew
})