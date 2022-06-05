<?php

trait ProductUtilites
{
    public function getAnotherInfo():string
    {
        return "No more information.";
    }
}

interface Product
{
    public function getAuthorInfo():string;

    public function getTitle():string;

    public function getPrice():float;
}

class ShopProduct implements Product
{
    use ProductUtilites;
    private $title;
    private $authorFirstName;
    private $authorMainName;
    private $price = 0;

    public function __construct(
        string $title,
        string $authorFirstName,
        string $authorMainName,
        float $price
    ) {
        $this->title = $title;
        $this->authorFirstName = $authorFirstName;
        $this->authorMainName = $authorMainName;
        $this->price = $price;
    }

    public function getAuthorInfo():string
    {
        return "{$this->authorFirstName} {$this->authorMainName}";
    }

    public function getTitle():string
    {
        return $this->title;
    }

    public function getPrice():float
    {
        return $this->price;
    }
}


class BookProduct extends ShopProduct
{
    private $numPages;

    public function __construct(
        string $title,
        string $authorFirstName,
        string $authorMainName,
        float $price,
        int $numPages
    ){
        parent::__construct($title, $authorFirstName, $authorMainName, $price);
        $this->numPages = $numPages;
    }

    public function getNumPages():int
    {
        return $this->numPages;
    }

    public function getAnotherInfo():string
    {
        return "Number of pages: {$this->numPages}";
    }
}


class PaintingProduct extends ShopProduct
{
    private $paintingSize;

    public function __construct(
        string $title,
        string $authorFirstName,
        string $authorMainName,
        float $price,
        int $paintingSize
    ){
        parent::__construct($title, $authorFirstName, $authorMainName, $price);
        $this->paintingSize = $paintingSize;
    }

    public function getPaintingSize():int
    {
        return $this->paintingSize;
    }

    public function getAnotherInfo():string
    {
        return "Painting size: {$this->paintingSize}";
    }
}


class ShopProductWriter
{
    private $products = [];

    public function addProducts($product)
    {
        $this->products[] = $product;
    }

    public function write():string
    {
        $str = "Products info <hr>";
        foreach($this->products as $product)
        {
            $str .= "Author: {$product->getAuthorInfo()}; </br>";
            $str .= "Title: {$product->getTitle()}</br>";
            $str .= "Price: {$product->getPrice()}</br>";
            if($product->getAnotherInfo())
            {
                $str .= "Another Info:<br> {$product->getAnotherInfo()}</br>";
            }
            $str .= "<hr>";
        }
        return $str;
    }
}

$anotherProduct = new ShopProduct(
    "Бургер",
    "Мак",
    "Доналдс",
    1.5
);

$paintingProduct = new PaintingProduct(
    "Мона Ліза",
    "Леонардо",
    "да Вінчі",
    3370000.00,
    93
);

$bookProduct = new BookProduct(
    "PHP Об\'єкти, шаблони, методи проектування",
    "Метт",
    "Зандстра",
    1500.00,
    738
);

$shopProductWriter = new ShopProductWriter();
$shopProductWriter->addProducts($anotherProduct);
$shopProductWriter->addProducts($paintingProduct);
$shopProductWriter->addProducts($bookProduct);

print $shopProductWriter->write();