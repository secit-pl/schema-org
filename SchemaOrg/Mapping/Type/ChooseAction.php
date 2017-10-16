<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ChooseAction.
 * 
 * @method ChooseAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ChooseAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ChooseAction setAgent(Property\Agent $agent)
 * @method ChooseAction setAlternateName(Property\AlternateName $alternateName)
 * @method ChooseAction setDescription(Property\Description $description)
 * @method ChooseAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ChooseAction setEndTime(Property\EndTime $endTime)
 * @method ChooseAction setError(Property\Error $error)
 * @method ChooseAction setIdentifier(Property\Identifier $identifier)
 * @method ChooseAction setImage(Property\Image $image)
 * @method ChooseAction setInstrument(Property\Instrument $instrument)
 * @method ChooseAction setLocation(Property\Location $location)
 * @method ChooseAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ChooseAction setName(Property\Name $name)
 * @method ChooseAction setObject(Property\Object $object)
 * @method ChooseAction setParticipant(Property\Participant $participant)
 * @method ChooseAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ChooseAction setResult(Property\Result $result)
 * @method ChooseAction setSameAs(Property\SameAs $sameAs)
 * @method ChooseAction setStartTime(Property\StartTime $startTime)
 * @method ChooseAction setTarget(Property\Target $target)
 * @method ChooseAction setUrl(Property\Url $url)
 */
class ChooseAction extends AssessAction {

	/**
	 * @var Property\ActionOption
	 */
	private $actionOption;

	/**
	 * Get action option.
	 * 
	 * @return Property\ActionOption
	 */
	public function getActionOption() {
		return $this->actionOption;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ChooseAction';
	}

	/**
	 * Set action option.
	 * 
	 * @param Property\ActionOption $actionOption
	 * @return ChooseAction
	 */
	public function setActionOption(Property\ActionOption $actionOption) {
		$this->actionOption = $actionOption;

		return $this;
	}
}