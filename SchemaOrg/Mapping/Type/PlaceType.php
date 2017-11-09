<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PlaceType.
 * 
 * @method PlaceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PlaceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PlaceType setDescription(Property\DescriptionProperty $description)
 * @method PlaceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PlaceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PlaceType setImage(Property\ImageProperty $image)
 * @method PlaceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PlaceType setName(Property\NameProperty $name)
 * @method PlaceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PlaceType setSameAs(Property\SameAsProperty $sameAs)
 * @method PlaceType setUrl(Property\UrlProperty $url)
 */
class PlaceType extends ThingType {

	/**
	 * @var Property\AdditionalProperty
	 */
	private $additionalProperty;

	/**
	 * @var Property\AddressProperty
	 */
	private $address;

	/**
	 * @var Property\AggregateRatingProperty
	 */
	private $aggregateRating;

	/**
	 * @var Property\AmenityFeatureProperty
	 */
	private $amenityFeature;

	/**
	 * @var Property\BranchCodeProperty
	 */
	private $branchCode;

	/**
	 * @var Property\ContainedInPlaceProperty
	 */
	private $containedInPlace;

	/**
	 * @var Property\ContainsPlaceProperty
	 */
	private $containsPlace;

	/**
	 * @var Property\EventProperty
	 */
	private $event;

	/**
	 * @var Property\FaxNumberProperty
	 */
	private $faxNumber;

	/**
	 * @var Property\GeoProperty
	 */
	private $geo;

	/**
	 * @var Property\GlobalLocationNumberProperty
	 */
	private $globalLocationNumber;

	/**
	 * @var Property\HasMapProperty
	 */
	private $hasMap;

	/**
	 * @var Property\IsAccessibleForFreeProperty
	 */
	private $isAccessibleForFree;

	/**
	 * @var Property\IsicV4Property
	 */
	private $isicV4;

	/**
	 * @var Property\LogoProperty
	 */
	private $logo;

	/**
	 * @var Property\MaximumAttendeeCapacityProperty
	 */
	private $maximumAttendeeCapacity;

	/**
	 * @var Property\OpeningHoursSpecificationProperty
	 */
	private $openingHoursSpecification;

	/**
	 * @var Property\PhotoProperty
	 */
	private $photo;

	/**
	 * @var Property\PublicAccessProperty
	 */
	private $publicAccess;

	/**
	 * @var Property\ReviewProperty
	 */
	private $review;

	/**
	 * @var Property\SmokingAllowedProperty
	 */
	private $smokingAllowed;

	/**
	 * @var Property\SpecialOpeningHoursSpecificationProperty
	 */
	private $specialOpeningHoursSpecification;

	/**
	 * @var Property\TelephoneProperty
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
	 * @return Property\AddressProperty
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Get aggregate rating.
	 * 
	 * @return Property\AggregateRatingProperty
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
	}

	/**
	 * Get amenity feature.
	 * 
	 * @return Property\AmenityFeatureProperty
	 */
	public function getAmenityFeature() {
		return $this->amenityFeature;
	}

	/**
	 * Get branch code.
	 * 
	 * @return Property\BranchCodeProperty
	 */
	public function getBranchCode() {
		return $this->branchCode;
	}

	/**
	 * Get contained in place.
	 * 
	 * @return Property\ContainedInPlaceProperty
	 */
	public function getContainedInPlace() {
		return $this->containedInPlace;
	}

	/**
	 * Get contains place.
	 * 
	 * @return Property\ContainsPlaceProperty
	 */
	public function getContainsPlace() {
		return $this->containsPlace;
	}

	/**
	 * Get event.
	 * 
	 * @return Property\EventProperty
	 */
	public function getEvent() {
		return $this->event;
	}

	/**
	 * Get fax number.
	 * 
	 * @return Property\FaxNumberProperty
	 */
	public function getFaxNumber() {
		return $this->faxNumber;
	}

	/**
	 * Get geo.
	 * 
	 * @return Property\GeoProperty
	 */
	public function getGeo() {
		return $this->geo;
	}

