<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WriteAction.
 * 
 * @method WriteAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method WriteAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method WriteAction setAgent(Property\Agent $agent)
 * @method WriteAction setAlternateName(Property\AlternateName $alternateName)
 * @method WriteAction setDescription(Property\Description $description)
 * @method WriteAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method WriteAction setEndTime(Property\EndTime $endTime)
 * @method WriteAction setError(Property\Error $error)
 * @method WriteAction setImage(Property\Image $image)
 * @method WriteAction setInstrument(Property\Instrument $instrument)
 * @method WriteAction setLocation(Property\Location $location)
 * @method WriteAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method WriteAction setName(Property\Name $name)
 * @method WriteAction setObject(Property\Object $object)
 * @method WriteAction setParticipant(Property\Participant $participant)
 * @method WriteAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method WriteAction setResult(Property\Result $result)
 * @method WriteAction setSameAs(Property\SameAs $sameAs)
 * @method WriteAction setStartTime(Property\StartTime $startTime)
 * @method WriteAction setTarget(Property\Target $target)
 * @method WriteAction setUrl(Property\Url $url)
 */
class WriteAction extends CreateAction {

	/**
	 * @var Property\InLanguage
	 */
	private $inLanguage;

	/**
	 * Get in language.
	 * 
	 * @return Property\InLanguage
	 */
	public function getInLanguage() {
		return $this->inLanguage;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WriteAction';
	}

	/**
	 * Set in language.
	 * 
	 * @param Property\InLanguage $inLanguage
	 * @return WriteAction
	 */
	public function setInLanguage(Property\InLanguage $inLanguage) {
		$this->inLanguage = $inLanguage;

		return $this;
	}
}