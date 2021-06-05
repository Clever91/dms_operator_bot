<?php

namespace App\helpers;

use Exception;

class BotHelp 
{
    public static function cLog($txt)
    {
        global $telegram;
        try {
            $telegram->sendMessage([
                'chat_id' => 122420625, 
                'text' => json_encode($txt),
                'parse_mode' => "Markdown",
            ]);
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}


?>