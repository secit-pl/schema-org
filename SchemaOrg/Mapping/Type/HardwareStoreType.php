<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HardwareStoreType.
 * 
 * @method HardwareStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HardwareStoreType setAddress(Property\AddressProperty $address)
 * @method HardwareStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HardwareStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HardwareStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method HardwareStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method HardwareStoreType setAward(Property\AwardProperty $award)
 * @method HardwareStoreType setBrand(Property\BrandProperty $brand)
 * @method HardwareStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method HardwareStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HardwareStoreType setDepartment(Property\DepartmentProperty $department)
 * @method HardwareStoreType setDescription(Property\DescriptionProperty $description)
 * @method HardwareStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HardwareStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method HardwareStoreType setDuns(Property\DunsProperty $duns)
 * @method HardwareStoreType setEmail(Property\EmailProperty $email)
 * @method HardwareStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method HardwareStoreType setEvent(Property\EventProperty $event)
 * @method HardwareStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HardwareStoreType setFounder(Property\FounderProperty $founder)
 * @method HardwareStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method HardwareStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method HardwareStoreType setFunder(Property\FunderProperty $funder)
 * @method HardwareStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HardwareStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method HardwareStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method HardwareStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HardwareStoreType setImage(Property\ImageProperty $image)
 * @method HardwareStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HardwareStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method HardwareStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method HardwareStoreType setLocation(Property\LocationProperty $location)
 * @method HardwareStoreType setLogo(Property\LogoProperty $logo)
 * @method HardwareStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HardwareStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method HardwareStoreType setMember(Property\MemberProperty $member)
 * @method HardwareStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method HardwareStoreType setNaics(Property\NaicsProperty $naics)
 * @method HardwareStoreType setName(Property\NameProperty $name)
 * @method HardwareStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method HardwareStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HardwareStoreType setOwns(Property\OwnsProperty $owns)
 * @method HardwareStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method HardwareStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HardwareStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HardwareStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HardwareStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method HardwareStoreType setReview(Property\ReviewProperty $review)
 * @method HardwareStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method HardwareStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method HardwareStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method HardwareStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method HardwareStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method HardwareStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method HardwareStoreType setUrl(Property\UrlProperty $url)
 * @method HardwareStoreType setVatID(Property\VatIDProperty $vatID)
 */
class HardwareStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HardwareStore';
	}
}