<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MoveAction.
 * 
 * @method MoveAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method MoveAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method MoveAction setAgent(Property\Agent $agent)
 * @method MoveAction setAlternateName(Property\AlternateName $alternateName)
 * @method MoveAction setDescription(Property\Description $description)
 * @method MoveAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MoveAction setEndTime(Property\EndTime $endTime)
 * @method MoveAction setError(Property\Error $error)
 * @method MoveAction setIdentifier(Property\Identifier $identifier)
 * @method MoveAction setImage(Property\Image $image)
 * @method MoveAction setInstrument(Property\Instrument $instrument)
 * @method MoveAction setLocation(Property\Location $location)
 * @method MoveAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MoveAction setName(Property\Name $name)
 * @method MoveAction setObject(Property\Object $object)
 * @method MoveAction setParticipant(Property\Participant $participant)
 * @method MoveAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MoveAction setResult(Property\Result $result)
 * @method MoveAction setSameAs(Property\SameAs $sameAs)
 * @method MoveAction setStartTime(Property\StartTime $startTime)
 * @method MoveAction setTarget(Property\Target $target)
 * @method MoveAction setUrl(Property\Url $url)
 */
class MoveAction extends Action {

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
		return 'https://schema.org/MoveAction';
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
	 * @return MoveAction
	 */
	public function setFromLocation(Property\FromLocation $fromLocation) {
		$this->fromLocation = $fromLocation;

		return $this;
	}

	/**
	 * Set to location.
	 * 
	 * @param Property\ToLocation $toLocation
	 * @return MoveAction
	 */
	public function setToLocation(Property\ToLocation $toLocation) {
		$this->toLocation = $toLocation;

		return $this;
	}
}