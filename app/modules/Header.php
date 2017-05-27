<?php

class Header
{
    public static function render($title, $addCSS = false, $addJS = false)
    {
        $mainCSS = [];
        $mainJS = [];

        if ($addCSS)
            $myCSS = array_merge($mainCSS, $addCSS);
        else $myCSS = $mainCSS;

        if ($addJS)
            $myJS = array_merge($mainJS, $addJS);
        else $myJS = $mainJS;

        require VIEWS.'myHeader'.PHP;
    }
}