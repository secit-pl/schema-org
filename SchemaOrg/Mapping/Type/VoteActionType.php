<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VoteActionType.
 * 
 * @method VoteActionType setActionOption(Property\ActionOptionProperty $actionOption)
 * @method VoteActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method VoteActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VoteActionType setAgent(Property\AgentProperty $agent)
 * @method VoteActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VoteActionType setDescription(Property\DescriptionProperty $description)
 * @method VoteActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VoteActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method VoteActionType setError(Property\ErrorProperty $error)
 * @method VoteActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VoteActionType setImage(Property\ImageProperty $image)
 * @method VoteActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method VoteActionType setLocation(Property\LocationProperty $location)
 * @method VoteActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VoteActionType setName(Property\NameProperty $name)
 * @method VoteActionType setObject(Property\ObjectProperty $object)
 * @method VoteActionType setParticipant(Property\ParticipantProperty $participant)
 * @method VoteActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VoteActionType setResult(Property\ResultProperty $result)
 * @method VoteActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method VoteActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method VoteActionType setTarget(Property\TargetProperty $target)
 * @method VoteActionType setUrl(Property\UrlProperty $url)
 */
class VoteActionType extends ChooseActionType {

	/**
	 * @var Property\CandidateProperty
	 */
	private $candidate;

	/**
	 * Get candidate.
	 * 
	 * @return Property\CandidateProperty
	 */
	public function getCandidate() {
		return $this->candidate;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VoteAction';
	}

	/**
	 * Set candidate.
	 * 
	 * @param Property\CandidateProperty $candidate
	 * @return VoteActionType
	 */
	public function setCandidate(Property\CandidateProperty $candidate) {
		$this->candidate = $candidate;

		return $this;
	}
}