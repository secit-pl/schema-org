<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A car rental business.
 * 
 * @method AutoRentalType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AutoRentalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutoRentalType setAddress(Property\AddressProperty $address)
 * @method AutoRentalType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutoRentalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutoRentalType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method AutoRentalType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method AutoRentalType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method AutoRentalType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method AutoRentalType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutoRentalType setDescription(Property\DescriptionProperty $description)
 * @method AutoRentalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutoRentalType setEvent(Property\EventProperty $event)
 * @method AutoRentalType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutoRentalType setGeo(Property\GeoProperty $geo)
 * @method AutoRentalType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method AutoRentalType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method AutoRentalType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method AutoRentalType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method AutoRentalType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method AutoRentalType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method AutoRentalType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method AutoRentalType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method AutoRentalType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method AutoRentalType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method AutoRentalType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutoRentalType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method AutoRentalType setHasMap(Property\HasMapProperty $hasMap)
 * @method AutoRentalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutoRentalType setImage(Property\ImageProperty $image)
 * @method AutoRentalType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method AutoRentalType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutoRentalType setKeywords(Property\KeywordsProperty $keywords)
 * @method AutoRentalType setLatitude(Property\LatitudeProperty $latitude)
 * @method AutoRentalType setLogo(Property\LogoProperty $logo)
 * @method AutoRentalType setLongitude(Property\LongitudeProperty $longitude)
 * @method AutoRentalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutoRentalType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method AutoRentalType setName(Property\NameProperty $name)
 * @method AutoRentalType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutoRentalType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method AutoRentalType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutoRentalType setPhoto(Property\PhotoProperty $photo)
 * @method AutoRentalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutoRentalType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutoRentalType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method AutoRentalType setReview(Property\ReviewProperty $review)
 * @method AutoRentalType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutoRentalType setSlogan(Property\SloganProperty $slogan)
 * @method AutoRentalType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method AutoRentalType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method AutoRentalType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AutoRentalType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutoRentalType setUrl(Property\UrlProperty $url)
 */
class AutoRentalType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoRental';
	}
}