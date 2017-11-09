<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ShareAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ShareActionType instead.
 * 
 * @method ShareAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ShareAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ShareAction setAgent(Property\Agent $agent)
 * @method ShareAction setAlternateName(Property\AlternateName $alternateName)
 * @method ShareAction setDescription(Property\Description $description)
 * @method ShareAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ShareAction setEndTime(Property\EndTime $endTime)
 * @method ShareAction setError(Property\Error $error)
 * @method ShareAction setIdentifier(Property\Identifier $identifier)
 * @method ShareAction setImage(Property\Image $image)
 * @method ShareAction setInLanguage(Property\InLanguage $inLanguage)
 * @method ShareAction setInstrument(Property\Instrument $instrument)
 * @method ShareAction setLocation(Property\Location $location)
 * @method ShareAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ShareAction setName(Property\Name $name)
 * @method ShareAction setObject(Property\Object $object)
 * @method ShareAction setParticipant(Property\Participant $participant)
 * @method ShareAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ShareAction setRecipient(Property\Recipient $recipient)
 * @method ShareAction setResult(Property\Result $result)
 * @method ShareAction setSameAs(Property\SameAs $sameAs)
 * @method ShareAction setStartTime(Property\StartTime $startTime)
 * @method ShareAction setTarget(Property\Target $target)
 * @method ShareAction setUrl(Property\Url $url)
 */
class ShareAction extends CommunicateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ShareAction';
	}
}