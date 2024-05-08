<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An agent orders a (not yet released) object/product/service to be delivered/sent.
 * 
 * @method PreOrderActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method PreOrderActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PreOrderActionType setAgent(Property\AgentProperty $agent)
 * @method PreOrderActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PreOrderActionType setDescription(Property\DescriptionProperty $description)
 * @method PreOrderActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PreOrderActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method PreOrderActionType setError(Property\ErrorProperty $error)
 * @method PreOrderActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PreOrderActionType setImage(Property\ImageProperty $image)
 * @method PreOrderActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method PreOrderActionType setLocation(Property\LocationProperty $location)
 * @method PreOrderActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PreOrderActionType setName(Property\NameProperty $name)
 * @method PreOrderActionType setObject(Property\ObjectProperty $object)
 * @method PreOrderActionType setParticipant(Property\ParticipantProperty $participant)
 * @method PreOrderActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PreOrderActionType setPrice(Property\PriceProperty $price)
 * @method PreOrderActionType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method PreOrderActionType setPriceSpecification(Property\PriceSpecificationProperty $priceSpecification)
 * @method PreOrderActionType setResult(Property\ResultProperty $result)
 * @method PreOrderActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method PreOrderActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method PreOrderActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PreOrderActionType setTarget(Property\TargetProperty $target)
 * @method PreOrderActionType setUrl(Property\UrlProperty $url)
 */
class PreOrderActionType extends TradeActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PreOrderAction';
	}
}