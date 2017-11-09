<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TireShopType.
 * 
 * @method TireShopType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TireShopType setAddress(Property\AddressProperty $address)
 * @method TireShopType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TireShopType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TireShopType setAlumni(Property\AlumniProperty $alumni)
 * @method TireShopType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method TireShopType setAward(Property\AwardProperty $award)
 * @method TireShopType setBrand(Property\BrandProperty $brand)
 * @method TireShopType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method TireShopType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method TireShopType setDepartment(Property\DepartmentProperty $department)
 * @method TireShopType setDescription(Property\DescriptionProperty $description)
 * @method TireShopType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TireShopType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method TireShopType setDuns(Property\DunsProperty $duns)
 * @method TireShopType setEmail(Property\EmailProperty $email)
 * @method TireShopType setEmployee(Property\EmployeeProperty $employee)
 * @method TireShopType setEvent(Property\EventProperty $event)
 * @method TireShopType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method TireShopType setFounder(Property\FounderProperty $founder)
 * @method TireShopType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method TireShopType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method TireShopType setFunder(Property\FunderProperty $funder)
 * @method TireShopType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method TireShopType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method TireShopType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method TireShopType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TireShopType setImage(Property\ImageProperty $image)
 * @method TireShopType setIsicV4(Property\IsicV4Property $isicV4)
 * @method TireShopType setLegalName(Property\LegalNameProperty $legalName)
 * @method TireShopType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method TireShopType setLocation(Property\LocationProperty $location)
 * @method TireShopType setLogo(Property\LogoProperty $logo)
 * @method TireShopType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TireShopType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method TireShopType setMember(Property\MemberProperty $member)
 * @method TireShopType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method TireShopType setNaics(Property\NaicsProperty $naics)
 * @method TireShopType setName(Property\NameProperty $name)
 * @method TireShopType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method TireShopType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method TireShopType setOwns(Property\OwnsProperty $owns)
 * @method TireShopType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method TireShopType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method TireShopType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TireShopType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method TireShopType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method TireShopType setReview(Property\ReviewProperty $review)
 * @method TireShopType setSameAs(Property\SameAsProperty $sameAs)
 * @method TireShopType setSeeks(Property\SeeksProperty $seeks)
 * @method TireShopType setSponsor(Property\SponsorProperty $sponsor)
 * @method TireShopType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method TireShopType setTaxID(Property\TaxIDProperty $taxID)
 * @method TireShopType setTelephone(Property\TelephoneProperty $telephone)
 * @method TireShopType setUrl(Property\UrlProperty $url)
 * @method TireShopType setVatID(Property\VatIDProperty $vatID)
 */
class TireShopType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TireShop';
	}
}