<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ClothingStoreType.
 * 
 * @method ClothingStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ClothingStoreType setAddress(Property\AddressProperty $address)
 * @method ClothingStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ClothingStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ClothingStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method ClothingStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ClothingStoreType setAward(Property\AwardProperty $award)
 * @method ClothingStoreType setBrand(Property\BrandProperty $brand)
 * @method ClothingStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ClothingStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method ClothingStoreType setDepartment(Property\DepartmentProperty $department)
 * @method ClothingStoreType setDescription(Property\DescriptionProperty $description)
 * @method ClothingStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ClothingStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ClothingStoreType setDuns(Property\DunsProperty $duns)
 * @method ClothingStoreType setEmail(Property\EmailProperty $email)
 * @method ClothingStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method ClothingStoreType setEvent(Property\EventProperty $event)
 * @method ClothingStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ClothingStoreType setFounder(Property\FounderProperty $founder)
 * @method ClothingStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ClothingStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ClothingStoreType setFunder(Property\FunderProperty $funder)
 * @method ClothingStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ClothingStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ClothingStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ClothingStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ClothingStoreType setImage(Property\ImageProperty $image)
 * @method ClothingStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ClothingStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method ClothingStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ClothingStoreType setLocation(Property\LocationProperty $location)
 * @method ClothingStoreType setLogo(Property\LogoProperty $logo)
 * @method ClothingStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ClothingStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ClothingStoreType setMember(Property\MemberProperty $member)
 * @method ClothingStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ClothingStoreType setNaics(Property\NaicsProperty $naics)
 * @method ClothingStoreType setName(Property\NameProperty $name)
 * @method ClothingStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ClothingStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method ClothingStoreType setOwns(Property\OwnsProperty $owns)
 * @method ClothingStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ClothingStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method ClothingStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ClothingStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method ClothingStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ClothingStoreType setReview(Property\ReviewProperty $review)
 * @method ClothingStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method ClothingStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method ClothingStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method ClothingStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ClothingStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method ClothingStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method ClothingStoreType setUrl(Property\UrlProperty $url)
 * @method ClothingStoreType setVatID(Property\VatIDProperty $vatID)
 */
class ClothingStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ClothingStore';
	}
}