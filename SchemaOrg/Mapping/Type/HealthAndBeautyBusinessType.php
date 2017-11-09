<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HealthAndBeautyBusinessType.
 * 
 * @method HealthAndBeautyBusinessType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HealthAndBeautyBusinessType setAddress(Property\AddressProperty $address)
 * @method HealthAndBeautyBusinessType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HealthAndBeautyBusinessType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HealthAndBeautyBusinessType setAlumni(Property\AlumniProperty $alumni)
 * @method HealthAndBeautyBusinessType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method HealthAndBeautyBusinessType setAward(Property\AwardProperty $award)
 * @method HealthAndBeautyBusinessType setBrand(Property\BrandProperty $brand)
 * @method HealthAndBeautyBusinessType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method HealthAndBeautyBusinessType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HealthAndBeautyBusinessType setDepartment(Property\DepartmentProperty $department)
 * @method HealthAndBeautyBusinessType setDescription(Property\DescriptionProperty $description)
 * @method HealthAndBeautyBusinessType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HealthAndBeautyBusinessType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method HealthAndBeautyBusinessType setDuns(Property\DunsProperty $duns)
 * @method HealthAndBeautyBusinessType setEmail(Property\EmailProperty $email)
 * @method HealthAndBeautyBusinessType setEmployee(Property\EmployeeProperty $employee)
 * @method HealthAndBeautyBusinessType setEvent(Property\EventProperty $event)
 * @method HealthAndBeautyBusinessType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HealthAndBeautyBusinessType setFounder(Property\FounderProperty $founder)
 * @method HealthAndBeautyBusinessType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method HealthAndBeautyBusinessType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method HealthAndBeautyBusinessType setFunder(Property\FunderProperty $funder)
 * @method HealthAndBeautyBusinessType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HealthAndBeautyBusinessType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method HealthAndBeautyBusinessType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method HealthAndBeautyBusinessType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HealthAndBeautyBusinessType setImage(Property\ImageProperty $image)
 * @method HealthAndBeautyBusinessType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HealthAndBeautyBusinessType setLegalName(Property\LegalNameProperty $legalName)
 * @method HealthAndBeautyBusinessType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method HealthAndBeautyBusinessType setLocation(Property\LocationProperty $location)
 * @method HealthAndBeautyBusinessType setLogo(Property\LogoProperty $logo)
 * @method HealthAndBeautyBusinessType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HealthAndBeautyBusinessType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method HealthAndBeautyBusinessType setMember(Property\MemberProperty $member)
 * @method HealthAndBeautyBusinessType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method HealthAndBeautyBusinessType setNaics(Property\NaicsProperty $naics)
 * @method HealthAndBeautyBusinessType setName(Property\NameProperty $name)
 * @method HealthAndBeautyBusinessType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method HealthAndBeautyBusinessType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HealthAndBeautyBusinessType setOwns(Property\OwnsProperty $owns)
 * @method HealthAndBeautyBusinessType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method HealthAndBeautyBusinessType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HealthAndBeautyBusinessType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HealthAndBeautyBusinessType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HealthAndBeautyBusinessType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method HealthAndBeautyBusinessType setReview(Property\ReviewProperty $review)
 * @method HealthAndBeautyBusinessType setSameAs(Property\SameAsProperty $sameAs)
 * @method HealthAndBeautyBusinessType setSeeks(Property\SeeksProperty $seeks)
 * @method HealthAndBeautyBusinessType setSponsor(Property\SponsorProperty $sponsor)
 * @method HealthAndBeautyBusinessType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method HealthAndBeautyBusinessType setTaxID(Property\TaxIDProperty $taxID)
 * @method HealthAndBeautyBusinessType setTelephone(Property\TelephoneProperty $telephone)
 * @method HealthAndBeautyBusinessType setUrl(Property\UrlProperty $url)
 * @method HealthAndBeautyBusinessType setVatID(Property\VatIDProperty $vatID)
 */
class HealthAndBeautyBusinessType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HealthAndBeautyBusiness';
	}
}