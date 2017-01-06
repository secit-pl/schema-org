<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BookmarkAction.
 * 
 * @method BookmarkAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method BookmarkAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method BookmarkAction setAgent(Property\Agent $agent)
 * @method BookmarkAction setAlternateName(Property\AlternateName $alternateName)
 * @method BookmarkAction setDescription(Property\Description $description)
 * @method BookmarkAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BookmarkAction setEndTime(Property\EndTime $endTime)
 * @method BookmarkAction setError(Property\Error $error)
 * @method BookmarkAction setImage(Property\Image $image)
 * @method BookmarkAction setInstrument(Property\Instrument $instrument)
 * @method BookmarkAction setLocation(Property\Location $location)
 * @method BookmarkAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BookmarkAction setName(Property\Name $name)
 * @method BookmarkAction setObject(Property\Object $object)
 * @method BookmarkAction setParticipant(Property\Participant $participant)
 * @method BookmarkAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BookmarkAction setResult(Property\Result $result)
 * @method BookmarkAction setSameAs(Property\SameAs $sameAs)
 * @method BookmarkAction setStartTime(Property\StartTime $startTime)
 * @method BookmarkAction setTarget(Property\Target $target)
 * @method BookmarkAction setUrl(Property\Url $url)
 */
class BookmarkAction extends OrganizeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BookmarkAction';
	}
}