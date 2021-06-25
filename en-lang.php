<?php


// profil.php

//My informations
define('TXT_ACCUEIL_PROFIL', 'My profile');
define('TXT_INFORMATION', 'My Informations');
define('TXT_PRENOM', 'Firstname');
define('TXT_NOM', 'Lastname');
define('TXT_EMAIL', 'Email');
define('TXT_ADRESSE', 'Adress');
define('TXT_TEL', 'Phone number');
define('TXT_IDENTITE', 'You are');
define('TXT_FORMATION', 'Formation');
define('TXT_MODIFP', 'Modify profile');

//password
define('TXT_MDP', 'My password');
define('TXT_ANCIENMDP', 'Your current password');
define('TXT_NOUVEAUMDP', 'New password');
define('TXT_CONFIRMERMDP', 'Confirm your new password');
define('TXT_MODIFMDP', 'Modify the password');

//message password
define('SUCCES_MDP', 'Your password has been modified');
define('ERREUR_MDP', 'Error');
define('MDP_DIFFERENT', "Passwords are not identical");
define('MDP_INCORRECT', 'Incorrect Password');
define('MDP_INCOMPLET', 'Please complete all fields');


//My appointments
define('TXT_RDV', 'My Appointments');
define('TXT_NUMERO', 'Equipment No');
define('TXT_TYPE', 'Equipment type');
define('TXT_DATE', 'Date');
define('TXT_HEURE', 'Hour');

//buttons
define('TXT_RETOUR', 'Return');
define('TXT_MODIFIER', 'Modify');
define('TXT_ENVOYER', 'Send');
define('TXT_SUPPRIMER', 'Delete');
define('TXT_MENU', 'Menu');

//suppression RDV
define('TXT_CONFIRMATION_SUPPRESSION_RDV', 'Would you like to cancel the appointment?');
define('TXT_INFO_SUPPRESSION', "Do you confirm the cancellation of your appointment?");
define('TXT_ALERTE_SUCCES_SUPPRESSION', 'Your appointment has been cancelled');

//Modifiez RDV
define('TXT_CONFIRMATION_MODIFICATION', 'Would you like to change your appointment?');
define('TXT_CONFIRMER_MODIFIER', 'Confirm appointment change');
define('TXT_ALERTE_SUCCES_MODIFIER', 'Your slot has been modified');

//my reservations

define('TXT_ACCUEIL_RESERVATION', 'My reservations');
define('TXT_RETRAIT', 'Date of withdrawal');
define('TXT_DATER', 'Return date');
define('TXT_PROLONGER', 'Extend');
define('TXT_PROBLEME', 'Report a probleme');
define('TXT_RESTITUER', 'Return equipment');
define('TXT_DATERA', 'Current return date');
define('TXT_DATERS', 'New desired return date');
define('TXT_CONFIRMER', 'Confirm');
define('TXT_ANNULER', 'Cancel');
define('TXT_ALERTE_SUCCES_PROLONGATION', 'Your extension request has been sent');
define('TXT_OK', 'OK');
define('TXT_ERREUR_DATE', 'Please enter a valid return date');
define('TXT_TITRE', 'Title');
define('TXT_DESCRIPTION', 'Description');
define('TXT_ALERTE_SUCCES_DEMANDE', 'Your request has been sent');
define('TXT_LUNDI', 'Monday');
define('TXT_MARDI', 'Tuesday');
define('TXT_MERCREDI', 'Wednesday');
define('TXT_JEUDI', 'Thursday');
define('TXT_VENDREDI', 'Friday');
define('TXT_CONFIRMATION_RDV', 'Do you want to confirm the appointment ?');
define('TXT_BUREAU', 'Office');
define('TXT_CONFIRMER_RDV', 'Confirm appointment');
define('TXT_ALERTE_SUCCES_CRENEAU', 'Your time slot has been reserved');


// reservation_portable.php
define('TXT_ACCUEIL_NOUVELLER', 'New reservation');
define('TXT_DEMANDE_CONCERNE', 'Your demand concerns');
define('TXT_CHOIX_RETOUR', 'Choose the return date');
define('TXT_CHOIX_MATERIEL', 'Type of equipment borrowed');
define('TXT_CHOIX_DATE', 'Loan date');
define('TXT_JOUR', 'Day');
define('TXT_CRENEAU', 'Time slot');
define('TXT_INFO_RESERVATION', 'Please note that you must provide the requested documents (photocopy of front and back identity document and / or photocopy of the student card). Without these , no material can be loaned to you.');
define('MDP_COURT', 'Password is too short!');
define('MDP_CHAMPS', 'Please complete all fields!');
define('TXT_CHOIX_CRENEAU','Please select a time slot to gather the equipment');
define('TXT_ERREUR_JOUR', 'Please, choose an other date than Saturday or Sunday');


