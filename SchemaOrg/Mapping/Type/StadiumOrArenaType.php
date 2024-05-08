<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A stadium.
 * 
 * @method StadiumOrArenaType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method StadiumOrArenaType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method StadiumOrArenaType setAddress(Property\AddressProperty $address)
 * @method StadiumOrArenaType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method StadiumOrArenaType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method StadiumOrArenaType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method StadiumOrArenaType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method StadiumOrArenaType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method StadiumOrArenaType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method StadiumOrArenaType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method StadiumOrArenaType setDescription(Property\DescriptionProperty $description)
 * @method StadiumOrArenaType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method StadiumOrArenaType setEvent(Property\EventProperty $event)
 * @method StadiumOrArenaType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method StadiumOrArenaType setGeo(Property\GeoProperty $geo)
 * @method StadiumOrArenaType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method StadiumOrArenaType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method StadiumOrArenaType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method StadiumOrArenaType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method StadiumOrArenaType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method StadiumOrArenaType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method StadiumOrArenaType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method StadiumOrArenaType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method StadiumOrArenaType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method StadiumOrArenaType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method StadiumOrArenaType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method StadiumOrArenaType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method StadiumOrArenaType setHasMap(Property\HasMapProperty $hasMap)
 * @method StadiumOrArenaType setIdentifier(Property\IdentifierProperty $identifier)
 * @method StadiumOrArenaType setImage(Property\ImageProperty $image)
 * @method StadiumOrArenaType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method StadiumOrArenaType setIsicV4(Property\IsicV4Property $isicV4)
 * @method StadiumOrArenaType setKeywords(Property\KeywordsProperty $keywords)
 * @method StadiumOrArenaType setLatitude(Property\LatitudeProperty $latitude)
 * @method StadiumOrArenaType setLogo(Property\LogoProperty $logo)
 * @method StadiumOrArenaType setLongitude(Property\LongitudeProperty $longitude)
 * @method StadiumOrArenaType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method StadiumOrArenaType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method StadiumOrArenaType setName(Property\NameProperty $name)
 * @method StadiumOrArenaType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method StadiumOrArenaType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method StadiumOrArenaType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method StadiumOrArenaType setPhoto(Property\PhotoProperty $photo)
 * @method StadiumOrArenaType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method StadiumOrArenaType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method StadiumOrArenaType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method StadiumOrArenaType setReview(Property\ReviewProperty $review)
 * @method StadiumOrArenaType setSameAs(Property\SameAsProperty $sameAs)
 * @method StadiumOrArenaType setSlogan(Property\SloganProperty $slogan)
 * @method StadiumOrArenaType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method StadiumOrArenaType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method StadiumOrArenaType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method StadiumOrArenaType setTelephone(Property\TelephoneProperty $telephone)
 * @method StadiumOrArenaType setUrl(Property\UrlProperty $url)
 */
class StadiumOrArenaType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/StadiumOrArena';
	}
}