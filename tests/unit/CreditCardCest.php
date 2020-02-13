<?php
/**
 * @author Timon Kreis <mail@timonkreis.de>
 * @copyright 2020 Timon Kreis
 * @license http://www.opensource.org/licenses/mit-license.html
 */
declare(strict_types = 1);

use TimonKreis\Framework;

/**
 * @category tk-framework
 * @package finance
 */
class CreditCardCest
{
	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function testValidation(Framework\Test\UnitTester $I) : void
	{
		$creditCard = new Framework\Finance\CreditCard();

		$I->assertFalse($creditCard->validate('510599105105105100'));
		$I->assertTrue($creditCard->validate('5105105105105100'));
	}
}
