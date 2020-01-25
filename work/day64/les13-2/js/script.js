var btn1 = document.getElementById("btn1");
var btn2 = document.getElementById("btn2");
var main = document.getElementById("main");
var mylist = document.getElementById("list");
var ul = document.getElementsByTagName("ul");
var story = mylist.getElementsByClassName("item");
var popup = document.getElementsByClassName("popup")[0];
var close = document.querySelector(".close");

console.log(btn1);
console.log(btn2);
console.log(ul[0]);
console.log(story[0]);

// Добавление стиля
// main.style.background = "green";

function addItem() {
  var nevli = document.createElement("li");
  nevli.innerHTML = "Новая задача";
  nevli.className = "item";
  mylist.appendChild(nevli);

  popup.style.display = "none";
}

function delItem() {
  mylist.removeChild(story[0]);

  if (story.length == 0) {
    popup.style.display = "block";
  }
}

function closePopup() {
  popup.style.display = "none";
}

btn1.addEventListener("click", addItem);
btn2.addEventListener("click", delItem);
close.addEventListener("click", closePopup);
