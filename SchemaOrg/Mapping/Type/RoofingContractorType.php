<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RoofingContractorType.
 * 
 * @method RoofingContractorType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RoofingContractorType setAddress(Property\AddressProperty $address)
 * @method RoofingContractorType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RoofingContractorType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RoofingContractorType setAlumni(Property\AlumniProperty $alumni)
 * @method RoofingContractorType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method RoofingContractorType setAward(Property\AwardProperty $award)
 * @method RoofingContractorType setBrand(Property\BrandProperty $brand)
 * @method RoofingContractorType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method RoofingContractorType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method RoofingContractorType setDepartment(Property\DepartmentProperty $department)
 * @method RoofingContractorType setDescription(Property\DescriptionProperty $description)
 * @method RoofingContractorType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RoofingContractorType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method RoofingContractorType setDuns(Property\DunsProperty $duns)
 * @method RoofingContractorType setEmail(Property\EmailProperty $email)
 * @method RoofingContractorType setEmployee(Property\EmployeeProperty $employee)
 * @method RoofingContractorType setEvent(Property\EventProperty $event)
 * @method RoofingContractorType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RoofingContractorType setFounder(Property\FounderProperty $founder)
 * @method RoofingContractorType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method RoofingContractorType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method RoofingContractorType setFunder(Property\FunderProperty $funder)
 * @method RoofingContractorType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RoofingContractorType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method RoofingContractorType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method RoofingContractorType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RoofingContractorType setImage(Property\ImageProperty $image)
 * @method RoofingContractorType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RoofingContractorType setLegalName(Property\LegalNameProperty $legalName)
 * @method RoofingContractorType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method RoofingContractorType setLocation(Property\LocationProperty $location)
 * @method RoofingContractorType setLogo(Property\LogoProperty $logo)
 * @method RoofingContractorType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RoofingContractorType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method RoofingContractorType setMember(Property\MemberProperty $member)
 * @method RoofingContractorType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method RoofingContractorType setNaics(Property\NaicsProperty $naics)
 * @method RoofingContractorType setName(Property\NameProperty $name)
 * @method RoofingContractorType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method RoofingContractorType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method RoofingContractorType setOwns(Property\OwnsProperty $owns)
 * @method RoofingContractorType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method RoofingContractorType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method RoofingContractorType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RoofingContractorType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method RoofingContractorType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method RoofingContractorType setReview(Property\ReviewProperty $review)
 * @method RoofingContractorType setSameAs(Property\SameAsProperty $sameAs)
 * @method RoofingContractorType setSeeks(Property\SeeksProperty $seeks)
 * @method RoofingContractorType setSponsor(Property\SponsorProperty $sponsor)
 * @method RoofingContractorType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method RoofingContractorType setTaxID(Property\TaxIDProperty $taxID)
 * @method RoofingContractorType setTelephone(Property\TelephoneProperty $telephone)
 * @method RoofingContractorType setUrl(Property\UrlProperty $url)
 * @method RoofingContractorType setVatID(Property\VatIDProperty $vatID)
 */
class RoofingContractorType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RoofingContractor';
	}
}