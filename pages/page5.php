<?php
set_time_limit(0);
if(!isset($_SESSION))
{
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Loot On Sale</title>

    <link rel="icon" href="img/favicon.png">
    <!-- web page icon on the Apple iPhone, iPod Touch, and iPad. -->
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-iphone.png" />

    <!--link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <link rel="stylesheet" href="css/pradip1.css">
    <link rel="stylesheet" href="css/stylefilter.css" media="screen">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-latest.min.js"></script>
    <script src="js/jquery.quick.pagination.min.js"></script>
    <script type="text/javascript" src="js/loot.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles1.css" />
    <script src="js/filter.js"></script>
    <!-- slider -->
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/bootstrap-select.js"></script>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">
</head>
<body>
<header>
    <div id="hero">
        <!-- <img class="heroshot wow bounceInUp"  src="img/clothings-main.jpg"  id="img1" >
        <img class="heroshot wow bounceInUp"  src="img/accessories_main.jpg"  id="img2" style="display:none"> -->
<!--        <img class="heroshot wow bounceInUp"  src="img/topimage.jpg"  id="img3">-->
        <!-- <img class="heroshot wow bounceInUp"  src="img/healthnWorkout_main.jpg"  id="img4" style="display:none"> -->
    </div>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <span class="brandicon icon-grid"></span>
                    <span class="brandname">Loot On Sale</span>
                    <p><span class="brandname_tagline">Dont just buy,buy it on sale </span></p><!-- or Cost next to nothing -->
                </a>
            </div>


            <!--            <div class="sboxmain">
                            <div class="stext">I am in</div>
                            <div class="sicon">
                                <a class="aicon"><img src="img/location_icon.png"></a>
                            </div>
                            <select class="sbox" name="selCity" id="selCity">
                                <option value="1">Mumbai</option>
                                <option value="2">Nashik</option>
                                <option value="3">Pune</option>
                                <option value="4">Akola</option>
                                <option value="5">Navimumbai</option>
                                <option value="6">Goa</option>
                                <option value="7">Nagar</option>
                            </select>

                        </div>                       -->

            <!--Atul-->
            <div class="dropmain1">
                <div class="stext" style="margin-top: 18px;color: white">I am in</div>
                <form name="searchForm" action="searchResult.php" method="post">
                    <input type="text" readonly name="searchCity" id="searchCity" value="--Select City--" placeholder="--Select City--" autocomplete="off"
                           style="width: 300px;margin-top: 16px;background-image: url('img/location_icon.png');background-position:right;
                    background-size: 20px 20px;background-repeat: no-repeat;border-top-left-radius: 5px;border-top-right-radius: 5px;border-radius: 5px"/>
                    <div id="divCity" style="height:150px !important; display: none"></div>
                    <div id="citySuggestion" style="margin-left: 23%;margin-top: -10px"></div>
                </form>


                <div class="collapse navbar-collapse" style="margin-left:22%">

                    <ul class="nav navbar-nav navbar-right" style="font-size: 15px;">
                        <?php if(isset($_SESSION['user']['username'])){?>
                            <li id="listUsername" style="cursor: pointer"><a id="linkUsername"><span class="btnicon icon-user"></span><span id="spanUserameText"><?php echo "Hi ".ucfirst($_SESSION['user']['username']);?></span></a></li>
                            <li id="listLogin" style="cursor: pointer"><a id="linkLogin"><span class="btnicon icon-user"></span><span id="spanLoginText">Logout</span></a></li>
                        <?php } else {?>
                            <li id="listSignup" style="cursor: pointer"><a id="linkSignup"><span class="btnicon icon-user"></span><span id="spanSignupText">Sign Up</span></a></li>
                            <li id="listLogin" style="cursor: pointer"><a id="linkLogin"><span class="btnicon icon-user"></span><span id="spanLoginText">Login</span></a></li>
                        <?php }?>
                    </ul>
                </div>

            </div>
            <!--Atul-->

            <!--            <div id="citySuggestion" style="margin-left: 23%;margin-top: -10px"></div>-->

        </div>
    </nav>
</header>
<div style="width: 100%;height:auto;margin-left: auto;margin-right: auto;padding: 60px;color: #000000">

    <article class="col-l-16" style="color: #000000">
        <p><b>Last updated on April 15th, 2015</b></p><br>
        <h2 class="heading2">I. ACCEPTANCE OF TERMS</h2>
        <p>Thank you for using Zomato. These Terms of Service (the “Terms”) are intended to make you aware of your legal rights and responsibilities with respect to your access to and use of the Zomato website at www.zomato.com (the “Site”) and any related mobile or software applications including but not limited to delivery of information via the website whether existing now or in the future that link to the Terms (collectively, the “Services”).</p>
        <p><b>These Terms are effective for all existing and future Zomato user accounts including but without limitation to users having access to ‘restaurant business page’ to manage their claimed business listings.</b></p>
        <p>Please carefully read these Terms. By accessing or using the Site, you are agreeing to these Terms and concluding a legally binding contract with Zomato Media Pvt. Ltd. or, if you are in the United States, with Zomato USA, LLC. You may not use the Services if you do not accept the Terms or unable to be bound by the Terms. Your use of the Site is at your own risk, including the risk that you might be exposed to content that is objectionable, or otherwise inappropriate.</p>
        <p>In order to use the Services, you must first agree to the Terms. You can accept the Terms by<br><ul style="list-style-type: disc !important;"><li style="margin-left: 25px;">Clicking to accept or agree to the Terms, where it is made available to you by Zomato in the user interface for any particular Service; or</li><li style="margin-left: 25px;">Actually using the Services. In this case, you understand and agree that Zomato will treat your use of the Services as acceptance of the Terms from that point onwards.</li></ul></p>
        <br>
        <h2 class="heading2">II. DEFINITIONS</h2>
        <div class="normal_text">
            <b><p>User</p></b>
            <p>"User" or "You" or "Your" refers to you, as a user of the Services. A user is someone who accesses or uses the Services for the purpose of sharing, displaying, hosting, publishing, transacting, or uploading information or views or pictures and includes other persons jointly participating in using the Services including without limitation a user having access to ‘restaurant business page’ to manage claimed business listings or otherwise.</p>
            <b><p>Content</p></b>
            <p>"Content" will include (but is not limited to) images, photos, audio, video, location data, nearby places, and all other forms of information or data. "Your content" or "User Content" means content that you upload, share or transmit to, through or in connection with the Services, such as likes, ratings, reviews, images, photos, messages, profile information, and any other materials that you publicly display or displayed in your account profile. "Zomato content" means content that Zomato creates and make available in connection with the Services including, but not limited to, visual interfaces, interactive features, graphics, design, compilation, computer code, products, software, aggregate ratings, reports and other usage-related data in connection with activities associated with your account and all other elements and components of the Services excluding Your Content and third party content. "Third Party Content" means content that comes from parties other than Zomato or its users and is available on the Services.</p>
        </div>
        <br>
        <h2 class="heading2">III. ELIGIBILITY TO USE THE SERVICES</h2>
        <div class="normal_text">
            <ol style="list-style-type: decimal !important;">
                <li style="margin-left: 25px;"><p>You hereby represent and warrant that you are at least eighteen (18) years of age or above and are fully able and competent to understand and agree the terms, conditions, obligations, affirmations, representations, and warranties set forth in these Terms.</p></li>
                <li style="margin-left: 25px;"><p>Compliance with Laws. You are responsible for complying with all laws and regulations in the country in which you live when you access and use the Services. You agree to use the Services only in compliance with these Terms and applicable law, and in a manner that does not violate our legal rights or those of any third party(ies).</p></li>
            </ol>
            <!--		<p>You agree to the use of your data in accordance with Zomato's<a href="https://www.zomato.com/privacy"> Privacy Policy</a></p> -->
        </div>
        <br>
        <h2 class="heading2">IV. CHANGES TO THE TERMS</h2>
        <div class="normal_text">
            <p>Zomato may vary or amend or change or update these Terms, from time to time entirely at its own discretion. You shall be responsible for checking these Terms from time to time and ensure continued compliance with these Terms. Your use of Site after any such amendment or change in the Terms shall be deemed as your express acceptance to such amended/changed terms and you also agree to be bound by such changed/amended Terms.</p>
        </div>
        <br>
        <h2 class="heading2">V. TRANSLATION OF THE TERMS</h2>
        <div class="normal_text">
            <p>Zomato may provide a translation of the English version of the Terms into other languages. You understand and agree that any translation of the Terms into other languages is only for your convenience and that the English version shall govern the terms of your relationship with Zomato. Furthermore, if there are any inconsistencies between the English version of the Terms and its translated version, the English version of the Terms shall prevail over others.</p>
        </div>
        <br>
        <h2 class="heading2">VI. PROVISION OF THE SERVICES BEING OFFERED BY ZOMATO</h2>
        <div class="normal_text">
            <ol style="list-style-type: decimal !important;">
                <li style="margin-left: 25px;"><p>Zomato is constantly evolving in order to provide the best possible experience and information to its users. You acknowledge and agree that the form and nature of the Services which Zomato provides may require effecting certain changes in it, therefore Zomato reserves the right to suspend/cancel, or discontinue any or all products or services at any time without notice, make modifications and alterations in any or all of its contents, products and services contained on the site without any prior notice.</p></li>
                <li style="margin-left: 25px;"><p>We, the software, or the software application store that makes the software available for download may include functionality to automatically check for updates or upgrades to the software. Unless your device, its settings, or computer software does not permit transmission or use of upgrades or updates, you agree that we, or the applicable software or software application store, may provide notice to you of the availability of such upgrades or updates and automatically push such upgrade or update to your device or computer from time-to-time. You may be required to install certain upgrades or updates to the software in order to continue to access or use the Services, or portions thereof (including upgrades or updates designed to correct issues with the Services). Any updates or upgrades provided to you by us under the Terms shall be considered part of the Services.</p></li>
                <li style="margin-left: 25px;"><p>You acknowledge and agree that if Zomato disables access to your account, you may be prevented from accessing the Services, your account details or any files or other content, which is contained in your account.</p></li>
                <li style="margin-left: 25px;"><p>You acknowledge and agree that while Zomato may not currently have set a fixed upper limit on the number of transmissions you may send or receive through the Services, Zomato may set such fixed upper limits at any time, at Zomato's discretion.</p></li>
                <li style="margin-left: 25px;"><p>By using Zomato's Services you agree to the following disclaimer: The Content on these Services is for informational purposes only. Zomato disclaims any liability for any information that may have become outdated since the last time the particular piece of information was updated. Zomato reserves the right to make changes and corrections to any part of the Content on these Services at any time without prior notice. Zomato does not guarantee the prices listed in menus or the availability of all menu items at any restaurant. Unless stated otherwise, all pictures and information contained on these Services are believed to be owned by or licensed to Zomato. Please email a takedown request (by using the “Contact Us” link on the home page) to the webmaster if you are the copyright owner of any Content on these Services and you think the use of the above material violates Your copyright in any way. Please indicate the exact URL of the webpage in your request. All images shown here have been digitized by Zomato. No other party is authorized to reproduce or republish these digital versions in any format whatsoever without the written permission of Zomato.</p></li>
                <li style="margin-left: 25px;"><p>Zomato reserves the right to charge subscription and/or membership fees from a user, by giving reasonable prior notice, in respect of any product, service or any other aspect of this site anytime in future.</p></li>
            </ol>
        </div>
        <br>
        <h2 class="heading2">VII. USE OF SERVICES BY YOU OR USER</h2>
        <div class="normal_text">
            <b><p>Zomato User Account Including ‘Claim Your Business Listing’ Access</p></b>
            <p><p>You must create an account in order to use some of the features offered by the Services, including without limitation to ‘claim your business listing’ on the Services. Use of any personal information you provide to us during the account creation process is governed by our <a href="https://www.zomato.com/privacy">Privacy Policy</a>. You must keep your password confidential and you are solely responsible for maintaining the confidentiality and security of your account, all changes and updates submitted through your account, and all activities that occur in connection with your account.</p><p>You may also be able to register to use the Services by logging into your account with your credentials from certain third party social networking sites (e.g., Facebook). You confirm that you are the owner of any such social media account and that you are entitled to disclose your social media login information to us. You authorize us to collect your authentication information, and other information that may be available on or through your social media account consistent with your applicable settings and instructions.</p><p>In creating an account and/or claiming your business’ listing, you represent to us that all information provided to us in such process is true, accurate and correct, and that you will update your information as and when necessary in order to keep it accurate. If you are creating an account or claiming a business listing, then you represent to us that you are the owner or authorized agent of such business. You may not impersonate someone else, create or use an account for anyone other than yourself, provide an email address other than your own, create multiple accounts or business listings except as otherwise authorized by us, or provide or use false information to obtain access to a business’ listing on the Services that you are not legally entitled to claim. You acknowledge that any false claiming of a business listing may cause Zomato or third parties to incur substantial economic damages and losses for which you may be held liable and accountable.</p><p>You are also responsible for all activities that occur in your account. You agree to notify us immediately of any unauthorized use of your account in order to enable us to take necessary corrective action. You also agree that you will not allow any third party to use your account for the purpose of transacting activities in your name on the Services.</p><p>By creating an account, you agree to receive certain communications in connection with the Site or Services. For example, you might receive comments or friend requests from other Users. You can opt-out or manage your preferences regarding non-essential communications through account settings.</p></p>
            <b><p>Others Terms</p></b>
            <p><p>In order to connect you to certain restaurants, we provided value added telephony services through our phone lines, which connect directly to restaurants’ phone lines. We record all information regarding this call including the voice recording of the conversation between you, the customer and the restaurant (for internal billing tracking purposes and customer service improvement at the restaurant's end). If you do not wish that your information be recorded in such a manner, please do not use the telephone services provided by Zomato. You explicitly agree and permit Zomato to record all this information when you dial Zomato's phone numbers.</p><p>You agree to use the Services only for purposes that are permitted by (a) the Terms and (b) any applicable law, regulation or generally accepted practices or guidelines in the relevant jurisdictions.</p><p>You agree to use the data owned by Zomato (as available on the Services or through any other means like API etc.) only for personal use/purposes and not for any commercial use (other than in accordance with ‘Claim Your Business Listing’ access) unless agreed to by/with Zomato in writing.</p><p>You agree not to access (or attempt to access) any of the Services by any means other than the interface that is provided by Zomato, unless you have been specifically allowed to do so, by way of a separate agreement with Zomato. You specifically agree not to access (or attempt to access) any of the Services through any automated means (including use of scripts or web crawlers) and shall ensure that you comply with the instructions set out in any robots.txt file present on the Services.</p><p>You agree that you will not engage in any activity that interferes with or disrupts the Services (or the servers and networks which are connected to the Services). You shall not delete or revise any material or information posted by any other User(s), shall not engage in spamming, including but not limited to any form of emailing, posting or messaging that is unsolicited.</p></p>
        </div>
        <br>
        <h2 class="heading2">VIII. CONTENT</h2>
        <div class="normal_text">
            <b><p>Ownership of Zomato Content and Proprietary Rights</p></b>
            <p><p>We are the sole and exclusive copyright owners of the Services and our Content. We also exclusively own the copyrights, trademarks, service marks, logos, trade names, trade dress and other intellectual and proprietary rights throughout the world (the “IP Rights”) associated with the Services and Our Content, which may be protected by copyright, patent, trademark and other applicable intellectual property and proprietary rights and laws. You acknowledge that the Services contain original works and have been developed, compiled, prepared, revised, selected, and arranged by us and others through the application of methods and standards of judgment developed and applied through the expenditure of substantial time, effort, and money and constitutes valuable intellectual property of us and such others. You further acknowledge that the Services may contain information which is designated as confidential by Zomato and that you shall not disclose such information without Zomato's prior written consent.</p><p>You agree to protect our proprietary rights and the proprietary rights of all others having rights in the Services during and after the term of this agreement and to comply with all reasonable written requests made by us or our suppliers and licensors of content or otherwise to protect their and others’ contractual, statutory, and common law rights in the Services. You acknowledge and agree that Zomato (or Zomato's licensors) own all legal right, title and interest in and to the Services, including any IP Rights which subsist in the Services (whether those rights happen to be registered or not, and wherever in the world those rights may exist). You further acknowledge that the Services may contain information which is designated as confidential by Zomato and that you shall not disclose such information without Zomato's prior written consent. Unless you have agreed otherwise in writing with Zomato, nothing in the Terms gives you a right to use any of Zomato's trade names, trademarks, service marks, logos, domain names, and other distinctive brand features.</p><p>You agree not to use any framing techniques to enclose any trademark or logo or other proprietary information of Zomato; or remove, conceal or obliterate any copyright or other proprietary notice or source identifier, including without limitation, the size, color, location or style of any proprietary mark(s). Any infringement shall lead to appropriate legal proceedings against you at appropriate forum for seeking all available/possible remedies under applicable laws of the country of violation. You cannot modify, reproduce, publicly display or exploit in any form or manner whatsoever any of the Zomato’s content in whole or in part except as expressly authorized by Zomato.</p><p>To the fullest extent permitted by applicable law, we neither warrant nor represent that your use of materials displayed on the Services will not infringe rights of third parties not owned by or affiliated with us. You agree to immediately notify us upon becoming aware of any claim that the Services infringe upon any copyright trademark, or other contractual, intellectual, statutory, or common law rights by following the instructions contained below in section XVI.</p></p>
            <b><p>Your License to Zomato Content:</p></b>
            <p><p>We grant you a personal, limited, non-exclusive and non-transferable license to access and use the Services only as expressly permitted in these Terms. You shall not use the Services for any illegal purpose or in any manner inconsistent with these Terms. You may use information made available through the Services solely for your personal, non-commercial use. You agree not to use, copy, display, distribute, modify, broadcast, translate, reproduce, reformat, incorporate into advertisements and other works, sell, promote, create derivative works, or in any way exploit or allow others to exploit any of Zomato Content in whole or in part except as expressly authorized by us. Except as otherwise expressly granted to you in writing, we do not grant you any other express or implied right or license to the Services, Zomato Content or our IP Rights.</p><p>Any violation by you of the license provisions contained in this Section may result in the immediate termination of your right to use the Services, as well as potential liability for copyright and other IP Rights infringement depending on the circumstances.</p></p>
            <b><p>Zomato License to Your or User Content:</p></b>
            <p>By submitting Your Content you hereby irrevocably grant us a perpetual, irrevocable, world-wide, non-exclusive, royalty-free, sub-licensable and transferable license and right to use Your Content (including content shared by any business user having access to a ‘restaurant business page’ to manage claimed business listings or otherwise) and all IP Rights therein for any purpose including API partnerships with third parties and in any media existing now or in future. By “use” we mean use, copy, display, distribute, modify, translate, reformat, incorporate into advertisements and other works, promote, create derivative works, and in the case of third party services, allow their users and others to do the same. You grant us the right to use the name or username that you submit in connection with Your Content. You irrevocably waive, and cause to be waived, any claims and assertions of moral rights or attribution with respect to Your Content brought against us, any third party services and our and their users.</p>
            <b><p>Representations Regarding Your or User Content:</p></b>
            <p><p>You are responsible for Your Content. You represent and warrant that you are the sole author of, own, or otherwise control all of the rights of Your Content or have been granted explicit permission from the rights holder to submit Your Content; Your Content was not copied from or based in whole or in part on any other content, work, or website; Your Content was not submitted via the use of any automated process such as a script bot; use of Your Content by us, third party services, and our and their third party users will not violate or infringe any rights of yours or any third party; Your Content is truthful and accurate; and Your Content does not violate the Terms or any applicable laws. <b>If Your Content is a review, you represent and warrant that you are the sole author of that review; the review reflects an actual dining experience that you had; you were not paid or otherwise remunerated in connection with your authoring or posting of the review; and you had no financial, competitive, or other personal incentive to author or post a review that was not a fair expression of your honest opinion.</b></p><p>You assume all risks associated with Your Content, including anyone's reliance on its quality, accuracy, or reliability, or any disclosure by you of information in Your Content that makes you personally identifiable. While we reserve the right to remove content, we do not control actions or content posted by our users and do not guarantee the accuracy, integrity or quality of any content. You acknowledge and agree that content posted by users and any and all liability arising from such content is the sole responsibility of the user who posted the content, and not us.</p></p>
            <b><p>Content Removal.</p></b>
            <p>We reserve the right, at any time and without prior notice, to remove, block, or disable access to any content that we, for any reason or no reason, consider to be objectionable, in violation of the Terms or otherwise harmful to the Services or our users in our sole discretion. Subject to the requirements of applicable law, we are not obligated to return any of Your Content to you under any circumstances. <b>Any review, which is derogatory, defamatory or hateful and without any substantial evidence may be taken down at our sole discretion.</b></p>
            <b><p>Third Party Content and Links</p></b>
            <p><p>Some of the content available through the Services may include or link to materials that belong to third parties, such as third party reservation services or online food delivery/ordering. Please note that your use of such third party services will be governed by the terms of service and privacy policy applicable to the corresponding third party. We may obtain business addresses, phone numbers, and other contact information from third party vendors who obtain their data from public sources. We have no control over, and make no representation or endorsement regarding the accuracy, relevancy, copyright compliance, legality, completeness, timeliness or quality of any product, services, advertisements and other content appearing in or linked to from the Services. We do not screen or investigate third party material before or after including it on our Services. We reserve the right, in our sole discretion and without any obligation, to make improvements to, or correct any error or omissions in, any portion of the content accessible on the Services. Where appropriate, we may in our sole discretion and without any obligation, verify any updates, modifications, or changes to any content accessible on the Services, but shall not be liable for any delay or inaccuracies related to such updates. You acknowledge and agree that Zomato is not responsible for the availability of any such external sites or resources, and does not endorse any advertising, products or other materials on or available from such web sites or resources.</p><p>Third party content, including that posted by our users, does not reflect our views or that of our parent, subsidiary, affiliate companies, branches, employees, officers, directors, or shareholders. In addition, none of the content available through the Services is endorsed or certified by the providers or licensors of such third party content. We assume no responsibility or liability for any of Your Content or any third party content. You further acknowledge and agree that Zomato is not liable for any loss or damage which may be incurred by you as a result of the availability of those external sites or resources, or as a result of any reliance placed by you on the completeness, accuracy or existence of any advertising, products or other materials on, or available from, such web sites or resources. Without limiting the generality of the foregoing, we expressly disclaim any liability for any offensive, defamatory, illegal, invasive, unfair, or infringing content provided by third parties.</p></p>
            <b><p>User Reviews</p></b>
            <p>User reviews do not reflect the opinion of Zomato. Zomato receives multiple reviews by users, which reflect the opinions of the Users. It is pertinent to state that each and every review posted on Zomato is the personal opinion of the user/reviewer only. Zomato is a neutral platform, which solely provides a means of communication between users/reviewers including users or restaurant owners/representatives with access to restaurant business page. The advertisements on Zomato are published on an independent basis and there is no relation between the reviews of advertisers those who have advertised on the Services. We are a neutral platform and we don’t arbitrate disputes, however in case if someone writes a review that isn’t true about the restaurant, the best option for the restaurant representative would be to contact the reviewer or post a public response in order to clear up any misunderstandings. If the restaurant believes that any particular user’s review violates Zomato’s Policy, he can flag the review to our attention. Zomato may remove the review in its sole discretion if review is in violation of the Terms, or content guidelines and policies or otherwise harmful to the Services.</p>
        </div>
        <br>
        <h2 class="heading2">IX. CONTENT GUIDELINES AND PRIVACY POLICY</h2>
        <div class="normal_text">
            <b><p>Content Guidelines</p></b>
            <p>You represent that you have read, understood and agreed to our <a href="https://www.zomato.com/policies">Guidelines and Polices</a> related to Content.</p>
            <b><p>Privacy Policy</p></b>
            <p>You represent that you have read understood and agreed to our <a href="https://www.zomato.com/privacy">Privacy Policy</a>. Please note that we may disclose information about you to third parties or government authorities if we believe that such a disclosure is reasonably necessary to (i) take action regarding suspected illegal activities; (ii) enforce or apply our Terms and Privacy Policy; (iii) comply with legal process or other government inquiry, such as a search warrant, subpoena, statute, judicial proceeding, or other legal process/notice served on us; or (iv) protect our rights, reputation, and property, or that of our users, affiliates, or the general public.</p>
        </div>
        <br>
        <h2 class="heading2">X. RESTRICTIONS ON USE</h2>
        <div class="normal_text">
            <p>Without limiting the generality of these Terms, in using the Services, you specifically agree not to post or transmit any content (including review) or engage in any activity that, in our sole discretion:</p>
            <p><ol style="list-style-type: decimal !important;"><li style="margin-left: 25px;">Violate our Guidelines and Policies;</li><li style="margin-left: 25px;">Is harmful, threatening, abusive, harassing, tortious, indecent, defamatory, discriminatory, vulgar, profane, obscene, libelous, hateful or otherwise objectionable, invasive of another’s privacy, relating or encouraging money laundering or gambling;</li><li style="margin-left: 25px;">Constitutes an inauthentic or knowingly erroneous review, or does not address the goods and services, atmosphere, or other attributes of the business you are reviewing.</li><li style="margin-left: 25px;">Contains material that violates the standards of good taste or the standards of the Services;</li><li style="margin-left: 25px;">Violates any third-party right, including, but not limited to, right of privacy, right of publicity, copyright, trademark, patent, trade secret, or any other intellectual property or proprietary rights;</li><li style="margin-left: 25px;">Accuses others of illegal activity, or describes physical confrontations;</li><li style="margin-left: 25px;">Alleges any matter related to health code violations requiring healthcare department reporting. Refer to our Guidelines and Policies for more details about health code violations.</li><li style="margin-left: 25px;">Is illegal, or violates any federal, state, or local law or regulation (for example, by disclosing or trading on inside information in violation of securities law);</li><li style="margin-left: 25px;">Attempts to impersonate another person or entity;</li><li style="margin-left: 25px;">Disguises or attempts to disguise the origin of Your Content, including but not limited to by: (i) submitting Your Content under a false name or false pretenses; or (ii) disguising or attempting to disguise the IP address from which Your Content is submitted;</li><li style="margin-left: 25px;">Constitutes a form of deceptive advertisement or causes, or is a result of, a conflict of interest;</li><li style="margin-left: 25px;">Is commercial in nature, including but not limited to spam, surveys, contests, pyramid schemes, postings or reviews submitted or removed in exchange for payment, postings or reviews submitted or removed by or at the request of the business being reviewed, or other advertising materials;</li><li style="margin-left: 25px;">Asserts or implies that Your Content is in any way sponsored or endorsed by us;</li><li style="margin-left: 25px;">Contains material that is not in English or, in the case of products provided in foreign languages, the language relevant to such products;</li><li style="margin-left: 25px;">Falsely states, misrepresents, or conceals your affiliation with another person or entity;</li><li style="margin-left: 25px;">Accesses or uses the account of another user without permission;</li><li style="margin-left: 25px;">Distributes computer viruses or other code, files, or programs that interrupt, destroy, or limit the functionality of any computer software or hardware or electronic communications equipment;</li><li style="margin-left: 25px;">Interferes with, disrupts, or destroys the functionality or use of any features of the Services or the servers or networks connected to the Services;</li><li style="margin-left: 25px;">“Hacks” or accesses without permission our proprietary or confidential records, those of another user, or those of anyone else;</li><li style="margin-left: 25px;">Violates any contract or fiduciary relationship (for example, by disclosing proprietary or confidential information of your employer or client in breach of any employment, consulting, or non-disclosure agreement);</li><li style="margin-left: 25px;">Decompiles, reverse engineers, disassembles or otherwise attempt to derive source code from the Services;</li><li style="margin-left: 25px;">Removes, circumvents, disables, damages or otherwise interferes with security-related features, or features that enforce limitations on use of, the Services;</li><li style="margin-left: 25px;">Violates the restrictions in any robot exclusion headers on the Services, if any, or bypasses or circumvents other measures employed to prevent or limit access to the Services;</li><li style="margin-left: 25px;">Collects, accesses, or stores personal information about other users of the Services;</li><li style="margin-left: 25px;">Is posted by a bot;</li><li style="margin-left: 25px;">Harms minor in any way;</li><li style="margin-left: 25px;">Threatens the unity, integrity, defense, security or sovereignty of India or of the country of use, friendly relations with foreign states, or public order or causes incitement to the commission of any cognizable offence or prevents investigation of any offence or is insulting any other nation;</li><li style="margin-left: 25px;">Modifies, copies, scrapes or crawls, displays, publishes, licenses, sells, rents, leases, lends, transfers or otherwise commercialize any rights to the Services or Our Content; or</li><li style="margin-left: 25px;">Attempts to do any of the foregoing.</li></ol></p>
            <p>You acknowledge that we have no obligation to monitor your – or anyone else’s – access to or use of the Services for violations of the Terms, or to review or edit any content. However, we have the right to do so for the purpose of operating and improving the Services (including without limitation for fraud prevention, risk assessment, investigation and customer support purposes), to ensure your compliance with the Terms and to comply with applicable law or the order or requirement of legal process, a court, consent decree, administrative agency or other governmental body.</p>
            <p>You hereby agree and assure Zomato that the Site/Services shall be used for lawful purposes only and that you will not violate laws, regulations, ordinances or other such requirements of any applicable Central, Federal State or local government or international law(s). You shall not upload, post, email, transmit or otherwise make available any unsolicited or unauthorized advertising, promotional materials, junk mail, spam mail, chain letters or any other form of solicitation, encumber or suffer to exist any lien or security interest on the subject matter of these Terms or to make any representation or warranty on behalf of Zomato in any form or manner whatsoever.</p>
            <p><b>Any Content uploaded by you, shall be subject to relevant laws of India and of the country of use and may be disabled, or and may be subject to investigation under applicable laws. Further, if you are found to be in non-compliance with the laws and regulations, these terms, or the privacy policy of the Site, Zomato shall have the right to immediately block your access and usage of the Site and Zomato shall have the right to remove any non-compliant content and or comment forthwith, uploaded by you and shall further have the right to take appropriate recourse to such remedies as would be available to it under various statutes.</b></p>
        </div>
        <br>
        <h2 class="heading2">XI. USER FEEDBACK</h2>
        <div class="normal_text">
            <p>If you share or send any ideas, suggestions, changes or documents ("Feedback"), you agree that (i) your Feedback does not contain the confidential, secretive or proprietary information of third parties, (ii) Zomato is under no obligation of confidentiality with respect to such Feedback, (iii) Zomato may have already received similar Feedback from some other user or it may be under consideration or in development, and (iv) By providing the Feedback, you grant us a binding, non-exclusive, royalty-free, perpetual, global license to use, modify, develop, publish, distribute and sublicense the Feedback, and you irrevocably waive, against Zomato and its users any claims/assertions, whatsoever of any nature, with regard to such Feedback.</p>
        </div>
        <br>
        <h2 class="heading2">XII. ADVERTISING</h2>
        <div class="normal_text">
            <p>Some of the Services are supported by advertising revenue and may display advertisements and promotions. These advertisements may be targeted to the content of information stored on the Services, queries made through the Services or other information. The manner, mode and extent of advertising by Zomato on the Services are subject to change without specific notice to you. In consideration for Zomato granting you access to and use of the Services, you agree that Zomato may place such advertising on the Services.</p>
            <p>Part of the site may contain advertising information or promotional material or other material submitted to Zomato by third parties. Responsibility for ensuring that material submitted for inclusion on the Site or mobile apps complies with applicable international and national law is exclusively on the party providing the information/material. Your correspondence or business dealings with, or participation in promotions of, advertisers other than Zomato found on or through the Site and or mobile apps, including payment and delivery of related goods or services, and any other terms, conditions, warranties or representations associated with such dealings, shall be solely between you and such advertiser. Zomato will not be responsible or liable for any error or omission, inaccuracy in advertising material or any loss or damage of any sort incurred as a result of any such dealings or as a result of the presence of such other advertiser(s) on the Site and mobile apps.</p>
        </div>
        <br>
        <h2 class="heading2">XIII. ADDITIONAL TERMS & CONDITIONS FOR CUSTOMERS USING ONLINE FOOD ORDERING SERVICES</h2>
        <div class="normal_text">
            <ol style="list-style-type: decimal !important;">
                <li style="margin-left: 25px;"><p>It is the sole responsibility of participating restaurant (“Restaurant”) to honor your order and deliver it to you. Zomato is only a conduit between you and the Restaurant. Zomato shall not be liable for any acts or omissions on part of the Restaurant including deficiency in service, wrong delivery of order, quality of food, time taken to deliver order, etc.</p></li>
                <li style="margin-left: 25px;"><p>Please note that some of the food may be suitable for certain ages only. You should check the dish you are ordering and read its description, if provided, prior to placing your order. Zomato shall not be liable in the event food ordered by you does not meet your dietary or any other requirements and restrictions.</p></li>
                <li style="margin-left: 25px;"><p>While placing an order you shall be required to provide certain details. You agree to take particular care when providing these details and warrant that these details are accurate and complete at the time of placing an ordering. By providing these details, you express your acceptance to Zomato’s terms and privacy policies.</p></li>
                <li style="margin-left: 25px;"><p>You or any person instructed by you shall not use food purchased from the online food ordering services application (the "App") for resale.</p></li>
                <li style="margin-left: 25px;"><p>All prices listed on the App are correct at the time of publication, and have placed as received by the Restaurant. While we take great care to keep them up to date, the final price charged to you by the Restaurant may change at the time of delivery. In the event of a conflict between price on the App and price charged by the Restaurant, the price charged by the Restaurant shall be deemed to be the correct price.</p></li>
                <li style="margin-left: 25px;"><p>The total price for food delivery ordered, including delivery charges and other charges, will be displayed on the App when you place your order. Full payment must be made in cash, at the time of delivery, as per the actual bill provided by the delivery person.</p></li>
                <li style="margin-left: 25px;"><p>Delivery periods quoted at the time of ordering are approximate only, and may vary.</p></li>
            </ol>
        </div>
        <br>
        <h2 class="heading2">XIV. DISCLAIMER OF WARRANTIES, LIMITATION OF LIABILITY, AND INDEMNIFICATION</h2>
        <div class="normal_text">
            <b><p>Disclaimer of Warranties</p></b>
            <p>YOU ACKNOWLEDGE AND AGREE THAT THE SERVICES ARE PROVIDED "AS IS" AND "AS AVAILABLE" AND THAT YOUR USE OF THE SERVICES SHALL BE AT YOUR SOLE RISK. TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW, ZOMATO, ITS AFFILIATES AND THEIR RESPECTIVE OFFICERS, DIRECTORS, EMPLOYEES, AGENTS, AFFILIATES, BRANCHES, SUBSIDIARIES, AND LICENSORS ("ZOMATO PARTIES") DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, IN CONNECTION WITH THE SERVICES INCLUDING MOBILE APPS AND YOUR USE OF THEM. TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW, THE ZOMATO PARTIES MAKE NO WARRANTIES OR REPRESENTATIONS THAT THE SERVICES HAVE BEEN AND WILL BE PROVIDED WITH DUE SKILL, CARE AND DILIGENCE OR ABOUT THE ACCURACY OR COMPLETENESS OF THE SERVICES' CONTENT AND ASSUME NO RESPONSIBILITY FOR ANY (I) ERRORS, MISTAKES, OR INACCURACIES OF CONTENT, (II) PERSONAL INJURY OR PROPERTY DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM YOUR ACCESS TO AND USE OF THE SERVICES, (III) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION STORED THEREIN, (IV) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE SERVICES, (V) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE TRANSMITTED TO OR THROUGH THE SERVICES THROUGH THE ACTIONS OF ANY THIRD PARTY, (VI) ANY LOSS OF YOUR DATA OR CONTENT FROM THE SERVICES AND/OR (VII) ANY ERRORS OR OMISSIONS IN ANY CONTENT OR FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF ANY CONTENT POSTED, EMAILED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE SERVICES. ANY MATERIAL DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF THE SERVICES IS DONE AT YOUR OWN DISCRETION AND RISK AND YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM OR OTHER DEVICE OR LOSS OF DATA THAT RESULTS FROM THE DOWNLOAD OF ANY SUCH MATERIAL. THE ZOMATO PARTIES WILL NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND THIRD-PARTY PROVIDERS OF PRODUCTS OR SERVICES. YOU ARE SOLELY RESPONSIBLE FOR ALL OF YOUR COMMUNICATIONS AND INTERACTIONS WITH OTHER USERS OF THE SERVICES AND WITH OTHER PERSONS WITH WHOM YOU COMMUNICATE OR INTERACT AS A RESULT OF YOUR USE OF THE SERVICES. NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM ZOMATO OR THROUGH OR FROM THE SERVICES SHALL CREATE ANY WARRANTY NOT EXPRESSLY STATED IN THE TERMS. UNLESS YOU HAVE BEEN EXPRESSLY AUTHORIZED TO DO SO IN WRITING BY ZOMATO, YOU AGREE THAT IN USING THE SERVICES, YOU WILL NOT USE ANY TRADE MARK, SERVICE MARK, TRADE NAME, LOGO OF ANY COMPANY OR ORGANIZATION IN A WAY THAT IS LIKELY OR INTENDED TO CAUSE CONFUSION ABOUT THE OWNER OR AUTHORIZED USER OF SUCH MARKS, NAMES OR LOGOS.</p>
            <b><p>Limitation of Liability</p></b>
            <p><p>TO THE FULLEST EXTENT PERMITTED BY APPLICABLE LAW, IN NO EVENT SHALL THE ZOMATO PARTIES BE LIABLE TO YOU FOR ANY DAMAGES RESULTING FROM ANY (I) ERRORS, MISTAKES, OR INACCURACIES OF CONTENT, (II) PERSONAL INJURY OR PROPERTY DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM YOUR ACCESS TO AND USE OF THE SERVICES INCLUDING MOBILE APP, (III) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION STORED THEREIN, (IV) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM OUR SERVERS, (V) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE, WHICH MAY BE TRANSMITTED TO OR THROUGH THE SERVICES BY ANY THIRD PARTY, (VI) ANY LOSS OF YOUR DATA OR CONTENT FROM THE SERVICES (VII) ANY ERRORS OR OMISSIONS IN ANY CONTENT OR FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF YOUR USE OF ANY CONTENT POSTED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE SERVICES, WHETHER BASED ON WARRANTY, CONTRACT, TORT, OR ANY OTHER LEGAL THEORY, AND WHETHER OR NOT THE ZOMATO PARTIES ARE ADVISED OF THE POSSIBILITY OF SUCH DAMAGES, AND/OR (VIII) THE DISCLOSURE OF INFORMATION PURSUANT TO THESE TERMS OR OUR PRIVACY POLICY, (IX) YOUR FAILURE TO KEEP YOUR PASSWORD OR ACCOUNT DETAILS SECURE AND CONFIDENTIAL, (X) LOSS OR DAMAGE WHICH MAY BE INCURRED BY YOU, INCLUDING BUT NOT LIMITED TO LOSS OR DAMAGE AS A RESULT OF RELIANCE PLACED BY YOU ON THE COMPLETENESS, ACCURACY OR EXISTENCE OF ANY ADVERTISING, OR AS A RESULT OF ANY RELATIONSHIP OR TRANSACTION BETWEEN YOU AND ANY ADVERTISER OR SPONSOR WHOSE ADVERTISING APPEARS ON THE SERVICES. IN NO EVENT SHALL THE ZOMATO PARTIES BE LIABLE TO YOU FOR ANY INDIRECT, INCIDENTAL, SPECIAL, PUNITIVE, EXEMPLARY OR CONSEQUENTIAL DAMAGES WHATSOEVER, HOWEVER CAUSED AND UNDER ANY THEORY OF LIABILITY, INCLUDING BUT NOT LIMITED TO, ANY LOSS OF PROFIT (WHETHER INCURRED DIRECTLY OR INDIRECTLY), ANY LOSS OF GOODWILL OR BUSINESS REPUTATION, ANY LOSS OF DATA SUFFERED, COST OF PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES, OR OTHER INTANGIBLE LOSS.</p><p>FURTHERMORE, THE TOTAL LIABILITY OF THE ZOMATO PARTIES TO YOU FOR ANY CAUSE OF ACTION YOU TAKE AGAINST THE ZOMATO PARTIES WILL AT ALL TIMES BE LIMITED TO ONE HUNDRED DOLLARS ($100.00) OR THE AMOUNT YOU HAVE PAID TO US IN THE LAST TWELVE (12) MONTHS, IF ANY, WHICHEVER IS GREATER.</p><p>Some countries and jurisdictions do not allow the limitation or exclusion of consequential, direct, indirect, or other damages and to the extent you are a consumer the limitations or exclusions in this section may not apply to you.</p></p>
            <b><p>Indemnification</p></b>
            <p>You agree to indemnify, defend, and hold harmless the Zomato Parties from and against any third party claims, damages (actual and/or consequential), actions, proceedings, demands, losses, liabilities, costs and expenses (including reasonable legal fees) suffered or reasonably incurred by us arising as a result of, or in connection with: (i) Your Content, (ii) your unauthorized use of the Services, or products or services included or advertised in the Services; (iii) your access to and use of the Services; (iv) your violation of any rights of another party; or (v) your breach of these Terms, including, but not limited to, any infringement by you of the copyright or intellectual property rights of any third party. We retain the exclusive right to settle, compromise and pay, without your prior consent, any and all claims or causes of action which are brought against us. We reserve the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us and you agree to cooperate with our defense of these claims. You agree not to settle any matter in which we are named as a defendant and/or for which you have indemnity obligations without our prior written consent. We will use reasonable efforts to notify you of any such claim, action or proceeding upon becoming aware of it.</p>
        </div>
        <br>
        <h2 class="heading2">XV. TERMINATION OF YOUR ACCESS TO THE SERVICES</h2>
        <div class="normal_text">
            <p>You can terminate your account at any time by contacting us via the "Contact Us" link at the bottom of every page or by clicking here, and ceasing further use of the Services.</p>
            <p>We may terminate your use of the Services and deny you access to the Services in our sole discretion for any reason or no reason, including your: (i) violation of these Terms; or (ii) lack of use of the Services. You agree that any termination of your access to the Services may be effected without prior notice, and acknowledge and agree that we may immediately deactivate or delete your account and all related information and/or bar any further access to your account or the Services. If you use the Services in violation of these Terms, we may, in our sole discretion, retain all data collected from your use of the Services. Further, you agree that we shall not be liable to you or any third party for the discontinuation or termination of your access to the Services.</p>
        </div>
        <br>
        <h2 class="heading2">XVI. GENERAL TERMS</h2>
        <div class="normal_text">
            <p><b>Interpretation:</b>  The section and subject headings in these Terms are included for reference only and shall not be used to interpret any provisions of these Terms.</p>
            <p><b>Entire Agreement and Waiver:</b> The Terms, together with the ‘Privacy Policy’ and ‘Guidelines and Policies’, shall constitute the entire agreement between you and us concerning the Services. No failure or delay by us in exercising any right, power or privilege under the Terms shall operate as a waiver of such right or acceptance of any variation of the Terms and nor shall any single or partial exercise by either party of any right, power or privilege preclude any further exercise of that right or the exercise of any other right, power or privilege.</p>
            <p><b>Severability:</b> If any provision of these Terms is deemed unlawful, invalid, or unenforceable by a judicial court for any reason, then that provision shall be deemed severed from these Terms, and the remainder of the Terms shall continue in full force and effect.</p>
            <p><b>Partnership or Agency:</b> None of the provisions of these Terms shall be deemed to constitute a partnership or agency between you and Zomato and you shall have no authority to bind Zomato in any form or manner, whatsoever.</p>
            <p><b>Governing Law/Waiver:</b>  <p><b>For Users residing in the United States:</b> These Terms shall be governed in all respects by the laws of the State of Washington as they apply to agreements entered into and to be performed entirely within the State of Washington between Washington residents, without regard to conflict of law provisions. You agree that any claim or dispute you may have against Zomato must be resolved exclusively by a state or federal court located in the Seattle, Washington. You agree to submit to the personal jurisdiction of the courts located within Seattle, Washington for the purpose of litigating all Claims that arise between You and Zomato.</p> <p><b>For Users residing outside the United States:</b> These Terms shall be governed by the laws of India. The Courts of law at Delhi/New Delhi shall have exclusive jurisdiction over any disputes arising under this agreement.</p> <p><b>For all Users:</b> YOU MUST COMMENCE ANY LEGAL ACTION AGAINST US WITHIN ONE (1) YEAR AFTER THE ALLEGED HARM INITIALLY OCCURS. FAILURE TO COMMENCE THE ACTION WITHIN THAT PERIOD SHALL FOREVER BAR ANY CLAIMS OR CAUSES OF ACTION REGARDING THE SAME FACTS OR OCCURRENCE, NOTWITHSTANDING ANY STATUTE OF LIMITATIONS OR OTHER LAW TO THE CONTRARY. WITHIN THIS PERIOD, ANY FAILURE BY US TO ENFORCE OR EXERCISE ANY PROVISION OF THESE TERMS OR ANY RELATED RIGHT SHALL NOT CONSTITUTE A WAIVER OF THAT RIGHT OR PROVISION.</p></p>
            <p><b>Carrier Rates may Apply:</b> By accessing the Services through a mobile or other device, you may be subject to charges by your Internet or mobile service provider, so check with them first if you are not sure, as you will be responsible for any such costs.</p>
            <p><b>Linking and Framing:</b> You may not frame the Services. You may link to the Services, provided that you acknowledge and agree that you will not link the Services to any website containing any inappropriate, profane, defamatory, infringing, obscene, indecent, or unlawful topic, name, material, or information or that violates any intellectual property, proprietary, privacy, or publicity rights. Any violation of this provision may, in our sole discretion, result in termination of your use of and access to the Services effective immediately.</p>
        </div>
        <br>
        <h2 class="heading2">XVII. NOTICE OF COPYRIGHT INFRINGEMENT AND GRIEVANCE REDRESSAL MECHANISM</h2>
        <div class="normal_text">
            <p>Zomato shall not be liable for any infringement of copyright arising out of materials posted on or transmitted through the site or mobile apps, or items advertised on the site or mobile apps, by end users or any other third parties. We respect the intellectual property rights of others and require those that use the Services to do the same. We may, in appropriate circumstances and at our discretion, remove or disable access to material on the Services that infringes upon the copyright rights of others. We also may, in our discretion, remove or disable links or references to an online location that contains infringing material or infringing activity. In the event that any users of the Services repeatedly infringe on others’ copyrights, we may in our sole discretion terminate those individuals’ rights to use the Services If you believe that your copyright has been or is being infringed upon by material found in the Services, you are required to follow the below procedure to file a notification:</p>
            <ul >
                <li style="margin-left: 25px;">Identify in writing the copyrighted material that you claim has been infringed upon;</li>
                <li style="margin-left: 25px;">Identify in writing the material on the Services that you allege is infringing upon copyrighted material, and provide sufficient information that reasonably identifies the location of the alleged infringing material (for example, the user name of the alleged infringer and the business listing it is posted under);</li>
                <li style="margin-left: 25px;">Include the following statement: "I have a good faith belief that the use of the content on the Services as described above is not authorized by the copyright owner, its agent, or law";</li>
                <li style="margin-left: 25px;">Include the following statement: "I swear under penalty of perjury that the information in my notice is accurate and I am the copyright owner or I am authorized to act on the copyright owner's behalf";</li>
                <li style="margin-left: 25px;">Provide your contact information including your address, telephone number, and e-mail address (if available);</li>
                <li style="margin-left: 25px;">Provide your physical or electronic signature; and</li>
            </ul>
            <p>Send the written communication to:</p>
            <p><b>For Users residing in the United States:</b><br><br>Grievance Redressal Officer<br>Zomato USA, LLC<br>1551 Eastlake Avenue East, Suite 350<br>Seattle, WA 98102<br>Email address: <a href="mailto:legal@zomato.com">legal@zomato.com</a></p>
            <p><b>For Users residing outside the United States:</b><br><br>Ms. Anshum Singh<br>Grievance Redressal Officer<br>Zomato Media Private Limited<br>139-P, Sector 44, Gurgaon, Haryana, India -122002<br>Email address: <a href="mailto:legal@zomato.com">legal@zomato.com</a></p>
            <p>You may be subject to liability if you knowingly make any misrepresentations on a take-down notice.</p>
        </div>
        <br>


    </article>

</div>


<!--FOOTER START-->
<footer>
    <div class="container">

        <div class="footerlinks">\
            <span class="bigicon icon-speedometer "></span>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="page4.php">About</a></li>
                <li><a href="page5.php">Terms & Conditions</a></li>
                <li><a href="page6.php">Contact</a></li>
            </ul>
        </div>

        <div class="footersocial wow fadeInUp" data-wow-duration="3s">
            <h4>we are social</h4>
            <ul>
                <li><a href="http://facebook.com"><span class="icon-social-facebook"></span></a></li>
                <li><a href="http://twitter.com"><span class="icon-social-twitter"></span></a></li>
                <li><a href="http://youtube.com"><span class="icon-social-youtube"></span></a></li>
            </ul>
        </div>
    </div>
</footer><!-- FOOTER END -->
<!--<script type="text/javascript">
  function hoverEvent(index){
      switch (index) {
          case 1:
              jQuery('#img2,#img3,#img4,#img5').hide();
              jQuery("#img1").show();
              break;
          case 2:
              jQuery('#img1,#img3,#img4,#img5').hide();
              jQuery("#img2").show();
              break;
          case 3:
              jQuery('#img1,#img2,#img4,#img5').hide();
              jQuery("#img3").show();
              break;
          case 4:
              jQuery('#img1,#img2,#img3,#img5').hide();
              jQuery("#img4").show();
              break;
          default:
              jQuery('#img2,#img3,#img4,#img5').hide();
              jQuery("#img1").show();
      }
  }
-->
<input type="hidden" name="shopId" id="shopId" value=""/>
<div class="modal fade" id="dialogGetCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
<div class="modal fade" id="dialogGetLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
<div class="modal fade" id="dialogGetSingup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
<div class="modal fade" id="dialogGetCodeMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
<input type="hidden" id="clickEventNameLogin" name="clickEventNameLogin" val=""/>
<input type="hidden" id="clickEventNameSignup" name="clickEventNameSignup" val=""/>
</body>


</html>
