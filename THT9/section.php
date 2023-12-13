<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $answeruser = trim($_POST['quiz-input']);
    $correctScore = 'cos(t)';

    if($answeruser === $correctScore)
    {
        $message = 'Correct!';
    }
    else
    {
        $message = 'Incorrect!';
        $displaySolution = true;
    }
}
 if (isset($message))
 {
    echo '<p>'. $message. '</p>';
 }
 if(isset($displaySolution) && $displaySolution)
 {
    echo '<p>The correct answer is cos(t)</p>';
 }

?>