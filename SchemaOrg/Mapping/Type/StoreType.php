<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class StoreType.
 * 
 * @method StoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method StoreType setAddress(Property\AddressProperty $address)
 * @method StoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method StoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method StoreType setAlumni(Property\AlumniProperty $alumni)
 * @method StoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method StoreType setAward(Property\AwardProperty $award)
 * @method StoreType setBrand(Property\BrandProperty $brand)
 * @method StoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method StoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method StoreType setDepartment(Property\DepartmentProperty $department)
 * @method StoreType setDescription(Property\DescriptionProperty $description)
 * @method StoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method StoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method StoreType setDuns(Property\DunsProperty $duns)
 * @method StoreType setEmail(Property\EmailProperty $email)
 * @method StoreType setEmployee(Property\EmployeeProperty $employee)
 * @method StoreType setEvent(Property\EventProperty $event)
 * @method StoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method StoreType setFounder(Property\FounderProperty $founder)
 * @method StoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method StoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method StoreType setFunder(Property\FunderProperty $funder)
 * @method StoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method StoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method StoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method StoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method StoreType setImage(Property\ImageProperty $image)
 * @method StoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method StoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method StoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method StoreType setLocation(Property\LocationProperty $location)
 * @method StoreType setLogo(Property\LogoProperty $logo)
 * @method StoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method StoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method StoreType setMember(Property\MemberProperty $member)
 * @method StoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method StoreType setNaics(Property\NaicsProperty $naics)
 * @method StoreType setName(Property\NameProperty $name)
 * @method StoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method StoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method StoreType setOwns(Property\OwnsProperty $owns)
 * @method StoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method StoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method StoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method StoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method StoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method StoreType setReview(Property\ReviewProperty $review)
 * @method StoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method StoreType setSeeks(Property\SeeksProperty $seeks)
 * @method StoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method StoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method StoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method StoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method StoreType setUrl(Property\UrlProperty $url)
 * @method StoreType setVatID(Property\VatIDProperty $vatID)
 */
class StoreType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Store';
	}
}