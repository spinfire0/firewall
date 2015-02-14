<?php
/**
 * Part of the Firewall package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Firewall
 * @author     Antonio Carlos Ribeiro @ PragmaRX
 * @license    BSD License (3-clause)
 * @copyright  (c) 2013, PragmaRX
 * @link       http://pragmarx.com
 */

return array(

    'create_firewall_alias' => true,

    'firewall_alias' => 'Firewall',

    /**
     *--------------------------------------------------------------------------
     * Whitelisted IP addresses array
     *--------------------------------------------------------------------------
     *
     */

    'whitelisted_array' => array(),

    /**
     *--------------------------------------------------------------------------
     * Blacklisted IP addresses array
     *--------------------------------------------------------------------------
     *
     */

    'blacklisted_array' => array(
        '127.0.0.1',
    ),

    /**
     *--------------------------------------------------------------------------
     * Whitelisted IP addresses file
     *--------------------------------------------------------------------------
     *
     */

    'whitelisted_file' => storage_path().DIRECTORY_SEPARATOR.'whitelisted.txt',

    /**
     *--------------------------------------------------------------------------
     * Blacklisted IP addresses file
     *--------------------------------------------------------------------------
     *
     */

    'blacklisted_file' => storage_path().DIRECTORY_SEPARATOR.'blacklisted.txt',

    /**
    *--------------------------------------------------------------------------
    * Code and message for blocked responses
    *--------------------------------------------------------------------------
    *
    */

    'block_response_code' => 403,

    'block_response_message' => null,

    /**
    *--------------------------------------------------------------------------
    * Do you wish to redirect non whitelisted accesses to an error page?
    *
    * You can use a route name (coming.soon) or url (/coming/soon);
    *--------------------------------------------------------------------------
    *
    */

    'redirect_non_whitelisted_to' => null,


    /**
    *--------------------------------------------------------------------------
    * How long should we keep IP addresses in cache?
    *--------------------------------------------------------------------------
    *
    */

    'cache_expire_time' => 2, // minutes

    /**
    *--------------------------------------------------------------------------
    * Send suspicious events to log?
    *--------------------------------------------------------------------------
    *
    */

    'enable_log' => true,

    /**
    *--------------------------------------------------------------------------
    * Search by range allow you to store ranges of addresses in
    * your black and whitelist:
    *
    *   192.168.17.0/24 or
    *   127.0.0.1/255.255.255.255 or
    *   10.0.0.1-10.0.0.255 or
    *   172.17.*.*
    *
    * Note that range searches may be slow and waste memory, this is why
    * it is disabled by default.
    *--------------------------------------------------------------------------
    *
    */

    'enable_range_search' => true,

    /**
    *--------------------------------------------------------------------------
    * Search by country range allow you to store country ids in your
    * your black and whitelist:
    *
    *   php artisan firewall:whitelist country:us
    *   php artisan firewall:blacklist country:cn
    *--------------------------------------------------------------------------
    *
    */

    'enable_country_search' => false,

    /**
     * Should Firewall use the database?
     */

    'use_database' => false,

    /**
    *--------------------------------------------------------------------------
    * Models
    *--------------------------------------------------------------------------
    *
    * When using the "eloquent" driver, we need to know which Eloquent models
    * should be used.
    *
    */

    'firewall_model' => 'PragmaRX\Firewall\Vendor\Laravel\Models\Firewall',

);
