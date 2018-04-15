<?php
declare(strict_types=1);

namespace NetherGames\NGEssentials\lang;

use NetherGames\NGEssentials\lang\locale\Dutch;
use NetherGames\NGEssentials\lang\locale\English;
use NetherGames\NGEssentials\lang\locale\Italian;
use NetherGames\NGEssentials\lang\locale\Language;
use NetherGames\NGEssentials\lang\locale\Swedish;
use pocketmine\Player;

class BaseLang
{
    static function translateStringPlayer(Player $player, string $string, array $params = [])
    {
        return self::translateString(self::getPlayerLanguage($player), $string, $params);
    }

    static function translateString(Language $language, string $string, array $params = []): string
    {
        if (isset($language->translations()[$string])) {
            $text = $language->translations()[$string];
        } else {
            $defaultLanguage = new English();
            if (isset($defaultLanguage->translations()[$string])) {
                $text = $defaultLanguage->translations()[$string];
            } else {
                $text = "";
            }
        }

        foreach ($params as $i => $p) {
            $text = str_replace("{%$i}", $p, $text);
        }

        return $text;
    }

    static function getPlayerLanguage(Player $player): Language
    {
        switch ($player->getLocale()) {
            case "nl_NL":
                return new Dutch();
                break;
            case "it_IT":
                return new Italian();
                break;
            case "sv_SE":
                return new Swedish();
                break;
            default:
                return new English();
                break;
        }
    }
}
