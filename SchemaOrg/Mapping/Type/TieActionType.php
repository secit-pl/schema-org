<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of reaching a draw in a competitive activity.
 * 
 * @method TieActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method TieActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TieActionType setAgent(Property\AgentProperty $agent)
 * @method TieActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TieActionType setDescription(Property\DescriptionProperty $description)
 * @method TieActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TieActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method TieActionType setError(Property\ErrorProperty $error)
 * @method TieActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TieActionType setImage(Property\ImageProperty $image)
 * @method TieActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method TieActionType setLocation(Property\LocationProperty $location)
 * @method TieActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TieActionType setName(Property\NameProperty $name)
 * @method TieActionType setObject(Property\ObjectProperty $object)
 * @method TieActionType setParticipant(Property\ParticipantProperty $participant)
 * @method TieActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TieActionType setResult(Property\ResultProperty $result)
 * @method TieActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method TieActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method TieActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TieActionType setTarget(Property\TargetProperty $target)
 * @method TieActionType setUrl(Property\UrlProperty $url)
 */
class TieActionType extends AchieveActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TieAction';
	}
}