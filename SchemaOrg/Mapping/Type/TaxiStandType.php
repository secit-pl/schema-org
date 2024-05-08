<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A taxi stand.
 * 
 * @method TaxiStandType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method TaxiStandType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TaxiStandType setAddress(Property\AddressProperty $address)
 * @method TaxiStandType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TaxiStandType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TaxiStandType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method TaxiStandType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method TaxiStandType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method TaxiStandType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method TaxiStandType setDescription(Property\DescriptionProperty $description)
 * @method TaxiStandType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TaxiStandType setEvent(Property\EventProperty $event)
 * @method TaxiStandType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TaxiStandType setGeo(Property\GeoProperty $geo)
 * @method TaxiStandType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method TaxiStandType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method TaxiStandType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method TaxiStandType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method TaxiStandType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method TaxiStandType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method TaxiStandType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method TaxiStandType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method TaxiStandType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method TaxiStandType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method TaxiStandType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TaxiStandType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method TaxiStandType setHasMap(Property\HasMapProperty $hasMap)
 * @method TaxiStandType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TaxiStandType setImage(Property\ImageProperty $image)
 * @method TaxiStandType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method TaxiStandType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TaxiStandType setKeywords(Property\KeywordsProperty $keywords)
 * @method TaxiStandType setLatitude(Property\LatitudeProperty $latitude)
 * @method TaxiStandType setLogo(Property\LogoProperty $logo)
 * @method TaxiStandType setLongitude(Property\LongitudeProperty $longitude)
 * @method TaxiStandType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TaxiStandType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method TaxiStandType setName(Property\NameProperty $name)
 * @method TaxiStandType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method TaxiStandType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method TaxiStandType setPhoto(Property\PhotoProperty $photo)
 * @method TaxiStandType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TaxiStandType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method TaxiStandType setReview(Property\ReviewProperty $review)
 * @method TaxiStandType setSameAs(Property\SameAsProperty $sameAs)
 * @method TaxiStandType setSlogan(Property\SloganProperty $slogan)
 * @method TaxiStandType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method TaxiStandType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method TaxiStandType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TaxiStandType setTelephone(Property\TelephoneProperty $telephone)
 * @method TaxiStandType setUrl(Property\UrlProperty $url)
 */
class TaxiStandType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TaxiStand';
	}
}