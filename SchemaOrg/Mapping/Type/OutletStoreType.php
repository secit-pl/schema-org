<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OutletStoreType.
 * 
 * @method OutletStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OutletStoreType setAddress(Property\AddressProperty $address)
 * @method OutletStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method OutletStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OutletStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method OutletStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method OutletStoreType setAward(Property\AwardProperty $award)
 * @method OutletStoreType setBrand(Property\BrandProperty $brand)
 * @method OutletStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method OutletStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method OutletStoreType setDepartment(Property\DepartmentProperty $department)
 * @method OutletStoreType setDescription(Property\DescriptionProperty $description)
 * @method OutletStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OutletStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method OutletStoreType setDuns(Property\DunsProperty $duns)
 * @method OutletStoreType setEmail(Property\EmailProperty $email)
 * @method OutletStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method OutletStoreType setEvent(Property\EventProperty $event)
 * @method OutletStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method OutletStoreType setFounder(Property\FounderProperty $founder)
 * @method OutletStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method OutletStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method OutletStoreType setFunder(Property\FunderProperty $funder)
 * @method OutletStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method OutletStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method OutletStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method OutletStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OutletStoreType setImage(Property\ImageProperty $image)
 * @method OutletStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method OutletStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method OutletStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method OutletStoreType setLocation(Property\LocationProperty $location)
 * @method OutletStoreType setLogo(Property\LogoProperty $logo)
 * @method OutletStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OutletStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method OutletStoreType setMember(Property\MemberProperty $member)
 * @method OutletStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method OutletStoreType setNaics(Property\NaicsProperty $naics)
 * @method OutletStoreType setName(Property\NameProperty $name)
 * @method OutletStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method OutletStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method OutletStoreType setOwns(Property\OwnsProperty $owns)
 * @method OutletStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method OutletStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method OutletStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OutletStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method OutletStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method OutletStoreType setReview(Property\ReviewProperty $review)
 * @method OutletStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method OutletStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method OutletStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method OutletStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method OutletStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method OutletStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method OutletStoreType setUrl(Property\UrlProperty $url)
 * @method OutletStoreType setVatID(Property\VatIDProperty $vatID)
 */
class OutletStoreType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OutletStore';
	}
}