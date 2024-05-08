<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of consuming audio content.
 * 
 * @method ListenActionType setActionAccessibilityRequirement(Property\ActionAccessibilityRequirementProperty $actionAccessibilityRequirement)
 * @method ListenActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ListenActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ListenActionType setAgent(Property\AgentProperty $agent)
 * @method ListenActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ListenActionType setDescription(Property\DescriptionProperty $description)
 * @method ListenActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ListenActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ListenActionType setError(Property\ErrorProperty $error)
 * @method ListenActionType setExpectsAcceptanceOf(Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf)
 * @method ListenActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ListenActionType setImage(Property\ImageProperty $image)
 * @method ListenActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ListenActionType setLocation(Property\LocationProperty $location)
 * @method ListenActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ListenActionType setName(Property\NameProperty $name)
 * @method ListenActionType setObject(Property\ObjectProperty $object)
 * @method ListenActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ListenActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ListenActionType setResult(Property\ResultProperty $result)
 * @method ListenActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ListenActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ListenActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ListenActionType setTarget(Property\TargetProperty $target)
 * @method ListenActionType setUrl(Property\UrlProperty $url)
 */
class ListenActionType extends ConsumeActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ListenAction';
	}
}