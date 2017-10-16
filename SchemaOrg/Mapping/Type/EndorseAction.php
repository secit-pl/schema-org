<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EndorseAction.
 * 
 * @method EndorseAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method EndorseAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method EndorseAction setAgent(Property\Agent $agent)
 * @method EndorseAction setAlternateName(Property\AlternateName $alternateName)
 * @method EndorseAction setDescription(Property\Description $description)
 * @method EndorseAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EndorseAction setEndTime(Property\EndTime $endTime)
 * @method EndorseAction setError(Property\Error $error)
 * @method EndorseAction setIdentifier(Property\Identifier $identifier)
 * @method EndorseAction setImage(Property\Image $image)
 * @method EndorseAction setInstrument(Property\Instrument $instrument)
 * @method EndorseAction setLocation(Property\Location $location)
 * @method EndorseAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EndorseAction setName(Property\Name $name)
 * @method EndorseAction setObject(Property\Object $object)
 * @method EndorseAction setParticipant(Property\Participant $participant)
 * @method EndorseAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EndorseAction setResult(Property\Result $result)
 * @method EndorseAction setSameAs(Property\SameAs $sameAs)
 * @method EndorseAction setStartTime(Property\StartTime $startTime)
 * @method EndorseAction setTarget(Property\Target $target)
 * @method EndorseAction setUrl(Property\Url $url)
 */
class EndorseAction extends ReactAction {

	/**
	 * @var Property\Endorsee
	 */
	private $endorsee;

	/**
	 * Get endorsee.
	 * 
	 * @return Property\Endorsee
	 */
	public function getEndorsee() {
		return $this->endorsee;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EndorseAction';
	}

	/**
	 * Set endorsee.
	 * 
	 * @param Property\Endorsee $endorsee
	 * @return EndorseAction
	 */
	public function setEndorsee(Property\Endorsee $endorsee) {
		$this->endorsee = $endorsee;

		return $this;
	}
}