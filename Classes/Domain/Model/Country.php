<?php

namespace SJBR\StaticInfoTables\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011-2012 Armin Rüdiger Vieweg <info@professorweb.de>
 *  (c) 2013 Stanislas Rolland <typo3(arobas)sjbr.ca>
 *  (c) 2015 Simon Schmidt <sfs@marketing-factory.de>
 *  (c) 2021-2025 Ephraim Härer <ephraim.haerer@renolit.com>
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
 ***************************************************************/

/**
 * The Country model
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Country extends AbstractEntity
{
    /**
     * The Romanian short name
     *
     * @var string
     */
    protected string $shortNameRo = '';

    /**
     * The Romanian official name
     *
     * @var string
     */
    protected string $officialNameRo = '';

    /**
     * The Romanian capital name
     *
     * @var string
     */
    protected string $capitalRo = '';

    /**
     * Sets the Romanian short name.
     *
     * @param string $shortNameRo
     * @return void
     */
    public function setShortNameRo(string $shortNameRo): void
    {
        $this->shortNameRo = $shortNameRo;
    }

    /**
     * Gets the Romanian short name.
     *
     * @return string
     */
    public function getShortNameRo(): string
    {
        return $this->shortNameRo;
    }

    /**
     * Sets the Romanian short name.
     *
     * @param string $officialNameRo
     * @return void
     */
    public function setOfficialNameRo(string $officialNameRo): void
    {
        $this->officialNameRo = $officialNameRo;
    }

    /**
     * Gets the Romanian short name.
     *
     * @return string
     */
    public function getOfficialNameRo(): string
    {
        return $this->officialNameRo;
    }

    /**
     * Sets the Romanian short name.
     *
     * @param string $capitalRo
     * @return void
     */
    public function setCapitalRo(string $capitalRo): void
    {
        $this->capitalRo = $capitalRo;
    }

    /**
     * Gets the Romanian short name.
     *
     * @return string
     */
    public function getCapitalRo(): string
    {
        return $this->capitalRo;
    }
}
