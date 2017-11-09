<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EndorseActionType.
 * 
 * @method EndorseActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method EndorseActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EndorseActionType setAgent(Property\AgentProperty $agent)
 * @method EndorseActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EndorseActionType setDescription(Property\DescriptionProperty $description)
 * @method EndorseActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EndorseActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method EndorseActionType setError(Property\ErrorProperty $error)
 * @method EndorseActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EndorseActionType setImage(Property\ImageProperty $image)
 * @method EndorseActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method EndorseActionType setLocation(Property\LocationProperty $location)
 * @method EndorseActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EndorseActionType setName(Property\NameProperty $name)
 * @method EndorseActionType setObject(Property\ObjectProperty $object)
 * @method EndorseActionType setParticipant(Property\ParticipantProperty $participant)
 * @method EndorseActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EndorseActionType setResult(Property\ResultProperty $result)
 * @method EndorseActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method EndorseActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method EndorseActionType setTarget(Property\TargetProperty $target)
 * @method EndorseActionType setUrl(Property\UrlProperty $url)
 */
class EndorseActionType extends ReactActionType {

	/**
	 * @var Property\EndorseeProperty
	 */
	private $endorsee;

	/**
	 * Get endorsee.
	 * 
	 * @return Property\EndorseeProperty
	 */
	public function getEndorsee() {
		return $this->endorsee;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EndorseAction';
	}

	/**
	 * Set endorsee.
	 * 
	 * @param Property\EndorseeProperty $endorsee
	 * @return EndorseActionType
	 */
	public function setEndorsee(Property\EndorseeProperty $endorsee) {
		$this->endorsee = $endorsee;

		return $this;
	}
}