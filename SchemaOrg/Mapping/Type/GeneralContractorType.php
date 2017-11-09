<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GeneralContractorType.
 * 
 * @method GeneralContractorType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GeneralContractorType setAddress(Property\AddressProperty $address)
 * @method GeneralContractorType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GeneralContractorType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GeneralContractorType setAlumni(Property\AlumniProperty $alumni)
 * @method GeneralContractorType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method GeneralContractorType setAward(Property\AwardProperty $award)
 * @method GeneralContractorType setBrand(Property\BrandProperty $brand)
 * @method GeneralContractorType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method GeneralContractorType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method GeneralContractorType setDepartment(Property\DepartmentProperty $department)
 * @method GeneralContractorType setDescription(Property\DescriptionProperty $description)
 * @method GeneralContractorType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GeneralContractorType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method GeneralContractorType setDuns(Property\DunsProperty $duns)
 * @method GeneralContractorType setEmail(Property\EmailProperty $email)
 * @method GeneralContractorType setEmployee(Property\EmployeeProperty $employee)
 * @method GeneralContractorType setEvent(Property\EventProperty $event)
 * @method GeneralContractorType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GeneralContractorType setFounder(Property\FounderProperty $founder)
 * @method GeneralContractorType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method GeneralContractorType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method GeneralContractorType setFunder(Property\FunderProperty $funder)
 * @method GeneralContractorType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GeneralContractorType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method GeneralContractorType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method GeneralContractorType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GeneralContractorType setImage(Property\ImageProperty $image)
 * @method GeneralContractorType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GeneralContractorType setLegalName(Property\LegalNameProperty $legalName)
 * @method GeneralContractorType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method GeneralContractorType setLocation(Property\LocationProperty $location)
 * @method GeneralContractorType setLogo(Property\LogoProperty $logo)
 * @method GeneralContractorType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GeneralContractorType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method GeneralContractorType setMember(Property\MemberProperty $member)
 * @method GeneralContractorType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method GeneralContractorType setNaics(Property\NaicsProperty $naics)
 * @method GeneralContractorType setName(Property\NameProperty $name)
 * @method GeneralContractorType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method GeneralContractorType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method GeneralContractorType setOwns(Property\OwnsProperty $owns)
 * @method GeneralContractorType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method GeneralContractorType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method GeneralContractorType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GeneralContractorType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method GeneralContractorType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method GeneralContractorType setReview(Property\ReviewProperty $review)
 * @method GeneralContractorType setSameAs(Property\SameAsProperty $sameAs)
 * @method GeneralContractorType setSeeks(Property\SeeksProperty $seeks)
 * @method GeneralContractorType setSponsor(Property\SponsorProperty $sponsor)
 * @method GeneralContractorType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method GeneralContractorType setTaxID(Property\TaxIDProperty $taxID)
 * @method GeneralContractorType setTelephone(Property\TelephoneProperty $telephone)
 * @method GeneralContractorType setUrl(Property\UrlProperty $url)
 * @method GeneralContractorType setVatID(Property\VatIDProperty $vatID)
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