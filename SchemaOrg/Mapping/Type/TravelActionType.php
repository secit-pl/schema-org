<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TravelActionType.
 * 
 * @method TravelActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method TravelActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TravelActionType setAgent(Property\AgentProperty $agent)
 * @method TravelActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TravelActionType setDescription(Property\DescriptionProperty $description)
 * @method TravelActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TravelActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method TravelActionType setError(Property\ErrorProperty $error)
 * @method TravelActionType setFromLocation(Property\FromLocationProperty $fromLocation)
 * @method TravelActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TravelActionType setImage(Property\ImageProperty $image)
 * @method TravelActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method TravelActionType setLocation(Property\LocationProperty $location)
 * @method TravelActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TravelActionType setName(Property\NameProperty $name)
 * @method TravelActionType setObject(Property\ObjectProperty $object)
 * @method TravelActionType setParticipant(Property\ParticipantProperty $participant)
 * @method TravelActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TravelActionType setResult(Property\ResultProperty $result)
 * @method TravelActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method TravelActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method TravelActionType setTarget(Property\TargetProperty $target)
 * @method TravelActionType setToLocation(Property\ToLocationProperty $toLocation)
 * @method TravelActionType setUrl(Property\UrlProperty $url)
 */
class TravelActionType extends MoveActionType {

	/**
	 * @var Property\DistanceProperty
	 */
	private $distance;

	/**
	 * Get distance.
	 * 
	 * @return Property\DistanceProperty
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
	 * @param Property\DistanceProperty $distance
	 * @return TravelActionType
	 */
	public function setDistance(Property\DistanceProperty $distance) {
		$this->distance = $distance;

		return $this;
	}
}