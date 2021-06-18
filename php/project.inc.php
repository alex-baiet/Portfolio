<?php
if (!defined("DEF_PROJECT")) {
    define("DEF_PROJECT", true);

    /*
    Create an article for a project.
    string $title : Title of the article.
    string $class : Class to define the background of the article. 
                    See and complete in "project.css" to finish selecting the background.
    string $text : Description of the project. Using decorative tag is allowed.
    string $videoLink : Source of the video.
    */
    function addProject(
        string $title,
        string $class,
        string $text,
        string $videoLink
    ) {
        echo "
            <article class='$class' id='$class'>
                <h2>$title</h2>
                <p class='info'>$text</p>
                <video src='$videoLink' controls></video>
            </article>
        ";
    }
}

?>