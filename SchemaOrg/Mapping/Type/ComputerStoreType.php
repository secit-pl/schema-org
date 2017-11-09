<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ComputerStoreType.
 * 
 * @method ComputerStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ComputerStoreType setAddress(Property\AddressProperty $address)
 * @method ComputerStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ComputerStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ComputerStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method ComputerStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ComputerStoreType setAward(Property\AwardProperty $award)
 * @method ComputerStoreType setBrand(Property\BrandProperty $brand)
 * @method ComputerStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ComputerStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ComputerStoreType setDepartment(Property\DepartmentProperty $department)
 * @method ComputerStoreType setDescription(Property\DescriptionProperty $description)
 * @method ComputerStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ComputerStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ComputerStoreType setDuns(Property\DunsProperty $duns)
 * @method ComputerStoreType setEmail(Property\EmailProperty $email)
 * @method ComputerStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method ComputerStoreType setEvent(Property\EventProperty $event)
 * @method ComputerStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ComputerStoreType setFounder(Property\FounderProperty $founder)
 * @method ComputerStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ComputerStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ComputerStoreType setFunder(Property\FunderProperty $funder)
 * @method ComputerStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ComputerStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ComputerStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ComputerStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ComputerStoreType setImage(Property\ImageProperty $image)
 * @method ComputerStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ComputerStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method ComputerStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ComputerStoreType setLocation(Property\LocationProperty $location)
 * @method ComputerStoreType setLogo(Property\LogoProperty $logo)
 * @method ComputerStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ComputerStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ComputerStoreType setMember(Property\MemberProperty $member)
 * @method ComputerStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ComputerStoreType setNaics(Property\NaicsProperty $naics)
 * @method ComputerStoreType setName(Property\NameProperty $name)
 * @method ComputerStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ComputerStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ComputerStoreType setOwns(Property\OwnsProperty $owns)
 * @method ComputerStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ComputerStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ComputerStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ComputerStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ComputerStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ComputerStoreType setReview(Property\ReviewProperty $review)
 * @method ComputerStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method ComputerStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method ComputerStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method ComputerStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ComputerStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method ComputerStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method ComputerStoreType setUrl(Property\UrlProperty $url)
 * @method ComputerStoreType setVatID(Property\VatIDProperty $vatID)
 */
class ComputerStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ComputerStore';
	}
}