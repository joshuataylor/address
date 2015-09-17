<?php

/**
 * @file
 * Contains \Drupal\address\AddressFormatImporterInterface.
 */

namespace Drupal\address;

/**
 * Defines an address format importer.
 *
 * Imports the address format data provided by the library into config entities.
 */
interface AddressFormatImporterInterface {

  /**
   * Starts a process that imports all available data.
   */
  public function startImport();

  /**
   * Imports address formats with the given country codes.
   *
   * @param array $countryCodes
   *   Array of country codes to import address formats for.
   */
  public function importEntitiesByCountryCodes(array $countryCodes);

  /**
   * Imports address formats with the given country codes.
   *
   * @param array $addressFormats
   *   Array of country codes to import address formats for.
   */
  public function importEntities(array $addressFormats);

  /**
   * Imports translations for the given language codes.
   *
   * @param array $langcodes
   *   Array of language codes to import translations for.
   */
  public function importTranslations(array $langcodes);

}