//Page_inscription.php
define('TXT_ACCUEIL_INSCRIPTION', 'Sign in');
define('TXT_MDP_INS', 'Password');
define('TXT_CONFIRMER_MDP_INS', 'Confirm your password');
define('TXT_CONFIDENTIEL', 'I accept the privacy policy');
define('TXT_CGU', 'I have read and I accept the general conditions of use');
define('TXT_REINITIALISER', 'RESET');
define('ALERTE_MDP', 'The two passwords are not identical!');
define('ALERTE_SUCCES_COMPTE', 'The account has been successfully created').
define('VALIDER', 'Confirm');
define('ALERTE_ERREUR_MDP', 'The passwords do not match. Please try again !');
define('ERREUR_MDP_COURT', 'The password is too short !');
define('TXT_MAIL_INCORRECT', 'Please enter your universitary mail');
define('TXT_RES_URG',"NB : In case of an emergency, please take the first slot available and contact the secretariat");


//FAQ.php

define('TXT_ACCUEIL_FAQ', 'Frequently asked questions');
define('TXT_QUESTION1', 'How does the tool work?');
define('TXT_REPONSE1_A', "This tool is used to facilitate the loan of equipment at the Université Toulouse 1 Capitole. Indeed, if you wish to borrow a computer, a tablet, a 4G key or any other equipment from UT1 , you just have to go to the menu under");
define('TXT_REPONSE1_B', 'New Reservation');
define('TXT_REPONSE1_C', "From there you will be guided to choose the equipment you want and then make an appointment that suits you. All you have to do is show up at the appointment with your ID. The equipment will be given to you after a photocopy of the latter. The equipment will have to be returned either on a date you have chosen or automatically at the end of the school year. In all cases, a warning will be sent to you in order to make this procedure run smoothly.");
define('TXT_QUESTION2', 'Can I borrow more than one piece of equipment?');
define('TXT_REPONSE2', "Yes, it is possible! In this case, you will just have to fill in several loan requests. Each time you will choose the equipment, the desired return date and the time of the appointment. The procedure is the same for all loans.");
define('TXT_QUESTION3', 'May I extend my loan?');
define('TXT_REPONSE3_A', 'Yes, it is possible! In this case, all you have to do is click on the button');
define('TXT_REPONSE3_B', 'Extend');
define('TXT_REPONSE3_C', "on the loan whose contract you wish to extend.");
define('TXT_QUESTION4', 'What should I do if my equipment malfunctions?');
define('TXT_REPONSE4_A', 'When the equipment no longer works, or has a malfunction, you must');
define('TXT_REPONSE4_B', 'report a problem');
define('TXT_REPONSE4_C', "in My Reservations. In this case, a person will take care of your question. Indeed, if the question can be solved remotely, the person will accompany you in the resolution until completion. If not, the person will invite you to make an appointment with the secretary to give you a new copy of the material.");
define('TXT_QUESTION5', "Review the data privacy notice");
define('TXT_REPONSE5_A', "Please find the Privacy Notice");
define('TXT_REPONSE5_B', 'here');
define('TXT_QUESTION6', "Review the terms and conditions of use of the data");
define('TXT_REPONSE6', "Please find the General Terms of Use");
define('TXT_QUESTION7', 'Do you have another question?');
define('TXT_REPONSE7', "If you have any other questions or would like more information on any point, we are at your disposal for any request. You can contact us via the page My Reservations that you will find");

//CGU.php

