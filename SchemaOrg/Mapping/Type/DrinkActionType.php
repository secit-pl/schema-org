<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DrinkActionType.
 * 
 * @method DrinkActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method DrinkActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DrinkActionType setAgent(Property\AgentProperty $agent)
 * @method DrinkActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DrinkActionType setDescription(Property\DescriptionProperty $description)
 * @method DrinkActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DrinkActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method DrinkActionType setError(Property\ErrorProperty $error)
 * @method DrinkActionType setExpectsAcceptanceOf(Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf)
 * @method DrinkActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DrinkActionType setImage(Property\ImageProperty $image)
 * @method DrinkActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method DrinkActionType setLocation(Property\LocationProperty $location)
 * @method DrinkActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DrinkActionType setName(Property\NameProperty $name)
 * @method DrinkActionType setObject(Property\ObjectProperty $object)
 * @method DrinkActionType setParticipant(Property\ParticipantProperty $participant)
 * @method DrinkActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DrinkActionType setResult(Property\ResultProperty $result)
 * @method DrinkActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method DrinkActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method DrinkActionType setTarget(Property\TargetProperty $target)
 * @method DrinkActionType setUrl(Property\UrlProperty $url)
 */
class DrinkActionType extends ConsumeActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DrinkAction';
	}
}