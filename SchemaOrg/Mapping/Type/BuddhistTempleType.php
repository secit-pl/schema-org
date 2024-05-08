<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A Buddhist temple.
 * 
 * @method BuddhistTempleType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BuddhistTempleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BuddhistTempleType setAddress(Property\AddressProperty $address)
 * @method BuddhistTempleType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BuddhistTempleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BuddhistTempleType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BuddhistTempleType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BuddhistTempleType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BuddhistTempleType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BuddhistTempleType setDescription(Property\DescriptionProperty $description)
 * @method BuddhistTempleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BuddhistTempleType setEvent(Property\EventProperty $event)
 * @method BuddhistTempleType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BuddhistTempleType setGeo(Property\GeoProperty $geo)
 * @method BuddhistTempleType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method BuddhistTempleType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method BuddhistTempleType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method BuddhistTempleType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method BuddhistTempleType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method BuddhistTempleType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method BuddhistTempleType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method BuddhistTempleType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method BuddhistTempleType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method BuddhistTempleType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method BuddhistTempleType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BuddhistTempleType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BuddhistTempleType setHasMap(Property\HasMapProperty $hasMap)
 * @method BuddhistTempleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BuddhistTempleType setImage(Property\ImageProperty $image)
 * @method BuddhistTempleType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BuddhistTempleType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BuddhistTempleType setKeywords(Property\KeywordsProperty $keywords)
 * @method BuddhistTempleType setLatitude(Property\LatitudeProperty $latitude)
 * @method BuddhistTempleType setLogo(Property\LogoProperty $logo)
 * @method BuddhistTempleType setLongitude(Property\LongitudeProperty $longitude)
 * @method BuddhistTempleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BuddhistTempleType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BuddhistTempleType setName(Property\NameProperty $name)
 * @method BuddhistTempleType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BuddhistTempleType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BuddhistTempleType setPhoto(Property\PhotoProperty $photo)
 * @method BuddhistTempleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BuddhistTempleType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BuddhistTempleType setReview(Property\ReviewProperty $review)
 * @method BuddhistTempleType setSameAs(Property\SameAsProperty $sameAs)
 * @method BuddhistTempleType setSlogan(Property\SloganProperty $slogan)
 * @method BuddhistTempleType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BuddhistTempleType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BuddhistTempleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BuddhistTempleType setTelephone(Property\TelephoneProperty $telephone)
 * @method BuddhistTempleType setUrl(Property\UrlProperty $url)
 */
class BuddhistTempleType extends PlaceOfWorshipType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BuddhistTemple';
	}
}