<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MotelType.
 * 
 * @method MotelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MotelType setAddress(Property\AddressProperty $address)
 * @method MotelType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MotelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MotelType setAlumni(Property\AlumniProperty $alumni)
 * @method MotelType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MotelType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method MotelType setAudience(Property\AudienceProperty $audience)
 * @method MotelType setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage)
 * @method MotelType setAward(Property\AwardProperty $award)
 * @method MotelType setBrand(Property\BrandProperty $brand)
 * @method MotelType setCheckinTime(Property\CheckinTimeProperty $checkinTime)
 * @method MotelType setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime)
 * @method MotelType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method MotelType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MotelType setDepartment(Property\DepartmentProperty $department)
 * @method MotelType setDescription(Property\DescriptionProperty $description)
 * @method MotelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MotelType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method MotelType setDuns(Property\DunsProperty $duns)
 * @method MotelType setEmail(Property\EmailProperty $email)
 * @method MotelType setEmployee(Property\EmployeeProperty $employee)
 * @method MotelType setEvent(Property\EventProperty $event)
 * @method MotelType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MotelType setFounder(Property\FounderProperty $founder)
 * @method MotelType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method MotelType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method MotelType setFunder(Property\FunderProperty $funder)
 * @method MotelType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MotelType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method MotelType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method MotelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MotelType setImage(Property\ImageProperty $image)
 * @method MotelType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MotelType setLegalName(Property\LegalNameProperty $legalName)
 * @method MotelType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method MotelType setLocation(Property\LocationProperty $location)
 * @method MotelType setLogo(Property\LogoProperty $logo)
 * @method MotelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MotelType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method MotelType setMember(Property\MemberProperty $member)
 * @method MotelType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method MotelType setNaics(Property\NaicsProperty $naics)
 * @method MotelType setName(Property\NameProperty $name)
 * @method MotelType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method MotelType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MotelType setOwns(Property\OwnsProperty $owns)
 * @method MotelType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method MotelType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MotelType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method MotelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MotelType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MotelType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MotelType setReview(Property\ReviewProperty $review)
 * @method MotelType setSameAs(Property\SameAsProperty $sameAs)
 * @method MotelType setSeeks(Property\SeeksProperty $seeks)
 * @method MotelType setSponsor(Property\SponsorProperty $sponsor)
 * @method MotelType setStarRating(Property\StarRatingProperty $starRating)
 * @method MotelType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method MotelType setTaxID(Property\TaxIDProperty $taxID)
 * @method MotelType setTelephone(Property\TelephoneProperty $telephone)
 * @method MotelType setUrl(Property\UrlProperty $url)
 * @method MotelType setVatID(Property\VatIDProperty $vatID)
 */
class MotelType extends LodgingBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Motel';
	}
}