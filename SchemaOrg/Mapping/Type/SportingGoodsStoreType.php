<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SportingGoodsStoreType.
 * 
 * @method SportingGoodsStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SportingGoodsStoreType setAddress(Property\AddressProperty $address)
 * @method SportingGoodsStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SportingGoodsStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SportingGoodsStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method SportingGoodsStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method SportingGoodsStoreType setAward(Property\AwardProperty $award)
 * @method SportingGoodsStoreType setBrand(Property\BrandProperty $brand)
 * @method SportingGoodsStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method SportingGoodsStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method SportingGoodsStoreType setDepartment(Property\DepartmentProperty $department)
 * @method SportingGoodsStoreType setDescription(Property\DescriptionProperty $description)
 * @method SportingGoodsStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SportingGoodsStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method SportingGoodsStoreType setDuns(Property\DunsProperty $duns)
 * @method SportingGoodsStoreType setEmail(Property\EmailProperty $email)
 * @method SportingGoodsStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method SportingGoodsStoreType setEvent(Property\EventProperty $event)
 * @method SportingGoodsStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method SportingGoodsStoreType setFounder(Property\FounderProperty $founder)
 * @method SportingGoodsStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method SportingGoodsStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method SportingGoodsStoreType setFunder(Property\FunderProperty $funder)
 * @method SportingGoodsStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method SportingGoodsStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method SportingGoodsStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method SportingGoodsStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SportingGoodsStoreType setImage(Property\ImageProperty $image)
 * @method SportingGoodsStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method SportingGoodsStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method SportingGoodsStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method SportingGoodsStoreType setLocation(Property\LocationProperty $location)
 * @method SportingGoodsStoreType setLogo(Property\LogoProperty $logo)
 * @method SportingGoodsStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SportingGoodsStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method SportingGoodsStoreType setMember(Property\MemberProperty $member)
 * @method SportingGoodsStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method SportingGoodsStoreType setNaics(Property\NaicsProperty $naics)
 * @method SportingGoodsStoreType setName(Property\NameProperty $name)
 * @method SportingGoodsStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method SportingGoodsStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method SportingGoodsStoreType setOwns(Property\OwnsProperty $owns)
 * @method SportingGoodsStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method SportingGoodsStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method SportingGoodsStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SportingGoodsStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method SportingGoodsStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method SportingGoodsStoreType setReview(Property\ReviewProperty $review)
 * @method SportingGoodsStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method SportingGoodsStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method SportingGoodsStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method SportingGoodsStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method SportingGoodsStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method SportingGoodsStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method SportingGoodsStoreType setUrl(Property\UrlProperty $url)
 * @method SportingGoodsStoreType setVatID(Property\VatIDProperty $vatID)
 */
class SportingGoodsStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportingGoodsStore';
	}
}