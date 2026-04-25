<?php

class BlogPost {
    public $title;
    public $image;
    public $shortText;
    public $fullText;
    public $date;

    public function __construct($title, $image, $shortText, $fullText, $date) {
        $this->title = $title;
        $this->image = $image;
        $this->shortText = $shortText;
        $this->fullText = $fullText;
        $this->date = $date;
    }
}
?>