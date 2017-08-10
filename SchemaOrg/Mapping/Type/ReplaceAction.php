<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReplaceAction.
 * 
 * @method ReplaceAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ReplaceAction setAgent(Property\Agent $agent)
 * @method ReplaceAction setEndTime(Property\EndTime $endTime)
 * @method ReplaceAction setError(Property\Error $error)
 * @method ReplaceAction setInstrument(Property\Instrument $instrument)
 * @method ReplaceAction setLocation(Property\Location $location)
 * @method ReplaceAction setObject(Property\Object $object)
 * @method ReplaceAction setParticipant(Property\Participant $participant)
 * @method ReplaceAction setResult(Property\Result $result)
 * @method ReplaceAction setStartTime(Property\StartTime $startTime)
 * @method ReplaceAction setTarget(Property\Target $target)
 * @method ReplaceAction setTargetCollection(Property\TargetCollection $targetCollection)
 */
class ReplaceAction extends UpdateAction {

	/**
	 * @var Property\Replacee
	 */
	private $replacee;

	/**
	 * @var Property\Replacer
	 */
	private $replacer;

	/**
	 * Get replacee.
	 * 
	 * @return Property\Replacee
	 */
	public function getReplacee() {
		return $this->replacee;
	}

	/**
	 * Get replacer.
	 * 
	 * @return Property\Replacer
	 */
	public function getReplacer() {
		return $this->replacer;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReplaceAction';
	}

	/**
	 * Set replacee.
	 * 
	 * @param Property\Replacee $replacee
	 * @return ReplaceAction
	 */
	public function setReplacee(Property\Replacee $replacee) {
		$this->replacee = $replacee;

		return $this;
	}

	/**
	 * Set replacer.
	 * 
	 * @param Property\Replacer $replacer
	 * @return ReplaceAction
	 */
	public function setReplacer(Property\Replacer $replacer) {
		$this->replacer = $replacer;

		return $this;
	}
}