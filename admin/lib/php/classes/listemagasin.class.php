<?php

class listemagasin extends nom
{
    private $_db; //recevoir la valeur $cnx lors de la connexion à la bd dans l'index
    private $_data = array();
    private $_resultset;

    public function __construct($cnx)
    {
        $this->_db =$cnx;
    }

    public function getnom()
    {
        $query = "select magasin from liste_mag";
        $_resultset = $this->_db->query($query);
        $_data = $_resultset->fetchALL();
        var_dump($_data);
    }
}