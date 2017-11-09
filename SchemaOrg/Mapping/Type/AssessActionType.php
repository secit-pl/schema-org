<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AssessActionType.
 * 
 * @method AssessActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method AssessActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AssessActionType setAgent(Property\AgentProperty $agent)
 * @method AssessActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AssessActionType setDescription(Property\DescriptionProperty $description)
 * @method AssessActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AssessActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method AssessActionType setError(Property\ErrorProperty $error)
 * @method AssessActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AssessActionType setImage(Property\ImageProperty $image)
 * @method AssessActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method AssessActionType setLocation(Property\LocationProperty $location)
 * @method AssessActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AssessActionType setName(Property\NameProperty $name)
 * @method AssessActionType setObject(Property\ObjectProperty $object)
 * @method AssessActionType setParticipant(Property\ParticipantProperty $participant)
 * @method AssessActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AssessActionType setResult(Property\ResultProperty $result)
 * @method AssessActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method AssessActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method AssessActionType setTarget(Property\TargetProperty $target)
 * @method AssessActionType setUrl(Property\UrlProperty $url)
 */
class AssessActionType extends ActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AssessAction';
	}
}