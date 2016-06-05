<?php
/*
* This file is part of DesignPatterns.
*
* (c) Vitor Silva <vsilva@live.co.uk>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace DesignPatterns\Behavioral\Strategy;

/**
 * Class Client
 *
 * @author Vitor Silva <vsilva@live.co.uk>
 */
class Client
{
    /**
     * run
     *
     * @return void
     */
    public function run()
    {
        $notification = new NotificationContext(new LetterStrategy());
        $notification->send();

        $notification = new NotificationContext(new SmtpStrategy());
        $notification->send();

        $notification = new NotificationContext(new SmsStrategy());
        $notification->send();
    }
}
