<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class NailSalonType.
 * 
 * @method NailSalonType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NailSalonType setAddress(Property\AddressProperty $address)
 * @method NailSalonType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method NailSalonType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NailSalonType setAlumni(Property\AlumniProperty $alumni)
 * @method NailSalonType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method NailSalonType setAward(Property\AwardProperty $award)
 * @method NailSalonType setBrand(Property\BrandProperty $brand)
 * @method NailSalonType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method NailSalonType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method NailSalonType setDepartment(Property\DepartmentProperty $department)
 * @method NailSalonType setDescription(Property\DescriptionProperty $description)
 * @method NailSalonType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NailSalonType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method NailSalonType setDuns(Property\DunsProperty $duns)
 * @method NailSalonType setEmail(Property\EmailProperty $email)
 * @method NailSalonType setEmployee(Property\EmployeeProperty $employee)
 * @method NailSalonType setEvent(Property\EventProperty $event)
 * @method NailSalonType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method NailSalonType setFounder(Property\FounderProperty $founder)
 * @method NailSalonType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method NailSalonType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method NailSalonType setFunder(Property\FunderProperty $funder)
 * @method NailSalonType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method NailSalonType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method NailSalonType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method NailSalonType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NailSalonType setImage(Property\ImageProperty $image)
 * @method NailSalonType setIsicV4(Property\IsicV4Property $isicV4)
 * @method NailSalonType setLegalName(Property\LegalNameProperty $legalName)
 * @method NailSalonType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method NailSalonType setLocation(Property\LocationProperty $location)
 * @method NailSalonType setLogo(Property\LogoProperty $logo)
 * @method NailSalonType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NailSalonType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method NailSalonType setMember(Property\MemberProperty $member)
 * @method NailSalonType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method NailSalonType setNaics(Property\NaicsProperty $naics)
 * @method NailSalonType setName(Property\NameProperty $name)
 * @method NailSalonType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method NailSalonType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method NailSalonType setOwns(Property\OwnsProperty $owns)
 * @method NailSalonType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method NailSalonType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method NailSalonType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NailSalonType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method NailSalonType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method NailSalonType setReview(Property\ReviewProperty $review)
 * @method NailSalonType setSameAs(Property\SameAsProperty $sameAs)
 * @method NailSalonType setSeeks(Property\SeeksProperty $seeks)
 * @method NailSalonType setSponsor(Property\SponsorProperty $sponsor)
 * @method NailSalonType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method NailSalonType setTaxID(Property\TaxIDProperty $taxID)
 * @method NailSalonType setTelephone(Property\TelephoneProperty $telephone)
 * @method NailSalonType setUrl(Property\UrlProperty $url)
 * @method NailSalonType setVatID(Property\VatIDProperty $vatID)
 */
class NailSalonType extends HealthAndBeautyBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NailSalon';
	}
}