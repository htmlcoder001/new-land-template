<?php
/**
 * Created by PhpStorm.
 * Author: webtitov.ru
 */

if (isset($_POST['form_name']) && !empty($_POST['form_name'])) {
  $form_name = 'Name: ' . $_POST['form_name'] . "\n";
}
if (isset($_POST['company_name']) && !empty($_POST['company_name'])) {
  $company_name = 'Company Name: ' . $_POST['company_name'] . "\n";
}
if (isset($_POST['contact_number']) && !empty($_POST['contact_number'])) {
  $contact_number = 'Contact Number: ' . $_POST['contact_number'] . "\n";
}
if (isset($_POST['form_email']) && !empty($_POST['form_email'])) {
  $form_email = 'E-mail: ' . $_POST['form_email'] . "\n";
}
if (isset($_POST['product_category']) && !empty($_POST['product_category'])) {
  $product_category = 'Product Category: ' . join(", ", $_POST['product_category']) . "\n";
}
if (isset($_POST['delivery_locations']) && !empty($_POST['delivery_locations'])) {
  $delivery_locations = 'Delivery Locations: ' . join(", ", $_POST['delivery_locations']) . "\n";
}
if (isset($_POST['payout_type']) && !empty($_POST['payout_type'])) {
  $payout_type = 'Payout Type: ' . $_POST['payout_type'] . "\n";
}
if (isset($_POST['form_volume']) && !empty($_POST['form_volume'])) {
  $form_volume = 'Volume per month: ' . $_POST['form_volume'] . "\n";
}




$to = 'web@2dsd.ru';
//$to = 'sales@sphere.delivery';


$subject = 'Request A Quote | Home page | Sphere';

$message = $form_name . $company_name . $contact_number . $form_email . $product_category . $delivery_locations . $payout_type . $form_volume;

$headers = 'From: noreply@sphere.delivery' . "\r\n" .
    'Reply-To: noreply@sphere.delivery' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);