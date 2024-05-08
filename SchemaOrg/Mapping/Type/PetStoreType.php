<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A pet store.
 * 
 * @method PetStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method PetStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PetStoreType setAddress(Property\AddressProperty $address)
 * @method PetStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PetStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PetStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method PetStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method PetStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method PetStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method PetStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PetStoreType setDescription(Property\DescriptionProperty $description)
 * @method PetStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PetStoreType setEvent(Property\EventProperty $event)
 * @method PetStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PetStoreType setGeo(Property\GeoProperty $geo)
 * @method PetStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method PetStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method PetStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method PetStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method PetStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method PetStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method PetStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method PetStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method PetStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method PetStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method PetStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PetStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PetStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method PetStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PetStoreType setImage(Property\ImageProperty $image)
 * @method PetStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method PetStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PetStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method PetStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method PetStoreType setLogo(Property\LogoProperty $logo)
 * @method PetStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method PetStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PetStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method PetStoreType setName(Property\NameProperty $name)
 * @method PetStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PetStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method PetStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PetStoreType setPhoto(Property\PhotoProperty $photo)
 * @method PetStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PetStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PetStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method PetStoreType setReview(Property\ReviewProperty $review)
 * @method PetStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method PetStoreType setSlogan(Property\SloganProperty $slogan)
 * @method PetStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method PetStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method PetStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PetStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method PetStoreType setUrl(Property\UrlProperty $url)
 */
class PetStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PetStore';
	}
}