<?php
/**
 * Control de Seguridad de Archivos Incluidos
 * Define la constante global que autoriza la carga de bibliotecas internas.
 */
if (defined("ACCESO_PERMITIDO")){
    define('ACCESO_PERMITIDO', true);
}