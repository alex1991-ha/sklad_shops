function add() {
  //вывод модального окна
  let add = document.getElementById("popupAdd");
  add.style.visibility = "visible";
  add.style.opacity = 1;
}

function collect() {
  let collect = document.getElementById("popupСollect");
  collect.style.visibility = "visible";
  collect.style.opacity = 1;
}

function closeWindow() {
  let Add = new ModalWindows();
  Add.closeWindows("popupAdd");

  let collect = new ModalWindows();
  collect.closeWindows("popupСollect");
}
