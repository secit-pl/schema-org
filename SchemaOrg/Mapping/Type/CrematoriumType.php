<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A crematorium.
 * 
 * @method CrematoriumType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CrematoriumType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CrematoriumType setAddress(Property\AddressProperty $address)
 * @method CrematoriumType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CrematoriumType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CrematoriumType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method CrematoriumType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method CrematoriumType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method CrematoriumType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method CrematoriumType setDescription(Property\DescriptionProperty $description)
 * @method CrematoriumType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CrematoriumType setEvent(Property\EventProperty $event)
 * @method CrematoriumType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CrematoriumType setGeo(Property\GeoProperty $geo)
 * @method CrematoriumType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method CrematoriumType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method CrematoriumType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method CrematoriumType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method CrematoriumType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method CrematoriumType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method CrematoriumType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method CrematoriumType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method CrematoriumType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method CrematoriumType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method CrematoriumType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CrematoriumType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method CrematoriumType setHasMap(Property\HasMapProperty $hasMap)
 * @method CrematoriumType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CrematoriumType setImage(Property\ImageProperty $image)
 * @method CrematoriumType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CrematoriumType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CrematoriumType setKeywords(Property\KeywordsProperty $keywords)
 * @method CrematoriumType setLatitude(Property\LatitudeProperty $latitude)
 * @method CrematoriumType setLogo(Property\LogoProperty $logo)
 * @method CrematoriumType setLongitude(Property\LongitudeProperty $longitude)
 * @method CrematoriumType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CrematoriumType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CrematoriumType setName(Property\NameProperty $name)
 * @method CrematoriumType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method CrematoriumType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method CrematoriumType setPhoto(Property\PhotoProperty $photo)
 * @method CrematoriumType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CrematoriumType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method CrematoriumType setReview(Property\ReviewProperty $review)
 * @method CrematoriumType setSameAs(Property\SameAsProperty $sameAs)
 * @method CrematoriumType setSlogan(Property\SloganProperty $slogan)
 * @method CrematoriumType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method CrematoriumType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method CrematoriumType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CrematoriumType setTelephone(Property\TelephoneProperty $telephone)
 * @method CrematoriumType setUrl(Property\UrlProperty $url)
 */
class CrematoriumType extends CivicStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Crematorium';
	}
}