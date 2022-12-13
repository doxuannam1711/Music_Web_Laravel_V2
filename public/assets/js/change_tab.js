function display_none(){
   document.getElementById("tabKhamPha").classList.add("display-none");
   document.getElementById("tabChart").classList.add("display-none");
   document.getElementById("tabNhacMoi").classList.add("display-none");
   document.getElementById("tabTheLoai").classList.add("display-none");
   document.getElementById("tabTop100").classList.add("display-none");
}
display_none();


// Tab ca nhan
function changeTo_tabCaNhan() {
  document.getElementById("tabCaNhan").style.display = "block";
  document.getElementById("tabKhamPha").style.display= "none";
  document.getElementById("tabChart").style.display = "none";
  document.getElementById("tabNhacMoi").style.display = "none";
  document.getElementById("tabTheLoai").style.display = "none";
  document.getElementById("tabTop100").style.display = "none";
}

// Tab kham pha
function changeTo_tabKhamPha() {
  document.getElementById("tabCaNhan").style.display = "none";
  document.getElementById("tabKhamPha").style.display = "block";
  document.getElementById("tabChart").style.display = "none";
  document.getElementById("tabNhacMoi").style.display = "none";
  document.getElementById("tabTheLoai").style.display = "none";
  document.getElementById("tabTop100").style.display = "none";
}

// Tab Chart
function changeTo_tabChart() {
  document.getElementById("tabCaNhan").style.display = "none";
  document.getElementById("tabKhamPha").style.display = "none";
  document.getElementById("tabChart").style.display = "block";
  document.getElementById("tabNhacMoi").style.display = "none";
  document.getElementById("tabTheLoai").style.display = "none";
  document.getElementById("tabTop100").style.display = "none";
}

// Tab nhac moi
function changeTo_tabNhacMoi() {
  document.getElementById("tabCaNhan").style.display = "none";
  document.getElementById("tabKhamPha").style.display = "none";
  document.getElementById("tabChart").style.display = "none";
  document.getElementById("tabNhacMoi").style.display = "block";
  document.getElementById("tabTheLoai").style.display = "none";
  document.getElementById("tabTop100").style.display = "none";
}

// Tab the loai
function changeTo_tabTheLoai() {
   document.getElementById("tabCaNhan").style.display = "none";
   document.getElementById("tabKhamPha").style.display = "none";
   document.getElementById("tabChart").style.display = "none";
   document.getElementById("tabNhacMoi").style.display = "none";
   document.getElementById("tabTheLoai").style.display = "block";
   document.getElementById("tabTop100").style.display = "none";
}

// Tab top 100
function changeTo_tabTop100() {
  document.getElementById("tabCaNhan").style.display = "none";
  document.getElementById("tabKhamPha").style.display = "none";
  document.getElementById("tabChart").style.display = "none";
  document.getElementById("tabNhacMoi").style.display = "none";
  document.getElementById("tabTheLoai").style.display = "none";
  document.getElementById("tabTop100").style.display = "block";
}


