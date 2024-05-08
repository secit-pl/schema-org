<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of manipulating/administering/supervising/controlling one or more objects.
 * 
 * @method OrganizeActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method OrganizeActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrganizeActionType setAgent(Property\AgentProperty $agent)
 * @method OrganizeActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrganizeActionType setDescription(Property\DescriptionProperty $description)
 * @method OrganizeActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrganizeActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method OrganizeActionType setError(Property\ErrorProperty $error)
 * @method OrganizeActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrganizeActionType setImage(Property\ImageProperty $image)
 * @method OrganizeActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method OrganizeActionType setLocation(Property\LocationProperty $location)
 * @method OrganizeActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrganizeActionType setName(Property\NameProperty $name)
 * @method OrganizeActionType setObject(Property\ObjectProperty $object)
 * @method OrganizeActionType setParticipant(Property\ParticipantProperty $participant)
 * @method OrganizeActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrganizeActionType setResult(Property\ResultProperty $result)
 * @method OrganizeActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrganizeActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method OrganizeActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OrganizeActionType setTarget(Property\TargetProperty $target)
 * @method OrganizeActionType setUrl(Property\UrlProperty $url)
 */
class OrganizeActionType extends ActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrganizeAction';
	}
}