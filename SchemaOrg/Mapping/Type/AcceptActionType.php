<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AcceptActionType.
 * 
 * @method AcceptActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method AcceptActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AcceptActionType setAgent(Property\AgentProperty $agent)
 * @method AcceptActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AcceptActionType setDescription(Property\DescriptionProperty $description)
 * @method AcceptActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AcceptActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method AcceptActionType setError(Property\ErrorProperty $error)
 * @method AcceptActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AcceptActionType setImage(Property\ImageProperty $image)
 * @method AcceptActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method AcceptActionType setLocation(Property\LocationProperty $location)
 * @method AcceptActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AcceptActionType setName(Property\NameProperty $name)
 * @method AcceptActionType setObject(Property\ObjectProperty $object)
 * @method AcceptActionType setParticipant(Property\ParticipantProperty $participant)
 * @method AcceptActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AcceptActionType setResult(Property\ResultProperty $result)
 * @method AcceptActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method AcceptActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method AcceptActionType setTarget(Property\TargetProperty $target)
 * @method AcceptActionType setUrl(Property\UrlProperty $url)
 */
class AcceptActionType extends AllocateActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AcceptAction';
	}
}