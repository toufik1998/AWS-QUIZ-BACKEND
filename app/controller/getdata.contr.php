<?php

include_once('C:\xampp\htdocs\QUIZ_AWSB\app\classes\getdata.class.php');

$data = new Datacontent();

// $data_handle =  $data->getData("SELECT * FROM quiz_content");
$data_handle =  $data->getData("SELECT * FROM `quiz_content`");

foreach($data_handle as $question){
    $products[] = $question;
}

 	$encoded_data = json_encode($products, JSON_PRETTY_PRINT);
    file_put_contents('aws_questions.json', $encoded_data);


    // select all  right answers
$right_answer_handle = $data->getData("SELECT * FROM `right_answer`");

foreach($right_answer_handle as $right){
    $answers[] = $right;
}


$encoded_data = json_encode($answers, JSON_PRETTY_PRINT);
file_put_contents('right_answers.json', $encoded_data);