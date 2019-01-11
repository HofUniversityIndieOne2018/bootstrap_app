<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'HofUniversity.BootstrapApp',
            'Information',
            'Information'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'HofUniversity.BootstrapApp',
            'Participation',
            'Participation'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('bootstrap_app', 'Configuration/TypoScript', 'BootstrapApp');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bootstrapapp_domain_model_location', 'EXT:bootstrap_app/Resources/Private/Language/locallang_csh_tx_bootstrapapp_domain_model_location.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrapapp_domain_model_location');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bootstrapapp_domain_model_session', 'EXT:bootstrap_app/Resources/Private/Language/locallang_csh_tx_bootstrapapp_domain_model_session.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrapapp_domain_model_session');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_bootstrapapp_domain_model_speaker', 'EXT:bootstrap_app/Resources/Private/Language/locallang_csh_tx_bootstrapapp_domain_model_speaker.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_bootstrapapp_domain_model_speaker');

    }
);
