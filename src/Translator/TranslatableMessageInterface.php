<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Validator\Translator;

/**
 * This interface provide methods for extract the translatable parts of a message.
 */
interface TranslatableMessageInterface
{
    /**
     * Returns the message to translate.
     *
     * The message may include placeholders for message variable interpolation.
     *
     * @return string
     */
    public function getMessageTemplate();

    /**
     * Returns the variables to be replaced in the message template placeholders.
     *
     * @return array
     */
    public function getMessageVariables();

    /**
     * Returns the translation domain namespace.
     *
     * @return string
     */
    public function getTranslationDomain();

    /**
     * Returns the message template with the placeholders replaced by the variables.
     *
     * @return string
     */
    public function __toString();
}
