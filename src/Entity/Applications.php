<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Applications
 *
 * @ORM\Table(name="applications", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_applications_application_number", columns={"application_number"}), @ORM\UniqueConstraint(name="UQ_applications_id", columns={"id"})}, indexes={@ORM\Index(name="application_status", columns={"application_status"}), @ORM\Index(name="application_type", columns={"application_type"}), @ORM\Index(name="user", columns={"user"}), @ORM\Index(name="agreement", columns={"agreement"})})
 * @ORM\Entity
 */
class Applications
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="application_number", type="integer", nullable=false)
     */
    private $applicationNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sla", type="datetime", nullable=false)
     */
    private $sla;

    /**
     * @var string
     *
     * @ORM\Column(name="application_description", type="string", length=500, nullable=false)
     */
    private $applicationDescription;

    /**
     * @var int|null
     *
     * @ORM\Column(name="executioner", type="integer", nullable=true)
     */
    private $executioner;

    /**
     * @var int|null
     *
     * @ORM\Column(name="supervisor", type="integer", nullable=true)
     */
    private $supervisor;

    /**
     * @var \Agreements
     *
     * @ORM\ManyToOne(targetEntity="Agreements")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agreement", referencedColumnName="id")
     * })
     */
    private $agreement;

    /**
     * @var \ApplicationStatuses
     *
     * @ORM\ManyToOne(targetEntity="ApplicationStatuses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="application_status", referencedColumnName="id")
     * })
     */
    private $applicationStatus;

    /**
     * @var \ApplicationTypes
     *
     * @ORM\ManyToOne(targetEntity="ApplicationTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="application_type", referencedColumnName="id")
     * })
     */
    private $applicationType;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;


}
