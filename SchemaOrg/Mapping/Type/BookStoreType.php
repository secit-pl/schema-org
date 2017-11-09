<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BookStoreType.
 * 
 * @method BookStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BookStoreType setAddress(Property\AddressProperty $address)
 * @method BookStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BookStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BookStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method BookStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method BookStoreType setAward(Property\AwardProperty $award)
 * @method BookStoreType setBrand(Property\BrandProperty $brand)
 * @method BookStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method BookStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BookStoreType setDepartment(Property\DepartmentProperty $department)
 * @method BookStoreType setDescription(Property\DescriptionProperty $description)
 * @method BookStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BookStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method BookStoreType setDuns(Property\DunsProperty $duns)
 * @method BookStoreType setEmail(Property\EmailProperty $email)
 * @method BookStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method BookStoreType setEvent(Property\EventProperty $event)
 * @method BookStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BookStoreType setFounder(Property\FounderProperty $founder)
 * @method BookStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method BookStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method BookStoreType setFunder(Property\FunderProperty $funder)
 * @method BookStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BookStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method BookStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method BookStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BookStoreType setImage(Property\ImageProperty $image)
 * @method BookStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BookStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method BookStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method BookStoreType setLocation(Property\LocationProperty $location)
 * @method BookStoreType setLogo(Property\LogoProperty $logo)
 * @method BookStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BookStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method BookStoreType setMember(Property\MemberProperty $member)
 * @method BookStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method BookStoreType setNaics(Property\NaicsProperty $naics)
 * @method BookStoreType setName(Property\NameProperty $name)
 * @method BookStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method BookStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BookStoreType setOwns(Property\OwnsProperty $owns)
 * @method BookStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method BookStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BookStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BookStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BookStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method BookStoreType setReview(Property\ReviewProperty $review)
 * @method BookStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method BookStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method BookStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method BookStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method BookStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method BookStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method BookStoreType setUrl(Property\UrlProperty $url)
 * @method BookStoreType setVatID(Property\VatIDProperty $vatID)
 */
class BookStoreType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BookStore';
	}
}