function add() {
  //вывод модального окна
  let window = document.getElementById("popupAdd");
  window.style.visibility = "visible";
  window.style.opacity = 1;
}

function closeWindow() {
  let window1 = document.getElementById("popupAdd");
  window1.style.visibility = "hidden";
  window1.style.opacity = 0;
}
