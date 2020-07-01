<? php
date_default_timezone_set ( 'Asia / Jakarta' );
termasuk  "function.php" ;
 warna gema ( "hijau" , "# # # # # # # # # # # # # # # # # # # # # \ n" );
 warna gema ( "kuning" , "[•] Waktu:" . date ( '[dmY] [H: i: s]' ). "\ n" );
 warna gema ( "kuning" , "[•] ENTENONO COK ..... \ n" );
 warna gema ( "kuning" , "[•] cara menulis nomor pakai 62xxxxxxxxxx \ n" );
 warna gema ( "hijau" , "# # # # # # # # # # # # # # # # # # # # # \ n" );
perubahan fungsi () {
$ nama = nama ();
$ email = str_replace ( "" , "" , $ nama ). mt_rand ( 100 , 999 );
ulang:
 warna gema ( "nevy" , "(•) Nomor:" );
$ no = trim ( fgets ( STDIN ));
$ data = '{"email": "' . $ email . '@ gmail.com", "name": "' . $ nama . '", "phone": "+' . $ no . '", " signed_up_country ":" ID "} ' ;
$ register = request ( "/ v5 / customers" , null , $ data );
if ( strpos ( $ register , '"otp_token"' )) {
$ otptoken = getStr ( '"otp_token": "' , '"' , $ register );
 warna gema ( "hijau" , "+] Kode verifikasi sudah di kirim" ). "\ n" ;
otp:
 warna gema ( "nevy" , "?] Otp:" );
$ otp = trim ( fgets ( STDIN ));
$ data1 = '{"client_name": "gojek: cons: android", "data": {"otp": "' . $ otp . '", "otp_token": "' . $ otptoken . '"}, " client_secret ":" 83415d06-ec4e-11e6-a41b-6c40088ab51e "} ' ;
$ verif = permintaan ( "/ v5 / pelanggan / telepon / verifikasi" , null , $ data1 );
if ( strpos ( $ verif , '"access_token"' )) {
 warna gema ( "hijau" , "+] Berhasil mendaftar" );
$ token = getStr ( '"access_token": "' , '"' , $ verif );
$ uuid = getStr ( '"resource_owner_id":' , ',' , $ verif );
gema  "\ n" . warna ( "kuning" , "+] Token akses Anda:" . $ token . "\ n \ n" );
save ( "token.txt" , $ token );
gema  "\ n" . color ( "nevy" , "?] Mau Redeem Voucher ?: y / n" );
$ pilihan = trim ( fgets ( STDIN ));
if ( $ pilihan == "y" || $ pilihan == "Y" ) {
 warna gema ( "merah" , "=========== (REDEEM VOUCHER) ===========" );
reff:
$ data = '{"referral_code": "G-N42CQ7B"}' ;
$ klaim = permintaan ( "/ customer_referrals / v1 / kampanye / pendaftaran" , $ token , $ data );
$ message = fetch_value ( $ klaim , '"message": "' , '"' );
if ( strpos ( $ claim , 'Promo kamu sudah bisa dipakai' )) {
gema  "\ n" . color ( "green" , "+] Pesan:" . $ message );
gema  "\ n" . color ( "red" , "-] Pesan:" . $ message );
$ code1 = permintaan ( '/ pergi-promosi / v1 / promosi / pendaftaran ", $ token, $ data); {" promo_code ":" COBAGOFOOD2206 "}' );
$ message = fetch_value ( $ claim1 , '"message": "' , '"' );
if ( strpos ( $ claim , 'Promo kamu sudah bisa dipakai.' )) {
gema  "\ n" . warna ( "hijau" , "Pesan:" . $ pesan );
goto gofood;
} lain {
gema  "\ n" . warna ( "putih" , "Pesan:" . $ pesan );
gofood:
gema  "\ n" . warna ( "putih" , "nyohh voucermu .." );
gema  "\ n" . warna ( "putih" , "ENTENI MBOT" );
untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
 warna gema ( "putih" , "." );
}
$ code1 = permintaan ( '/ pergi-promosi / v1 / promosi / pendaftaran ", $ token, $ data); {" promo_code ":" PESANGOFOOD2206 "}' );
$ message = fetch_value ( $ claim1 , '"message": "' , '"' );
gema  "\ n" . warna ( "putih" , "Pesan:" . $ pesan );
gema  "\ n" . warna ( "putih" , "Voucere cukk." );
gema  "\ n" . warna ( "putih" , "Sabar cuk" );
untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
 warna gema ( "putih" , "." );
}
$ boba09 = permintaan ( '/ promosi-promosi / v1 / promosi / pendaftaran ", $ token, $ data); {" promo_code ":" PAKEGOFOOD0906 "}' );
$ messageboba09 = fetch_value ( $ boba09 , '"message": "' , '"' );
gema  "\ n" . warna ( "putih" , "Pesan:" . $ messageboba09 );
}
gofood:
$ cekvoucher = request ( '/ gopoints / v3 / wallet / voucher? limit = 10 & halaman = 1' , $ token );
$ total = fetch_value ( $ cekvoucher , '"total_vouchers":' , ',' );
$ voucher3 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "3" );
$ voucher1 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "1" );
$ voucher2 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "2" );
$ voucher4 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "4" );
$ voucher5 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "5" );
$ voucher6 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "6" );
gema  "\ n" . warna ( "hijau" , "1." . $ voucher1 );
gema  "\ n" . warna ( "hijau" , "2." . $ voucher2 );
gema  "\ n" . warna ( "hijau" , "3." . $ voucher3 );
gema  "\ n" . warna ( "hijau" , "4." . $ voucher4 );
gema  "\ n" . warna ( "hijau" , "5." . $ voucher5 );
gema  "\ n" . warna ( "hijau" , "6." . $ voucher6 );
$ expired1 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '1' );
$ expired2 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '2' );
$ expired3 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '3' );
$ expired4 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '4' );
$ expired5 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '5' );
$ expired6 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '6' );
Setpin:
gema  "\ n" . warna ( "nevy" , "?] Mau mengatur pin ?: y / n" );
$ pilih1 = trim ( fgets ( STDIN ));
if ( $ pilih1 == "y" || $ pilih1 == "Y" ) {
// if ($ pilih1 == "y" && strpos ($ no, "628")) {
 warna gema ( "merah" , "======== (PIN ANDA = 112233) ========" ). "\ n" ;
$ data2 = '{"pin": "112233"}' ;
$ getotpsetpin = request ( "/ wallet / pin" , $ token , $ data2 , null , null , $ uuid );
gema  "Otp set pin:" ;
$ otpsetpin = trim ( fgets ( STDIN ));
$ verifotpsetpin = request ( "/ wallet / pin" , $ token , $ data2 , null , $ otpsetpin , $ uuid );
echo  $ verifotpsetpin ;
} lain  jika ( $ pilih1 == "n" || $ pilih1 == "N" ) {
mati ();
} lain {
 warna gema ( "merah" , "-] COK GAGAL !!! \ n" );
}
} lain {
goto setpin;
}
} lain {
 warna gema ( "merah" , "-] Otp yang Anda masukan salah" );
echo "\ n ================================== \ n \ n" ;
 warna gema ( "kuning" , "!] Silakan masukan kembali \ n" );
pergi otp;
}
} lain {
 warna gema ( "merah" , "NOMOR SAlAH COK !!!" );
echo  "\ nMau ulang? (y / n):" ;
$ pilih = trim ( fgets ( STDIN ));
if ( $ pilih == "y" || $ pilih == "Y" ) {
echo  "\ n ============== Mendaftar ============== \ n" ;
goto ulang;
} lain {
echo  "\ n ============== Mendaftar ============== \ n" ;
goto ulang;
}
}
}
 perubahan gema (). "\ n" ; ?>
