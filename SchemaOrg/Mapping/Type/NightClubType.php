<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A nightclub or discotheque.
 * 
 * @method NightClubType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method NightClubType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NightClubType setAddress(Property\AddressProperty $address)
 * @method NightClubType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method NightClubType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NightClubType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method NightClubType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method NightClubType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method NightClubType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method NightClubType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method NightClubType setDescription(Property\DescriptionProperty $description)
 * @method NightClubType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NightClubType setEvent(Property\EventProperty $event)
 * @method NightClubType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method NightClubType setGeo(Property\GeoProperty $geo)
 * @method NightClubType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method NightClubType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method NightClubType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method NightClubType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method NightClubType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method NightClubType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method NightClubType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method NightClubType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method NightClubType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method NightClubType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method NightClubType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method NightClubType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method NightClubType setHasMap(Property\HasMapProperty $hasMap)
 * @method NightClubType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NightClubType setImage(Property\ImageProperty $image)
 * @method NightClubType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method NightClubType setIsicV4(Property\IsicV4Property $isicV4)
 * @method NightClubType setKeywords(Property\KeywordsProperty $keywords)
 * @method NightClubType setLatitude(Property\LatitudeProperty $latitude)
 * @method NightClubType setLogo(Property\LogoProperty $logo)
 * @method NightClubType setLongitude(Property\LongitudeProperty $longitude)
 * @method NightClubType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NightClubType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method NightClubType setName(Property\NameProperty $name)
 * @method NightClubType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method NightClubType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method NightClubType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method NightClubType setPhoto(Property\PhotoProperty $photo)
 * @method NightClubType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NightClubType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method NightClubType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method NightClubType setReview(Property\ReviewProperty $review)
 * @method NightClubType setSameAs(Property\SameAsProperty $sameAs)
 * @method NightClubType setSlogan(Property\SloganProperty $slogan)
 * @method NightClubType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method NightClubType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method NightClubType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method NightClubType setTelephone(Property\TelephoneProperty $telephone)
 * @method NightClubType setUrl(Property\UrlProperty $url)
 */
class NightClubType extends EntertainmentBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NightClub';
	}
}