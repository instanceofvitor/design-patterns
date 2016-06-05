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
 * Class NotificationContext
 *
 * @author Vitor Silva <vsilva@live.co.uk>
 */
class NotificationContext
{
    /**
     * @var NotificationInterface
     */
    private $strategy;

    /**
     * NotificationContext constructor.
     *
     * @param NotificationInterface $strategy
     */
    public function __construct(NotificationInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * {@inheritdoc}
     */
    public function send()
    {
        return $this->strategy->send();
    }
}
