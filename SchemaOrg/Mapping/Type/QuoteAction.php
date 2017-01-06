<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class QuoteAction.
 * 
 * @method QuoteAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method QuoteAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method QuoteAction setAgent(Property\Agent $agent)
 * @method QuoteAction setAlternateName(Property\AlternateName $alternateName)
 * @method QuoteAction setDescription(Property\Description $description)
 * @method QuoteAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method QuoteAction setEndTime(Property\EndTime $endTime)
 * @method QuoteAction setError(Property\Error $error)
 * @method QuoteAction setImage(Property\Image $image)
 * @method QuoteAction setInstrument(Property\Instrument $instrument)
 * @method QuoteAction setLocation(Property\Location $location)
 * @method QuoteAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method QuoteAction setName(Property\Name $name)
 * @method QuoteAction setObject(Property\Object $object)
 * @method QuoteAction setParticipant(Property\Participant $participant)
 * @method QuoteAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method QuoteAction setPrice(Property\Price $price)
 * @method QuoteAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method QuoteAction setResult(Property\Result $result)
 * @method QuoteAction setSameAs(Property\SameAs $sameAs)
 * @method QuoteAction setStartTime(Property\StartTime $startTime)
 * @method QuoteAction setTarget(Property\Target $target)
 * @method QuoteAction setUrl(Property\Url $url)
 */
class QuoteAction extends TradeAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/QuoteAction';
	}
}