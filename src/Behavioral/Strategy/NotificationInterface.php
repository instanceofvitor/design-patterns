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
 * Interface NotificationInterface
 *
 * @author Vitor Silva <vsilva@live.co.uk>
 */
interface NotificationInterface
{
    /**
     * send
     * @return bool
     */
    public function send();
}
