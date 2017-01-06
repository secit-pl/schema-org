# Schema.org class mapping

A class mapping for the schema.org data types, types and properties.

## Installation

From the command line run

```
$ composer require secit-pl/schema-org
```

## Usage

First create the data structure:

```php
$breadcrumbs = new Type\BreadcrumbList();

$element1 = new Type\ListItem();
$element1->setPosition(new Property\Position(new DataType\IntegerType(1)));
$element1->setItem(
    new Property\Item(
        (new Type\Thing('http://google.pl/#test'))->setName(
            new Property\Name(
                new DataType\TextType('Test')
            )
        )
    )
);
$breadcrumbs->addItemListElement(new Property\ItemListElement($element1));

$element2 = new Type\ListItem();
$element2->setPosition(new Property\Position(new DataType\IntegerType(2)));
$element2->setItem(
    new Property\Item(
        (new Type\Thing('http://google.pl/#qweqwe'))->setName(
            new Property\Name(
                new DataType\TextType('Test 122')
            )
        )
    )
);
$breadcrumbs->addItemListElement(new Property\ItemListElement($element2));

$breadcrumbs->setNumberOfItems(
    new Property\NumberOfItems(
        new DataType\IntegerType(
            count($breadcrumbs->getItemListElements())
        )
    )
);
```

Now you can convert it to the JSON-LD string as following

```php
$schemaOrg = new \SecIT\SchemaOrg();
echo $schemaOrg->toJsonLd($breadcrumbs);
```

The output should be a valid schema.org JSON-LD:
```html
<script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","item":{"@type":"Thing","@id":"http:\/\/google.pl\/#test","name":"Test"},"position":1},{"@type":"ListItem","item":{"@type":"Thing","@id":"http:\/\/google.pl\/#qweqwe","name":"Test 122"},"position":2}],"numberOfItems":2}</script>
```

If you'd like to check the output validation you can use the tool provided by Google:
https://search.google.com/structured-data/testing-tool

## Code examples

### Breadcrumbs
```php
$breadcrumbs = new Type\BreadcrumbList();

$element1 = new Type\ListItem();
$element1->setPosition(new Property\Position(new DataType\IntegerType(1)));
$element1->setItem(
    new Property\Item(
        (new Type\Thing('http://google.pl/#test'))->setName(
            new Property\Name(
                new DataType\TextType('Test')
            )
        )
    )
);
$breadcrumbs->addItemListElement(new Property\ItemListElement($element1));

$element2 = new Type\ListItem();
$element2->setPosition(new Property\Position(new DataType\IntegerType(2)));
$element2->setItem(
    new Property\Item(
        (new Type\Thing('http://google.pl/#qweqwe'))->setName(
            new Property\Name(
                new DataType\TextType('Test 122')
            )
        )
    )
);
$breadcrumbs->addItemListElement(new Property\ItemListElement($element2));

$breadcrumbs->setNumberOfItems(
    new Property\NumberOfItems(
        new DataType\IntegerType(
            count($breadcrumbs->getItemListElements())
        )
    )
);
```

The output:
```html
<script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","item":{"@type":"Thing","@id":"http:\/\/google.pl\/#test","name":"Test"},"position":1},{"@type":"ListItem","item":{"@type":"Thing","@id":"http:\/\/google.pl\/#qweqwe","name":"Test 122"},"position":2}],"numberOfItems":2}</script>
```

### Product

