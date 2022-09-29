<?php

    /**
     * This file is part of the IPTools package.
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */

    namespace KSeven\Tests\Unit;

    /**
     * @package    IPTools
     * @author     K'Seven <anjsuporte@gmail.com>
     * @copyright  K'Seven <anjsuporte@gmail.com>
     * @license    http://opensource.org/licenses/mit-license.php The MIT License (MIT)
     * @link       http://www.github.com/k7brasil/php-ip-tools
     */

    class TestCase extends \PHPUnit_Framework_TestCase
    {
        protected function skip64BitTest()
        {
            if (PHP_INT_SIZE == 4) {
                $this->markTestSkipped(
                    'Skipping test that can run only on a 64-bit build of PHP.'
                );
            }
        }
    }
