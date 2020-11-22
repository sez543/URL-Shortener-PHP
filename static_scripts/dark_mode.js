const button = document.querySelector(".side_button");
const body = document.querySelector("#container");

button.addEventListener("click", () => {
  if (body.getAttribute("class") == "darkmode") {
    body.setAttribute("class", "lightmode");
  } else {
    body.setAttribute("class", "darkmode");
  }
});
