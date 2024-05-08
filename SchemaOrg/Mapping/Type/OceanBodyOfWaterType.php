<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An ocean (for example, the Pacific).
 * 
 * @method OceanBodyOfWaterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method OceanBodyOfWaterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OceanBodyOfWaterType setAddress(Property\AddressProperty $address)
 * @method OceanBodyOfWaterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method OceanBodyOfWaterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OceanBodyOfWaterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method OceanBodyOfWaterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method OceanBodyOfWaterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method OceanBodyOfWaterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method OceanBodyOfWaterType setDescription(Property\DescriptionProperty $description)
 * @method OceanBodyOfWaterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OceanBodyOfWaterType setEvent(Property\EventProperty $event)
 * @method OceanBodyOfWaterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method OceanBodyOfWaterType setGeo(Property\GeoProperty $geo)
 * @method OceanBodyOfWaterType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method OceanBodyOfWaterType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method OceanBodyOfWaterType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method OceanBodyOfWaterType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method OceanBodyOfWaterType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method OceanBodyOfWaterType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method OceanBodyOfWaterType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method OceanBodyOfWaterType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method OceanBodyOfWaterType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method OceanBodyOfWaterType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method OceanBodyOfWaterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method OceanBodyOfWaterType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method OceanBodyOfWaterType setHasMap(Property\HasMapProperty $hasMap)
 * @method OceanBodyOfWaterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OceanBodyOfWaterType setImage(Property\ImageProperty $image)
 * @method OceanBodyOfWaterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method OceanBodyOfWaterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method OceanBodyOfWaterType setKeywords(Property\KeywordsProperty $keywords)
 * @method OceanBodyOfWaterType setLatitude(Property\LatitudeProperty $latitude)
 * @method OceanBodyOfWaterType setLogo(Property\LogoProperty $logo)
 * @method OceanBodyOfWaterType setLongitude(Property\LongitudeProperty $longitude)
 * @method OceanBodyOfWaterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OceanBodyOfWaterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method OceanBodyOfWaterType setName(Property\NameProperty $name)
 * @method OceanBodyOfWaterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method OceanBodyOfWaterType setPhoto(Property\PhotoProperty $photo)
 * @method OceanBodyOfWaterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OceanBodyOfWaterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method OceanBodyOfWaterType setReview(Property\ReviewProperty $review)
 * @method OceanBodyOfWaterType setSameAs(Property\SameAsProperty $sameAs)
 * @method OceanBodyOfWaterType setSlogan(Property\SloganProperty $slogan)
 * @method OceanBodyOfWaterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method OceanBodyOfWaterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method OceanBodyOfWaterType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OceanBodyOfWaterType setTelephone(Property\TelephoneProperty $telephone)
 * @method OceanBodyOfWaterType setUrl(Property\UrlProperty $url)
 */
class OceanBodyOfWaterType extends BodyOfWaterType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OceanBodyOfWater';
	}
}