<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DownloadAction.
 * 
 * @method DownloadAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DownloadAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method DownloadAction setAgent(Property\Agent $agent)
 * @method DownloadAction setAlternateName(Property\AlternateName $alternateName)
 * @method DownloadAction setDescription(Property\Description $description)
 * @method DownloadAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DownloadAction setEndTime(Property\EndTime $endTime)
 * @method DownloadAction setError(Property\Error $error)
 * @method DownloadAction setFromLocation(Property\FromLocation $fromLocation)
 * @method DownloadAction setImage(Property\Image $image)
 * @method DownloadAction setInstrument(Property\Instrument $instrument)
 * @method DownloadAction setLocation(Property\Location $location)
 * @method DownloadAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DownloadAction setName(Property\Name $name)
 * @method DownloadAction setObject(Property\Object $object)
 * @method DownloadAction setParticipant(Property\Participant $participant)
 * @method DownloadAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DownloadAction setResult(Property\Result $result)
 * @method DownloadAction setSameAs(Property\SameAs $sameAs)
 * @method DownloadAction setStartTime(Property\StartTime $startTime)
 * @method DownloadAction setTarget(Property\Target $target)
 * @method DownloadAction setToLocation(Property\ToLocation $toLocation)
 * @method DownloadAction setUrl(Property\Url $url)
 */
class DownloadAction extends TransferAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DownloadAction';
	}
}