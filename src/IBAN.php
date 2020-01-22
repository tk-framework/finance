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
class IBAN
{
	protected const BANK_CODE = 0;
	protected const ACCOUNT_NUMBER = 1;
	protected const BRANCH_CODE = 2;
	protected const CHECK_DIGIT = 3;
	protected const ACCOUNT_TYPE = 4;
	protected const REGION_CODE = 5;
	protected const OTHER_FUNCTIONS = 6;

	/**
	 * Indices:
	 * - Length of bank code
	 * - Length of account number
	 * - Length of branch code
	 * - Length of check digit
	 * - Account type
	 * - Region code
	 * - Other functions
	 *
	 * @var array[]
	 */
	protected $countries = [
		'AD' => [4, 16, 4, 1, 0, 0, 0], // Andorra
		'AE' => [3, 16, 0, 0, 0, 0, 0], // United arabian emirates
		'AL' => [3, 16, 4, 1, 0, 0, 0], // Albania
		'AT' => [5, 11, 0, 0, 0, 0, 0], // Austria
		'AZ' => [4, 20, 0, 0, 0, 0, 0], // Azerbaijan
		'BA' => [3, 8, 3, 2, 0, 0, 0], // Bosnia and Herzegovina
		'BE' => [3, 7, 0, 2, 0, 0, 0], // Belgium
		'BG' => [4, 8, 4, 0, 2, 0, 0], // Bulgaria
		'BH' => [4, 14, 0, 0, 0, 0, 0], // Bahrain
		'BL' => [5, 11, 5, 2, 0, 0, 0], // Saint-Barthélemy
		'BR' => [8, 12, 5, 0, 0, 0, 0], // Brazil
		'CH' => [5, 12, 0, 0, 0, 0, 0], // Switzerland
		'CR' => [3, 14, 0, 0, 0, 0, 0], // Costa Rica
		'CY' => [3, 16, 5, 0, 0, 0, 0], // Cyprus
		'CZ' => [4, 16, 0, 0, 0, 0, 0], // Czech Republic
		'DE' => [8, 10, 0, 0, 0, 0, 0], // Germany
		'DK' => [4, 9, 0, 1, 0, 0, 0], // Denmark
		'DO' => [4, 20, 0, 0, 0, 0, 0], // Dominican Republic
		'EE' => [5, 12, 0, 1, 0, 0, 0], // Estonia
		'ES' => [4, 10, 4, 2, 0, 0, 0], // Spain
		'FI' => [6, 7, 0, 1, 0, 0, 0], // Finland
		'FO' => [4, 9, 0, 1, 0, 0, 0], // Faroe
		'FR' => [5, 11, 5, 2, 0, 0, 0], // France
		'GB' => [4, 8, 6, 0, 0, 0, 0], // Great Britain
		'GE' => [2, 16, 0, 0, 0, 0, 0], // Georgia
		'GF' => [5, 11, 5, 2, 0, 0, 0], // French Guiana
		'GI' => [4, 15, 0, 0, 0, 0, 0], // Gibraltar
		'GL' => [4, 9, 0, 1, 0, 0, 0], // Greenland
		'GP' => [5, 11, 5, 2, 0, 0, 0], // Guadeloupe
		'GR' => [3, 16, 4, 0, 0, 0, 0], // Greece
		'GT' => [4, 20, 0, 0, 0, 0, 0], // Guatemala
		'HK' => [4, 8, 0, 0, 0, 0, 0], // Hong Kong
		'HR' => [7, 10, 0, 0, 0, 0, 0], // Croatia
		'HU' => [3, 15, 4, 2, 0, 0, 0], // Hungary
		'IE' => [4, 8, 6, 0, 0, 0, 0], // Ireland
		'IL' => [3, 13, 3, 0, 0, 0, 0], // Israel
		'IS' => [4, 6, 2, 0, 0, 0, 10], // Iceland
		'IT' => [5, 12, 5, 1, 0, 0, 0], // Italy
		'JO' => [4, 18, 4, 0, 0, 0, 0], // Jordan
		'KZ' => [3, 13, 0, 0, 0, 0, 0], // Kazakhstan
		'KW' => [4, 22, 0, 0, 0, 0, 0], // Kuwait
		'LB' => [4, 20, 0, 0, 0, 0, 0], // Lebanon
		'LI' => [5, 12, 0, 0, 0, 0, 0], // Liechtenstein
		'LT' => [5, 11, 0, 0, 0, 0, 0], // Lithuania
		'LU' => [3, 13, 0, 0, 0, 0, 0], // Luxembourg
		'LV' => [4, 13, 0, 0, 0, 0, 0], // Latvia
		'MA' => [3, 12, 3, 2, 0, 0, 0], // Morocco
		'MC' => [5, 11, 5, 2, 0, 0, 0], // Monaco
		'MD' => [2, 18, 0, 0, 0, 0, 0], // Moldava
		'ME' => [3, 13, 0, 2, 0, 0, 0], // Montenegro
		'MF' => [5, 11, 5, 2, 0, 0, 0], // Saint-Martin
		'MK' => [3, 10, 0, 2, 0, 0, 0], // Macedonia
		'MQ' => [5, 11, 5, 2, 0, 0, 0], // Martinique
		'MR' => [5, 11, 5, 2, 0, 0, 0], // Mauretanien
		'MT' => [4, 19, 5, 0, 0, 0, 0], // Malta
		'MU' => [6, 15, 2, 3, 0, 0, 0], // Mauritius
		'NC' => [5, 11, 5, 2, 0, 0, 0], // Caledonia
		'NL' => [4, 10, 0, 0, 0, 0, 0], // Netherlands
		'NO' => [4, 6, 0, 1, 0, 0, 0], // Norway
		'PF' => [5, 11, 5, 2, 0, 0, 0], // French Polynesia
		'PK' => [4, 14, 0, 0, 0, 2, 0], // Pakistan
		'PL' => [3, 16, 4, 1, 0, 0, 0], // Poland
		'PM' => [5, 11, 5, 2, 0, 0, 0], // St. Pierre and Miquelon
		'PS' => [4, 12, 0, 0, 0, 9, 0], // Palestinian Territories
		'PT' => [4, 11, 4, 2, 0, 0, 0], // Portugal
		'QA' => [4, 21, 0, 0, 0, 0, 0], // Qatar
		'RE' => [5, 11, 5, 2, 0, 0, 0], // Reunion
		'RO' => [4, 16, 0, 0, 0, 0, 0], // Romania
		'RS' => [3, 13, 0, 2, 0, 0, 0], // Serbia
		'SA' => [2, 18, 0, 0, 0, 0, 0], // Saudi Arabia
		'SC' => [8, 16, 0, 0, 0, 0, 3], // Seychelles
		'SE' => [3, 16, 0, 1, 0, 0, 0], // Sweden
		'SI' => [2, 8, 3, 2, 0, 0, 0], // Slovenia
		'SK' => [4, 10, 6, 0, 0, 0, 0], // Slovakia
		'SM' => [5, 12, 5, 1, 0, 0, 0], // San Marino
		'ST' => [4, 11, 4, 2, 0, 0, 0], // Sao Tome and Principe
		'TF' => [5, 11, 5, 2, 0, 0, 0], // French Southern and Antarctic Lands
		'TN' => [2, 13, 3, 2, 0, 0, 0], // Tunisia
		'TL' => [3, 14, 0, 2, 0, 0, 0], // Timor-Leste
		'TR' => [5, 16, 0, 0, 0, 1, 0], // Turkey
		'UA' => [6, 19, 0, 0, 0, 0, 0], // Ukraine
		'VG' => [4, 16, 0, 0, 0, 0, 0], // Virgin Islands
		'WF' => [5, 11, 5, 2, 0, 0, 0], // Wallis and Futuna
		'XK' => [4, 12, 0, 0, 0, 0, 0] // Kosovo
	];

