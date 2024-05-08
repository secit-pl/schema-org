<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A furniture store.
 * 
 * @method FurnitureStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method FurnitureStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FurnitureStoreType setAddress(Property\AddressProperty $address)
 * @method FurnitureStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FurnitureStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FurnitureStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method FurnitureStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method FurnitureStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method FurnitureStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method FurnitureStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method FurnitureStoreType setDescription(Property\DescriptionProperty $description)
 * @method FurnitureStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FurnitureStoreType setEvent(Property\EventProperty $event)
 * @method FurnitureStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method FurnitureStoreType setGeo(Property\GeoProperty $geo)
 * @method FurnitureStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method FurnitureStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method FurnitureStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method FurnitureStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method FurnitureStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method FurnitureStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method FurnitureStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method FurnitureStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method FurnitureStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method FurnitureStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method FurnitureStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method FurnitureStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method FurnitureStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method FurnitureStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FurnitureStoreType setImage(Property\ImageProperty $image)
 * @method FurnitureStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method FurnitureStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method FurnitureStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method FurnitureStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method FurnitureStoreType setLogo(Property\LogoProperty $logo)
 * @method FurnitureStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method FurnitureStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FurnitureStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method FurnitureStoreType setName(Property\NameProperty $name)
 * @method FurnitureStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method FurnitureStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method FurnitureStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method FurnitureStoreType setPhoto(Property\PhotoProperty $photo)
 * @method FurnitureStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FurnitureStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method FurnitureStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method FurnitureStoreType setReview(Property\ReviewProperty $review)
 * @method FurnitureStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method FurnitureStoreType setSlogan(Property\SloganProperty $slogan)
 * @method FurnitureStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method FurnitureStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method FurnitureStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FurnitureStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method FurnitureStoreType setUrl(Property\UrlProperty $url)
 */
class FurnitureStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FurnitureStore';
	}
}