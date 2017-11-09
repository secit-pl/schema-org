<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AccountingServiceType.
 * 
 * @method AccountingServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AccountingServiceType setAddress(Property\AddressProperty $address)
 * @method AccountingServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AccountingServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AccountingServiceType setAlumni(Property\AlumniProperty $alumni)
 * @method AccountingServiceType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AccountingServiceType setAward(Property\AwardProperty $award)
 * @method AccountingServiceType setBrand(Property\BrandProperty $brand)
 * @method AccountingServiceType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method AccountingServiceType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AccountingServiceType setDepartment(Property\DepartmentProperty $department)
 * @method AccountingServiceType setDescription(Property\DescriptionProperty $description)
 * @method AccountingServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AccountingServiceType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method AccountingServiceType setDuns(Property\DunsProperty $duns)
 * @method AccountingServiceType setEmail(Property\EmailProperty $email)
 * @method AccountingServiceType setEmployee(Property\EmployeeProperty $employee)
 * @method AccountingServiceType setEvent(Property\EventProperty $event)
 * @method AccountingServiceType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AccountingServiceType setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification)
 * @method AccountingServiceType setFounder(Property\FounderProperty $founder)
 * @method AccountingServiceType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method AccountingServiceType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method AccountingServiceType setFunder(Property\FunderProperty $funder)
 * @method AccountingServiceType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AccountingServiceType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method AccountingServiceType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method AccountingServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AccountingServiceType setImage(Property\ImageProperty $image)
 * @method AccountingServiceType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AccountingServiceType setLegalName(Property\LegalNameProperty $legalName)
 * @method AccountingServiceType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method AccountingServiceType setLocation(Property\LocationProperty $location)
 * @method AccountingServiceType setLogo(Property\LogoProperty $logo)
 * @method AccountingServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AccountingServiceType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method AccountingServiceType setMember(Property\MemberProperty $member)
 * @method AccountingServiceType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method AccountingServiceType setNaics(Property\NaicsProperty $naics)
 * @method AccountingServiceType setName(Property\NameProperty $name)
 * @method AccountingServiceType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method AccountingServiceType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AccountingServiceType setOwns(Property\OwnsProperty $owns)
 * @method AccountingServiceType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method AccountingServiceType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AccountingServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AccountingServiceType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AccountingServiceType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AccountingServiceType setReview(Property\ReviewProperty $review)
 * @method AccountingServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method AccountingServiceType setSeeks(Property\SeeksProperty $seeks)
 * @method AccountingServiceType setSponsor(Property\SponsorProperty $sponsor)
 * @method AccountingServiceType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method AccountingServiceType setTaxID(Property\TaxIDProperty $taxID)
 * @method AccountingServiceType setTelephone(Property\TelephoneProperty $telephone)
 * @method AccountingServiceType setUrl(Property\UrlProperty $url)
 * @method AccountingServiceType setVatID(Property\VatIDProperty $vatID)
 */
class AccountingServiceType extends FinancialServiceType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AccountingService';
	}
}