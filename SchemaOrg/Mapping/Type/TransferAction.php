<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TransferAction.
 * 
 * @method TransferAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method TransferAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method TransferAction setAgent(Property\Agent $agent)
 * @method TransferAction setAlternateName(Property\AlternateName $alternateName)
 * @method TransferAction setDescription(Property\Description $description)
 * @method TransferAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TransferAction setEndTime(Property\EndTime $endTime)
 * @method TransferAction setError(Property\Error $error)
 * @method TransferAction setImage(Property\Image $image)
 * @method TransferAction setInstrument(Property\Instrument $instrument)
 * @method TransferAction setLocation(Property\Location $location)
 * @method TransferAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TransferAction setName(Property\Name $name)
 * @method TransferAction setObject(Property\Object $object)
 * @method TransferAction setParticipant(Property\Participant $participant)
 * @method TransferAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TransferAction setResult(Property\Result $result)
 * @method TransferAction setSameAs(Property\SameAs $sameAs)
 * @method TransferAction setStartTime(Property\StartTime $startTime)
 * @method TransferAction setTarget(Property\Target $target)
 * @method TransferAction setUrl(Property\Url $url)
 */
class TransferAction extends Action {

	/**
	 * @var Property\FromLocation
	 */
	private $fromLocation;

	/**
	 * @var Property\ToLocation
	 */
	private $toLocation;

	/**
	 * Get from location.
	 * 
	 * @return Property\FromLocation
	 */
	public function getFromLocation() {
		return $this->fromLocation;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TransferAction';
	}

	/**
	 * Get to location.
	 * 
	 * @return Property\ToLocation
	 */
	public function getToLocation() {
		return $this->toLocation;
	}

	/**
	 * Set from location.
	 * 
	 * @param Property\FromLocation $fromLocation
	 * @return TransferAction
	 */
	public function setFromLocation(Property\FromLocation $fromLocation) {
		$this->fromLocation = $fromLocation;

		return $this;
	}

	/**
	 * Set to location.
	 * 
	 * @param Property\ToLocation $toLocation
	 * @return TransferAction
	 */
	public function setToLocation(Property\ToLocation $toLocation) {
		$this->toLocation = $toLocation;

		return $this;
	}
}