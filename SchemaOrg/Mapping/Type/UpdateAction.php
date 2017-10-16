<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class UpdateAction.
 * 
 * @method UpdateAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method UpdateAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method UpdateAction setAgent(Property\Agent $agent)
 * @method UpdateAction setAlternateName(Property\AlternateName $alternateName)
 * @method UpdateAction setDescription(Property\Description $description)
 * @method UpdateAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method UpdateAction setEndTime(Property\EndTime $endTime)
 * @method UpdateAction setError(Property\Error $error)
 * @method UpdateAction setIdentifier(Property\Identifier $identifier)
 * @method UpdateAction setImage(Property\Image $image)
 * @method UpdateAction setInstrument(Property\Instrument $instrument)
 * @method UpdateAction setLocation(Property\Location $location)
 * @method UpdateAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method UpdateAction setName(Property\Name $name)
 * @method UpdateAction setObject(Property\Object $object)
 * @method UpdateAction setParticipant(Property\Participant $participant)
 * @method UpdateAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method UpdateAction setResult(Property\Result $result)
 * @method UpdateAction setSameAs(Property\SameAs $sameAs)
 * @method UpdateAction setStartTime(Property\StartTime $startTime)
 * @method UpdateAction setTarget(Property\Target $target)
 * @method UpdateAction setUrl(Property\Url $url)
 */
class UpdateAction extends Action {

	/**
	 * @var Property\TargetCollection
	 */
	private $targetCollection;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UpdateAction';
	}

	/**
	 * Get target collection.
	 * 
	 * @return Property\TargetCollection
	 */
	public function getTargetCollection() {
		return $this->targetCollection;
	}

	/**
	 * Set target collection.
	 * 
	 * @param Property\TargetCollection $targetCollection
	 * @return UpdateAction
	 */
	public function setTargetCollection(Property\TargetCollection $targetCollection) {
		$this->targetCollection = $targetCollection;

		return $this;
	}
}