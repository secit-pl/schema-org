<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of consuming static visual content.
 * 
 * @method ViewActionType setActionAccessibilityRequirement(Property\ActionAccessibilityRequirementProperty $actionAccessibilityRequirement)
 * @method ViewActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ViewActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ViewActionType setAgent(Property\AgentProperty $agent)
 * @method ViewActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ViewActionType setDescription(Property\DescriptionProperty $description)
 * @method ViewActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ViewActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ViewActionType setError(Property\ErrorProperty $error)
 * @method ViewActionType setExpectsAcceptanceOf(Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf)
 * @method ViewActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ViewActionType setImage(Property\ImageProperty $image)
 * @method ViewActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ViewActionType setLocation(Property\LocationProperty $location)
 * @method ViewActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ViewActionType setName(Property\NameProperty $name)
 * @method ViewActionType setObject(Property\ObjectProperty $object)
 * @method ViewActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ViewActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ViewActionType setResult(Property\ResultProperty $result)
 * @method ViewActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ViewActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ViewActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ViewActionType setTarget(Property\TargetProperty $target)
 * @method ViewActionType setUrl(Property\UrlProperty $url)
 */
class ViewActionType extends ConsumeActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ViewAction';
	}
}