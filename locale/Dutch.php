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
            "auth.email.notlinked" => "§cWe detecteren dat je nog geen email gelinkt heb aan je account - we adviseren je om dat te doen op ngmc.co/a als je je wachtwoord vergeet.",
            "auth.email.notlinked.forced" => "§cJe moet een email linken op §bngmc.co/a §cin om te spelen op §eNether§6Games§c.",
            "boost" => "boost",
            "command.blocked" => "§cDit command is geblokeerd.",
            "command.blocked.db.error" => "§cDit command is geblokeerd door een fout in de database. Please try again later.",
            "command.restricted" => "§cDit command is beperkt.",
            "db.error" => "§cEen onverwachtse database error is gebeurd toen we je aan het connecten waren. Probeer later opnieuw.",
            "db.notsaved" => "§l§cEen onverwachtse database error is gebeurd toen we je aan het connecten waren. Je data wordt niet bewaard voor deze sessie.",
            "doublexp" => "Dubbel XP weekend",
            "forms.party" => "§9Party Manager",
            "forms.party.chat" => "gebruik/niet gebruik party chat",
            "forms.party.full" => "§cJe party is vol!",
            "forms.party.info" => "§eJe party informatie:",
            "forms.party.info.host" => "§bParty host: §e",
            "forms.party.info.players" => "§bParty spelers: §e",
            "forms.party.invite" => "Invite meer spelers:",
            "forms.party.invited" => "Decline/accept invite by §b",
            "forms.party.kick" => "Stuur een speler eruit:",
            "forms.party.notvoter" => "§cSorry, je hebt  §7[§3Voter§7]§c rank nodig om dit te kunnen doen!",
            "forms.party.notvoter.2" => "§bVote voor ons §engmc.co/v§b! druk dan op §6'submit'§b om je vote te verifieren of doe §6/vote",
            "forms.party.quit" => "Verlaat de party",
            "forms.party.start" => "Start de party door iemand te inviten §7[§3Voter§7]§f rank of hoger.",
            "forms.reporter" => "§cReporter",
            "forms.reporter.category" => "Categorie:",
            "forms.reporter.nostaff" => "§cEr zijn momenteel geen staff members online om naar je report te kijken. Please report op §pbngmc.co/r §cof §6#report §con in onze Discord server - §bngmc.co/d",
            "forms.reporter.players" => "Spelers online:",
            "forms.reporter.reason" => "Reden:",
            "forms.switcher" => "§eAccount Switcher",
            "forms.switcher.oldpw" => "Typ je oude wachtwoord:",
            "forms.switcher.oldun" => "Typ je oude gebruikers naam:",
            "forms.switcher.welcome" => "Welkom bij de account verwisselaar! Als je een oud account hebt kan je deze functie gebruiken om je oude data naar je nieuwe account te brengen.",
            "forms.teleporter" => "§eNether§6Games §bTeleporter",
            "forms.teleporter.full" => "§cFULL",
            "forms.teleporter.offline" => "§cOFFLINE",
            "forms.teleporter.online" => "§2ONLINE",
            "forms.teleporter.select" => "Kies een minigame:",
            "forums.linked.already" => "§cJe in game account is al gelinkt aan je forums account.",
            "forums.linked.authenticated" => "§aAccount check compleet - succesvol geïdentificeerd. We linken je account...",
            "forums.linked.error" => "§ceen onbekende error is er gebeurd op het moment dat we je aan het verbinden waren.",
            "forums.linked.incorrect" => "§cJe username/wachtwoord is fout.",
            "forums.linked.succesfull" => "§aJe in-game-account is succesvol gekoppelt aan je ingame account.",
            "kills" => "Kills",
            "kit.given" => "§aJe bent gegeven aan §b",
            "maintenance" => "§cupdates in progress. Volg ons op Twitter voor updates - §6@NetherGamesMC",
            "menu.blocked" => "§cJe hebt geen permissie om dit command the gebruiken.",
            "outdated.client" => "§cPlease update je mincraft naar de recentste update om terug te spelen op §eNether§6Games§c.",
            "outdated.server" => "§eNether§6Games §cHeeft de laatste versie nog niet geupdate . Volg ons op twitter voor updates - §6@NetherGamesMC",
            "overloaded" => "§cOm de server niet te laten crashen hebben we een spelers limiet - Probeer opnieuw.",
            "participation" => "Deelname",
            "party.alreadyhosting" => "§cJe hebt al een party. Doe §b/party leave §cOm uit je huidige party te gaan",
            "party.alreadyin.host" => "§cis al in een party!",
            "party.alreadyin.player" => "§cJe hebt al een party. Doe §b/party leave §cOm uit je huidige party te gaan.",
            "party.alreadyinvited" => "§cJe bent al geinvite  §b",
            "party.created" => "§aMaakte al een nieuwe party. Doe §b/party invite §aom andere players te inviten!",
            "party.decline.host" => "§6heeft de party geweigerd.",
            "party.decline.player" => "§6heeft de party geweigerd van §b",
            "party.ended.host" => "§aheeft de party geëindigd.",
            "party.invite" => "§6heeft je uitgenodigd om hun party te joinen! Doe §c/party accept {%0} §6om de uitnodiging the accepteren.",
            "party.invited" => "§aInvited §b{%0} §anaar je party.",
            "party.join" => "§6kwam bij de party.",
            "party.joingame" => "§cJe bent momenteel in een party. Wacht voor je party leider om een game te kiezen!",
            "party.kicked" => "§cJe bent uit de party gezet door §b",
            "party.leave.player" => "§aJe bent uit de party gegaan.",
            "party.leave.players" => "§6Is de party vertrokken.",
            "party.max" => "§cJe kan niet meer dan  §65 §cin je party uitnodigen!",
            "party.noinvite" => "§cDeze speler heeft geen party invite naar je gestuurd.",
            "party.nothosting" => "§cJe hebt momenteel geen party!",
            "party.notin" => "§cJe bent niet in een party!",
            "party.stillingame" => "§cis nog in een match. Wacht voor hem vooraleer je een nieuwe match speelt!",
            "party.welcome" => "§6Welkom bij §b{%0}'s §6party!",
            "server.full" => "§cDeze server is momenteel vol. Probeer later opnieuw.",
            "server.offline" => "§cDeze server is momenteel vol of offline. Probeer later opnieuw.",
            "server.restart" => "§o§l§eN§6G§r§7: §eNether§6Games §bhis aan het herstarten!",
            "skin.notvalid" => "§cJe skin is niet compatibel met  §eNether§6Games§c.\nKies een andere.",
            "skin.notvalid.rejoin" => "§cJe skin is niet competatiebel met §eNether§6Games§c.\nKies een andere skin en probeer opnieuw in te loggen.",
            "staff.impersonating" => "§cEen staff lid nadoen is niet toegelaten.",
            "track.on" => "§cJe bent momenteel een speler aan het volgen. Use §b/track off §cof §b/track exit §com te stoppen met volgen.",
            "vote.announcement" => "§bheeft voor ons gestemd §cngmc.co/v §bthen ran §6/vote §band kreeg te voter rank!",
            "vote.claimed" => "§cJe hebt vandaag al gevote en je rank gekregen.",
            "vote.claiming" => "§6Bedankt voor het stemmen! Je krijgt je rank...",
            "vote.error" => "§cEen onbekende error is gebeurd terwijl we je voter status aan het bekijken waren.",
            "vote.notyet" => "§cJe hebt vandaag nog niet gestemd. Stem op §bngmc.co/v§c, Kom terug en ontvang je rank.",
            "vote.succesfull" => "§aJe hebt je rank succesvol gekregen. Bedankt voor het stemmen op §eNether§6Games§a!",
            "win" => "Win",
            "world.command.blocked" => "§cDit command is geblokkeerd in deze wereld.",
            "world.noperm" => "§cJe hebt geen rechten om dit command te gebruiken.",
            "world.noperm.db.error" => "§cBouwen is uitgeschakeld door een error in de database. Probeer later opnieuw.",
            "world.vote" => "§cJe moet voten om naar Mega Creative te gaan.",
            "xp.summary" => "Experience Summary",
        );
    }

    public function getName()
    {
        return "Dutch";
    }
}