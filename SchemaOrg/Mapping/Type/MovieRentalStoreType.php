<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A movie rental store.
 * 
 * @method MovieRentalStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MovieRentalStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MovieRentalStoreType setAddress(Property\AddressProperty $address)
 * @method MovieRentalStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MovieRentalStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MovieRentalStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MovieRentalStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MovieRentalStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MovieRentalStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MovieRentalStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MovieRentalStoreType setDescription(Property\DescriptionProperty $description)
 * @method MovieRentalStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MovieRentalStoreType setEvent(Property\EventProperty $event)
 * @method MovieRentalStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MovieRentalStoreType setGeo(Property\GeoProperty $geo)
 * @method MovieRentalStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MovieRentalStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MovieRentalStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MovieRentalStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MovieRentalStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MovieRentalStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MovieRentalStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MovieRentalStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MovieRentalStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MovieRentalStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MovieRentalStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MovieRentalStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MovieRentalStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method MovieRentalStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MovieRentalStoreType setImage(Property\ImageProperty $image)
 * @method MovieRentalStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MovieRentalStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MovieRentalStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method MovieRentalStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method MovieRentalStoreType setLogo(Property\LogoProperty $logo)
 * @method MovieRentalStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method MovieRentalStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MovieRentalStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MovieRentalStoreType setName(Property\NameProperty $name)
 * @method MovieRentalStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MovieRentalStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MovieRentalStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MovieRentalStoreType setPhoto(Property\PhotoProperty $photo)
 * @method MovieRentalStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MovieRentalStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MovieRentalStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MovieRentalStoreType setReview(Property\ReviewProperty $review)
 * @method MovieRentalStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method MovieRentalStoreType setSlogan(Property\SloganProperty $slogan)
 * @method MovieRentalStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MovieRentalStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MovieRentalStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MovieRentalStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method MovieRentalStoreType setUrl(Property\UrlProperty $url)
 */
class MovieRentalStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MovieRentalStore';
	}
}