<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of inserting at the beginning if an ordered collection.
 * 
 * @method PrependActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method PrependActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PrependActionType setAgent(Property\AgentProperty $agent)
 * @method PrependActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PrependActionType setDescription(Property\DescriptionProperty $description)
 * @method PrependActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PrependActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method PrependActionType setError(Property\ErrorProperty $error)
 * @method PrependActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PrependActionType setImage(Property\ImageProperty $image)
 * @method PrependActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method PrependActionType setLocation(Property\LocationProperty $location)
 * @method PrependActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PrependActionType setName(Property\NameProperty $name)
 * @method PrependActionType setObject(Property\ObjectProperty $object)
 * @method PrependActionType setParticipant(Property\ParticipantProperty $participant)
 * @method PrependActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PrependActionType setResult(Property\ResultProperty $result)
 * @method PrependActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method PrependActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method PrependActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PrependActionType setTarget(Property\TargetProperty $target)
 * @method PrependActionType setTargetCollection(Property\TargetCollectionProperty $targetCollection)
 * @method PrependActionType setToLocation(Property\ToLocationProperty $toLocation)
 * @method PrependActionType setUrl(Property\UrlProperty $url)
 */
class PrependActionType extends InsertActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PrependAction';
	}
}