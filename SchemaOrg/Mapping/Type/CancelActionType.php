<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CancelActionType.
 * 
 * @method CancelActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method CancelActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CancelActionType setAgent(Property\AgentProperty $agent)
 * @method CancelActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CancelActionType setDescription(Property\DescriptionProperty $description)
 * @method CancelActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CancelActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method CancelActionType setError(Property\ErrorProperty $error)
 * @method CancelActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CancelActionType setImage(Property\ImageProperty $image)
 * @method CancelActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method CancelActionType setLocation(Property\LocationProperty $location)
 * @method CancelActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CancelActionType setName(Property\NameProperty $name)
 * @method CancelActionType setObject(Property\ObjectProperty $object)
 * @method CancelActionType setParticipant(Property\ParticipantProperty $participant)
 * @method CancelActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CancelActionType setResult(Property\ResultProperty $result)
 * @method CancelActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method CancelActionType setScheduledTime(Property\ScheduledTimeProperty $scheduledTime)
 * @method CancelActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method CancelActionType setTarget(Property\TargetProperty $target)
 * @method CancelActionType setUrl(Property\UrlProperty $url)
 */
class CancelActionType extends PlanActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CancelAction';
	}
}