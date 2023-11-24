<?php
global $os;
$steps = [
    'Rufen Sie die Website von <a target="_blank" href="https://www.jetbrains.com">JetBrains</a> auf. Klicken Sie dort mit der Maus auf <q>Developer Tools</q>.',
    'Wählen Sie unter <q>Developer Tools</q> das Produkt <q>PhpStorm</q> aus.',
    'Klicken Sie nun auf <q>Download now</q>.',
    'Warten Sie, bis der Download beginnt.',
    'Warten Sie, bis der Download abgeschlossen ist.',
    'Öffnen Sie das <q>Download-Menü</q>, indem Sie auf <span class="icon"><i class="fa-solid fa-download"></i></span> klicken. Klicken Sie dann auf <span class="icon"><i class="fa-solid fa-arrow-up-right-from-square"></i></span> (<q>Öffnen</q>), um die Installation zu starten.',
    'Erlauben Sie die Installation, indem Sie auf <q>Ja</q> klicken.',
    'Klicken Sie auf <q>Next</q>.',
    'Klicken Sie erneut auf <q>Next</q>.',
    'Wählen Sie <b>zuerst</b> <q>PhpStorm</q>, <q>.php</q>, <q>.css</q> und <q>.html</q> aus und klicken Sie <b>dann</b> auf <q>Next</q>.',
    'Klicken Sie auf <q>Install</q>.',
    'Warten, bis die Installation abgeschlossen ist.',
    'Wählen Sie <b>zuerst</b> <q>Run PhpStorm</q> aus. Beenden Sie <b>dann</b> die Installation, indem Sie auf <q>Finish</q> klicken.',
    'Falls Sie einen Dialog zum <q>User Agreement</q> sehen, dann übernehmen Sie die Einstellungen aus dem Bild. Klicken Sie anschliessend auf <q>Continue</q>.',
    "Falls Sie einen Dialog zu <q>Data Sharing</q> sehen, dann fahren Sie mit einem Klick auf <q>Don't Send</q> fort.",
    "Falls Sie einen Dialog zu <q>Import PhpStorm Settings</q> sehen, dann wählen Sie <q>Do not import settings</q> aus. Klicken Sie anschliessend auf <q>OK</q>.",
    "Das Einrichten ist nun beendet. Schliessen Sie das Programm mit einem Klick auf <q>Exit</q>."
];
$fullOs = "Windows 11";
$browser = "Google Chrome";
$osExample = "Windows 10";
$browserExample = "Microsoft Edge";
$numberOfSteps = count($steps);
include("hinweis.php");
include("steps.php");
