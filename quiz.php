<?php
    
    $useranswer1 = "";
    
    $correctanswer1 = "Malott Hall";
    
    $correctanswercount = 0;
    
    echo "<h2>Question 1:</h2>";
    echo "<p>Which of these buildings is NOT on Jayhawk Boulevard?</p>";
    
    if(isset($_POST["question1"]))
    {
        $useranswer1 = $_POST["question1"];
    }
    else
    {
        $useranswer1 = "No answer!";
    }
    echo "<p>User answer: " . $useranswer1 . "</p>";
    echo "<p>Correct answer: " . $correctanswer1 . "</p>";
    
    if($useranswer1 == $correctanswer1)
    {
        $correctanswercount++;
    }

    echo "<h2>Question 2:</h2>";
    echo "<p>If you enter from the front entrance, which floor of the Kansas Union are you on?</p>";
    echo "<h2>Question 3:</h2>";
    echo "<p>What is the westernmost street on the east side of campus that connects to both 6th and 23rd Street?</p>";
    echo "<h2>Question 4:</h2>";
    echo "<p>What two buildings on campus can you NOT get between without going outside?</p>";
    echo "<h2>Question 5:</h2>";
    echo "<p>The tunnel by the School of Engineering helps you avoid crossing which street?</p>";
?>