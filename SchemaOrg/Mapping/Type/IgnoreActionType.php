<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class IgnoreActionType.
 * 
 * @method IgnoreActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method IgnoreActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method IgnoreActionType setAgent(Property\AgentProperty $agent)
 * @method IgnoreActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method IgnoreActionType setDescription(Property\DescriptionProperty $description)
 * @method IgnoreActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method IgnoreActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method IgnoreActionType setError(Property\ErrorProperty $error)
 * @method IgnoreActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method IgnoreActionType setImage(Property\ImageProperty $image)
 * @method IgnoreActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method IgnoreActionType setLocation(Property\LocationProperty $location)
 * @method IgnoreActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method IgnoreActionType setName(Property\NameProperty $name)
 * @method IgnoreActionType setObject(Property\ObjectProperty $object)
 * @method IgnoreActionType setParticipant(Property\ParticipantProperty $participant)
 * @method IgnoreActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method IgnoreActionType setResult(Property\ResultProperty $result)
 * @method IgnoreActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method IgnoreActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method IgnoreActionType setTarget(Property\TargetProperty $target)
 * @method IgnoreActionType setUrl(Property\UrlProperty $url)
 */
class IgnoreActionType extends AssessActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/IgnoreAction';
	}
}