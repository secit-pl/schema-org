<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A bookstore.
 * 
 * @method BookStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method BookStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BookStoreType setAddress(Property\AddressProperty $address)
 * @method BookStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BookStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BookStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method BookStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method BookStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method BookStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method BookStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BookStoreType setDescription(Property\DescriptionProperty $description)
 * @method BookStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BookStoreType setEvent(Property\EventProperty $event)
 * @method BookStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BookStoreType setGeo(Property\GeoProperty $geo)
 * @method BookStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method BookStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method BookStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method BookStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method BookStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method BookStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method BookStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method BookStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method BookStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method BookStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method BookStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BookStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BookStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method BookStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BookStoreType setImage(Property\ImageProperty $image)
 * @method BookStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method BookStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BookStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method BookStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method BookStoreType setLogo(Property\LogoProperty $logo)
 * @method BookStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method BookStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BookStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method BookStoreType setName(Property\NameProperty $name)
 * @method BookStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BookStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method BookStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BookStoreType setPhoto(Property\PhotoProperty $photo)
 * @method BookStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BookStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BookStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method BookStoreType setReview(Property\ReviewProperty $review)
 * @method BookStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method BookStoreType setSlogan(Property\SloganProperty $slogan)
 * @method BookStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method BookStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method BookStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BookStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method BookStoreType setUrl(Property\UrlProperty $url)
 */
class BookStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BookStore';
	}
}