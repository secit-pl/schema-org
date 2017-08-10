<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SellAction.
 * 
 * @method SellAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method SellAction setAgent(Property\Agent $agent)
 * @method SellAction setEndTime(Property\EndTime $endTime)
 * @method SellAction setError(Property\Error $error)
 * @method SellAction setInstrument(Property\Instrument $instrument)
 * @method SellAction setLocation(Property\Location $location)
 * @method SellAction setObject(Property\Object $object)
 * @method SellAction setParticipant(Property\Participant $participant)
 * @method SellAction setPrice(Property\Price $price)
 * @method SellAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method SellAction setResult(Property\Result $result)
 * @method SellAction setStartTime(Property\StartTime $startTime)
 * @method SellAction setTarget(Property\Target $target)
 */
class SellAction extends TradeAction {

	/**
	 * @var Property\Buyer
	 */
	private $buyer;

	/**
	 * Get buyer.
	 * 
	 * @return Property\Buyer
	 */
	public function getBuyer() {
		return $this->buyer;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SellAction';
	}

	/**
	 * Set buyer.
	 * 
	 * @param Property\Buyer $buyer
	 * @return SellAction
	 */
	public function setBuyer(Property\Buyer $buyer) {
		$this->buyer = $buyer;

		return $this;
	}
}