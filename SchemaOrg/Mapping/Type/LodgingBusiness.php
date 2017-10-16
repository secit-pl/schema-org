<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LodgingBusiness.
 */
class LodgingBusiness {

	/**
	 * @var Property\AmenityFeature
	 */
	private $amenityFeature;

	/**
	 * @var Property\Audience
	 */
	private $audience;

	/**
	 * @var Property\AvailableLanguage
	 */
	private $availableLanguage;

	/**
	 * @var Property\CheckinTime
	 */
	private $checkinTime;

	/**
	 * @var Property\CheckoutTime
	 */
	private $checkoutTime;

	/**
	 */
	private $id;

	/**
	 * @var Property\PetsAllowed
	 */
	private $petsAllowed;

	/**
	 * @var Property\StarRating
	 */
	private $starRating;

	/**
	 * LodgingBusiness constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get amenity feature.
	 * 
	 * @return Property\AmenityFeature
	 */
	public function getAmenityFeature() {
		return $this->amenityFeature;
	}

	/**
	 * Get audience.
	 * 
	 * @return Property\Audience
	 */
	public function getAudience() {
		return $this->audience;
	}

	/**
	 * Get available language.
	 * 
	 * @return Property\AvailableLanguage
	 */
	public function getAvailableLanguage() {
		return $this->availableLanguage;
	}

	/**
	 * Get checkin time.
	 * 
	 * @return Property\CheckinTime
	 */
	public function getCheckinTime() {
		return $this->checkinTime;
	}

	/**
	 * Get checkout time.
	 * 
	 * @return Property\CheckoutTime
	 */
	public function getCheckoutTime() {
		return $this->checkoutTime;
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
	 * Get pets allowed.
	 * 
	 * @return Property\PetsAllowed
	 */
	public function getPetsAllowed() {
		return $this->petsAllowed;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LodgingBusiness';
	}

	/**
	 * Get star rating.
	 * 
	 * @return Property\StarRating
	 */
	public function getStarRating() {
		return $this->starRating;
	}

	/**
	 * Set amenity feature.
	 * 
	 * @param Property\AmenityFeature $amenityFeature
	 * @return LodgingBusiness
	 */
	public function setAmenityFeature(Property\AmenityFeature $amenityFeature) {
		$this->amenityFeature = $amenityFeature;

		return $this;
	}

	/**
	 * Set audience.
	 * 
	 * @param Property\Audience $audience
	 * @return LodgingBusiness
	 */
	public function setAudience(Property\Audience $audience) {
		$this->audience = $audience;

		return $this;
	}

	/**
	 * Set available language.
	 * 
	 * @param Property\AvailableLanguage $availableLanguage
	 * @return LodgingBusiness
	 */
	public function setAvailableLanguage(Property\AvailableLanguage $availableLanguage) {
		$this->availableLanguage = $availableLanguage;

		return $this;
	}

	/**
	 * Set checkin time.
	 * 
	 * @param Property\CheckinTime $checkinTime
	 * @return LodgingBusiness
	 */
	public function setCheckinTime(Property\CheckinTime $checkinTime) {
		$this->checkinTime = $checkinTime;

		return $this;
	}

	/**
	 * Set checkout time.
	 * 
	 * @param Property\CheckoutTime $checkoutTime
	 * @return LodgingBusiness
	 */
	public function setCheckoutTime(Property\CheckoutTime $checkoutTime) {
		$this->checkoutTime = $checkoutTime;

		return $this;
	}

	/**
	 * Set pets allowed.
	 * 
	 * @param Property\PetsAllowed $petsAllowed
	 * @return LodgingBusiness
	 */
	public function setPetsAllowed(Property\PetsAllowed $petsAllowed) {
		$this->petsAllowed = $petsAllowed;

		return $this;
	}

	/**
	 * Set star rating.
	 * 
	 * @param Property\StarRating $starRating
	 * @return LodgingBusiness
	 */
	public function setStarRating(Property\StarRating $starRating) {
		$this->starRating = $starRating;

		return $this;
	}
}