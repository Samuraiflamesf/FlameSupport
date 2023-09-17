<?php

use App\DTO\CreateSupportDTO;
use App\DTO\UpdateSupportDTO;
use App\Repository\SupportRepositoryInterface;

class SupportORM implements SupportRepositoryInterface
{
    public function getAll(string $filter = null): array  {
    }
    public function finOne(string $id): stdClass|null
    {
    }
    public function delete(string $id): void
    {
    }
    public function new(CreateSupportDTO $dto): stdClass
    {
    }
    public function update(UpdateSupportDTO $dto): stdClass|null
    {
    }
}
