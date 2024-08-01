<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $agent_name = $_POST['agent_name'];
    $property_address = $_POST['property_address'];
    $city = $_POST['city'];
    $seller_name = $_POST['seller_name'];
    $emails = $_POST['emails'];
    $source = $_POST['source'];
    $list_price = $_POST['list_price'];
    $on_market_date = $_POST['on_market_date'];
    $expiration_date = $_POST['expiration_date'];
    $listing_agent_commission = $_POST['listing_agent_commission'];
    $selling_agent_commission = $_POST['selling_agent_commission'];
    $vacant = $_POST['vacant'];
    $financing_exclude = $_POST['financing_exclude'];
    $title_company = $_POST['title_company'];
    $hoa = $_POST['hoa'];
    $existing_survey = $_POST['existing_survey'];
    $ahs_seller_coverage = $_POST['ahs_seller_coverage'];
    $need_key_box = $_POST['need_key_box'];

    // Validate and process the data
    // For example, send an email with the form data
    $to = "fdavgreen@gmail.com"; // Your email address here
    $subject = "New C2C Listing Submission";
    $message = "Agent Name: $agent_name\nProperty Address: $property_address\nCity: $city\nSeller Name: $seller_name\nEmails: $emails\nSource: $source\nList Price: $list_price\nOn Market Date: $on_market_date\nExpiration Date: $expiration_date\nListing Agent Commission: $listing_agent_commission\nSelling Agent Commission: $selling_agent_commission\nVacant: $vacant\nFinancing to Exclude: $financing_exclude\nTitle Company: $title_company\nHOA: $hoa\nExisting Survey: $existing_survey\nAHS Seller Coverage: $ahs_seller_coverage\nNeed a Key Box: $need_key_box";
    $headers = "From: no-reply@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "The form has been sent successfully.";
    } else {
        echo "There was a problem sending the form.";
    }
}
?>
