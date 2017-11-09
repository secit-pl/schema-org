<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MensClothingStoreType.
 * 
 * @method MensClothingStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MensClothingStoreType setAddress(Property\AddressProperty $address)
 * @method MensClothingStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MensClothingStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MensClothingStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method MensClothingStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method MensClothingStoreType setAward(Property\AwardProperty $award)
 * @method MensClothingStoreType setBrand(Property\BrandProperty $brand)
 * @method MensClothingStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method MensClothingStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method MensClothingStoreType setDepartment(Property\DepartmentProperty $department)
 * @method MensClothingStoreType setDescription(Property\DescriptionProperty $description)
 * @method MensClothingStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MensClothingStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method MensClothingStoreType setDuns(Property\DunsProperty $duns)
 * @method MensClothingStoreType setEmail(Property\EmailProperty $email)
 * @method MensClothingStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method MensClothingStoreType setEvent(Property\EventProperty $event)
 * @method MensClothingStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MensClothingStoreType setFounder(Property\FounderProperty $founder)
 * @method MensClothingStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method MensClothingStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method MensClothingStoreType setFunder(Property\FunderProperty $funder)
 * @method MensClothingStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MensClothingStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method MensClothingStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method MensClothingStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MensClothingStoreType setImage(Property\ImageProperty $image)
 * @method MensClothingStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MensClothingStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method MensClothingStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method MensClothingStoreType setLocation(Property\LocationProperty $location)
 * @method MensClothingStoreType setLogo(Property\LogoProperty $logo)
 * @method MensClothingStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MensClothingStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method MensClothingStoreType setMember(Property\MemberProperty $member)
 * @method MensClothingStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method MensClothingStoreType setNaics(Property\NaicsProperty $naics)
 * @method MensClothingStoreType setName(Property\NameProperty $name)
 * @method MensClothingStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method MensClothingStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method MensClothingStoreType setOwns(Property\OwnsProperty $owns)
 * @method MensClothingStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method MensClothingStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method MensClothingStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MensClothingStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method MensClothingStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MensClothingStoreType setReview(Property\ReviewProperty $review)
 * @method MensClothingStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method MensClothingStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method MensClothingStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method MensClothingStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method MensClothingStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method MensClothingStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method MensClothingStoreType setUrl(Property\UrlProperty $url)
 * @method MensClothingStoreType setVatID(Property\VatIDProperty $vatID)
 */
class MensClothingStoreType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MensClothingStore';
	}
}