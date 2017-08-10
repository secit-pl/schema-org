<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class UpdateAction.
 * 
 * @method UpdateAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method UpdateAction setAgent(Property\Agent $agent)
 * @method UpdateAction setEndTime(Property\EndTime $endTime)
 * @method UpdateAction setError(Property\Error $error)
 * @method UpdateAction setInstrument(Property\Instrument $instrument)
 * @method UpdateAction setLocation(Property\Location $location)
 * @method UpdateAction setObject(Property\Object $object)
 * @method UpdateAction setParticipant(Property\Participant $participant)
 * @method UpdateAction setResult(Property\Result $result)
 * @method UpdateAction setStartTime(Property\StartTime $startTime)
 * @method UpdateAction setTarget(Property\Target $target)
 */
class UpdateAction extends Action {

	/**
	 * @var Property\TargetCollection
	 */
	private $targetCollection;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UpdateAction';
	}

	/**
	 * Get target collection.
	 * 
	 * @return Property\TargetCollection
	 */
	public function getTargetCollection() {
		return $this->targetCollection;
	}

	/**
	 * Set target collection.
	 * 
	 * @param Property\TargetCollection $targetCollection
	 * @return UpdateAction
	 */
	public function setTargetCollection(Property\TargetCollection $targetCollection) {
		$this->targetCollection = $targetCollection;

		return $this;
	}
}