<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BikeStoreType.
 * 
 * @method BikeStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BikeStoreType setAddress(Property\AddressProperty $address)
 * @method BikeStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BikeStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BikeStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method BikeStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method BikeStoreType setAward(Property\AwardProperty $award)
 * @method BikeStoreType setBrand(Property\BrandProperty $brand)
 * @method BikeStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method BikeStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BikeStoreType setDepartment(Property\DepartmentProperty $department)
 * @method BikeStoreType setDescription(Property\DescriptionProperty $description)
 * @method BikeStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BikeStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method BikeStoreType setDuns(Property\DunsProperty $duns)
 * @method BikeStoreType setEmail(Property\EmailProperty $email)
 * @method BikeStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method BikeStoreType setEvent(Property\EventProperty $event)
 * @method BikeStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BikeStoreType setFounder(Property\FounderProperty $founder)
 * @method BikeStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method BikeStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method BikeStoreType setFunder(Property\FunderProperty $funder)
 * @method BikeStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BikeStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method BikeStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method BikeStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BikeStoreType setImage(Property\ImageProperty $image)
 * @method BikeStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BikeStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method BikeStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method BikeStoreType setLocation(Property\LocationProperty $location)
 * @method BikeStoreType setLogo(Property\LogoProperty $logo)
 * @method BikeStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BikeStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method BikeStoreType setMember(Property\MemberProperty $member)
 * @method BikeStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method BikeStoreType setNaics(Property\NaicsProperty $naics)
 * @method BikeStoreType setName(Property\NameProperty $name)
 * @method BikeStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method BikeStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BikeStoreType setOwns(Property\OwnsProperty $owns)
 * @method BikeStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method BikeStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BikeStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BikeStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BikeStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method BikeStoreType setReview(Property\ReviewProperty $review)
 * @method BikeStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method BikeStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method BikeStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method BikeStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method BikeStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method BikeStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method BikeStoreType setUrl(Property\UrlProperty $url)
 * @method BikeStoreType setVatID(Property\VatIDProperty $vatID)
 */
class BikeStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BikeStore';
	}
}