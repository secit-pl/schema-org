<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A sea (for example, the Caspian sea).
 * 
 * @method SeaBodyOfWaterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SeaBodyOfWaterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SeaBodyOfWaterType setAddress(Property\AddressProperty $address)
 * @method SeaBodyOfWaterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SeaBodyOfWaterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SeaBodyOfWaterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method SeaBodyOfWaterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method SeaBodyOfWaterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method SeaBodyOfWaterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method SeaBodyOfWaterType setDescription(Property\DescriptionProperty $description)
 * @method SeaBodyOfWaterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SeaBodyOfWaterType setEvent(Property\EventProperty $event)
 * @method SeaBodyOfWaterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SeaBodyOfWaterType setGeo(Property\GeoProperty $geo)
 * @method SeaBodyOfWaterType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method SeaBodyOfWaterType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method SeaBodyOfWaterType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method SeaBodyOfWaterType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method SeaBodyOfWaterType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method SeaBodyOfWaterType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method SeaBodyOfWaterType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method SeaBodyOfWaterType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method SeaBodyOfWaterType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method SeaBodyOfWaterType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method SeaBodyOfWaterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SeaBodyOfWaterType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method SeaBodyOfWaterType setHasMap(Property\HasMapProperty $hasMap)
 * @method SeaBodyOfWaterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SeaBodyOfWaterType setImage(Property\ImageProperty $image)
 * @method SeaBodyOfWaterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method SeaBodyOfWaterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SeaBodyOfWaterType setKeywords(Property\KeywordsProperty $keywords)
 * @method SeaBodyOfWaterType setLatitude(Property\LatitudeProperty $latitude)
 * @method SeaBodyOfWaterType setLogo(Property\LogoProperty $logo)
 * @method SeaBodyOfWaterType setLongitude(Property\LongitudeProperty $longitude)
 * @method SeaBodyOfWaterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SeaBodyOfWaterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method SeaBodyOfWaterType setName(Property\NameProperty $name)
 * @method SeaBodyOfWaterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method SeaBodyOfWaterType setPhoto(Property\PhotoProperty $photo)
 * @method SeaBodyOfWaterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SeaBodyOfWaterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method SeaBodyOfWaterType setReview(Property\ReviewProperty $review)
 * @method SeaBodyOfWaterType setSameAs(Property\SameAsProperty $sameAs)
 * @method SeaBodyOfWaterType setSlogan(Property\SloganProperty $slogan)
 * @method SeaBodyOfWaterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method SeaBodyOfWaterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method SeaBodyOfWaterType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SeaBodyOfWaterType setTelephone(Property\TelephoneProperty $telephone)
 * @method SeaBodyOfWaterType setUrl(Property\UrlProperty $url)
 */
class SeaBodyOfWaterType extends BodyOfWaterType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SeaBodyOfWater';
	}
}