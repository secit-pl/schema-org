<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class UpdateActionType.
 * 
 * @method UpdateActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method UpdateActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UpdateActionType setAgent(Property\AgentProperty $agent)
 * @method UpdateActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UpdateActionType setDescription(Property\DescriptionProperty $description)
 * @method UpdateActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UpdateActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method UpdateActionType setError(Property\ErrorProperty $error)
 * @method UpdateActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UpdateActionType setImage(Property\ImageProperty $image)
 * @method UpdateActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method UpdateActionType setLocation(Property\LocationProperty $location)
 * @method UpdateActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UpdateActionType setName(Property\NameProperty $name)
 * @method UpdateActionType setObject(Property\ObjectProperty $object)
 * @method UpdateActionType setParticipant(Property\ParticipantProperty $participant)
 * @method UpdateActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UpdateActionType setResult(Property\ResultProperty $result)
 * @method UpdateActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method UpdateActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method UpdateActionType setTarget(Property\TargetProperty $target)
 * @method UpdateActionType setUrl(Property\UrlProperty $url)
 */
class UpdateActionType extends ActionType {

	/**
	 * @var Property\TargetCollectionProperty
	 */
	private $targetCollection;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UpdateAction';
	}

	/**
	 * Get target collection.
	 * 
	 * @return Property\TargetCollectionProperty
	 */
	public function getTargetCollection() {
		return $this->targetCollection;
	}

	/**
	 * Set target collection.
	 * 
	 * @param Property\TargetCollectionProperty $targetCollection
	 * @return UpdateActionType
	 */
	public function setTargetCollection(Property\TargetCollectionProperty $targetCollection) {
		$this->targetCollection = $targetCollection;

		return $this;
	}
}