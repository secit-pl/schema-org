<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DonateAction.
 * 
 * @method DonateAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DonateAction setAgent(Property\Agent $agent)
 * @method DonateAction setEndTime(Property\EndTime $endTime)
 * @method DonateAction setError(Property\Error $error)
 * @method DonateAction setInstrument(Property\Instrument $instrument)
 * @method DonateAction setLocation(Property\Location $location)
 * @method DonateAction setObject(Property\Object $object)
 * @method DonateAction setParticipant(Property\Participant $participant)
 * @method DonateAction setPrice(Property\Price $price)
 * @method DonateAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method DonateAction setResult(Property\Result $result)
 * @method DonateAction setStartTime(Property\StartTime $startTime)
 * @method DonateAction setTarget(Property\Target $target)
 */
class DonateAction extends TradeAction {

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
		return 'https://schema.org/DonateAction';
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\Recipient $recipient
	 * @return DonateAction
	 */
	public function setRecipient(Property\Recipient $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}