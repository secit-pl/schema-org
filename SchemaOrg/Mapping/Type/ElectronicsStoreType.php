<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ElectronicsStoreType.
 * 
 * @method ElectronicsStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ElectronicsStoreType setAddress(Property\AddressProperty $address)
 * @method ElectronicsStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ElectronicsStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ElectronicsStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method ElectronicsStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ElectronicsStoreType setAward(Property\AwardProperty $award)
 * @method ElectronicsStoreType setBrand(Property\BrandProperty $brand)
 * @method ElectronicsStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ElectronicsStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ElectronicsStoreType setDepartment(Property\DepartmentProperty $department)
 * @method ElectronicsStoreType setDescription(Property\DescriptionProperty $description)
 * @method ElectronicsStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ElectronicsStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ElectronicsStoreType setDuns(Property\DunsProperty $duns)
 * @method ElectronicsStoreType setEmail(Property\EmailProperty $email)
 * @method ElectronicsStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method ElectronicsStoreType setEvent(Property\EventProperty $event)
 * @method ElectronicsStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ElectronicsStoreType setFounder(Property\FounderProperty $founder)
 * @method ElectronicsStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ElectronicsStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ElectronicsStoreType setFunder(Property\FunderProperty $funder)
 * @method ElectronicsStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ElectronicsStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ElectronicsStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ElectronicsStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ElectronicsStoreType setImage(Property\ImageProperty $image)
 * @method ElectronicsStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ElectronicsStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method ElectronicsStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ElectronicsStoreType setLocation(Property\LocationProperty $location)
 * @method ElectronicsStoreType setLogo(Property\LogoProperty $logo)
 * @method ElectronicsStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ElectronicsStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ElectronicsStoreType setMember(Property\MemberProperty $member)
 * @method ElectronicsStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ElectronicsStoreType setNaics(Property\NaicsProperty $naics)
 * @method ElectronicsStoreType setName(Property\NameProperty $name)
 * @method ElectronicsStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ElectronicsStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ElectronicsStoreType setOwns(Property\OwnsProperty $owns)
 * @method ElectronicsStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ElectronicsStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ElectronicsStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ElectronicsStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ElectronicsStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ElectronicsStoreType setReview(Property\ReviewProperty $review)
 * @method ElectronicsStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method ElectronicsStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method ElectronicsStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method ElectronicsStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ElectronicsStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method ElectronicsStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method ElectronicsStoreType setUrl(Property\UrlProperty $url)
 * @method ElectronicsStoreType setVatID(Property\VatIDProperty $vatID)
 */
class ElectronicsStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ElectronicsStore';
	}
}