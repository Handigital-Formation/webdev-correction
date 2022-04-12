<?php

// Ici votre class Article
class Article
{
    protected $id;
    protected $date;
    protected $content;
    protected $title;
    protected $image;

    function __construct($values) {
        $this->id = isset($values['id']) ? $values['id'] : null;
        $this->title = isset($values['title']) ? $values['title'] : null;
        $this->content = isset($values['content']) ? $values['content'] : null;
        $this->date = isset($values['date']) ? $values['date'] : null;
        $this->image = isset($values['image']) ? $values['image'] : null;
    }

    //Getter & Setters

    function id() {
        return $this->id;
    }
    
    function title() {
        return $this->title;
    }

    function content() {
        return $this->content;
    }

    function date() {
        /* return $this->date; */
        return date("d F Y à H:i", strtotime($this->date));
    }
    function image()
    {
        /* return $this->date; */
        return './images/'.$this->image;
    }
    
}
