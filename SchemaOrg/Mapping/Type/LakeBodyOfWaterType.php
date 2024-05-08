<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A lake (for example, Lake Pontrachain).
 * 
 * @method LakeBodyOfWaterType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LakeBodyOfWaterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LakeBodyOfWaterType setAddress(Property\AddressProperty $address)
 * @method LakeBodyOfWaterType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LakeBodyOfWaterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LakeBodyOfWaterType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method LakeBodyOfWaterType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method LakeBodyOfWaterType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method LakeBodyOfWaterType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method LakeBodyOfWaterType setDescription(Property\DescriptionProperty $description)
 * @method LakeBodyOfWaterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LakeBodyOfWaterType setEvent(Property\EventProperty $event)
 * @method LakeBodyOfWaterType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LakeBodyOfWaterType setGeo(Property\GeoProperty $geo)
 * @method LakeBodyOfWaterType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method LakeBodyOfWaterType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method LakeBodyOfWaterType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method LakeBodyOfWaterType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method LakeBodyOfWaterType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method LakeBodyOfWaterType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method LakeBodyOfWaterType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method LakeBodyOfWaterType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method LakeBodyOfWaterType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method LakeBodyOfWaterType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method LakeBodyOfWaterType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LakeBodyOfWaterType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method LakeBodyOfWaterType setHasMap(Property\HasMapProperty $hasMap)
 * @method LakeBodyOfWaterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LakeBodyOfWaterType setImage(Property\ImageProperty $image)
 * @method LakeBodyOfWaterType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method LakeBodyOfWaterType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LakeBodyOfWaterType setKeywords(Property\KeywordsProperty $keywords)
 * @method LakeBodyOfWaterType setLatitude(Property\LatitudeProperty $latitude)
 * @method LakeBodyOfWaterType setLogo(Property\LogoProperty $logo)
 * @method LakeBodyOfWaterType setLongitude(Property\LongitudeProperty $longitude)
 * @method LakeBodyOfWaterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LakeBodyOfWaterType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method LakeBodyOfWaterType setName(Property\NameProperty $name)
 * @method LakeBodyOfWaterType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method LakeBodyOfWaterType setPhoto(Property\PhotoProperty $photo)
 * @method LakeBodyOfWaterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LakeBodyOfWaterType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method LakeBodyOfWaterType setReview(Property\ReviewProperty $review)
 * @method LakeBodyOfWaterType setSameAs(Property\SameAsProperty $sameAs)
 * @method LakeBodyOfWaterType setSlogan(Property\SloganProperty $slogan)
 * @method LakeBodyOfWaterType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method LakeBodyOfWaterType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method LakeBodyOfWaterType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LakeBodyOfWaterType setTelephone(Property\TelephoneProperty $telephone)
 * @method LakeBodyOfWaterType setUrl(Property\UrlProperty $url)
 */
class LakeBodyOfWaterType extends BodyOfWaterType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LakeBodyOfWater';
	}
}