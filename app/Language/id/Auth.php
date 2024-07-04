<?php

namespace App\Language\id;

return [
    // Pengecualian
    'invalidModel'          => 'Model {0} harus dimuat sebelum digunakan.',
    'userNotFound'          => 'Tidak dapat menemukan pengguna dengan ID = {0, number}.',
    'noUserEntity'          => 'Entitas Pengguna harus disediakan untuk validasi kata sandi.',
    'tooManyCredentials'    => 'Anda hanya dapat memvalidasi terhadap 1 kredensial selain kata sandi.',
    'invalidFields'         => 'Kolom "{0}" tidak dapat digunakan untuk memvalidasi kredensial.',
    'unsetPasswordLength'   => 'Anda harus menyetel pengaturan `minimumPasswordLength` di file konfigurasi Auth.',
    'unknownError'          => 'Maaf, kami mengalami masalah saat mengirim email kepada Anda. Silakan coba lagi nanti.',
    'notLoggedIn'           => 'Anda harus login untuk mengakses halaman itu.',
    'notEnoughPrivilege'    => 'Anda tidak memiliki izin yang memadai untuk mengakses halaman itu.',

    // Registrasi
    'registerDisabled'      => 'Maaf, akun pengguna baru tidak diperbolehkan saat ini.',
    'registerSuccess'       => 'Selamat datang! Silakan masuk dengan kredensial baru Anda.',
    'registerCLI'           > 'Pengguna baru dibuat: {0}, #{1}',

    // Aktivasi
    'activationNoUser'      => 'Tidak dapat menemukan pengguna dengan kode aktivasi tersebut.',
    'activationSubject'     => 'Aktifkan akun Anda',
    'activationSuccess'     => 'Silahkan konfirmasi akun Anda dengan mengklik link aktivasi di email yang telah kami kirimkan.',
    'activationResend'      => 'Kirim ulang pesan aktivasi sekali lagi.',
    'notActivated'          => 'Akun pengguna ini belum diaktifkan.',
    'errorSendingActivation' => 'Gagal mengirim pesan aktivasi ke: {0}',

    // Gabung
    'badAttempt'            => 'Anda tidak dapat login. Harap periksa kredensial Anda.',
    'loginSuccess'          => 'Selamat datang kembali!',
    'invalidPassword'       => 'Anda tidak dapat login. Harap periksa sandi Anda.',

    // Lupa Kata Sandi
    'forgotDisabled'        => 'Opsi penyetelan ulang kata sandi telah dinonaktifkan.',
    'forgotNoUser'          => 'Tidak dapat menemukan pengguna dengan email itu.',
    'forgotSubject'         => 'Petunjuk Reset Kata Sandi',
    'resetSuccess'          => 'Kata sandi Anda telah berhasil diubah. Silahkan login dengan password baru.',
    'forgotEmailSent'       => 'Token keamanan telah dikirim melalui email kepada Anda. Masukkan dalam kotak di bawah untuk melanjutkan.',
    'errorEmailSent'        => 'Tidak dapat mengirim email dengan petunjuk reset sandi ke: {0}',
    'errorResetting'        => 'Tidak dapat mengirim instruksi reset ke {0}',

    // kata sandi
    'errorPasswordLength'           => 'Kata sandi harus paling sedikit {0, number} karakter.',
    'suggestPasswordLength'         => 'Frasa sandi - hingga 255 karakter - buat sandi yang lebih aman dan mudah diingat.',
    'errorPasswordCommon'           => 'Kata sandi tidak boleh berupa kata sandi yang umum.',
    'suggestPasswordCommon'         => 'Kata sandi diperiksa terhadap lebih dari 65 ribu kata sandi yang umum digunakan atau kata sandi yang bocor melalui peretasan.',
    'errorPasswordPersonal'         => 'Kata sandi tidak boleh berisi informasi pribadi yang di-hash ulang.',
    'suggestPasswordPersonal'       => 'Variasi pada alamat email atau nama pengguna Anda tidak boleh digunakan untuk kata sandi.',
    'errorPasswordTooSimilar'       => 'Kata sandi terlalu mirip dengan nama pengguna.',
    'suggestPasswordTooSimilar'     => 'Jangan gunakan bagian dari nama pengguna Anda dalam kata sandi Anda.',
    'errorPasswordPwned'            => 'Kata sandi {0} telah terungkap karena pelanggaran data dan telah dilihat {1, number} kali dalam {2} kata sandi yang disusupi.',
    'suggestPasswordPwned'          => '{0} tidak boleh digunakan sebagai sandi. Jika Anda menggunakannya di mana saja, segera ubah.',
    'errorPasswordPwnedDatabase'    => 'database',
    'errorPasswordPwnedDatabases'   => 'database',
    'errorPasswordEmpty'            => 'Password diperlukan.',
    'passwordChangeSuccess'         => 'Kata sandi berhasil diubah',
    'userDoesNotExist'              => 'Kata sandi tidak diubah. Pengguna tidak ada',
    'resetTokenExpired'             => 'Maaf. Token reset Anda telah kedaluwarsa.',

    // Grup
    'groupNotFound'                 => 'Tidak dapat menemukan grup: {0}.',

    // Izin
    'permissionNotFound'            => 'Tidak dapat menemukan izin: {0}',

    // Dilarang
    'userIsBanned'                  => 'Pengguna telah diblokir. Hubungi administrator',

    // Terlalu banyak permintaan
    'tooManyRequests'               => 'Terlalu banyak permintaan. Harap tunggu {0, number} detik.',

    // Tampilan masuk
    'home'                          => 'Rumah',
    'current'                       => 'Saat ini',
    'forgotPassword'                => 'Lupa Kata Sandi Anda?',
    'enterEmailForInstructions'     => 'Tidak masalah! Masukkan email Anda di bawah ini dan kami akan mengirimkan instruksi untuk mereset kata sandi Anda.',
    'email'                         => 'Email',
    'emailAddress'                  => 'Alamat Email',
    'sendInstructions'              => 'Kirim Instruksi',
    'loginTitle'                    => 'Masuk',
    'loginAction'                   => 'Masuk',
    'rememberMe'                    => 'Ingat saya',
    'needAnAccount'                 => 'Butuh akun?',
    'forgotYourPassword'            => 'Lupa kata sandi Anda?',
    'password'                      => 'Kata Sandi',
    'repeatPassword'                => 'Ulangi Kata Sandi',
    'emailOrUsername'               => 'Email atau nama pengguna',
    'field'                         => 'Bidang',
    'fullname'                      => 'Nama Lengkap',
    'username'                      => 'Nama Pengguna',
    'register'                      => 'Daftar',
    'signIn'                        => 'Masuk',
    'alreadyRegistered'             => 'Sudah terdaftar?',
    'weNeverShare'                  => 'Kami tidak akan pernah membagikan email Anda dengan orang lain.',
    'resetYourPassword'             => 'Setel Ulang Kata Sandi Anda',
    'enterCodeEmailPassword'        => 'Masukkan kode yang Anda terima melalui email, alamat email Anda, dan kata sandi baru Anda.',
    'token'                         => 'Token',
    'newPassword'                   => 'Kata Sandi Baru',
    'newPasswordRepeat'             => 'Ulangi Kata Sandi Baru',
    'resetPassword'                 => 'Setel Ulang Kata Sandi',
];
