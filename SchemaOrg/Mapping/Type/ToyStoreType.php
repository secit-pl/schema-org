<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A toy store.
 * 
 * @method ToyStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ToyStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ToyStoreType setAddress(Property\AddressProperty $address)
 * @method ToyStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ToyStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ToyStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ToyStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ToyStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ToyStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ToyStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ToyStoreType setDescription(Property\DescriptionProperty $description)
 * @method ToyStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ToyStoreType setEvent(Property\EventProperty $event)
 * @method ToyStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ToyStoreType setGeo(Property\GeoProperty $geo)
 * @method ToyStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ToyStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ToyStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ToyStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ToyStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ToyStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ToyStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ToyStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ToyStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ToyStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ToyStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ToyStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ToyStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method ToyStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ToyStoreType setImage(Property\ImageProperty $image)
 * @method ToyStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ToyStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ToyStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method ToyStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method ToyStoreType setLogo(Property\LogoProperty $logo)
 * @method ToyStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method ToyStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ToyStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ToyStoreType setName(Property\NameProperty $name)
 * @method ToyStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ToyStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ToyStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ToyStoreType setPhoto(Property\PhotoProperty $photo)
 * @method ToyStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ToyStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ToyStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ToyStoreType setReview(Property\ReviewProperty $review)
 * @method ToyStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method ToyStoreType setSlogan(Property\SloganProperty $slogan)
 * @method ToyStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ToyStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ToyStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ToyStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method ToyStoreType setUrl(Property\UrlProperty $url)
 */
class ToyStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ToyStore';
	}
}