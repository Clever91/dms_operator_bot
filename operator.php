<?php
// load config
include_once('app/config/main.php');
include_once('app/config/db.php');
include_once('app/helpers/BotHelp.php');
include_once('app/helpers/Database.php');

// load vendor
require 'vendor/autoload.php';

use App\Helpers\Database;
use App\Helpers\BotHelp;
use Telegram\Bot\Api;

// init telegram api
$telegram = new Api(TOKEN);
$updates = $telegram->getWebhookUpdates();

$message = null; 
$callback = null;
$channel = null;

if ($updates->getMessage() != null) {
    $message = $updates->getMessage();
} else if ($updates->getEditedMessage() != null) {
    $message = $updates->getEditedMessage();
} else if ($updates->getCallbackQuery() != null) {
    $callback = $updates->getCallbackQuery();
} else if ($updates->getChannelPost() !== null) {
    $channel = $updates->getChannelPost();
}

// message is not null
if (!is_null($message) && $message->count()) {
    // get object
    $text = $message->getText();
    $user = $message->getFrom();
    $chat = $message->getChat();
    $location = $message->getLocation();
    $contact = $message->getContact();

    // if user is private so answer to him
    if (strtolower($chat->getType()) === "private") {
        // mysql connection
        $settings["host"] = DB_HOST;
        $settings["dbname"] = DB_DATABASE;
        $settings["user"] = DB_USER;
        $settings["pass"] = DB_PASSWORD;
        $db = new Database($settings);

        // if text command exists so answer to him
        if (!empty($text) && !$user->isBot()) {

            // $data = $db->query("SELECT * FROM OrderStatus ORDER BY name ASC", array())->fetchAll();

            try {
                $telegram->sendMessage([
                    'chat_id' => $chat->getId(), 
                    'text' => "Hello",
                    'parse_mode' => "Markdown",
                ]);
            } catch (Exception $e) {
                BotHelp::cLog($e->getMessage());
            }
        }

    } elseif (strtolower($chat->getType()) == ("group" || "supergroup")) {
        if (strtolower($text) === "/mychatid") {
            //
        }

    }

} elseif (!is_null($callback)) {
    $message = $callback->getMessage();
    $from = $callback->getFrom();
    $data = $callback->getData();

    if (!is_null($message) && !empty($data)) {
        $chat = $message->getChat();
        $decode = json_decode($data);
        // 
    }
}

header ( 'Content-Type: application/json' );
echo '{"ok":true,"result":true}';
exit ();


?>
