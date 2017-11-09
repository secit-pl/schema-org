<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InsertAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\InsertActionType instead.
 * 
 * @method InsertAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method InsertAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method InsertAction setAgent(Property\Agent $agent)
 * @method InsertAction setAlternateName(Property\AlternateName $alternateName)
 * @method InsertAction setDescription(Property\Description $description)
 * @method InsertAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method InsertAction setEndTime(Property\EndTime $endTime)
 * @method InsertAction setError(Property\Error $error)
 * @method InsertAction setIdentifier(Property\Identifier $identifier)
 * @method InsertAction setImage(Property\Image $image)
 * @method InsertAction setInstrument(Property\Instrument $instrument)
 * @method InsertAction setLocation(Property\Location $location)
 * @method InsertAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method InsertAction setName(Property\Name $name)
 * @method InsertAction setObject(Property\Object $object)
 * @method InsertAction setParticipant(Property\Participant $participant)
 * @method InsertAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method InsertAction setResult(Property\Result $result)
 * @method InsertAction setSameAs(Property\SameAs $sameAs)
 * @method InsertAction setStartTime(Property\StartTime $startTime)
 * @method InsertAction setTarget(Property\Target $target)
 * @method InsertAction setTargetCollection(Property\TargetCollection $targetCollection)
 * @method InsertAction setUrl(Property\Url $url)
 */
class InsertAction extends AddAction {

	/**
	 * @var Property\ToLocation
	 */
	private $toLocation;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InsertAction';
	}

	/**
	 * Get to location.
	 * 
	 * @return Property\ToLocation
	 */
	public function getToLocation() {
		return $this->toLocation;
	}

	/**
	 * Set to location.
	 * 
	 * @param Property\ToLocation $toLocation
	 * @return InsertAction
	 */
	public function setToLocation(Property\ToLocation $toLocation) {
		$this->toLocation = $toLocation;

		return $this;
	}
}