<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of consuming written content.
 * 
 * @method ReadActionType setActionAccessibilityRequirement(Property\ActionAccessibilityRequirementProperty $actionAccessibilityRequirement)
 * @method ReadActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ReadActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReadActionType setAgent(Property\AgentProperty $agent)
 * @method ReadActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReadActionType setDescription(Property\DescriptionProperty $description)
 * @method ReadActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReadActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ReadActionType setError(Property\ErrorProperty $error)
 * @method ReadActionType setExpectsAcceptanceOf(Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf)
 * @method ReadActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReadActionType setImage(Property\ImageProperty $image)
 * @method ReadActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ReadActionType setLocation(Property\LocationProperty $location)
 * @method ReadActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReadActionType setName(Property\NameProperty $name)
 * @method ReadActionType setObject(Property\ObjectProperty $object)
 * @method ReadActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ReadActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReadActionType setResult(Property\ResultProperty $result)
 * @method ReadActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReadActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ReadActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ReadActionType setTarget(Property\TargetProperty $target)
 * @method ReadActionType setUrl(Property\UrlProperty $url)
 */
class ReadActionType extends ConsumeActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReadAction';
	}
}