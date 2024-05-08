<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of expressing a positive sentiment about the object. An agent likes an object (a proposition, topic or theme) with participants.
 * 
 * @method LikeActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method LikeActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LikeActionType setAgent(Property\AgentProperty $agent)
 * @method LikeActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LikeActionType setDescription(Property\DescriptionProperty $description)
 * @method LikeActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LikeActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method LikeActionType setError(Property\ErrorProperty $error)
 * @method LikeActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LikeActionType setImage(Property\ImageProperty $image)
 * @method LikeActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method LikeActionType setLocation(Property\LocationProperty $location)
 * @method LikeActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LikeActionType setName(Property\NameProperty $name)
 * @method LikeActionType setObject(Property\ObjectProperty $object)
 * @method LikeActionType setParticipant(Property\ParticipantProperty $participant)
 * @method LikeActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LikeActionType setResult(Property\ResultProperty $result)
 * @method LikeActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method LikeActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method LikeActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LikeActionType setTarget(Property\TargetProperty $target)
 * @method LikeActionType setUrl(Property\UrlProperty $url)
 */
class LikeActionType extends ReactActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LikeAction';
	}
}