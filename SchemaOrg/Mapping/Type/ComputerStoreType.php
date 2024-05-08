<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A computer store.
 * 
 * @method ComputerStoreType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ComputerStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ComputerStoreType setAddress(Property\AddressProperty $address)
 * @method ComputerStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ComputerStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ComputerStoreType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method ComputerStoreType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method ComputerStoreType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method ComputerStoreType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method ComputerStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ComputerStoreType setDescription(Property\DescriptionProperty $description)
 * @method ComputerStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ComputerStoreType setEvent(Property\EventProperty $event)
 * @method ComputerStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ComputerStoreType setGeo(Property\GeoProperty $geo)
 * @method ComputerStoreType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method ComputerStoreType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method ComputerStoreType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method ComputerStoreType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method ComputerStoreType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method ComputerStoreType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method ComputerStoreType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method ComputerStoreType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method ComputerStoreType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method ComputerStoreType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method ComputerStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ComputerStoreType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ComputerStoreType setHasMap(Property\HasMapProperty $hasMap)
 * @method ComputerStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ComputerStoreType setImage(Property\ImageProperty $image)
 * @method ComputerStoreType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method ComputerStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ComputerStoreType setKeywords(Property\KeywordsProperty $keywords)
 * @method ComputerStoreType setLatitude(Property\LatitudeProperty $latitude)
 * @method ComputerStoreType setLogo(Property\LogoProperty $logo)
 * @method ComputerStoreType setLongitude(Property\LongitudeProperty $longitude)
 * @method ComputerStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ComputerStoreType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method ComputerStoreType setName(Property\NameProperty $name)
 * @method ComputerStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ComputerStoreType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method ComputerStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ComputerStoreType setPhoto(Property\PhotoProperty $photo)
 * @method ComputerStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ComputerStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ComputerStoreType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method ComputerStoreType setReview(Property\ReviewProperty $review)
 * @method ComputerStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method ComputerStoreType setSlogan(Property\SloganProperty $slogan)
 * @method ComputerStoreType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method ComputerStoreType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method ComputerStoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ComputerStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method ComputerStoreType setUrl(Property\UrlProperty $url)
 */
class ComputerStoreType extends StoreType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ComputerStore';
	}
}