<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RegisterActionType.
 * 
 * @method RegisterActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method RegisterActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RegisterActionType setAgent(Property\AgentProperty $agent)
 * @method RegisterActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RegisterActionType setDescription(Property\DescriptionProperty $description)
 * @method RegisterActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RegisterActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method RegisterActionType setError(Property\ErrorProperty $error)
 * @method RegisterActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RegisterActionType setImage(Property\ImageProperty $image)
 * @method RegisterActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method RegisterActionType setLocation(Property\LocationProperty $location)
 * @method RegisterActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RegisterActionType setName(Property\NameProperty $name)
 * @method RegisterActionType setObject(Property\ObjectProperty $object)
 * @method RegisterActionType setParticipant(Property\ParticipantProperty $participant)
 * @method RegisterActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RegisterActionType setResult(Property\ResultProperty $result)
 * @method RegisterActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method RegisterActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method RegisterActionType setTarget(Property\TargetProperty $target)
 * @method RegisterActionType setUrl(Property\UrlProperty $url)
 */
class RegisterActionType extends InteractActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RegisterAction';
	}
}