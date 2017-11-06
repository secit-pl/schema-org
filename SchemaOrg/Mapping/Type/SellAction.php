<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SellAction.
 * 
 * @method SellAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method SellAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method SellAction setAgent(Property\Agent $agent)
 * @method SellAction setAlternateName(Property\AlternateName $alternateName)
 * @method SellAction setDescription(Property\Description $description)
 * @method SellAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SellAction setEndTime(Property\EndTime $endTime)
 * @method SellAction setError(Property\Error $error)
 * @method SellAction setIdentifier(Property\Identifier $identifier)
 * @method SellAction setImage(Property\Image $image)
 * @method SellAction setInstrument(Property\Instrument $instrument)
 * @method SellAction setLocation(Property\Location $location)
 * @method SellAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SellAction setName(Property\Name $name)
 * @method SellAction setObject(Property\Object $object)
 * @method SellAction setParticipant(Property\Participant $participant)
 * @method SellAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SellAction setPrice(Property\Price $price)
 * @method SellAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method SellAction setResult(Property\Result $result)
 * @method SellAction setSameAs(Property\SameAs $sameAs)
 * @method SellAction setStartTime(Property\StartTime $startTime)
 * @method SellAction setTarget(Property\Target $target)
 * @method SellAction setUrl(Property\Url $url)
 */
class SellAction extends TradeAction {

	/**
	 * @var Property\Buyer
	 */
	private $buyer;

	/**
	 * Get buyer.
	 * 
	 * @return Property\Buyer
	 */
	public function getBuyer() {
		return $this->buyer;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SellAction';
	}

	/**
	 * Set buyer.
	 * 
	 * @param Property\Buyer $buyer
	 * @return SellAction
	 */
	public function setBuyer(Property\Buyer $buyer) {
		$this->buyer = $buyer;

		return $this;
	}
}