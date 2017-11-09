<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DownloadActionType.
 * 
 * @method DownloadActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method DownloadActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DownloadActionType setAgent(Property\AgentProperty $agent)
 * @method DownloadActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DownloadActionType setDescription(Property\DescriptionProperty $description)
 * @method DownloadActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DownloadActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method DownloadActionType setError(Property\ErrorProperty $error)
 * @method DownloadActionType setFromLocation(Property\FromLocationProperty $fromLocation)
 * @method DownloadActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DownloadActionType setImage(Property\ImageProperty $image)
 * @method DownloadActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method DownloadActionType setLocation(Property\LocationProperty $location)
 * @method DownloadActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DownloadActionType setName(Property\NameProperty $name)
 * @method DownloadActionType setObject(Property\ObjectProperty $object)
 * @method DownloadActionType setParticipant(Property\ParticipantProperty $participant)
 * @method DownloadActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DownloadActionType setResult(Property\ResultProperty $result)
 * @method DownloadActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method DownloadActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method DownloadActionType setTarget(Property\TargetProperty $target)
 * @method DownloadActionType setToLocation(Property\ToLocationProperty $toLocation)
 * @method DownloadActionType setUrl(Property\UrlProperty $url)
 */
class DownloadActionType extends TransferActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DownloadAction';
	}
}