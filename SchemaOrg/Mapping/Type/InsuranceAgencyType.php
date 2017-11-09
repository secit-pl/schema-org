<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InsuranceAgencyType.
 * 
 * @method InsuranceAgencyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InsuranceAgencyType setAddress(Property\AddressProperty $address)
 * @method InsuranceAgencyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method InsuranceAgencyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InsuranceAgencyType setAlumni(Property\AlumniProperty $alumni)
 * @method InsuranceAgencyType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method InsuranceAgencyType setAward(Property\AwardProperty $award)
 * @method InsuranceAgencyType setBrand(Property\BrandProperty $brand)
 * @method InsuranceAgencyType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method InsuranceAgencyType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method InsuranceAgencyType setDepartment(Property\DepartmentProperty $department)
 * @method InsuranceAgencyType setDescription(Property\DescriptionProperty $description)
 * @method InsuranceAgencyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InsuranceAgencyType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method InsuranceAgencyType setDuns(Property\DunsProperty $duns)
 * @method InsuranceAgencyType setEmail(Property\EmailProperty $email)
 * @method InsuranceAgencyType setEmployee(Property\EmployeeProperty $employee)
 * @method InsuranceAgencyType setEvent(Property\EventProperty $event)
 * @method InsuranceAgencyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method InsuranceAgencyType setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification)
 * @method InsuranceAgencyType setFounder(Property\FounderProperty $founder)
 * @method InsuranceAgencyType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method InsuranceAgencyType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method InsuranceAgencyType setFunder(Property\FunderProperty $funder)
 * @method InsuranceAgencyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method InsuranceAgencyType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method InsuranceAgencyType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method InsuranceAgencyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InsuranceAgencyType setImage(Property\ImageProperty $image)
 * @method InsuranceAgencyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method InsuranceAgencyType setLegalName(Property\LegalNameProperty $legalName)
 * @method InsuranceAgencyType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method InsuranceAgencyType setLocation(Property\LocationProperty $location)
 * @method InsuranceAgencyType setLogo(Property\LogoProperty $logo)
 * @method InsuranceAgencyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InsuranceAgencyType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method InsuranceAgencyType setMember(Property\MemberProperty $member)
 * @method InsuranceAgencyType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method InsuranceAgencyType setNaics(Property\NaicsProperty $naics)
 * @method InsuranceAgencyType setName(Property\NameProperty $name)
 * @method InsuranceAgencyType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method InsuranceAgencyType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method InsuranceAgencyType setOwns(Property\OwnsProperty $owns)
 * @method InsuranceAgencyType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method InsuranceAgencyType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method InsuranceAgencyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InsuranceAgencyType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method InsuranceAgencyType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method InsuranceAgencyType setReview(Property\ReviewProperty $review)
 * @method InsuranceAgencyType setSameAs(Property\SameAsProperty $sameAs)
 * @method InsuranceAgencyType setSeeks(Property\SeeksProperty $seeks)
 * @method InsuranceAgencyType setSponsor(Property\SponsorProperty $sponsor)
 * @method InsuranceAgencyType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method InsuranceAgencyType setTaxID(Property\TaxIDProperty $taxID)
 * @method InsuranceAgencyType setTelephone(Property\TelephoneProperty $telephone)
 * @method InsuranceAgencyType setUrl(Property\UrlProperty $url)
 * @method InsuranceAgencyType setVatID(Property\VatIDProperty $vatID)
 */
class InsuranceAgencyType extends FinancialServiceType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InsuranceAgency';
	}
}