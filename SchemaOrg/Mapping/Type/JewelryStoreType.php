<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class JewelryStoreType.
 * 
 * @method JewelryStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method JewelryStoreType setAddress(Property\AddressProperty $address)
 * @method JewelryStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method JewelryStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method JewelryStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method JewelryStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method JewelryStoreType setAward(Property\AwardProperty $award)
 * @method JewelryStoreType setBrand(Property\BrandProperty $brand)
 * @method JewelryStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method JewelryStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method JewelryStoreType setDepartment(Property\DepartmentProperty $department)
 * @method JewelryStoreType setDescription(Property\DescriptionProperty $description)
 * @method JewelryStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method JewelryStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method JewelryStoreType setDuns(Property\DunsProperty $duns)
 * @method JewelryStoreType setEmail(Property\EmailProperty $email)
 * @method JewelryStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method JewelryStoreType setEvent(Property\EventProperty $event)
 * @method JewelryStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method JewelryStoreType setFounder(Property\FounderProperty $founder)
 * @method JewelryStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method JewelryStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method JewelryStoreType setFunder(Property\FunderProperty $funder)
 * @method JewelryStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method JewelryStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method JewelryStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method JewelryStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method JewelryStoreType setImage(Property\ImageProperty $image)
 * @method JewelryStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method JewelryStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method JewelryStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method JewelryStoreType setLocation(Property\LocationProperty $location)
 * @method JewelryStoreType setLogo(Property\LogoProperty $logo)
 * @method JewelryStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method JewelryStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method JewelryStoreType setMember(Property\MemberProperty $member)
 * @method JewelryStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method JewelryStoreType setNaics(Property\NaicsProperty $naics)
 * @method JewelryStoreType setName(Property\NameProperty $name)
 * @method JewelryStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method JewelryStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method JewelryStoreType setOwns(Property\OwnsProperty $owns)
 * @method JewelryStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method JewelryStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method JewelryStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method JewelryStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method JewelryStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method JewelryStoreType setReview(Property\ReviewProperty $review)
 * @method JewelryStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method JewelryStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method JewelryStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method JewelryStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method JewelryStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method JewelryStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method JewelryStoreType setUrl(Property\UrlProperty $url)
 * @method JewelryStoreType setVatID(Property\VatIDProperty $vatID)
 */
class JewelryStoreType extends LocalBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/JewelryStore';
	}
}