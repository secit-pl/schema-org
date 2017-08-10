<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PayAction.
 * 
 * @method PayAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method PayAction setAgent(Property\Agent $agent)
 * @method PayAction setEndTime(Property\EndTime $endTime)
 * @method PayAction setError(Property\Error $error)
 * @method PayAction setInstrument(Property\Instrument $instrument)
 * @method PayAction setLocation(Property\Location $location)
 * @method PayAction setObject(Property\Object $object)
 * @method PayAction setParticipant(Property\Participant $participant)
 * @method PayAction setPrice(Property\Price $price)
 * @method PayAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method PayAction setResult(Property\Result $result)
 * @method PayAction setStartTime(Property\StartTime $startTime)
 * @method PayAction setTarget(Property\Target $target)
 */
class PayAction extends TradeAction {

	/**
	 * @var Property\Recipient
	 */
	private $recipient;

	/**
	 * Get recipient.
	 * 
	 * @return Property\Recipient
	 */
	public function getRecipient() {
		return $this->recipient;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PayAction';
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\Recipient $recipient
	 * @return PayAction
	 */
	public function setRecipient(Property\Recipient $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}