<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ArriveActionType.
 * 
 * @method ArriveActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ArriveActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ArriveActionType setAgent(Property\AgentProperty $agent)
 * @method ArriveActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ArriveActionType setDescription(Property\DescriptionProperty $description)
 * @method ArriveActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ArriveActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ArriveActionType setError(Property\ErrorProperty $error)
 * @method ArriveActionType setFromLocation(Property\FromLocationProperty $fromLocation)
 * @method ArriveActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ArriveActionType setImage(Property\ImageProperty $image)
 * @method ArriveActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ArriveActionType setLocation(Property\LocationProperty $location)
 * @method ArriveActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ArriveActionType setName(Property\NameProperty $name)
 * @method ArriveActionType setObject(Property\ObjectProperty $object)
 * @method ArriveActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ArriveActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ArriveActionType setResult(Property\ResultProperty $result)
 * @method ArriveActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ArriveActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ArriveActionType setTarget(Property\TargetProperty $target)
 * @method ArriveActionType setToLocation(Property\ToLocationProperty $toLocation)
 * @method ArriveActionType setUrl(Property\UrlProperty $url)
 */
class ArriveActionType extends MoveActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ArriveAction';
	}
}