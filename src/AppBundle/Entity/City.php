<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Symfony\Component\HttpFoundation\File\File as SymfoFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CityRepository")
 * @Vich\Uploadable
 */
class City
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
     * @var string
     *
     * @ORM\Column(name="cityName", type="string", length=255)
     */
    private $cityName;

    /**
     * @var string
     *
     * @ORM\Column(name="cityCountry", type="string", length=255)
     */
    private $cityCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="cityImage", type="string", length=255)
     */
    private $cityImage;

    /**
     * @Vich\UploadableField(mapping="images_file", fileNameProperty="cityImage")
     * @var File
     */
    private $cityImageFile;

    /**
     * @var string
     *
     * @ORM\Column(name="cityText", type="text")
     */
    private $cityText;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;


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
     * Set cityName
     *
     * @param string $cityName
     *
     * @return City
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Get cityName
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Set cityCountry
     *
     * @param string $cityCountry
     *
     * @return City
     */
    public function setCityCountry($cityCountry)
    {
        $this->cityCountry = $cityCountry;

        return $this;
    }

    /**
     * Get cityCountry
     *
     * @return string
     */
    public function getCityCountry()
    {
        return $this->cityCountry;
    }

    /**
     * Set cityImage
     *
     * @param string $cityImage
     *
     * @return City
     */
    public function setCityImage($cityImage)
    {
        $this->cityImage = $cityImage;

        return $this;
    }

    /**
     * Get cityImage
     *
     * @return string
     */
    public function getCityImage()
    {
        return $this->cityImage;
    }

    public function setCityImageFile(SymfoFile $image = null)
    {
        $this->cityImageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getCityImageFile()
    {
        return $this->cityImageFile;
    }

    /**
     * Set cityText
     *
     * @param string $cityText
     *
     * @return City
     */
    public function setCityText($cityText)
    {
        $this->cityText = $cityText;

        return $this;
    }

    /**
     * Get cityText
     *
     * @return string
     */
    public function getCityText()
    {
        return $this->cityText;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Chaise
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}

