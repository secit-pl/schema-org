<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A public structure, such as a town hall or concert hall.
 * 
 * @method CivicStructureType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CivicStructureType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CivicStructureType setAddress(Property\AddressProperty $address)
 * @method CivicStructureType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CivicStructureType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CivicStructureType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CivicStructureType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CivicStructureType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CivicStructureType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CivicStructureType setDescription(Property\DescriptionProperty $description)
 * @method CivicStructureType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CivicStructureType setEvent(Property\EventProperty $event)
 * @method CivicStructureType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CivicStructureType setGeo(Property\GeoProperty $geo)
 * @method CivicStructureType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method CivicStructureType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method CivicStructureType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method CivicStructureType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method CivicStructureType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method CivicStructureType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method CivicStructureType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method CivicStructureType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method CivicStructureType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method CivicStructureType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method CivicStructureType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CivicStructureType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method CivicStructureType setHasMap(Property\HasMapProperty $hasMap)
 * @method CivicStructureType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CivicStructureType setImage(Property\ImageProperty $image)
 * @method CivicStructureType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CivicStructureType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CivicStructureType setKeywords(Property\KeywordsProperty $keywords)
 * @method CivicStructureType setLatitude(Property\LatitudeProperty $latitude)
 * @method CivicStructureType setLogo(Property\LogoProperty $logo)
 * @method CivicStructureType setLongitude(Property\LongitudeProperty $longitude)
 * @method CivicStructureType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CivicStructureType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CivicStructureType setName(Property\NameProperty $name)
 * @method CivicStructureType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CivicStructureType setPhoto(Property\PhotoProperty $photo)
 * @method CivicStructureType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CivicStructureType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CivicStructureType setReview(Property\ReviewProperty $review)
 * @method CivicStructureType setSameAs(Property\SameAsProperty $sameAs)
 * @method CivicStructureType setSlogan(Property\SloganProperty $slogan)
 * @method CivicStructureType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CivicStructureType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CivicStructureType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CivicStructureType setTelephone(Property\TelephoneProperty $telephone)
 * @method CivicStructureType setUrl(Property\UrlProperty $url)
 */
class CivicStructureType extends PlaceType {

	/**
	 * @var Property\OpeningHoursProperty
	 */
	private $openingHours;

	/**
	 * Get opening hours.
	 *
	 * @return Property\OpeningHoursProperty
	 */
	public function getOpeningHours() {
		return $this->openingHours;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CivicStructure';
	}

	/**
	 * Set opening hours.
	 *
	 * @param Property\OpeningHoursProperty $openingHours
	 * @return CivicStructureType
	 */
	public function setOpeningHours(Property\OpeningHoursProperty $openingHours) {
		$this->openingHours = $openingHours;

		return $this;
	}
}