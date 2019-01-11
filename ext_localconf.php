<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofUniversity.BootstrapApp',
            'Information',
            [
                'Location' => 'list, show, new, create, edit, update, delete',
                'Session' => 'list, show, new, create, edit, update, delete',
                'Speaker' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Location' => 'create, update, delete',
                'Session' => 'create, update, delete',
                'Speaker' => 'create, update, delete'
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HofUniversity.BootstrapApp',
            'Participation',
            [
                'Location' => 'list, show, new, create, edit, update, delete',
                'Session' => 'list, show, new, create, edit, update, delete',
                'Speaker' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Location' => 'create, update, delete',
                'Session' => 'create, update, delete',
                'Speaker' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    information {
                        iconIdentifier = bootstrap_app-plugin-information
                        title = LLL:EXT:bootstrap_app/Resources/Private/Language/locallang_db.xlf:tx_bootstrap_app_information.name
                        description = LLL:EXT:bootstrap_app/Resources/Private/Language/locallang_db.xlf:tx_bootstrap_app_information.description
                        tt_content_defValues {
                            CType = list
                            list_type = bootstrapapp_information
                        }
                    }
                    participation {
                        iconIdentifier = bootstrap_app-plugin-participation
                        title = LLL:EXT:bootstrap_app/Resources/Private/Language/locallang_db.xlf:tx_bootstrap_app_participation.name
                        description = LLL:EXT:bootstrap_app/Resources/Private/Language/locallang_db.xlf:tx_bootstrap_app_participation.description
                        tt_content_defValues {
                            CType = list
                            list_type = bootstrapapp_participation
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'bootstrap_app-plugin-information',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:bootstrap_app/Resources/Public/Icons/user_plugin_information.svg']
			);
		
			$iconRegistry->registerIcon(
				'bootstrap_app-plugin-participation',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:bootstrap_app/Resources/Public/Icons/user_plugin_participation.svg']
			);
		
    }
);
