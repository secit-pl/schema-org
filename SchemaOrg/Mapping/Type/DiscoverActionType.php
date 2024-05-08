<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of discovering/finding an object.
 * 
 * @method DiscoverActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method DiscoverActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DiscoverActionType setAgent(Property\AgentProperty $agent)
 * @method DiscoverActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DiscoverActionType setDescription(Property\DescriptionProperty $description)
 * @method DiscoverActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DiscoverActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method DiscoverActionType setError(Property\ErrorProperty $error)
 * @method DiscoverActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DiscoverActionType setImage(Property\ImageProperty $image)
 * @method DiscoverActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method DiscoverActionType setLocation(Property\LocationProperty $location)
 * @method DiscoverActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DiscoverActionType setName(Property\NameProperty $name)
 * @method DiscoverActionType setObject(Property\ObjectProperty $object)
 * @method DiscoverActionType setParticipant(Property\ParticipantProperty $participant)
 * @method DiscoverActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DiscoverActionType setResult(Property\ResultProperty $result)
 * @method DiscoverActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method DiscoverActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method DiscoverActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DiscoverActionType setTarget(Property\TargetProperty $target)
 * @method DiscoverActionType setUrl(Property\UrlProperty $url)
 */
class DiscoverActionType extends FindActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DiscoverAction';
	}
}