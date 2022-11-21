<?php
/** @noinspection PhpUndefinedVariableInspection */

/***************************************************************
 * Extension Manager/Repository config file for ext "static_info_tables_ro".
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Static Info Tables (ro)',
    'description' => '(ro) language pack for the Static Info Tables providing localized names for countries.',
    'category' => 'misc',
    'version' => '11.5.2',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => false,
    'author' => 'Ephraim Härer',
    'author_email' => 'ephraim.haerer@renolit.com',
    'author_company' => 'RENOLIT SE',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'static_info_tables' => '11.5.0-11.5.99',
            'extbase' => '11.5.0-11.5.99',
            'extensionmanager' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
);

