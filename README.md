# Игры разума

<a href="https://codeclimate.com/github/entorus/php-project-lvl1/maintainability"><img src="https://api.codeclimate.com/v1/badges/955c5d3f1c721410dcd8/maintainability" /></a>
[![Github Actions Status](https://github.com/entorus/php-project-lvl1/workflows/PHPCS/badge.svg)](https://github.com/entorus/php-project-lvl1/actions)

## Описание

«Игры разума» — набор из пяти консольных игр, построенных по принципу популярных мобильных приложений для прокачки мозга. Каждая игра задает вопросы, на которые нужно дать правильные ответы. После трех правильных ответов считается, что игра пройдена. Неправильные ответы завершают игру и предлагают пройти ее заново.

### Установка и запуск

```
#Установка
composer global require entorus/first

#Запуск игры
brain-progression

```

### Пример игры:

```
$ brain-progression
Welcome to the Brain Game!
What number is missing in this progression?
May I have your name? Roman
Hello, Roman!
Question: 14 .. 18 20 22 24 26 28
Your answer: 16 # Пользователь вводит ответ
Correct!
Question: 5 6 7 8 9 .. 11 12
Your answer: 10 # Пользователь вводит ответ
Correct!
Question: 12 15 18 21 .. 27 30 33
Your answer: 24 # Пользователь вводит ответ
Correct!
Congratulations, Roman!
```

### Brain Even
Определение четного числа.

[![asciicast](https://asciinema.org/a/AXIsxpQFmTbwzRiNuz5rSUi2k.svg)](https://asciinema.org/a/AXIsxpQFmTbwzRiNuz5rSUi2k)

### Brain Calc
Калькулятор. Арифметические выражения, которые необходимо вычислить.

[![asciicast](https://asciinema.org/a/zVkJPcFNJDzd4TyPig6rvxvqb.svg)](https://asciinema.org/a/zVkJPcFNJDzd4TyPig6rvxvqb)

### Brain Gcd
Определение наибольшего общего делителя.

[![asciicast](https://asciinema.org/a/2Xg2uePFSvuBkazXjMc2E2RfH.svg)](https://asciinema.org/a/2Xg2uePFSvuBkazXjMc2E2RfH)

### Brain Progression
Прогрессия. Поиск пропущенных чисел в последовательности чисел.

[![asciicast](https://asciinema.org/a/RMv8Ny9we9hL0MVRmuoiXgjEH.svg)](https://asciinema.org/a/RMv8Ny9we9hL0MVRmuoiXgjEH)

### Brain Prime
Определение простого числа.

[![asciicast](https://asciinema.org/a/UcyPTePVeSmbmQWgdYs3cqbv3.svg)](https://asciinema.org/a/UcyPTePVeSmbmQWgdYs3cqbv3)