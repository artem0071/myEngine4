<?php

class Footer
{
    public static function render($addJS = false, $addCSS = false)
    {
        $mainCSS = [];
        $mainJS = [];

        if ($addCSS)
            $myCSS = array_merge($mainCSS, $addCSS);
        else $myCSS = $mainCSS;

        if ($addJS)
            $myJS = array_merge($mainJS, $addJS);
        else $myJS = $mainJS;

        require VIEWS.'myFooter'.PHP;
    }
}