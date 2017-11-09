<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CheckActionType.
 * 
 * @method CheckActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method CheckActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CheckActionType setAgent(Property\AgentProperty $agent)
 * @method CheckActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CheckActionType setDescription(Property\DescriptionProperty $description)
 * @method CheckActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CheckActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method CheckActionType setError(Property\ErrorProperty $error)
 * @method CheckActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CheckActionType setImage(Property\ImageProperty $image)
 * @method CheckActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method CheckActionType setLocation(Property\LocationProperty $location)
 * @method CheckActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CheckActionType setName(Property\NameProperty $name)
 * @method CheckActionType setObject(Property\ObjectProperty $object)
 * @method CheckActionType setParticipant(Property\ParticipantProperty $participant)
 * @method CheckActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CheckActionType setResult(Property\ResultProperty $result)
 * @method CheckActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method CheckActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method CheckActionType setTarget(Property\TargetProperty $target)
 * @method CheckActionType setUrl(Property\UrlProperty $url)
 */
class CheckActionType extends FindActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CheckAction';
	}
}