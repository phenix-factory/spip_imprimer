<?php
/**
 * Fichier gérant l'installation et désinstallation du plugin imprimer
 *
 * @plugin     imprimer
 * @copyright  2014
 * @author     vertige
 * @licence    GNU/GPL
 * @package    SPIP\Imprimer\Installation
 */

if (!defined('_ECRIRE_INC_VERSION')) return;


/**
 * Fonction d'installation et de mise à jour du plugin imprimer.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @param string $version_cible
 *     Version du schéma de données dans ce plugin (déclaré dans paquet.xml)
 * @return void
 **/
function imprimer_upgrade($nom_meta_base_version, $version_cible) {
	$maj = array();

    $config_default = array(
        // Activer par défaut la version 4 de foundation. Désactiver le reste.
        'class' => '.imprimer'
    );

    // Tableau de la configuration par défaut
    $maj['create'] = array(
        array('ecrire_meta', 'imprimer', serialize($config_default))
    );


	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}


/**
 * Fonction de désinstallation du plugin imprimer.
 *
 * @param string $nom_meta_base_version
 *     Nom de la meta informant de la version du schéma de données du plugin installé dans SPIP
 * @return void
 **/
function imprimer_vider_tables($nom_meta_base_version) {


	effacer_meta($nom_meta_base_version);
}

?>