<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a class="btn mb-1" href="<?= base_url('/dokter'); ?>"><i data-feather="arrow-left"></i> Kembali</a>
            <h1 class="inline"><?= $title; ?></h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="card p-4">
            <form action="/dokter/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <table class="table">
                    <tbody>
                        <tr>
                            <th rowspan="11">
                                <img src="/images/avatar/default.jpg" class="img-thumbnail img-preview" width="200px">
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <label for="image_profile" class="form-label">Foto Profile</label>
                            </td>
                            <td>
                                <div class="input-group">
                                    <input type="file" class="form-control <?= ($validation->hasError('image_profile')) ? 'is-invalid' : ''; ?>" id="image_profile" name="image_profile" onchange="previewImg()" value="<?= old('image_profile'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('image_profile'); ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="nip" class="form-label">NIP</label>
                            </td>
                            <td>
                                <input name="nip" type="hidden" value="<?= $nip; ?>">
                                <input type="text" class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid' : ''; ?>" id="nip" name="nip" placeholder="<?= $nip; ?>" disabled>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nip'); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="nik" class="form-label">NIK</label>
                            </td>
                            <td>
                                <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" id="nik" name="nik">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nik'); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="nama" class="form-label">Nama</label>
                            </td>
                            <td>
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama'); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email" class="form-label">Email</label>
                            </td>
                            <td>
                                <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" aria-describedby="emailHelp" name="email" value="<?= old('email'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="alamat" class="form-label">Alamat</label>
                            </td>
                            <td>
                                <div class="form-floating">
                                    <textarea class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" placeholder="Leave a comment here" id="alamat" name="alamat"><?= old('alamat'); ?></textarea>
                                </div>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('alamat'); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            </td>
                            <td>
                                <select name="jenis_kelamin" class="form-select <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' : ''; ?>" aria-label="Default select example">
                                    <option value="" selected>Pilih jenis kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('jenis_kelamin'); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="izin_praktek" class="form-label">Izin Praktek</label>
                            </td>
                            <td>
                                <input type="text" class="form-control <?= ($validation->hasError('izin_praktek')) ? 'is-invalid' : ''; ?>" id="izin_praktek" name="izin_praktek" value="<?= old('izin_praktek'); ?>" placeholder="000/AAAA/AAA/0/000 (diisikan sesuai)">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('izin_praktek'); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="tgl_mulai_bekerja" class="form-label">Tanggal Mulai Bekerja</label>
                            </td>
                            <td>
                                <input type="date" class="form-control <?= ($validation->hasError('tgl_mulai_bekerja')) ? 'is-invalid' : ''; ?>" id="tgl_mulai_bekerja" name="tgl_mulai_bekerja" value="<?= old('tgl_mulai_bekerja'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('tgl_mulai_bekerja'); ?>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="no_hp" class="form-label">No Handphone</label>
                            </td>
                            <td>
                                <input type="tel" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" id="no_hp" name="no_hp" value="<?= old('no_hp'); ?>">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('no_hp'); ?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
</div>
<script>
    function previewImg() {
        const profile = document.querySelector('#image_profile');
        const profileLabel = document.querySelector('.form-control')
        const imgPreview = document.querySelector('.img-preview')

        profileLabel.textContent = profile.files[0].name;

        const fileProfile = new FileReader();
        fileProfile.readAsDataURL(profile.files[0]);

        fileProfile.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
<?= $this->endSection(); ?>