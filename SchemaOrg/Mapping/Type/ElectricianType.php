<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ElectricianType.
 * 
 * @method ElectricianType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ElectricianType setAddress(Property\AddressProperty $address)
 * @method ElectricianType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ElectricianType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ElectricianType setAlumni(Property\AlumniProperty $alumni)
 * @method ElectricianType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ElectricianType setAward(Property\AwardProperty $award)
 * @method ElectricianType setBrand(Property\BrandProperty $brand)
 * @method ElectricianType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ElectricianType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ElectricianType setDepartment(Property\DepartmentProperty $department)
 * @method ElectricianType setDescription(Property\DescriptionProperty $description)
 * @method ElectricianType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ElectricianType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ElectricianType setDuns(Property\DunsProperty $duns)
 * @method ElectricianType setEmail(Property\EmailProperty $email)
 * @method ElectricianType setEmployee(Property\EmployeeProperty $employee)
 * @method ElectricianType setEvent(Property\EventProperty $event)
 * @method ElectricianType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ElectricianType setFounder(Property\FounderProperty $founder)
 * @method ElectricianType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ElectricianType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ElectricianType setFunder(Property\FunderProperty $funder)
 * @method ElectricianType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ElectricianType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ElectricianType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ElectricianType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ElectricianType setImage(Property\ImageProperty $image)
 * @method ElectricianType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ElectricianType setLegalName(Property\LegalNameProperty $legalName)
 * @method ElectricianType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ElectricianType setLocation(Property\LocationProperty $location)
 * @method ElectricianType setLogo(Property\LogoProperty $logo)
 * @method ElectricianType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ElectricianType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ElectricianType setMember(Property\MemberProperty $member)
 * @method ElectricianType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ElectricianType setNaics(Property\NaicsProperty $naics)
 * @method ElectricianType setName(Property\NameProperty $name)
 * @method ElectricianType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ElectricianType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ElectricianType setOwns(Property\OwnsProperty $owns)
 * @method ElectricianType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ElectricianType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ElectricianType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ElectricianType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ElectricianType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ElectricianType setReview(Property\ReviewProperty $review)
 * @method ElectricianType setSameAs(Property\SameAsProperty $sameAs)
 * @method ElectricianType setSeeks(Property\SeeksProperty $seeks)
 * @method ElectricianType setSponsor(Property\SponsorProperty $sponsor)
 * @method ElectricianType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ElectricianType setTaxID(Property\TaxIDProperty $taxID)
 * @method ElectricianType setTelephone(Property\TelephoneProperty $telephone)
 * @method ElectricianType setUrl(Property\UrlProperty $url)
 * @method ElectricianType setVatID(Property\VatIDProperty $vatID)
 */
class ElectricianType extends HomeAndConstructionBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Electrician';
	}
}