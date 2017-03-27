<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 3/24/17
 * Time: 6:58 PM
 */

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    header("HTTP/1.1 403 Forbidden");
    exit;
}

require "../../vendor/autoload.php";
use Parse\ParseFile;
use Parse\ParseUser;
use Parse\ParseClient;

ParseClient::initialize("df-recruit-db", '', $_ENV["PARSE_MASTER_PASS"]);
ParseClient::setServerURL("https://df-recruit-db.herokuap.com/parse");

$parseUser = ParseUser::getCurrentUser();
if (!$parseUser) {
    // Then try get old user first
    try {
        $parseUser = ParseUser::logIn($windowsUser->{'userPrincipalName'}, $windowsUser->{'objectId'});
        // Do stuff after successful login.
    } catch (ParseException $error) {
        // If failed user probably does not exist, then creating the user
        $parseUser = new ParseUser();
        $parseUser->set("username", $windowsUser->{'userPrincipalName'});
        $parseUser->set("password", $windowsUser->{'objectId'}); // Not secure but ok lol
        $parseUser->set("email", $windowsUser->{'userPrincipalName'});
        $parseUser->setACL(new ParseACL($parseUser));

        try {
            $parseUser->signUp();
            // Hooray! Let them use the app now.

            $parseUser = ParseUser::logIn($windowsUser->{'userPrincipalName'}, $windowsUser->{'objectId'});
        } catch (ParseException $ex) {
            // Show the error message somewhere and let the user try again.
            error_log("Error: " . $ex->getCode() . " " . $ex->getMessage());
        }
    }
}

// Heroku stores to /tmp/ but need to find a way to fetch it to store into db
//$localFilePath = "/tmp/myFile.txt";
$localFilePath = "test.png";
$file = ParseFile::createFromFile($localFilePath, "test.png");
$file->save();
// The file has been saved to Parse and now has a URL.
$url = $file->getURL();
echo $url;

