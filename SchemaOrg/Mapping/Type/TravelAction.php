<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TravelAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\TravelActionType instead.
 * 
 * @method TravelAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method TravelAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method TravelAction setAgent(Property\Agent $agent)
 * @method TravelAction setAlternateName(Property\AlternateName $alternateName)
 * @method TravelAction setDescription(Property\Description $description)
 * @method TravelAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TravelAction setEndTime(Property\EndTime $endTime)
 * @method TravelAction setError(Property\Error $error)
 * @method TravelAction setFromLocation(Property\FromLocation $fromLocation)
 * @method TravelAction setIdentifier(Property\Identifier $identifier)
 * @method TravelAction setImage(Property\Image $image)
 * @method TravelAction setInstrument(Property\Instrument $instrument)
 * @method TravelAction setLocation(Property\Location $location)
 * @method TravelAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TravelAction setName(Property\Name $name)
 * @method TravelAction setObject(Property\Object $object)
 * @method TravelAction setParticipant(Property\Participant $participant)
 * @method TravelAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TravelAction setResult(Property\Result $result)
 * @method TravelAction setSameAs(Property\SameAs $sameAs)
 * @method TravelAction setStartTime(Property\StartTime $startTime)
 * @method TravelAction setTarget(Property\Target $target)
 * @method TravelAction setToLocation(Property\ToLocation $toLocation)
 * @method TravelAction setUrl(Property\Url $url)
 */
class TravelAction extends MoveAction {

	/**
	 * @var Property\Distance
	 */
	private $distance;

	/**
	 * Get distance.
	 * 
	 * @return Property\Distance
	 */
	public function getDistance() {
		return $this->distance;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TravelAction';
	}

	/**
	 * Set distance.
	 * 
	 * @param Property\Distance $distance
	 * @return TravelAction
	 */
	public function setDistance(Property\Distance $distance) {
		$this->distance = $distance;

		return $this;
	}
}