```php
$product = new Type\Product();
$product
    ->setName(
        new Property\Name(
            new DataType\TextType('Kenmore White 17" Microwave')
        )
    )
    ->setDescription(
        new Property\Description(
            new DataType\TextType('0.7 cubic feet countertop microwave. Has six preset cooking categories and convenience features like Add-A-Minute and Child Lock.')
        )
    )
    ->setImage(
        new Property\Image(
            new DataType\URLType('kenmore-microwave-17in.jpg')
        )
    )
    ->setAggregateRating(
        new Property\AggregateRating(
            (new Type\AggregateRating())
                ->setRatingValue(
                    new Property\RatingValue(
                        new DataType\NumberType(3.5)
                    )
                )
                ->setReviewCount(
                    new Property\ReviewCount(
                        new DataType\IntegerType(11)
                    )
                )
        )
    )
    ->setOffers(
        new Property\Offers(
            (new Type\Offer())
                ->setPriceCurrency(
                    new Property\PriceCurrency(
                        new DataType\TextType('USD')
                    )
                )
                ->setPrice(
                    new Property\Price(
                        new DataType\NumberType(55.00)
                    )
                )
                ->setAvailability(new Property\Availability(
                    new Type\InStock()
                ))
        )
    )
    ->setReview(
        new Property\Review([
            (new Type\Review())
                ->setReviewRating(
                    new Property\ReviewRating(
                        (new Type\Rating())
                            ->setBestRating(
                                new Property\BestRating(
                                    new DataType\NumberType(5)
                                )
                            )
                            ->setRatingValue(
                                new Property\RatingValue(
                                    new DataType\NumberType(1)
                                )
                            )
                            ->setWorstRating(
                                new Property\WorstRating(
                                    new DataType\NumberType(1)
                                )
                            )
                    )
                )
                ->setAuthor(
                    new Property\Author(
                        (new Type\Person())
                            ->setName(
                                new Property\Name(
                                    new DataType\TextType('Ellie')
                                )
                            )
                    )
                )
                ->setDatePublished(
                    new Property\DatePublished(
                        new DataType\DateType('2011-04-01')
                    )
                )
                ->setDescription(
                    new Property\Description(
                        new DataType\TextType('The lamp burned out and now I have to replace it.')
                    )
                )
                ->setName(
                    new Property\Name(
                        new DataType\TextType('Not a happy camper')
                    )
                )
            ,
            (new Type\Review())
                ->setReviewRating(
                    new Property\ReviewRating(
                        (new Type\Rating())
                            ->setBestRating(
                                new Property\BestRating(
                                    new DataType\NumberType(5)
                                )
                            )
                            ->setRatingValue(
                                new Property\RatingValue(
                                    new DataType\NumberType(4)
                                )
                            )
                            ->setWorstRating(
                                new Property\WorstRating(
                                    new DataType\NumberType(1)
                                )
                            )
                    )
                )
                ->setAuthor(
                    new Property\Author(
                        (new Type\Person())
                            ->setName(
                                new Property\Name(
                                    new DataType\TextType('Lucas')
                                )
                            )
                    )
                )
                ->setDatePublished(
                    new Property\DatePublished(
                        new DataType\DateType('2011-03-25')
                    )
                )
                ->setDescription(
                    new Property\Description(
                        new DataType\TextType('Great microwave for the price. It is small and fits in my apartment.')
                    )
                )
                ->setName(
                    new Property\Name(
                        new DataType\TextType('Value purchase')
                    )
                )
            ,
        ])
    )
;
```

The output:
```html
<script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"Product","aggregateRating":{"@type":"AggregateRating","reviewCount":11,"ratingValue":3.5},"offers":{"@type":"Offer","availability":"https:\/\/schema.org\/InStock","price":55,"priceCurrency":"USD"},"review":[{"@type":"Review","reviewRating":{"@type":"Rating","bestRating":5,"ratingValue":1,"worstRating":1},"author":{"@type":"Person","name":"Ellie"},"datePublished":"2011-04-01","description":"The lamp burned out and now I have to replace it.","name":"Not a happy camper"},{"@type":"Review","reviewRating":{"@type":"Rating","bestRating":5,"ratingValue":4,"worstRating":1},"author":{"@type":"Person","name":"Lucas"},"datePublished":"2011-03-25","description":"Great microwave for the price. It is small and fits in my apartment.","name":"Value purchase"}],"description":"0.7 cubic feet countertop microwave. Has six preset cooking categories and convenience features like Add-A-Minute and Child Lock.","image":"kenmore-microwave-17in.jpg","name":"Kenmore White 17\" Microwave"}</script>
```

## Project tags
As you maybe noticed the bundle don't use the standard tag numeration flow. Each two first parts of the tag 
corresponds to the version of the schema from schema.org from which the mapping classed were generated.

The schema.org releases history can be found here:
https://schema.org/docs/releases.html