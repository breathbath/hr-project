<?php

namespace HRProject\Consumers;

class EmailSender
{
    /**
     * @param string $to
     * @param string $subject
     * @param string $message
     * @param string $fromName
     * @param string $fromEmail
     * @return bool
     */
    public function send($to, $subject, $message, $fromName, $fromEmail)
    {
        $headers = 'From: ' . $fromName . "\r\n" .
            'Reply-To: ' . $fromEmail . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        return mail($to, $subject, $message, $headers);
    }
}
