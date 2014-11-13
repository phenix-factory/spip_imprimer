<?php
/**
 * Utilisations de pipelines par imprimer
 *
 * @plugin     imprimer
 * @copyright  2014
 * @author     vertige
 * @licence    GNU/GPL
 * @package    SPIP\Imprimer\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

function imprimer_insert_head($flux) {

    $flux .= '<script src="'.produire_fond_statique('javascript/imprimer.js').'" type="text/javascript"></script>';

    return $flux;
}

function imprimer_insert_head_css($flux) {

    $flux .= '<link rel="stylesheet" href="'.produire_fond_statique('css/imprimer.css').'" type="text/css" media="print" />';
    return $flux;
}



/**
 * On va ce servir de ce pipeline pour lancer automatiquement une impression si
 * Dans l'URL on trouve imprimer=oui
 *
 * @param mixed $page
 * @access public
 * @return mixed
 */
function imprimer_affichage_final($page) {

    if (_request('imprimer') == 'oui') {
        $script = '<script type="text/javascript">window.print();</script></head>';
        $page = str_replace('</head>', $script, $page);
    }

    return $page;
}