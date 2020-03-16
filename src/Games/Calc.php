<?php
    namespace BrainGames\Games;

    use function cli\line;
    use function cli\prompt;

    class Calc
    {
        private $name;

        public function __construct() 
        {
            line('Welcome to the Brain Games!');
            line('What is the result of the expression?');
            line('');
            $name = prompt('May I have your name?');
            line("Hello, %s! \n", $name);
            $this->name = $name;
            
        }

        function play() 
        {
            for ($i = 0; $i < 3; $i++) {
                $number1 = random_int(0, 100);
                $number2 = random_int(0, 100);
                $question = $this->mathOperation($number1, $number2);
                $answer = (int)prompt('Your answer');
                if (!$this->isCorrect($question, $answer)) {
                    line("'$answer' is wrong answer ;(. Correct answer was '$question'.");
                    line("Let's try again, $this->name!");
                return;
                }
                line("Correct!");
            }
            line("Congratulations, $this->name!");    
        }

        function mathOperation($num1, $num2) 
        {
            $operations = ['-', '+', '*'];
            $operation = random_int(0,2);
            line('Question: ' . $num1 . ' ' . $operations[$operation] . ' ' . $num2);
            switch ($operation) {
                case '0':
                    return $num1 - $num2;
                case '1':
                    return $num1 + $num2;
                case '2':
                    return $num1 * $num2;
            }
        }

        function isCorrect($num1, $num2) 
        {
            return $num1 === $num2;
        }
    }
    