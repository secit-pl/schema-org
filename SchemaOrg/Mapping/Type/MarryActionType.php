<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MarryActionType.
 * 
 * @method MarryActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method MarryActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MarryActionType setAgent(Property\AgentProperty $agent)
 * @method MarryActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MarryActionType setDescription(Property\DescriptionProperty $description)
 * @method MarryActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MarryActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method MarryActionType setError(Property\ErrorProperty $error)
 * @method MarryActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MarryActionType setImage(Property\ImageProperty $image)
 * @method MarryActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method MarryActionType setLocation(Property\LocationProperty $location)
 * @method MarryActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MarryActionType setName(Property\NameProperty $name)
 * @method MarryActionType setObject(Property\ObjectProperty $object)
 * @method MarryActionType setParticipant(Property\ParticipantProperty $participant)
 * @method MarryActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MarryActionType setResult(Property\ResultProperty $result)
 * @method MarryActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method MarryActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method MarryActionType setTarget(Property\TargetProperty $target)
 * @method MarryActionType setUrl(Property\UrlProperty $url)
 */
class MarryActionType extends InteractActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MarryAction';
	}
}