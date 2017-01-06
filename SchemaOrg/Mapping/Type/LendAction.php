<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LendAction.
 * 
 * @method LendAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method LendAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method LendAction setAgent(Property\Agent $agent)
 * @method LendAction setAlternateName(Property\AlternateName $alternateName)
 * @method LendAction setDescription(Property\Description $description)
 * @method LendAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LendAction setEndTime(Property\EndTime $endTime)
 * @method LendAction setError(Property\Error $error)
 * @method LendAction setFromLocation(Property\FromLocation $fromLocation)
 * @method LendAction setImage(Property\Image $image)
 * @method LendAction setInstrument(Property\Instrument $instrument)
 * @method LendAction setLocation(Property\Location $location)
 * @method LendAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LendAction setName(Property\Name $name)
 * @method LendAction setObject(Property\Object $object)
 * @method LendAction setParticipant(Property\Participant $participant)
 * @method LendAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LendAction setResult(Property\Result $result)
 * @method LendAction setSameAs(Property\SameAs $sameAs)
 * @method LendAction setStartTime(Property\StartTime $startTime)
 * @method LendAction setTarget(Property\Target $target)
 * @method LendAction setToLocation(Property\ToLocation $toLocation)
 * @method LendAction setUrl(Property\Url $url)
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