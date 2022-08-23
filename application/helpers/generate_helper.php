<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function generateNormalName($text){
        $utf8 = array(
            '/[áàâãªä]/u'   =>   'a',
            '/[ÁÀÂÃÄ]/u'    =>   'A',
            '/[ÍÌÎÏ]/u'     =>   'I',
            '/[íìîï]/u'     =>   'i',
            '/[éèêë]/u'     =>   'e',
            '/[ÉÈÊË]/u'     =>   'E',
            '/[óòôõºö]/u'   =>   'o',
            '/[ÓÒÔÕÖ]/u'    =>   'O',
            '/[úùûü]/u'     =>   'u',
            '/[ÚÙÛÜ]/u'     =>   'U',
            '/ç/'           =>   'c',
            '/Ç/'           =>   'C',
            '/ñ/'           =>   'n',
            '/Ñ/'           =>   'N',
            '/–/'           =>   '_',  // UTF-8 hyphen to "normal" hyphen
            '/[’‘‹›‚]/u'     =>   '',  // Literally a single quote
            '/[“”«»„]/u'    =>   '',  // Double quote
            '/ /'           =>   '_',  // nonbreaking space (equiv. to 0x160)
            '/\s+/'         =>   '_'
        );

        return preg_replace(array_keys($utf8), array_values($utf8), $text);
    }