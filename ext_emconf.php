<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "grid_for_gridelements"
 *
 * Auto generated by Extension Builder 2019-04-11
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Multi Framework grid for GridElements',
    'description' => 'To add an easy to use grid with GridElements and Framework independently. Pre defined are Bootstrap v4',
    'category' => 'plugin',
    'author' => 'Marco Schmidt',
    'author_email' => 'typo@schmidt-webmedia.de',
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '0.9.100',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'gridelements' => ''
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['SchmidtWebmedia\\GridForGridElements\\' => 'Classes']
    ],
];
