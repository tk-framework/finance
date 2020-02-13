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
class IBANCest
{
	/**
	 * @var Framework\Finance\IBAN
	 */
	protected $iban;

	/**
	 *
	 */
	public function __construct()
	{
		$this->iban = new Framework\Finance\IBAN();
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateAlbania(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('AL47212110090000000235698741'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateAndorra(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('AD1200012030200359100100'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateAustria(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('AT611904300234573201'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateAzerbaijan(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('AZ21NABZ00000000137010001944'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateBahrain(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('BH67BMAG00001299123456'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateBelgium(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('BE68539007547034'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateBosniaAndHerzegovina(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('BA391290079401028494'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateBrazil(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('BR7724891749412660603618210F3'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateBulgaria(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('BR7724891749412660603618210F3'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateCostaRica(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('CR0515202001026284066'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateCroatia(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('HR1210010051863000160'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateCyprus(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('CY17002001280000001200527600'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateCzechRepublic(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('CZ6508000000192000145399'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateDenmark(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('DK5000400440116243'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateDominicanRepublic(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('DO28BAGR00000001212453611324'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateEstonia(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('EE382200221020145685'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateFaroeIslands(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('FO6264600001631634'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateFinland(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('FI2112345600000785'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateFrance(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('FR1420041010050500013M02606'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateGeorgia(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('GE29NB0000000101904917'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateGermany(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('DE89370400440532013000'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateGibraltar(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('GI75NWBK000000007099453'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateGreece(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('GR1601101250000000012300695'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateGreenland(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('GL8964710001000206'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateGuatemala(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('GT82TRAJ01020000001210029690'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateHungary(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('HU42117730161111101800000000'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateIceland(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('IS140159260076545510730339'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateIreland(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('IE29AIBK93115212345678'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateIsrael(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('IL620108000000099999999'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateItaly(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('IT60X0542811101000000123456'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateJordan(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('JO94CBJO0010000000000131000302'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateKazakhstan(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('KZ86125KZT5004100100'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateKuwait(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('KW81CBKU0000000000001234560101'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateLatvia(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('LV80BANK0000435195001'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateLebanon(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('LB62099900000001001901229114'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateLiechtenstein(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('LI21088100002324013AA'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateLithuania(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('LT121000011101001000'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateLuxembourg(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('LU280019400644750000'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateMacedonia(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('MK07250120000058984'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateMalta(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('MT84MALT011000012345MTLCAST001S'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateMauritania(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('MT84MALT011000012345MTLCAST001S'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateMauritius(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('MU17BOMM0101101030300200000MUR'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateMoldova(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('MD24AG000225100013104168'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateMonaco(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('MC5811222000010123456789030'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateMontenegro(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('ME25505000012345678951'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateNetherlands(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('NL91ABNA0417164300'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateNorway(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('NO9386011117947'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validatePakistan(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('PK36SCBL0000001123456702'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validatePoland(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('PL61109010140000071219812874'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validatePalestinian(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('PS92PALS000000000400123456702'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validatePortugal(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('PT50000201231234567890154'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateQatar(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('QA58DOHB00001234567890ABCDEFG'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateRepublicOfKosovo(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('XK051212012345678906'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateRomania(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('RO49AAAA1B31007593840000'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateSanMarino(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('SM86U0322509800000000270100'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateSaoTomeAndPrincipe(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('ST68000100010051845310112'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateSaudiArabia(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('SA0380000000608010167519'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateSerbia(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('RS35260005601001611379'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateSeychelles(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('SC18SSCB11010000000000001497USD'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateSlovakRepublic(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('SK3112000000198742637541'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateSlovenia(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('SI56263300012039086'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateSpain(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('ES9121000418450200051332'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateSweden(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('SE4550000000058398257466'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateSwitzerland(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('CH9300762011623852957'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateTimorLeste(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('TL380080012345678910157'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateTunisia(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('TN5910006035183598478831'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateTurkey(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('TR330006100519786457841326'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateUkraine(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('UA213996220000026007233566001'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateUnitedArabEmirates(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('AE070331234567890123456'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateUnitedKingdom(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('GB29NWBK60161331926819'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateVirginIslands(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertTrue($this->iban->validate('VG96VPVG0000012345678901'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function validateNotExistingCountry(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertFalse($this->iban->validate('YY24KIHB12476423125915947930915268'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}

	/**
	 * @param Framework\Test\UnitTester $I
	 */
	public function buildIBAN(Framework\Test\UnitTester $I) : void
	{
		try {
			$I->assertEquals('DE89 3704 0044 0532 0130 00', $this->iban->getIBAN('DE', '532013000', '37040044'));
		}
		catch (\Exception $e) {
			$I->fail($e->getMessage());
		}
	}
}
