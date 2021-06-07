<?php

namespace App\Helpers;

use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Keyboard\Keyboard;

/**
* @author @CleverUzbek
*/
class BotKeyboard
{

    public static function languages()
    {
        global $buttons;
        $keyboard = [
            [
                [
                    'text' => $buttons["lang_uz"],
                ],
                [
                    'text' => $buttons["lang_ru"],
                ],
            ]
        ];

        return Keyboard::make([
            'keyboard' => $keyboard,
            'resize_keyboard' => true,
            'one_time_keyboard' => false,
        ]);
    }

    // public static function filails($chat, $filails, $lang)
    // {
    //     global $telegram, $emoji, $languages;

    //     $item = [];
    //     $keyboard = [];
    //     foreach ($filails as $filail) {
    //         array_push($item, ['text' => $emoji["restaran"]. " " .$filail["name"]]);
    //     }

    //     array_push($keyboard, $item);

    //     $reply_markup = $telegram->replyKeyboardMarkup([
    //         'keyboard' => $keyboard,
    //         'resize_keyboard' => true,
    //         'one_time_keyboard' => false,
    //     ]);


    //     $params = [
    //         'chat_id' => $chat->getId(),
    //         'text' => $languages[$lang]['msg_filials'],
    //         'parse_mode' => "Markdown",
    //         'reply_markup' => $reply_markup
    //     ];

    //     return $params;
    // }

    // public static function categories($chat, $items, $lang, $count = 0, $is_promotion = false)
    // {
    //     global $telegram, $emoji, $languages;

    //     $inner = [];
    //     $keyboard = [];

    //     if ($is_promotion) {
    //         // add promotions
    //         array_push($inner, ['text' => $emoji["promotions"]. " " .$languages[$lang]["promotion"]]);
    //         array_push($keyboard, $inner);
    //     }

    //     $inner = [];
    //     foreach ($items as $index => $item) {
    //         // array_push($inner, ['text' => $emoji["category"]. " " .$item["name"]]);
    //         array_push($inner, ['text' => $item["name"]]);

    //         if (($index + 1) % 2 == 0) {
    //             array_push($keyboard, $inner);
    //             $inner = [];
    //         }
    //     }

    //     array_push($keyboard, $inner);

    //     // add back and cart
    //     $inner = [];
    //     array_push($inner, ['text' => $emoji["back"]. " " .$languages[$lang]["back_pointer"]]);
    //     array_push($inner, ['text' => $emoji["cart"]. " " .$languages[$lang]["cart"] . " (" . $count . ")"]);
    //     array_push($keyboard, $inner);


    //     $reply_markup = $telegram->replyKeyboardMarkup([
    //         'keyboard' => $keyboard,
    //         'resize_keyboard' => true,
    //         'one_time_keyboard' => false,
    //     ]);


    //     $params = [
    //         'chat_id' => $chat->getId(),
    //         'text' => $languages[$lang]['msg_categories'],
    //         'parse_mode' => "Markdown",
    //         'reply_markup' => $reply_markup
    //     ];

    //     return $params;
    // }

    // public static function promotion($chat, $promotion, $lang)
    // {
    //     global $telegram, $emoji, $languages;

    //     $is_photo = false;
    //     $caption = trim(strip_tags($promotion['caption']));
    //     $caption = str_replace("&nbsp;", '', $caption);

    //     if (!empty($promotion['image'])) {

    //         $url = Config::DOMAIN . "/uploads/" . $promotion['image'];

    //         $params = [
    //             'chat_id' => $chat->getId(),
    //             'photo' => $url,
    //             'parse_mode' => "Markdown",
    //         ];

    //         $is_photo = true;
    //     }

    //     $txt = "*" . $promotion['title'] . "*";
    //     if (!empty($caption)) {
    //         $txt = $txt . "\n" . $caption;
    //     }
        
    //     if ($is_photo) {

    //         $params['caption'] = $txt;

    //         return $params;
    //     }

    //     $params = [
    //         'chat_id' => $chat->getId(),
    //         'text' => $txt,
    //         'parse_mode' => "Markdown",
    //     ];

    //     return $params;
    // }

    // public static function products($chat, $items, $lang = "ru", $count = 0)
    // {
    //     global $telegram, $emoji, $languages;

    //     $inner = [];
    //     $keyboard = [];


