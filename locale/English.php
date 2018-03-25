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
            "auth.email.notlinked" => "§cWe detected that you have not linked an email to your account - it is advised that you link one at ngmc.co/a in case you forget your password.",
            "auth.email.notlinked.forced" => "§cYou must link an email to your account at §bngmc.co/a §cin order to continue joining §eNether§6Games§c.",
            "boost" => "boost",
            "command.blocked" => "§cThat command is blocked.",
            "command.blocked.db.error" => "§cThat command is currently blocked due to a database error. Please try again later.",
            "command.restricted" => "§cThat command is restricted.",
            "db.error" => "§cAn unexpected database error occurred while connecting to the database. Please try again later.",
            "db.notsaved" => "§l§cAn unexpected error occurred while connecting to the database. Your data will not be saved for this session.",
            "doublexp" => "Double XP weekend",
            "forums.linked.already" => "§cYour in-game account is already linked to a forums account.",
            "forums.linked.authenticated" => "§aAccount check complete - successfully authenticated. Linking your account...",
            "forums.linked.error" => "§cAn unknown error occurred while checking your account.",
            "forums.linked.incorrect" => "§cYour username/email or password is incorrect.",
            "forums.linked.succesfull" => "§aSuccessfully linked your forums and in-game accounts.",
            "kills" => "Kills",
            "kit.given" => "§aYou've been given the §b",
            "maintenance" => "§cMaintenance in progress. Follow us on Twitter for updates - §6@NetherGamesMC",
            "menu.blocked" => "§cYou don't have permission to use that menu.",
            "outdated.client" => "§cPlease update your client to the latest version to play §eNether§6Games§c.",
            "outdated.server" => "§eNether§6Games §chasn't updated to the latest version yet. Follow us on Twitter for updates - §6@NetherGamesMC",
            "overloaded" => "§cTo stop the server from overloading we have limited the amount of player joins per second - please try joining again.",
            "participation" => "Participation",
            "party.alreadyhosting" => "§cYou're already hosting a party. Use §b/party leave §cto close the party and then create a new one",
            "party.alreadyin.host" => "§cis already in a party!",
            "party.alreadyin.player" => "§cYou're already in a party. Use §b/party leave §cto quit the party and then create a new one.",
            "party.alreadyinvited" => "§cYou have already invited §b",
            "party.created" => "§aCreated a new party. Use §b/party invite §ato invite other players to your party!",
            "party.decline.host" => "§6has declined your party invite.",
            "party.decline.player" => "§6Declined the party invite from §b",
            "party.ended.host" => "§aEnded your party.",
            "party.invite" => "§6has invited you to join their party! Use §c/party accept {%1} §6to accept the invitation.",
            "party.invited" => "§aInvited §b{%1} §ato your party.",
            "party.join" => "§6joined the party.",
            "party.joingame" => "§cYou're currently in a party. Wait for your party host to decide which game to play!",
            "party.kicked" => "§cYou have been kicked from the party by §b",
            "party.leave.player" => "§aYou left the party.",
            "party.leave.players" => "§6left the party.",
            "party.max" => "§cYou can't invite more of §65 §cin your party!",
            "party.noinvite" => "§cThat player hasn't sent an invite to you.",
            "party.nothosting" => "§cYou're not hosting a party!",
            "party.notin" => "§cYou're not in a party!",
            "party.stillingame" => "§cis still in a match. Wait for them before you join another one!",
            "party.welcome" => "§6Welcome to §b{%1}'s §6party!",
            "server.full" => "§cThat server is currently full. Please try again later.",
            "server.offline" => "§cThat server is currently full or offline. Please try again later.",
            "server.restart" => "§o§l§eN§6G§r§7: §eNether§6Games §bhas restarted!",
            "skin.notvalid" => "§cYour skin is not valid to play on §eNether§6Games§c.\nPlease choose another one.",
            "skin.notvalid.rejoin" => "§cYour skin is not valid to play on §eNether§6Games§c.\nPlease choose another one and rejoin.",
            "staff.impersonating" => "§cImpersonating staff members is not allowed.",
            "track.on" => "§cYou are currently tracking a player. Use §b/track off §cor §b/track exit §cto exit tracking mode.",
            "vote.announcement" => "§bvoted for us at §cngmc.co/v §bthen ran §6/vote §band got a voter rank!",
            "vote.claimed" => "§cYou've already voted and claimed your rank today.",
            "vote.claiming" => "§6Thanks for voting! Claiming your rank...",
            "vote.error" => "§cAn unknown error occurred while checking your vote status.",
            "vote.notyet" => "§cYou haven't voted yet today. Vote at §bngmc.co/v§c, then come back and claim your rank.",
            "vote.succesfull" => "§aSuccessfully claimed your rank. Thanks for voting for §eNether§6Games§a!",
            "win" => "Win",
            "world.command.blocked" => "§cThat command is blocked in this world.",
            "world.noperm" => "§cYou do not have permission to build in this world.",
            "world.noperm.db.error" => "§cBuilding is currently disabled due to a database error. Please try again later.",
            "world.vote" => "§cYou must vote to access Mega Creative.",
            "xp.summary" => "Experience Summary",
        );
    }
}