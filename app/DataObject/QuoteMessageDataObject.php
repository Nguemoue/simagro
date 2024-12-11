<?php

namespace App\DataObject;

class QuoteMessageDataObject
{
    public function __construct(
        public string $message,
        public string $name,
        public string $email
    )
    {
    }

}
