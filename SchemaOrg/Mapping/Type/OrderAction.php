<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OrderAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\OrderActionType instead.
 * 
 * @method OrderAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method OrderAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method OrderAction setAgent(Property\Agent $agent)
 * @method OrderAction setAlternateName(Property\AlternateName $alternateName)
 * @method OrderAction setDescription(Property\Description $description)
 * @method OrderAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OrderAction setEndTime(Property\EndTime $endTime)
 * @method OrderAction setError(Property\Error $error)
 * @method OrderAction setIdentifier(Property\Identifier $identifier)
 * @method OrderAction setImage(Property\Image $image)
 * @method OrderAction setInstrument(Property\Instrument $instrument)
 * @method OrderAction setLocation(Property\Location $location)
 * @method OrderAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OrderAction setName(Property\Name $name)
 * @method OrderAction setObject(Property\Object $object)
 * @method OrderAction setParticipant(Property\Participant $participant)
 * @method OrderAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OrderAction setPrice(Property\Price $price)
 * @method OrderAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method OrderAction setResult(Property\Result $result)
 * @method OrderAction setSameAs(Property\SameAs $sameAs)
 * @method OrderAction setStartTime(Property\StartTime $startTime)
 * @method OrderAction setTarget(Property\Target $target)
 * @method OrderAction setUrl(Property\Url $url)
 */
class OrderAction extends TradeAction {

	/**
	 * @var Property\DeliveryMethod
	 */
	private $deliveryMethod;

	/**
	 * Get delivery method.
	 * 
	 * @return Property\DeliveryMethod
	 */
	public function getDeliveryMethod() {
		return $this->deliveryMethod;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderAction';
	}

	/**
	 * Set delivery method.
	 * 
	 * @param Property\DeliveryMethod $deliveryMethod
	 * @return OrderAction
	 */
	public function setDeliveryMethod(Property\DeliveryMethod $deliveryMethod) {
		$this->deliveryMethod = $deliveryMethod;

		return $this;
	}
}