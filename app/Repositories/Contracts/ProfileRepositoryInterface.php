<?php

namespace App\Repositories\Contracts;

use App\Models\User;

interface ProfileRepositoryInterface
{
  public function findById(int $id): ?User;
  public function update(int $id, array $data): bool;
}
