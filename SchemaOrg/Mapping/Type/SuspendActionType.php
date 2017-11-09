<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SuspendActionType.
 * 
 * @method SuspendActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method SuspendActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SuspendActionType setAgent(Property\AgentProperty $agent)
 * @method SuspendActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SuspendActionType setDescription(Property\DescriptionProperty $description)
 * @method SuspendActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SuspendActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method SuspendActionType setError(Property\ErrorProperty $error)
 * @method SuspendActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SuspendActionType setImage(Property\ImageProperty $image)
 * @method SuspendActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method SuspendActionType setLocation(Property\LocationProperty $location)
 * @method SuspendActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SuspendActionType setName(Property\NameProperty $name)
 * @method SuspendActionType setObject(Property\ObjectProperty $object)
 * @method SuspendActionType setParticipant(Property\ParticipantProperty $participant)
 * @method SuspendActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SuspendActionType setResult(Property\ResultProperty $result)
 * @method SuspendActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method SuspendActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method SuspendActionType setTarget(Property\TargetProperty $target)
 * @method SuspendActionType setUrl(Property\UrlProperty $url)
 */
class SuspendActionType extends ControlActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SuspendAction';
	}
}