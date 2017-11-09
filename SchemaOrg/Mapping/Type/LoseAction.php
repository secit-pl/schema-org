<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LoseAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LoseActionType instead.
 * 
 * @method LoseAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method LoseAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method LoseAction setAgent(Property\Agent $agent)
 * @method LoseAction setAlternateName(Property\AlternateName $alternateName)
 * @method LoseAction setDescription(Property\Description $description)
 * @method LoseAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LoseAction setEndTime(Property\EndTime $endTime)
 * @method LoseAction setError(Property\Error $error)
 * @method LoseAction setIdentifier(Property\Identifier $identifier)
 * @method LoseAction setImage(Property\Image $image)
 * @method LoseAction setInstrument(Property\Instrument $instrument)
 * @method LoseAction setLocation(Property\Location $location)
 * @method LoseAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LoseAction setName(Property\Name $name)
 * @method LoseAction setObject(Property\Object $object)
 * @method LoseAction setParticipant(Property\Participant $participant)
 * @method LoseAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LoseAction setResult(Property\Result $result)
 * @method LoseAction setSameAs(Property\SameAs $sameAs)
 * @method LoseAction setStartTime(Property\StartTime $startTime)
 * @method LoseAction setTarget(Property\Target $target)
 * @method LoseAction setUrl(Property\Url $url)
 */
class LoseAction extends AchieveAction {

	/**
	 * @var Property\Winner
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
	 * @return Property\Winner
	 */
	public function getWinner() {
		return $this->winner;
	}

	/**
	 * Set winner.
	 * 
	 * @param Property\Winner $winner
	 * @return LoseAction
	 */
	public function setWinner(Property\Winner $winner) {
		$this->winner = $winner;

		return $this;
	}
}