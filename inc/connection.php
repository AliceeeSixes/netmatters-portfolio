<?php
// ini_set("display_errors", 1);
// ini_set("display_startup_errors", 1);
// error_reporting(E_ALL);
require_once realpath(__DIR__ . "/../vendor/autoload.php");
use Dotenv\Dotenv;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMAILER\PHPMAILER\SMTP;

$dotenv = Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$db_servername = $_ENV["HOST"];
$db_username = $_ENV["USER"];
$db_password = $_ENV["PASSWORD"];
$db_name = $_ENV["DB_NAME"];


// Messages connection
try {
    $db = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Database connection failed";
    echo $e->getMessage();
    exit;
}

// News connection
try {
    $news = new PDO("mysql:host=$db_servername;dbname=$db_name", $db_username, $db_password);
    $news->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Database connection failed";
    echo $e->getMessage();
    exit;
}


function timestampAppears($timestamp) {
    global $db;
    $sql = $db->prepare("SELECT * FROM MESSAGES WHERE TIMESTAMP = ?");
    $sql->bindParam(1, $timestamp);
    $sql->execute();
    $results_array = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    if (count($results_array) > 0) {
        return true;
    } else {
        return false;
    }

}

// Store Message in db
function storeMessage($fname, $lname, $email, $subject, $message, $timestamp) {
    global $db;
    $sql = $db->prepare("INSERT INTO MESSAGES (FNAME, LNAME, EMAIL, SUBJECT, MESSAGE, TIMESTAMP) VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bindParam(1, $fname);
    $sql->bindParam(2, $lname);
    $sql->bindParam(3, $email);
    $sql->bindParam(4, $subject);
    $sql->bindParam(5, $message);
    $sql->bindParam(6, $timestamp);
    $sql->execute();
}

function sendEmail($fname, $lname, $email, $subject, $message) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = $_ENV["MAIL_HOST"];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV["MAIL_USERNAME"];
        $mail->Password = $_ENV["MAIL_PASSWORD"];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $_ENV["MAIL_PORT"];

        $mail->setFrom($_ENV["MAIL_FROM_ADDRESS"], "Alice Stiles");
        $mail->addReplyTo($_ENV["MAIL_FROM_ADDRESS"], "Alice Stiles");
        $mail->addAddress($_ENV["MAIL_DESTINATION"], "Me");

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "Name: " . $fname . " " . $lname . "<br>" . "Email: " . $email . "<br>" . "Subject: " . $subject . "<br>" . $message;

        $mail->send();
        return True;
    } catch (Exception $e) {
        echo $e->getMessage();
        return False;
    }
}


?>