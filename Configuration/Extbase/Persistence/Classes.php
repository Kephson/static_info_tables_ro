<?php
/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2021-2026 Timo Feuerstein <timo.feuerstein@renolit.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

declare(strict_types=1);

use SJBR\StaticInfoTables\Domain\Model\Country;
use SJBR\StaticInfoTables\Domain\Model\CountryZone;
use SJBR\StaticInfoTables\Domain\Model\Currency;
use SJBR\StaticInfoTables\Domain\Model\Language;
use SJBR\StaticInfoTables\Domain\Model\Territory;

return [
    Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameRo' => [
                'fieldName' => 'cn_short_ro',
            ],
        ],
    ],
    CountryZone::class => [
        'tableName' => 'static_country_zones',
        'properties' => [
            'nameRo' => [
                'fieldName' => 'zn_name_ro',
            ],
        ],
    ],
    Currency::class => [
        'tableName' => 'static_currencies',
        'properties' => [
            'nameRo' => [
                'fieldName' => 'cu_name_ro',
            ],
            'subdivisionNameRo' => [
                'fieldName' => 'cu_sub_name_ro',
            ],
        ],
    ],
    Language::class => [
        'tableName' => 'static_languages',
        'properties' => [
            'nameRo' => [
                'fieldName' => 'lg_name_ro',
            ],
        ],
    ],
    Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'nameRo' => [
                'fieldName' => 'tr_name_ro',
            ],
        ],
    ],
];
