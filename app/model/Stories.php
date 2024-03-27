<?php

class Story
{
    public $StoryID;

    public $DetailPageID;

    public $Title;

    public $Description;

    public $ImagePath;

    public $ImageAlt;

    // Constructor
    public function __construct($StoryID, $DetailPageID, $Title, $Description, $ImagePath, $ImageAlt)
    {
        $this->StoryID = $StoryID;
        $this->DetailPageID = $DetailPageID;
        $this->Title = $Title;
        $this->Description = $Description;
        $this->ImagePath = $ImagePath;
        $this->ImageAlt = $ImageAlt;
    }

    // Getters
    public function getStoryID()
    {
        return $this->StoryID;
    }

    public function getDetailPageID()
    {
        return $this->DetailPageID;
    }

    public function getTitle()
    {
        return $this->Title;
    }

    public function getDescription()
    {
        return $this->Description;
    }

    public function getImagePath()
    {
        return $this->ImagePath;
    }

    public function getImageAlt()
    {
        return $this->ImageAlt;
    }
}
