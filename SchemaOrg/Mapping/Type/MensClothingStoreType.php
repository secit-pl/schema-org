<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A men's clothing store.
 * 
 * @method MensClothingStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MensClothingStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MensClothingStoreType setAddress(Property\AddressProperty $address)
 * @method MensClothingStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MensClothingStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MensClothingStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MensClothingStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MensClothingStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MensClothingStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MensClothingStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MensClothingStoreType setDescription(Property\DescriptionProperty $description)
 * @method MensClothingStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MensClothingStoreType setEvent(Property\EventProperty $event)
 * @method MensClothingStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MensClothingStoreType setGeo(Property\GeoProperty $geo)
 * @method MensClothingStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method MensClothingStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method MensClothingStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method MensClothingStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method MensClothingStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method MensClothingStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method MensClothingStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method MensClothingStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method MensClothingStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method MensClothingStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method MensClothingStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MensClothingStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method MensClothingStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method MensClothingStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MensClothingStoreType setImage(Property\ImageProperty $image)
 * @method MensClothingStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MensClothingStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MensClothingStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method MensClothingStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method MensClothingStoreType setLogo(Property\LogoProperty $logo)
 * @method MensClothingStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method MensClothingStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MensClothingStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MensClothingStoreType setName(Property\NameProperty $name)
 * @method MensClothingStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MensClothingStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MensClothingStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MensClothingStoreType setPhoto(Property\PhotoProperty $photo)
 * @method MensClothingStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MensClothingStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MensClothingStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MensClothingStoreType setReview(Property\ReviewProperty $review)
 * @method MensClothingStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method MensClothingStoreType setSlogan(Property\SloganProperty $slogan)
 * @method MensClothingStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MensClothingStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MensClothingStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MensClothingStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method MensClothingStoreType setUrl(Property\UrlProperty $url)
 */
class MensClothingStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MensClothingStore';
	}
}