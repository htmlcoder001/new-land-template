<?php
/**
 * Created by PhpStorm.
 * Author: webtitov.ru
 */

if (isset($_POST['contact_form_name']) && !empty($_POST['contact_form_name'])) {
  $contact_form_name = 'Name: ' . $_POST['contact_form_name'] . "\n";
}
if (isset($_POST['contact_form_phone']) && !empty($_POST['contact_form_phone'])) {
  $contact_form_phone = 'Contact Number: ' . $_POST['contact_form_phone'] . "\n";
}
if (isset($_POST['contact_form_email']) && !empty($_POST['contact_form_email'])) {
  $contact_form_email = 'E-mail: ' . $_POST['contact_form_email'] . "\n";
}
if (isset($_POST['contact_form_subject']) && !empty($_POST['contact_form_subject'])) {
  $contact_form_subject = 'Subject: ' . $_POST['contact_form_subject'] . "\n";
}
if (isset($_POST['contact_form_message']) && !empty($_POST['contact_form_message'])) {
  $contact_form_message = 'Message: ' . $_POST['contact_form_message'] . "\n";
}




$to = 'web@2dsd.ru';
//$to = 'sales@sphere.delivery';


$subject = 'Get In Touch | Contact page | Sphere';

$message = $contact_form_name . $contact_form_phone . $contact_form_email . $contact_form_subject . $contact_form_message;

$headers = 'From: noreply@sphere.delivery' . "\r\n" .
  'Reply-To: noreply@sphere.delivery' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);