<?php

namespace Incognito\SilextalkBase\Model;

use Incognito\SilextalkBase\Model\EmailMessageFactory;

class EmailMessageFactoryTest extends \PHPUnit_Framework_TestCase
{
      public function testEmailCreatedSuccessfully()
      {
          $address = "foo@example.com";
          $subject = "The subject";
          $body = "Some body";

          $emailMessage = EmailMessageFactory::createEmail(
              $address,
              $subject,
              $body
          );

          $this->assertInstanceOf('Incognito\SilextalkBase\Model\EmailMessage', $emailMessage);
      }
}
