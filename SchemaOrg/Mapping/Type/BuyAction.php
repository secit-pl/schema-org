<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BuyAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\BuyActionType instead.
 * 
 * @method BuyAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method BuyAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method BuyAction setAgent(Property\Agent $agent)
 * @method BuyAction setAlternateName(Property\AlternateName $alternateName)
 * @method BuyAction setDescription(Property\Description $description)
 * @method BuyAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BuyAction setEndTime(Property\EndTime $endTime)
 * @method BuyAction setError(Property\Error $error)
 * @method BuyAction setIdentifier(Property\Identifier $identifier)
 * @method BuyAction setImage(Property\Image $image)
 * @method BuyAction setInstrument(Property\Instrument $instrument)
 * @method BuyAction setLocation(Property\Location $location)
 * @method BuyAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BuyAction setName(Property\Name $name)
 * @method BuyAction setObject(Property\Object $object)
 * @method BuyAction setParticipant(Property\Participant $participant)
 * @method BuyAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BuyAction setPrice(Property\Price $price)
 * @method BuyAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method BuyAction setResult(Property\Result $result)
 * @method BuyAction setSameAs(Property\SameAs $sameAs)
 * @method BuyAction setStartTime(Property\StartTime $startTime)
 * @method BuyAction setTarget(Property\Target $target)
 * @method BuyAction setUrl(Property\Url $url)
 */
class BuyAction extends TradeAction {

	/**
	 * @var Property\Seller
	 */
	private $seller;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BuyAction';
	}

	/**
	 * Get seller.
	 * 
	 * @return Property\Seller
	 */
	public function getSeller() {
		return $this->seller;
	}

	/**
	 * Set seller.
	 * 
	 * @param Property\Seller $seller
	 * @return BuyAction
	 */
	public function setSeller(Property\Seller $seller) {
		$this->seller = $seller;

		return $this;
	}
}