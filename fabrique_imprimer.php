<?php

/**
 *  Fichier généré par la Fabrique de plugin v5
 *   le 2014-06-11 17:39:47
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined("_ECRIRE_INC_VERSION")) return;

$data = array (
  'fabrique' => 
  array (
    'version' => 5,
  ),
  'paquet' => 
  array (
    'nom' => 'imprimer',
    'slogan' => 'Placer facilement un lien d\'impression',
    'description' => '.imprimer pour déclencher l\'impression de la page.

Icône Printer by John Caserta from The Noun Project',
    'prefixe' => 'imprimer',
    'version' => '1.0.0',
    'auteur' => 'vertige',
    'auteur_lien' => 'http://www.vertige.org',
    'licence' => 'GNU/GPL',
    'categorie' => 'edition',
    'etat' => 'dev',
    'compatibilite' => '[3.0.16;3.0.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => 'on',
    'formulaire_config_titre' => '',
    'fichiers' => 
    array (
      0 => 'fonctions',
      1 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => '',
  ),
  'objets' => 
  array (
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => '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',
        ),
      ),
    ),
    'objets' => 
    array (
    ),
  ),
);

?>