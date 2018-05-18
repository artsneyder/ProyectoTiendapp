<?php

class Pedido {

    public function GuardarPedido($conexion, $identifi_usuario, $identifi_zona, $Nombre_usuario, $Email_usuario, $Fechadeingreso, $Horadeingreso) {
        $query = "INSERT INTO pedido (identifi_usuario, identifi_zona, Nombre_usuario, Email_usuario, Fechadeingreso, Horadeingreso) VALUES('$identifi_usuario', '$identifi_zona', '$Nombre_usuario', '$Email_usuario', '$Fechadeingreso', '$Horadeingreso');";
        $consultar = mysqli_query($conexion, $query);
        if ($consultar) {
            $respuesta = "registrado con exito";
        } else {
            $respuesta = "problema con el registro";
        }
        return $query;
    }

}
