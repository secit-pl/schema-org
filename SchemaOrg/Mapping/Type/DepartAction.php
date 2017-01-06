<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DepartAction.
 * 
 * @method DepartAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DepartAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method DepartAction setAgent(Property\Agent $agent)
 * @method DepartAction setAlternateName(Property\AlternateName $alternateName)
 * @method DepartAction setDescription(Property\Description $description)
 * @method DepartAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DepartAction setEndTime(Property\EndTime $endTime)
 * @method DepartAction setError(Property\Error $error)
 * @method DepartAction setFromLocation(Property\FromLocation $fromLocation)
 * @method DepartAction setImage(Property\Image $image)
 * @method DepartAction setInstrument(Property\Instrument $instrument)
 * @method DepartAction setLocation(Property\Location $location)
 * @method DepartAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DepartAction setName(Property\Name $name)
 * @method DepartAction setObject(Property\Object $object)
 * @method DepartAction setParticipant(Property\Participant $participant)
 * @method DepartAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DepartAction setResult(Property\Result $result)
 * @method DepartAction setSameAs(Property\SameAs $sameAs)
 * @method DepartAction setStartTime(Property\StartTime $startTime)
 * @method DepartAction setTarget(Property\Target $target)
 * @method DepartAction setToLocation(Property\ToLocation $toLocation)
 * @method DepartAction setUrl(Property\Url $url)
 */
class DepartAction extends MoveAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DepartAction';
	}
}