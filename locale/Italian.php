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
            "server.restart" => "§o§l§eN§6G§r§7: §eNether§6Games si sta riavviando!",
            "staff.impersonating" => "§cRubare l'identità o imitare uno staff non è permesso.",
            "db.error" => "§cC'è stato un errore durante la connessione al database. Per favore riprova più tardi.",
            "forums.linked.already" => "§cIl tuo account NetherGames è già collegato ad un account forums.",
            "forums.linked.incorrect" => "§cIl tuo username/email o password sono incorretti.",
            "forums.linked.authenticated" => "§aControllo account completo - autenticato con successo. Collegando il tuo account...",
            "forums.linked.error" => "§cC'è stato un errore sconosciuto nel controllo del tuo account.",
            "forums.linked.succesfull" => "§aCollegati il tuo account NetherGames e il tuo account forums con successo.",
            "vote.notyet" => "§cNon hai ancora votato oggi. Vota a §bngmc.co/v§c, quindi torna ed ottieni il tuo rank.",
            "vote.claiming" => "§6Grazie per aver votato! Ottenendo il tuo rank...",
            "vote.claimed" => "§cHai già votato ed ottenuto il tuo rank oggi.",
            "vote.announcement" => "§bha votato per noi a §cngmc.co/v §bpoi eseguito §6/vote §b e ha ricevuto un rank voter!",
            "vote.error" => "§cC’è stato un errore sconosciuto nel controllo del tuo stato di voto.",
            "vote.succesfull" => "§aRank ottenuto con successo. Grazie per aver votato su §eNether§6Games§a!",
            "skin.notvalid.rejoin" => "§cLa tua skin non è valida per giocare su §eNether§6Games§c.\nPer favore scegline un’altra e rientra.",
            "xp.summary" => "Sommario dell’esperienza",
            "kills" => "Uccisioni",
            "participation" => "Partecipazione",
            "boost" => "Boost",
            "win" => "Vittoria",
            "world.noperm" => "§cNon hai il permesso di costruire in questo mondo.",
            "world.noperm.db.error" => "§cCostruire è temporaneamente disabilitato per via di un errore di database. Per favore riprova più tardi.",
            "outdated.client" => "§cPer favore aggiorna il tuo client all’ultima versione per giocare su §eNether§6Games§c.",
            "outdated.server" => "§eNether§6Games §cnon è ancora aggiornato all’ultima versione. Seguici su Twitter per aggiornamenti - §6@NetherGamesMC",
            "maintenance" => "§cManutenzione in corso. Seguici su Twitter per aggiornamenti - §6@NetherGamesMC",
            "overloaded" => "§cPer evitare che il server si carichi eccessivamente abbiamo limitato il numero di entrate di player al secondo - per favore prova ad entrare più tardi.",
            "track.on" => "§cStai tracciando un player. Usa §b/track off §co §b/track exit §cper uscire dalla modalità tracciamento.",
            "world.vote" => "§cDevi votare per accedere a Mega Creative.",
            "auth.email.notlinked" => "§cAbbiamo controllato che non hai una mail collegata al tuo account - raccomandiamo di collegarne una a ngmc.co/a nel caso dovessi dimenticare la tua password.",
            "command.blocked" => "§cQuel comando è bloccato.",
            "command.restricted" => "§cQuel comando è ristretto.",
            "party.joingame" => "§cSei in un party. Aspetta che il leader del party decida su quale mappa giocare!",
            "world.command.blocked" => "§cQuel comando è bloccato in questo mondo.",
            "command.blocked.db.error" => "§cQuel comando è correntemente bloccato a causa di un errore di database. Per favore prova più tardi.",
            "menu.blocked" => "§cNon hai il permesso di usare quel menu.",
            "db.notsaved" => "§l§cC’è stato un errore nella connessione al database. I tuoi dati non verranno salvati in questa sessione.",
            "party.stillingame" => "§cè ancora in una partita. Aspettalo prima di entrare in un’altra!",
            "server.offline" => "§cQuel server è correntemente pieno o offline. Per favore prova più tardi.",
            "party.alreadyhosting" => "§cSei già leader di un party. Usa §b/party leave §cper chiudere il party poi creane un altro.",
            "party.alreadyin" => "§cSei già in un party. Usa §b/party leave §cper uscire dal party poi creane un altro.",
        );
    }
}