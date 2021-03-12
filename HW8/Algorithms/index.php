<?php
/*


3. Простые делители числа 13195 - это 5, 7, 13 и 29. Каков самый большой делитель числа 600851475143, являющийся простым числом? Проверить ответ можно здесь(нужна регистрация)
*/

//1.1 Определить сложность следующих алгоритмов:
//-. Поиск элемента массива с известным индексом
$end = 100;
$serchIndex = 50;
$testArray = range(0, $end - 1);
$key = array_search($serchIndex, $testArray, true);
// O(n) использует линейный поиск по массиву


//-. Дублирование одномерного массива через foreach
$copyArray = [];
foreach ($testArray as $key => $value) {
  $copyArray[$key] = $value;
  //var_dump($copyArray);
}
//O(n)

//-. Рекурсивная функция нахождения факториала числа
function factorial($n)
{
  if ($n <= 0) return 1;
  return $n * factorial($n - 1);
}
echo factorial(4);
// выполняется n раз, думаю сложность  O(n)

//-. Удаление элемента массива с известным индексом
unset($testArray[10]);
// не знаю как unset работает, но если делать черз foreach средняя сложность будет O(n/2) или O(n); 



/*
1.2.Определить сложность следующих алгоритмов. Сколько произойдет итераций?
*/


//a)

$n = 100000;
$array[] = [];

for ($i = 0; $i < $n; $i++) { // O(n)
  for ($j = 1; $j < $n; $j *= 2) { //O(log(n-1))
    $array[$i][$j] = true;
  }
}
// сложнось O(n^2) или O(n^log(n)) итераций 1400000

//b)

$n = 10000;
$array[] = [];

for ($i = 0; $i < $n; $i += 2) { // O(n/2)  O(n)
  for ($j = $i; $j < $n; $j++) {  // O(n) 
    $array[$i][$j] = true;
  }
}
// сложнось O(n^2) итераций 5000*10000

//c)

$n = 10;
$array[] = [];
foo($n);

function foo($n)
{
  while ($n > 0) { // O(n)
    for ($j = 0; $j < $n; $j++) { // O(n)
      $n--;
      foo($n); // рекурсия + O(n^2)
    }
  }
}
// не знаю, сложность выше чем O(n^2)


