<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WholesaleStoreType.
 * 
 * @method WholesaleStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WholesaleStoreType setAddress(Property\AddressProperty $address)
 * @method WholesaleStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method WholesaleStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WholesaleStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method WholesaleStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method WholesaleStoreType setAward(Property\AwardProperty $award)
 * @method WholesaleStoreType setBrand(Property\BrandProperty $brand)
 * @method WholesaleStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method WholesaleStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method WholesaleStoreType setDepartment(Property\DepartmentProperty $department)
 * @method WholesaleStoreType setDescription(Property\DescriptionProperty $description)
 * @method WholesaleStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WholesaleStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method WholesaleStoreType setDuns(Property\DunsProperty $duns)
 * @method WholesaleStoreType setEmail(Property\EmailProperty $email)
 * @method WholesaleStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method WholesaleStoreType setEvent(Property\EventProperty $event)
 * @method WholesaleStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method WholesaleStoreType setFounder(Property\FounderProperty $founder)
 * @method WholesaleStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method WholesaleStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method WholesaleStoreType setFunder(Property\FunderProperty $funder)
 * @method WholesaleStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method WholesaleStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method WholesaleStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method WholesaleStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WholesaleStoreType setImage(Property\ImageProperty $image)
 * @method WholesaleStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method WholesaleStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method WholesaleStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method WholesaleStoreType setLocation(Property\LocationProperty $location)
 * @method WholesaleStoreType setLogo(Property\LogoProperty $logo)
 * @method WholesaleStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WholesaleStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method WholesaleStoreType setMember(Property\MemberProperty $member)
 * @method WholesaleStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method WholesaleStoreType setNaics(Property\NaicsProperty $naics)
 * @method WholesaleStoreType setName(Property\NameProperty $name)
 * @method WholesaleStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method WholesaleStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method WholesaleStoreType setOwns(Property\OwnsProperty $owns)
 * @method WholesaleStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method WholesaleStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method WholesaleStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WholesaleStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method WholesaleStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method WholesaleStoreType setReview(Property\ReviewProperty $review)
 * @method WholesaleStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method WholesaleStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method WholesaleStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method WholesaleStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method WholesaleStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method WholesaleStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method WholesaleStoreType setUrl(Property\UrlProperty $url)
 * @method WholesaleStoreType setVatID(Property\VatIDProperty $vatID)
 */
class WholesaleStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WholesaleStore';
	}
}