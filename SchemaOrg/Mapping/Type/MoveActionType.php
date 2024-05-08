<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of an agent relocating to a place. Related actions: TransferAction: Unlike TransferAction, the subject of the move is a living Person or Organization rather than an inanimate object.
 * 
 * @method MoveActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method MoveActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MoveActionType setAgent(Property\AgentProperty $agent)
 * @method MoveActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MoveActionType setDescription(Property\DescriptionProperty $description)
 * @method MoveActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MoveActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method MoveActionType setError(Property\ErrorProperty $error)
 * @method MoveActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MoveActionType setImage(Property\ImageProperty $image)
 * @method MoveActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method MoveActionType setLocation(Property\LocationProperty $location)
 * @method MoveActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MoveActionType setName(Property\NameProperty $name)
 * @method MoveActionType setObject(Property\ObjectProperty $object)
 * @method MoveActionType setParticipant(Property\ParticipantProperty $participant)
 * @method MoveActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MoveActionType setResult(Property\ResultProperty $result)
 * @method MoveActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method MoveActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method MoveActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MoveActionType setTarget(Property\TargetProperty $target)
 * @method MoveActionType setUrl(Property\UrlProperty $url)
 */
class MoveActionType extends ActionType {

	/**
	 * @var Property\FromLocationProperty
	 */
	private $fromLocation;

	/**
	 * @var Property\ToLocationProperty
	 */
	private $toLocation;

	/**
	 * Get from location.
	 *
	 * @return Property\FromLocationProperty
	 */
	public function getFromLocation() {
		return $this->fromLocation;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MoveAction';
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
	 * Set from location.
	 *
	 * @param Property\FromLocationProperty $fromLocation
	 * @return MoveActionType
	 */
	public function setFromLocation(Property\FromLocationProperty $fromLocation) {
		$this->fromLocation = $fromLocation;

		return $this;
	}

	/**
	 * Set to location.
	 *
	 * @param Property\ToLocationProperty $toLocation
	 * @return MoveActionType
	 */
	public function setToLocation(Property\ToLocationProperty $toLocation) {
		$this->toLocation = $toLocation;

		return $this;
	}
}