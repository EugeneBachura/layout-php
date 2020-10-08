function newsNavChecked(x) {
  document.querySelector(
    ".newsNav > label:nth-child(" + x + ")"
  ).style.backgroundColor = "#d51522";
  document.querySelector(
    ".newsNav > label:nth-child(" + x + ")"
  ).style.borderColor = "#d51522";

  switch (x) {
    case 1:
      document.querySelector(".newsNav > label:nth-child(2)").style = "";
      document.querySelector(".newsNav > label:nth-child(3)").style = "";
      break;
    case 2:
      document.querySelector(".newsNav > label:nth-child(1)").style = "";
      document.querySelector(".newsNav > label:nth-child(3)").style = "";
      break;
    case 3:
      document.querySelector(".newsNav > label:nth-child(1)").style = "";
      document.querySelector(".newsNav > label:nth-child(2)").style = "";
      break;
    default:
      break;
  }
}
