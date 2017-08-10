<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class QuoteAction.
 * 
 * @method QuoteAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method QuoteAction setAgent(Property\Agent $agent)
 * @method QuoteAction setEndTime(Property\EndTime $endTime)
 * @method QuoteAction setError(Property\Error $error)
 * @method QuoteAction setInstrument(Property\Instrument $instrument)
 * @method QuoteAction setLocation(Property\Location $location)
 * @method QuoteAction setObject(Property\Object $object)
 * @method QuoteAction setParticipant(Property\Participant $participant)
 * @method QuoteAction setPrice(Property\Price $price)
 * @method QuoteAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method QuoteAction setResult(Property\Result $result)
 * @method QuoteAction setStartTime(Property\StartTime $startTime)
 * @method QuoteAction setTarget(Property\Target $target)
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