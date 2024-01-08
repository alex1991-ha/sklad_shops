function change1() {
  //вывод модального окна
  let window = document.getElementById("popup");
  window.style.visibility = "visible";
  window.style.opacity = 1;
  ("<?php $PC->output_data_in_popup(1); ?>");
}
function change2() {
  //вывод модального окна
  let window = document.getElementById("popup");
  window.style.visibility = "visible";
  window.style.opacity = 1;
  ("<?php $PC->output_data_in_popup(2); ?>");
}

function closeWindow() {
  let window1 = document.getElementById("popup");
  window1.style.visibility = "hidden";
  window1.style.opacity = 0;
}
