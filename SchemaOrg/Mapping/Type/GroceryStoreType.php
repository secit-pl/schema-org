<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GroceryStoreType.
 * 
 * @method GroceryStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GroceryStoreType setAddress(Property\AddressProperty $address)
 * @method GroceryStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GroceryStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GroceryStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method GroceryStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method GroceryStoreType setAward(Property\AwardProperty $award)
 * @method GroceryStoreType setBrand(Property\BrandProperty $brand)
 * @method GroceryStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method GroceryStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method GroceryStoreType setDepartment(Property\DepartmentProperty $department)
 * @method GroceryStoreType setDescription(Property\DescriptionProperty $description)
 * @method GroceryStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GroceryStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method GroceryStoreType setDuns(Property\DunsProperty $duns)
 * @method GroceryStoreType setEmail(Property\EmailProperty $email)
 * @method GroceryStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method GroceryStoreType setEvent(Property\EventProperty $event)
 * @method GroceryStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method GroceryStoreType setFounder(Property\FounderProperty $founder)
 * @method GroceryStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method GroceryStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method GroceryStoreType setFunder(Property\FunderProperty $funder)
 * @method GroceryStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method GroceryStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method GroceryStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method GroceryStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GroceryStoreType setImage(Property\ImageProperty $image)
 * @method GroceryStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method GroceryStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method GroceryStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method GroceryStoreType setLocation(Property\LocationProperty $location)
 * @method GroceryStoreType setLogo(Property\LogoProperty $logo)
 * @method GroceryStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GroceryStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method GroceryStoreType setMember(Property\MemberProperty $member)
 * @method GroceryStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method GroceryStoreType setNaics(Property\NaicsProperty $naics)
 * @method GroceryStoreType setName(Property\NameProperty $name)
 * @method GroceryStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method GroceryStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method GroceryStoreType setOwns(Property\OwnsProperty $owns)
 * @method GroceryStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method GroceryStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method GroceryStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GroceryStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method GroceryStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method GroceryStoreType setReview(Property\ReviewProperty $review)
 * @method GroceryStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method GroceryStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method GroceryStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method GroceryStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method GroceryStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method GroceryStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method GroceryStoreType setUrl(Property\UrlProperty $url)
 * @method GroceryStoreType setVatID(Property\VatIDProperty $vatID)
 */
class GroceryStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GroceryStore';
	}
}