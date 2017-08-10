<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReviewAction.
 * 
 * @method ReviewAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ReviewAction setAgent(Property\Agent $agent)
 * @method ReviewAction setEndTime(Property\EndTime $endTime)
 * @method ReviewAction setError(Property\Error $error)
 * @method ReviewAction setInstrument(Property\Instrument $instrument)
 * @method ReviewAction setLocation(Property\Location $location)
 * @method ReviewAction setObject(Property\Object $object)
 * @method ReviewAction setParticipant(Property\Participant $participant)
 * @method ReviewAction setResult(Property\Result $result)
 * @method ReviewAction setStartTime(Property\StartTime $startTime)
 * @method ReviewAction setTarget(Property\Target $target)
 */
class ReviewAction extends AssessAction {

	/**
	 * @var Property\ResultReview
	 */
	private $resultReview;

	/**
	 * Get result review.
	 * 
	 * @return Property\ResultReview
	 */
	public function getResultReview() {
		return $this->resultReview;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReviewAction';
	}

	/**
	 * Set result review.
	 * 
	 * @param Property\ResultReview $resultReview
	 * @return ReviewAction
	 */
	public function setResultReview(Property\ResultReview $resultReview) {
		$this->resultReview = $resultReview;

		return $this;
	}
}