<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Entities that have a somewhat fixed, physical extension.
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
 * @method PlaceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
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
	 * @var Property\GeoContainsProperty
	 */
	private $geoContains;

	/**
	 * @var Property\GeoCoveredByProperty
	 */
	private $geoCoveredBy;

	/**
	 * @var Property\GeoCoversProperty
	 */
	private $geoCovers;

	/**
	 * @var Property\GeoCrossesProperty
	 */
	private $geoCrosses;

	/**
	 * @var Property\GeoDisjointProperty
	 */
	private $geoDisjoint;

	/**
	 * @var Property\GeoEqualsProperty
	 */
	private $geoEquals;

	/**
	 * @var Property\GeoIntersectsProperty
	 */
	private $geoIntersects;

	/**
	 * @var Property\GeoOverlapsProperty
	 */
	private $geoOverlaps;

	/**
	 * @var Property\GeoTouchesProperty
	 */
	private $geoTouches;

	/**
	 * @var Property\GeoWithinProperty
	 */
	private $geoWithin;

	/**
	 * @var Property\GlobalLocationNumberProperty
	 */
	private $globalLocationNumber;

	/**
	 * @var Property\HasCertificationProperty
	 */
	private $hasCertification;

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
	 * @var Property\KeywordsProperty
	 */
	private $keywords;

	/**
	 * @var Property\LatitudeProperty
	 */
	private $latitude;

	/**
	 * @var Property\LogoProperty
	 */
	private $logo;

	/**
	 * @var Property\LongitudeProperty
	 */
	private $longitude;

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
	 * @var Property\SloganProperty
	 */
	private $slogan;

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
	 * Get geo contains.
	 *
	 * @return Property\GeoContainsProperty
	 */
	public function getGeoContains() {
		return $this->geoContains;
	}

	/**
	 * Get geo covered by.
	 *
	 * @return Property\GeoCoveredByProperty
	 */
	public function getGeoCoveredBy() {
		return $this->geoCoveredBy;
	}

	/**
	 * Get geo covers.
	 *
	 * @return Property\GeoCoversProperty
	 */
	public function getGeoCovers() {
		return $this->geoCovers;
	}

	/**
	 * Get geo crosses.
	 *
	 * @return Property\GeoCrossesProperty
	 */
	public function getGeoCrosses() {
		return $this->geoCrosses;
	}

	/**
	 * Get geo disjoint.
	 *
	 * @return Property\GeoDisjointProperty
	 */
	public function getGeoDisjoint() {
		return $this->geoDisjoint;
	}

	/**
	 * Get geo equals.
	 *
	 * @return Property\GeoEqualsProperty
	 */
	public function getGeoEquals() {
		return $this->geoEquals;
	}

	/**
	 * Get geo intersects.
	 *
	 * @return Property\GeoIntersectsProperty
	 */
	public function getGeoIntersects() {
		return $this->geoIntersects;
	}

	/**
	 * Get geo overlaps.
	 *
	 * @return Property\GeoOverlapsProperty
	 */
	public function getGeoOverlaps() {
		return $this->geoOverlaps;
	}

	/**
	 * Get geo touches.
	 *
	 * @return Property\GeoTouchesProperty
	 */
	public function getGeoTouches() {
		return $this->geoTouches;
	}

	/**
	 * Get geo within.
	 *
	 * @return Property\GeoWithinProperty
	 */
	public function getGeoWithin() {
		return $this->geoWithin;
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
	 * Get has certification.
	 *
	 * @return Property\HasCertificationProperty
	 */
	public function getHasCertification() {
		return $this->hasCertification;
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
	 * Get keywords.
	 *
	 * @return Property\KeywordsProperty
	 */
	public function getKeywords() {
		return $this->keywords;
	}

	/**
	 * Get latitude.
	 *
	 * @return Property\LatitudeProperty
	 */
	public function getLatitude() {
		return $this->latitude;
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
	 * Get longitude.
	 *
	 * @return Property\LongitudeProperty
	 */
	public function getLongitude() {
		return $this->longitude;
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
	 * Get slogan.
	 *
	 * @return Property\SloganProperty
	 */
	public function getSlogan() {
		return $this->slogan;
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
	 * Set geo contains.
	 *
	 * @param Property\GeoContainsProperty $geoContains
	 * @return PlaceType
	 */
	public function setGeoContains(Property\GeoContainsProperty $geoContains) {
		$this->geoContains = $geoContains;

		return $this;
	}

	/**
	 * Set geo covered by.
	 *
	 * @param Property\GeoCoveredByProperty $geoCoveredBy
	 * @return PlaceType
	 */
	public function setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy) {
		$this->geoCoveredBy = $geoCoveredBy;

		return $this;
	}

	/**
	 * Set geo covers.
	 *
	 * @param Property\GeoCoversProperty $geoCovers
	 * @return PlaceType
	 */
	public function setGeoCovers(Property\GeoCoversProperty $geoCovers) {
		$this->geoCovers = $geoCovers;

		return $this;
	}

	/**
	 * Set geo crosses.
	 *
	 * @param Property\GeoCrossesProperty $geoCrosses
	 * @return PlaceType
	 */
	public function setGeoCrosses(Property\GeoCrossesProperty $geoCrosses) {
		$this->geoCrosses = $geoCrosses;

		return $this;
	}

	/**
	 * Set geo disjoint.
	 *
	 * @param Property\GeoDisjointProperty $geoDisjoint
	 * @return PlaceType
	 */
	public function setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint) {
		$this->geoDisjoint = $geoDisjoint;

		return $this;
	}

	/**
	 * Set geo equals.
	 *
	 * @param Property\GeoEqualsProperty $geoEquals
	 * @return PlaceType
	 */
	public function setGeoEquals(Property\GeoEqualsProperty $geoEquals) {
		$this->geoEquals = $geoEquals;

		return $this;
	}

	/**
	 * Set geo intersects.
	 *
	 * @param Property\GeoIntersectsProperty $geoIntersects
	 * @return PlaceType
	 */
	public function setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects) {
		$this->geoIntersects = $geoIntersects;

		return $this;
	}

	/**
	 * Set geo overlaps.
	 *
	 * @param Property\GeoOverlapsProperty $geoOverlaps
	 * @return PlaceType
	 */
	public function setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps) {
		$this->geoOverlaps = $geoOverlaps;

		return $this;
	}

	/**
	 * Set geo touches.
	 *
	 * @param Property\GeoTouchesProperty $geoTouches
	 * @return PlaceType
	 */
	public function setGeoTouches(Property\GeoTouchesProperty $geoTouches) {
		$this->geoTouches = $geoTouches;

		return $this;
	}

	/**
	 * Set geo within.
	 *
	 * @param Property\GeoWithinProperty $geoWithin
	 * @return PlaceType
	 */
	public function setGeoWithin(Property\GeoWithinProperty $geoWithin) {
		$this->geoWithin = $geoWithin;

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
	 * Set has certification.
	 *
	 * @param Property\HasCertificationProperty $hasCertification
	 * @return PlaceType
	 */
	public function setHasCertification(Property\HasCertificationProperty $hasCertification) {
		$this->hasCertification = $hasCertification;

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
	 * Set keywords.
	 *
	 * @param Property\KeywordsProperty $keywords
	 * @return PlaceType
	 */
	public function setKeywords(Property\KeywordsProperty $keywords) {
		$this->keywords = $keywords;

		return $this;
	}

	/**
	 * Set latitude.
	 *
	 * @param Property\LatitudeProperty $latitude
	 * @return PlaceType
	 */
	public function setLatitude(Property\LatitudeProperty $latitude) {
		$this->latitude = $latitude;

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
	 * Set longitude.
	 *
	 * @param Property\LongitudeProperty $longitude
	 * @return PlaceType
	 */
	public function setLongitude(Property\LongitudeProperty $longitude) {
		$this->longitude = $longitude;

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
	 * Set slogan.
	 *
	 * @param Property\SloganProperty $slogan
	 * @return PlaceType
	 */
	public function setSlogan(Property\SloganProperty $slogan) {
		$this->slogan = $slogan;

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