<?php
/**
 * Created by IntelliJ IDEA.
 * User: Erik
 * Date: 8/16/2018
 * Time: 4:20 PM
 */

$committee_list = array(
    'COMPUTER_SOCIETY' => array('Computer Society', '/csociety'),
    'EMBS' => array('EMBS', '/embs'),
    'GENERAL' => array('Purdue IEEE', '/'),
    'GROWTH' => array('Growth & Engagement', '/growth'),
    'INDUSTRIAL_RELATIONS' => array('Industrial Relations', '/ir'),
    'LEARNING' => array('Learning', '/learning'),
    'MTTS' => array('MTT-S', '/mtts'),
    'PARTIEEE' => array('PARTIEEE', '/partieee'),
    'ROV' => array('ROV', '/rov'),
    'SOCIAL' => array('Social', '/social'),
    'RACING' => array('Racing', '/racing'),
    'SOFTWARE_SATURDAYS' => array('Software Saturdays', '/software')
);

foreach ($committee_list as $name => $url) {
    define($name, '<a href="'.$url[1].'">'.$url[0].'</a>');
}
