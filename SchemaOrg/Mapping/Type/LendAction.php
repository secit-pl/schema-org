<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LendAction.
 * 
 * @method LendAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method LendAction setAgent(Property\Agent $agent)
 * @method LendAction setEndTime(Property\EndTime $endTime)
 * @method LendAction setError(Property\Error $error)
 * @method LendAction setFromLocation(Property\FromLocation $fromLocation)
 * @method LendAction setInstrument(Property\Instrument $instrument)
 * @method LendAction setLocation(Property\Location $location)
 * @method LendAction setObject(Property\Object $object)
 * @method LendAction setParticipant(Property\Participant $participant)
 * @method LendAction setResult(Property\Result $result)
 * @method LendAction setStartTime(Property\StartTime $startTime)
 * @method LendAction setTarget(Property\Target $target)
 * @method LendAction setToLocation(Property\ToLocation $toLocation)
 */
class LendAction extends TransferAction {

	/**
	 * @var Property\Borrower
	 */
	private $borrower;

	/**
	 * Get borrower.
	 * 
	 * @return Property\Borrower
	 */
	public function getBorrower() {
		return $this->borrower;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LendAction';
	}

	/**
	 * Set borrower.
	 * 
	 * @param Property\Borrower $borrower
	 * @return LendAction
	 */
	public function setBorrower(Property\Borrower $borrower) {
		$this->borrower = $borrower;

		return $this;
	}
}