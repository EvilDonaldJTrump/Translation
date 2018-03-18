<?php
/**
 * Created by PhpStorm.
 * User: coene
 * Date: 17/03/2018
 * Time: 19:25
 */

namespace NetherGames\NGEssentials\lang\locale;


class Dutch extends Language
{
    public function translations()
    {
        return array(
            "server.restart" => "§o§l§eN§6G§r§7: §eNether§6Games §bwordt herstart!",
            "staff.impersonating" => "§cHet nabootsen van staff members is niet toegestaan.",
            "db.error" => "§cEr is een onverwacht probleem opgetreden bij het verbinden met de database. Probeer later opnieuw.",
            "forums.linked.already" => "§cJe in-game account is al gelinkt met een forum account.",
            "forums.linked.incorrect" => "§cJe email/wachtwoord is incorrect",
            "forums.linked.authenticated" => "§aAccount controle gelukt - successvol ingelogd. account linken...",
            "forums.linked.error" => "§cEr is een onverwacht probleem opgetreden bij het controleren van jouw account.",
            "forums.linked.succesfull" => "§aJe forum en in-game account zijn succesvol gelinkt.",
        );
    }
}