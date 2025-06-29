<x-mail::message>
# Introduction

Gunakan kode berikut untuk memverifikasi akun Anda.

<x-mail::panel>
{{ $otp }}
</x-mail::panel>

Kode ini akan kedaluwarsa dalam 10 menit.
Jika Anda tidak merasa mendaftar, abaikan email ini.

Terima kasih,<br>
{{ config('app.name') }}
</x-mail::message>