<?php

// Iclude configuration
require_once __DIR__.'/../inc/config.php';
//from index to home1 display nav bar and text in binary if not then normal text
$currentPage = 'text';
//variable initialization
$lastName = '';
$firstName = '';
$email = '';
$text = '';


//data retrieval from POST
if (!empty($_POST)) {
    $lastName = isset($_POST['InputLastName']) ? $_POST['InputLastName'] : '';
    $firstName = isset($_POST['InputFirstName']) ? $_POST['InputFirstName'] : '';
    $email = isset($_POST['InputEmail']) ? $_POST['InputEmail'] : '';
    $text = isset($_POST['Inputtext']) ? $_POST ['Inputtext'] : '';

    //data cleaning before submitting
    $lastName = strtoupper(trim(strip_tags($lastName)));
    $firstName = ucfirst(trim(strip_tags($firstName)));
    $email = trim(strip_tags($email));
    $text = trim(strip_tags($text));

    //data validation before submitting
    $formOk = true;
    if (empty($lastName)) {
        echo 'Please enter your Last Name';
        $formOk = false;
    } elseif (strlen($lastName) < 2) {
        echo 'Incorrect Last Name<br>';
        $formOk = false;
    }
    if (empty($firstName)) {
        echo 'Please enter a name';
        $formOk = false;
    } elseif (strlen($firstName) < 2) {
        echo 'Incorrect Name<br>';
        $formOk = false;
    }
    if (empty($email)) {
        echo 'Please enter an email<br>';
        $formOk = false;
    }
    //email validation by php
    elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo 'Email incorrect<br>';
        $formOk = false;
    }
    if (empty($text)) {
        echo 'Please leave a message';
        $formOk = false;
    }
    //Once everything is OK then the data can be pushed into DB
    if ($formOk) {
        echo 'Everything is OK email sent!';
        //send email
       //sum of contents to send email;
       $dataToEmail = 'From: '.$firstName.' '.$lastName.'<br>email: '.$email.'<br>--------------------<br>'.$text;
       $subject = $firstName.' sent you a message';
       sendEmail($subject, $dataToEmail);
    }
}//closes if (!empty($_POST)



// At the end, display the "views"
require_once __DIR__.'/../view/header.php';
require_once __DIR__.'/../view/contact.php';
require_once __DIR__.'/../view/footer.php';
