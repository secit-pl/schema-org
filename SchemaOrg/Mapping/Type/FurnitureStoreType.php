<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FurnitureStoreType.
 * 
 * @method FurnitureStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FurnitureStoreType setAddress(Property\AddressProperty $address)
 * @method FurnitureStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FurnitureStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FurnitureStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method FurnitureStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method FurnitureStoreType setAward(Property\AwardProperty $award)
 * @method FurnitureStoreType setBrand(Property\BrandProperty $brand)
 * @method FurnitureStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method FurnitureStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method FurnitureStoreType setDepartment(Property\DepartmentProperty $department)
 * @method FurnitureStoreType setDescription(Property\DescriptionProperty $description)
 * @method FurnitureStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FurnitureStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method FurnitureStoreType setDuns(Property\DunsProperty $duns)
 * @method FurnitureStoreType setEmail(Property\EmailProperty $email)
 * @method FurnitureStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method FurnitureStoreType setEvent(Property\EventProperty $event)
 * @method FurnitureStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method FurnitureStoreType setFounder(Property\FounderProperty $founder)
 * @method FurnitureStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method FurnitureStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method FurnitureStoreType setFunder(Property\FunderProperty $funder)
 * @method FurnitureStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method FurnitureStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method FurnitureStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method FurnitureStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FurnitureStoreType setImage(Property\ImageProperty $image)
 * @method FurnitureStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method FurnitureStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method FurnitureStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method FurnitureStoreType setLocation(Property\LocationProperty $location)
 * @method FurnitureStoreType setLogo(Property\LogoProperty $logo)
 * @method FurnitureStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FurnitureStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method FurnitureStoreType setMember(Property\MemberProperty $member)
 * @method FurnitureStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method FurnitureStoreType setNaics(Property\NaicsProperty $naics)
 * @method FurnitureStoreType setName(Property\NameProperty $name)
 * @method FurnitureStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method FurnitureStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method FurnitureStoreType setOwns(Property\OwnsProperty $owns)
 * @method FurnitureStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method FurnitureStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method FurnitureStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FurnitureStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method FurnitureStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method FurnitureStoreType setReview(Property\ReviewProperty $review)
 * @method FurnitureStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method FurnitureStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method FurnitureStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method FurnitureStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method FurnitureStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method FurnitureStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method FurnitureStoreType setUrl(Property\UrlProperty $url)
 * @method FurnitureStoreType setVatID(Property\VatIDProperty $vatID)
 */
class FurnitureStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FurnitureStore';
	}
}