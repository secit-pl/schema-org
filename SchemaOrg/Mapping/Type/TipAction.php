<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TipAction.
 * 
 * @method TipAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method TipAction setAgent(Property\Agent $agent)
 * @method TipAction setEndTime(Property\EndTime $endTime)
 * @method TipAction setError(Property\Error $error)
 * @method TipAction setInstrument(Property\Instrument $instrument)
 * @method TipAction setLocation(Property\Location $location)
 * @method TipAction setObject(Property\Object $object)
 * @method TipAction setParticipant(Property\Participant $participant)
 * @method TipAction setPrice(Property\Price $price)
 * @method TipAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method TipAction setResult(Property\Result $result)
 * @method TipAction setStartTime(Property\StartTime $startTime)
 * @method TipAction setTarget(Property\Target $target)
 */
class TipAction extends TradeAction {

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
		return 'https://schema.org/TipAction';
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\Recipient $recipient
	 * @return TipAction
	 */
	public function setRecipient(Property\Recipient $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}