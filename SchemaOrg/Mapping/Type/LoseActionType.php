<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of being defeated in a competitive activity.
 * 
 * @method LoseActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method LoseActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LoseActionType setAgent(Property\AgentProperty $agent)
 * @method LoseActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LoseActionType setDescription(Property\DescriptionProperty $description)
 * @method LoseActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LoseActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method LoseActionType setError(Property\ErrorProperty $error)
 * @method LoseActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LoseActionType setImage(Property\ImageProperty $image)
 * @method LoseActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method LoseActionType setLocation(Property\LocationProperty $location)
 * @method LoseActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LoseActionType setName(Property\NameProperty $name)
 * @method LoseActionType setObject(Property\ObjectProperty $object)
 * @method LoseActionType setParticipant(Property\ParticipantProperty $participant)
 * @method LoseActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LoseActionType setResult(Property\ResultProperty $result)
 * @method LoseActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method LoseActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method LoseActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LoseActionType setTarget(Property\TargetProperty $target)
 * @method LoseActionType setUrl(Property\UrlProperty $url)
 */
class LoseActionType extends AchieveActionType {

	/**
	 * @var Property\WinnerProperty
	 */
	private $winner;

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LoseAction';
	}

	/**
	 * Get winner.
	 *
	 * @return Property\WinnerProperty
	 */
	public function getWinner() {
		return $this->winner;
	}

	/**
	 * Set winner.
	 *
	 * @param Property\WinnerProperty $winner
	 * @return LoseActionType
	 */
	public function setWinner(Property\WinnerProperty $winner) {
		$this->winner = $winner;

		return $this;
	}
}