/*
  Написать рекурсивную функцию выводящую все значения массива на экран
  Запрещено использовать циклы и методы для работы с массивами. 
  Функция должна принимать два аргумента: массив и… что-то еще. Что именно - остается на ваше усмотрение.

  Пример вызова:  consoleRec(['я', 'умею', 'писать', 'рекурсивные', 'функции'], ???);
  должна вывести на экран:
  я
  умею
  писать
  рекурсивные
  функции

*/


//Version 1
function consoleRec(array, num) {
  if (array.length > 0) {
    console.log(array[0]);
    array.shift();
    consoleRec(array, num);
  }

}

let array = ['я', 'умею', 'писать', 'рекурсивные', 'функции'];

consoleRec(array, 0);


// Version 2
function consoleRec2(array, num) {
  console.log(array[num]);
  num += 1;

  if (num < 5) { consoleRec2(array, num) };
}

let num = 0;
let array2 = ['я', 'умею', 'писать', 'рекурсивные', 'функции'];

consoleRec2(array2, num);
