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
