<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DisagreeActionType.
 * 
 * @method DisagreeActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method DisagreeActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DisagreeActionType setAgent(Property\AgentProperty $agent)
 * @method DisagreeActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DisagreeActionType setDescription(Property\DescriptionProperty $description)
 * @method DisagreeActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DisagreeActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method DisagreeActionType setError(Property\ErrorProperty $error)
 * @method DisagreeActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DisagreeActionType setImage(Property\ImageProperty $image)
 * @method DisagreeActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method DisagreeActionType setLocation(Property\LocationProperty $location)
 * @method DisagreeActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DisagreeActionType setName(Property\NameProperty $name)
 * @method DisagreeActionType setObject(Property\ObjectProperty $object)
 * @method DisagreeActionType setParticipant(Property\ParticipantProperty $participant)
 * @method DisagreeActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DisagreeActionType setResult(Property\ResultProperty $result)
 * @method DisagreeActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method DisagreeActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method DisagreeActionType setTarget(Property\TargetProperty $target)
 * @method DisagreeActionType setUrl(Property\UrlProperty $url)
 */
class DisagreeActionType extends ReactActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DisagreeAction';
	}
}