	/**
	 * Get global location number.
	 * 
	 * @return Property\GlobalLocationNumberProperty
	 */
	public function getGlobalLocationNumber() {
		return $this->globalLocationNumber;
	}

	/**
	 * Get has map.
	 * 
	 * @return Property\HasMapProperty
	 */
	public function getHasMap() {
		return $this->hasMap;
	}

	/**
	 * Get is accessible for free.
	 * 
	 * @return Property\IsAccessibleForFreeProperty
	 */
	public function getIsAccessibleForFree() {
		return $this->isAccessibleForFree;
	}

	/**
	 * Get isicv4.
	 * 
	 * @return Property\IsicV4Property
	 */
	public function getIsicV4() {
		return $this->isicV4;
	}

	/**
	 * Get logo.
	 * 
	 * @return Property\LogoProperty
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * Get maximum attendee capacity.
	 * 
	 * @return Property\MaximumAttendeeCapacityProperty
	 */
	public function getMaximumAttendeeCapacity() {
		return $this->maximumAttendeeCapacity;
	}

	/**
	 * Get opening hours specification.
	 * 
	 * @return Property\OpeningHoursSpecificationProperty
	 */
	public function getOpeningHoursSpecification() {
		return $this->openingHoursSpecification;
	}

	/**
	 * Get photo.
	 * 
	 * @return Property\PhotoProperty
	 */
	public function getPhoto() {
		return $this->photo;
	}

	/**
	 * Get public access.
	 * 
	 * @return Property\PublicAccessProperty
	 */
	public function getPublicAccess() {
		return $this->publicAccess;
	}

	/**
	 * Get review.
	 * 
	 * @return Property\ReviewProperty
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
	 * @return Property\SmokingAllowedProperty
	 */
	public function getSmokingAllowed() {
		return $this->smokingAllowed;
	}

	/**
	 * Get special opening hours specification.
	 * 
	 * @return Property\SpecialOpeningHoursSpecificationProperty
	 */
	public function getSpecialOpeningHoursSpecification() {
		return $this->specialOpeningHoursSpecification;
	}

	/**
	 * Get telephone.
	 * 
	 * @return Property\TelephoneProperty
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Set additional property.
	 * 
	 * @param Property\AdditionalProperty $additionalProperty
	 * @return PlaceType
	 */
	public function setAdditionalProperty(Property\AdditionalProperty $additionalProperty) {
		$this->additionalProperty = $additionalProperty;

		return $this;
	}

	/**
	 * Set address.
	 * 
	 * @param Property\AddressProperty $address
	 * @return PlaceType
	 */
	public function setAddress(Property\AddressProperty $address) {
		$this->address = $address;

		return $this;
	}

	/**
	 * Set aggregate rating.
	 * 
	 * @param Property\AggregateRatingProperty $aggregateRating
	 * @return PlaceType
	 */
	public function setAggregateRating(Property\AggregateRatingProperty $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set amenity feature.
	 * 
	 * @param Property\AmenityFeatureProperty $amenityFeature
	 * @return PlaceType
	 */
	public function setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature) {
		$this->amenityFeature = $amenityFeature;

		return $this;
	}

	/**
	 * Set branch code.
	 * 
	 * @param Property\BranchCodeProperty $branchCode
	 * @return PlaceType
	 */
	public function setBranchCode(Property\BranchCodeProperty $branchCode) {
		$this->branchCode = $branchCode;

		return $this;
	}

