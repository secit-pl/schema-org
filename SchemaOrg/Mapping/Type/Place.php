<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Place.
 * 
 * @method Place setAdditionalType(Property\AdditionalType $additionalType)
 * @method Place setAlternateName(Property\AlternateName $alternateName)
 * @method Place setDescription(Property\Description $description)
 * @method Place setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Place setImage(Property\Image $image)
 * @method Place setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Place setName(Property\Name $name)
 * @method Place setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Place setSameAs(Property\SameAs $sameAs)
 * @method Place setUrl(Property\Url $url)
 */
class Place extends Thing {

	/**
	 * @var Property\AdditionalProperty
	 */
	private $additionalProperty;

	/**
	 * @var Property\Address
	 */
	private $address;

	/**
	 * @var Property\AggregateRating
	 */
	private $aggregateRating;

	/**
	 * @var Property\AmenityFeature
	 */
	private $amenityFeature;

	/**
	 * @var Property\BranchCode
	 */
	private $branchCode;

	/**
	 * @var Property\ContainedInPlace
	 */
	private $containedInPlace;

	/**
	 * @var Property\ContainsPlace
	 */
	private $containsPlace;

	/**
	 * @var Property\Event
	 */
	private $event;

	/**
	 * @var Property\FaxNumber
	 */
	private $faxNumber;

	/**
	 * @var Property\Geo
	 */
	private $geo;

	/**
	 * @var Property\GlobalLocationNumber
	 */
	private $globalLocationNumber;

	/**
	 * @var Property\HasMap
	 */
	private $hasMap;

	/**
	 * @var Property\IsicV4
	 */
	private $isicV4;

	/**
	 * @var Property\Logo
	 */
	private $logo;

	/**
	 * @var Property\OpeningHoursSpecification
	 */
	private $openingHoursSpecification;

	/**
	 * @var Property\Photo
	 */
	private $photo;

	/**
	 * @var Property\Review
	 */
	private $review;

	/**
	 * @var Property\SmokingAllowed
	 */
	private $smokingAllowed;

	/**
	 * @var Property\SpecialOpeningHoursSpecification
	 */
	private $specialOpeningHoursSpecification;

	/**
	 * @var Property\Telephone
	 */
	private $telephone;

	/**
	 * Get additional property.
	 * 
	 * @return Property\AdditionalProperty
	 */
	public function getAdditionalProperty() {
		return $this->additionalProperty;
	}

	/**
	 * Get address.
	 * 
	 * @return Property\Address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Get aggregate rating.
	 * 
	 * @return Property\AggregateRating
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
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
	 * Get branch code.
	 * 
	 * @return Property\BranchCode
	 */
	public function getBranchCode() {
		return $this->branchCode;
	}

	/**
	 * Get contained in place.
	 * 
	 * @return Property\ContainedInPlace
	 */
	public function getContainedInPlace() {
		return $this->containedInPlace;
	}

	/**
	 * Get contains place.
	 * 
	 * @return Property\ContainsPlace
	 */
	public function getContainsPlace() {
		return $this->containsPlace;
	}

	/**
	 * Get event.
	 * 
	 * @return Property\Event
	 */
	public function getEvent() {
		return $this->event;
	}

	/**
	 * Get fax number.
	 * 
	 * @return Property\FaxNumber
	 */
	public function getFaxNumber() {
		return $this->faxNumber;
	}

	/**
	 * Get geo.
	 * 
	 * @return Property\Geo
	 */
	public function getGeo() {
		return $this->geo;
	}

	/**
	 * Get global location number.
	 * 
	 * @return Property\GlobalLocationNumber
	 */
	public function getGlobalLocationNumber() {
		return $this->globalLocationNumber;
	}

	/**
	 * Get has map.
	 * 
	 * @return Property\HasMap
	 */
	public function getHasMap() {
		return $this->hasMap;
	}

	/**
	 * Get isicv4.
	 * 
	 * @return Property\IsicV4
	 */
	public function getIsicV4() {
		return $this->isicV4;
	}

	/**
	 * Get logo.
	 * 
	 * @return Property\Logo
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * Get opening hours specification.
	 * 
	 * @return Property\OpeningHoursSpecification
	 */
	public function getOpeningHoursSpecification() {
		return $this->openingHoursSpecification;
	}

	/**
	 * Get photo.
	 * 
	 * @return Property\Photo
	 */
	public function getPhoto() {
		return $this->photo;
	}

	/**
	 * Get review.
	 * 
	 * @return Property\Review
	 */
	public function getReview() {
		return $this->review;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Place';
	}

	/**
	 * Get smoking allowed.
	 * 
	 * @return Property\SmokingAllowed
	 */
	public function getSmokingAllowed() {
		return $this->smokingAllowed;
	}

	/**
	 * Get special opening hours specification.
	 * 
	 * @return Property\SpecialOpeningHoursSpecification
	 */
	public function getSpecialOpeningHoursSpecification() {
		return $this->specialOpeningHoursSpecification;
	}

