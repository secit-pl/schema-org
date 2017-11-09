<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GasStationType.
 * 
 * @method GasStationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GasStationType setAddress(Property\AddressProperty $address)
 * @method GasStationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GasStationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GasStationType setAlumni(Property\AlumniProperty $alumni)
 * @method GasStationType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method GasStationType setAward(Property\AwardProperty $award)
 * @method GasStationType setBrand(Property\BrandProperty $brand)
 * @method GasStationType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method GasStationType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method GasStationType setDepartment(Property\DepartmentProperty $department)
 * @method GasStationType setDescription(Property\DescriptionProperty $description)
 * @method GasStationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GasStationType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method GasStationType setDuns(Property\DunsProperty $duns)
 * @method GasStationType setEmail(Property\EmailProperty $email)
 * @method GasStationType setEmployee(Property\EmployeeProperty $employee)
 * @method GasStationType setEvent(Property\EventProperty $event)
 * @method GasStationType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GasStationType setFounder(Property\FounderProperty $founder)
 * @method GasStationType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method GasStationType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method GasStationType setFunder(Property\FunderProperty $funder)
 * @method GasStationType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GasStationType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method GasStationType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method GasStationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GasStationType setImage(Property\ImageProperty $image)
 * @method GasStationType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GasStationType setLegalName(Property\LegalNameProperty $legalName)
 * @method GasStationType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method GasStationType setLocation(Property\LocationProperty $location)
 * @method GasStationType setLogo(Property\LogoProperty $logo)
 * @method GasStationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GasStationType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method GasStationType setMember(Property\MemberProperty $member)
 * @method GasStationType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method GasStationType setNaics(Property\NaicsProperty $naics)
 * @method GasStationType setName(Property\NameProperty $name)
 * @method GasStationType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method GasStationType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method GasStationType setOwns(Property\OwnsProperty $owns)
 * @method GasStationType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method GasStationType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method GasStationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GasStationType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method GasStationType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method GasStationType setReview(Property\ReviewProperty $review)
 * @method GasStationType setSameAs(Property\SameAsProperty $sameAs)
 * @method GasStationType setSeeks(Property\SeeksProperty $seeks)
 * @method GasStationType setSponsor(Property\SponsorProperty $sponsor)
 * @method GasStationType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method GasStationType setTaxID(Property\TaxIDProperty $taxID)
 * @method GasStationType setTelephone(Property\TelephoneProperty $telephone)
 * @method GasStationType setUrl(Property\UrlProperty $url)
 * @method GasStationType setVatID(Property\VatIDProperty $vatID)
 */
class GasStationType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GasStation';
	}
}