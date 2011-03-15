<?php
/**
 * MyStandard Coding Standard.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Your Name <you@domain.net>
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   CVS: $Id: coding-standard-tutorial.xml,v 1.9 2008/10/09 15:16:47 cweiske Exp $
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PHP_CodeSniffer_Standards_CodingStandard', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_CodingStandard not found');
}

/**
 * Drupal Coding Standard.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Your Name <you@domain.net>
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class PHP_CodeSniffer_Standards_Drupal_DrupalCodingStandard extends PHP_CodeSniffer_Standards_CodingStandard
{
    /**
     * Return a list of external sniffs to include with this standard.
     *
     * The MyStandard coding standard uses all PEAR sniffs except one.
     *
     * @return array
     */
    public function getIncludedSniffs()
    {
        return array(
            'PEAR',
            'Generic/Sniffs/Functions/OpeningFunctionBraceKernighanRitchieSniff.php',
        );

    }


    /**
     * Return a list of external sniffs to exclude from this standard.
     *
     * The MyStandard coding standard uses all PEAR sniffs except one.
     *
     * @return array
     */
    public function getExcludedSniffs()
    {
        return array(
            'Generic/Sniffs/WhiteSpace/ScopeIndentSniff.php',
            'Generic/Sniffs/PHP/LowerCaseConstantSniff.php',
            'PEAR/Sniffs/WhiteSpace',
            'PEAR/Sniffs/Commenting',
            'PEAR/Sniffs/Functions/FunctionDeclarationSniff.php',
            'PEAR/Sniffs/Functions/FunctionCallSignatureSniff.php',
            'PEAR/Sniffs/ControlStructures/ControlSignatureSniff.php',
            'PEAR/Sniffs/ControlStructures/MultiLineConditionSniff.php',
            'PEAR/Sniffs/Files/LineLengthSniff.php',
            'PEAR/Sniffs/NamingConventions/ValidFunctionNameSniff.php',
            'PEAR/Sniffs/NamingConventions/ValidClassNameSniff.php',
            'PEAR/Sniffs/Classes/ClassDeclarationSniff.php',
        );
    }
}


