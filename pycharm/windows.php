<?php
global $os;
global $version;
$steps = [];
if ($version == "pro") {
    $steps = [
        'Rufen Sie die Website von <a target="_blank" href="https://www.jetbrains.com">JetBrains</a> auf. Klicken Sie dort mit der Maus auf <q>Developer Tools</q>.',
        'Wählen Sie unter <q>Developer Tools</q> das Produkt <q>PyCharm</q> aus.',
        'Klicken Sie nun auf <q>Download</q>.',
        'Klicken Sie auf <q>Download</q>.',
        'Warten Sie, bis der Download beginnt.',
        'Warten Sie, bis der Download abgeschlossen ist.',
        'Öffnen Sie das <q>Download-Menü</q>, indem Sie auf <span class="icon"><i class="fa-solid fa-download"></i></span> klicken. Klicken Sie dann auf <span class="icon"><i class="fa-solid fa-arrow-up-right-from-square"></i></span> (<q>Öffnen</q>), um die Installation zu starten.',
        'Erlauben Sie die Installation, indem Sie auf <q>Ja</q> klicken.',
        'Klicken Sie auf <q>Next</q>.',
        'Klicken Sie erneut auf <q>Next</q>.',
        'Wählen Sie <b>zuerst</b> <q>PyCharm</q> <b>und</b> <q>.py</q> aus und klicken Sie <b>dann</b> auf <q>Next</q>.',
        'Klicken Sie auf <q>Install</q>.',
        'Warten, bis die Installation abgeschlossen ist.',
        'Wählen Sie <b>zuerst</b> <q>Run PyCharm</q> aus. Beenden Sie <b>dann</b> die Installation, indem Sie auf <q>Finish</q> klicken.',
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
        '<article class="message is-danger"><div class="message-header"><p>Achtung!</p></div><div class="message-body">Sie müssen die <b>PyCharm Community Edition</b> auswählen!</div></article>Scrollen Sie dazu nach unten, um zum Download-Bereich für die <b>Community Edition</b> von PyCharm zu gelangen',
        'Klicken Sie im Download-Bereich für die <b>PyCharm Community Edition</b> auf <q>Download</q>.',
        'Warten Sie, bis der Download beginnt.',
        'Warten Sie, bis der Download abgeschlossen ist.',
        'Öffnen Sie das <q>Download-Menü</q>, indem Sie auf <span class="icon"><i class="fa-solid fa-download"></i></span> klicken. Klicken Sie dann auf <span class="icon"><i class="fa-solid fa-arrow-up-right-from-square"></i></span> (<q>Öffnen</q>), um die Installation zu starten.',
        'Erlauben Sie die Installation, indem Sie auf <q>Ja</q> klicken.',
        'Klicken Sie auf <q>Next</q>.',
        'Klicken Sie erneut auf <q>Next</q>.',
        'Wählen Sie <b>zuerst</b> <q>PyCharm Community Edition</q> <b>und</b> <q>.py</q> aus und klicken Sie <b>dann</b> auf <q>Next</q>.',
        'Klicken Sie auf <q>Install</q>.',
        'Warten, bis die Installation abgeschlossen ist.',
        'Wählen Sie <b>zuerst</b> <q>Run PyCharm Community Edition</q> aus. Beenden Sie <b>dann</b> die Installation, indem Sie auf <q>Finish</q> klicken.',
        'Bestätigen Sie das <q>PyCharm User Agreement</q> durch das Anwählen der Checkbox. Klicken Sie anschliessend auf <q>Continue</q>.',
        "Falls Sie einen Dialog zu <q>Data Sharing</q> sehen, dann fahren Sie mit einem Klick auf <q>Don't Send</q> fort.",
        "Das Einrichten ist nun beendet. Schliessen Sie das Programm mit einem Klick auf <q>das Kreuz</q>."
    ];
}
$fullOs = "Windows 11";
$browser = "Google Chrome";
$osExample = "Windows 10";
$browserExample = "Microsoft Edge";
$numberOfSteps = count($steps);
include("hinweis.php");
include("steps.php");
