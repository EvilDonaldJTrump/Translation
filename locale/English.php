<?php
/**
 * Created by PhpStorm.
 * User: coene
 * Date: 17/03/2018
 * Time: 19:25
 */

namespace NetherGames\NGEssentials\lang\locale;


class English extends Language
{
    public function translations()
    {
        return array(
            "server.restart" => "§o§l§eN§6G§r§7: §eNether§6Games §bhas restarted!",
            "staff.impersonating" => "§cImpersonating staff members is not allowed.",
            "db.error" => "§cAn unexpected database error occurred while connecting to the database. Please try again later.",
            "forums.linked.already" => "§cYour in-game account is already linked to a forums account.",
            "forums.linked.incorrect" => "§cYour username/email or password is incorrect.",
            "forums.linked.authenticated" => "§aAccount check complete - successfully authenticated. Linking your account...",
            "forums.linked.error" => "§cAn unknown error occurred while checking your account.",
            "forums.linked.succesfull" => "§aSuccessfully linked your forums and in-game accounts.",
            "vote.notyet" => "§cYou haven't voted yet today. Vote at §bngmc.co/v§c, then come back and claim your rank.",
            "vote.claiming" => "§6Thanks for voting! Claiming your rank...",
            "vote.claimed" => "§cYou've already voted and claimed your rank today.",
            "vote.announcement" => "§bvoted for us at §cvote.nethergames.org §bthen ran §6/vote §band got a voter rank!",
            "vote.error" => "§cAn unknown error occurred while checking your vote status.",
            "vote.succesfull" => "§aSuccessfully claimed your rank. Thanks for voting for §eNether§6Games§a!",
            "skin.notvalid.rejoin" => "§cYour skin is not valid to play on §eNether§6Games§c.\nPlease choose another one and rejoin.",
            "skin.notvalid" => "§cYour skin is not valid to play on §eNether§6Games§c.\nPlease choose another one.",
            "xp.summary" => "Experience Summary",
            "kills" => "Kills",
            "participation" => "Participation",
            "boost" => "boost",
            "win" => "Win",
            "world.noperm" => "§cYou do not have permission to build in this world.",
            "world.noperm.db.error" => "§cBuilding is currently disabled due to a database error. Please try again later.",
            "outdated.client" => "§cPlease update your client to the latest version to play §eNether§6Games§c.",
            "outdated.server" => "§eNether§6Games §chasn't updated to the latest version yet. Follow us on Twitter for updates - §6@NetherGamesMC",
            "maintenance" => "§cMaintenance in progress. Follow us on Twitter for updates - §6@NetherGamesMC",
            "overloaded" => "§cTo stop the server from overloading we have limited the amount of player joins per second - please try joining again.",
            "track.on" => "§cYou are currently tracking a player. Use §b/track off §cor §b/track exit §cto exit tracking mode.",
            "world.vote" => "§cYou must vote to access Mega Creative.",
            "auth.email.notlinked" => "§cWe detected that you have not linked an email to your account - it is advised that you link one at ngmc.co/a in case you forget your password.",
            "command.blocked" => "§cThat command is blocked.",
            "command.restricted" => "§cThat command is restricted.",
            "party.joingame" => "§cYou're currently in a party. Wait for your party host to decide which game to play!",
            "world.command.blocked" => "§cThat command is blocked in this world.",
            "command.blocked.db.error" => "§cThat command is currently blocked due to a database error. Please try again later.",
            "menu.blocked" => "§cYou don't have permission to use that menu.",
            "db.notsaved" => "§l§cAn unexpected error occurred while connecting to the database. Your data will not be saved for this session.",
            "party.stillingame" => "§cis still in a match. Wait for them before you join another one!",
            "server.offline" => "§cThat server is currently full or offline. Please try again later.",
            "party.alreadyhosting" => "§cYou're already hosting a party. Use §b/party leave §cto close the party and then create a new one",
            "party.alreadyin" => "§cYou're already in a party. Use §b/party leave §cto quit the party and then create a new one.",
        );
    }
}