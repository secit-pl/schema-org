<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A landform or physical feature. Landform elements include mountains, plains, lakes, rivers, seascape and oceanic waterbody interface features such as bays, peninsulas, seas and so forth, including sub-aqueous terrain features such as submersed mountain ranges, volcanoes, and the great ocean basins.
 * 
 * @method LandformType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LandformType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LandformType setAddress(Property\AddressProperty $address)
 * @method LandformType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LandformType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LandformType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method LandformType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method LandformType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method LandformType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method LandformType setDescription(Property\DescriptionProperty $description)
 * @method LandformType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LandformType setEvent(Property\EventProperty $event)
 * @method LandformType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LandformType setGeo(Property\GeoProperty $geo)
 * @method LandformType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method LandformType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method LandformType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method LandformType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method LandformType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method LandformType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method LandformType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method LandformType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method LandformType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method LandformType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method LandformType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LandformType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method LandformType setHasMap(Property\HasMapProperty $hasMap)
 * @method LandformType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LandformType setImage(Property\ImageProperty $image)
 * @method LandformType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method LandformType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LandformType setKeywords(Property\KeywordsProperty $keywords)
 * @method LandformType setLatitude(Property\LatitudeProperty $latitude)
 * @method LandformType setLogo(Property\LogoProperty $logo)
 * @method LandformType setLongitude(Property\LongitudeProperty $longitude)
 * @method LandformType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LandformType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method LandformType setName(Property\NameProperty $name)
 * @method LandformType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method LandformType setPhoto(Property\PhotoProperty $photo)
 * @method LandformType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LandformType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method LandformType setReview(Property\ReviewProperty $review)
 * @method LandformType setSameAs(Property\SameAsProperty $sameAs)
 * @method LandformType setSlogan(Property\SloganProperty $slogan)
 * @method LandformType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method LandformType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method LandformType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LandformType setTelephone(Property\TelephoneProperty $telephone)
 * @method LandformType setUrl(Property\UrlProperty $url)
 */
class LandformType extends PlaceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Landform';
	}
}