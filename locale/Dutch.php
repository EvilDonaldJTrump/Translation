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
            "db.error" => "§cEr is een onverwachte fout opgetreden bij het verbinden met de database. Probeer later opnieuw.",
            "forums.linked.already" => "§cJe in-game account is al gelinkt met een forum account.",
            "forums.linked.incorrect" => "§cJe email/wachtwoord is incorrect",
            "forums.linked.authenticated" => "§aAccount controle gelukt - successvol ingelogd. account linken...",
            "forums.linked.error" => "§cEr is een onverwacht probleem opgetreden bij het controleren van jouw account.",
            "forums.linked.succesfull" => "§aJe forum en in-game account zijn succesvol gelinkt.",
            "vote.notyet" => "§cJe hebt nog niet gestemt vandaag. Stem op §bngmc.co/v§c, kom dan terug en activeer je rank.",
            "vote.claiming" => "§6Bedankt voor het stemmen! Rank activeren...",
            "vote.claimed" => "§cJe hebt al gestemt vandaag.",
            "vote.announcement" => "§bheeft gestemd voor ons op §cngmc.co/v §b, deed §6/vote §ben heeft voter rank gekregen!",
            "vote.error" => "§cEr is een fout opgetreden bij het nakijken van jouw stem status.",
        );
    }
}