    //     foreach ($items as $index => $item) {
    //         // array_push($inner, ['text' => $emoji["product"]. " " .$item["name"]]);
    //         array_push($inner, ['text' => $item["name"]]);

    //         if (($index + 1) % 2 == 0) {
    //             array_push($keyboard, $inner);
    //             $inner = [];
    //         }
    //     }

    //     array_push($keyboard, $inner);

    //     // add back and cart
    //     $inner = [];
    //     array_push($inner, ['text' => $emoji["back"]. " " .$languages[$lang]["back_pointer"]]);
    //     array_push($inner, ['text' => $emoji["cart"]. " " .$languages[$lang]["cart"] . " (" . $count . ")"]);
    //     array_push($keyboard, $inner);


    //     $reply_markup = $telegram->replyKeyboardMarkup([
    //         'keyboard' => $keyboard,
    //         'resize_keyboard' => true,
    //         'one_time_keyboard' => false,
    //     ]);


    //     $params = [
    //         'chat_id' => $chat->getId(),
    //         'text' => $languages[$lang]['msg_products'],
    //         'parse_mode' => "Markdown",
    //         'reply_markup' => $reply_markup
    //     ];

    //     return $params;
    // }

    // public static function product($chat, $lang, $product)
    // {
    //     global $telegram, $emoji, $languages;

    //     $inner = [];
    //     $keyboard = [];
    //     $items = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    //     foreach ($items as $index => $item) {
    //         // array_push($inner, ['text' => $emoji["no"]. " " .$item]);
    //         array_push($inner, ['text' => $item]);

    //         if (($index + 1) % 3 == 0) {
    //             array_push($keyboard, $inner);
    //             $inner = [];
    //         }
    //     }

    //     array_push($keyboard, $inner);

    //     // add back
    //     $inner = [];
    //     array_push($inner, ['text' => $emoji["back"]. " " .$languages[$lang]["back_pointer"]]);
    //     array_push($keyboard, $inner);


    //     $reply_markup = $telegram->replyKeyboardMarkup([
    //         'keyboard' => $keyboard,
    //         'resize_keyboard' => true,
    //         'one_time_keyboard' => false,
    //     ]);

    //     $desc = trim(strip_tags($product->fulldesc));
    //     $desc = str_replace("&nbsp;", '', $desc);

    //     $text = "*" . $languages[$lang]["msg_title"] . "*: " . $product->title . "\n";
    //     if (!empty($desc))
    //         $text .= "*" . $languages[$lang]["msg_desc"] . "*:_" . $desc . "_\n";
    //     $text .= "*" . $languages[$lang]["msg_price"] . "*: " . CCommon::moneyFormat($product->cost, $lang) . "\n\n";
    //     $text .= $languages[$lang]['msg_product'];


    //     $params = [
    //         'chat_id' => $chat->getId(),
    //         'text' => $text,
    //         'parse_mode' => "Markdown",
    //         'reply_markup' => $reply_markup
    //     ];

    //     return $params;
    // }

    // public static function cart($chat, $items, $lang)
    // {
    //     global $telegram, $emoji, $languages;

    //     $inner = [];
    //     $keyboard = [];

    //     // add back and make order
    //     array_push($inner, ['text' => $emoji["back"]. " " .$languages[$lang]["back_pointer"]]);
    //     array_push($inner, ['text' => $emoji["order"]. " " .$languages[$lang]["make_order"]]);
    //     array_push($keyboard, $inner);

    //     foreach ($items as $index => $item) {
    //         $inner = [];
    //         array_push($inner, ['text' => $emoji["remove"]." ".$item["name"]." (".$item['quantity']." шт.)"]);
    //         array_push($keyboard, $inner);
    //     }


    //     // add cart clear
    //     $inner = [];
    //     array_push($inner, ['text' => $emoji["clear"]. " " .$languages[$lang]["clear_cart"]]);
    //     array_push($keyboard, $inner);

    //     $reply_markup = $telegram->replyKeyboardMarkup([
    //         'keyboard' => $keyboard,
    //         'resize_keyboard' => true,
    //         'one_time_keyboard' => false,
    //     ]);


    //     $params = [
    //         'chat_id' => $chat->getId(),
    //         'text' => $languages[$lang]['msg_we_cart'],
    //         'parse_mode' => "Markdown",
    //         'reply_markup' => $reply_markup
    //     ];