	/**
	 * Set contained in place.
	 * 
	 * @param Property\ContainedInPlaceProperty $containedInPlace
	 * @return PlaceType
	 */
	public function setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace) {
		$this->containedInPlace = $containedInPlace;

		return $this;
	}

	/**
	 * Set contains place.
	 * 
	 * @param Property\ContainsPlaceProperty $containsPlace
	 * @return PlaceType
	 */
	public function setContainsPlace(Property\ContainsPlaceProperty $containsPlace) {
		$this->containsPlace = $containsPlace;

		return $this;
	}

	/**
	 * Set event.
	 * 
	 * @param Property\EventProperty $event
	 * @return PlaceType
	 */
	public function setEvent(Property\EventProperty $event) {
		$this->event = $event;

		return $this;
	}

	/**
	 * Set fax number.
	 * 
	 * @param Property\FaxNumberProperty $faxNumber
	 * @return PlaceType
	 */
	public function setFaxNumber(Property\FaxNumberProperty $faxNumber) {
		$this->faxNumber = $faxNumber;

		return $this;
	}

	/**
	 * Set geo.
	 * 
	 * @param Property\GeoProperty $geo
	 * @return PlaceType
	 */
	public function setGeo(Property\GeoProperty $geo) {
		$this->geo = $geo;

		return $this;
	}

	/**
	 * Set global location number.
	 * 
	 * @param Property\GlobalLocationNumberProperty $globalLocationNumber
	 * @return PlaceType
	 */
	public function setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber) {
		$this->globalLocationNumber = $globalLocationNumber;

		return $this;
	}

	/**
	 * Set has map.
	 * 
	 * @param Property\HasMapProperty $hasMap
	 * @return PlaceType
	 */
	public function setHasMap(Property\HasMapProperty $hasMap) {
		$this->hasMap = $hasMap;

		return $this;
	}

	/**
	 * Set is accessible for free.
	 * 
	 * @param Property\IsAccessibleForFreeProperty $isAccessibleForFree
	 * @return PlaceType
	 */
	public function setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree) {
		$this->isAccessibleForFree = $isAccessibleForFree;

		return $this;
	}

	/**
	 * Set isicv4.
	 * 
	 * @param Property\IsicV4Property $isicV4
	 * @return PlaceType
	 */
	public function setIsicV4(Property\IsicV4Property $isicV4) {
		$this->isicV4 = $isicV4;

		return $this;
	}

	/**
	 * Set logo.
	 * 
	 * @param Property\LogoProperty $logo
	 * @return PlaceType
	 */
	public function setLogo(Property\LogoProperty $logo) {
		$this->logo = $logo;

		return $this;
	}

	/**
	 * Set maximum attendee capacity.
	 * 
	 * @param Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity
	 * @return PlaceType
	 */
	public function setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity) {
		$this->maximumAttendeeCapacity = $maximumAttendeeCapacity;

		return $this;
	}

	/**
	 * Set opening hours specification.
	 * 
	 * @param Property\OpeningHoursSpecificationProperty $openingHoursSpecification
	 * @return PlaceType
	 */
	public function setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification) {
		$this->openingHoursSpecification = $openingHoursSpecification;

		return $this;
	}

	/**
	 * Set photo.
	 * 
	 * @param Property\PhotoProperty $photo
	 * @return PlaceType
	 */
	public function setPhoto(Property\PhotoProperty $photo) {
		$this->photo = $photo;

		return $this;
	}

	/**
	 * Set public access.
	 * 
	 * @param Property\PublicAccessProperty $publicAccess
	 * @return PlaceType
	 */
	public function setPublicAccess(Property\PublicAccessProperty $publicAccess) {
		$this->publicAccess = $publicAccess;

		return $this;
	}

	/**
	 * Set review.
	 * 
	 * @param Property\ReviewProperty $review
	 * @return PlaceType
	 */
	public function setReview(Property\ReviewProperty $review) {
		$this->review = $review;

		return $this;
	}

	/**
	 * Set smoking allowed.
	 * 
	 * @param Property\SmokingAllowedProperty $smokingAllowed
	 * @return PlaceType
	 */
	public function setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed) {
		$this->smokingAllowed = $smokingAllowed;

		return $this;
	}

	/**
	 * Set special opening hours specification.
	 * 
	 * @param Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification
	 * @return PlaceType
	 */
	public function setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification) {
		$this->specialOpeningHoursSpecification = $specialOpeningHoursSpecification;

		return $this;
	}

	/**
	 * Set telephone.
	 * 
	 * @param Property\TelephoneProperty $telephone
	 * @return PlaceType
	 */
	public function setTelephone(Property\TelephoneProperty $telephone) {
		$this->telephone = $telephone;

		return $this;
	}
}