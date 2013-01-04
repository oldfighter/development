<?php
/**
 * SocialEngine
 *
 * @category   Application_Core
 * @package    Fields
 * @copyright  Copyright 2006-2010 Webligo Developments
 * @license    http://www.socialengine.net/license/
 * @version    $Id: changelog.php 9580 2012-01-06 01:00:49Z john $
 * @author     John
 */
return array(
  '4.2.0' => array(
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'View/Helper/FieldFacebook.php' => 'Improved presentation',
    'View/Helper/FieldTwitter.php' => 'Improved presentation',
  ),
  '4.1.8p1' => array(
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/_jsSwitch.tpl' => 'Fixed issue with multi-select options not being unset when changing profile types',
  ),
  '4.1.8' => array(
    '/application/languages/en/fields.csv' => 'Added phrases',
    'externals/.htaccess' => 'Updated with far-future expires headers for static resources',
    'Form/Search.php' => 'Fixed issue with incorrect data being sent in search form',
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/_jsSwitch.tpl' => 'Form clears values when switching dependent fields; Compatibility for AJAX page loading',
    'views/scripts/admin-fields/field-create.tpl' => 'Added static base URL for CDN support',
  ),
  '4.1.4' => array(
    'Form/Search.php' => 'Fixed multi-checkbox display issues',
    'Model/DbTable/Meta.php' => 'Fixed issue with clearing field alias when changing the profile type',
    'Model/DbTable/Search.php' => 'Fixed search issues with pre-built select fields',
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'views/scripts/_jsSwitch.tpl' => 'Removed a console.log which could cause a javascript error',
  ),
  '4.1.3' => array(
    'Model/DbTable/Search.php' => 'Fixed search issue when the same birthday max/min value is selected',
    'settings/changelog.php' => 'Incremented version',
    'settings/fields.php' => 'Added birthday view helper to fix issue with birthday links on profile',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'View/Helper/FieldBirthdate.php' => 'Added "link to browse page" support',
    'View/Helper/FieldWebsite.php' => 'URL fields now open in a new tab/window.',
  ),
  '4.1.2' => array(
    'Form/Element/Birthdate.php' => 'Fixed birthdate minimum age to support zero',
    'Model/DbTable/Search.php' => 'Fixes issue with linked textarea',
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'View/Helper/FieldTextareaLinked.php' => 'Fixes issue with linked textarea',
    'View/Helper/FieldValueLoop.php' => 'Added notice to admins for fields that would normally be hidden',
    'views/scripts/admin-fields/field-create.tpl' => 'Removed autocomplete for mapping fields',
  ),
  '4.1.1' => array(
    'Controller/AdminAbstract.php' => 'Added new method of linking fields',
    'externals/.htaccess' => 'Added keywords; removed deprecated code',
    'Form/Admin/Heading.php' => 'Added ability to hide heading on signup',
    'Form/Admin/Map.php' => 'Added',
    'Model/DbTable/Meta.php' => 'Added alias when editing field',
    'settings/changelog.php' => 'Incremented version',
    'settings/fields.php' => 'Added custom helper for zip code',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'View/Helper/FieldDate.php' => 'Removed timezone to prevent date issue',
    'View/Helper/FieldZipCode.php' => 'Fixed issue with linking',
    'views/scripts/_jsAdmin.tpl' => 'Fixed javascript errors that would prevent updating page via AJAX',
    'views/scripts/_jsSwitch.tpl' => 'Performance improvements',
    'views/scripts/admin-fields/field-create.tpl' => 'Added new method of linking fields',
    'views/scripts/admin-fields/map-create.tpl' => 'Added new method of linking fields',
  ),
  '4.1.0' => array(
    '/application/languages/en/fields.csv' => 'Fixed phrases with stray double-quotes',
    'Form/Standard.php' => 'Added custom error message support; fixed issue with saving multi select fields',
    'Model/DbTable/Search.php' => 'Fixed issue that would prevent saving multiple values in a multi-checkbox or multi-select field (courtesy of RadCodes); fixed issue preventing searching by just a min or just a max value',
    'Model/DbTable/Values.php' => 'Fixed typo',
    'settings/changelog.php' => 'Incremented version',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'View/Helper/FieldAbstract.php' => 'Added',
    'View/Helper/FieldAim.php' => 'Added "link to browse page" support',
    'View/Helper/FieldCountry.php' => 'Added "link to browse page" support',
    'View/Helper/FieldCurrency.php' => 'Added "link to browse page" support',
    'View/Helper/FieldDate.php' => 'Added "link to browse page" support',
    'View/Helper/FieldEmail.php' => 'Added "link to browse page" support',
    'View/Helper/FieldFacebook.php' => 'Added "link to browse page" support',
    'View/Helper/FieldLocation.php' => 'Added "link to browse page" support',
    'View/Helper/FieldMultiCheckbox.php' => 'Added "link to browse page" support',
    'View/Helper/FieldMultiselect.php' => 'Added "link to browse page" support',
    'View/Helper/FieldOptions.php' => 'Added "link to browse page" support',
    'View/Helper/FieldSelect.php' => 'Added "link to browse page" support',
    'View/Helper/FieldText.php' => 'Added "link to browse page" support',
    'View/Helper/FieldTextarea.php' => 'Added "link to browse page" support',
    'View/Helper/FieldTextareaLinked.php' => 'Added "link to browse page" support',
    'View/Helper/FieldTwitter.php' => 'Added "link to browse page" support',
    'View/Helper/FieldValueLoop.php' => 'Admins can now see all fields',
    'View/Helper/FieldWebsite.php' => 'Added "link to browse page" support',
    'View/Helper/FieldZipCode.php' => 'Added "link to browse page" support',
    'views/helpers/AdminFieldMeta.php' => 'Added missing translation',
    'views/scripts/_jsSwitch.tpl' => 'Fixed issue with field switching on browse pages',
    'views/scripts/admin-fields/field-create.tpl' => 'UI improvements',
    'views/scripts/admin-fields/field-edit.tpl' => 'UI improvements',
    'views/scripts/admin-fields/heading-create.tpl' => 'UI improvements',
    'views/scripts/admin-fields/heading-edit.tpl' => 'UI improvements',
    'views/scripts/admin-fields/map-create.tpl' => 'UI improvements',
    'views/scripts/admin-fields/option-edit.tpl' => 'UI improvements',
    'views/scripts/admin-fields/type-create.tpl' => 'UI improvements',
    'views/scripts/admin-fields/type-delete.tpl' => 'UI improvements',
    'views/scripts/admin-fields/type-edit.tpl' => 'UI improvements',
  ),
  '4.0.5p1' => array(
    'Form/Standard.php' => 'Fixed issue where fields hidden on signup are hidden on edit as well',
    'settings/manifest.php' => 'Incremented version',
    'View/Helper/FieldValueLoop.php' => 'Fixed notice caused by undefined variable',
    'views/scripts/_jsSwitch.tpl' => 'Removed console.log',
  ),
  '4.0.5' => array(
    'Controller/AdminAbstract.php' => 'Fixed rare error caused by missing options',
    'Form/Admin/Field.php' => 'Added ability to hide a field on signup',
    'Form/Element/Country.php' => 'Fixed issue with not adding an empty option when not required',
    'Form/Search.php' => 'Added support for dependent fields; fixed issue where country field was missing an empty option',
    'Form/Standard.php' => 'Added ability to hide a field on signup; fixed issue that allowed a user to bypass fields step on signup',
    'Model/DbTable/Search.php' => 'Added method for memory usage improvements',
    'Model/Meta.php' => 'Required fields now have an empty option, to prevent accidental submission of incorrect options',
    'settings/changelog.php' => 'Added',
    'settings/manifest.php' => 'Incremented version',
    'settings/my-upgrade-4.0.4-4.0.5.sql' => 'Added',
    'settings/my.sql' => 'Incremented version',
    'View/Helper/FieldValueLoop.php' => 'Moved code into separate method for reusage',
    'views/scripts/_jsSwitch.tpl' => 'Fixed bug with dependent fields and radio elements',
  ),
  '4.0.4' => array(
    'Api/Core.php' => 'Fixes memory leak in network admin page',
    'Form/Admin/Field/Currency.php' => 'Causes currencies to be translated based on the language pack in use rather than the browser locale',
    'Form/Element/Currency.php' => 'Fixes rare exceptions caused by locale codes without a territory',
    'Form/Element/Country.php' => 'Fixes incorrect translation of country names',
    'Model/DbTable/Search.php' => 'Added method to delete values for an item',
    'Model/DbTable/Values.php' => 'Added method to delete values for an item',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
    'View/Helper/FieldCountry.php' => 'Fixes incorrect translation of country names',
  ),
  '4.0.3' => array(
    'Model/DbTable/Options.php' => 'ENUM/SET columns in search table get updated when options are added',
    'Model/DbTable/Search.php' => 'Proper handling of search bit',
    'settings/manifest.php' => 'Incremented version',
    'settings/my.sql' => 'Incremented version',
  ),
  '4.0.2' => array(
    'Controller/AdminAbstract.php' => 'Fixed problem that would prevent populating form elements for extra configuration options',
    'Form/Search.php' => 'Fixes age search to use minimum age',
    'Form/Standard.php' => 'Missing translation; fixed problem when used as a subform',
    'settings/manifest.php' => 'Increment version',
    'View/Helper/FieldFacebook.php' => 'Fixed improper display of value',
    'views/scripts/_jsAdmin.tpl' => 'Nested dependent fields now display properly',
  ),
  '4.0.1' => array(
    'Controller/AdminAbstract.php' => 'Fixed error caused when trying to link field to parent when it had already been linked; cache is flushed on changing of order',
    'Form/Search.php' => 'Required caused field to be required on search; fixed improper inflection on field types',
    'Model/DbTable/Abstract.php' => 'Added public flushCache method',
    'Model/DbTable/Maps.php' => 'Field is now deleted when last map is removed',
    'Model/DbTable/Search.php' => 'Fixed "typo" that would cause search index to not get removed on field deletion',
    'settings/manifest.php' => 'Incremented version',
    'View/Helper/FieldFacebook.php' => 'Fixed bad rendering of facebook link when given a URL instead of a profile name',
  ),
) ?>