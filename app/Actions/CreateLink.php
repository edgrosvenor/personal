<?php

namespace App\Actions;

/*
|--------------------------------------------------------------------------
| Today's Mantra: Sometimes more is more.
|--------------------------------------------------------------------------
|
| There are definitely ways that I could reduce the number of lines of code
| here. But none of those options is as easy to read and understand as this.
| At the end of the day, we are just building up a string from other strings
| and old-fashioned, tried and true concatenation is the simplest way to go.
|
*/

class CreateLink
{
    public function execute(string $text, string $url, null | string $tooltip = null,
                            null | string $target = null): string
    {


        // I'm using Ryan Chandler's Tooltip Package here
        $link = $tooltip === null ? '' : '<span x-data="{ tooltip: \'' . $tooltip . '\' }">';

        $link .= '<a href="' . $url . '"';

        $link .= $tooltip === null ? '' : ' x-tooltip="tooltip"';

        $link .= $target === null ? '' : ' target="' . $target . '"';

        $link .= '>' . $text . '</a>';

        $link .= $tooltip === null ? '' : '</span>';

        return $link;
    }

}
