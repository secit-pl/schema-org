<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DrawActionType.
 * 
 * @method DrawActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method DrawActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DrawActionType setAgent(Property\AgentProperty $agent)
 * @method DrawActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DrawActionType setDescription(Property\DescriptionProperty $description)
 * @method DrawActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DrawActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method DrawActionType setError(Property\ErrorProperty $error)
 * @method DrawActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DrawActionType setImage(Property\ImageProperty $image)
 * @method DrawActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method DrawActionType setLocation(Property\LocationProperty $location)
 * @method DrawActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DrawActionType setName(Property\NameProperty $name)
 * @method DrawActionType setObject(Property\ObjectProperty $object)
 * @method DrawActionType setParticipant(Property\ParticipantProperty $participant)
 * @method DrawActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DrawActionType setResult(Property\ResultProperty $result)
 * @method DrawActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method DrawActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method DrawActionType setTarget(Property\TargetProperty $target)
 * @method DrawActionType setUrl(Property\UrlProperty $url)
 */
class DrawActionType extends CreateActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DrawAction';
	}
}