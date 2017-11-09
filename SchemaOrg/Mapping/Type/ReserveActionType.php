<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReserveActionType.
 * 
 * @method ReserveActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ReserveActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReserveActionType setAgent(Property\AgentProperty $agent)
 * @method ReserveActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReserveActionType setDescription(Property\DescriptionProperty $description)
 * @method ReserveActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReserveActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ReserveActionType setError(Property\ErrorProperty $error)
 * @method ReserveActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReserveActionType setImage(Property\ImageProperty $image)
 * @method ReserveActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ReserveActionType setLocation(Property\LocationProperty $location)
 * @method ReserveActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReserveActionType setName(Property\NameProperty $name)
 * @method ReserveActionType setObject(Property\ObjectProperty $object)
 * @method ReserveActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ReserveActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReserveActionType setResult(Property\ResultProperty $result)
 * @method ReserveActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReserveActionType setScheduledTime(Property\ScheduledTimeProperty $scheduledTime)
 * @method ReserveActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ReserveActionType setTarget(Property\TargetProperty $target)
 * @method ReserveActionType setUrl(Property\UrlProperty $url)
 */
class ReserveActionType extends PlanActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReserveAction';
	}
}