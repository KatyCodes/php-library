<?php

    class Book
    {
//Properties
        private $id;
        private $title;
        private $genre;

//Constructor
        function __construct($id, $title, $genre)
        {
            $this->id = $id;
            $this->title = $title;
            $this->genre = $genre;
        }

//Getter and Setter Methods
        function getId()
        {
            return $this->id;
        }

        function getTitle()
        {

        }

        function getGenre()
        {

        }

        function setTitle()
        {

        }

        function setGenre()
        {

        }

//Regular Methods
        function save()
        {

        }

        function update()
        {

        }

        function delete()
        {

        }




//Static Methods
        static function getAll()
        {

        }

        static function deleteAll()
        {

        }

        static function findById()
        {

        }


//End Class
    }
?>
