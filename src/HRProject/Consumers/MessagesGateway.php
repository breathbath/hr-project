<?php

namespace HRProject\Consumers;

class MessagesGateway
{
    public function getNextMessage()
    {
        $types = ['sms' => rand(9999999, 99999999), 'email' => 'no@mail.me', 'fax' => rand(9999999, 99999999)];
        $randomType = rand(0, 2);
        for($i = 0; $i < $randomType; $i++){
            next($types);
        }
        return array('type' => key($types), 'body' => 'someBody', 'to' => current($types));

    }
}
