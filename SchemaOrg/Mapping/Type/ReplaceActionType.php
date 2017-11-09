<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReplaceActionType.
 * 
 * @method ReplaceActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ReplaceActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReplaceActionType setAgent(Property\AgentProperty $agent)
 * @method ReplaceActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReplaceActionType setDescription(Property\DescriptionProperty $description)
 * @method ReplaceActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReplaceActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ReplaceActionType setError(Property\ErrorProperty $error)
 * @method ReplaceActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReplaceActionType setImage(Property\ImageProperty $image)
 * @method ReplaceActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ReplaceActionType setLocation(Property\LocationProperty $location)
 * @method ReplaceActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReplaceActionType setName(Property\NameProperty $name)
 * @method ReplaceActionType setObject(Property\ObjectProperty $object)
 * @method ReplaceActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ReplaceActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReplaceActionType setResult(Property\ResultProperty $result)
 * @method ReplaceActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReplaceActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ReplaceActionType setTarget(Property\TargetProperty $target)
 * @method ReplaceActionType setTargetCollection(Property\TargetCollectionProperty $targetCollection)
 * @method ReplaceActionType setUrl(Property\UrlProperty $url)
 */
class ReplaceActionType extends UpdateActionType {

	/**
	 * @var Property\ReplaceeProperty
	 */
	private $replacee;

	/**
	 * @var Property\ReplacerProperty
	 */
	private $replacer;

	/**
	 * Get replacee.
	 * 
	 * @return Property\ReplaceeProperty
	 */
	public function getReplacee() {
		return $this->replacee;
	}

	/**
	 * Get replacer.
	 * 
	 * @return Property\ReplacerProperty
	 */
	public function getReplacer() {
		return $this->replacer;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReplaceAction';
	}

	/**
	 * Set replacee.
	 * 
	 * @param Property\ReplaceeProperty $replacee
	 * @return ReplaceActionType
	 */
	public function setReplacee(Property\ReplaceeProperty $replacee) {
		$this->replacee = $replacee;

		return $this;
	}

	/**
	 * Set replacer.
	 * 
	 * @param Property\ReplacerProperty $replacer
	 * @return ReplaceActionType
	 */
	public function setReplacer(Property\ReplacerProperty $replacer) {
		$this->replacer = $replacer;

		return $this;
	}
}