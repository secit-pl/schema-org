<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TransferActionType.
 * 
 * @method TransferActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method TransferActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TransferActionType setAgent(Property\AgentProperty $agent)
 * @method TransferActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TransferActionType setDescription(Property\DescriptionProperty $description)
 * @method TransferActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TransferActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method TransferActionType setError(Property\ErrorProperty $error)
 * @method TransferActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TransferActionType setImage(Property\ImageProperty $image)
 * @method TransferActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method TransferActionType setLocation(Property\LocationProperty $location)
 * @method TransferActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TransferActionType setName(Property\NameProperty $name)
 * @method TransferActionType setObject(Property\ObjectProperty $object)
 * @method TransferActionType setParticipant(Property\ParticipantProperty $participant)
 * @method TransferActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TransferActionType setResult(Property\ResultProperty $result)
 * @method TransferActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method TransferActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method TransferActionType setTarget(Property\TargetProperty $target)
 * @method TransferActionType setUrl(Property\UrlProperty $url)
 */
class TransferActionType extends ActionType {

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
		return 'https://schema.org/TransferAction';
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
	 * @return TransferActionType
	 */
	public function setFromLocation(Property\FromLocationProperty $fromLocation) {
		$this->fromLocation = $fromLocation;

		return $this;
	}

	/**
	 * Set to location.
	 * 
	 * @param Property\ToLocationProperty $toLocation
	 * @return TransferActionType
	 */
	public function setToLocation(Property\ToLocationProperty $toLocation) {
		$this->toLocation = $toLocation;

		return $this;
	}
}