    //     return $params;
    // }

    // public static function delivery($chat, $lang)
    // {
    //     global $telegram, $emoji, $languages;

    //     $text = $languages[$lang]["msg_select_delivery_type"];

    //     $keyboard = [
    //         [
    //             [ 'text' => $emoji["delivery"]. " " .$languages[$lang]["by_courier"] ]
    //         ],
    //         [
    //             [ 'text' => $emoji["pickup"]. " " .$languages[$lang]["pickup"] ]
    //         ],
    //         [
    //             [ 'text' => $emoji["back"]. " " .$languages[$lang]["back_pointer"] ]
    //         ]
    //     ];

    //     $reply_markup = $telegram->replyKeyboardMarkup([
    //         'keyboard' => $keyboard,
    //         'resize_keyboard' => true,
    //         'one_time_keyboard' => false,
    //     ]);


    //     $params = [
    //         'chat_id' => $chat->getId(), 
    //         'text' => $text,
    //         'parse_mode' => "Markdown",
    //         'reply_markup' => $reply_markup
    //     ];

    //     return $params;
    // }

    // public static function payment($chat, $lang)
    // {
    //     global $telegram, $emoji, $languages;

    //     $text = $languages[$lang]["msg_select_payment_type"];

    //     $keyboard = [
    //         [
    //             [ 'text' => $emoji["money"]. " " .$languages[$lang]["money"] ]
    //         ],
    //         [
    //             [ 'text' => $emoji["card"]. " " .$languages[$lang]["card"] ]
    //         ],
    //         [
    //             [ 'text' => $emoji["back"]. " " .$languages[$lang]["back_pointer"] ]
    //         ]
    //     ];

    //     $reply_markup = $telegram->replyKeyboardMarkup([
    //         'keyboard' => $keyboard,
    //         'resize_keyboard' => true,
    //         'one_time_keyboard' => false,
    //     ]);


    //     $params = [
    //         'chat_id' => $chat->getId(), 
    //         'text' => $text,
    //         'parse_mode' => "Markdown",
    //         'reply_markup' => $reply_markup
    //     ];

    //     return $params;
    // }

    // public static function location($chat, $lang)
    // {
    //     global $telegram, $emoji, $languages;

    //     $text = $languages[$lang]["msg_send_location"];

    //     $keyboard = [
    //         [
    //             [
    //                 'text' => $emoji["location"]. " " .$languages[$lang]["location"],
    //                 'request_location' => true
    //             ]
    //         ],
    //         [
    //             [
    //                 'text' => $emoji["back"]. " " .$languages[$lang]["back_pointer"]
    //             ]
    //         ]
    //     ];

    //     $reply_markup = $telegram->replyKeyboardMarkup([
    //         'keyboard' => $keyboard,
    //         'resize_keyboard' => true,
    //         'one_time_keyboard' => false,
    //     ]);


    //     $params = [
    //         'chat_id' => $chat->getId(), 
    //         'text' => $text,
    //         'parse_mode' => "Markdown",
    //         'reply_markup' => $reply_markup
    //     ];

    //     return $params;
    // }

    // public static function contact($chat, $lang)
    // {
    //     global $telegram, $emoji, $languages;

    //     $text = $languages[$lang]["msg_contact"];

    //     $keyboard = [
    //         [
    //             [
    //                 'text' => $emoji["mobile"]. " " .$languages[$lang]["send_contact"],
    //                 'request_contact' => true,
    //             ]
    //         ],
    //         [
    //             [
    //                 'text' => $emoji["back"]. " " .$languages[$lang]["back_pointer"]
    //             ]
    //         ]
    //     ];

    //     $reply_markup = $telegram->replyKeyboardMarkup([
    //         'keyboard' => $keyboard,
    //         'resize_keyboard' => true,
    //         'one_time_keyboard' => false,
    //     ]);


    //     $params = [
    //         'chat_id' => $chat->getId(), 
    //         'text' => $text,
    //         'parse_mode' => "Markdown",
    //         'reply_markup' => $reply_markup
    //     ];

    //     return $params;
    // }

    // public static function comment($chat, $lang)
    // {
    //     global $telegram, $emoji, $languages;

    //     $text = $languages[$lang]["text_comment"];

