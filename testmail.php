<?php
use google\appengine\api\mail\Message;

// Notice that $image_content_id is the optional Content-ID header value of the
// attachment. Must be enclosed by angle brackets (<>)

try {
    $message = new Message();
    $message->setSender('dhirendra@hometriangle.com');
    $message->addTo('dhirendra@hometriangle.com');
    $message->setSubject('Example email');
    $message->setTextBody('Hello, world!');
    $message->send();
    echo 'Mail Sent';
} catch (InvalidArgumentException $e) {
    echo 'There was an error';
}
?>
