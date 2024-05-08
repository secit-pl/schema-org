<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of starting or activating a device or application (e.g. starting a timer or turning on a flashlight).
 * 
 * @method ActivateActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ActivateActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ActivateActionType setAgent(Property\AgentProperty $agent)
 * @method ActivateActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ActivateActionType setDescription(Property\DescriptionProperty $description)
 * @method ActivateActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ActivateActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ActivateActionType setError(Property\ErrorProperty $error)
 * @method ActivateActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ActivateActionType setImage(Property\ImageProperty $image)
 * @method ActivateActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ActivateActionType setLocation(Property\LocationProperty $location)
 * @method ActivateActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ActivateActionType setName(Property\NameProperty $name)
 * @method ActivateActionType setObject(Property\ObjectProperty $object)
 * @method ActivateActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ActivateActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ActivateActionType setResult(Property\ResultProperty $result)
 * @method ActivateActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ActivateActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ActivateActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ActivateActionType setTarget(Property\TargetProperty $target)
 * @method ActivateActionType setUrl(Property\UrlProperty $url)
 */
class ActivateActionType extends ControlActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ActivateAction';
	}
}