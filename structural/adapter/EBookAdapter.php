<?php
namespace structural\adapter;

class EBookAdapter implements BookInterface
{
    /**
     * @var EBookInterface $eBook
     */
    private $eBook;

    public function __construct(EBookInterface $EBook)
    {
        $this->eBook = $EBook;
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }

    public function nextPage()
    {
        $this->eBook->pressNext();
    }

    public function open()
    {
        $this->eBook->unlock();
    }
}
