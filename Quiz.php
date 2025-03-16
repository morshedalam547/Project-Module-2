<?php
function evaluateQuiz(array $questions, array $answers): int {
    $score = 0;
    foreach ($questions as $index => $question) {
         if ($answers[$index] === $question['answer']) {
    $score++;
    }
    }
    return $score;
    }


$questions = [
    ['question' => 'What is the capital of France?', 'answer' => 'Paris'],
    ['question' => 'What is 5 + 3 ?', 'answer' => '8'],
    ['question' => 'Who wrote "Hamlet"?', 'answer' => 'Shakespeare'],
];
$answers = [];
foreach($questions as $key=> $question){
    echo($key+1).". ".$question['question']."\n";
    $answers[] = trim(readline("your answer:"));
}
$score = evaluateQuiz($questions, $answers);
echo "/n you scored $score out of ".count($questions)."\n";

if($score === count($questions)){
    echo "Congratulations! You got all the answers right\n";
}elseif($score > 1){
    echo "Good effort !\n";
}else{
    echo "Better luck next time !\n";
}
