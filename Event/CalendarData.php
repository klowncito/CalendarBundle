<?php

/**
 * This file is part of the SgCalendarBundle package.
 *
 * (c) stwe <https://github.com/stwe/CalendarBundle>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sg\CalendarBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\HttpFoundation\Response;
use Sg\CalendarBundle\Model\CalendarInterface;

/**
 * Class CalendarData
 *
 * @package Sg\CalendarBundle\Event
 */
class CalendarData extends Event
{
    /**
     * @var CalendarInterface
     */
    private $calendar;

    /**
     * @var Response
     */
    private $response;


    /**
     * Ctor.
     *
     * @param CalendarInterface $calendar
     */
    public function __construct(CalendarInterface $calendar)
    {
        $this->calendar = $calendar;
    }

    /**
     * Get calendar.
     *
     * @return CalendarInterface
     */
    public function getCalendar()
    {
        return $this->calendar;
    }

    /**
     * Set response.
     *
     * @param Response $response
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;
    }

    /**
     * Get response.
     *
     * @return Response|null
     */
    public function getResponse()
    {
        return $this->response;
    }
}