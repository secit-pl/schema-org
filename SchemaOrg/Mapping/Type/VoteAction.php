<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VoteAction.
 * 
 * @method VoteAction setActionOption(Property\ActionOption $actionOption)
 * @method VoteAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method VoteAction setAgent(Property\Agent $agent)
 * @method VoteAction setEndTime(Property\EndTime $endTime)
 * @method VoteAction setError(Property\Error $error)
 * @method VoteAction setInstrument(Property\Instrument $instrument)
 * @method VoteAction setLocation(Property\Location $location)
 * @method VoteAction setObject(Property\Object $object)
 * @method VoteAction setParticipant(Property\Participant $participant)
 * @method VoteAction setResult(Property\Result $result)
 * @method VoteAction setStartTime(Property\StartTime $startTime)
 * @method VoteAction setTarget(Property\Target $target)
 */
class VoteAction extends ChooseAction {

	/**
	 * @var Property\Candidate
	 */
	private $candidate;

	/**
	 * Get candidate.
	 * 
	 * @return Property\Candidate
	 */
	public function getCandidate() {
		return $this->candidate;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VoteAction';
	}

	/**
	 * Set candidate.
	 * 
	 * @param Property\Candidate $candidate
	 * @return VoteAction
	 */
	public function setCandidate(Property\Candidate $candidate) {
		$this->candidate = $candidate;

		return $this;
	}
}