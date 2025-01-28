<?php

namespace App\Services;

use App\Repositories\Contracts\ProfileRepositoryInterface;

class ProfileService
{
  protected $profileRepository;

  public function __construct(ProfileRepositoryInterface $profileRepository)
  {
    $this->profileRepository = $profileRepository;
  }

  public function getProfile(int $id)
  {
    return $this->profileRepository->findById($id);
  }

  public function updateProfile(int $id, array $data)
  {
    return $this->profileRepository->update($id, $data);
  }
}
