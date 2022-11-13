<?php
    
    $useranswer1 = "";
    $useranswer2 = "";
    $useranswer3 = "";
    $useranswer4 = "";
    $useranswer5 = "";
    
    $correctanswer1 = "Malott Hall";
    $correctanswer2 = "4th";
    $correctanswer3 = "Tennessee";
    $correctanswer4 = "Strong and Bailey";
    $correctanswer5 = "Naismith Drive";
    
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
    echo "<p>You answered: " . $useranswer1 . "</p>";
    echo "<p>Correct answer: " . $correctanswer1 . "</p>";
    
    if($useranswer1 == $correctanswer1)
    {
        $correctanswercount++;
    }

    echo "<h2>Question 2:</h2>";
    echo "<p>If you enter from the front entrance, which floor of the Kansas Union are you on?</p>";

    if(isset($_POST["question2"]))
    {
        $useranswer2 = $_POST["question2"];
    }
    else
    {
        $useranswer2 = "No answer!";
    }
    echo "<p>You answered: " . $useranswer2 . "</p>";
    echo "<p>Correct answer: " . $correctanswer2 . "</p>";
    
    if($useranswer2 == $correctanswer2)
    {
        $correctanswercount++;
    }

    echo "<h2>Question 3:</h2>";
    echo "<p>What is the westernmost street on the east side of campus that connects to both 6th and 23rd Street?</p>";
    
    if(isset($_POST["question3"]))
    {
        $useranswer3 = $_POST["question3"];
    }
    else
    {
        $useranswer3 = "No answer!";
    }
    echo "<p>You answered: " . $useranswer3 . "</p>";
    echo "<p>Correct answer: " . $correctanswer3 . "</p>";
    
    if($useranswer3 == $correctanswer3)
    {
        $correctanswercount++;
    }
    
    echo "<h2>Question 4:</h2>";
    echo "<p>What two buildings on campus can you NOT get between without going outside?</p>";
    
    if(isset($_POST["question4"]))
    {
        $useranswer4 = $_POST["question4"];
    }
    else
    {
        $useranswer4 = "No answer!";
    }
    echo "<p>You answered: " . $useranswer4 . "</p>";
    echo "<p>Correct answer: " . $correctanswer4 . "</p>";
    
    if($useranswer4 == $correctanswer4)
    {
        $correctanswercount++;
    }
    
    echo "<h2>Question 5:</h2>";
    echo "<p>The tunnel by the School of Engineering helps you avoid crossing which street?</p>";

    if(isset($_POST["question5"]))
    {
        $useranswer5 = $_POST["question5"];
    }
    else
    {
        $useranswer5 = "No answer!";
    }
    echo "<p>You answered: " . $useranswer5 . "</p>";
    echo "<p>Correct answer: " . $correctanswer5 . "</p>";
    
    if($useranswer5 == $correctanswer5)
    {
        $correctanswercount++;
    }

    echo "<h2>Summary:<h2>";
    echo "<p> You got " . $correctanswercount . " out of 5 questions correct.</p>";
    echo "<p>Final score: " . $correctanswercount * 20 . "%</p>";