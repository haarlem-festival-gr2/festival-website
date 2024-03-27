<?php

class DetailPage
{
    public $DetailPageID;
    public $HeaderImage;
    public $HeaderAlt;
    public $WhereAreWeTitle;
    public $MapLocationImage;
    public $MapLocationAlt;
    public $ImageBeforeTitle;
    public $ImageBefore;
    public $ImageBeforeAlt;
    public $ImageAfterTitle;
    public $ImageAfter;
    public $ImageAfterAlt;
    public $Address;
    public $PhoneNumber;
    public $Email;
    public $WebsiteAddress;

    // Constructor
    public function __construct($DetailPageID, $HeaderImage, $HeaderAlt, $WhereAreWeTitle, $MapLocationImage, $MapLocationAlt, $ImageBeforeTitle, $ImageBefore, $ImageBeforeAlt, $ImageAfterTitle, $ImageAfter, $ImageAfterAlt, $Address, $PhoneNumber, $Email, $WebsiteAddress)
    {
        $this->DetailPageID = $DetailPageID;
        $this->HeaderImage = $HeaderImage;
        $this->HeaderAlt = $HeaderAlt;
        $this->WhereAreWeTitle = $WhereAreWeTitle;
        $this->MapLocationImage = $MapLocationImage;
        $this->MapLocationAlt = $MapLocationAlt;
        $this->ImageBeforeTitle = $ImageBeforeTitle;
        $this->ImageBefore = $ImageBefore;
        $this->ImageBeforeAlt = $ImageBeforeAlt;
        $this->ImageAfterTitle = $ImageAfterTitle;
        $this->ImageAfter = $ImageAfter;
        $this->ImageAfterAlt = $ImageAfterAlt;
        $this->Address = $Address;
        $this->PhoneNumber = $PhoneNumber;
        $this->Email = $Email;
        $this->WebsiteAddress = $WebsiteAddress;
    }

    // Setters
    public function setDetailPageID($DetailPageID)
    {
        $this->DetailPageID = $DetailPageID;
    }

    public function setHeaderImage($HeaderImage)
    {
        $this->HeaderImage = $HeaderImage;
    }

    public function setHeaderAlt($HeaderAlt)
    {
        $this->HeaderAlt = $HeaderAlt;
    }

    public function setWhereAreWeTitle($WhereAreWeTitle)
    {
        $this->WhereAreWeTitle = $WhereAreWeTitle;
    }

    public function setMapLocationImage($MapLocationImage)
    {
        $this->MapLocationImage = $MapLocationImage;
    }

    public function setMapLocationAlt($MapLocationAlt)
    {
        $this->MapLocationAlt = $MapLocationAlt;
    }

    public function setImageBeforeTitle($ImageBeforeTitle)
    {
        $this->ImageBeforeTitle = $ImageBeforeTitle;
    }

    public function setImageBefore($ImageBefore)
    {
        $this->ImageBefore = $ImageBefore;
    }

    public function setImageBeforeAlt($ImageBeforeAlt)
    {
        $this->ImageBeforeAlt = $ImageBeforeAlt;
    }

    public function setImageAfterTitle($ImageAfterTitle)
    {
        $this->ImageAfterTitle = $ImageAfterTitle;
    }

    public function setImageAfter($ImageAfter)
    {
        $this->ImageAfter = $ImageAfter;
    }

    public function setImageAfterAlt($ImageAfterAlt)
    {
        $this->ImageAfterAlt = $ImageAfterAlt;
    }

    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;
    }

    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    public function setWebsiteAddress($WebsiteAddress)
    {
        $this->WebsiteAddress = $WebsiteAddress;
    }

    // Getters
    public function getDetailPageID()
    {
        return $this->DetailPageID;
    }

    public function getHeaderImage()
    {
        return $this->HeaderImage;
    }

    public function getHeaderAlt()
    {
        return $this->HeaderAlt;
    }

    public function getWhereAreWeTitle()
    {
        return $this->WhereAreWeTitle;
    }

    public function getMapLocationImage()
    {
        return $this->MapLocationImage;
    }

    public function getMapLocationAlt()
    {
        return $this->MapLocationAlt;
    }

    public function getImageBeforeTitle()
    {
        return $this->ImageBeforeTitle;
    }

    public function getImageBefore()
    {
        return $this->ImageBefore;
    }

    public function getImageBeforeAlt()
    {
        return $this->ImageBeforeAlt;
    }

    public function getImageAfterTitle()
    {
        return $this->ImageAfterTitle;
    }

    public function getImageAfter()
    {
        return $this->ImageAfter;
    }

    public function getImageAfterAlt()
    {
        return $this->ImageAfterAlt;
    }

    public function getAddress()
    {
        return $this->Address;
    }

    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function getWebsiteAddress()
    {
        return $this->WebsiteAddress;
    }

    // Method to get all properties at once
    public function getAllProperties()
    {
        return get_object_vars($this);
    }
}

?>