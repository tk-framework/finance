<?php
/**
 * @author Timon Kreis <mail@timonkreis.de>
 * @copyright 2020 Timon Kreis
 * @license http://www.opensource.org/licenses/mit-license.html
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
