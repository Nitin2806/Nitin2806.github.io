<?php
# ------------------
# Create a campaign\
# ------------------
# Include the Sendinblue library\
require_once(__DIR__ . "/APIv3-php-library/autoload.php");
# Instantiate the client\
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey("api-key", "YOUR_API_V3_KEY");
$api_instance = new SendinBlue\Client\Api\EmailCampaignsApi();
$emailCampaigns = new \SendinBlue\Client\Model\CreateEmailCampaign();
# Define the campaign settings\
$email_campaigns['name'] = "Campaign sent via the API";
$email_campaigns['subject'] = "My subject";
$email_campaigns['sender'] = array("name": "Nitin Mishra", "email":"mnitin2311@gmail.com");
$email_campaigns['type'] = "classic";
# Content that will be sent\
"htmlContent"=> "Congratulations! You successfully sent this example campaign via the Sendinblue API.",
# Select the recipients\
"recipients"=> array("listIds"=> [2, 7]),
# Schedule the sending in one hour\
"scheduledAt"=> "2018-01-01 00:00:01"
);
# Make the call to the client\
try {
$result = $api_instance->createEmailCampaign($emailCampaigns);
print_r($result);
} catch (Exception $e) {
echo 'Exception when calling EmailCampaignsApi->createEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
