<?php
defined('TYPO3') || die();

call_user_func(static function ($extKey, $table) {
    $additionalFields = [
        'cn_short_en' => 'cn_short_ro',
        'cn_official_name_en' => 'cn_official_name_ro',
        'cn_capital' => 'cn_capital_ro',
    ];
    foreach ($additionalFields as $sourceField => $destField) {
        $additionalColumns = [];
        $additionalColumns[$destField] = $GLOBALS['TCA'][$table]['columns'][$sourceField];
        $additionalColumns[$destField]['label'] = 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_db.xlf:static_countries_item.' . $destField;
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, $additionalColumns);
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes($table, $destField, '',
            'after:' . $sourceField);
        // Add as search field
        $GLOBALS['TCA'][$table]['ctrl']['searchFields'] .= ',' . $destField;
    }
}, 'static_info_tables_ro', 'static_countries');
