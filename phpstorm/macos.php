<?php
global $os;
$steps = [
    'Rufen Sie die Website von <a target="_blank" href="https://www.jetbrains.com">JetBrains</a> auf. Klicken Sie dort mit der Maus auf <q>Developer Tools</q>.',
    'Wählen Sie unter <q>Developer Tools</q> das Produkt <q>PhpStorm</q> aus.',
    'Klicken Sie nun auf <q>Download now</q>.',
    'Überprüfen Sie den Prozessor bzw. Chip, <b>bevor</b> Sie mit dem Download beginnen: Klicken Sie links oben auf das Apple-Icon <span class="icon"><i class="fa-brands fa-apple" aria-hidden="true"></i></span> und wählen Sie <q>Über diesen Mac</q> aus. <b>Merken</b> Sie sich den Prozessor/Chip (Intel oder Apple M1 bzw. M2).',
    'Wählen Sie im Download-Bereich für <b>PhpStorm</b> den entsprechenden Download aus. Wenn Sie einen <b>Intel-Prozessor</b> haben, dann <q>.dmg (Intel)</q>, ansonsten <q>.dmg (Apple Silicon)</q> (wenn Sie einen <b>Apple M1 oder M2</b> haben).',
    'Warten Sie, bis der Download beginnt.',
    'Erlauben Sie den Download.',
    'Warten Sie, bis der Download abgeschlossen ist.',
    'Öffnen Sie die heruntergeladene Datei, um die Installation zu starten.',
    'Installieren Sie das Programm, indem Sie das PhpStorm-Icon mit gedrückter Maustaste auf das Applications-Icon ziehen.',
    'Warten Sie, bis macOS den Kopiervorgang abgeschlossen hat.',
    'Werfen Sie das Image aus. Klicken Sie dazu mit der rechten Maustaste auf das Disc-Icon und wählen Sie <q>PhpStorm auswerfen</q> aus.',
    'Starten Sie <q>PhpStorm</q> über das Launchpad.',
    'Warten Sie, bis das Programm geladen ist.',
    'Bestätigen Sie das Öffnen des Programms, indem Sie auf <q>Öffnen</q> klicken.',
    'Falls Sie einen Dialog zum <q>User Agreement</q> sehen, dann übernehmen Sie die Einstellungen aus dem Bild. Klicken Sie anschliessend auf <q>Continue</q>.',
    "Falls Sie einen Dialog zu <q>Data Sharing</q> sehen, dann fahren Sie mit einem Klick auf <q>Don't Send</q> fort.",
    "Falls Sie einen Dialog zu <q>Import PhpStorm Settings</q> sehen, dann wählen Sie <q>Do not import settings</q> aus. Klicken Sie anschliessend auf <q>OK</q>.",
    "Das Einrichten ist nun beendet. Schliessen Sie das Programm mit einem Klick auf <q>Exit</q>."
];
$fullOs = "macOS Ventura (13.x)";
$browser = "Safari";
$osExample = "macOS Monterey";
$browserExample = "Google Chrome";
$numberOfSteps = count($steps);
include("hinweis.php");
include("steps.php");
