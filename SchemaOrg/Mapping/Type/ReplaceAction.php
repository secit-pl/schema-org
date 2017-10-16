<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReplaceAction.
 * 
 * @method ReplaceAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ReplaceAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReplaceAction setAgent(Property\Agent $agent)
 * @method ReplaceAction setAlternateName(Property\AlternateName $alternateName)
 * @method ReplaceAction setDescription(Property\Description $description)
 * @method ReplaceAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ReplaceAction setEndTime(Property\EndTime $endTime)
 * @method ReplaceAction setError(Property\Error $error)
 * @method ReplaceAction setIdentifier(Property\Identifier $identifier)
 * @method ReplaceAction setImage(Property\Image $image)
 * @method ReplaceAction setInstrument(Property\Instrument $instrument)
 * @method ReplaceAction setLocation(Property\Location $location)
 * @method ReplaceAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ReplaceAction setName(Property\Name $name)
 * @method ReplaceAction setObject(Property\Object $object)
 * @method ReplaceAction setParticipant(Property\Participant $participant)
 * @method ReplaceAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ReplaceAction setResult(Property\Result $result)
 * @method ReplaceAction setSameAs(Property\SameAs $sameAs)
 * @method ReplaceAction setStartTime(Property\StartTime $startTime)
 * @method ReplaceAction setTarget(Property\Target $target)
 * @method ReplaceAction setTargetCollection(Property\TargetCollection $targetCollection)
 * @method ReplaceAction setUrl(Property\Url $url)
 */
class ReplaceAction extends UpdateAction {

	/**
	 * @var Property\Replacee
	 */
	private $replacee;

	/**
	 * @var Property\Replacer
	 */
	private $replacer;

	/**
	 * Get replacee.
	 * 
	 * @return Property\Replacee
	 */
	public function getReplacee() {
		return $this->replacee;
	}

	/**
	 * Get replacer.
	 * 
	 * @return Property\Replacer
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
	 * @param Property\Replacee $replacee
	 * @return ReplaceAction
	 */
	public function setReplacee(Property\Replacee $replacee) {
		$this->replacee = $replacee;

		return $this;
	}

	/**
	 * Set replacer.
	 * 
	 * @param Property\Replacer $replacer
	 * @return ReplaceAction
	 */
	public function setReplacer(Property\Replacer $replacer) {
		$this->replacer = $replacer;

		return $this;
	}
}