    //     $keyboard = [
    //         [
    //             [
    //                 'text' => $emoji["raisedHand"]. " " .$languages[$lang]["msg_comment"],
    //             ]
    //         ],
    //         [
    //             [
    //                 'text' => $emoji["back"]. " " .$languages[$lang]["back_pointer"]
    //             ]
    //         ]
    //     ];

    //     $reply_markup = $telegram->replyKeyboardMarkup([
    //         'keyboard' => $keyboard,
    //         'resize_keyboard' => true,
    //         'one_time_keyboard' => false,
    //     ]);


    //     $params = [
    //         'chat_id' => $chat->getId(), 
    //         'text' => $text,
    //         'parse_mode' => "Markdown",
    //         'reply_markup' => $reply_markup
    //     ];

    //     return $params;
    // }

    // public static function confirm($chat, $text, $lang)
    // {
    //     global $telegram, $emoji, $languages;


    //     $keyboard = [
    //         [
    //             [
    //                 'text' => $emoji["cancel"]. " " .$languages[$lang]["cancel_order"],
    //             ],
    //             [
    //                 'text' => $emoji["confirm"]. " " .$languages[$lang]["confirm_order"],
    //             ],
    //         ]
    //     ];

    //     $reply_markup = $telegram->replyKeyboardMarkup([
    //         'keyboard' => $keyboard,
    //         'resize_keyboard' => true,
    //         'one_time_keyboard' => false,
    //     ]);


    //     $params = [
    //         'chat_id' => $chat->getId(), 
    //         'text' => $text,
    //         'parse_mode' => "Markdown",
    //         'reply_markup' => $reply_markup
    //     ];

    //     return $params;
    // }

    // public static function result($group_id, $text, $chat_id = null, $code)
    // {
    //     global $emoji, $languages;
        
    //     $params = [
    //         'chat_id' => $group_id, 
    //         'text' => $text,
    //         'parse_mode' => "Markdown"
    //     ];

    //     if (!is_null($chat_id)) {

    //         $inlineKeyboard = [];

    //         // add cancel button
    //         $buttons = [];
    //         array_push($buttons, Keyboard::inlineButton ([ 
    //             'text' => "Принять заказ",
    //             'callback_data' => '{"chat_id":'.$chat_id.', "code":'.$code.'}'
    //         ]));
    //         array_push($inlineKeyboard, $buttons);

    //         // add accept button
    //         $buttons = [];
    //         array_push($buttons, Keyboard::inlineButton ([ 
    //             'text' => "Отменить заказ",
    //             'callback_data' => '{"chat_id":'.$chat_id.', "cancel":1}'
    //         ]));
    //         array_push($inlineKeyboard, $buttons);

    //         $reply_markup = Keyboard::make ( [
    //             'inline_keyboard' => $inlineKeyboard
    //         ]);

    //         $params["reply_markup"] = $reply_markup;
    //     }


    //     return $params;
    // }

    // public static function photo($chat, $product)
    // {
    //     $url = Config::DOMAIN . "/uploads/" . $product->photo;

    //     $params = [
    //         'chat_id' => $chat->getId(),
    //         'photo' => $url
    //     ];

    //     return $params;
    // }

    // public static function accepted($chat_id, $code, $lang = "ru", $addition = null)
    // {
    //     global $emoji, $languages;

    //     $text = "🎉 *".$languages[$lang]["msg_accepted"]."* 🎉 \n";
    //     $text .= "CODE: *" . $code ."*";

    //     if (!is_null($addition))
    //         $text .= $addition;

    //     $params = [
    //         'chat_id' => $chat_id, 
    //         'text' => $text,
    //         'parse_mode' => "Markdown",
    //     ];

    //     return $params;
    // }

    // public static function cancel($chat_id, $user_id, $lang = "ru", $addition = null)
    // {
    //     global $emoji, $languages;

    //     $text = "🚫 *".$languages[$lang]["msg_cancel"]."* 🚫 \n";
    //     $text .= "*Operator*: [admin](tg://user?id=".$user_id.")";

    //     if (!is_null($addition))
    //         $text .= $addition;

    //     $params = [
    //         'chat_id' => $chat_id, 
    //         'text' => $text,
    //         'parse_mode' => "Markdown",
    //     ];

    //     return $params;
    // }

}

?>