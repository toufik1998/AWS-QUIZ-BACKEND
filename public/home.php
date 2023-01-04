<?php
include('../app/view/autolad.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <!-- <link rel="stylesheet" href="../public/sass/main.css"> -->
    <!-- <link rel="stylesheet" href="public/sass/darkmode.css">   -->

    <!-- UniIcon CDN Link  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div style="display: flex;flex-direction: row;">
        <p id="text" class="btn-darkmode"  style="margin: 0;position: fixed;left: 10px;top: 2px;"><i class="fa-solid fa-circle-half-stroke"></i></p>
        <input type="checkbox" id="check" onclick="changeStatus()" style="opacity: 0;"></input>
    </div>

    <div class="main">

        <div class="head">
            <p class="head_1">Cloud Practitioner <span>AWS Certified</span></p>
            <!-- <p class="head_2">Using Html, Css & JavaScript</p> -->
        </div>

        <ul>
            <li>
                <i class="icon uil uil-capture"></i>
                <div class="progress one">
                    <p>1</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Informations</p>
            </li>
            <li>
                <i class="icon uil uil-clipboard-notes"></i>
                <div class="progress two">
                    <p>2</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Questions</p>
            </li>
            <li>
                <i class="icon uil uil-credit-card"></i>
                <div class="progress three">
                    <p>3</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Results</p>
            </li>
        </ul>
    </div>

    <div class="quiz-instructions">
        <h2>Quiz Instructions</h2>
        <p>
            The quizzes consists of questions carefully designed to help you self-assess your comprehension of the information presented on the topics covered in the module. No data will be collected on the website regarding your responses or how many times you take the quiz.
             Read each question carefully, and click on the button next to your response that is based on the information covered on the topic in the module. Each correct or incorrect response will result in appropriate feedback immediately at the bottom of the screen.

        </p>
    </div>

    <div class="quiz-app">
        <div class="quiz-info">
            <div class="category">
                Category &hearts; &hearts; <span>AWS Training And Certifica</span> &hearts; &hearts;
            </div>
            <div class="count">
                Questions Count: <span class="counter"></span>
            </div>
        </div>

        <div class="quiz-area">
            <!-- <h2>why we use&lt;br&gt; Element</h2> -->
        </div>

        <div class="answer-area">
            <!-- <div class="answer">
                <input type="radio" checked id="answer_1" name="Questions">
                <label for="answer_1">to make text italic</label>
            </div>
            <div class="answer">
                <input type="radio" id="answer_2" name="Questions">
                <label for="answer_2">to make text bold</label>
            </div>
            <div class="answer">
                <input type="radio" id="answer_3" name="Questions">
                <label for="answer_3">to add breakline</label>
            </div>
            <div class="answer">
                <input type="radio" id="answer_4" name="Questions">
                <label for="answer_4">to crate horizontal line</label>
            </div> -->
        </div>

        <button class="submit-button">Next Answer</button>
        <div class="bullets">
            <div class="spans">
               
            </div>

            <div class="countdown">
                <!-- <span class="minutes">02</span> :
                <span class="seconds">45</span> -->
            </div>

        </div>
        <div class="results">
            <!-- <span class="good">Perfect</span> You answered 10 from 10 -->
        </div>

        
    </div>

    <div class="explanation">
        <h3>Quiz Explanation For Incorrect Answers</h3>
        <!-- 
            <h3>Quiz Explanation</h3>
        <div class="incorrect-answer">
            <div class="answer">
                <p>
                    <span>9</span> Which service can identify the user that made the API call when an Amazon EC2 instance is terminated?
                </p>
            </div>
            <div class="explain-answer">
                <p>
                    AWS CloudTrail helps users enable governance, compliance, and operational and risk auditing of 
                    their AWS accounts. Actions taken by a user, role, or an AWS service are recorded as events in 
                    CloudTrail. Events include actions taken in the AWS Management Console, AWS Command Line 
                    Interface (CLI), and AWS SDKs and APIs."
                </p>
                
            </div>
        </div> 
    -->

    </div>

    <script src="public/js_scripts/main.js"></script>
</body>
</html>
</body>
</html>