<?php
/**
 * Copyright by Timon Kreis - All Rights Reserved
 * Visit https://www.timonkreis.de
 */
declare(strict_types = 1);

namespace TimonKreis\Framework\Finance;

/**
 * @category tk-framework
 * @package finance
 */
class CreditCard
{
	/**
	 * Validate a credit card number via Luhn algorithm
	 *
	 * @param int|string $number
	 * @return bool
	 */
	public function validate($number) : bool
	{
		$number = preg_replace('/\D/', '', $number);
		$length = strlen($number);
		$parity = $length % 2;
		$sum = 0;

		for ($i = 0; $i < $length; ++$i) {
			$digit = substr($number, $i, 1);

			if ($parity == $i % 2) {
				$digit <<= 1;
			}

			$sum += ($digit > 9) ? $digit - 9 : $digit;
		}

		return $sum % 10 == 0;
	}
}
