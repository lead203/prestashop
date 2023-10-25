<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('uk-UA', array (
));

$catalogueUk = new MessageCatalogue('uk', array (
));
$catalogue->addFallbackCatalogue($catalogueUk);

return $catalogue;
