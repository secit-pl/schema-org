<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GiveAction.
 * 
 * @method GiveAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method GiveAction setAgent(Property\Agent $agent)
 * @method GiveAction setEndTime(Property\EndTime $endTime)
 * @method GiveAction setError(Property\Error $error)
 * @method GiveAction setFromLocation(Property\FromLocation $fromLocation)
 * @method GiveAction setInstrument(Property\Instrument $instrument)
 * @method GiveAction setLocation(Property\Location $location)
 * @method GiveAction setObject(Property\Object $object)
 * @method GiveAction setParticipant(Property\Participant $participant)
 * @method GiveAction setResult(Property\Result $result)
 * @method GiveAction setStartTime(Property\StartTime $startTime)
 * @method GiveAction setTarget(Property\Target $target)
 * @method GiveAction setToLocation(Property\ToLocation $toLocation)
 */
class GiveAction extends TransferAction {

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
		return 'https://schema.org/GiveAction';
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\Recipient $recipient
	 * @return GiveAction
	 */
	public function setRecipient(Property\Recipient $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}