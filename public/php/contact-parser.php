<?php

function parseContacts($filename)
{
    $contactsArray = array();

    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $contentString = fread($handle, filesize($filename));
    $contentString = trim($contentString);

    $arrayOfStrings = explode("\n", $contentString);

    return $contentString;
}

var_dump(parseContacts('/Users/Roger/vagrant-lamp/sites/codeup.dev/public/php/contacts.txt'));
