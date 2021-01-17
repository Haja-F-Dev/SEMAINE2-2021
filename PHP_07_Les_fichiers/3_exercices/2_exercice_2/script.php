<?php

$lines = file("ListeLiens.txt");


foreach($lines as $line) {
    echo    "<ul>
                <li>$line</li>
            </ul>";
}