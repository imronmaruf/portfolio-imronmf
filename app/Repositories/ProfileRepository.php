<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\ProfileRepositoryInterface;

class ProfileRepository implements ProfileRepositoryInterface
{
  public function findById(int $id): ?User
  {
    return User::find($id);
  }

  public function update(int $id, array $data): bool
  {
    $user = $this->findById($id);
    if ($user) {
      return $user->update($data);
    }
    return false;
  }
}
