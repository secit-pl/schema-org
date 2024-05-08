<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of editing by adding an object to a collection.
 * 
 * @method AddActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method AddActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AddActionType setAgent(Property\AgentProperty $agent)
 * @method AddActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AddActionType setDescription(Property\DescriptionProperty $description)
 * @method AddActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AddActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method AddActionType setError(Property\ErrorProperty $error)
 * @method AddActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AddActionType setImage(Property\ImageProperty $image)
 * @method AddActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method AddActionType setLocation(Property\LocationProperty $location)
 * @method AddActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AddActionType setName(Property\NameProperty $name)
 * @method AddActionType setObject(Property\ObjectProperty $object)
 * @method AddActionType setParticipant(Property\ParticipantProperty $participant)
 * @method AddActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AddActionType setResult(Property\ResultProperty $result)
 * @method AddActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method AddActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method AddActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AddActionType setTarget(Property\TargetProperty $target)
 * @method AddActionType setTargetCollection(Property\TargetCollectionProperty $targetCollection)
 * @method AddActionType setUrl(Property\UrlProperty $url)
 */
class AddActionType extends UpdateActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AddAction';
	}
}