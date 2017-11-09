<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FinancialServiceType.
 * 
 * @method FinancialServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FinancialServiceType setAddress(Property\AddressProperty $address)
 * @method FinancialServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FinancialServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FinancialServiceType setAlumni(Property\AlumniProperty $alumni)
 * @method FinancialServiceType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method FinancialServiceType setAward(Property\AwardProperty $award)
 * @method FinancialServiceType setBrand(Property\BrandProperty $brand)
 * @method FinancialServiceType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method FinancialServiceType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method FinancialServiceType setDepartment(Property\DepartmentProperty $department)
 * @method FinancialServiceType setDescription(Property\DescriptionProperty $description)
 * @method FinancialServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FinancialServiceType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method FinancialServiceType setDuns(Property\DunsProperty $duns)
 * @method FinancialServiceType setEmail(Property\EmailProperty $email)
 * @method FinancialServiceType setEmployee(Property\EmployeeProperty $employee)
 * @method FinancialServiceType setEvent(Property\EventProperty $event)
 * @method FinancialServiceType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method FinancialServiceType setFounder(Property\FounderProperty $founder)
 * @method FinancialServiceType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method FinancialServiceType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method FinancialServiceType setFunder(Property\FunderProperty $funder)
 * @method FinancialServiceType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method FinancialServiceType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method FinancialServiceType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method FinancialServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FinancialServiceType setImage(Property\ImageProperty $image)
 * @method FinancialServiceType setIsicV4(Property\IsicV4Property $isicV4)
 * @method FinancialServiceType setLegalName(Property\LegalNameProperty $legalName)
 * @method FinancialServiceType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method FinancialServiceType setLocation(Property\LocationProperty $location)
 * @method FinancialServiceType setLogo(Property\LogoProperty $logo)
 * @method FinancialServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FinancialServiceType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method FinancialServiceType setMember(Property\MemberProperty $member)
 * @method FinancialServiceType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method FinancialServiceType setNaics(Property\NaicsProperty $naics)
 * @method FinancialServiceType setName(Property\NameProperty $name)
 * @method FinancialServiceType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method FinancialServiceType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method FinancialServiceType setOwns(Property\OwnsProperty $owns)
 * @method FinancialServiceType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method FinancialServiceType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method FinancialServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FinancialServiceType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method FinancialServiceType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method FinancialServiceType setReview(Property\ReviewProperty $review)
 * @method FinancialServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method FinancialServiceType setSeeks(Property\SeeksProperty $seeks)
 * @method FinancialServiceType setSponsor(Property\SponsorProperty $sponsor)
 * @method FinancialServiceType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method FinancialServiceType setTaxID(Property\TaxIDProperty $taxID)
 * @method FinancialServiceType setTelephone(Property\TelephoneProperty $telephone)
 * @method FinancialServiceType setUrl(Property\UrlProperty $url)
 * @method FinancialServiceType setVatID(Property\VatIDProperty $vatID)
 */
class FinancialServiceType extends LocalBusinessType {

	/**
	 * @var Property\FeesAndCommissionsSpecificationProperty
	 */
	private $feesAndCommissionsSpecification;

	/**
	 * Get fees and commissions specification.
	 * 
	 * @return Property\FeesAndCommissionsSpecificationProperty
	 */
	public function getFeesAndCommissionsSpecification() {
		return $this->feesAndCommissionsSpecification;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FinancialService';
	}

	/**
	 * Set fees and commissions specification.
	 * 
	 * @param Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification
	 * @return FinancialServiceType
	 */
	public function setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification) {
		$this->feesAndCommissionsSpecification = $feesAndCommissionsSpecification;

		return $this;
	}
}