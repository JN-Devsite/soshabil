<?php
// add file to composer.json, then run: composer dump-autoload
function current_user()
{
    return auth()->user();
}
