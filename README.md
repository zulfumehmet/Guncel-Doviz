# Guncel_Doviz
inc/db.php dosyasını kendi db bilgileri ile değiştiriniz. 
sqldosyasi.sql bacup dosyasını veritabanınınıza import ediniz.
Sorunsuz çalışacaktır.
bot.php dosyasını da kendi istediğiniz aralıkta cronjob yaparak istediğiniz aralıkta veriyi güncelleyebilirsiniz.
Örnek cronjob:

0	8-17	*	*	1-5 : Hafta içi yani çalışma günlerinde pazartesi ve cuma günleri sabah 8 akşam 17 arası her saat başı bir defa çalışır
/15	8-17	*	*	1-5 : Yukardaki kuralın aynısı sadece 15 dakkada bir çalışır baştaki 15 dk istediğiniz şekilde artırıp azaltabilirsiniz.
Script Özellikleri
Boot ile altın ve döviz bilgilerini db yazdrıma
Bootstrap uyumlu Responsive Tema
Döviz bilgilerini grafiklendirme
