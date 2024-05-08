<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of dressing oneself in clothing.
 * 
 * @method WearActionType setActionAccessibilityRequirement(Property\ActionAccessibilityRequirementProperty $actionAccessibilityRequirement)
 * @method WearActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method WearActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WearActionType setAgent(Property\AgentProperty $agent)
 * @method WearActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WearActionType setDescription(Property\DescriptionProperty $description)
 * @method WearActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WearActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method WearActionType setError(Property\ErrorProperty $error)
 * @method WearActionType setExpectsAcceptanceOf(Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf)
 * @method WearActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WearActionType setImage(Property\ImageProperty $image)
 * @method WearActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method WearActionType setLocation(Property\LocationProperty $location)
 * @method WearActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WearActionType setName(Property\NameProperty $name)
 * @method WearActionType setObject(Property\ObjectProperty $object)
 * @method WearActionType setParticipant(Property\ParticipantProperty $participant)
 * @method WearActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WearActionType setResult(Property\ResultProperty $result)
 * @method WearActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method WearActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method WearActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method WearActionType setTarget(Property\TargetProperty $target)
 * @method WearActionType setUrl(Property\UrlProperty $url)
 */
class WearActionType extends UseActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WearAction';
	}
}