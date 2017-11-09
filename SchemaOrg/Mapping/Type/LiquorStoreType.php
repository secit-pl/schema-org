<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LiquorStoreType.
 * 
 * @method LiquorStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LiquorStoreType setAddress(Property\AddressProperty $address)
 * @method LiquorStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LiquorStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LiquorStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method LiquorStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method LiquorStoreType setAward(Property\AwardProperty $award)
 * @method LiquorStoreType setBrand(Property\BrandProperty $brand)
 * @method LiquorStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method LiquorStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method LiquorStoreType setDepartment(Property\DepartmentProperty $department)
 * @method LiquorStoreType setDescription(Property\DescriptionProperty $description)
 * @method LiquorStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LiquorStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method LiquorStoreType setDuns(Property\DunsProperty $duns)
 * @method LiquorStoreType setEmail(Property\EmailProperty $email)
 * @method LiquorStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method LiquorStoreType setEvent(Property\EventProperty $event)
 * @method LiquorStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method LiquorStoreType setFounder(Property\FounderProperty $founder)
 * @method LiquorStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method LiquorStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method LiquorStoreType setFunder(Property\FunderProperty $funder)
 * @method LiquorStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method LiquorStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method LiquorStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method LiquorStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LiquorStoreType setImage(Property\ImageProperty $image)
 * @method LiquorStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method LiquorStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method LiquorStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method LiquorStoreType setLocation(Property\LocationProperty $location)
 * @method LiquorStoreType setLogo(Property\LogoProperty $logo)
 * @method LiquorStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LiquorStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method LiquorStoreType setMember(Property\MemberProperty $member)
 * @method LiquorStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method LiquorStoreType setNaics(Property\NaicsProperty $naics)
 * @method LiquorStoreType setName(Property\NameProperty $name)
 * @method LiquorStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method LiquorStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method LiquorStoreType setOwns(Property\OwnsProperty $owns)
 * @method LiquorStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method LiquorStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method LiquorStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LiquorStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method LiquorStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method LiquorStoreType setReview(Property\ReviewProperty $review)
 * @method LiquorStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method LiquorStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method LiquorStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method LiquorStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method LiquorStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method LiquorStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method LiquorStoreType setUrl(Property\UrlProperty $url)
 * @method LiquorStoreType setVatID(Property\VatIDProperty $vatID)
 */
class LiquorStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LiquorStore';
	}
}