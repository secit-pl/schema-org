<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A waterfall, like Niagara.
 * 
 * @method WaterfallType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method WaterfallType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WaterfallType setAddress(Property\AddressProperty $address)
 * @method WaterfallType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method WaterfallType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WaterfallType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method WaterfallType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method WaterfallType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method WaterfallType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method WaterfallType setDescription(Property\DescriptionProperty $description)
 * @method WaterfallType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WaterfallType setEvent(Property\EventProperty $event)
 * @method WaterfallType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method WaterfallType setGeo(Property\GeoProperty $geo)
 * @method WaterfallType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method WaterfallType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method WaterfallType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method WaterfallType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method WaterfallType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method WaterfallType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method WaterfallType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method WaterfallType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method WaterfallType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method WaterfallType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method WaterfallType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method WaterfallType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method WaterfallType setHasMap(Property\HasMapProperty $hasMap)
 * @method WaterfallType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WaterfallType setImage(Property\ImageProperty $image)
 * @method WaterfallType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method WaterfallType setIsicV4(Property\IsicV4Property $isicV4)
 * @method WaterfallType setKeywords(Property\KeywordsProperty $keywords)
 * @method WaterfallType setLatitude(Property\LatitudeProperty $latitude)
 * @method WaterfallType setLogo(Property\LogoProperty $logo)
 * @method WaterfallType setLongitude(Property\LongitudeProperty $longitude)
 * @method WaterfallType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WaterfallType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method WaterfallType setName(Property\NameProperty $name)
 * @method WaterfallType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method WaterfallType setPhoto(Property\PhotoProperty $photo)
 * @method WaterfallType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WaterfallType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method WaterfallType setReview(Property\ReviewProperty $review)
 * @method WaterfallType setSameAs(Property\SameAsProperty $sameAs)
 * @method WaterfallType setSlogan(Property\SloganProperty $slogan)
 * @method WaterfallType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method WaterfallType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method WaterfallType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method WaterfallType setTelephone(Property\TelephoneProperty $telephone)
 * @method WaterfallType setUrl(Property\UrlProperty $url)
 */
class WaterfallType extends BodyOfWaterType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Waterfall';
	}
}