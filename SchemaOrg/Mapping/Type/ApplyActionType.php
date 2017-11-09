<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ApplyActionType.
 * 
 * @method ApplyActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ApplyActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ApplyActionType setAgent(Property\AgentProperty $agent)
 * @method ApplyActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ApplyActionType setDescription(Property\DescriptionProperty $description)
 * @method ApplyActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ApplyActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ApplyActionType setError(Property\ErrorProperty $error)
 * @method ApplyActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ApplyActionType setImage(Property\ImageProperty $image)
 * @method ApplyActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ApplyActionType setLocation(Property\LocationProperty $location)
 * @method ApplyActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ApplyActionType setName(Property\NameProperty $name)
 * @method ApplyActionType setObject(Property\ObjectProperty $object)
 * @method ApplyActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ApplyActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ApplyActionType setResult(Property\ResultProperty $result)
 * @method ApplyActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ApplyActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ApplyActionType setTarget(Property\TargetProperty $target)
 * @method ApplyActionType setUrl(Property\UrlProperty $url)
 */
class ApplyActionType extends OrganizeActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ApplyAction';
	}
}