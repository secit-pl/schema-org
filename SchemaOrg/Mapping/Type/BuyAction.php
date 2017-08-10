<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BuyAction.
 * 
 * @method BuyAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method BuyAction setAgent(Property\Agent $agent)
 * @method BuyAction setEndTime(Property\EndTime $endTime)
 * @method BuyAction setError(Property\Error $error)
 * @method BuyAction setInstrument(Property\Instrument $instrument)
 * @method BuyAction setLocation(Property\Location $location)
 * @method BuyAction setObject(Property\Object $object)
 * @method BuyAction setParticipant(Property\Participant $participant)
 * @method BuyAction setPrice(Property\Price $price)
 * @method BuyAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method BuyAction setResult(Property\Result $result)
 * @method BuyAction setStartTime(Property\StartTime $startTime)
 * @method BuyAction setTarget(Property\Target $target)
 */
class BuyAction extends TradeAction {

	/**
	 * @var Property\Seller
	 */
	private $seller;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BuyAction';
	}

	/**
	 * Get seller.
	 * 
	 * @return Property\Seller
	 */
	public function getSeller() {
		return $this->seller;
	}

	/**
	 * Set seller.
	 * 
	 * @param Property\Seller $seller
	 * @return BuyAction
	 */
	public function setSeller(Property\Seller $seller) {
		$this->seller = $seller;

		return $this;
	}
}