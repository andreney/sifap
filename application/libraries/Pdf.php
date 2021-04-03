<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once dirname(__FILE__) . '/tcpdf-master/tcpdf.php';

class Pdf extends TCPDF {
	/**
	 * Biblioteca criada para usar o plugin TCPDF.
	 *
	 * Version     : 6.2.26
	 * Last Update : 2018-09-14
	 * Author      : Nicola Asuni - Tecnick.com LTD - www.tecnick.com - info@tecnick.com
	 * License     : GNU-LGPL v3 (http://www.gnu.org/copyleft/lesser.html)
	 *
	 * Criado por Andreney Laranjeira, GEINF
	 *
	 * Esta é uma classe PHP para gerar documentos PDF sem exigir extensões externas
	 */
	function __construct(){
        parent::__construct();
    }
}