function change() {
  let window = document.getElementById("popup");
  window.style.visibility = "visible";
  // window.style.opacity = 1;
}

function close() {
  // let window1 = document.getElementById("popup");
  // window1.style.visibility = "hidden";
  // window1.style.opacity = 0;
  //
  alert("hello");
}

function change_1() {
  //кнопка минус
  let minus = document.createElement("input");
  minus.type = "button";
  minus.id = "buttonMinus";
  minus.value = "-";
  let beforeMinus = document.getElementById("quantity");
  // beforeMinus.appendChild(minus);
  beforeMinus.before(minus);
  // beforeMinus.insertBefore(minus, beforeMinus);
  // document.getElementById("quantity").appendChild(minus);
  //кнопка применить
  let applay = document.createElement("input");
  applay.type = "button";
  applay.id = "buttonApply";
  applay.value = "Применить";
  applay.onclick = function appay() {
    location.reload();
  };
  document.getElementById("buttons").appendChild(applay);
  let del = document.getElementById("buttonCange");
  del.remove();
}
