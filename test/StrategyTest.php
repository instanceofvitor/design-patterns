<?php
/*
* This file is part of DesignPatterns.
*
* (c) Vitor Silva <vsilva@live.co.uk>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace DesignPatterns\Test;

use DesignPatterns\Behavioral\Strategy\NotificationContext;
use DesignPatterns\Behavioral\Strategy\LetterStrategy;
use DesignPatterns\Behavioral\Strategy\SmtpStrategy;
use DesignPatterns\Behavioral\Strategy\SmsStrategy;

/**
 * Class StrategyTest
 *
 * @author Vitor Silva <vsilva@live.co.uk>
 */
class StrategyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * testLetterStrategyShouldNotify
     * @return void
     */
    public function testLetterStrategyShouldNotify()
    {
        $notification = new NotificationContext(new LetterStrategy());
        $this->assertTrue($notification->send());
    }

    /**
     * testSmtpStrategyShouldNotify
     * @return void
     */
    public function testSmtpStrategyShouldNotify()
    {
        $notification = new NotificationContext(new SmtpStrategy());
        $this->assertTrue($notification->send());
    }

    /**
     * testSmsStrategyShouldNotify
     * @return void
     */
    public function testSmsStrategyShouldNotify()
    {
        $notification = new NotificationContext(new SmsStrategy());
        $this->assertTrue($notification->send());
    }
}
