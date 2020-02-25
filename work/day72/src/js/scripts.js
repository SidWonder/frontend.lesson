
//Menu
$(document).ready(function () {
  let link = $(".menu-link");
  let link_active = $(".menu-link_active");
  let menu = $(".menu");
  let nav_link = $(".menu a");

  link.click(function () {
    link.toggleClass("menu-link_active");
    menu.toggleClass("menu_active");
  });

  nav_link.click(function () {
    link.toggleClass("menu-link_active");
    menu.toggleClass("menu_active");
  });
});