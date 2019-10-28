<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Validate
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Zend_Validate_AllTests::main');
}


/**
 * @category   Zend
 * @package    Zend_Validate
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @group      Zend_Validate
 */
class Zend_Validate_AllTests
{
    /**
     * Runs this test suite
     *
     * @return void
     */
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    /**
     * Creates and returns this test suite
     *
     * @return PHPUnit_Framework_TestSuite
     */
    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('Zend Framework - Zend_Validate');

        $suite->addTestSuite('Zend_Validate_AbstractTest');
        $suite->addTestSuite('Zend_Validate_AlnumTest');
        $suite->addTestSuite('Zend_Validate_AlphaTest');
        $suite->addTestSuite('Zend_Validate_BetweenTest');
        $suite->addTestSuite('Zend_Validate_CallbackTest');
        $suite->addTestSuite('Zend_Validate_CcnumTest');
        $suite->addTestSuite('Zend_Validate_CreditCardTest');
        $suite->addTestSuite('Zend_Validate_DateTest');
        $suite->addTest(Zend_Validate_Db_AllTests::suite());
        $suite->addTestSuite('Zend_Validate_DigitsTest');
        $suite->addTestSuite('Zend_Validate_EmailAddressTest');
        $suite->addTest(Zend_Validate_File_AllTests::suite());
        $suite->addTestSuite('Zend_Validate_FloatTest');
        $suite->addTestSuite('Zend_Validate_GreaterThanTest');
        $suite->addTestSuite('Zend_Validate_HexTest');
        $suite->addTestSuite('Zend_Validate_HostnameTest');
        $suite->addTestSuite('Zend_Validate_IbanTest');
        $suite->addTestSuite('Zend_Validate_IdenticalTest');
        $suite->addTestSuite('Zend_Validate_InArrayTest');
        $suite->addTestSuite('Zend_Validate_IntTest');
        $suite->addTestSuite('Zend_Validate_IpTest');
        $suite->addTestSuite('Zend_Validate_IsbnTest');
        $suite->addTestSuite('Zend_Validate_LessThanTest');
        $suite->addTestSuite('Zend_Validate_MessageTest');
        $suite->addTestSuite('Zend_Validate_NotEmptyTest');
        $suite->addTestSuite('Zend_Validate_PostCodeTest');
        $suite->addTestSuite('Zend_Validate_RegexTest');
        $suite->addTest(Zend_Validate_Sitemap_AllTests::suite());
        $suite->addTestSuite('Zend_Validate_StringLengthTest');

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'Zend_Validate_AllTests::main') {
    Zend_Validate_AllTests::main();
}
