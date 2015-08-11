<?php

namespace HRProject\Consumers;

class ConfigProvider
{
    public function getConfig()
    {
        return array('defaultEmail' => 'no@mail.me', 'defaultName' => 'Awesome company');
    }
}
