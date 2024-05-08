<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of applying an object to its intended purpose.
 * 
 * @method UseActionType setActionAccessibilityRequirement(Property\ActionAccessibilityRequirementProperty $actionAccessibilityRequirement)
 * @method UseActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method UseActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UseActionType setAgent(Property\AgentProperty $agent)
 * @method UseActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UseActionType setDescription(Property\DescriptionProperty $description)
 * @method UseActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UseActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method UseActionType setError(Property\ErrorProperty $error)
 * @method UseActionType setExpectsAcceptanceOf(Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf)
 * @method UseActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UseActionType setImage(Property\ImageProperty $image)
 * @method UseActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method UseActionType setLocation(Property\LocationProperty $location)
 * @method UseActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UseActionType setName(Property\NameProperty $name)
 * @method UseActionType setObject(Property\ObjectProperty $object)
 * @method UseActionType setParticipant(Property\ParticipantProperty $participant)
 * @method UseActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UseActionType setResult(Property\ResultProperty $result)
 * @method UseActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method UseActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method UseActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UseActionType setTarget(Property\TargetProperty $target)
 * @method UseActionType setUrl(Property\UrlProperty $url)
 */
class UseActionType extends ConsumeActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UseAction';
	}
}