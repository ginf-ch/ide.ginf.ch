<?php
$searchParams = $_SERVER['QUERY_STRING'];
?>
<section class="hero is-fullheight" id="version">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-two-thirds-desktop has-text-centered">
                    <h1 class="title is-size-1 is-size-4-mobile">
                        PyCharm Version?<br>
                        Entscheiden Sie <a class="has-text-black" href="https://www.youtube.com/watch?v=8Ppo5YIYwTM"
                                           target="_blank">logisch</a>.
                    </h1>
                </div>
            </div>
            <div class="columns is-centered">
                <div class="column is-two-thirds-desktop">
                    <div class="tabs is-toggle is-fullwidth is-large is-primary">
                        <ul>
                            <li id="pycharm-pro-tab-desktop">
                                <a href="<?php echo "index.php?$searchParams&version=pro#start" ?>">
                                    <span class="icon-text">
                                        <span class="icon">
                                            <i class="fa-solid fa-cubes" aria-hidden="true"></i>
                                        </span>
                                        <span class="is-hidden-tablet">Pro</span>
                                        <span class="is-hidden-mobile">Professional</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>