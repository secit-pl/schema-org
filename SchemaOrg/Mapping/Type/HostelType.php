<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A hostel - cheap accommodation, often in shared dormitories. See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * 
 * @method HostelType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method HostelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HostelType setAddress(Property\AddressProperty $address)
 * @method HostelType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HostelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HostelType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method HostelType setAudience(Property\AudienceProperty $audience)
 * @method HostelType setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage)
 * @method HostelType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method HostelType setCheckinTime(Property\CheckinTimeProperty $checkinTime)
 * @method HostelType setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime)
 * @method HostelType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method HostelType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method HostelType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HostelType setDescription(Property\DescriptionProperty $description)
 * @method HostelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HostelType setEvent(Property\EventProperty $event)
 * @method HostelType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HostelType setGeo(Property\GeoProperty $geo)
 * @method HostelType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method HostelType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method HostelType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method HostelType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method HostelType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method HostelType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method HostelType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method HostelType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method HostelType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method HostelType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method HostelType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HostelType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method HostelType setHasMap(Property\HasMapProperty $hasMap)
 * @method HostelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HostelType setImage(Property\ImageProperty $image)
 * @method HostelType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method HostelType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HostelType setKeywords(Property\KeywordsProperty $keywords)
 * @method HostelType setLatitude(Property\LatitudeProperty $latitude)
 * @method HostelType setLogo(Property\LogoProperty $logo)
 * @method HostelType setLongitude(Property\LongitudeProperty $longitude)
 * @method HostelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HostelType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method HostelType setName(Property\NameProperty $name)
 * @method HostelType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method HostelType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HostelType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method HostelType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HostelType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method HostelType setPhoto(Property\PhotoProperty $photo)
 * @method HostelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HostelType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HostelType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method HostelType setReview(Property\ReviewProperty $review)
 * @method HostelType setSameAs(Property\SameAsProperty $sameAs)
 * @method HostelType setSlogan(Property\SloganProperty $slogan)
 * @method HostelType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method HostelType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method HostelType setStarRating(Property\StarRatingProperty $starRating)
 * @method HostelType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HostelType setTelephone(Property\TelephoneProperty $telephone)
 * @method HostelType setUrl(Property\UrlProperty $url)
 */
class HostelType extends LodgingBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Hostel';
	}
}