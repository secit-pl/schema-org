<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An agent quotes/estimates/appraises an object/product/service with a price at a location/store.
 * 
 * @method QuoteActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method QuoteActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method QuoteActionType setAgent(Property\AgentProperty $agent)
 * @method QuoteActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method QuoteActionType setDescription(Property\DescriptionProperty $description)
 * @method QuoteActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method QuoteActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method QuoteActionType setError(Property\ErrorProperty $error)
 * @method QuoteActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method QuoteActionType setImage(Property\ImageProperty $image)
 * @method QuoteActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method QuoteActionType setLocation(Property\LocationProperty $location)
 * @method QuoteActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method QuoteActionType setName(Property\NameProperty $name)
 * @method QuoteActionType setObject(Property\ObjectProperty $object)
 * @method QuoteActionType setParticipant(Property\ParticipantProperty $participant)
 * @method QuoteActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method QuoteActionType setPrice(Property\PriceProperty $price)
 * @method QuoteActionType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method QuoteActionType setPriceSpecification(Property\PriceSpecificationProperty $priceSpecification)
 * @method QuoteActionType setResult(Property\ResultProperty $result)
 * @method QuoteActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method QuoteActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method QuoteActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method QuoteActionType setTarget(Property\TargetProperty $target)
 * @method QuoteActionType setUrl(Property\UrlProperty $url)
 */
class QuoteActionType extends TradeActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/QuoteAction';
	}
}