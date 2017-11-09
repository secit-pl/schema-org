<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutoDealerType.
 * 
 * @method AutoDealerType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutoDealerType setAddress(Property\AddressProperty $address)
 * @method AutoDealerType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutoDealerType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutoDealerType setAlumni(Property\AlumniProperty $alumni)
 * @method AutoDealerType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AutoDealerType setAward(Property\AwardProperty $award)
 * @method AutoDealerType setBrand(Property\BrandProperty $brand)
 * @method AutoDealerType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method AutoDealerType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutoDealerType setDepartment(Property\DepartmentProperty $department)
 * @method AutoDealerType setDescription(Property\DescriptionProperty $description)
 * @method AutoDealerType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutoDealerType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method AutoDealerType setDuns(Property\DunsProperty $duns)
 * @method AutoDealerType setEmail(Property\EmailProperty $email)
 * @method AutoDealerType setEmployee(Property\EmployeeProperty $employee)
 * @method AutoDealerType setEvent(Property\EventProperty $event)
 * @method AutoDealerType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutoDealerType setFounder(Property\FounderProperty $founder)
 * @method AutoDealerType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method AutoDealerType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method AutoDealerType setFunder(Property\FunderProperty $funder)
 * @method AutoDealerType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutoDealerType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method AutoDealerType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method AutoDealerType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutoDealerType setImage(Property\ImageProperty $image)
 * @method AutoDealerType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutoDealerType setLegalName(Property\LegalNameProperty $legalName)
 * @method AutoDealerType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method AutoDealerType setLocation(Property\LocationProperty $location)
 * @method AutoDealerType setLogo(Property\LogoProperty $logo)
 * @method AutoDealerType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutoDealerType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method AutoDealerType setMember(Property\MemberProperty $member)
 * @method AutoDealerType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method AutoDealerType setNaics(Property\NaicsProperty $naics)
 * @method AutoDealerType setName(Property\NameProperty $name)
 * @method AutoDealerType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method AutoDealerType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutoDealerType setOwns(Property\OwnsProperty $owns)
 * @method AutoDealerType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method AutoDealerType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutoDealerType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutoDealerType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutoDealerType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AutoDealerType setReview(Property\ReviewProperty $review)
 * @method AutoDealerType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutoDealerType setSeeks(Property\SeeksProperty $seeks)
 * @method AutoDealerType setSponsor(Property\SponsorProperty $sponsor)
 * @method AutoDealerType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method AutoDealerType setTaxID(Property\TaxIDProperty $taxID)
 * @method AutoDealerType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutoDealerType setUrl(Property\UrlProperty $url)
 * @method AutoDealerType setVatID(Property\VatIDProperty $vatID)
 */
class AutoDealerType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoDealer';
	}
}