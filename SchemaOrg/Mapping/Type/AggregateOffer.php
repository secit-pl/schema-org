<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AggregateOffer.
 */
class AggregateOffer {

	/**
	 * @var Property\HighPrice
	 */
	private $highPrice;

	/**
	 */
	private $id;

	/**
	 * @var Property\LowPrice
	 */
	private $lowPrice;

	/**
	 * @var Property\OfferCount
	 */
	private $offerCount;

	/**
	 * @var Property\Offers
	 */
	private $offers;

	/**
	 * AggregateOffer constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get high price.
	 * 
	 * @return Property\HighPrice
	 */
	public function getHighPrice() {
		return $this->highPrice;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get low price.
	 * 
	 * @return Property\LowPrice
	 */
	public function getLowPrice() {
		return $this->lowPrice;
	}

	/**
	 * Get offer count.
	 * 
	 * @return Property\OfferCount
	 */
	public function getOfferCount() {
		return $this->offerCount;
	}

	/**
	 * Get offers.
	 * 
	 * @return Property\Offers
	 */
	public function getOffers() {
		return $this->offers;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AggregateOffer';
	}

	/**
	 * Set high price.
	 * 
	 * @param Property\HighPrice $highPrice
	 * @return AggregateOffer
	 */
	public function setHighPrice(Property\HighPrice $highPrice) {
		$this->highPrice = $highPrice;

		return $this;
	}

	/**
	 * Set low price.
	 * 
	 * @param Property\LowPrice $lowPrice
	 * @return AggregateOffer
	 */
	public function setLowPrice(Property\LowPrice $lowPrice) {
		$this->lowPrice = $lowPrice;

		return $this;
	}

	/**
	 * Set offer count.
	 * 
	 * @param Property\OfferCount $offerCount
	 * @return AggregateOffer
	 */
	public function setOfferCount(Property\OfferCount $offerCount) {
		$this->offerCount = $offerCount;

		return $this;
	}

	/**
	 * Set offers.
	 * 
	 * @param Property\Offers $offers
	 * @return AggregateOffer
	 */
	public function setOffers(Property\Offers $offers) {
		$this->offers = $offers;

		return $this;
	}
}