<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Report
 *
 * @ORM\Table(name="reports")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReportRepository")
 */
class Report
{

   /**
    * @var int
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type = "integer")
    *
    */

   private $id;

   /**
    * @var string
    * @ORM\Column(type = "string", length = 255)
    * @NotBlank
    */

   private $status;

   /**
    * @var string
    *
    * @ORM\Column(type = "string", length = 255)
    * @NotBlank
    */

   private $origin;

   /**
    * @var string
    * @ORM\Column(type = "string", length = 255)
    * @NotBlank
    */

   private $message;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Report
     */
    public function setId(?int $id): Report
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Report
     */
    public function setStatus(?string $status): Report
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     * @return Report
     */
    public function setOrigin(?string $origin): Report
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Report
     */
    public function setMessage(?string $message): Report
    {
        $this->message = $message;
        return $this;
    }








}

