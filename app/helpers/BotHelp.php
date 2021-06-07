<?php

namespace App\Helpers;

// use Exception;

class BotHelp 
{
    public static function cLog($txt)
    {
        global $telegram;
        $telegram->sendMessage([
            'chat_id' => 122420625, 
            'text' => json_encode($txt),
            'parse_mode' => "Markdown",
        ]);
        // try {
        // } catch (Exception $e) {
        //     error_log($e->getMessage());
        // }
    }
}

?>