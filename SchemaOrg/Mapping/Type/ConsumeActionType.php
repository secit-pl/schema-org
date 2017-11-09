<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ConsumeActionType.
 * 
 * @method ConsumeActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ConsumeActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ConsumeActionType setAgent(Property\AgentProperty $agent)
 * @method ConsumeActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ConsumeActionType setDescription(Property\DescriptionProperty $description)
 * @method ConsumeActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ConsumeActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ConsumeActionType setError(Property\ErrorProperty $error)
 * @method ConsumeActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ConsumeActionType setImage(Property\ImageProperty $image)
 * @method ConsumeActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ConsumeActionType setLocation(Property\LocationProperty $location)
 * @method ConsumeActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ConsumeActionType setName(Property\NameProperty $name)
 * @method ConsumeActionType setObject(Property\ObjectProperty $object)
 * @method ConsumeActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ConsumeActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ConsumeActionType setResult(Property\ResultProperty $result)
 * @method ConsumeActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ConsumeActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ConsumeActionType setTarget(Property\TargetProperty $target)
 * @method ConsumeActionType setUrl(Property\UrlProperty $url)
 */
class ConsumeActionType extends ActionType {

	/**
	 * @var Property\ExpectsAcceptanceOfProperty
	 */
	private $expectsAcceptanceOf;

	/**
	 * Get expects acceptance of.
	 * 
	 * @return Property\ExpectsAcceptanceOfProperty
	 */
	public function getExpectsAcceptanceOf() {
		return $this->expectsAcceptanceOf;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ConsumeAction';
	}

	/**
	 * Set expects acceptance of.
	 * 
	 * @param Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf
	 * @return ConsumeActionType
	 */
	public function setExpectsAcceptanceOf(Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf) {
		$this->expectsAcceptanceOf = $expectsAcceptanceOf;

		return $this;
	}
}