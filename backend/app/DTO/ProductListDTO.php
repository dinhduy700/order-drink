<?php

namespace App\DTO;

class ProductListDTO
{
    public function __construct(private int $pageSize = 10, private int $pageIndex = 1)
    {
        $this->pageSize = $pageSize;
        $this->pageIndex = $pageIndex;
    }

    public function setPageSize(int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    public function setPageIndex(int $pageIndex): void
    {
        $this->pageIndex = $pageIndex;
    }

    public function getPageIndex(): int
    {
        return $this->pageIndex;
    }

}