	/**
	 * Get the IBAN by country, account number and bank code
	 *
	 * @param string $country
	 * @param string $accountNumber
	 * @param string $bankCode
	 * @param array $additional
	 * @return string
	 * @throws \BadFunctionCallException
	 * @throws \LengthException
	 * @throws \UnexpectedValueException
	 */
	public function getIBAN(string $country, string $accountNumber, string $bankCode, array $additional = []) : string
	{
		$checkDigit = isset($additional['checkDigit']) ? $additional['checkDigit'] : '';
		$regionCode = isset($additional['regionCode']) ? $additional['regionCode'] : '';
		$branchCode = isset($additional['branchCode']) ? $additional['branchCode'] : '';
		$accountType = isset($additional['accountType']) ? $additional['accountType'] : '';
		$otherFunctions = isset($additional['otherFunctions']) ? $additional['otherFunctions'] : '';
		$accountNumber .= isset($additional['subAccountNumber']) ? $additional['subAccountNumber'] : '';
		$country = strtoupper($country);
		$iban = $country . '00';

		// Check if the country supports IBAN
		if (!isset($this->countries[$country])) {
			throw new \UnexpectedValueException(sprintf('Invalid country "%s"', $country), 1);
		}

		$bankCode = str_pad($bankCode, $this->countries[$country][$this::BANK_CODE], '0', STR_PAD_LEFT);
		$accountNumber = str_pad($accountNumber, $this->countries[$country][$this::ACCOUNT_NUMBER], '0', STR_PAD_LEFT);
		$branchCode = str_pad($branchCode, $this->countries[$country][$this::BRANCH_CODE], '0', STR_PAD_LEFT);
		$checkDigit = str_pad($checkDigit, $this->countries[$country][$this::CHECK_DIGIT], '0', STR_PAD_LEFT);

		// Check the length of account type
		if (strlen($accountType) != $this->countries[$country][$this::ACCOUNT_TYPE]) {
			throw new \LengthException(sprintf('Invalid length of account type "%s"', $accountType), 2);
		}

		// Check the length of region code
		if (strlen($regionCode) != $this->countries[$country][$this::REGION_CODE]) {
			throw new \LengthException(sprintf('Invalid length of region code "%s"', $regionCode), 3);
		}

		// Check the length of other functions
		if (strlen($otherFunctions) != $this->countries[$country][$this::OTHER_FUNCTIONS]) {
			throw new \LengthException(sprintf('Invalid length of other functions "%s"', $otherFunctions), 4);
		}

		switch ($country) {
			case 'IT': // Italy
			case 'SM': // San Marino
				$iban .= $checkDigit . $bankCode . $branchCode . $accountNumber;
				break;

			case 'AL': // Albania
			case 'HU': // Hungary
			case 'PL': // Poland
				$iban .= $bankCode . $branchCode . substr($checkDigit, 0, 1) . $accountNumber;

				if ($country == 'HU') {
					$iban .= substr($checkDigit, 1);
				}
				break;

			default: // Default
				$iban .= $bankCode . $regionCode . $branchCode . $accountType . $accountNumber . $otherFunctions;
		}

		$checkSum = 98 - $this->getChecksum($iban);
		$checkSum = $checkSum < 10 ? '0' . $checkSum : $checkSum;
		$iban = $country . $checkSum . substr($iban, 4);

		return implode(' ', str_split($iban, 4));
	}

	/**
	 * Get the checksum for an IBAN
	 *
	 * @param string $iban
	 * @return int
	 * @throws \BadFunctionCallException
	 */
	public function getChecksum(string $iban) : int
	{
		if (!function_exists('bcmod')) {
			throw new \BadFunctionCallException('Function "bcmod" does not exist', 10);
		}

		$iban = str_replace(' ', '', $iban);
		$ibanArray = str_split(substr($iban, 4) . substr($iban, 0, 4));
		$iban = '';

		foreach ($ibanArray as $char) {
			$iban .= in_array($char, range('A', 'Z')) ? ord($char) - 55 : $char;
		}

		return (int)bcmod($iban, '97');
	}

	/**
	 * Validate an IBAN
	 *
	 * @param string $iban
	 * @return bool
	 * @throws \Exception
	 */
	public function validate(string $iban) : bool
	{
		if (!isset($this->countries[substr($iban, 0, 2)])) {
			return false;
		}

		return $this->getChecksum($iban) === 1;
	}
}
