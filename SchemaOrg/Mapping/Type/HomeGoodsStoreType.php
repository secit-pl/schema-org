<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HomeGoodsStoreType.
 * 
 * @method HomeGoodsStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HomeGoodsStoreType setAddress(Property\AddressProperty $address)
 * @method HomeGoodsStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HomeGoodsStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HomeGoodsStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method HomeGoodsStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method HomeGoodsStoreType setAward(Property\AwardProperty $award)
 * @method HomeGoodsStoreType setBrand(Property\BrandProperty $brand)
 * @method HomeGoodsStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method HomeGoodsStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HomeGoodsStoreType setDepartment(Property\DepartmentProperty $department)
 * @method HomeGoodsStoreType setDescription(Property\DescriptionProperty $description)
 * @method HomeGoodsStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HomeGoodsStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method HomeGoodsStoreType setDuns(Property\DunsProperty $duns)
 * @method HomeGoodsStoreType setEmail(Property\EmailProperty $email)
 * @method HomeGoodsStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method HomeGoodsStoreType setEvent(Property\EventProperty $event)
 * @method HomeGoodsStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HomeGoodsStoreType setFounder(Property\FounderProperty $founder)
 * @method HomeGoodsStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method HomeGoodsStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method HomeGoodsStoreType setFunder(Property\FunderProperty $funder)
 * @method HomeGoodsStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HomeGoodsStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method HomeGoodsStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method HomeGoodsStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HomeGoodsStoreType setImage(Property\ImageProperty $image)
 * @method HomeGoodsStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HomeGoodsStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method HomeGoodsStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method HomeGoodsStoreType setLocation(Property\LocationProperty $location)
 * @method HomeGoodsStoreType setLogo(Property\LogoProperty $logo)
 * @method HomeGoodsStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HomeGoodsStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method HomeGoodsStoreType setMember(Property\MemberProperty $member)
 * @method HomeGoodsStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method HomeGoodsStoreType setNaics(Property\NaicsProperty $naics)
 * @method HomeGoodsStoreType setName(Property\NameProperty $name)
 * @method HomeGoodsStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method HomeGoodsStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HomeGoodsStoreType setOwns(Property\OwnsProperty $owns)
 * @method HomeGoodsStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method HomeGoodsStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HomeGoodsStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HomeGoodsStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HomeGoodsStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method HomeGoodsStoreType setReview(Property\ReviewProperty $review)
 * @method HomeGoodsStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method HomeGoodsStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method HomeGoodsStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method HomeGoodsStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method HomeGoodsStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method HomeGoodsStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method HomeGoodsStoreType setUrl(Property\UrlProperty $url)
 * @method HomeGoodsStoreType setVatID(Property\VatIDProperty $vatID)
 */
class HomeGoodsStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HomeGoodsStore';
	}
}