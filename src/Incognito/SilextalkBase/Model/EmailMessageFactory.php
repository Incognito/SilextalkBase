<?php

namespace Incognito\SilextalkBase\Model;

use Symfony\Component\HttpFoundation\Request;

class EmailMessageFactory
{
    static public function createEmail($address, $subject, $body)
    {
        $emailMessage = new EmailMessage($address, $subject, $body);

        return $emailMessage;
    }
}
