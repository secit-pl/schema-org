<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of adding at a specific location in an ordered collection.
 * 
 * @method InsertActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method InsertActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InsertActionType setAgent(Property\AgentProperty $agent)
 * @method InsertActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InsertActionType setDescription(Property\DescriptionProperty $description)
 * @method InsertActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InsertActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method InsertActionType setError(Property\ErrorProperty $error)
 * @method InsertActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InsertActionType setImage(Property\ImageProperty $image)
 * @method InsertActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method InsertActionType setLocation(Property\LocationProperty $location)
 * @method InsertActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InsertActionType setName(Property\NameProperty $name)
 * @method InsertActionType setObject(Property\ObjectProperty $object)
 * @method InsertActionType setParticipant(Property\ParticipantProperty $participant)
 * @method InsertActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InsertActionType setResult(Property\ResultProperty $result)
 * @method InsertActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method InsertActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method InsertActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method InsertActionType setTarget(Property\TargetProperty $target)
 * @method InsertActionType setTargetCollection(Property\TargetCollectionProperty $targetCollection)
 * @method InsertActionType setUrl(Property\UrlProperty $url)
 */
class InsertActionType extends AddActionType {

	/**
	 * @var Property\ToLocationProperty
	 */
	private $toLocation;

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InsertAction';
	}

	/**
	 * Get to location.
	 *
	 * @return Property\ToLocationProperty
	 */
	public function getToLocation() {
		return $this->toLocation;
	}

	/**
	 * Set to location.
	 *
	 * @param Property\ToLocationProperty $toLocation
	 * @return InsertActionType
	 */
	public function setToLocation(Property\ToLocationProperty $toLocation) {
		$this->toLocation = $toLocation;

		return $this;
	}
}