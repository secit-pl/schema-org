<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WinActionType.
 * 
 * @method WinActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method WinActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WinActionType setAgent(Property\AgentProperty $agent)
 * @method WinActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WinActionType setDescription(Property\DescriptionProperty $description)
 * @method WinActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WinActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method WinActionType setError(Property\ErrorProperty $error)
 * @method WinActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WinActionType setImage(Property\ImageProperty $image)
 * @method WinActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method WinActionType setLocation(Property\LocationProperty $location)
 * @method WinActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WinActionType setName(Property\NameProperty $name)
 * @method WinActionType setObject(Property\ObjectProperty $object)
 * @method WinActionType setParticipant(Property\ParticipantProperty $participant)
 * @method WinActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WinActionType setResult(Property\ResultProperty $result)
 * @method WinActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method WinActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method WinActionType setTarget(Property\TargetProperty $target)
 * @method WinActionType setUrl(Property\UrlProperty $url)
 */
class WinActionType extends AchieveActionType {

	/**
	 * @var Property\LoserProperty
	 */
	private $loser;

	/**
	 * Get loser.
	 * 
	 * @return Property\LoserProperty
	 */
	public function getLoser() {
		return $this->loser;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WinAction';
	}

	/**
	 * Set loser.
	 * 
	 * @param Property\LoserProperty $loser
	 * @return WinActionType
	 */
	public function setLoser(Property\LoserProperty $loser) {
		$this->loser = $loser;

		return $this;
	}
}