<?php
/**
 * Created by PhpStorm.
 * User: coene
 * Date: 17/03/2018
 * Time: 19:25
 */

namespace NetherGames\NGEssentials\lang\locale;


class Italian extends Language
{
    public function translations()
    {
        return array(
            "auth.email.notlinked" => "§cAbbiamo controllato che non hai una mail collegata al tuo account - raccomandiamo di collegarne una a ngmc.co/a nel caso dovessi dimenticare la tua password.",
            "auth.email.notlinked.forced" => "§cDevi connettere il tuo account ad una mail a §bngmc.co/a §cper continuare a giocare su §eNether§6Games§c.",
            "boost" => "Boost",
            "command.blocked" => "§cQuel comando è bloccato.",
            "command.blocked.db.error" => "§cQuel comando è correntemente bloccato a causa di un errore di database. Per favore prova più tardi.",
            "command.restricted" => "§cQuel comando è ristretto.",
            "db.error" => "§cC'è stato un errore durante la connessione al database. Per favore riprova più tardi.",
            "db.notsaved" => "§l§cC’è stato un errore nella connessione al database. I tuoi dati non verranno salvati in questa sessione.",
            "doublexp" => "Weekend Doppio XP",
            "forums.linked.already" => "§cIl tuo account NetherGames è già collegato ad un account forums.",
            "forums.linked.authenticated" => "§aControllo account completo - autenticato con successo. Collegando il tuo account...",
            "forums.linked.error" => "§cC'è stato un errore sconosciuto nel controllo del tuo account.",
            "forums.linked.incorrect" => "§cIl tuo username/email o password sono incorretti.",
            "forums.linked.succesfull" => "§aCollegati il tuo account NetherGames e il tuo account forums con successo.",
            "kills" => "Uccisioni",
            "kit.given" => "§aHai ricevuto il §b",
            "maintenance" => "§cManutenzione in corso. Seguici su Twitter per aggiornamenti - §6@NetherGamesMC",
            "menu.blocked" => "§cNon hai il permesso di usare quel menu.",
            "outdated.client" => "§cPer favore aggiorna il tuo client all’ultima versione per giocare su §eNether§6Games§c.",
            "outdated.server" => "§eNether§6Games §cnon è ancora aggiornato all’ultima versione. Seguici su Twitter per aggiornamenti - §6@NetherGamesMC",
            "overloaded" => "§cPer evitare che il server si carichi eccessivamente abbiamo limitato il numero di entrate di player al secondo - per favore prova ad entrare più tardi.",
            "participation" => "Partecipazione",
            "party.alreadyhosting" => "§cSei già leader di un party. Usa §b/party leave §cper chiudere il party poi creane un altro.",
            "party.alreadyin" => "§cSei già in un party. Usa §b/party leave §cper uscire dal party poi creane un altro.",
            "party.alreadyin.host" => "§cè già in un party!",
            "party.alreadyin.player" => "§cSei già in un party. Usa §b/party leave §cper abbandonare il party e crearne un altro.",
            "party.alreadyinvited" => "§cHai già invitato §b",
            "party.created" => "§aCreated a new party. Use §b/party invite §ato invite other players to your party!",
            "party.decline.host" => "§6ha rifiutato il tuo invito al party.",
            "party.decline.player" => "§6Rifiutato l’invito al party da §b",
            "party.ended.host" => "§aTerminato il tuo party.",
            "party.invite" => "§6ti ha invitato ad entrare nel suo party! sa §c/party accept {%1} §6per accettare l'invito.",
            "party.invited" => "§aInvitato §b{%1} §anel tuo party.",
            "party.join" => "§6è entrato nel party.",
            "party.joingame" => "§cSei in un party. Aspetta che il leader del party decida su quale mappa giocare!",
            "party.kicked" => "§cSei stato espulso dal party da §b",
            "party.leave.player" => "§aSei uscito dal party.",
            "party.leave.players" => "§6è uscito dal party.",
            "party.max" => "§cNon puoi invitare più di §65 §cnel tuo party!",
            "party.noinvite" => "§cQuel player non ti ha mandato un invito.",
            "party.nothosting" => "§cNon sei il leader di un party!",
            "party.notin" => "§cNon sei in un party!",
            "party.stillingame" => "§cè ancora in una partita. Aspettalo prima di entrare in un’altra!",
            "party.welcome" => "§6Benvenuto nel party di §b{%1} §6!",
            "server.full" => "§cQuel server è al momento pieno. Per favore prova più tardi.",
            "server.offline" => "§cQuel server è correntemente pieno o offline. Per favore prova più tardi.",
            "server.restart" => "§o§l§eN§6G§r§7: §eNether§6Games si sta riavviando!",
            "skin.notvalid" => "§cLa tua skin non è valida per giocare su §eNether§6Games§c.\nPer favore scegline un’altra.",
            "skin.notvalid.rejoin" => "§cLa tua skin non è valida per giocare su §eNether§6Games§c.\nPer favore scegline un’altra e rientra.",
            "staff.impersonating" => "§cRubare l'identità o imitare uno staff non è permesso.",
            "track.on" => "§cStai tracciando un player. Usa §b/track off §co §b/track exit §cper uscire dalla modalità tracciamento.",
            "vote.announcement" => "§bha votato per noi a §cngmc.co/v §bpoi eseguito §6/vote §b e ha ricevuto un rank voter!",
            "vote.claimed" => "§cHai già votato ed ottenuto il tuo rank oggi.",
            "vote.claiming" => "§6Grazie per aver votato! Ottenendo il tuo rank...",
            "vote.error" => "§cC’è stato un errore sconosciuto nel controllo del tuo stato di voto.",
            "vote.notyet" => "§cNon hai ancora votato oggi. Vota a §bngmc.co/v§c, quindi torna ed ottieni il tuo rank.",
            "vote.succesfull" => "§aRank ottenuto con successo. Grazie per aver votato su §eNether§6Games§a!",
            "win" => "Vittoria",
            "world.command.blocked" => "§cQuel comando è bloccato in questo mondo.",
            "world.noperm" => "§cNon hai il permesso di costruire in questo mondo.",
            "world.noperm.db.error" => "§cCostruire è temporaneamente disabilitato per via di un errore di database. Per favore riprova più tardi.",
            "world.vote" => "§cDevi votare per accedere a Mega Creative.",
            "xp.summary" => "Sommario dell’esperienza",
        );
    }
}