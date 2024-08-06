<?php
global $os;
global $version;
$steps = [];
if ($version == "pro") {
    $steps = [
        'Rufen Sie die Website von <a target="_blank" href="https://www.jetbrains.com">JetBrains</a> auf. Klicken Sie dort mit der Maus auf <q>Developer Tools</q>.',
        'Wählen Sie unter <q>Developer Tools</q> das Produkt <q>PyCharm</q> aus.',
        'Klicken Sie nun auf <q>Download</q>.',
        'Überprüfen Sie den Prozessor bzw. Chip, <b>bevor</b> Sie mit dem Download beginnen: Klicken Sie links oben auf das Apple-Icon <span class="icon"><i class="fa-brands fa-apple" aria-hidden="true"></i></span> und wählen Sie <q>Über diesen Mac</q> aus. <b>Merken</b> Sie sich den Prozessor/Chip (Intel oder Apple M1, M2 bzw. M3).',
        'Klicken Sie <b>zuerst</b> auf den Pfeil <b>neben</b> <q>Download</q>. Wenn Sie einen <b>Intel-Prozessor</b> haben, dann klicken Sie auf <q>.dmg (Intel)</q>. Ansonsten klicken Sie auf <q>.dmg (Apple Silicon)</q> (für <b>Apple M1, M2 oder M3</b>).',
        'Warten Sie, bis der Download beginnt.',
        'Erlauben Sie den Download.',
        'Warten Sie, bis der Download abgeschlossen ist.',
        'Öffnen Sie die heruntergeladene Datei, um die Installation zu starten.',
        'Blenden Sie die <b>Pfadleiste</b> ein. Klicken Sie dazu in die Titelleiste <q>PyCharm</q>, dann im Menü auf <q>Darstellung</q> und anschliessend auf <q>Pfadleiste einblenden</q>.',
        'Installieren Sie das Programm, indem Sie das PyCharm-Icon mit gedrückter Maustaste auf das Applications-Icon ziehen.',
        'Warten Sie, bis macOS den Kopiervorgang abgeschlossen hat.',
        'Werfen Sie das Image aus. Klicken Sie dazu mit der rechten Maustaste (<q>control</q>-Taste gedrückt halten und dann <q>klicken</q>) auf das Disc-Icon und wählen Sie <q>PyCharm auswerfen</q> aus.',
        'Starten Sie <q>PyCharm</q> über das Launchpad.',
        'Warten Sie, bis das Programm geladen ist.',
        'Bestätigen Sie das Öffnen des Programms, indem Sie auf <q>Öffnen</q> klicken.',
        'Bestätigen Sie das <q>PyCharm User Agreement</q> durch das Anwählen der Checkbox. Klicken Sie anschliessend auf <q>Continue</q>.',
        "Falls Sie einen Dialog zu <q>Data Sharing</q> sehen, dann fahren Sie mit einem Klick auf <q>Don't Send</q> fort.",
        "Klicken Sie auf <q>Activate Paid License</q>.",
        "Die Installation ist abgeschlossen. Klicken Sie nun auf <q>Register...</q>, um den <b>Account</b> bei JetBrains zu erstellen. Sie finden die Anleitung dazu <a href='https://iprog.ginf.ch/#tools'>hier</a>."
    ];
} elseif ($version == "ce") {
    $steps = [
        'Rufen Sie die Website von <a target="_blank" href="https://www.jetbrains.com">JetBrains</a> auf. Klicken Sie dort mit der Maus auf <q>Developer Tools</q>.',
        'Wählen Sie unter <q>Developer Tools</q> das Produkt <q>PyCharm</q> aus.',
        'Klicken Sie nun auf <q>Download</q>.',
        'Überprüfen Sie den Prozessor bzw. Chip, <b>bevor</b> Sie mit dem Download beginnen: Klicken Sie links oben auf das Apple-Icon <span class="icon"><i class="fa-brands fa-apple" aria-hidden="true"></i></span> und wählen Sie <q>Über diesen Mac</q> aus. <b>Merken</b> Sie sich den Prozessor/Chip (Intel oder Apple M1 bzw. M2).',
        '<article class="message is-danger"><div class="message-header"><p>Achtung!</p></div><div class="message-body">Sie müssen die <b>PyCharm Community Edition</b> auswählen!</div></article>Scrollen Sie dazu nach unten, um zum Download-Bereich für die <b>Community Edition</b> von PyCharm zu gelangen',
        'Wählen Sie im Download-Bereich für die <b>PyCharm Community Edition</b> den entsprechenden Download aus. Wenn Sie einen <b>Intel-Prozessor</b> haben, dann <q>.dmg (Intel)</q>, ansonsten <q>.dmg (Apple Silicon)</q> (wenn Sie einen <b>Apple M1 oder M2</b> haben).',
        'Warten Sie, bis der Download beginnt.',
        'Erlauben Sie den Download.',
        'Warten Sie, bis der Download abgeschlossen ist.',
        'Öffnen Sie die heruntergeladene Datei, um die Installation zu starten.',
        'Blenden Sie die <b>Pfadleiste</b> ein. Klicken Sie dazu in die Titelleiste <q>PyCharm CE</q>, dann im Menü auf <q>Darstellung</q> und anschliessend auf <q>Pfadleiste einblenden</q>.',
        'Installieren Sie das Programm, indem Sie das PyCharm-Icon mit gedrückter Maustaste auf das Applications-Icon ziehen.',
        'Warten Sie, bis macOS den Kopiervorgang abgeschlossen hat.',
        'Werfen Sie das Image aus. Klicken Sie dazu mit der rechten Maustaste auf das Disc-Icon und wählen Sie <q>PyCharm CE auswerfen</q> aus.',
        'Starten Sie <q>PyCharm CE</q> über das Launchpad.',
        'Warten Sie, bis das Programm geladen ist.',
        'Bestätigen Sie das Öffnen des Programms, indem Sie auf <q>Öffnen</q> klicken.',
        'Bestätigen Sie das <q>PyCharm User Agreement</q> durch das Anwählen der Checkbox. Klicken Sie anschliessend auf <q>Continue</q>.',
        "Falls Sie einen Dialog zu <q>Data Sharing</q> sehen, dann fahren Sie mit einem Klick auf <q>Don't Send</q> fort.",
        "Das Einrichten ist nun beendet. Schliessen Sie das Programm mit einem Klick auf <q>das rote Kreuz</q>."
    ];
}
$fullOs = "macOS Sonoma (14.x)";
$browser = "Safari";
$osExample = "macOS Ventura";
$browserExample = "Google Chrome";
$numberOfSteps = count($steps);
include("hinweis.php");
include("steps.php");
