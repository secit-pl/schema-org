<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ConsumeAction.
 * 
 * @method ConsumeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ConsumeAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ConsumeAction setAgent(Property\Agent $agent)
 * @method ConsumeAction setAlternateName(Property\AlternateName $alternateName)
 * @method ConsumeAction setDescription(Property\Description $description)
 * @method ConsumeAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ConsumeAction setEndTime(Property\EndTime $endTime)
 * @method ConsumeAction setError(Property\Error $error)
 * @method ConsumeAction setImage(Property\Image $image)
 * @method ConsumeAction setInstrument(Property\Instrument $instrument)
 * @method ConsumeAction setLocation(Property\Location $location)
 * @method ConsumeAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ConsumeAction setName(Property\Name $name)
 * @method ConsumeAction setObject(Property\Object $object)
 * @method ConsumeAction setParticipant(Property\Participant $participant)
 * @method ConsumeAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ConsumeAction setResult(Property\Result $result)
 * @method ConsumeAction setSameAs(Property\SameAs $sameAs)
 * @method ConsumeAction setStartTime(Property\StartTime $startTime)
 * @method ConsumeAction setTarget(Property\Target $target)
 * @method ConsumeAction setUrl(Property\Url $url)
 */
class ConsumeAction extends Action {

	/**
	 * @var Property\ExpectsAcceptanceOf
	 */
	private $expectsAcceptanceOf;

	/**
	 * Get expects acceptance of.
	 * 
	 * @return Property\ExpectsAcceptanceOf
	 */
	public function getExpectsAcceptanceOf() {
		return $this->expectsAcceptanceOf;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ConsumeAction';
	}

	/**
	 * Set expects acceptance of.
	 * 
	 * @param Property\ExpectsAcceptanceOf $expectsAcceptanceOf
	 * @return ConsumeAction
	 */
	public function setExpectsAcceptanceOf(Property\ExpectsAcceptanceOf $expectsAcceptanceOf) {
		$this->expectsAcceptanceOf = $expectsAcceptanceOf;

		return $this;
	}
}