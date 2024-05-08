<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A general contractor.
 * 
 * @method GeneralContractorType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method GeneralContractorType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GeneralContractorType setAddress(Property\AddressProperty $address)
 * @method GeneralContractorType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GeneralContractorType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GeneralContractorType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method GeneralContractorType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method GeneralContractorType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method GeneralContractorType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method GeneralContractorType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method GeneralContractorType setDescription(Property\DescriptionProperty $description)
 * @method GeneralContractorType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GeneralContractorType setEvent(Property\EventProperty $event)
 * @method GeneralContractorType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GeneralContractorType setGeo(Property\GeoProperty $geo)
 * @method GeneralContractorType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method GeneralContractorType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method GeneralContractorType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method GeneralContractorType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method GeneralContractorType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method GeneralContractorType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method GeneralContractorType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method GeneralContractorType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method GeneralContractorType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method GeneralContractorType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method GeneralContractorType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GeneralContractorType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method GeneralContractorType setHasMap(Property\HasMapProperty $hasMap)
 * @method GeneralContractorType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GeneralContractorType setImage(Property\ImageProperty $image)
 * @method GeneralContractorType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method GeneralContractorType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GeneralContractorType setKeywords(Property\KeywordsProperty $keywords)
 * @method GeneralContractorType setLatitude(Property\LatitudeProperty $latitude)
 * @method GeneralContractorType setLogo(Property\LogoProperty $logo)
 * @method GeneralContractorType setLongitude(Property\LongitudeProperty $longitude)
 * @method GeneralContractorType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GeneralContractorType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method GeneralContractorType setName(Property\NameProperty $name)
 * @method GeneralContractorType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method GeneralContractorType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method GeneralContractorType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method GeneralContractorType setPhoto(Property\PhotoProperty $photo)
 * @method GeneralContractorType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GeneralContractorType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method GeneralContractorType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method GeneralContractorType setReview(Property\ReviewProperty $review)
 * @method GeneralContractorType setSameAs(Property\SameAsProperty $sameAs)
 * @method GeneralContractorType setSlogan(Property\SloganProperty $slogan)
 * @method GeneralContractorType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method GeneralContractorType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method GeneralContractorType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GeneralContractorType setTelephone(Property\TelephoneProperty $telephone)
 * @method GeneralContractorType setUrl(Property\UrlProperty $url)
 */
class GeneralContractorType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GeneralContractor';
	}
}