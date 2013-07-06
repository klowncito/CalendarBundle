<?php

namespace Sg\CalendarBundle\Doctrine;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Sg\CalendarBundle\Model\CalendarInterface;
use Sg\CalendarBundle\Model\AbstractCalendarManager as BaseCalendarManager;

/**
 * Class CalendarManager
 *
 * @package Sg\CalendarBundle\Doctrine
 */
class CalendarManager extends BaseCalendarManager
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var EntityRepository
     */
    protected $repository;


    //-------------------------------------------------
    // Ctor.
    //-------------------------------------------------

    /**
     * Ctor.
     *
     * @param EntityManager $em    An EntityManager instance
     * @param string        $class The class name of calendar entity
     */
    public function __construct(EntityManager $em, $class)
    {
        $this->em = $em;
        $this->repository = $em->getRepository($class);

        $metadata = $em->getClassMetadata($class);
        $this->class = $metadata->getName();
    }


    //-------------------------------------------------
    // CalendarManagerInterface
    //-------------------------------------------------

    /**
     * {@inheritDoc}
     */
    public function removeCalendar(CalendarInterface $calendar)
    {
        $this->em->remove($calendar);
        $this->em->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function updateCalendar(CalendarInterface $calendar, $andFlush = true)
    {
        $this->em->persist($calendar);

        if ($andFlush) {
            $this->em->flush();
        }
    }

    /**
     * {@inheritDoc}
     */
    public function findCalendarBy(array $criteria)
    {
        return $this->repository->findOneBy($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function findCalendars()
    {
        return $this->repository->findAll();
    }
}