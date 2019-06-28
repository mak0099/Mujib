@extends('panel.public.master') @section('content')
<div class="row">
    <div class="col-sm-3">
        <style>
            #right-content .block {
                display: block !important
            }
        </style>
        <script></script>
        <div class="column block">
            <h5 class="bk-org title">
                অনুসন্ধান
            </h5>
            <div class="form-horizontal" style="padding: 15px 0;">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <select class="form-control" ng-model="advanceSearchData.DistrictId" ng-options="item.id as item.name for item in districtList" id="DistrictId" name="District" ng-change="getThana()">
                                    <option value="">District</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="select-style">
                                    <select class="form-control ha-dbbl" ng-model="advanceSearchData.ThanaId" ng-options="item.id as item.name for item in thanaList" id="ThanaId" name="Thana" ng-change="getPoliceStation()">
                                        <option value="">Thana</option>
                                    </select>
                                </div>
                            </div>
                        </div>
        
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="select-style">
                                    <select class="form-control" ng-model="advanceSearchData.PoliceStationId" ng-options="item.id as item.name for item in policeStationList" id="PoliceStationId" name="PoliceStation" ng-change="getVillage()">
                                        <option value="">Union</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
        
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="select-style">
                                    <select class="form-control ha-dbbl" ng-model="advanceSearchData.VillageId" ng-options="item.id as item.name for item in villageList" id="VillageId" name="Village" required tabindex="1">
                                        <option value="">Village</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-danger" style="width:30%;padding:10px;" ng-click="getUserByAdvanceSearch();"><i class="fa fa-search"></i> <span>সার্চ</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style></style>
        <script></script>
        <div class="column block central-eservices">
            <h5 class="bk-org title eservice-title">
                Social
            </h5>
            <div class="fb-page" data-href="https://www.facebook.com/mujib.net/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/bd5000net/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bd5000net/">bd5000.com</a></blockquote>
            </div>
        </div>
        <style>
            .eservice-title {
                background-color: #c40a2a !important;
                color: #fff;
                font-size: 12px;
                padding: 5px;
            }
            
            .block ul li {
                background: rgba(0, 0, 0, 0) url('{{asset('themes/responsive_npf/images/bg_block_list.png')}}') no-repeat scroll center bottom;
                font-size: 120%;
                height: auto;
                list-style-type: none;
                margin-bottom: 5px;
                padding-bottom: 8px;
                padding-left: 32px;
                padding-top: 0;
            }
            
            body.bpsc-portal-gov-bd .wsis_prize {
                display: none
            }
        </style>
        <script></script>
        <style>
            #right-content .block {
                display: block !important
            }
        </style>
        <div class="column block">
            <h5 class="bk-org title">Title </h5>
    
        </div>
    
        <div class="clearfix"></div>
        <style>
            .share-buttons img {
                width: 30px;
                padding: 2px;
                border: 0;
                box-shadow: 0;
                display: inline;
            }
        </style>
        <script></script>
        <script>
            $(document).ready(function() {
                el = $('h5:contains("সেবা সহজিকরণ")');
                text = el.html()
                el.html('').html('<a style="color:#fff" href="/site/view/sps_data">' + text + '<a>');
            });
        </script>
        <style></style>
        <script></script>
        <!-- <div style="" class="column block">
    
                <h5 style="background-color: #eee;">
                                                                                                    দর্শক সংখ্যাঃ
                                        <span style="padding:5px; background-color: #609513; color: #fff; font-weight:bold;">
                                            <span>
                </h5>
            </div> -->
    </div>
    <div class="col-sm-6">
        <div class="row mainwrapper">
            <style>
                #notice-board-ticker ul li {
                    list-style: none;
                }
            </style>
            <script></script>
            <style>
                .lineheight {
                    line-height: 22px;
                }
            </style>
            <script></script>
            <div class="column block">
                <h5 class="bk-org title">
                    মুজিব সার্কেলে আপনাকে স্বাগতম
                </h5>
                <div>
                    <div class="home-content">
                        <br>
                        <h3 style="text-decoration: underline;">বঙ্গবন্ধু শেখ মুজিবুর রহমান</h3>
                        <p>
                            <strong>বঙ্গবন্ধু শেখ মুজিবুর</strong> (১৯২০-১৯৭৫) জাতির জনক এবং বাংলাদেশের প্রথম রাষ্ট্রপতি (২৬ মার্চ ১৯৭১ থেকে ১১ জানুয়ারি ১৯৭২)। শেখ মুজিবুর রহমান ফরিদপুর জেলার গোপালগঞ্জ মহকুমার টুঙ্গীপাড়া গ্রামে ১৯২০ সালের ১৭ মার্চ জন্মগ্রহণ করেন। তাঁর পিতা শেখ লুৎফর রহমান ছিলেন গোপালগঞ্জ দেওয়ানি আদালতের সেরেস্তাদার। মুজিব ছয় ভাই-বোনের মধ্যে তৃতীয় ছিলেন। তিনি স্থানীয় গীমাডাঙ্গা স্কুলে প্রাথমিক শিক্ষা লাভ করেন। চোখের সমস্যার কারণে তাঁর প্রাথমিক শিক্ষা চার বছর ব্যাহত হয়। ১৯৪২ সালে তিনি গোপালগঞ্জ মিশনারী স্কুল থেকে ম্যাট্রিক, ১৯৪৪ সালে কলকাতার ইসলামিয়া কলেজ থেকে আই.এ এবং একই কলেজ থেকে ১৯৪৭ সালে বি.এ পাশ করেন।
                        </p>
                        <p>
                            স্কুল জীবন থেকেই মুজিবের মধ্যে নেতৃত্বের গুণাবলীর বিকাশ ঘটে। তিনি যখন গোপালগঞ্জ মিশনারী স্কুলের ছাত্র সে সময় একবার বাংলার মুখ্যমন্ত্রী এ.কে ফজলুল হক ঐ স্কুল পরিদর্শনে আসেন (১৯৩৯)। শোনা যায়, ঐ অঞ্চলের অনুন্নত অবস্থার প্রতি মুখ্যমন্ত্রীর দৃষ্টি আকর্ষণের জন্য তরুণ মুজিব বিক্ষোভ সংগঠিত করেন। ম্যাট্রিক পাশের পর মুজিব কলকাতায় গিয়ে ইসলামিয়া কলেজে ভর্তি হন। সেখান থেকেই তিনি আই.এ ও বি.এ পাশ করেন। ১৯৪৬ সালে তিনি ইসলামিয়া কলেজ ছাত্র-সংসদের সাধারণ সম্পাদক নির্বাচিত হন। তিনি বঙ্গীয় প্রাদেশিক মুসলিম লীগের একজন সক্রিয় কর্মী এবং ১৯৪৩ সাল থেকে নিখিল ভারত মুসলিম লীগ কাউন্সিলের সদস্য ছিলেন। রাজনীতিতে তিনি ছিলেন এইচ. এস সোহরাওয়ার্দীর একজন একনিষ্ঠ অনুসারী। ১৯৪৬ সালের সাধারণ নির্বাচনে মুসলিম লীগ শেখ মুজিবকে ফরিদপুর জেলায় দলীয় প্রার্থীদের পক্ষে নির্বাচনী প্রচারণার দায়িত্ব অপর্ণ করে।
                        </p>
                        <p>
                            ভারত বিভাগের (১৯৪৭) পর তিনি ঢাকা বিশ্ববিদ্যালয়ে আইন অধ্যয়নের জন্য ভর্তি হন। তবে পড়াশুনা শেষ করতে পারেন নি। কারণ চতুর্থ শ্রেণির কর্মচারীদের ন্যায্য দাবি দাওয়ার প্রতি বিশ্ববিদ্যালয় কর্তৃপক্ষের ঔদাসীন্যের বিরুদ্ধে তাদের বিক্ষোভ প্রদর্শনে উস্কানি দেওয়ার অভিযোগে তাঁকে ১৯৪৯ সালের প্রথমদিকে বিশ্ববিদ্যালয় থেকে বহিস্কার করা হয়।
                        </p>
                        <p>
                            ১৯৪৮ সালে পূর্ব পাকিস্তান মুসলিম ছাত্রলীগ গঠনে প্রধান সংগঠকদের একজন ছিলেন শেখ মুজিব। বস্তুত জেলে অন্তরীণ থাকা অবস্থায় নবগঠিত পূর্ব পাকিস্তান আওয়ামী মুসলিম লীগের (১৯৪৯) যুগ্ম সম্পাদকের তিনটি পদের মধ্যে একটিতে নির্বাচিত হওয়ার মধ্য দিয়ে শেখ মুজিবের সক্রিয় রাজনৈতিক জীবন শুরু হয়। অপর দুই যুগ্ম সম্পাদক ছিলেন খোন্দকার মোশতাক আহমদ এবং এ.কে রফিকুল হোসেন। ১৯৫৩ সালে শেখ মুজিব পূর্ব পাকিস্তান আওয়ামী মুসলিম লীগের সাধারণ সম্পাদক নির্বাচিত হন এবং ১৯৬৬ সাল পর্যন্ত এ পদে বহাল ছিলেন। ১৯৬৬ সালেই তিনি দলের সভাপতি হন। দলকে ধর্মনিরপেক্ষ চরিত্র দেওয়ার জন্য ১৯৫৫ সালে মুজিবের উদ্যোগে দলের নাম হতে ‘মুসলিম’ শব্দটি বাদ দেওয়া হয়। ১৯৪৭ সালের পর রাজনীতিতে তাঁর যে ধর্মনিরপেক্ষ দৃষ্টিভঙ্গির উন্মেষ ঘটেছিল এ ছিল তারই প্রতিফলন।
                        </p>
                        <p>আওয়ামী লীগের সাংগঠনিক কাজে পুরোপুরি আত্মনিয়োগের জন্য শেখ মুজিবুর রহমান মুখ্যমন্ত্রী আতাউর রহমান খানের মন্ত্রিসভায় (১৯৫৬-৫৮) মাত্র নয় মাস কাজের পর মন্ত্রীপদে ইস্তফা দেন। ১৯৬৪ সালে জেনারেল আইয়ুব খানের শাসনামলে আওয়ামী লীগকে পুনরুজ্জীবিত করার মতো সাহসিকতা দেখিয়েছেন শেখ মুজিব, যদিও তাঁর রাজনৈতিক গুরু সোহরাওয়ার্দী রাজনৈতিক দলগুলিকে নিষিদ্ধ রেখে পাকিস্তানে সাংবিধানিক শাসন পুনঃপ্রতিষ্ঠার জন্য ন্যাশনাল ডেমোক্রেটিক ফ্রন্ট নামে একটি রাজনৈতিক মোর্চার ব্যানারে কাজ করার সপক্ষে ছিলেন। পাকিস্তান ধারণাটির ব্যাপারে ইতোমধ্যেই মুজিবের মোহমুক্তি ঘটেছিল। পাকিস্তানের দ্বিতীয় গণপরিষদ ও আইনসভার সদস্য (১৯৫৫-১৯৫৬) এবং পরবর্তীতে জাতীয় পরিষদের সদস্য (১৯৫৬-১৯৫৮) হিসেবে তাঁর এমন ধারণা হয়েছিল যে, পূর্ব পাকিস্তানের প্রতি পশ্চিম পাকিস্তানের নেতাদের মনোভাবের মধ্যে সমতা ও সৌভ্রাতৃত্ব বোধ ছিল না।</p>
                        <p>শেখ মুজিব ছিলেন ভাষা আন্দোলনের প্রথম কারাবন্দীদের একজন (১১ মার্চ ১৯৪৮)। ১৯৫৫ সালের ২১ সেপ্টেম্বর পাকিস্তান গণপরিষদে বাংলা ভাষার প্রশ্নে তাঁর প্রদত্ত ভাষণ ছিল উল্লেখযোগ্য। মাতৃভাষায় বক্তব্য রাখার অধিকার দাবি করে শেখ মুজিবুর রহমান বলেন,</p>
                        <p>‘আমরা এখানে বাংলায় কথা বলতে চাই। আমরা অন্য কোনো ভাষা জানি কি জানি না তাতে কিছুই যায় আসে না। যদি মনে হয় আমরা বাংলাতে মনের ভাব প্রকাশ করতে পারি তাহলে ইংরেজিতে কথা বলতে পারা সত্ত্বেও আমরা সবসময় বাংলাতেই কথা বলব। যদি বাংলায় কথা বলতে দেওয়া না হয় তাহলে আমরা পরিষদ থেকে বেরিয়ে যাবো। কিন্তু পরিষদে বাংলায় কথা বলতে দিতে হবে। এটাই আমাদের দাবি।’</p>
                        <p>১৯৫৫ সালের ২৫ আগস্ট গণপরিষদে প্রদত্ত আরেক ভাষণে শেখ মুজিব পূর্ববঙ্গের নাম পরিবর্তন করে পূর্ব পাকিস্তান রাখার প্রতিবাদে যে বক্তব্য রাখেন তাও সমভাবে প্রাসঙ্গিক:</p>
                        <p>‘স্যার, আপনি লক্ষ্য করে থাকবেন যে, তারা পূর্ববঙ্গের স্থলে ‘পূর্ব পাকিস্তান’ বসাতে চায়। আমরা বহুবার দাবি জানিয়ে এসেছি যে, [পূর্ব] পাকিস্তানের পরিবর্তে আপনাদের পূর্ব [বঙ্গ] ব্যবহার করতে হবে। ‘বঙ্গ’ শব্দটির একটি ইতিহাস আছে, আছে নিজস্ব একটি ঐতিহ্য...’।</p>
                        <p>বিশ শতকের ষাটের দশকের প্রথমদিকে শেখ মুজিবুর রহমান রাজনীতিতে প্রাধান্য লাভ করেন। অসাধারণ সাংগঠনিক দক্ষতার দ্বারা শেখ মুজিব আওয়ামী লীগকে আন্তঃদলীয় রাজনীতি থেকে মুক্ত করে দলের মূল স্রোত থেকে কিছু কিছু উপদলের বেরিয়ে যাওয়া রোধ করতে সক্ষম হন। সম্মোহনী শক্তিসম্পন্ন সংগঠক শেখ মুজিব দলের উপর পূর্ণ কর্তৃত্ব স্থাপন করতে পেরেছিলেন। ১৯৬৬ সালে তিনি তাঁর বিখ্যাত ছয়দফা কর্মসূচী ঘোষণা করেন এবং এই ছয় দফাকে আখ্যায়িত করেন ‘আমাদের (বাঙালিদের) মুক্তি সনদ’ রূপে। দফাগুলো হলো : ১. ফেডারেল রাষ্ট্র গঠন এবং সার্বজনীন প্রাপ্ত বয়স্ক ভোটাধিকারের ভিত্তিতে সংসদীয় পদ্ধতির সরকার প্রবর্তন; ২. প্রতিরক্ষা ও পররাষ্ট্র ব্যতীত অপর সকল বিষয় ফেডারেটিং ইউনিট বা প্রাদেশিক সরকারগুলির হাতে ন্যস্ত করা; ৩. দুই রাষ্ট্রের জন্য পৃথক মুদ্রা চালু করা অথবা পূর্ব পাকিস্তান থেকে পশ্চিম পাকিস্তানে মূলধন পাচার রোধে কার্যকর ব্যবস্থা গ্রহণ; ৪. করারোপের সকল ক্ষমতা ফেডারেটিং রাষ্ট্রগুলির হাতে ন্যস্ত করা; ৫. আন্তর্জাতিক বাণিজ্যের ক্ষেত্রে রাষ্ট্রসমূহকে স্বাধীনতা প্রদান; ৬. রাষ্ট্রসমূহকে নিজের নিরাপত্তার জন্য মিলিশিয়া বা আধা সামরিক বাহিনী গঠনের ক্ষমতা প্রদান করা। সংক্ষেপে এ কর্মসূচীর মধ্য দিয়ে রাজনীতির প্রতি তাঁর এক নূতন দৃষ্টিভঙ্গী উন্মোচিত হয়। প্রকৃতপক্ষে ছয়-দফা কর্মসূচীর অর্থ ছিল কার্যত পূর্ব পাকিস্তানের জন্য স্বাধীনতা। সকল রাজনৈতিক দলের রক্ষণশীল সদস্যরা এ কর্মসূচীকে আতঙ্কের চোখে দেখলেও এটা তরুণ প্রজন্ম বিশেষত ছাত্র, যুবক এবং শ্রমজীবি মানুষের মধ্যে নূতন জাগরণের সৃষ্টি করে।</p>
                        <p>মুজিব কর্তৃক ছয়দফা কর্মসূচীর চ্যালেঞ্জ ছুড়ে দেওয়ার পর আইয়ুব সরকার তাঁকে কারারুদ্ধ করে। শেখ মুজিব এবং আরও চৌত্রিশ জনের বিরুদ্ধে আগরতলা ষড়যন্ত্র মামলা নামে একটি রাষ্ট্রদ্রোহিতার মামলা দায়ের করা হয়। সরকারিভাবে এ মামলাটির নাম দেয়া হয় ‘রাষ্ট্র বনাম শেখ মুজিবুর রহমান এবং অন্যান্য’। মামলায় অভিযুক্তদের অধিকাংশই ছিলেন পাকিস্তান বিমান এবং নৌবাহিনীর বাঙালি অফিসার এবং কর্মচারী। এদের মধ্যে তিনজন ছিলেন উর্দ্ধতন বাঙালি বেসামরিক কর্মকর্তা। মুজিব ইতোমধ্যে কারারুদ্ধ থাকায় তাঁকে এক নম্বর আসামী হিসেবে গ্রেফতার দেখানো হয়। এ মামলায় শেখ মুজিবের বিরুদ্ধে অভিযোগ আনা হয় যে তিনি অন্যান্য আসামীর যোগসাজশে পাকিস্তান রাষ্ট্রের বিরুদ্ধে ষড়যন্ত্রে লিপ্ত ছিলেন। অভিযোগ মতে শেখ মুজিবুর রহমান এবং অন্যান্য আসামী ভারতের সহায়তায় পূর্ব পাকিস্তানকে বলপূর্বক বিচ্ছিন্ন করার গোপন পরিকল্পনা করছিলেন। পাল্টা আঘাত হানার এ চালটি অবশ্য বুমেরাং হয়েছিল। ঢাকা কুর্মিটোলা ক্যান্টনমেন্টে একটি বিশেষ ট্রাইব্যুনালে মামলাটির বিচার চলছিল যেটা পূর্ব পাকিস্তানের প্রতি পাকিস্তানের আধিপত্যবাদী মনোভাবের বিরুদ্ধে বাঙালিদের আবেগ অনুভূতিকে প্রবলভাবে আলোড়িত করে। আগরতলা ষড়যন্ত্র মামলার বিচারের সময় মুজিবের জনমোহিনী রূপ আরোও বিকশিত হয় এবং সমগ্র জাতি তাদের নেতার বিচারের বিরুদ্ধে রুখে দাঁড়ায়। ১৯৬৯ সালের প্রথমদিকে বিশেষত তরুণ প্রজন্মের দ্বারা সংগঠিত গণআন্দোলন এমন এক পর্যায়ে পৌঁছে যে আইয়ুর সরকার দেশে আসন্ন একটি গৃহযুদ্ধ এড়ানোর চেষ্টায় মামলাটি প্রত্যাহার করে নেয়। শেখ মুজিব ১৯৬৯ সালের ২২ ফেব্রুয়ারি নিঃশর্ত মুক্তিলাভ করেন।</p>
                        <p>শেখ মুজিবের মুক্তির পরবর্তী দিন সর্বদলীয় ছাত্র সংগ্রাম পরিষদ রমনা রেসকোর্সে (বর্তমান সোহরাওয়ার্দী উদ্যান) শেখ মুজিবের সম্মানে গণসম্বর্ধনার আয়োজন করে। এ সর্বদলীয় ছাত্র সংগ্রাম পরিষদই শেখ মুজিবকে নিঃশর্ত মুক্তি প্রদানে সরকারকে বাধ্য করার ব্যাপারে সবচাইতে কার্যকর রাজনৈতিক এবং সামাজিক শক্তি বলে প্রমাণিত হয়। সংগ্রাম পরিষদের পক্ষ থেকে পরিষদের সভাপতি তোফায়েল আহমদ শেখ মুজিবকে ‘বঙ্গবন্ধু’ উপাধিতে ভূষিত করেন। মুজিবের মধ্যে তারা এমন একজন ত্যাগী নেতার প্রতিফলন দেখতে পান যিনি ২৩ বছরের পাকিস্তানি শাসনামলের প্রায় বারো বছর জেলে কাটিয়েছেন। বারো বছর জেলে এবং দশ বছর কড়া নজরদারীতে থাকার কারণে শেখ মুজিবের কাছে পাকিস্তানকে নিজের স্বাধীন বাসভূমির পরিবর্তে বরং কারাগার বলেই মনে হতো।</p>
                        <p>১৯৭০ সালের ডিসেম্বর মাসে অনুষ্ঠিত পাকিস্তানের প্রথম সাধারণ নির্বাচনের মধ্য দিয়ে বঙ্গবন্ধু শেখ মুজিবুর রহমান পূর্ব পাকিস্তানের জনগণের একমাত্র মুখপাত্র হিসেবে আবির্ভূত হন। তাঁর নেতৃত্বে আওয়ামী লীগ পাকিস্তান জাতীয় পরিষদে পূর্ব পাকিস্তানের জন্য বরাদ্দ ১৬৯ টি আসনের মধ্যে ১৬৭টি আসনে (মহিলাদের জন্য সংরক্ষিত সাতটি আসন সহ) জয়লাভ করে। আপামর জনগণ তাঁকে ছয়দফা মতবাদের পক্ষে নিরঙ্কুশ ম্যান্ডেট প্রদান করে। ছয় দফা বাস্তবায়নের দায়িত্ব তাঁর উপরই বর্তায়। ১৯৭১ সালের ৩ জানুয়ারি বঙ্গবন্ধু শেখ মুজিবুর রহমান পূর্ব পাকিস্তানের সব প্রতিনিধিদের উপস্থিতিতে রমনা রেসকোর্সে একটি ভাবগম্ভীর অনুষ্ঠানের আয়োজন করেন এবং শপথ নেন যে, পাকিস্তানের শাসনতন্ত্র প্রণয়নের সময় তারা কখনও ছয়দফা থেকে বিচ্যুত হবেন না।</p>
                        <p>এ পরিস্থিতিতে জেনারেল ইয়াহিয়ার সামরিক জান্তা এবং পশ্চিম পাকিস্তানের নির্বাচিত নেতা জুলফিকার আলী ভুট্টো বঙ্গবন্ধু শেখ মুজিবুর রহমানকে কেন্দ্রে সরকার গঠন করতে না দেওয়ার জন্য ষড়যন্ত্রে লিপ্ত হন। প্রেসিডেন্ট ইয়াহিয়া খান ১৯৭১ সালের ১ মার্চ এক ঘোষণায় ৩ মার্চ ঢাকায় অনুষ্ঠেয় জাতীয় পরিষদের অধিবেশন একতরফাভাবে স্থগিত করেন। এ ঘোষণার ফলে পূর্ব পাকিস্তানে সর্বাত্মক বিক্ষোভের আগুন জ্বলে উঠে। এরই পরিপ্রেক্ষিতে বঙ্গবন্ধু পূর্ব পাকিস্তানে সর্বাত্মক অসহযোগ আন্দোলনের ডাক দেন। সমগ্র প্রদেশ তাঁকে সমর্থন জানায়। অসহযোগ আন্দোলন চলাকালে (২-২৫ মার্চ ১৯৭১) পূর্ব পাকিস্তানের গোটা বেসামরিক প্রশাসন তাঁর নিয়ন্ত্রণে চলে আসে এবং তাঁর নির্দেশমত চলে। তিনি কার্যত অর্থে প্রাদেশের সরকার প্রধান হয়ে যান। লন্ডনের দৈনিক Evening Standard পত্রিকার ভাষায়: ‘জনতার পুরোপুরি সমর্থন পেয়ে শেখ মুজিব যেন পূর্ব পাকিস্তানের কর্তৃত্বে সমাসীন হন। (মুজিবুর) রহমানের ধানমন্ডির যে বাড়ি ব্রিটিশ প্রধানমন্ত্রীর বাসভবনের অনুকরণে ইতোমধ্যে ১০ ডাউনিং স্ট্রীটের মতো পরিচিতি লাভ করেছে তা আজ আমলা, রাজনীতিক, ব্যাংকার, শিল্পপতি এবং সমাজের সর্বস্তরের মানুষের দ্বারা অবরুদ্ধ।’ (১২ মার্চ ১৯৭১)</p>
                        <p>১৯৭১ সালের ৭ মার্চ মুজিব রেসকোর্স ময়দানে দশ লক্ষ লোকের বিশাল জমায়েতে তাঁর ঐতিহাসিক ভাষণ দেন যা বাঙালি জাতির ইতিহাসে যুগ সন্ধিক্ষণ হিসেবে চিহ্নিত থাকবে। মুজিব তাঁর ভাষণে নির্বাচিত প্রতিনিধিদের কাছে ক্ষমতা হস্তান্তর করতে ব্যর্থ সামরিক কর্তৃপক্ষের বিরুদ্ধে সুনির্দিষ্ট কিছু অভিযোগ আনেন। বক্তৃতার শেষে মুজিব ঘোষণা করেন: ‘প্রত্যেক ঘরে ঘরে দূর্গ গড়ে তোল। তোমাদের যা কিছু আছে তাই নিয়ে শত্রুর মোকাবিলা করতে হবে... মনে রাখবা, রক্ত যখন দিয়েছি, রক্ত আরো দেব, এদেশের মানুষকে মুক্ত করে ছাড়বো ইনশাল্লাহ... এবারের সংগ্রাম আমাদের মুক্তির সংগ্রাম, এবারের সংগ্রাম স্বাধীনতার সংগ্রাম।’</p>
                        <p>ইতোমধ্যে প্রেসিডেন্ট ইয়াহিয়া খান এবং পশ্চিম পাকিস্তানের অন্যান্য নেতা বঙ্গবন্ধু এবং তাঁর দলের সাথে আলোচনা শুরু করতে ১৫ মার্চ ঢাকায় আসেন। পরদিন থেকে আলোচনা শুরু হয়, যা মাঝেমধ্যে বিরতিসহ ২৫ মার্চ সকাল পর্যন্ত চলে। এ সময়ে পূর্ব পাকিস্তানে অসহযোগ আন্দোলন এবং লাগাতার হরতাল চলছিল। মার্চের ২ তারিখ থেকে ছাত্র এবং বিভিন্ন রাজনৈতিক দলের নেতারা স্বাধীনতা ঘোষণা করতে থাকেন এবং এ ধারা অব্যাহতভাবে চলে। এ পটভূমিতে পাকিস্তান সেনাবাহিনী অপারেশন সার্চলাইটের নামে ২৫ মার্চ মধ্যরাতে ঢাকা বিশ্ববিদ্যালয় সহ বিভিন্ন স্থানে পৈশাচিক তান্ডব চালিয়ে ছাত্র-শিক্ষক এবং নিরীহ লোকদের গণহারে হত্যা করে। এভাবে পাকিস্তানি দখলদার বাহিনী দীর্ঘ নয় মাস ধরে গণহত্যা চালিয়ে যায়। শেখ মুজিবকে ২৫ মার্চ রাতে গ্রেফতার করে ঢাকা সেনানিবাসে আটক রাখা হয় এবং রাষ্ট্রদ্রোহিতা ও বিদ্রোহে উস্কানি দেওয়ার অভিযোগে বিচারের জন্য পশ্চিম পাকিস্তানে নিয়ে যাওয়া হয়। গ্রেফতার হওয়ার পূর্বে বঙ্গবন্ধু বাংলাদেশের স্বাধীনতা ঘোষণা করে তা সম্প্রচারের জন্য ইপিআর ট্রান্সমিটারের মাধ্যমে চট্টগ্রামে এক ওয়্যারলেস বার্তা পাঠান। তাঁর ঘোষণাটি নিম্নরূপ:</p>
                        <p>‘এটাই হয়তো আমার শেষ বার্তা। আজ হতে বাংলাদেশ স্বাধীন। বাংলাদেশের জনগণের প্রতি আমার আহবান, আপনারা যে যেখানেই থাকুন এবং যার যা কিছু আছে তা দিয়ে শেষ পর্যন্ত দখলদার সেনাবাহিনীকে প্রতিহত করুন। বাংলাদেশের মাটি থেকে পাকিস্তান দখলদার বাহিনীর শেষ সৈনিকটি বিতাড়িত এবং চূড়ান্ত বিজয় অর্জিত না হওয়া পর্যন্ত আপনাদের এ লড়াই চালিয়ে যেতে হবে।’</p>
                        <p>২৫ মার্চ পাকবাহিনীর হামলার পর থেকে যে স্বাধীনতার সংগ্রাম শুরু হয় সে সময় বঙ্গবন্ধু যদিও পাকিস্তানিদের হাতে বন্দী ছিলেন তথাপি তাঁকে তাঁর অনুপস্থিতিতে মুজিবনগর সরকার নামে অভিহিত অস্থায়ী সরকারের রাষ্ট্রপতি করা হয়। মুক্তিযুদ্ধে নেতৃত্ব দেওয়ার জন্য জনপ্রতিনিধিরা ১৯৭১ সালের ১০ এপ্রিল এ সরকার গঠন করে। তাঁকে সশস্ত্র বাহিনীর সর্বাধিনায়কও করা হয়েছিল। স্বাধীনতা যুদ্ধের গোটা অধ্যায়ে শেখ মুজিবের অনন্য সাধারণ ভাবমূর্তি মুক্তিযোদ্ধাদের অনুপ্রেরণা এবং জাতীয় ঐক্য ও শক্তির উৎস হিসেবে কাজ করে।</p>
                        <p>পাকিস্তানি জান্তা বঙ্গবন্ধুর বিচার করে মৃত্যুদন্ডাদেশ দিলে বিশ্ব নেতৃবৃন্দ তাঁর জীবন বাঁচাতে উদ্যোগী হন। ১৯৭১ সালের ১৬ ডিসেম্বর পাকিস্তানি দখলদারী থেকে বাংলাদেশ স্বাধীন হওয়ার পর শেখ মুজিবকে পাকিস্তানি কারাগার হতে মুক্তি দেওয়া হয় এবং ১৯৭২ সালের ১০ জানুয়ারি তিনি লন্ডন হয়ে বিজয়ীর বেশে স্বদেশ প্রর্ত্যাবর্তন করেন। সারা দেশে আনন্দ ও উচ্ছ্বাসের বন্যা বয়ে যায়। সমাজের সর্বস্তরের লাখো জনতা তেজগাঁ পুরাতন বিমানবন্দরে তাঁকে বীরোচিত অভ্যর্থনা জানায়। নতুন প্রজাতন্ত্রের নেতৃত্বকে ঘিরে এবং সেই সূত্রে বাংলাদেশের ভবিষ্যত নিয়ে যে অনিশ্চয়তার কালো মেঘ জমে উঠেছিল তাঁর স্বদেশ প্রত্যাবর্তনের মধ্য দিয়ে তা তিরোহিত হয়। লন্ডন থেকে প্রকাশিত দৈনিক গার্ডিয়ান পত্রিকার ১৯৭২ সালের ১০ জানুয়ারির সম্পাদকীয়তে বলা হয়েছিল : ‘শেখ মুজিব ঢাকা বিমানবন্দরে পর্দাপণ করা মাত্র নতুন প্রজাতন্ত্র এক সুদৃঢ় বাস্তবতা লাভ করে।’</p>
                        <p>বঙ্গবন্ধু শেখ মুজিবুর রহমান স্বাধীনতাউত্তর বাংলাদেশে প্রথম সরকারের মাত্র সাড়ে তিন বছরের সংক্ষিপ্ত সময়টুকু নেতৃত্ব দিয়েছিলেন। শূণ্য থেকে শুরু করে তাঁর সরকারকে যুদ্ধ বিধ্বস্ত একটি দেশের অগণিত সমস্যার মোকাবিলা করতে হয়েছিল। বঙ্গবন্ধুর নেতৃত্বে গুরুত্বপূর্ণ সকল ক্ষেত্রে রাষ্ট্র এবং জাতিগঠন কার্যক্রম শুরু হয়। আইন শৃঙ্খলা পুনঃপ্রতিষ্ঠা, অবৈধ অস্ত্র উদ্ধার, মুক্তিযোদ্ধাদের পুনর্বাসন, যোগাযোগ ব্যবস্থা পুনঃনির্মাণ, মুক্তিযুদ্ধ-বিরোধীদের জনরোষ থেকে রক্ষা করা এবং সবচাইতে গুরুত্বপূর্ণ হলো লক্ষ লক্ষ ক্ষুধার্ত মানুষের জন্য খাদ্য সংগ্রহ করা এবং আরো অনেক সমস্যার সমাধান তাঁর সরকারের সামনে সুবিশাল চ্যালেঞ্জ হয়ে দাঁড়িয়েছিল।</p>
                        <p>এতসব সমস্যা সত্ত্বেও শেখ মুজিব একটি নূতন শাসনতন্ত্র প্রণয়নে কখনই দ্বিধাগ্রস্ত হননি এবং সে কাজটি তিনি দশ মাসের মধ্যে সম্পন্ন করেন। স্বাধীনতার তিন মাসের মধ্যে ভারতীয় মিত্রবাহিনীর প্রত্যাবর্তন নিশ্চিত করা হয়। পনেরো মাসের মধ্যে সাধারণ নির্বাচন অনুষ্ঠিত হয় (৭ মার্চ ১৯৭৩)। একশত চল্লিশটি দেশ বাংলাদেশকে স্বীকৃতি দেয়। বঙ্গবন্ধু বাংলাদেশের পররাষ্ট্রনীতির পথনির্দেশনা নির্ধারণ করেন : ‘সকলের সঙ্গে বন্ধুত্ব এবং কারো প্রতি বিদ্বেষ নয়।’ বাস্তবিকপক্ষে মুজিব সরকার গুরুত্বপূর্ণ সকল ক্ষেত্রে মৌলিক রাষ্ট্রীয় প্রতিষ্ঠানগুলির সূচনা করেন। এতসব অর্জন সত্ত্বেও মূলত উগ্র বামপন্থীদের তরফ থেকে বিরোধিতা আসে যারা স্বাধীনতা যুদ্ধকে একটি ‘অসম্পূর্ণ বিপ্লব’ বলে গণ্য করে অস্ত্র ধারণ করে। ফলে দেশে একটি চরম নাজুক পরিস্থিতি সৃষ্টি হয়। আইন শৃঙ্খলা পরিস্থিতির দ্রুত অবনতি ঘটতে থাকে এবং জনগণের মধ্যে হতাশা দেখা দেয়। সর্বোপরি দেশে দুর্ভিক্ষ (১৯৭৪) দেখা দেয় এবং হাজার হাজার লোক মৃত্যুবরণ করে। শেখ মুজিব প্রথমে রক্ষীবাহিনী নামে একটি বিশেষ নিরাপত্তা বাহিনী গঠন করে পরিস্থিতি মোকাবেলার চেষ্টা করেন। নিজের জনমোহিনী ভাবমূর্তিকে আশ্রয় করে তিনি এরপর বাকশাল নামে দেশে একদলীয় শাসন কায়েম করেন এবং শাসনতন্ত্রে যেসব মৌলিক অধিকারের নিশ্চয়তা বিধান করা হয়েছে সেগুলি খর্ব করেন। পরিণামে শেখ মুজিব অনেকটা জনবিচ্ছিন্ন হয়ে পড়েন এবং সকল মহলের সমালোচনার লক্ষ্যে পরিণত হন। এরকম একটা অস্থিতিশীল অবস্থার সুযোগ নিয়ে একদল সংক্ষুব্ধ সেনাসদস্য ১৯৭৫ সালের ১৫ আগস্ট তাঁকে এবং পরিবারের অন্য যেসব সদস্য তাঁর বাড়িতে অবস্থান করছিলেন তাদের সবাইকে হত্যা করে। [হারুন-অর-রশীদ]</p>
                        <p>গ্রন্থপঞ্জি Shahryar Iqbal (ed.), Sheikh Mujib in Parliament (1955-58), Dhaka 1997; Muhammad HR Talukder (ed.), Memoirs of Huseyn Shaheed Suhrawardy, Dhaka 1987; Zillur Rahman Khan, The Third World Charisma: Sheikh Mujib and the Struggle for Freedom, Dhaka 1994; A. Majeed Khan (ed.), Twenty Great Bengalis, Dhaka 2008; SA Karim, Sheikh Mujib: Triump And Tragedy, Dhaka 2005; Archer K Blood, The Cruel Birth of Bangladesh: Memories of an American Diplomat, Dhaka 2002; Harun-or-Rashid, Statehood Ideal of Bengalis and the Emergence of Independent Bangladesh (Bangla), Dhaka 2003; Monayem Sarkar (ed.), Bangabandhu Sheikh Mujibur Rahman: A Political Biography (Bangla), 2 volumes, Dhaka 2008.</p>
    
                    </div>
                </div>
    
            </div>
            <style>
                .home-content {
                    padding: 0px 15px;
                }
                
                .home-content p {
                    text-align: justify;
                    font-size: 17px;
                    line-height: 25px;
                    margin-bottom: 5px;
                }
                
                #right-content .block {
                    display: block !important
                }
            </style>
            <style>
                .ad-image-description span {
                    display: none
                }
            </style>
            <style>
                .ad-gallery .ad-info {
                    width: 200px
                }
                
                .ad-thumb-list {
                    list-style: none !important
                }
                
                .ad-gallery {
                    width: 100% !important
                }
                
                .ad-image {
                    width: 100% !important;
                    top: 0px !important;
                    height: 432px !important
                }
                
                .ad-image img {
                    width: 100% !important;
                    height: 432px !important
                }
                
                .ad-image .ad-image-description {
                    width: 100% !important
                }
                
                .ad-gallery .ad-image-wrapper {
                    height: 432px;
                }
                
                .ad-thumbs {
                    height: 70px
                }
                
                .bitac-portal-gov-bd .ad-gallery .ad-image-wrapper {
                    height: 300px;
                }
                
                .bitac-portal-gov-bd .ad-image {
                    height: 100% !important
                }
                
                .bitac-portal-gov-bd .ad-image img {
                    height: 100% !important
                }
                
                .ad-image-description span {
                    display: none
                }
            </style>
            <script></script>
        </div>
    </div>
    <div class="col-sm-3">
        <style>
            #right-content .block {
                display: block !important
            }
        </style>
        <script></script>
        <div class="column block">
            <h5 class="bk-org title">
                অনুসন্ধান
            </h5>
            <div class="form-horizontal" style="padding: 15px 0;">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <select class="form-control select2" ng-model="advanceSearchData.DistrictId" ng-options="item.id as item.name for item in districtList" id="DistrictId" name="District" ng-change="getThana()">
                                    <option value="">District</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="select-style">
                                    <select class="form-control select2 ha-dbbl" ng-model="advanceSearchData.ThanaId" ng-options="item.id as item.name for item in thanaList" id="ThanaId" name="Thana" ng-change="getPoliceStation()">
                                        <option value="">Thana</option>
                                    </select>
                                </div>
                            </div>
                        </div>
        
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="select-style">
                                    <select class="form-control select2" ng-model="advanceSearchData.PoliceStationId" ng-options="item.id as item.name for item in policeStationList" id="PoliceStationId" name="PoliceStation" ng-change="getVillage()">
                                        <option value="">Union</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
        
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="select-style">
                                    <select class="form-control select2 ha-dbbl" ng-model="advanceSearchData.VillageId" ng-options="item.id as item.name for item in villageList" id="VillageId" name="Village" required tabindex="1">
                                        <option value="">Village</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-danger" style="width:30%;padding:10px;" ng-click="getUserByAdvanceSearch();"><i class="fa fa-search"></i> <span>সার্চ</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style></style>
        <script></script>
        <div class="column block central-eservices">
            <h5 class="bk-org title eservice-title">
                Social
            </h5>
            <div class="fb-page" data-href="https://www.facebook.com/mujib.net/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/bd5000net/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bd5000net/">bd5000.com</a></blockquote>
            </div>
        </div>
        <style>
            .eservice-title {
                background-color: #c40a2a !important;
                color: #fff;
                font-size: 12px;
                padding: 5px;
            }
            
            .block ul li {
                background: rgba(0, 0, 0, 0) url('{{asset('themes/responsive_npf/images/bg_block_list.png')}}') no-repeat scroll center bottom;
                font-size: 120%;
                height: auto;
                list-style-type: none;
                margin-bottom: 5px;
                padding-bottom: 8px;
                padding-left: 32px;
                padding-top: 0;
            }
            
            body.bpsc-portal-gov-bd .wsis_prize {
                display: none
            }
        </style>
        <script></script>
        <style>
            #right-content .block {
                display: block !important
            }
        </style>
        <div class="column block">
            <h5 class="bk-org title">Title </h5>
    
        </div>
    
        <div class="clearfix"></div>
        <style>
            .share-buttons img {
                width: 30px;
                padding: 2px;
                border: 0;
                box-shadow: 0;
                display: inline;
            }
        </style>
        <script></script>
        <script>
            $(document).ready(function() {
                el = $('h5:contains("সেবা সহজিকরণ")');
                text = el.html()
                el.html('').html('<a style="color:#fff" href="/site/view/sps_data">' + text + '<a>');
            });
        </script>
        <style></style>
        <script></script>
        <!-- <div style="" class="column block">
    
                <h5 style="background-color: #eee;">
                                                                                                    দর্শক সংখ্যাঃ
                                        <span style="padding:5px; background-color: #609513; color: #fff; font-weight:bold;">
                                            <span>
                </h5>
            </div> -->
    </div>
