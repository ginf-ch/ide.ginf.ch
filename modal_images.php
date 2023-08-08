<?php
global $numberOfSteps;
$os = $_GET["os"];
$version = $_GET["version"];
for ($i = 1; $i <= $numberOfSteps; $i++) {
    $prefix = $i <= 9 ? "0$i" : "$i";
    $postfix = $i;
    echo "
<div id='macos_step_$postfix' class='modal'>
    <div class='modal-background'></div>
    
    <div class='modal-content' >
        <figure class='image'>
            <img class='tutorial-img' src='images/$os/$version/$prefix" . "_pycharm_$version" . "_" . "$os.png' alt='$os" . "_" . $version . "_step_" . "$postfix'>
        </figure>
    </div>

    <button class='modal-close is-large' aria-label='close'></button>
</div>";
}
