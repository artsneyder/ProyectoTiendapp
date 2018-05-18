<?php

class Conexion {

    public function conectar() {
        $link = mysqli_connect("localhost", "root", "", "proyecto");

        if ($link === false) {
            die("ERROR: could not connect. " . mysqli_connect_error());
        }
        return $link;
    }

}
