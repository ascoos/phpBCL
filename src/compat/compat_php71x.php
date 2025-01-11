<?php
/**
 *   __ _  ___  ___ ___   ___   ___     ____ _ __ ___   ___
 *  / _` |/  / / __/ _ \ / _ \ /  /    / __/| '_ ` _ \ /  /
 * | (_| |\  \| (_| (_) | (_) |\  \   | (__ | | | | | |\  \
 *  \__,_|/__/ \___\___/ \___/ /__/    \___\|_| |_| |_|/__/
 * 
 * 
 *************************************************************************************
 * @ASCOOS-NAME        : ASCOOS CMS 24'                                              *
 * @ASCOOS-VERSION     : 24.0.0                                                      *
 * @ASCOOS-CATEGORY    : Kernel (Frontend and Administration Side)                   *
 * @ASCOOS-CREATOR     : Drogidis Christos                                           *
 * @ASCOOS-SITE        : www.ascoos.com                                              *
 * @ASCOOS-LICENSE     : [Commercial] http://docs.ascoos.com/lics/ascoos/AGL-F.html  *
 * @ASCOOS-COPYRIGHT   : Copyright (c) 2007 - 2023, AlexSoft Software.               *
 *************************************************************************************
 *
 * @package            : ASCOOS CMS - phpBCL
 * @subpackage         : Core Compatibilities Manager for PHP < 7.1.0
 * @source             : /phpBCL/src/compat/compat_php71x.php
 * @version            : 1.1.3
 * @created            : 2023-06-26 07:00:00 UTC+3
 * @updated            : 2024-10-22 07:00:00 UTC+3
 * @author             : Drogidis Christos
 * @authorSite         : www.alexsoft.gr
 */


/**
 * If the function [ is_iterable ] does not exist then we create it.
 * ++ 7.1.0  ---- https://www.php.net/manual/en/function.is-iterable.php
 */
if ( !function_exists('is_iterable'))
{
    /**
     * Verify that the contents of a variable is an iterable value 
     * 
     * Verify that the contents of a variable is accepted by the iterable pseudo-type, i.e. 
     * that it is either an array or an object implementing Traversable
     * 
     * @link https://www.php.net/manual/en/function.is-iterable.php
     * 
     * @param mixed $value    The value to check
     * 
     * @return bool    Returns true if value is iterable, false otherwise. 
     */
    function is_iterable($value)
    {
        return is_array( $value ) || ( is_object( $value ) && ( $value instanceof \Traversable || $value instanceof ArrayIterator) );
    }

}




/**
 * If the function [ is_iterable ] does not exist then we create it.
 * ++ 7.1.0  ---- https://www.php.net/manual/en/function.is-iterable.php
 */
if ( !function_exists('openssl_get_curve_names'))
{
    /**
     * Gets the list of available curve names for use in Elliptic curve cryptography (ECC) 
     * for public/private key operations. 
     * The two most widely standardized/supported curves are prime256v1 (NIST P-256) and secp384r1 (NIST P-384).
     * 
     * @return array|bool An array of available curve names, or false on failure.
     * 
     * @see https://www.php.net/manual/function.openssl-get-curve-names.php
     */
    function openssl_get_curve_names() {
        $curve_names = array (
            0 => 'secp112r1',
            1 => 'secp112r2',
            2 => 'secp128r1',
            3 => 'secp128r2',
            4 => 'secp160k1',
            5 => 'secp160r1',
            6 => 'secp160r2',
            7 => 'secp192k1',
            8 => 'secp224k1',
            9 => 'secp224r1',
            10 => 'secp256k1',
            11 => 'secp384r1',
            12 => 'secp521r1',
            13 => 'prime192v1',
            14 => 'prime192v2',
            15 => 'prime192v3',
            16 => 'prime239v1',
            17 => 'prime239v2',
            18 => 'prime239v3',
            19 => 'prime256v1',
            20 => 'sect113r1',
            21 => 'sect113r2',
            22 => 'sect131r1',
            23 => 'sect131r2',
            24 => 'sect163k1',
            25 => 'sect163r1',
            26 => 'sect163r2',
            27 => 'sect193r1',
            28 => 'sect193r2',
            29 => 'sect233k1',
            30 => 'sect233r1',
            31 => 'sect239k1',
            32 => 'sect283k1',
            33 => 'sect283r1',
            34 => 'sect409k1',
            35 => 'sect409r1',
            36 => 'sect571k1',
            37 => 'sect571r1',
            38 => 'c2pnb163v1',
            39 => 'c2pnb163v2',
            40 => 'c2pnb163v3',
            41 => 'c2pnb176v1',
            42 => 'c2tnb191v1',
            43 => 'c2tnb191v2',
            44 => 'c2tnb191v3',
            45 => 'c2pnb208w1',
            46 => 'c2tnb239v1',
            47 => 'c2tnb239v2',
            48 => 'c2tnb239v3',
            49 => 'c2pnb272w1',
            50 => 'c2pnb304w1',
            51 => 'c2tnb359v1',
            52 => 'c2pnb368w1',
            53 => 'c2tnb431r1',
            54 => 'wap-wsg-idm-ecid-wtls1',
            55 => 'wap-wsg-idm-ecid-wtls3',
            56 => 'wap-wsg-idm-ecid-wtls4',
            57 => 'wap-wsg-idm-ecid-wtls5',
            58 => 'wap-wsg-idm-ecid-wtls6',
            59 => 'wap-wsg-idm-ecid-wtls7',
            60 => 'wap-wsg-idm-ecid-wtls8',
            61 => 'wap-wsg-idm-ecid-wtls9',
            62 => 'wap-wsg-idm-ecid-wtls10',
            63 => 'wap-wsg-idm-ecid-wtls11',
            64 => 'wap-wsg-idm-ecid-wtls12',
            65 => 'Oakley-EC2N-3',
            66 => 'Oakley-EC2N-4',
            67 => 'brainpoolP160r1',
            68 => 'brainpoolP160t1',
            69 => 'brainpoolP192r1',
            70 => 'brainpoolP192t1',
            71 => 'brainpoolP224r1',
            72 => 'brainpoolP224t1',
            73 => 'brainpoolP256r1',
            74 => 'brainpoolP256t1',
            75 => 'brainpoolP320r1',
            76 => 'brainpoolP320t1',
            77 => 'brainpoolP384r1',
            78 => 'brainpoolP384t1',
            79 => 'brainpoolP512r1',
            80 => 'brainpoolP512t1',
            81 => 'SM2',
        
        );
        return $curve_names;
    }

}


?>
