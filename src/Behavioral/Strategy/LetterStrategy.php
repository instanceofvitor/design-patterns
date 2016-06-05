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
 * Class LetterStrategy
 *
 * @author Vitor Silva <vsilva@live.co.uk>
 */
class LetterStrategy implements NotificationInterface
{
    /**
     * {@inheritdoc}
     */
    public function send()
    {
        echo 'Sending letter notification ...' , PHP_EOL;
        return true;
    }
}