</div>
<div id="thikanaModal" class="modal fade" role="dialog">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content" style="background:#EBEBEB">
            <!-- @*<div class="modal-header">
                    <h3 class="modal-title"></h3>
                    <button type="button" class="modal-close" data-dismiss="modal">
                        x
                    </button>
                </div>*@ -->
            <div class="modal-body">
                <div class="list-group">
                    <a href="#" id="style-3" dir-paginate="x in advanceSearchUserList | itemsPerPage:UserByAdvanceSearchParameters.PageSize" current-page="UserByAdvanceSearchParameters.PageNo" pagination-id="metaData.name + 'advanceSearchUserList'" total-items='UserByAdvanceSearchParameters.Total_Count' class="list-group-item list-group-item-action flex-column align-items-start list-ha-box" ng-class-odd="'list-ha-left'">
                        <div ng-if="x.PhotoPath==''" class="treatment-icon col-sm-4">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div ng-if="x.PhotoPath !=null" class="treatment-icon col-sm-4">
                            <img src="@{{x.PhotoPath}}" class="profileImage img-thumbnail" />
                        </div>
                        <div ng-if="x.PhotoPath ===null" class="treatment-icon col-sm-4">
                            <img src="{{ asset('img/no-image.jpg') }}" class="profileImage img-thumbnail" />
                        </div>
                        <div class="col-sm-8 ad-list-info">
                            <h3>@{{x.FullName}}</h3>
                            <p>@{{x.Phone}}</p>
                            <p>Village: @{{ x.VillageName !=""?x.VillageName: "Not Given"}}</p>
                            <p>Union: @{{x.PoliceStationName}}</p>
                            <p>Thana: @{{x.ThanaName}}</p>
                            <p>District: @{{x.DistrictName}}</p>
                        </div>
                    </a>
                </div>

                <div class="col-sm-12">
                    <dir-pagination-controls max-size="10" pagination-id="metaData.name + 'advanceSearchUserList'" direction-links="true" boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)">
                    </dir-pagination-controls>
                </div>
                <div style="clear: both;"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection