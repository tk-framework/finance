<?php
/**
 * Copyright by Timon Kreis - All Rights Reserved
 * Visit https://www.timonkreis.de
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
