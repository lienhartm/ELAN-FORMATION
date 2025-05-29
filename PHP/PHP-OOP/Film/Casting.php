<?php

    class Casting {

        private $film;
        private $role;
        private $acteur;

        public function __construct(Film $film, Role $role, Acteur $acteur) {

            $this->film = $film;
            $this->role = $role;
            $this->acteur = $acteur;
            $film->addCasting($this);
            $role->addCasting($this);
            $acteur->addCasting($this);
        // ci-dessus : jonction avec les différentes tables appelé par le constructeur
        }
        public function getFilm()
        {
                return $this->film;
        }
        public function setFilm($film)
        {
                $this->film = $film;
        }
        public function getRole()
        {
                return $this->role;
        }
        public function setRole($role)
        {
                $this->role = $role;
        }
        public function getActeur()
        {
                return $this->acteur;
        }
        public function setActeur($acteur)
        {
                $this->acteur = $acteur;
        }
    }

?>