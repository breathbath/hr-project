<?php

namespace HRProject\Consumers;

class EmailMessagesConsumer implements Consumer
{
    /**
     * @var EmailSender
     */
    private $sender;

    /**
     * @var ConfigProvider
     */
    private $configProvider;

    /**
     * @param EmailSender $sender
     * @param ConfigProvider $configProvider
     */
    function __construct(EmailSender $sender, ConfigProvider $configProvider)
    {
        $this->sender = $sender;
        $this->configProvider = $configProvider;
    }

    /**
     * @param string $message
     * @return bool
     */
    public function consume($message)
    {
        $emailTo = $message['to'];
        $body = $message['body'];
        $emailFrom = $this->configProvider->getConfig()['defaultEmail'];
        $nameFrom = $this->configProvider->getConfig()['defaultName'];

        $this->sender->send($emailTo, 'someSubject', $body, $nameFrom,  $emailFrom, $body);
    }

}
