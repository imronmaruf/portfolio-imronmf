@extends('be.layouts.main')

@push('title')
    Edit Profil
@endpush

@push('styles')
    <style>
        .preview-image {
            max-width: 200px;
            max-height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .social-media-icon {
            width: 24px;
            height: 24px;
            margin-right: 8px;
        }
    </style>
@endpush

@section('content')
    <div class="container-xl mt-3">
        <div class="card">
            <div class="card-status-top bg-green"></div>
            <div class="card-header">
                <h3 class="card-title">Edit Profil</h3>
            </div>

            <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row g-3">
                        <!-- Personal Information -->
                        <div class="col-12">
                            <h4 class="mb-3">Informasi Pribadi</h4>
                        </div>

                        <!-- Profile Image -->
                        <div class="col-md-3">
                            <div class="text-center mb-3">
                                <div class="mb-2">
                                    <img id="profileImagePreview"
                                        src="{{ $profile->profile_image ? asset('storage/' . $profile->profile_image) : asset('images/default-avatar.png') }}"
                                        class="preview-image mb-2" alt="Profile Preview">
                                </div>
                                <div class="input-group">
                                    <input type="file" name="profile_image" id="profileImage"
                                        class="form-control @error('profile_image') is-invalid @enderror" accept="image/*">
                                </div>
                                @error('profile_image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="row g-3">
                                <!-- Basic Info -->
                                <div class="col-md-6">
                                    <label class="form-label">Nama</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $profile->name) }}" placeholder="Masukkan nama Anda">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email', $profile->email) }}" placeholder="Masukkan email Anda">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Nomor Telepon</label>
                                    <input type="text" name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone', $profile->phone) }}" placeholder="Masukkan nomor telepon">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Resume</label>
                                    <input type="file" name="resume_file" id="resumeFile"
                                        class="form-control @error('resume_file') is-invalid @enderror"
                                        accept=".pdf,.doc,.docx">
                                    @if ($profile->resume_file)
                                        <small class="text-muted">File saat ini:
                                            {{ basename($profile->resume_file) }}</small>
                                    @endif
                                    @error('resume_file')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- About Section -->
                        <div class="col-12">
                            <h4 class="mb-3 mt-4">Tentang Saya</h4>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Alamat</label>
                            <textarea name="address" rows="2" class="form-control @error('address') is-invalid @enderror"
                                placeholder="Masukkan alamat lengkap">{{ old('address', $profile->address) }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Bio Singkat</label>
                            <textarea name="bio" rows="3" class="form-control @error('bio') is-invalid @enderror"
                                placeholder="Bio singkat tentang Anda">{{ old('bio', $profile->bio) }}</textarea>
                            @error('bio')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Pengenalan</label>
                            <textarea name="introduction" rows="3" class="form-control @error('introduction') is-invalid @enderror"
                                placeholder="Ceritakan lebih detail tentang diri Anda">{{ old('introduction', $profile->introduction) }}</textarea>
                            @error('introduction')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Social Media Section -->
                        <div class="col-12">
                            <h4 class="mb-3 mt-4">Media Sosial</h4>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">
                                <i class="fab fa-linkedin social-media-icon"></i>LinkedIn URL
                            </label>
                            <input type="text" name="linkedin_url"
                                class="form-control @error('linkedin_url') is-invalid @enderror"
                                value="{{ old('linkedin_url', $profile->linkedin_url) }}"
                                placeholder="https://linkedin.com/in/username">
                            @error('linkedin_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">
                                <i class="fab fa-github social-media-icon"></i>GitHub URL
                            </label>
                            <input type="text" name="github_url"
                                class="form-control @error('github_url') is-invalid @enderror"
                                value="{{ old('github_url', $profile->github_url) }}"
                                placeholder="https://github.com/username">
                            @error('github_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">
                                <i class="fab fa-instagram social-media-icon"></i>Instagram URL
                            </label>
                            <input type="text" name="instagram_url"
                                class="form-control @error('instagram_url') is-invalid @enderror"
                                value="{{ old('instagram_url', $profile->instagram_url) }}"
                                placeholder="https://instagram.com/username">
                            @error('instagram_url')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('profile.index') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Profile Image Preview
            const profileImage = document.getElementById('profileImage');
            const profileImagePreview = document.getElementById('profileImagePreview');

            profileImage.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    if (file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            profileImagePreview.src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    } else {
                        alert('Please select an image file.');
                        this.value = '';
                    }
                }
            });

            // Resume file validation
            const resumeFile = document.getElementById('resumeFile');
            resumeFile.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const allowedTypes = ['.pdf', '.doc', '.docx'];
                    const fileExtension = file.name.substring(file.name.lastIndexOf('.')).toLowerCase();

                    if (!allowedTypes.includes(fileExtension)) {
                        alert('Please select a valid document file (PDF, DOC, or DOCX)');
                        this.value = '';
                    }
                }
            });
        });
    </script>
@endpush
