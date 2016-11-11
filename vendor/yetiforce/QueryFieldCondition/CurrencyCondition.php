<?php
namespace App\QueryFieldCondition;

/**
 * Currency Query Condition Parser Class
 * @package YetiForce.App
 * @license licenses/License.html
 * @author Tomasz Kur <t.kur@yetiforce.com>
 */
class CurrencyCondition extends IntegerCondition
{

	/**
	 * Get value
	 * @return double
	 */
	public function getValue()
	{
		$value = $this->value;
		$uiType = $this->fieldModel->getUIType();
		if ($uiType === 72) {
			$value = \CurrencyField::convertToDBFormat($value, null, true);
		} elseif ($uiType === 71) {
			$value = \CurrencyField::convertToDBFormat($value);
		}
		return $value;
	}
}
