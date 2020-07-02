<? php
date_default_timezone_set ( 'Asia / Jakarta' );
termasuk  "function.php" ;
ulang:
// perubahan fungsi () {
 warna gema ( "merah" , "GENGSOL KALAH JERO KAKEAN BOJO ORA BEJO - BEJO \ n" );
 warna gema ( "putih" , "Waktu:" . tanggal ( '[dmY] [H: i: s]' ). "\ n" );
 warna gema ( "putih" , "Tidak Punah \ n" );
 warna gema ( "putih" , "Format Kode 62 *** \ n" );
        $ nama = nama ();
        $ email = str_replace ( "" , "" , $ nama ). mt_rand ( 100 , 999 );
         warna gema ( "putih" , "NOMOR:" );
        // $ no = trim (fgets (STDIN));
        $ nohp = trim ( fgets ( STDIN ));
        $ nohp = str_replace ( "62" , "62" , $ nohp );
        $ nohp = str_replace ( "(" , "" , $ nohp );
        $ nohp = str_replace ( ")" , "" , $ nohp );
        $ nohp = str_replace ( "-" , "" , $ nohp );
        $ nohp = str_replace ( "" , "" , $ nohp );

        if (! preg_match ( '/ [^ + 0-9] /' , trim ( $ nohp ))) {
            if ( substr ( trim ( $ nohp ), 0 , 3 ) == '62' ) {
                $ hp = trim ( $ nohp );
            }
            lain  jika ( substr ( trim ( $ nohp ), 0 , 1 ) == '0' ) {
                $ hp = '62' . substr ( trim ( $ nohp ), 1 );
        }
         elseif ( substr ( trim ( $ nohp ), 0 , 2 ) == '62' ) {
            $ hp = '6' . substr ( trim ( $ nohp ), 1 );
        }
        selain itu {
            $ hp = '1' . substr ( trim ( $ nohp ), 0 , 13 );
        }
    }
        $ data = '{"email": "' . $ email . '@ gmail.com", "name": "' . $ nama . '", "phone": "+' . $ hp . '", " signed_up_country ":" ID "} ' ;
        $ register = request ( "/ v5 / customers" , null , $ data );
        if ( strpos ( $ register , '"otp_token"' )) {
        $ otptoken = getStr ( '"otp_token": "' , '"' , $ register );
         warna gema ( "putih" , "KODE OTP .." ). "\ n" ;
        otp:
         warna gema ( "putih" , "Otp:" );
        $ otp = trim ( fgets ( STDIN ));
        $ data1 = '{"client_name": "gojek: cons: android", "data": {"otp": "' . $ otp . '", "otp_token": "' . $ otptoken . '"}, " client_secret ":" 83415d06-ec4e-11e6-a41b-6c40088ab51e "} ' ;
        $ verif = permintaan ( "/ v5 / pelanggan / telepon / verifikasi" , null , $ data1 );
        if ( strpos ( $ verif , '"access_token"' )) {
         warna gema ( "putih" , "BERHASIL MENDA berlangganan \ n" );
        $ token = getStr ( '"access_token": "' , '"' , $ verif );
        $ uuid = getStr ( '"resource_owner_id":' , ',' , $ verif );
         warna gema ( "putih" , "+] Token akses Anda:" . $ token . "\ n \ n" );
        save ( "token.txt" , $ token );
         warna gema ( "putih" , "\ n▬▬▬▬▬▬▬▬▬▬▬▬CLAIM VOUCHER▬▬▬▬▬▬▬▬▬▬▬▬" );
        gema  "\ n" . warna ( "putih" , "KLAIM A .." );
        gema  "\ n" . warna ( "putih" , "Harap tunggu" );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "putih" , "." );
        tidur ( 5 );
        }
        $ code1 = permintaan ( '/ go-promotion / v1 / promotion / pendaftaran' , $ token , '{"promo_code": "EATLAH"}' );
        $ message = fetch_value ( $ code1 , '"message": "' , '"' );
        if ( strpos ( $ code1 , 'Promo kamu sudah bisa dipakai' )) {
        gema  "\ n" . warna ( "hijau" , "Pesan:" . $ pesan );
        goto gocar;
        } lain {
        gema  "\ n" . warna ( "putih" , "Pesan:" . $ pesan );
	gocar:
        gema  "\ n" . warna ( "putih" , "KLAIM B .." );
        gema  "\ n" . warna ( "putih" , "Harap tunggu" );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "putih" , "." );
        tidur ( 35 );
        }
        $ code1 = permintaan ( '/ promosi-pergi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "COBAGOFOOD2206"}' );
        $ message = fetch_value ( $ code1 , '"message": "' , '"' );
        if ( strpos ( $ code1 , 'Promo kamu sudah bisa dipakai.' )) {
        gema  "\ n" . warna ( "hijau" , "Pesan:" . $ pesan );
        goto gofood;
        } lain {
        gema  "\ n" . warna ( "putih" , "Pesan:" . $ pesan );
        gofood:
        gema  "\ n" . warna ( "putih" , "KLAIM C .." );
        gema  "\ n" . warna ( "putih" , "Harap tunggu" );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "putih" , "." );
        tidur ( 3 );
        }
        $ code1 = permintaan ( '/ promosi-pergi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "PESANGOFOOD2206"}' );
        $ message = fetch_value ( $ code1 , '"message": "' , '"' );
        gema  "\ n" . warna ( "putih" , "Pesan:" . $ pesan );
        gema  "\ n" . warna ( "putih" , "VOCER COLI." );
        gema  "\ n" . warna ( "putih" , "Harap tunggu" );
        untuk ( $ a = 1 ; $ a <= 3 ; $ a ++) {
         warna gema ( "putih" , "." );
        tidur ( 3 );
        }
        tidur ( 3 );
        $ boba09 = permintaan ( '/ promosi-promosi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "PAKEGOFOOD0906"}' );
        $ messageboba09 = fetch_value ( $ boba09 , '"message": "' , '"' );
        gema  "\ n" . warna ( "putih" , "Pesan:" . $ messageboba09 );
        tidur ( 1 );
