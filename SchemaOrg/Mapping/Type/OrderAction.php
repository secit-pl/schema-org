<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderAction.
 * 
 * @method OrderAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method OrderAction setAgent(Property\Agent $agent)
 * @method OrderAction setEndTime(Property\EndTime $endTime)
 * @method OrderAction setError(Property\Error $error)
 * @method OrderAction setInstrument(Property\Instrument $instrument)
 * @method OrderAction setLocation(Property\Location $location)
 * @method OrderAction setObject(Property\Object $object)
 * @method OrderAction setParticipant(Property\Participant $participant)
 * @method OrderAction setPrice(Property\Price $price)
 * @method OrderAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method OrderAction setResult(Property\Result $result)
 * @method OrderAction setStartTime(Property\StartTime $startTime)
 * @method OrderAction setTarget(Property\Target $target)
 */
class OrderAction extends TradeAction {

	/**
	 * @var Property\DeliveryMethod
	 */
	private $deliveryMethod;

	/**
	 * Get delivery method.
	 * 
	 * @return Property\DeliveryMethod
	 */
	public function getDeliveryMethod() {
		return $this->deliveryMethod;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderAction';
	}

	/**
	 * Set delivery method.
	 * 
	 * @param Property\DeliveryMethod $deliveryMethod
	 * @return OrderAction
	 */
	public function setDeliveryMethod(Property\DeliveryMethod $deliveryMethod) {
		$this->deliveryMethod = $deliveryMethod;

		return $this;
	}
}