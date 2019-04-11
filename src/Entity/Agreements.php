<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agreements
 *
 * @ORM\Table(name="agreements", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_agreements_id", columns={"id"})}, indexes={@ORM\Index(name="user", columns={"user"})})
 * @ORM\Entity
 */
class Agreements
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
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;


}
