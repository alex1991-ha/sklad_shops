class ModalWindows {
  closeWindows(IdElementa) {
    let Element = document.getElementById(IdElementa);
    Element.style.visibility = "hidden";
    Element.style.opacity = 0;
  }
}
