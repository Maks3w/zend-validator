<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Validator;

/**
 * This interface provide methods for to know the result of a validation and the reasons when the result is not valid
 *
 * This interface resolve the following questions:
 *    - Is the result valid?
 *    - If not, Why is not valid?
 */
interface ResultInterface
{
    /**
     * Is the validation result valid?
     *
     * @return bool
     */
    public function isValid();

    /**
     * Returns the list of error violations in a machine readable format.
     *
     * @return array
     */
    public function getErrorCodes();

    /**
     * Get the error messages (with the variables replaced) associated with the validation result
     *
     * @return Translator\TranslatableMessageInterface[]
     */
    public function getMessages();
}
