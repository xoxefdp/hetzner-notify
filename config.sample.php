<?php

return array(
     // set this to either 'discord', 'raw' (output in CLI) or 'rocketchat'
    'client' => 'raw',

    // Root domain of your Rocket Chat installation.
    'host' => 'https://open.rocket.chat',

    // The token generated by Rocket.Chat. Info on obtaining this is located in README.md.
    'token' => 'InsertYourToken',

    // Discord specific
    'discord_webhook_url' => 'https://discordapp.com/api/webhooks/XXX',

    // The user(s) that will be mentioned by the bot each time a message is triggered. Spaces can be used to separate users.
    'mention' => '@example',

    // VAT percentage for EU customers. This is displayed as x% MwSt by thWe bot and a calculated price (price of server + VAT) will be displayed by the bot. Dutch BTW 21%.
    // Reference for VAT rates: https://www.ricksteves.com/travel-tips/money/vat-rates-in-europe
    // BOTH of these conditions MUST be fulfilled by a server in order for you to be notified.
    'vat' => 21,

    // Maximum price for a server in the auction that you wish to be notified of. Price is in Euros (€).
    'max_price' => 20,

    // Minimum amount of RAM (in GB) a server must have in order for you to be notified.
    'min_ram' => 5,

    // Maximum amount of new servers to show. SETTING THIS VALUE TOO HIGH WILL CAUSE HIGH CPU USAGE ON THE ROCKET.CHAT CLIENT AND SERVER!
    'max_list' => 10,

    // Whether you wish to give credit to me (the creator of this script) via a small footer in each message sent by the bot.
    'thanks' => true,

    // Caching on/off
    'cache' => true
);
