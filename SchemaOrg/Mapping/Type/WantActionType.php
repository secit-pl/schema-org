<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WantActionType.
 * 
 * @method WantActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method WantActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WantActionType setAgent(Property\AgentProperty $agent)
 * @method WantActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WantActionType setDescription(Property\DescriptionProperty $description)
 * @method WantActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WantActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method WantActionType setError(Property\ErrorProperty $error)
 * @method WantActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WantActionType setImage(Property\ImageProperty $image)
 * @method WantActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method WantActionType setLocation(Property\LocationProperty $location)
 * @method WantActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WantActionType setName(Property\NameProperty $name)
 * @method WantActionType setObject(Property\ObjectProperty $object)
 * @method WantActionType setParticipant(Property\ParticipantProperty $participant)
 * @method WantActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WantActionType setResult(Property\ResultProperty $result)
 * @method WantActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method WantActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method WantActionType setTarget(Property\TargetProperty $target)
 * @method WantActionType setUrl(Property\UrlProperty $url)
 */
class WantActionType extends ReactActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WantAction';
	}
}