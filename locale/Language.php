<?php

namespace NetherGames\NGEssentials\lang\locale;


abstract class Language
{
    public function translations()
    {
        return array();
    }

    public function getName()
    {
        return "UNKNOWN";
    }
}