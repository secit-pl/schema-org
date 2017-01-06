<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WinAction.
 * 
 * @method WinAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method WinAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method WinAction setAgent(Property\Agent $agent)
 * @method WinAction setAlternateName(Property\AlternateName $alternateName)
 * @method WinAction setDescription(Property\Description $description)
 * @method WinAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method WinAction setEndTime(Property\EndTime $endTime)
 * @method WinAction setError(Property\Error $error)
 * @method WinAction setImage(Property\Image $image)
 * @method WinAction setInstrument(Property\Instrument $instrument)
 * @method WinAction setLocation(Property\Location $location)
 * @method WinAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method WinAction setName(Property\Name $name)
 * @method WinAction setObject(Property\Object $object)
 * @method WinAction setParticipant(Property\Participant $participant)
 * @method WinAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method WinAction setResult(Property\Result $result)
 * @method WinAction setSameAs(Property\SameAs $sameAs)
 * @method WinAction setStartTime(Property\StartTime $startTime)
 * @method WinAction setTarget(Property\Target $target)
 * @method WinAction setUrl(Property\Url $url)
 */
class WinAction extends AchieveAction {

	/**
	 * @var Property\Loser
	 */
	private $loser;

	/**
	 * Get loser.
	 * 
	 * @return Property\Loser
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
	 * @param Property\Loser $loser
	 * @return WinAction
	 */
	public function setLoser(Property\Loser $loser) {
		$this->loser = $loser;

		return $this;
	}
}