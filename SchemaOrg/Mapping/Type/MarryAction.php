<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MarryAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\MarryActionType instead.
 * 
 * @method MarryAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method MarryAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method MarryAction setAgent(Property\Agent $agent)
 * @method MarryAction setAlternateName(Property\AlternateName $alternateName)
 * @method MarryAction setDescription(Property\Description $description)
 * @method MarryAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MarryAction setEndTime(Property\EndTime $endTime)
 * @method MarryAction setError(Property\Error $error)
 * @method MarryAction setIdentifier(Property\Identifier $identifier)
 * @method MarryAction setImage(Property\Image $image)
 * @method MarryAction setInstrument(Property\Instrument $instrument)
 * @method MarryAction setLocation(Property\Location $location)
 * @method MarryAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MarryAction setName(Property\Name $name)
 * @method MarryAction setObject(Property\Object $object)
 * @method MarryAction setParticipant(Property\Participant $participant)
 * @method MarryAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MarryAction setResult(Property\Result $result)
 * @method MarryAction setSameAs(Property\SameAs $sameAs)
 * @method MarryAction setStartTime(Property\StartTime $startTime)
 * @method MarryAction setTarget(Property\Target $target)
 * @method MarryAction setUrl(Property\Url $url)
 */
class MarryAction extends Action {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MarryAction';
	}
}