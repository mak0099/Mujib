<?php

use Illuminate\Database\Seeder;
use App\Model\Thana;

class ThanaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thana::insert([
            ['id'=>'7','district_id'=>'49','name'=>'Faridpur Sadar'],
['id'=>'8','district_id'=>'49','name'=>'Saltha'],
['id'=>'9','district_id'=>'49','name'=>'Nagarkanda'],
['id'=>'10','district_id'=>'49','name'=>'Alfadanga'],
['id'=>'11','district_id'=>'49','name'=>'Bowalmari'],
['id'=>'12','district_id'=>'49','name'=>'Modhukhali'],
['id'=>'13','district_id'=>'49','name'=>'Vanga'],
['id'=>'14','district_id'=>'49','name'=>'Sadarpur'],
['id'=>'16','district_id'=>'50','name'=>'Rajbari Sadar'],
['id'=>'17','district_id'=>'50','name'=>'Guwalando'],
['id'=>'18','district_id'=>'50','name'=>'Pangsha'],
['id'=>'19','district_id'=>'50','name'=>'Baliyakandi'],
['id'=>'20','district_id'=>'105','name'=>'Gopalgonj Sadar'],
['id'=>'21','district_id'=>'105','name'=>'Kotalipara'],
['id'=>'22','district_id'=>'105','name'=>'Tongi para'],
['id'=>'23','district_id'=>'105','name'=>'Muksod pur'],
['id'=>'24','district_id'=>'105','name'=>'Kashiyani'],
['id'=>'25','district_id'=>'99','name'=>'Magura Sadar'],
['id'=>'26','district_id'=>'99','name'=>'Sripur'],
['id'=>'27','district_id'=>'99','name'=>'Shalikha'],
['id'=>'28','district_id'=>'99','name'=>'Mohammadpur'],
['id'=>'29','district_id'=>'116','name'=>'Boalkhali'],
['id'=>'34','district_id'=>'116','name'=>'Chandanaish'],
['id'=>'35','district_id'=>'116','name'=>'Fatikchhari'],
['id'=>'36','district_id'=>'116','name'=>'Hathazari'],
['id'=>'37','district_id'=>'116','name'=>'Lohagara'],
['id'=>'38','district_id'=>'116','name'=>'Mirsharai'],
['id'=>'39','district_id'=>'116','name'=>'Patiya'],
['id'=>'40','district_id'=>'116','name'=>'Rangunia'],
['id'=>'41','district_id'=>'116','name'=>'Raozan'],
['id'=>'42','district_id'=>'116','name'=>'Sandwip'],
['id'=>'43','district_id'=>'116','name'=>'Satkania'],
['id'=>'44','district_id'=>'116','name'=>'Sitakunda'],
['id'=>'45','district_id'=>'70','name'=>'Barura'],
['id'=>'46','district_id'=>'70','name'=>'Brahmanpara'],
['id'=>'47','district_id'=>'70','name'=>'Burichong'],
['id'=>'48','district_id'=>'70','name'=>'Chandina'],
['id'=>'49','district_id'=>'70','name'=>'Chauddagram'],
['id'=>'50','district_id'=>'70','name'=>'Daudkandi'],
['id'=>'51','district_id'=>'70','name'=>'Debidwar'],
['id'=>'52','district_id'=>'70','name'=>'Homna'],
['id'=>'53','district_id'=>'70','name'=>'Comilla Adarsa Sadar'],
['id'=>'54','district_id'=>'70','name'=>'Laksam'],
['id'=>'55','district_id'=>'70','name'=>'Monohorgonj'],
['id'=>'56','district_id'=>'70','name'=>'Meghna'],
['id'=>'57','district_id'=>'70','name'=>'Muradnagar'],
['id'=>'58','district_id'=>'70','name'=>'Nangalkot'],
['id'=>'59','district_id'=>'70','name'=>'Comilla Sadar South'],
['id'=>'60','district_id'=>'70','name'=>'Titas'],
['id'=>'61','district_id'=>'74','name'=>'Feni sadar'],
['id'=>'62','district_id'=>'74','name'=>'Chagalnaiya'],
['id'=>'63','district_id'=>'74','name'=>'Daganbhyan'],
['id'=>'64','district_id'=>'74','name'=>'Parshuram'],
['id'=>'65','district_id'=>'74','name'=>'Fhulgazi'],
['id'=>'66','district_id'=>'74','name'=>'Sonagazi'],
['id'=>'67','district_id'=>'76','name'=>'Dighinala'],
['id'=>'68','district_id'=>'76','name'=>'Khagrachhari'],
['id'=>'69','district_id'=>'76','name'=>'Lakshmichhari'],
['id'=>'70','district_id'=>'76','name'=>'Mahalchhari'],
['id'=>'71','district_id'=>'76','name'=>'Manikchhari'],
['id'=>'72','district_id'=>'76','name'=>'Matiranga'],
['id'=>'73','district_id'=>'76','name'=>'Panchhar'],
['id'=>'74','district_id'=>'76','name'=>'Ramgarh'],
['id'=>'75','district_id'=>'73','name'=>'Laxmipur Sadar'],
['id'=>'76','district_id'=>'73','name'=>'Raipur'],
['id'=>'77','district_id'=>'73','name'=>'Ramganj'],
['id'=>'78','district_id'=>'73','name'=>'Ramgati'],
['id'=>'79','district_id'=>'73','name'=>'Komol Nagar'],
['id'=>'80','district_id'=>'72','name'=>'Begumganj'],
['id'=>'81','district_id'=>'72','name'=>'Chatkhil'],
['id'=>'82','district_id'=>'72','name'=>'Companiganj'],
['id'=>'83','district_id'=>'72','name'=>'Hatiya'],
['id'=>'84','district_id'=>'72','name'=>'Noakhali Sadar'],
['id'=>'85','district_id'=>'72','name'=>'Senbagh'],
['id'=>'86','district_id'=>'72','name'=>'Sonaimuri'],
['id'=>'87','district_id'=>'77','name'=>'Rangamati Sadar'],
['id'=>'88','district_id'=>'77','name'=>'Belaichhari'],
['id'=>'89','district_id'=>'77','name'=>'Bagaichhari'],
['id'=>'90','district_id'=>'77','name'=>'Barkal'],
['id'=>'91','district_id'=>'77','name'=>'Juraichhari'],
['id'=>'92','district_id'=>'77','name'=>'Rajasthali'],
['id'=>'93','district_id'=>'77','name'=>'Kaptai'],
['id'=>'94','district_id'=>'77','name'=>'Langadu'],
['id'=>'95','district_id'=>'77','name'=>'Nannerchar'],
['id'=>'96','district_id'=>'77','name'=>'Kaukhali'],
['id'=>'97','district_id'=>'56','name'=>'Dohar'],
['id'=>'98','district_id'=>'56','name'=>'Dhamrai'],
['id'=>'99','district_id'=>'56','name'=>'Nawabgonj'],
['id'=>'100','district_id'=>'58','name'=>'Gazipur Sadar'],
['id'=>'101','district_id'=>'58','name'=>'Joydebpur'],
['id'=>'102','district_id'=>'58','name'=>'Kaliakior'],
['id'=>'103','district_id'=>'58','name'=>'Kapasia'],
['id'=>'104','district_id'=>'58','name'=>'Sripur'],
['id'=>'105','district_id'=>'58','name'=>'Kaliganj'],
['id'=>'106','district_id'=>'58','name'=>'Tongi'],
['id'=>'107','district_id'=>'62','name'=>'Dewanganj'],
['id'=>'108','district_id'=>'62','name'=>'Baksiganj'],
['id'=>'109','district_id'=>'62','name'=>'Islampur'],
['id'=>'110','district_id'=>'62','name'=>'Jamalpur Sadar'],
['id'=>'111','district_id'=>'62','name'=>'Madarganj'],
['id'=>'112','district_id'=>'62','name'=>'Melandaha'],
['id'=>'113','district_id'=>'62','name'=>'Sarishabari'],
['id'=>'114','district_id'=>'59','name'=>'Astagram'],
['id'=>'115','district_id'=>'59','name'=>'Bajitpur'],
['id'=>'116','district_id'=>'59','name'=>'Bhairab'],
['id'=>'117','district_id'=>'59','name'=>'Hossainpur'],
['id'=>'118','district_id'=>'59','name'=>'Itna'],
['id'=>'119','district_id'=>'59','name'=>'Karimganj'],
['id'=>'120','district_id'=>'59','name'=>'Katiadi'],
['id'=>'121','district_id'=>'59','name'=>'Kishoreganj Sadar'],
['id'=>'122','district_id'=>'59','name'=>'Kuliarchar'],
['id'=>'123','district_id'=>'59','name'=>'Mithamain'],
['id'=>'124','district_id'=>'59','name'=>'Nikli'],
['id'=>'125','district_id'=>'59','name'=>'Pakundia'],
['id'=>'126','district_id'=>'59','name'=>'Tarail'],
['id'=>'127','district_id'=>'52','name'=>'Madaripur Sadar'],
['id'=>'128','district_id'=>'52','name'=>'Kalkini'],
['id'=>'129','district_id'=>'52','name'=>'Rajoir'],
['id'=>'130','district_id'=>'52','name'=>'shibchar'],
['id'=>'131','district_id'=>'54','name'=>'Manikganj Sadar'],
['id'=>'132','district_id'=>'54','name'=>'Singair'],
['id'=>'133','district_id'=>'54','name'=>'Shivalaya'],
['id'=>'134','district_id'=>'54','name'=>'Saturia'],
['id'=>'135','district_id'=>'54','name'=>'Harirampur'],
['id'=>'136','district_id'=>'54','name'=>'Ghior'],
['id'=>'137','district_id'=>'54','name'=>'Daulatpur'],
['id'=>'138','district_id'=>'55','name'=>'Lohajang'],
['id'=>'139','district_id'=>'55','name'=>'Sreenagar'],
['id'=>'140','district_id'=>'55','name'=>'Munshiganj Sadar'],
['id'=>'141','district_id'=>'55','name'=>'Sirajdikhan'],
['id'=>'142','district_id'=>'55','name'=>'Tongibari'],
['id'=>'143','district_id'=>'55','name'=>'Gazaria'],
['id'=>'144','district_id'=>'60','name'=>'Bhaluka'],
['id'=>'145','district_id'=>'60','name'=>'Trishal'],
['id'=>'146','district_id'=>'60','name'=>'Haluaghat'],
['id'=>'147','district_id'=>'60','name'=>'Muktagachha'],
['id'=>'148','district_id'=>'60','name'=>'Dhobaura'],
['id'=>'150','district_id'=>'60','name'=>'Gaffargaon'],
['id'=>'151','district_id'=>'60','name'=>'Gauripur'],
['id'=>'152','district_id'=>'60','name'=>'Ishwarganj'],
['id'=>'153','district_id'=>'60','name'=>'Mymensingh Sadar'],
['id'=>'154','district_id'=>'60','name'=>'Nandail'],
['id'=>'155','district_id'=>'60','name'=>'Phulpur'],
['id'=>'156','district_id'=>'57','name'=>'Araihazar'],
['id'=>'157','district_id'=>'57','name'=>'Sonargaon'],
['id'=>'158','district_id'=>'57','name'=>'Bandar'],
['id'=>'159','district_id'=>'57','name'=>'Naryanganj Sadar'],
['id'=>'160','district_id'=>'57','name'=>'Rupganj'],
['id'=>'161','district_id'=>'57','name'=>'Siddirgonj'],
['id'=>'162','district_id'=>'57','name'=>'Siddirgonj'],
['id'=>'163','district_id'=>'112','name'=>'Belabo'],
['id'=>'164','district_id'=>'112','name'=>'Monohardi'],
['id'=>'165','district_id'=>'112','name'=>'Narsingdi Sadar'],
['id'=>'166','district_id'=>'112','name'=>'Palash'],
['id'=>'167','district_id'=>'112','name'=>'Raipura'],
['id'=>'168','district_id'=>'112','name'=>'Shibpur'],
['id'=>'169','district_id'=>'64','name'=>'Durgapur'],
['id'=>'171','district_id'=>'64','name'=>'Kalmakanda'],
['id'=>'172','district_id'=>'64','name'=>'Purbadhala'],
['id'=>'173','district_id'=>'64','name'=>'Netrokona Sadar'],
['id'=>'174','district_id'=>'64','name'=>'Atpara'],
['id'=>'175','district_id'=>'64','name'=>'Mohongonj'],
['id'=>'177','district_id'=>'64','name'=>'Madan'],
['id'=>'178','district_id'=>'64','name'=>'Khaliajuri'],
['id'=>'179','district_id'=>'53','name'=>'Shariatpur'],
['id'=>'180','district_id'=>'53','name'=>'Damudya'],
['id'=>'181','district_id'=>'53','name'=>'Naria'],
['id'=>'182','district_id'=>'53','name'=>'Jajira'],
['id'=>'183','district_id'=>'53','name'=>'Bhedarganj'],
['id'=>'184','district_id'=>'53','name'=>'Gosairhat'],
['id'=>'185','district_id'=>'53','name'=>'Shakhipur'],
['id'=>'186','district_id'=>'63','name'=>'Jhenaigati'],
['id'=>'187','district_id'=>'63','name'=>'Nakla'],
['id'=>'188','district_id'=>'63','name'=>'Nalitabari'],
['id'=>'189','district_id'=>'63','name'=>'Sherpur Sadar'],
['id'=>'190','district_id'=>'63','name'=>'Sreebardi'],
['id'=>'191','district_id'=>'61','name'=>'Tangail Sadar'],
['id'=>'192','district_id'=>'61','name'=>'Sakhipur'],
['id'=>'193','district_id'=>'61','name'=>'Basail'],
['id'=>'194','district_id'=>'61','name'=>'Madhupur'],
['id'=>'195','district_id'=>'61','name'=>'Ghatail'],
['id'=>'196','district_id'=>'61','name'=>'Kalihati'],
['id'=>'197','district_id'=>'61','name'=>'Nagarpur'],
['id'=>'198','district_id'=>'61','name'=>'Mirzapur'],
['id'=>'199','district_id'=>'61','name'=>'Gopalpur'],
['id'=>'200','district_id'=>'61','name'=>'Delduar'],
['id'=>'201','district_id'=>'61','name'=>'Bhuapur'],
['id'=>'202','district_id'=>'61','name'=>'Dhonbari'],
['id'=>'203','district_id'=>'104','name'=>'Bagerhat Sadar'],
['id'=>'204','district_id'=>'104','name'=>'Chitalmari'],
['id'=>'205','district_id'=>'104','name'=>'Fakirhat'],
['id'=>'206','district_id'=>'104','name'=>'Kachua'],
['id'=>'207','district_id'=>'104','name'=>'Mollahat'],
['id'=>'208','district_id'=>'104','name'=>'Mongla'],
['id'=>'209','district_id'=>'104','name'=>'Morrelganj'],
['id'=>'210','district_id'=>'104','name'=>'Rampal'],
['id'=>'211','district_id'=>'104','name'=>'Sarankhola'],
['id'=>'212','district_id'=>'49','name'=>'Char vodrashon'],
['id'=>'215','district_id'=>'93','name'=>'Iswardi'],
['id'=>'217','district_id'=>'103','name'=>'Terokhada'],
['id'=>'218','district_id'=>'103','name'=>'Batiaghata'],
['id'=>'219','district_id'=>'103','name'=>'Dacope'],
['id'=>'220','district_id'=>'103','name'=>'Dumuria'],
['id'=>'221','district_id'=>'103','name'=>'Dighalia'],
['id'=>'222','district_id'=>'103','name'=>'Koyra'],
['id'=>'223','district_id'=>'103','name'=>'Paikgachha'],
['id'=>'224','district_id'=>'103','name'=>'Phultala'],
['id'=>'225','district_id'=>'103','name'=>'Rupsa'],
['id'=>'226','district_id'=>'95','name'=>'Kushtia Sadar'],
['id'=>'227','district_id'=>'95','name'=>'Kumarkhali'],
['id'=>'228','district_id'=>'95','name'=>'Daulatpur'],
['id'=>'229','district_id'=>'95','name'=>'Mirpur'],
['id'=>'230','district_id'=>'95','name'=>'Bheramara'],
['id'=>'231','district_id'=>'95','name'=>'Khoksa'],
['id'=>'232','district_id'=>'99','name'=>'Magura Sadar'],
['id'=>'233','district_id'=>'99','name'=>'Mohammadpur'],
['id'=>'234','district_id'=>'99','name'=>'Shalikha'],
['id'=>'235','district_id'=>'99','name'=>'Sreepur'],
['id'=>'236','district_id'=>'96','name'=>'Meher pur Sadar'],
['id'=>'237','district_id'=>'96','name'=>'Gangni'],
['id'=>'238','district_id'=>'96','name'=>'Mujib nagar'],
['id'=>'239','district_id'=>'100','name'=>'Narail Sadar'],
['id'=>'240','district_id'=>'100','name'=>'Kalia'],
['id'=>'241','district_id'=>'100','name'=>'Lohagara'],
['id'=>'242','district_id'=>'102','name'=>'Satkhira Sadar'],
['id'=>'243','district_id'=>'102','name'=>'Assasuni'],
['id'=>'244','district_id'=>'102','name'=>'Debhata'],
['id'=>'245','district_id'=>'102','name'=>'Tala'],
['id'=>'246','district_id'=>'102','name'=>'Kalaroa'],
['id'=>'247','district_id'=>'102','name'=>'Kaliganj'],
['id'=>'248','district_id'=>'102','name'=>'Shyamnagar'],
['id'=>'249','district_id'=>'87','name'=>'Adamdighi'],
['id'=>'250','district_id'=>'87','name'=>'Bogra Sadar'],
['id'=>'251','district_id'=>'87','name'=>'Dhunat'],
['id'=>'252','district_id'=>'87','name'=>'Dupchanchia'],
['id'=>'253','district_id'=>'87','name'=>'Gabtali'],
['id'=>'254','district_id'=>'87','name'=>'Kahaloo'],
['id'=>'255','district_id'=>'87','name'=>'Nandigram'],
['id'=>'256','district_id'=>'87','name'=>'Sahajanpur'],
['id'=>'257','district_id'=>'87','name'=>'Sariakandi'],
['id'=>'258','district_id'=>'87','name'=>'Sherpur'],
['id'=>'259','district_id'=>'87','name'=>'Shibganj'],
['id'=>'260','district_id'=>'87','name'=>'Sonatala'],
['id'=>'261','district_id'=>'88','name'=>'Akkelpur'],
['id'=>'262','district_id'=>'88','name'=>'Joypurhat Sadar'],
['id'=>'263','district_id'=>'88','name'=>'Kalai'],
['id'=>'264','district_id'=>'88','name'=>'Khetlal'],
['id'=>'265','district_id'=>'88','name'=>'Panchbibi'],
['id'=>'266','district_id'=>'89','name'=>'Naogaon'],
['id'=>'267','district_id'=>'89','name'=>'Manda'],
['id'=>'268','district_id'=>'89','name'=>'Niamatpur'],
['id'=>'269','district_id'=>'89','name'=>'Atrai'],
['id'=>'270','district_id'=>'89','name'=>'Raninagar'],
['id'=>'271','district_id'=>'89','name'=>'Patnitala'],
['id'=>'272','district_id'=>'89','name'=>'Mahadevpur'],
['id'=>'273','district_id'=>'89','name'=>'Dhamoirhat'],
['id'=>'274','district_id'=>'89','name'=>'Sapahar'],
['id'=>'275','district_id'=>'89','name'=>'Porsha'],
['id'=>'276','district_id'=>'89','name'=>'Badalgachhi'],
['id'=>'277','district_id'=>'92','name'=>'Singra'],
['id'=>'278','district_id'=>'92','name'=>'Boraigram'],
['id'=>'279','district_id'=>'92','name'=>'Gurudaspur'],
['id'=>'280','district_id'=>'92','name'=>'Bagatipara'],
['id'=>'281','district_id'=>'92','name'=>'Lalpur'],
['id'=>'282','district_id'=>'92','name'=>'Natore Sadar'],
['id'=>'283','district_id'=>'92','name'=>'Baraigram'],
['id'=>'284','district_id'=>'90','name'=>'Bholahat'],
['id'=>'285','district_id'=>'90','name'=>'Gomastapur'],
['id'=>'286','district_id'=>'90','name'=>'Nachole'],
['id'=>'287','district_id'=>'90','name'=>'Nawabganj Sadar'],
['id'=>'288','district_id'=>'90','name'=>'Shibganj'],
['id'=>'289','district_id'=>'93','name'=>'Atgharia'],
['id'=>'290','district_id'=>'93','name'=>'Bera'],
['id'=>'291','district_id'=>'93','name'=>'Bhangura'],
['id'=>'292','district_id'=>'93','name'=>'Chatmohar'],
['id'=>'293','district_id'=>'93','name'=>'Faridpur'],
['id'=>'294','district_id'=>'93','name'=>'Ishwardi'],
['id'=>'295','district_id'=>'93','name'=>'Pabna Sadar'],
['id'=>'296','district_id'=>'93','name'=>'Santhia'],
['id'=>'297','district_id'=>'93','name'=>'Sujanagar'],
['id'=>'298','district_id'=>'91','name'=>'Bagha'],
['id'=>'299','district_id'=>'91','name'=>'Bagmara'],
['id'=>'300','district_id'=>'91','name'=>'Charghat'],
['id'=>'301','district_id'=>'91','name'=>'Durgapur'],
['id'=>'302','district_id'=>'91','name'=>'Godagari'],
['id'=>'303','district_id'=>'91','name'=>'Mohanpur'],
['id'=>'304','district_id'=>'91','name'=>'Paba'],
['id'=>'305','district_id'=>'91','name'=>'Puthia'],
['id'=>'306','district_id'=>'91','name'=>'Tanore'],
['id'=>'307','district_id'=>'56','name'=>'Ramna'],
['id'=>'309','district_id'=>'56','name'=>'Dhanmondi'],
['id'=>'310','district_id'=>'56','name'=>'Hajaribag'],
['id'=>'311','district_id'=>'56','name'=>'New market'],
['id'=>'312','district_id'=>'56','name'=>'Shahabag'],
['id'=>'313','district_id'=>'56','name'=>'Kala Bagan'],
['id'=>'314','district_id'=>'56','name'=>'Lal bag'],
['id'=>'315','district_id'=>'56','name'=>'Kotowali'],
['id'=>'316','district_id'=>'56','name'=>'Kamrangirchar'],
['id'=>'317','district_id'=>'56','name'=>'Chalk bazar'],
['id'=>'318','district_id'=>'56','name'=>'Bangshal'],
['id'=>'319','district_id'=>'56','name'=>'Sutrapur'],
['id'=>'320','district_id'=>'56','name'=>'Shampur'],
['id'=>'321','district_id'=>'56','name'=>'Jatrabari'],
['id'=>'322','district_id'=>'56','name'=>'Demra'],
['id'=>'323','district_id'=>'56','name'=>'Kadamtoli'],
['id'=>'324','district_id'=>'56','name'=>'Gendaria'],
['id'=>'325','district_id'=>'56','name'=>'Motijheel'],
['id'=>'326','district_id'=>'56','name'=>'Polton'],
['id'=>'327','district_id'=>'56','name'=>'subojbag'],
['id'=>'329','district_id'=>'56','name'=>'Khilgoun'],
['id'=>'330','district_id'=>'56','name'=>'Rampura'],
['id'=>'331','district_id'=>'56','name'=>'Tejgoun'],
['id'=>'332','district_id'=>'56','name'=>'Sherebangla nagar'],
['id'=>'333','district_id'=>'56','name'=>'Tejgoun Industrial Area'],
['id'=>'334','district_id'=>'56','name'=>'Mohammadpur'],
['id'=>'335','district_id'=>'56','name'=>'Adabor'],
['id'=>'336','district_id'=>'56','name'=>'Mirpur'],
['id'=>'337','district_id'=>'56','name'=>'Shahali'],
['id'=>'338','district_id'=>'56','name'=>'Pollobi'],
['id'=>'339','district_id'=>'56','name'=>'Kaprul'],
['id'=>'340','district_id'=>'56','name'=>'Darus salam'],
['id'=>'341','district_id'=>'56','name'=>'Gulshan'],
['id'=>'342','district_id'=>'56','name'=>'Badda'],
['id'=>'343','district_id'=>'56','name'=>'Cantonment'],
['id'=>'344','district_id'=>'56','name'=>'Kilket'],
['id'=>'345','district_id'=>'56','name'=>'Uttara'],
['id'=>'346','district_id'=>'56','name'=>'Turag'],
['id'=>'347','district_id'=>'56','name'=>'Uttar khan'],
['id'=>'348','district_id'=>'56','name'=>'Dakkin khan'],
['id'=>'349','district_id'=>'56','name'=>'Biman bandar'],
['id'=>'350','district_id'=>'94','name'=>'Sirajganj Sadar'],
['id'=>'351','district_id'=>'94','name'=>'Belkuchi'],
['id'=>'352','district_id'=>'94','name'=>'Chauhali'],
['id'=>'353','district_id'=>'94','name'=>'Kamarkhanda'],
['id'=>'354','district_id'=>'94','name'=>'Kazipur'],
['id'=>'355','district_id'=>'94','name'=>'Raiganj'],
['id'=>'356','district_id'=>'94','name'=>'Shahjadpur'],
['id'=>'357','district_id'=>'94','name'=>'Tarash'],
['id'=>'358','district_id'=>'94','name'=>'Ullahpara'],
['id'=>'359','district_id'=>'56','name'=>'Ashulia'],
['id'=>'360','district_id'=>'56','name'=>'Savar'],
['id'=>'361','district_id'=>'56','name'=>'Keranigonj'],
['id'=>'362','district_id'=>'56','name'=>'South Keranigonj'],
['id'=>'363','district_id'=>'84','name'=>'Birampur'],
['id'=>'364','district_id'=>'84','name'=>'Birganj'],
['id'=>'365','district_id'=>'84','name'=>'Biral'],
['id'=>'366','district_id'=>'84','name'=>'Bochaganj'],
['id'=>'367','district_id'=>'84','name'=>'Chirirbandar'],
['id'=>'368','district_id'=>'84','name'=>'Phulbari'],
['id'=>'369','district_id'=>'84','name'=>'Ghoraghat'],
['id'=>'370','district_id'=>'84','name'=>'Hakimpur'],
['id'=>'371','district_id'=>'84','name'=>'Kaharole'],
['id'=>'372','district_id'=>'84','name'=>'Khansama'],
['id'=>'373','district_id'=>'84','name'=>'Dinajpur Sadar'],
['id'=>'374','district_id'=>'84','name'=>'Nawabganj'],
['id'=>'375','district_id'=>'84','name'=>'Parbatipur'],
['id'=>'376','district_id'=>'84','name'=>'Parbatipur'],
['id'=>'377','district_id'=>'85','name'=>'Fulchhari'],
['id'=>'378','district_id'=>'85','name'=>'Gaibandha sadar'],
['id'=>'379','district_id'=>'85','name'=>'Gobindaganj'],
['id'=>'380','district_id'=>'85','name'=>'Palashbari'],
['id'=>'381','district_id'=>'85','name'=>'Sadullapur'],
['id'=>'382','district_id'=>'85','name'=>'Saghata'],
['id'=>'383','district_id'=>'85','name'=>'Sundarganj'],
['id'=>'384','district_id'=>'83','name'=>'Kurigram Sadar'],
['id'=>'385','district_id'=>'83','name'=>'Nageswari'],
['id'=>'386','district_id'=>'83','name'=>'Bhurungamari'],
['id'=>'387','district_id'=>'83','name'=>'Phulbari'],
['id'=>'388','district_id'=>'83','name'=>'Rajarhat'],
['id'=>'389','district_id'=>'83','name'=>'Ulipur'],
['id'=>'390','district_id'=>'83','name'=>'Chilmari'],
['id'=>'391','district_id'=>'83','name'=>'Rowmari'],
['id'=>'392','district_id'=>'83','name'=>'Char Rajibpur'],
['id'=>'393','district_id'=>'83','name'=>'Char Rajibpur'],
['id'=>'394','district_id'=>'113','name'=>'Lalmanirhat Sadar'],
['id'=>'395','district_id'=>'113','name'=>'Aditmari'],
['id'=>'396','district_id'=>'113','name'=>'Kaliganj'],
['id'=>'397','district_id'=>'113','name'=>'Hatibandha'],
['id'=>'398','district_id'=>'113','name'=>'Patgram'],
['id'=>'399','district_id'=>'82','name'=>'Nilphamari Sadar'],
['id'=>'400','district_id'=>'82','name'=>'Saidpur'],
['id'=>'401','district_id'=>'82','name'=>'Jaldhaka'],
['id'=>'402','district_id'=>'82','name'=>'Kishoreganj'],
['id'=>'403','district_id'=>'82','name'=>'Domar'],
['id'=>'404','district_id'=>'82','name'=>'Dimla'],
['id'=>'405','district_id'=>'80','name'=>'Panchagarh Sadar'],
['id'=>'406','district_id'=>'80','name'=>'Debiganj'],
['id'=>'407','district_id'=>'80','name'=>'Boda'],
['id'=>'408','district_id'=>'80','name'=>'Atwari'],
['id'=>'409','district_id'=>'80','name'=>'Tetulia'],
['id'=>'410','district_id'=>'86','name'=>'Badarganj'],
['id'=>'411','district_id'=>'86','name'=>'Mithapukur'],
['id'=>'412','district_id'=>'86','name'=>'Gangachara'],
['id'=>'413','district_id'=>'86','name'=>'Kaunia'],
['id'=>'414','district_id'=>'86','name'=>'Rangpur Sadar'],
['id'=>'415','district_id'=>'86','name'=>'Pirgachha'],
['id'=>'416','district_id'=>'86','name'=>'Pirganj'],
['id'=>'417','district_id'=>'86','name'=>'Taraganj'],
['id'=>'418','district_id'=>'81','name'=>'Thakurgaon Sadar'],
['id'=>'419','district_id'=>'81','name'=>'Pirganj'],
['id'=>'420','district_id'=>'81','name'=>'Baliadangi'],
['id'=>'421','district_id'=>'81','name'=>'Haripur'],
['id'=>'422','district_id'=>'81','name'=>'Ranisankail'],
['id'=>'423','district_id'=>'67','name'=>'Ajmiriganj'],
['id'=>'424','district_id'=>'67','name'=>'Baniachang'],
['id'=>'425','district_id'=>'67','name'=>'Bahubal'],
['id'=>'426','district_id'=>'67','name'=>'Chunarughat'],
['id'=>'427','district_id'=>'67','name'=>'Habiganj Sadar'],
['id'=>'428','district_id'=>'67','name'=>'Lakhai'],
['id'=>'429','district_id'=>'67','name'=>'Madhabpur'],
['id'=>'430','district_id'=>'67','name'=>'Nabiganj'],
['id'=>'431','district_id'=>'67','name'=>'Shaistagonj'],
['id'=>'432','district_id'=>'68','name'=>'Moulvibazar Sadar'],
['id'=>'433','district_id'=>'68','name'=>'Barlekha'],
['id'=>'434','district_id'=>'68','name'=>'Juri'],
['id'=>'435','district_id'=>'68','name'=>'Kamalganj'],
['id'=>'436','district_id'=>'68','name'=>'Kulaura'],
['id'=>'437','district_id'=>'68','name'=>'Rajnagar'],
['id'=>'438','district_id'=>'68','name'=>'Sreemangal'],
['id'=>'439','district_id'=>'66','name'=>'Bishwamvarpur'],
['id'=>'440','district_id'=>'66','name'=>'Chhatak'],
['id'=>'441','district_id'=>'66','name'=>'Derai'],
['id'=>'442','district_id'=>'66','name'=>'Dharampasha'],
['id'=>'443','district_id'=>'66','name'=>'Dowarabazar'],
['id'=>'444','district_id'=>'66','name'=>'Jagannathpur'],
['id'=>'445','district_id'=>'66','name'=>'Jamalganj'],
['id'=>'446','district_id'=>'66','name'=>'Sulla'],
['id'=>'447','district_id'=>'66','name'=>'Sunamganj Sadar'],
['id'=>'448','district_id'=>'66','name'=>'Tahirpur'],
['id'=>'449','district_id'=>'65','name'=>'Balaganj'],
['id'=>'450','district_id'=>'65','name'=>'Beanibazar'],
['id'=>'451','district_id'=>'65','name'=>'Bishwanath'],
['id'=>'452','district_id'=>'65','name'=>'Companiganj'],
['id'=>'453','district_id'=>'65','name'=>'Fenchuganj'],
['id'=>'454','district_id'=>'65','name'=>'Golapganj'],
['id'=>'455','district_id'=>'65','name'=>'Gowainghat'],
['id'=>'456','district_id'=>'65','name'=>'Jaintiapur'],
['id'=>'457','district_id'=>'65','name'=>'Kanaighat'],
['id'=>'458','district_id'=>'65','name'=>'Sylhet Sadar'],
['id'=>'459','district_id'=>'65','name'=>'Zakiganj'],
['id'=>'460','district_id'=>'79','name'=>'Cox\'s Bazar Sadar'],
['id'=>'461','district_id'=>'79','name'=>'Kutubdia'],
['id'=>'462','district_id'=>'79','name'=>'Moheskhali'],
['id'=>'463','district_id'=>'79','name'=>'Ramu'],
['id'=>'464','district_id'=>'79','name'=>'Chakaria'],
['id'=>'465','district_id'=>'79','name'=>'Ukia'],
['id'=>'466','district_id'=>'79','name'=>'Teknaf'],
['id'=>'467','district_id'=>'64','name'=>'Barohatta'],
['id'=>'468','district_id'=>'64','name'=>'Kandua'],
['id'=>'469','district_id'=>'59','name'=>'Astogram'],
['id'=>'475','district_id'=>'116','name'=>'Anowara'],
['id'=>'476','district_id'=>'116','name'=>'Banshkhali'],
['id'=>'478','district_id'=>'70','name'=>'Langalcoat'],
['id'=>'479','district_id'=>'71','name'=>'Chandpur Sadar'],
['id'=>'480','district_id'=>'71','name'=>'Matlob North'],
['id'=>'481','district_id'=>'71','name'=>'Matlob South'],
['id'=>'482','district_id'=>'71','name'=>'Hajigonj'],
['id'=>'483','district_id'=>'71','name'=>'Faridgonj'],
['id'=>'484','district_id'=>'71','name'=>'Kachua'],
['id'=>'485','district_id'=>'71','name'=>'Haimchar'],
['id'=>'486','district_id'=>'71','name'=>'Shahrasti'],
['id'=>'487','district_id'=>'78','name'=>'Naikhnchhri'],
['id'=>'488','district_id'=>'78','name'=>'Lama'],
['id'=>'489','district_id'=>'78','name'=>'Alikdom'],
['id'=>'490','district_id'=>'78','name'=>'Royanchhri'],
['id'=>'491','district_id'=>'78','name'=>'Thanchi'],
['id'=>'492','district_id'=>'78','name'=>'Ruma'],
['id'=>'493','district_id'=>'78','name'=>'Bandarnbab Sudar'],
['id'=>'494','district_id'=>'78','name'=>'Bandarnbab Sudar'],
['id'=>'495','district_id'=>'78','name'=>'Bandarnban Sudar'],
['id'=>'496','district_id'=>'78','name'=>'Bandarnban Sudar'],
['id'=>'497','district_id'=>'72','name'=>'Subornochar'],
['id'=>'498','district_id'=>'72','name'=>'Kobirhat'],
['id'=>'499','district_id'=>'72','name'=>'Kobirhat'],
['id'=>'500','district_id'=>'69','name'=>'B-baria Sadar'],
['id'=>'501','district_id'=>'69','name'=>'Bancharampur'],
['id'=>'502','district_id'=>'69','name'=>'Nabi nagar'],
['id'=>'503','district_id'=>'69','name'=>'Kasba'],
['id'=>'504','district_id'=>'69','name'=>'Akhaura'],
['id'=>'505','district_id'=>'69','name'=>'Nachhir nagar'],
['id'=>'506','district_id'=>'69','name'=>'Sarail'],
['id'=>'507','district_id'=>'69','name'=>'Ashugonj'],
['id'=>'508','district_id'=>'79','name'=>'Pekua'],
['id'=>'509','district_id'=>'101','name'=>'Jashore Sadar'],
['id'=>'510','district_id'=>'101','name'=>'Baghar par'],
['id'=>'511','district_id'=>'101','name'=>'Avoynagar'],
['id'=>'512','district_id'=>'101','name'=>'Kashabpur'],
['id'=>'513','district_id'=>'101','name'=>'Monirampur'],
['id'=>'514','district_id'=>'101','name'=>'Jikorgchha'],
['id'=>'515','district_id'=>'101','name'=>'Chougchha'],
['id'=>'516','district_id'=>'101','name'=>'Sharsha'],
['id'=>'517','district_id'=>'97','name'=>'Chuwadanga Sudar'],
['id'=>'518','district_id'=>'97','name'=>'Alomdanga'],
['id'=>'519','district_id'=>'97','name'=>'Damurhuda'],
['id'=>'520','district_id'=>'97','name'=>'Jibonnagar'],
['id'=>'521','district_id'=>'97','name'=>'Jibonnagar'],
['id'=>'522','district_id'=>'98','name'=>'Jhenaiga Sudar'],
['id'=>'523','district_id'=>'98','name'=>'Kaliganj'],
['id'=>'524','district_id'=>'98','name'=>'Shylkupa'],
['id'=>'525','district_id'=>'98','name'=>'Kutchadpur'],
['id'=>'526','district_id'=>'98','name'=>'Mohashpur'],
['id'=>'527','district_id'=>'98','name'=>'Horinakundu'],
['id'=>'528','district_id'=>'98','name'=>'Horinakundu'],
['id'=>'529','district_id'=>'106','name'=>'Borishal Sudar'],
['id'=>'530','district_id'=>'106','name'=>'Bakargonj'],
['id'=>'531','district_id'=>'106','name'=>'Ujirpur'],
['id'=>'532','district_id'=>'106','name'=>'Babugonj'],
['id'=>'533','district_id'=>'106','name'=>'Mahandigonj'],
['id'=>'534','district_id'=>'106','name'=>'Hijla'],
['id'=>'535','district_id'=>'106','name'=>'Moladi'],
['id'=>'536','district_id'=>'106','name'=>'Banaripara'],
['id'=>'537','district_id'=>'106','name'=>'Agoiljhara'],
['id'=>'538','district_id'=>'106','name'=>'Gouranadi'],
['id'=>'540','district_id'=>'110','name'=>'Potuwakhali Sudar'],
['id'=>'541','district_id'=>'110','name'=>'Baufol'],
['id'=>'542','district_id'=>'110','name'=>'Doshmina'],
['id'=>'543','district_id'=>'110','name'=>'Golachipa'],
['id'=>'544','district_id'=>'110','name'=>'Kulapara'],
['id'=>'545','district_id'=>'110','name'=>'Mirzagonj'],
['id'=>'547','district_id'=>'110','name'=>'Dumki'],
['id'=>'548','district_id'=>'108','name'=>'Jhalokhati Sudar'],
['id'=>'549','district_id'=>'108','name'=>'Nolchhiti'],
['id'=>'550','district_id'=>'108','name'=>'Rajapur'],
['id'=>'551','district_id'=>'108','name'=>'Kathalia'],
['id'=>'552','district_id'=>'111','name'=>'Charfashon'],
['id'=>'553','district_id'=>'111','name'=>'Lalmuhon'],
['id'=>'554','district_id'=>'111','name'=>'Monpura'],
['id'=>'555','district_id'=>'111','name'=>'Tujomuddin'],
['id'=>'556','district_id'=>'111','name'=>'Borhanuddin'],
['id'=>'557','district_id'=>'111','name'=>'Bhula Sudar'],
['id'=>'558','district_id'=>'111','name'=>'Dhultkhan'],
['id'=>'559','district_id'=>'107','name'=>'Najirpur'],
['id'=>'560','district_id'=>'107','name'=>'Nachharabad'],
['id'=>'561','district_id'=>'107','name'=>'Kawkhali'],
['id'=>'562','district_id'=>'107','name'=>'Piroj pur Sudar'],
['id'=>'563','district_id'=>'107','name'=>'Vhandaria'],
['id'=>'564','district_id'=>'107','name'=>'Mothbaria'],
['id'=>'565','district_id'=>'107','name'=>'Jiyanagar'],
['id'=>'566','district_id'=>'109','name'=>'Amtoli'],
['id'=>'567','district_id'=>'109','name'=>'Betagi'],
['id'=>'568','district_id'=>'109','name'=>'Bamna'],
['id'=>'569','district_id'=>'109','name'=>'Patarghata'],
['id'=>'570','district_id'=>'109','name'=>'Barguna sadar'],
['id'=>'571','district_id'=>'65','name'=>'South surma'],
['id'=>'572','district_id'=>'66','name'=>'South sunamganj'],
['id'=>'573','district_id'=>'116','name'=>'Chand gaon'],
['id'=>'574','district_id'=>'116','name'=>'Chittagram bondor'],
['id'=>'575','district_id'=>'101','name'=>'kotyalee'],
        ]);
    }
}
