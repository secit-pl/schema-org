<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A river (for example, the broad majestic Shannon).
 * 
 * @method RiverBodyOfWaterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RiverBodyOfWaterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RiverBodyOfWaterType setAddress(Property\AddressProperty $address)
 * @method RiverBodyOfWaterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RiverBodyOfWaterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RiverBodyOfWaterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method RiverBodyOfWaterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method RiverBodyOfWaterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method RiverBodyOfWaterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method RiverBodyOfWaterType setDescription(Property\DescriptionProperty $description)
 * @method RiverBodyOfWaterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RiverBodyOfWaterType setEvent(Property\EventProperty $event)
 * @method RiverBodyOfWaterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RiverBodyOfWaterType setGeo(Property\GeoProperty $geo)
 * @method RiverBodyOfWaterType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method RiverBodyOfWaterType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method RiverBodyOfWaterType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method RiverBodyOfWaterType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method RiverBodyOfWaterType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method RiverBodyOfWaterType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method RiverBodyOfWaterType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method RiverBodyOfWaterType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method RiverBodyOfWaterType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method RiverBodyOfWaterType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method RiverBodyOfWaterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RiverBodyOfWaterType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method RiverBodyOfWaterType setHasMap(Property\HasMapProperty $hasMap)
 * @method RiverBodyOfWaterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RiverBodyOfWaterType setImage(Property\ImageProperty $image)
 * @method RiverBodyOfWaterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method RiverBodyOfWaterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RiverBodyOfWaterType setKeywords(Property\KeywordsProperty $keywords)
 * @method RiverBodyOfWaterType setLatitude(Property\LatitudeProperty $latitude)
 * @method RiverBodyOfWaterType setLogo(Property\LogoProperty $logo)
 * @method RiverBodyOfWaterType setLongitude(Property\LongitudeProperty $longitude)
 * @method RiverBodyOfWaterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RiverBodyOfWaterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method RiverBodyOfWaterType setName(Property\NameProperty $name)
 * @method RiverBodyOfWaterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method RiverBodyOfWaterType setPhoto(Property\PhotoProperty $photo)
 * @method RiverBodyOfWaterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RiverBodyOfWaterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method RiverBodyOfWaterType setReview(Property\ReviewProperty $review)
 * @method RiverBodyOfWaterType setSameAs(Property\SameAsProperty $sameAs)
 * @method RiverBodyOfWaterType setSlogan(Property\SloganProperty $slogan)
 * @method RiverBodyOfWaterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method RiverBodyOfWaterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method RiverBodyOfWaterType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RiverBodyOfWaterType setTelephone(Property\TelephoneProperty $telephone)
 * @method RiverBodyOfWaterType setUrl(Property\UrlProperty $url)
 */
class RiverBodyOfWaterType extends BodyOfWaterType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RiverBodyOfWater';
	}
}