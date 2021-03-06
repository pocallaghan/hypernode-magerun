<?php
/**
 * Byte Hypernode Magerun
 *
 * @package     hypernode-Magerun
 * @author      Byte
 * @copyright   Copyright (c) 2017 Byte
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License 3.0 (OSL-3.0)
 */

namespace Hypernode\PasswordCracker\Mutator;

class BitwiseShiftRightTest extends AbstractMutatorTest
{
    public function getMutator($definition)
    {
        return new BitwiseShiftRight($definition);
    }

    /**
     * @return array
     */
    public function mutatorProvider()
    {
        return array(
            array('R2', 'p@ssW0rd', 'p@9sW0rd'),
        );
    }
}
