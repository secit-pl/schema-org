<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An agent controls a device or application.
 * 
 * @method ControlActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ControlActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ControlActionType setAgent(Property\AgentProperty $agent)
 * @method ControlActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ControlActionType setDescription(Property\DescriptionProperty $description)
 * @method ControlActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ControlActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ControlActionType setError(Property\ErrorProperty $error)
 * @method ControlActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ControlActionType setImage(Property\ImageProperty $image)
 * @method ControlActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ControlActionType setLocation(Property\LocationProperty $location)
 * @method ControlActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ControlActionType setName(Property\NameProperty $name)
 * @method ControlActionType setObject(Property\ObjectProperty $object)
 * @method ControlActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ControlActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ControlActionType setResult(Property\ResultProperty $result)
 * @method ControlActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ControlActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ControlActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ControlActionType setTarget(Property\TargetProperty $target)
 * @method ControlActionType setUrl(Property\UrlProperty $url)
 */
class ControlActionType extends ActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ControlAction';
	}
}