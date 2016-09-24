<?php

namespace Blog\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="Blog\BlogBundle\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\OneToOne(targetEntity="Blog\BlogBundle\Entity\Image", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_article", type="string", length=255)
     */
    private $titreArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="active_article", type="string", length=255)
     */
    private $activeArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="description_article", type="text")
     */
    private $descriptionArticle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_article", type="date")
     */
    private $dateArticle;


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
     * Set titreArticle
     *
     * @param string $titreArticle
     *
     * @return Article
     */
    public function setTitreArticle($titreArticle)
    {
        $this->titreArticle = $titreArticle;

        return $this;
    }

    /**
     * Get titreArticle
     *
     * @return string
     */
    public function getTitreArticle()
    {
        return $this->titreArticle;
    }

    /**
     * Set descriptionArticle
     *
     * @param string $descriptionArticle
     *
     * @return Article
     */
    public function setDescriptionArticle($descriptionArticle)
    {
        $this->descriptionArticle = $descriptionArticle;

        return $this;
    }

    /**
     * Get descriptionArticle
     *
     * @return string
     */
    public function getDescriptionArticle()
    {
        return $this->descriptionArticle;
    }

    /**
     * Set dateArticle
     *
     * @param \DateTime $dateArticle
     *
     * @return Article
     */
    public function setDateArticle($dateArticle)
    {
        $this->dateArticle = $dateArticle;

        return $this;
    }

    /**
     * Get dateArticle
     *
     * @return \DateTime
     */
    public function getDateArticle()
    {
        return $this->dateArticle;
    }

    /**
     * Set image
     *
     * @param \Blog\BlogBundle\Entity\Image $image
     *
     * @return Article
     */
    public function setImage(\Blog\BlogBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Blog\BlogBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set activeArticle
     *
     * @param string $activeArticle
     *
     * @return Article
     */
    public function setActiveArticle($activeArticle)
    {
        $this->activeArticle = $activeArticle;

        return $this;
    }

    /**
     * Get activeArticle
     *
     * @return string
     */
    public function getActiveArticle()
    {
        return $this->activeArticle;
    }
}
