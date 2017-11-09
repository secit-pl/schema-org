<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FilmAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\FilmActionType instead.
 * 
 * @method FilmAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method FilmAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method FilmAction setAgent(Property\Agent $agent)
 * @method FilmAction setAlternateName(Property\AlternateName $alternateName)
 * @method FilmAction setDescription(Property\Description $description)
 * @method FilmAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FilmAction setEndTime(Property\EndTime $endTime)
 * @method FilmAction setError(Property\Error $error)
 * @method FilmAction setIdentifier(Property\Identifier $identifier)
 * @method FilmAction setImage(Property\Image $image)
 * @method FilmAction setInstrument(Property\Instrument $instrument)
 * @method FilmAction setLocation(Property\Location $location)
 * @method FilmAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FilmAction setName(Property\Name $name)
 * @method FilmAction setObject(Property\Object $object)
 * @method FilmAction setParticipant(Property\Participant $participant)
 * @method FilmAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FilmAction setResult(Property\Result $result)
 * @method FilmAction setSameAs(Property\SameAs $sameAs)
 * @method FilmAction setStartTime(Property\StartTime $startTime)
 * @method FilmAction setTarget(Property\Target $target)
 * @method FilmAction setUrl(Property\Url $url)
 */
class FilmAction extends CreateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FilmAction';
	}
}