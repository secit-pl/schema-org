<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EatActionType.
 * 
 * @method EatActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method EatActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EatActionType setAgent(Property\AgentProperty $agent)
 * @method EatActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EatActionType setDescription(Property\DescriptionProperty $description)
 * @method EatActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EatActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method EatActionType setError(Property\ErrorProperty $error)
 * @method EatActionType setExpectsAcceptanceOf(Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf)
 * @method EatActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EatActionType setImage(Property\ImageProperty $image)
 * @method EatActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method EatActionType setLocation(Property\LocationProperty $location)
 * @method EatActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EatActionType setName(Property\NameProperty $name)
 * @method EatActionType setObject(Property\ObjectProperty $object)
 * @method EatActionType setParticipant(Property\ParticipantProperty $participant)
 * @method EatActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EatActionType setResult(Property\ResultProperty $result)
 * @method EatActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method EatActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method EatActionType setTarget(Property\TargetProperty $target)
 * @method EatActionType setUrl(Property\UrlProperty $url)
 */
class EatActionType extends ConsumeActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EatAction';
	}
}