<?php

namespace MI\BilletterieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="MI\BilletterieBundle\Repository\CommandeRepository")
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var int
     *
     * @ORM\Column(name="PrixTotal", type="smallint")
     */
    private $prixTotal;


    /**
     * @var int
     *
     * @ORM\Column(name="NbBillet", type="smallint")
     */
    private $NbBillet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_achat", type="datetime", unique=true)
     */
    private $dateAchat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entree", type="DateTime")
     */
    private $dateEntree;

    public function __construct()
    {
        $this->dateEntree = new \DateTime();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set prixTotal
     *
     * @param integer $prixTotal
     *
     * @return Commande
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return int
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }


    /**
     * Set NbBillet
     *
     * @param integer $NbBillet
     *
     * @return Commande
     */
    public function setNbBillet($NbBillet)
    {
        $this->NbBillet = $NbBillet;

        return $this;
    }

    /**
     * Get NbBillet
     *
     * @return int
     */
    public function getNbBillet()
    {
        return $this->NbBillet;
    }

    /**
     * Set dateAchat
     *
     * @param \DateTime $dateAchat
     *
     * @return Commande
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    /**
     * Get dateAchat
     *
     * @return \DateTime
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * Set dateEntree
     *
     * @param \DateTime $dateEntree
     *
     * @return Commande
     */
    public function setDateEntree($dateEntree)
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    /**
     * Get dateEntree
     *
     * @return \DateTime
     */
    public function getDateEntree()
    {
        return $this->dateEntree;
    }

}
