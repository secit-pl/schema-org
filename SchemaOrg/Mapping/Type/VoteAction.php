<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VoteAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\VoteActionType instead.
 * 
 * @method VoteAction setActionOption(Property\ActionOption $actionOption)
 * @method VoteAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method VoteAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method VoteAction setAgent(Property\Agent $agent)
 * @method VoteAction setAlternateName(Property\AlternateName $alternateName)
 * @method VoteAction setDescription(Property\Description $description)
 * @method VoteAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method VoteAction setEndTime(Property\EndTime $endTime)
 * @method VoteAction setError(Property\Error $error)
 * @method VoteAction setIdentifier(Property\Identifier $identifier)
 * @method VoteAction setImage(Property\Image $image)
 * @method VoteAction setInstrument(Property\Instrument $instrument)
 * @method VoteAction setLocation(Property\Location $location)
 * @method VoteAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method VoteAction setName(Property\Name $name)
 * @method VoteAction setObject(Property\Object $object)
 * @method VoteAction setParticipant(Property\Participant $participant)
 * @method VoteAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method VoteAction setResult(Property\Result $result)
 * @method VoteAction setSameAs(Property\SameAs $sameAs)
 * @method VoteAction setStartTime(Property\StartTime $startTime)
 * @method VoteAction setTarget(Property\Target $target)
 * @method VoteAction setUrl(Property\Url $url)
 */
class VoteAction extends ChooseAction {

	/**
	 * @var Property\Candidate
	 */
	private $candidate;

	/**
	 * Get candidate.
	 * 
	 * @return Property\Candidate
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
	 * @param Property\Candidate $candidate
	 * @return VoteAction
	 */
	public function setCandidate(Property\Candidate $candidate) {
		$this->candidate = $candidate;

		return $this;
	}
}