define('TXT_ACCUEIL_CGU', 'Terms and conditions of use');
define('CGU', 'I.	Definitions');
define('CGU1', 'Customer');
define('CGU2', 'Any professional or capable natural person within the meaning of Articles 1123 et seq. of the Civil Code, or legal entity, who visits the Site which is the subject of these general conditions.');
define('CGU3', 'Content');
define('CGU4', "All the elements constituting the information present on the Site, in particular texts - images - videos.");
define('CGU5', 'Customer information');
define('CGU6', ": Hereinafter referred to as 'Information (s)' which correspond to all personal data that may be held by the application for the management of your account, customer relationship management and for analysis and statistical purposes.");
define('CGU7', 'User');
define('CGU8', 'Internet user connecting, using the above-mentioned site.');
define('CGU9', 'Personal informations');
define('CGU10', "'The information that allows, in any form whatsoever, directly or not, the identification of the natural persons to whom it applies' (Article 4 of Law No. 78-17 of 6 January 1978).");
define('CGU11', "the terms « personal data », «data subject», « sub-processor » and « sensitive data »have the meaning defined by the General Data Protection Regulation (GDPR: No. 2016-679).  </br></br>
<h3> 1.  Presentation of the website. . </h3>
Under Article 6 of Law No. 2004-575 of June 21, 2004 for confidence in the digital economy, it is specified to users of the application the identity of the various stakeholders in its implementation and monitoring: </br>
  <ul>
    <li><b> Owner</b> : UFR Informatique d’UT1 – 2 rue du Doyen-Gabriel-Marty 31042 Toulouse </li>
    <li><b> Responsible for publication  </b> : UFR Informatique d’UT1 – 2 rue du Doyen-Gabriel-Marty 31042 Toulouse. The person responsible for publication is a natural person or a legal entity.  </li>
    <li><b> Webmaster </b> : UFR Informatique d’UT1 – 2 rue du Doyen-Gabriel-Marty 31042 Toulouse </li>
    <li><b> Host </b> : 2 rue du Doyen-Gabriel-Marty 31042 Toulouse 05 61 63 36 36 </li>
    <li><b> Data Protection Officer </b> : ??? </li>
  </ul>
<h3> 2.General conditions of use of the site and the services offered.</h3>
  <p align='justify'>The Site constitutes an intellectual work protected by the provisions of the Intellectual Property Code and applicable International Regulations. The Customer may not in any way reuse, transfer or exploit for his own account all or part of the elements or works of the Site.
  The use of the application implies the full and complete acceptance of the GTU, general conditions of use, described below. These conditions of use may be modified or completed at any time, so users of the site are invited to consult them regularly.
  This website is normally accessible to users at all times. An interruption for technical maintenance may however be decided, after prior communication to users the dates and times of the intervention.
 </p></br></br>
<h3> 3. Description of services provided. </h3>
  <p align='justify'>The purpose of the site is to provide a service to manage the loans of equipment made available for from the University Toulouse 1, Capitole, to its students and staff. The application strives to be as accurate as possible. However, it cannot be held responsible for any omissions, inaccuracies or shortcomings in the updating, whether they are its own doing or that of third party partners who provide it with this information.
  All the information indicated on the site is given as an indication and non-exhaustive, and is likely to evolve. They are therefore given subject to modifications having been made since they were put online.
</p></br></br>
<h3> 4. Contractual limitations on technical data </h3>
  <p align='justify'>The website uses JavaScript technology. The website cannot be held responsible for any material damage related to the use of the site. In addition, the user of the site undertakes to access the site using recent equipment, free of viruses and with a browser of the latest generation updated The hosting is done at a provider on the territory of the European Union in accordance with the provisions of the General Regulation on Data Protection (RGPD: No. 2016-679)  </br>
  The objective is to provide a service that ensures the best rate of accessibility. The host ensures the continuity of its service 24 Hours on 24, every day of the year. However, it reserves the right to interrupt the hosting service for the shortest possible period of time, in particular for maintenance purposes, to improve its infrastructure, in the event of a failure of its infrastructure or if the Services generate traffic deemed abnormal.
  The site as well as its host cannot be held responsible in case of malfunction of the Internet network, telephone lines or computer and telephony equipment, linked in particular to network congestion preventing access to the server. </p></br></br>
<h3> 5. Intellectual property and counterfeiting. </h3>
  <p align='justify'>The Toulouse 1 Capitole University is the owner of the intellectual property rights and holds the rights of use on all the elements accessible on the website, including texts, images, graphics, logos, videos, icons and sounds. Any reproduction, representation, modification, publication, adaptation of all or part of the elements of the site, whatever the means or the process used, is prohibited.
  Any unauthorized exploitation of the site or of any of the elements it contains will be considered as constituting an infringement and prosecuted in accordance with the provisions of articles L.335-2 and following of the Intellectual Property Code.  </p></br></br>
  <h3> 6. Limitations of Liability. </h3></br>
  <p align='justify'>The UFR Informatique and the DSI of the University UT1 act as the publisher of the site and are responsible for the quality and veracity of the Content it publishes.
  The site, its manager and its host cannot be held responsible for direct and indirect damage caused to the user's equipment when accessing the site, and resulting either from the use of equipment that does not meet the specifications indicated in point 4, or from the appearance of a bug or an incompatibility. The latter cannot also be held responsible for indirect damages (such as loss of market or loss of opportunity) resulting from the use of the site.
  Interactive spaces (possibility of asking questions in the contact space, or taking contact by form) are available to users. The persons in charge reserve the right to remove, without prior notice, any content deposited in this space which would contravene the legislation applicable in France, in particular the provisions relating to data protection. If necessary, it also reserves the possibility of calling into question the civil and/or criminal liability of the user, particularly in the case of messages of a racist, insulting, defamatory or pornographic nature, whatever the medium used (text, photographs ...). </p></br>
<h3> 7. Management of personal data. </h3> </br>
  <p align='justify'> The Customer is informed of the regulations concerning marketing communication, the law of June 21, 2014 for confidence in the Digital Economy, the Data Protection Act of August 06, 2004 as well as the General Regulation on Data Protection (RGPD: No. 2016-679). </br>
    <h4>7.1 Persons responsible for the collection of personal data</h4>
      <p align='justify'>For the Personal Data collected in the context of the creation of the User's personal account and his navigation on the Site, the person responsible for the processing of Personal Data is: XXX. The site is represented by the UFR of the University Toulouse 1 Capitole, its legal representative.
      As the person responsible for processing the data it collects, it undertakes to respect the legal provisions in force. In particular, it is the Client's responsibility to establish the purposes of its data processing, to provide its prospects and clients, from the time their consent is collected, with complete information on the processing of their personal data and to maintain a register of the processing in accordance with the reality.
      Whenever the application processes Personal Data, UT1 takes all reasonable steps to ensure the accuracy and relevance of the Personal Data to the purposes for which it processes it.</p>.
    <h4>7.2 Purpose of the data collected</h4>
      <p align='justify'>The site is likely to process all or part of the data:
        <ul>
          <li><b>To enable browsing on the Site and the management and traceability of the services ordered by the user</b>: connection and use data of the Site, history of borrowing, etc.</li>
          <li><b>To prevent and fight against computer fraud (spamming, hacking...)</b>: computer equipment used for browsing, IP address, password (hashed), login</li>
          <li><b>To improve navigation on the Site</b>: connection and usage data</li>
          <li><b>For possible communications outside the tool</b>: email address</li>
          <li><b>For conducting communication campaigns</b>: phone number, email address</li>
        </ul>
      Indeed, the application does not market your personal data, which is therefore only used by necessity or for statistical and analytical purposes.</p>
    <h4>7.3 Right of access, rectification and opposition</h4>
    In accordance with current European regulations, users of have the following rights:
    <ul>
      <li>Right of access (Article 15 RGPD) and rectification (Article 16 RGPD), update, completeness of Users' data right of blocking or deletion of Users' personal data (Article 17 RGPD), when they are inaccurate, incomplete, equivocal, outdated, or whose collection, use, communication or storage is prohibited</li>
      <li>Right to withdraw consent at any time (Article 13-2c GDPR)</li>
      <li>Right to limit the processing of Users' data (Article 18 GDPR)</li>
      <li>Right to object to the processing of Users' data (Article 21 RGPD)</li>
      <li>Right to the portability of data provided by Users, where such data are subject to automated processing based on their consent or on a contract (Article 20 RGPD)</li>
      <li>Right to define the fate of Users' data after their death and to choose to whom the tool should communicate (or not) their data to a third party they have previously designated.</li>
    </ul>
  If the User wishes to know how the application uses their Personal Data, ask to rectify them or object to their processing, the User can contact the person responsible for the tool in writing at the following address:
  Université Toulouse 1 Capitole</br>
  2 rue du Doyen-Gabriel-Marty</br>
  31042 Toulouse</br>
  France.</br>
  <p align='justify'>In this case, the User must indicate the Personal Data he or she would like the site to correct, update or delete, identifying himself or herself precisely with a copy of an identity document (identity card or passport). Requests for the deletion of Personal Data will be subject to the obligations imposed by law, in particular as regards the conservation or archiving of documents. Finally, Users may file a complaint with the supervisory authorities, and in particular with the <a href='https://www.cnil.fr/fr/plaintes'> CNIL </a></p>
<h4>7.4 Non-disclosure of personal data</h4>
  <p align='justify'>The application refrains from processing, hosting or transferring the Information collected on its Customers to a country located outside the European Union or recognized as 'non-adequate' by the European Commission without informing the customer in advance. However, it remains free to choose its technical and commercial subcontractors provided that they present sufficient guarantees with regard to the requirements of the General Data Protection Regulation (RGPD: n° 2016-679).
  The Site also undertakes to take all necessary precautions to preserve the security of the Information and in particular that it is not communicated to unauthorized persons. However, if an incident impacting the integrity or confidentiality of the Customer's Information is brought to the attention of the person in charge of the tool, the latter must inform the Customer as soon as possible and communicate the corrective measures taken.
  The User's Personal Data may be processed by subsidiaries of UT1, namely the various RFUs, and subcontractors (service providers) if any, exclusively in order to achieve the purposes of this policy.</br></br>
<h3>8. Incident Notification</h3>
  <p align='justify'>No matter how hard we try, no method of transmission over the Internet and no method of electronic storage is completely secure. As a result, we cannot guarantee absolute security. If we become aware of a security breach, we will notify affected users so that they can take appropriate action. Our incident notification procedures take into account our legal obligations, whether at national or European level. We are committed to fully informing our customers of all matters relating to the security of their account and to providing them with all necessary information to help them meet their own regulatory reporting obligations.
  No personal information of the user of the site is published without the user's knowledge, exchanged, transferred, assigned or sold on any medium to third parties.
  To ensure the security and confidentiality of Personal Information, UT1 uses networks protected by standard features such as firewalls, pseudonymization, encryption and passwords.
  When processing Personal Data, UT1 takes all reasonable steps to protect it from loss, misuse, unauthorized access, disclosure, alteration or destruction.</p></br>
  <h3>9. Hypertext links 'cookies' and internet tags ('tags')</h3>
  Unless you decide to disable cookies, you agree that the site can use them. You can deactivate these cookies at any time and free of charge from the deactivation options offered to you and recalled below, knowing that this may reduce or prevent accessibility to all or part of the Services offered by the site.
  <h4>9.1 'COOKIES'</h4>
    <p align='justify'>A 'cookie' is a small information file sent to the User's browser and stored within the User's terminal (e.g. computer, smartphone), (hereinafter 'Cookies'). This file includes information such as the User's domain name, the User's Internet service provider, the User's operating system, and the date and time of access.
    Cookies will not damage the User's terminal in any way. This site is likely to process the User's information concerning his or her visit to the Site, such as the pages consulted and the searches performed. This information allows the person in charge of the tool to improve the content of the Site and the User's navigation.
    Cookies facilitate navigation and/or the provision of services offered by the Site, the User can configure his browser to allow him to decide whether or not to accept them so that cookies are stored in the terminal or, on the contrary, that they are rejected, either systematically or according to their issuer. The User may also configure his or her browser software so that acceptance or rejection of Cookies is proposed from time to time, before a Cookie is likely to be recorded in his or her terminal. In this case, it is possible that not all of the functionalities of the User's browser software will be available.
    If the User refuses the recording of Cookies in his terminal or his browser, or if the User deletes those recorded there, the User is informed that his navigation and his experience on the Site may be limited. This could also be the case when the Site or one of its providers cannot recognize, for technical compatibility purposes, the type of browser used by the terminal, the language and display settings or the country from which the terminal seems to be connected to the Internet.
    Where applicable, UT1 declines all responsibility for the consequences related to the degraded functioning of the Site and any services offered by the site, resulting from (i) the refusal of Cookies by the User (ii) the impossibility for the site to record or consult the Cookies necessary for their functioning due to the User's choice. For the management of Cookies and the User's choices, the configuration of each browser is different. It is described in the browser's help menu, which will allow the User to know how to modify his/her wishes regarding Cookies.
    At any time, the User can choose to express and change his or her cookie preferences. In addition, the Application and UT1 may use the services of external service providers to help collect and process the information described in this section.</p></br>
<h3>10. Governing Law and Jurisdiction.</h3>
  <p align='justify'>Any dispute in connection with the use of the site is subject to French law. Except in cases where the law does not allow it, exclusive jurisdiction is given to the competent courts of Toulouse.</p>");

//AC.php

define('AC', "  <center><h1>Privacy notice on the protection of personal data</h1></center>
<b>Last updated: May 2021</b><br>
  <h2>Preamble</h2>
  <p align='justify'>Our company is concerned about the protection and confidentiality of personal data and is committed to ensuring the highest level of protection for your personal data in compliance with the current regulations on the protection of personal data, applicable in Europe (RGPD) and in France.
  The purpose of this privacy policy is to inform you of the practical measures and commitments taken by our company to ensure that your personal data, and that of your customers, is respected and protected.</p>
  <ul>
    <li>'We' and 'Us' refer to the Data Processor inserted on the capitolehelpdes.ut-capitole.fr website, and the Services we provide.</li>
    <li>'You' and 'Your/Yours' refer to all users of our services or visitors to the tool.</li>
    <li>'Customer' defines our customers.</li>
  </ul>
  <h2>1 - Identity of the data controller</h2>
    <p align='justify'>In accordance with the legal framework for the management of data processing applicable since May 25, 2018 in application of the European Regulation 2016/679 of April 27, 2016 known as the 'General Data Protection Regulation' (GDPR), the University of Toulouse 1, UT1 Capitole is the Data Processor (D.P.) in the sense given to this term by said Regulation.
    Our Data Protection Officer (DPO) is XXX. He can be contacted by email at XXX@ut-capitole.fr or by post at the owner's address:
    Toulouse 1 Capitole University,<br>
    2 Rue Gabriel Marty<br>
    31042 Toulouse <br>
    France <br></p>
  <h2>2 - Personal data we collect</h2>
    <p align='justify'>When you register for one of our services, you may provide us with: <br>
    - Your personal details such as your address, email address, student number, date of birth, telephone number and identification (ID, passport, student card, or any valid piece of identification that clearly identifies you); <br>
    When providing the personal data of others, you must be sure that they consent and that you are authorized to do so. You should also ensure, where appropriate, that they understand how we may use their personal data.
  <h2>3 - Use of your personal data</h2>
  We use your personal data in various ways described below.
  <ol>
    <li>In order to provide you with the products and services you request.<br>
    We need to process your personal data in order to manage your account or communication and to assist you with any help you may request in connection with the tool or services we provide.</li>
    <li>To manage and improve our products, services and daily operations.<br>
    We use personal data to manage and improve our services, and website. We monitor how our services are used in order to protect your personal data, detect and prevent fraud, other crimes and misuse of our services. This is to ensure that you use our services safely.
    We may use personal data for market research, internal research and development, and to deploy and improve our range of products and services, our shops, our IT systems, our security, our know-how and the way we communicate with you.</li>
    <li>In order to contact and interact with you. <br>
    We are always concerned with providing you with the best possible service as a customer and user. Thus, if you contact us, for example by email, postal mail, telephone or through social networks, we may use your personal data for any clarification or assistance you request.
    We may invite you to take part in surveys, questionnaires and other customer market research carried out by our Company and other organisations on our behalf. We do not sell your personal data to third parties.</li>
  </ol>
<h2> 4 - Legal basis for processing personal data</h2>
We will only collect and use your personal data if at least one of the following conditions applies:<br>
<ul>
  <li>We have your permission; Example: registration.</li>
  → When you make a registration to the tool, you authorize us to process your personal data.<br>
  <li>This appears necessary in order to comply with a legal obligation; Example: sharing personal data with supervisory authorities.</li>
  <li>It is necessary to protect your vital interests or those of others; Example: in case of emergency.</li>
  <li>It is in the public interest where we hold official authorization; Example: security operations.</li>
  -> We may use personal data to respond to and manage security operations, accidents or similar incidents, including for medical and insurance purposes.
  <li>This is within our legitimate interests or those of a third party, and these are not overridden by your interests or rights. Example: to personalize your experience.</li>
  -> We may use your personal data to better understand your interests, so that we can try to predict which products, services and information would be of most interest to you. This allows us to refine our communications to be as relevant and interesting to you as possible.
</ul>
<h2>5 - Sharing personal data with service providers</h2>
<p align='justify'>In order to provide you with the products or services you request, we may need to share your personal data with providers of the terms of your communication, including tool managers, problem-solving contractors, university management, ...
We also work with carefully selected service providers who perform certain functions on our behalf. For example, companies take care of IT services, data storage and compilation.
We may also need to share personal data in order to establish, exercise or defend our legal rights; this includes passing on personal data to third parties to prevent fraud. When we share personal data with other organizations, we require them to keep the data secure and not to use it for their own commercial purposes. In particular, these organizations are required to limit the time they retain your data to the time necessary to perform the service, or to comply with their legal or regulatory obligations, and to ensure that they have a procedure for destroying personal data in accordance with the RGPD, once the retention period has expired.
We only share personal data that is strictly necessary to enable our service providers to provide their services to you/us.</p>.
<h2>6 - Sharing personal data with supervisory authorities</h2>
<p align='justify'>To enable you to communicate, disclosure and processing of your personal data may be required in the event of fraud, improper or inadequate communication.
We may share strictly necessary personal data with other public bodies if required by law or if we are legally authorized or required to do so.
<h2>7 - Protection of your personal data</h2>
We know the importance of protecting and managing your personal data. We take appropriate security measures to help protect your personal data from accidental loss and unauthorized access, use, alteration and disclosure.
Thus:
<ul>
<li>We use encrypted computer means to store access to your data;</li>
<li>We do not store your banking data on computer databases;</li>
<li>We do not store sensitive data going against the RGPD;</li>
<li>We insert confidentiality clauses in our agreements with our suppliers or service providers, allowing us to identify the information communicated and granting us a right of unannounced control of compliance with protection procedures;</li>
<li>We regularly update our processing records.</li>
<li>With regard to our staff, we regularly raise awareness (training, publications meetings) of our entire team as to the importance of the protection and responsible management of your personal data. We have inserted confidentiality clauses in our employment contracts, and employees have made commitments in this regard. We remind you that the security of your data also depends on you.</li>
</ul>
<h2>8 - Retention of personal data</h2>
<p align='justify'>We will retain your personal data for as long as is necessary for the purposes set out in this notice and/or in order to comply with legal and regulatory requirements, i.e. in cycles of 3 years renewable.
When you make an inquiry, we will retain your data for 3 years.
When you communicate with someone through our services, we keep your data for a period of 3 years from the time your request is sent. After this period, we will delete the data from the communications. If your data is needed after this period for analytical, historical or other legitimate business purposes, we will take appropriate steps to anonymize it.</p>
<h2>9 - Accessing and updating your personal data and complaints</h2>
<p align='justify'>You have the right to request a copy of the personal data we hold about you. You may write to us to request a copy of other personal data we hold about you.
Please include any details that will help us to identify you and locate your personal data. Access to your data, where we are able to offer it, is free of charge. We want to ensure that the personal data we hold about you is accurate and up-to-date. If any of the information we hold is not correct, please inform the school of your course.
You may also request to rectify or delete your personal data, object to its processing and, where technically possible, request that the personal data provided be transferred to another organization. Nevertheless, this opposition will only be taken into account by the platform of the tool, and not by the other organizations that have it, such as the university in particular. <br><br>
We will update or delete your data, unless we are required to retain it for legitimate business or legal purposes.
You may also contact us if you have a complaint about how we collect, store or use your personal data. We make every effort to resolve complaints, but if you are not satisfied with our response, you may file a complaint with your local data protection authorities: https://www.cnil.fr/fr/plaintes.
Please submit your request or complaint in writing to the Data Protection Officer (DPO) on plain paper (preferably in R.A.R.) indicating:<p>
<ul>    <li>Your first and last name;</li>
<li>Your mailing address;</li>
<li>Your email address;</li>
<li>Your phone number;</li>
<li>The grounds for your complaint;</li>
</ul>
To the address:<br>
Toulouse 1 Capitole University, <br>
2 Rue Gabriel Marty <br>
31042 Toulouse <br>
France <br> <br>
Or by email to XXX@ut-capitole.fr <br> <br>
We would like to emphasize that we need to verify your identity before processing your request or complaint. We may ask you for more information in order to ensure that you are authorized to make such a request or complaint when you contact us on behalf of another person.<br><br>");

//setting.php
define('TXT_ACCUEIL_REGLAGE', 'Settings');
define('CHOIX_LANGUE', 'Choice of language');
define('ENREGISTRER', 'Record');

//menu2.php
define('DECONNEXION', 'Logout');
define('FAQ', 'FAQ');