	/**
	 * Get telephone.
	 * 
	 * @return Property\Telephone
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Set additional property.
	 * 
	 * @param Property\AdditionalProperty $additionalProperty
	 * @return Place
	 */
	public function setAdditionalProperty(Property\AdditionalProperty $additionalProperty) {
		$this->additionalProperty = $additionalProperty;

		return $this;
	}

	/**
	 * Set address.
	 * 
	 * @param Property\Address $address
	 * @return Place
	 */
	public function setAddress(Property\Address $address) {
		$this->address = $address;

		return $this;
	}

	/**
	 * Set aggregate rating.
	 * 
	 * @param Property\AggregateRating $aggregateRating
	 * @return Place
	 */
	public function setAggregateRating(Property\AggregateRating $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set amenity feature.
	 * 
	 * @param Property\AmenityFeature $amenityFeature
	 * @return Place
	 */
	public function setAmenityFeature(Property\AmenityFeature $amenityFeature) {
		$this->amenityFeature = $amenityFeature;

		return $this;
	}

	/**
	 * Set branch code.
	 * 
	 * @param Property\BranchCode $branchCode
	 * @return Place
	 */
	public function setBranchCode(Property\BranchCode $branchCode) {
		$this->branchCode = $branchCode;

		return $this;
	}

	/**
	 * Set contained in place.
	 * 
	 * @param Property\ContainedInPlace $containedInPlace
	 * @return Place
	 */
	public function setContainedInPlace(Property\ContainedInPlace $containedInPlace) {
		$this->containedInPlace = $containedInPlace;

		return $this;
	}

	/**
	 * Set contains place.
	 * 
	 * @param Property\ContainsPlace $containsPlace
	 * @return Place
	 */
	public function setContainsPlace(Property\ContainsPlace $containsPlace) {
		$this->containsPlace = $containsPlace;

		return $this;
	}

	/**
	 * Set event.
	 * 
	 * @param Property\Event $event
	 * @return Place
	 */
	public function setEvent(Property\Event $event) {
		$this->event = $event;

		return $this;
	}

	/**
	 * Set fax number.
	 * 
	 * @param Property\FaxNumber $faxNumber
	 * @return Place
	 */
	public function setFaxNumber(Property\FaxNumber $faxNumber) {
		$this->faxNumber = $faxNumber;

		return $this;
	}

	/**
	 * Set geo.
	 * 
	 * @param Property\Geo $geo
	 * @return Place
	 */
	public function setGeo(Property\Geo $geo) {
		$this->geo = $geo;

		return $this;
	}

	/**
	 * Set global location number.
	 * 
	 * @param Property\GlobalLocationNumber $globalLocationNumber
	 * @return Place
	 */
	public function setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber) {
		$this->globalLocationNumber = $globalLocationNumber;

		return $this;
	}

	/**
	 * Set has map.
	 * 
	 * @param Property\HasMap $hasMap
	 * @return Place
	 */
	public function setHasMap(Property\HasMap $hasMap) {
		$this->hasMap = $hasMap;

		return $this;
	}

	/**
	 * Set isicv4.
	 * 
	 * @param Property\IsicV4 $isicV4
	 * @return Place
	 */
	public function setIsicV4(Property\IsicV4 $isicV4) {
		$this->isicV4 = $isicV4;

		return $this;
	}

	/**
	 * Set logo.
	 * 
	 * @param Property\Logo $logo
	 * @return Place
	 */
	public function setLogo(Property\Logo $logo) {
		$this->logo = $logo;

		return $this;
	}

	/**
	 * Set opening hours specification.
	 * 
	 * @param Property\OpeningHoursSpecification $openingHoursSpecification
	 * @return Place
	 */
	public function setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification) {
		$this->openingHoursSpecification = $openingHoursSpecification;

		return $this;
	}

	/**
	 * Set photo.
	 * 
	 * @param Property\Photo $photo
	 * @return Place
	 */
	public function setPhoto(Property\Photo $photo) {
		$this->photo = $photo;

		return $this;
	}

	/**
	 * Set review.
	 * 
	 * @param Property\Review $review
	 * @return Place
	 */
	public function setReview(Property\Review $review) {
		$this->review = $review;

		return $this;
	}

	/**
	 * Set smoking allowed.
	 * 
	 * @param Property\SmokingAllowed $smokingAllowed
	 * @return Place
	 */
	public function setSmokingAllowed(Property\SmokingAllowed $smokingAllowed) {
		$this->smokingAllowed = $smokingAllowed;

		return $this;
	}

	/**
	 * Set special opening hours specification.
	 * 
	 * @param Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification
	 * @return Place
	 */
	public function setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification) {
		$this->specialOpeningHoursSpecification = $specialOpeningHoursSpecification;

		return $this;
	}

	/**
	 * Set telephone.
	 * 
	 * @param Property\Telephone $telephone
	 * @return Place
	 */
	public function setTelephone(Property\Telephone $telephone) {
		$this->telephone = $telephone;

		return $this;
	}
}