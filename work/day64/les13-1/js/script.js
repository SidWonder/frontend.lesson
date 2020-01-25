var zad = window.prompt("Какую задачу запускаем 1 vs 2", 2);

//Задача1
/*
Если пользователю больше 18 и он подписан на рассылку, то доступ разрешен.
Иначе доступ запрещен.
*/
if (zad == 1) {
  var userName, userAge, userSubscr;

  function AccessAllowed() {
    window.alert("Доступ разрешен");
    console.log("Пользователь: " + userName + " допущен");
  }

  function AccessDenied() {
    window.alert("Доступ запрещен");
    console.log("В доступе отказано");
  }

  userName = window.prompt("Как вас зовут", "NoName");
  userAge = window.prompt("Сколько вам лет", "0");
  if (userAge > 18) {
    userSubscr = window.confirm("Подписаны ли вы на рассылку?");
    if (userSubscr == true) {
      AccessAllowed();
    } else {
      AccessDenied();
    }
  } else {
    AccessDenied();
  }
}

// Задача 2
/*
Пользователь вводит ширину и высоту экрана, а функция возвращает площадь.
Так же должен присутствовать цикл который увеличивает на 10 каждое значение в итерации.
 */
if (zad == 2) {
  var userWidth, userHeight;

  function square(a, b) {
    var res = a * b;
    return res;
  }
  userWidth = Number(window.prompt("Введите ширину экрана", 1024));
  userHeight = Number(window.prompt("Введите высоту экрана", 768));

  for (var i = 0; i < 10; i++) {
    console.log(square(userWidth, userHeight));
    userWidth = userWidth + 10;
    userHeight = userHeight + 10;
  }
}
