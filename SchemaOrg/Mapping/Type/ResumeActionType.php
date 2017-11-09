<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ResumeActionType.
 * 
 * @method ResumeActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ResumeActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ResumeActionType setAgent(Property\AgentProperty $agent)
 * @method ResumeActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ResumeActionType setDescription(Property\DescriptionProperty $description)
 * @method ResumeActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ResumeActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ResumeActionType setError(Property\ErrorProperty $error)
 * @method ResumeActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ResumeActionType setImage(Property\ImageProperty $image)
 * @method ResumeActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ResumeActionType setLocation(Property\LocationProperty $location)
 * @method ResumeActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ResumeActionType setName(Property\NameProperty $name)
 * @method ResumeActionType setObject(Property\ObjectProperty $object)
 * @method ResumeActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ResumeActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ResumeActionType setResult(Property\ResultProperty $result)
 * @method ResumeActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ResumeActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ResumeActionType setTarget(Property\TargetProperty $target)
 * @method ResumeActionType setUrl(Property\UrlProperty $url)
 */
class ResumeActionType extends ControlActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ResumeAction';
	}
}