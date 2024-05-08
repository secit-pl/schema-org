<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An individual medical practitioner. For their official address use address, for affiliations to hospitals use hospitalAffiliation. The practicesAt property can be used to indicate MedicalOrganization hospitals, clinics, pharmacies etc. where this physician practices.
 * 
 * @method IndividualPhysicianType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method IndividualPhysicianType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method IndividualPhysicianType setAddress(Property\AddressProperty $address)
 * @method IndividualPhysicianType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method IndividualPhysicianType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method IndividualPhysicianType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method IndividualPhysicianType setAvailableService(Property\AvailableServiceProperty $availableService)
 * @method IndividualPhysicianType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method IndividualPhysicianType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method IndividualPhysicianType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method IndividualPhysicianType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method IndividualPhysicianType setDescription(Property\DescriptionProperty $description)
 * @method IndividualPhysicianType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method IndividualPhysicianType setEvent(Property\EventProperty $event)
 * @method IndividualPhysicianType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method IndividualPhysicianType setGeo(Property\GeoProperty $geo)
 * @method IndividualPhysicianType setGeoContains(Property\GeoContainsProperty $geoContains)
 * @method IndividualPhysicianType setGeoCoveredBy(Property\GeoCoveredByProperty $geoCoveredBy)
 * @method IndividualPhysicianType setGeoCovers(Property\GeoCoversProperty $geoCovers)
 * @method IndividualPhysicianType setGeoCrosses(Property\GeoCrossesProperty $geoCrosses)
 * @method IndividualPhysicianType setGeoDisjoint(Property\GeoDisjointProperty $geoDisjoint)
 * @method IndividualPhysicianType setGeoEquals(Property\GeoEqualsProperty $geoEquals)
 * @method IndividualPhysicianType setGeoIntersects(Property\GeoIntersectsProperty $geoIntersects)
 * @method IndividualPhysicianType setGeoOverlaps(Property\GeoOverlapsProperty $geoOverlaps)
 * @method IndividualPhysicianType setGeoTouches(Property\GeoTouchesProperty $geoTouches)
 * @method IndividualPhysicianType setGeoWithin(Property\GeoWithinProperty $geoWithin)
 * @method IndividualPhysicianType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method IndividualPhysicianType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method IndividualPhysicianType setHasMap(Property\HasMapProperty $hasMap)
 * @method IndividualPhysicianType setHospitalAffiliation(Property\HospitalAffiliationProperty $hospitalAffiliation)
 * @method IndividualPhysicianType setIdentifier(Property\IdentifierProperty $identifier)
 * @method IndividualPhysicianType setImage(Property\ImageProperty $image)
 * @method IndividualPhysicianType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method IndividualPhysicianType setIsicV4(Property\IsicV4Property $isicV4)
 * @method IndividualPhysicianType setKeywords(Property\KeywordsProperty $keywords)
 * @method IndividualPhysicianType setLatitude(Property\LatitudeProperty $latitude)
 * @method IndividualPhysicianType setLogo(Property\LogoProperty $logo)
 * @method IndividualPhysicianType setLongitude(Property\LongitudeProperty $longitude)
 * @method IndividualPhysicianType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method IndividualPhysicianType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method IndividualPhysicianType setMedicalSpecialty(Property\MedicalSpecialtyProperty $medicalSpecialty)
 * @method IndividualPhysicianType setName(Property\NameProperty $name)
 * @method IndividualPhysicianType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method IndividualPhysicianType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method IndividualPhysicianType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method IndividualPhysicianType setPhoto(Property\PhotoProperty $photo)
 * @method IndividualPhysicianType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method IndividualPhysicianType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method IndividualPhysicianType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method IndividualPhysicianType setReview(Property\ReviewProperty $review)
 * @method IndividualPhysicianType setSameAs(Property\SameAsProperty $sameAs)
 * @method IndividualPhysicianType setSlogan(Property\SloganProperty $slogan)
 * @method IndividualPhysicianType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method IndividualPhysicianType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method IndividualPhysicianType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method IndividualPhysicianType setTelephone(Property\TelephoneProperty $telephone)
 * @method IndividualPhysicianType setUrl(Property\UrlProperty $url)
 */
class IndividualPhysicianType extends PhysicianType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/IndividualPhysician';
	}
}