<?php
declare(strict_types=1);

namespace NetherGames\NGEssentials\lang;

use NetherGames\NGEssentials\lang\locale\Dutch;
use NetherGames\NGEssentials\lang\locale\English;
use NetherGames\NGEssentials\lang\locale\Italian;
use NetherGames\NGEssentials\lang\locale\Language;
use pocketmine\Player;

class BaseLang
{

    static function translateString(Language $language, string $string): string
    {
        if (isset($language->translations()[$string])) {
            return $language->translations()[$string];
        } else {
            $defaultLanguage = new English();
            if (isset($defaultLanguage->translations()[$string])) {
                return $defaultLanguage->translations()[$string];
            } else {
                return "";
            }
        }
    }

    static function translateStringPlayer(Player $player, string  $string)
    {
        return self::translateString(self::getPlayerLanguage($player), $string);
    }

    static function getPlayerLanguage(Player $player): Language
    {
        switch ($player->getLocale()) {
            case "en_US":
                return new English();
                break;
            case "nl_NL":
                return new Dutch();
                break;
            case "it_IT":
                return new Italian();
                break;
        }
    }
}
