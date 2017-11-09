<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReactActionType.
 * 
 * @method ReactActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ReactActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReactActionType setAgent(Property\AgentProperty $agent)
 * @method ReactActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReactActionType setDescription(Property\DescriptionProperty $description)
 * @method ReactActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReactActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ReactActionType setError(Property\ErrorProperty $error)
 * @method ReactActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReactActionType setImage(Property\ImageProperty $image)
 * @method ReactActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ReactActionType setLocation(Property\LocationProperty $location)
 * @method ReactActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReactActionType setName(Property\NameProperty $name)
 * @method ReactActionType setObject(Property\ObjectProperty $object)
 * @method ReactActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ReactActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReactActionType setResult(Property\ResultProperty $result)
 * @method ReactActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReactActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ReactActionType setTarget(Property\TargetProperty $target)
 * @method ReactActionType setUrl(Property\UrlProperty $url)
 */
class ReactActionType extends AssessActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReactAction';
	}
}