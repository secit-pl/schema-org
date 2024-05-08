<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of accomplishing something via previous efforts. It is an instantaneous action rather than an ongoing process.
 * 
 * @method AchieveActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method AchieveActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AchieveActionType setAgent(Property\AgentProperty $agent)
 * @method AchieveActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AchieveActionType setDescription(Property\DescriptionProperty $description)
 * @method AchieveActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AchieveActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method AchieveActionType setError(Property\ErrorProperty $error)
 * @method AchieveActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AchieveActionType setImage(Property\ImageProperty $image)
 * @method AchieveActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method AchieveActionType setLocation(Property\LocationProperty $location)
 * @method AchieveActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AchieveActionType setName(Property\NameProperty $name)
 * @method AchieveActionType setObject(Property\ObjectProperty $object)
 * @method AchieveActionType setParticipant(Property\ParticipantProperty $participant)
 * @method AchieveActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AchieveActionType setResult(Property\ResultProperty $result)
 * @method AchieveActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method AchieveActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method AchieveActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AchieveActionType setTarget(Property\TargetProperty $target)
 * @method AchieveActionType setUrl(Property\UrlProperty $url)
 */
class AchieveActionType extends ActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AchieveAction';
	}
}