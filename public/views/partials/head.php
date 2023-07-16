<?php

/**
 * @param string $page_title - The title of the page
 */
function page_head(string $page_title = ""): void
{
    echo <<<HTML
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
            <link rel="stylesheet" href="views/styles/global.css">

            <script src="https://cdn.tailwindcss.com"></script>
            <title>
                {$page_title}
            </title>
            <style>
                html,
                body {
                    height: 100%;
                    margin: 0;
                    padding: 0;
                }
            </style>
        </head>
    HTML;
}