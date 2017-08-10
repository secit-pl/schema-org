<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReceiveAction.
 * 
 * @method ReceiveAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ReceiveAction setAgent(Property\Agent $agent)
 * @method ReceiveAction setEndTime(Property\EndTime $endTime)
 * @method ReceiveAction setError(Property\Error $error)
 * @method ReceiveAction setFromLocation(Property\FromLocation $fromLocation)
 * @method ReceiveAction setInstrument(Property\Instrument $instrument)
 * @method ReceiveAction setLocation(Property\Location $location)
 * @method ReceiveAction setObject(Property\Object $object)
 * @method ReceiveAction setParticipant(Property\Participant $participant)
 * @method ReceiveAction setResult(Property\Result $result)
 * @method ReceiveAction setStartTime(Property\StartTime $startTime)
 * @method ReceiveAction setTarget(Property\Target $target)
 * @method ReceiveAction setToLocation(Property\ToLocation $toLocation)
 */
class ReceiveAction extends TransferAction {

	/**
	 * @var Property\DeliveryMethod
	 */
	private $deliveryMethod;

	/**
	 * @var Property\Sender
	 */
	private $sender;

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
		return 'https://schema.org/ReceiveAction';
	}

	/**
	 * Get sender.
	 * 
	 * @return Property\Sender
	 */
	public function getSender() {
		return $this->sender;
	}

	/**
	 * Set delivery method.
	 * 
	 * @param Property\DeliveryMethod $deliveryMethod
	 * @return ReceiveAction
	 */
	public function setDeliveryMethod(Property\DeliveryMethod $deliveryMethod) {
		$this->deliveryMethod = $deliveryMethod;

		return $this;
	}

	/**
	 * Set sender.
	 * 
	 * @param Property\Sender $sender
	 * @return ReceiveAction
	 */
	public function setSender(Property\Sender $sender) {
		$this->sender = $sender;

		return $this;
	}
}