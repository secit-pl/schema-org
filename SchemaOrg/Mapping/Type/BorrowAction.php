<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BorrowAction.
 * 
 * @method BorrowAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method BorrowAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method BorrowAction setAgent(Property\Agent $agent)
 * @method BorrowAction setAlternateName(Property\AlternateName $alternateName)
 * @method BorrowAction setDescription(Property\Description $description)
 * @method BorrowAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BorrowAction setEndTime(Property\EndTime $endTime)
 * @method BorrowAction setError(Property\Error $error)
 * @method BorrowAction setFromLocation(Property\FromLocation $fromLocation)
 * @method BorrowAction setImage(Property\Image $image)
 * @method BorrowAction setInstrument(Property\Instrument $instrument)
 * @method BorrowAction setLocation(Property\Location $location)
 * @method BorrowAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BorrowAction setName(Property\Name $name)
 * @method BorrowAction setObject(Property\Object $object)
 * @method BorrowAction setParticipant(Property\Participant $participant)
 * @method BorrowAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BorrowAction setResult(Property\Result $result)
 * @method BorrowAction setSameAs(Property\SameAs $sameAs)
 * @method BorrowAction setStartTime(Property\StartTime $startTime)
 * @method BorrowAction setTarget(Property\Target $target)
 * @method BorrowAction setToLocation(Property\ToLocation $toLocation)
 * @method BorrowAction setUrl(Property\Url $url)
 */
class BorrowAction extends TransferAction {

	/**
	 * @var Property\Lender
	 */
	private $lender;

	/**
	 * Get lender.
	 * 
	 * @return Property\Lender
	 */
	public function getLender() {
		return $this->lender;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BorrowAction';
	}

	/**
	 * Set lender.
	 * 
	 * @param Property\Lender $lender
	 * @return BorrowAction
	 */
	public function setLender(Property\Lender $lender) {
		$this->lender = $lender;

		return $this;
	}
}