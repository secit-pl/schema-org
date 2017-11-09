<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FloristType.
 * 
 * @method FloristType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FloristType setAddress(Property\AddressProperty $address)
 * @method FloristType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FloristType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FloristType setAlumni(Property\AlumniProperty $alumni)
 * @method FloristType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method FloristType setAward(Property\AwardProperty $award)
 * @method FloristType setBrand(Property\BrandProperty $brand)
 * @method FloristType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method FloristType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method FloristType setDepartment(Property\DepartmentProperty $department)
 * @method FloristType setDescription(Property\DescriptionProperty $description)
 * @method FloristType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FloristType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method FloristType setDuns(Property\DunsProperty $duns)
 * @method FloristType setEmail(Property\EmailProperty $email)
 * @method FloristType setEmployee(Property\EmployeeProperty $employee)
 * @method FloristType setEvent(Property\EventProperty $event)
 * @method FloristType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method FloristType setFounder(Property\FounderProperty $founder)
 * @method FloristType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method FloristType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method FloristType setFunder(Property\FunderProperty $funder)
 * @method FloristType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method FloristType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method FloristType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method FloristType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FloristType setImage(Property\ImageProperty $image)
 * @method FloristType setIsicV4(Property\IsicV4Property $isicV4)
 * @method FloristType setLegalName(Property\LegalNameProperty $legalName)
 * @method FloristType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method FloristType setLocation(Property\LocationProperty $location)
 * @method FloristType setLogo(Property\LogoProperty $logo)
 * @method FloristType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FloristType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method FloristType setMember(Property\MemberProperty $member)
 * @method FloristType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method FloristType setNaics(Property\NaicsProperty $naics)
 * @method FloristType setName(Property\NameProperty $name)
 * @method FloristType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method FloristType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method FloristType setOwns(Property\OwnsProperty $owns)
 * @method FloristType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method FloristType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method FloristType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FloristType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method FloristType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method FloristType setReview(Property\ReviewProperty $review)
 * @method FloristType setSameAs(Property\SameAsProperty $sameAs)
 * @method FloristType setSeeks(Property\SeeksProperty $seeks)
 * @method FloristType setSponsor(Property\SponsorProperty $sponsor)
 * @method FloristType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method FloristType setTaxID(Property\TaxIDProperty $taxID)
 * @method FloristType setTelephone(Property\TelephoneProperty $telephone)
 * @method FloristType setUrl(Property\UrlProperty $url)
 * @method FloristType setVatID(Property\VatIDProperty $vatID)
 */
class FloristType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Florist';
	}
}