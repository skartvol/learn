<?php
class ShopProduct
{
    public $author;
    public $bookName;
    public $price;

    public function __construct(
        $author,
        $bookName,
        $price
    ) {
        $this->author = $author;
        $this->bookName = $bookName;
        $this->price = $price
    }

    public function getAuthor()
    {
        return $this->author;
    }
}

$product = new ShopProduct(
    "Мет Зандстра",
    "PHP Об\'єкти, шаблони, методики програмування",
    1500
);

print $product->getAuthor;