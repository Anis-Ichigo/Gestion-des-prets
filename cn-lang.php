<?php

//profil.php
//Mes informations

define('TXT_ACCUEIL_PROFIL', '我的信息');
define('TXT_INFORMATION', '个人信息');
define('TXT_PRENOM', '名');
define('TXT_NOM', '姓');
define('TXT_EMAIL', '电子邮箱');
define('TXT_ADRESSE', '地址');
define('TXT_TEL', '手机号码');
define('TXT_IDENTITE', '您是');
define('TXT_FORMATION', '专业');
define('TXT_MODIFP', '修改个人信息');

//Modifiez info
define('TXT_SUCCES_INFO', '您的个人信息已修改成功。');

//Mot de passe

define('TXT_MDP', '我的密码');
define('TXT_ANCIENMDP', '当前登陆密码');
define('TXT_NOUVEAUMDP', '新密码');
define('TXT_CONFIRMERMDP', '确认新密码');
define('TXT_MODIFMDP', '修改密码');

//Message mot_de_passe

define('SUCCES_MDP', '您的密码已修改成功');
define('ERREUR_MDP', '错误');
define('MDP_DIFFERENT', '密码不一致');
define('MDP_INCORRECT', '密码错误');
define('MDP_INCOMPLET', '请填写所有信息！');

//Mes rendez-Vous

define('TXT_RDV', '我的预约');
define('TXT_NUMERO', '设备号码');
define('TXT_TYPE', '设备类型');
define('TXT_DATE', '日期');
define('TXT_HEURE', '时间');
define('MOTIF', '原因');

//Bouton
define('TXT_RETOUR', '返回');
define('TXT_MODIFIER', '修改');
define('TXT_ENVOYER', '发送');
define('TXT_OK', '确认');
define('TXT_CONFIRMER', '确认');
define('TXT_ANNULER', '取消');
define('TXT_SUPPRIMER', '删除');
define('TXT_MENU', '返回主页');


//suppression RDV
define('TXT_CONFIRMATION_SUPPRESSION_RDV', '是否想要删除预约 ?');
define('TXT_INFO_SUPPRESSION', "是否确认删除预约 ?");
define('TXT_ALERTE_SUCCES_SUPPRESSION', '您的预约已取消。');

//Modifiez RDV
define('TXT_CONFIRMATION_MODIFICATION', '是否想要更改预约 ?');
define('TXT_CONFIRMER_MODIFIER', '确认更改预约');
define('TXT_ALERTE_SUCCES_MODIFIER', '您的预约时间已更改');
//mes_reservations.php

define('TXT_ACCUEIL_RESERVATION', '我的借用');
define('TXT_RETRAIT', '借入时间');
define('TXT_DATER', '归还时间');
define('TXT_PROLONGER', '延期');
define('TXT_PROBLEME', '申报问题');
define('TXT_RESTITUER', '归还设备');
define('TXT_DATERA', '现归还时间');
define('TXT_DATERS', '期望新归还时间');
define('TXT_ALERTE_SUCCES_PROLONGATION', '您的延期申请已提交');
define('TXT_ERREUR_DATE', '请选择有效归还日期');
define('TXT_TITRE', '标题');
define('TXT_DESCRIPTION', '描述');
define('TXT_ALERTE_SUCCES_DEMANDE', '您的申请已提交');
define('TXT_LUNDI', '星期一');
define('TXT_MARDI', '星期二');
define('TXT_MERCREDI', '星期三');
define('TXT_JEUDI', '星期四');
define('TXT_VENDREDI', '星期五');
define('TXT_CONFIRMATION_RDV', '是否确认预约?');
define('TXT_BUREAU', '地点');
define('TXT_CONFIRMER_RDV', '确认预约');
define('TXT_ALERTE_SUCCES_CRENEAU', '恭喜您，已预约成功！');
define('NO_EMPRUNT',"无正在进行的预约");
define('CONTRAT', '查看合同');
define('RDV_RETOUR_EXISTANT', '您已预约归还时间。');

//reservation_portable.php

define('TXT_ACCUEIL_NOUVELLER', '新的申请');
define('TXT_DEMANDE_CONCERNE', '申请设备类型');
define('TXT_CHOIX_RETOUR', '选择归还日期');
define('TXT_CHOIX_MATERIEL', '借用设备类型');
define('TXT_CHOIX_DATE', "借入日期");
define('TXT_JOUR', '工作日');
define('TXT_CRENEAU', '时间');
define('TXT_INFO_RESERVATION', "请注意， 您必须提供所需材料 （身份证件的复印件（正面及背面） 和学生卡的复印件)。 如没有证件，将无法进行借用。");
define('MDP_COURT', '密码太短了！');
define('MDP_CHAMPS', '请填写所有信息！');
define('TXT_CHOIX_CRENEAU','请选择领取时间：');
define('TXT_ERREUR_JOUR', '请选择工作日时间');
define('TXT_BTN_URG', '紧急情况？');
define('TXT_RES_URG',"如有紧急情况，您可以选择最早的可用时间并直接去往 XXX，找负责人Mme BALLABRIGA Lydie。");
define('DATE_RETOUR', "归还时间必须大于借入时间");

//Page_Inscription.php

define('TXT_ACCUEIL_INSCRIPTION', '注册');
define('TXT_MDP_INS', '密码' );
define('TXT_CONFIRMER_MDP_INS', '确认密码');
define('TXT_CONFIDENTIEL', "已读并接受隐私条款");
define('TXT_CGU', "已读并接受用户许可协议");
define('TXT_REINITIALISER', '重置');
define('ALERTE_MDP', '密码不一致 !');
define('ALERTE_SUCCES_COMPTE', '恭喜您，账号已注册成功 !');
define('VALIDER', '确认');
define('ALERTE_ERREUR_MDP', '两次密码不一致，请重新输入。');
define('ERREUR_MDP_COURT', '密码太短了！');
define('TXT_MAIL_INCORRECT', '请输入学校邮箱');
define('PLUS_INFORMATION', "更多信息");
define('MAIL_EXISTE', '此邮箱已注册');
//FAQ.php

define('TXT_ACCUEIL_FAQ', '常见问题');
define('TXT_QUESTION1', '如何使用此工具？');
define('TXT_REPONSE1_A', "该工具是方便在Université Toulouse 1 Capitole的学生及工作人员借用电子产品。如果您想借用 UT1 提供给您的计算机、平板电脑、4G网卡或其他设备，只需点击此链接即可");
define('TXT_REPONSE1_B', '新的申请');
define('TXT_REPONSE1_C', "在申请表单里您可以选择想借用的设备并预约领取时间。 领取时，请带好您的身份证件，用于核对身份信息。归还日期可以由您自定义，也可以是学年末。 以上信息均会在填写申请时提醒您。");
define('TXT_QUESTION2', '我可以借用多个设备吗？');
define('TXT_REPONSE2', "当然可以！您只需填写多个借用申请，在每个申请中选择您所需的设备类型，期望的归还日期并预约领取时间。所有的借用流程都是相同的。");
define('TXT_QUESTION3', '我可以延长借用时间吗？');
define('TXT_REPONSE3_A', '当然可以！如果您希望延长借用时间，只需在<我的借用>里选择您想进行延期归还的设备，点击按钮');
define('TXT_REPONSE3_B', '更改归还时间');
define('TXT_REPONSE3_C', "，选择新的归还日期，便可完成延期。");
define('TXT_QUESTION4', '我的设备出问题了怎么办？');
define('TXT_REPONSE4_A', '当设备不再运转，或者有任何功能上的问题，您都可以在<我的借用>里点击按钮');
define('TXT_REPONSE4_B', '申报问题');
define('TXT_REPONSE4_C', "。发送后，会有工作人员处理您的问题。如果问题可以通过远程解决，我们的工作人员会联系您并协助您解决。其他情况下，工作人员会联系您并和您预约时间，领取新的设备。 ");
define('TXT_QUESTION5', "想重新阅读数据隐私声明？");
define('TXT_REPONSE5_A', "点击链接可以找到我们的隐私声明");
define('TXT_REPONSE5_B', '这里');
define('TXT_QUESTION6', "想重新阅读用户许可协议？");
define('TXT_REPONSE6', "点击链接可以找到我们的用户许可协议");
define('TXT_QUESTION7', '您有其他问题？');
define('TXT_REPONSE7', "如果您有其他任何问题，或者想了解更多细节，我们随时为您服务。您可以通过<我的借用>页面和我们进行联系");

//CGU.php

define('TXT_ACCUEIL_CGU', '用户许可协议');
define('CGU', '一、定义');
define('CGU1', '客户');
define('CGU2', ': 民法典第 1123 条及以下条款含义内的任何专业或有能力的自然人，或根据这些一般条件访问网站的法人。');
define('CGU3', '内容');
define('CGU4', ": 构成网站上信息的所有元素，特别是文本、图像、视频。");
define('CGU5', '客户信息');
define('CGU6', ": 以下简称“信息”，对应于应用程序可能持有的所有个人数据，用于管理您的账户、管理客户关系以及用于分析和统计目的。");
define('CGU7', '用户');
define('CGU8', ': 使用上述站点连接的 Internet 用户。');
define('CGU9', '个人信息');
define('CGU10', ": “允许以任何形式直接或间接识别其适用的自然人的信息”（1978年1月6日第 78-17 号法律第 4 条）。");
define('CGU11', "术语“个人数据”、“数据主体”、“分包商”和“敏感数据”具有《通用数据保护条例》（RGPD：n°2016-679）定义的含义。</br></br>
<h3> 1. 网站介绍 </h3>
 根据 2004 年 6 月 21 日关于对数字经济的信心的第 2004-575 号法律第 6 条，应用程序的用户被告知在其实施和后续行动中各利益相关者的身份：</br>
  <ul>
    <li><b> 所有者 </b> : UFR Informatique d’UT1 – 2 rue du Doyen-Gabriel-Marty 31042 Toulouse </li>
    <li><b> 出版负责人 </b> : UFR Informatique d’UT1 – 2 rue du Doyen-Gabriel-Marty 31042 Toulouse. Le responsable publication est une personne physique ou une personne morale.  </li>
    <li><b> 网站管理员 </b> : UFR Informatique d’UT1 – 2 rue du Doyen-Gabriel-Marty 31042 Toulouse </li>
    <li><b> 托管服务 </b> : 2 rue du Doyen-Gabriel-Marty 31042 Toulouse 05 61 63 36 36 </li>
    <li><b> Délégué à la protection des données </b> : ??? </li>
  </ul>
<h3> 2. 使用本网站和提供的服务的一般条件 </h3>
  <p align='justify'> 本网站构成受知识产权法典和适用国际法规保护的智力作品。客户不得以任何方式为自己的帐户重用、转让或利用本网站的全部或部分元素或作品。使用应用程序意味着完全接受条款和条件、一般使用条件，如下所述。这些使用条件可能会随时修改或补充，因此请网站用户定期咨询。本网站通常可供用户随时访问。然而，在事先与用户沟通干预的日期和时间之后，可以决定因技术维护而中断。
  </p></br></br>
<h3> 3. 所提供服务的描述 </h3>
  <p align='justify'> 该网站的目的是为代表图卢兹 1 大学 Capitole 为其学生和教职员工提供的设备提供贷款管理服务。该应用程序力求尽可能精确。但是，它不对更新中的遗漏、不准确和缺陷负责，无论是由它还是由向其提供此信息的第三方合作伙伴造成的。网站上显示的所有信息仅供参考，并非详尽无遗，可能会发生变化。因此，它们会在自上线后进行修改后提供。
  </p></br></br>
<h3> 4. 技术数据的合同限制 </h3>
  <p align='justify'> 该网站使用 JavaScript 技术。对于与使用本网站相关的物质损失，本网站不承担任何责任。此外，本网站的用户承诺使用最新设备访问本网站，不包含病毒，并使用最新的最新一代浏览器。托管由欧盟境内的服务提供商根据通用数据保护条例（RGPD：n°2016-679）的规定。</br>
  目标是提供确保最佳访问率的服务。主机确保其服务的连续性，一天 24 小时，一年中的每一天。尽管如此，它保留在尽可能短的时间内中断托管服务的权利，特别是为了维护、改进其基础设施、其基础设施故障或如果服务和服务产生被视为不自然的流量。如果 Internet 网络、电话线或计算机和电话设备出现故障，特别是与阻止访问服务器的网络拥塞有关，则本网站及其主机不承担任何责任。 
  </p></br></br>
<h3> 5. 知识产权和假冒产品 </h3>
  <p align='justify'>Université Toulouse 1 Capitole 拥有知识产权并有权使用网站上可访问的所有元素，特别是文本、图像、图形、徽标、视频、图标和声音。禁止对本网站的全部或部分元素进行任何复制、表示、修改、出版、改编，无论使用何种方式或过程。未经授权使用本网站或其包含的任何元素将被视为构成侵权，并根据知识产权法典 L.335-2 和以下条款的规定进行起诉。</p></br></br>
<h3> 6. 责任限制 </h3></br>
  <p align='justify'> UFR Informatique 和 Université Toulouse 1 Capitole的 DSI 作为网站的发布者，对其发布的内容的质量和真实性负责。
  对于在访问本网站时，由于使用不符合规格的设备而对用户设备造成的直接或间接损害，本网站、其管理者和其主机不承担任何责任。
  第 4 点中指出，无论是出现错误或不兼容。后者也不对因使用本网站而造成的间接损害（例如市场损失或机会损失）负责。用户可以使用交互空间（可以在联系空间中提问，或通过表格进行联系）。管理人员保留在不事先通知的情况下删除此空间中发布的任何违反法国适用法律的内容的权利，尤其是与数据保护相关的规定。在适用的情况下，它还保留对用户的民事和/或刑事责任提出质疑的权利，特别是在种族主义、辱骂、诽谤或色情信息的情况下，无论使用何种媒体（文本、摄影……）。
  </p></br>
<h3> 7. 个人资料的管理 </h3> </br>
  <p align='justify'> 客户被告知有关营销传播的规定、2014 年 6 月 21 日关于数字经济信心的法律、2004 年 8 月 6 日的数据保护法以及通用数据保护条例（RGPD: n ° 2016-679）。 </br>
    <h4>7.1 负责个人资料的收集</h4>
      <p align='justify'>对于作为创建用户个人帐户及其在网站上导航的一部分而收集的个人数据，负责处理个人数据的人员是：XXX。该网站由Université Toulouse 1 Capitole的UFR的法定代表人代表。
      作为处理其收集的数据的责任人，它承诺遵守现行的法律规定。特别是，客户有责任确定其数据处理的目的，从收集其同意的时间开始，向其潜在客户和客户提供关于其个人数据处理的全部信息，并根据实际情况保持处理的登记。      每当应用程序处理个人数据时，UT1都会采取一切合理措施，确保个人数据的准确性和与处理目的的相关性。
      </p>
    <h4>7.2 收集数据的目的</h4>
      <p align='justify'>该站点可能会处理全部或部分数据：
        <ul>
          <li><b>为了能够在网站上进行浏览，以及对用户订购的服务进行管理和追踪</b> ：网站的连接和使用数据，借阅历史等</li>
          <li><b>防止和打击计算机欺诈（垃圾邮件、黑客攻击......）</b> : 用于浏览的硬件、IP地址、密码（哈希值）、用户ID</li>
          <li><b>为了改进网站的导航功能</b> ：连接及使用数据</li>
          <li><b>为了在工具之外进行可能的通信</b> ：电子邮箱地址</li>
          <li><b>开展宣传活动</b> ：电话号码、电子邮件地址</li>
        </ul>
        该应用程序不会将您的个人数据商用，因此只在必要时或为统计和分析目的而使用。</p>
    <h4>7.3 访问权、纠正权和反对权</h4>
      根据现行的欧洲法规，网站的用户有以下权利：
        <ul>
          <li>访问权（article 15 RGPD）和纠正权（article 16 RGPD），更新、完整用户数据的权利，阻止或删除用户的个人数据（article 17 du RGPD），当它们不准确、不完整、不明确、过时，或其收集、使用、通信或存储被禁止时</li>
          <li>在任何时候都有权撤销同意的权利 (article 13-2c RGPD)</li>
          <li>限制处理用户数据的权利 (article 18 RGPD)</li>
          <li>反对处理用户数据的权利 (article 21 RGPD)</li>
          <li>当用户提供的数据受到基于其同意或合同的自动处理时，用户有权利携带这些数据 (article 20 RGPD)</li>
          <li>有权确定用户的数据在他们死后的命运，并选择该工具应将他们的数据传达（或不传达）给他们事先指定的第三方</li>
        </ul>
      如果用户希望了解该应用程序如何使用他/她的个人数据，要求纠正这些数据或反对其处理，用户可以通过以下地址书面联系该工具的负责人：</br>
      Université Toulouse 1 Capitole</br>
      2 rue du Doyen-Gabriel-Marty</br>
      31042 Toulouse</br>
      France.</br>
      <p align='justify'>在这种情况下，用户必须指出他或她希望本网站更正、更新或删除的个人资料，并用身份证件（身份证或护照）的复印件准确表明自己的身份。删除个人资料的要求将遵守法律规定的义务，特别是在保存或归档文件方面。最后，用户可以向监督机构，特别是向<a href='https://www.cnil.fr/fr/plaintes'>CNIL </a>提出投诉。</p>
    <h4>7.4 不透露个人数据</h4>
      <p align='justify'>该应用程序在未事先通知客户的情况下，不处理、托管或将收集到的客户信息转移到位于欧盟以外的国家或被欧盟委员会认定为“不适当“的国家。对于所有这些，它仍然可以自由选择其技术和商业分包商，只要他们在Règlement Général sur la Protection des Données (RGPD : n° 2016-679)的要求方面提供足够的保证。
      本网站还承诺采取一切必要的预防措施来维护信息的安全，特别是确保信息不被传递给未经授权的人。然而，如果影响客户信息的完整性或保密性的事件被提请工具负责人注意，后者必须尽快通知客户并通报所采取的纠正措施。
      用户的个人资料可由UT1的子公司，即各UFR，以及分包商（服务供应商）（如有）处理，完全是为了实现本政策的目的。
      </p><br><br>
    <h3>8. 事故通知</h3>
      <p align='justify'>无论我们如何努力，在互联网上的传输方法和电子存储方法都不是完全安全的。因此，我们不能保证绝对安全。如果我们意识到有安全漏洞，我们将通知受影响的用户，以便他们能够采取适当的行动。我们的事件通知程序考虑到了我们的法律义务，无论是在国家层面还是欧洲层面。我们致力于向客户充分告知与其账户安全有关的所有事项，并向他们提供所有必要的信息，帮助他们履行自己的监管报告义务。
      网站用户的任何个人信息都不会在用户不知情的情况下被公布、交换、转移、转让或在任何媒介上出售给第三方。
      为确保个人信息的安全性和保密性，UT1使用由标准功能保护的网络，如防火墙、假名化、加密和密码。
      在处理个人数据时，UT1采取一切合理的步骤来保护其免受损失、滥用、未经授权的访问、披露、更改或破坏。</p></br>
    <h3>9. 超文本链接、\"cookies\"和互联网标签</h3>
      除非您决定停用cookies，否则您接受本网站可以使用它们。您可以在任何时候免费使用向您提供的停用选项停用这些cookies，并在下面回顾，要知道这可能会减少或阻止对网站提供的全部或部分服务的访问。
      <h4>9.1. \"COOKIES\"</h4>
        <p align='justify'>\"cookie\"是一个发送到用户浏览器并存储在用户终端（如电脑、智能手机）内的小型信息文件，（以下简称 \"Cookies\"）。该文件包括诸如用户的域名、用户的互联网服务提供商、用户的操作系统以及访问的日期和时间等信息。
        Cookies不会以任何方式损害用户的终端。本网站可能会处理用户有关其访问网站的信息，例如所查阅的网页和进行的搜索。这些信息使工具管理员能够改进网站的内容和用户的浏览。
        Cookies有助于导航和/或提供网站提供的服务，用户可以配置他的浏览器，让他决定是否接受它们，以便将Cookies储存在终端中，或者相反，系统地或根据其发件人拒绝它们。用户也可以对其浏览软件进行配置，以便在Cookie可能被记录在其终端之前，不时地提出接受或拒绝Cookie。在这种情况下，有可能不是浏览器软件的所有功能都能使用。
        如果用户拒绝在其终端或浏览器中记录Cookies，或者如果用户删除那些记录在那里的Cookies，用户被告知他在本网站上的导航和体验可能受到限制。当本网站或其服务提供商出于技术兼容的目的，无法识别终端所使用的浏览器类型、语言和显示设置或终端似乎是从哪个国家连接到互联网时，也可能出现这种情况。
        在适用的情况下，UT1拒绝对与网站功能下降和网站提供的任何服务有关的后果负责，这些后果是由于（i）用户拒绝使用Cookies（ii）由于用户的选择，网站无法记录或查阅其功能所需的Cookies。对于Cookies的管理和用户的选择，每个浏览器的配置是不同的。它在浏览器的帮助菜单中有所描述，这将使用户知道如何修改他/她关于Cookies的愿望。
         在任何时候，用户都可以选择表达和改变他们的cookie偏好。此外，应用程序和UT1可能使用外部服务提供商的服务，以协助收集和处理本节所述的信息。
    <h3>10. 适用的法律和管辖权</h3>
      <p align='justify'>任何与使用本网站有关的争议均受法国法律管辖。除法律不允许的情况外，专属管辖权属于图卢兹主管法院</p>");

//AC.php

define('AC', "  <center><h1>关于保护个人数据的隐私声明</h1></center>
    <b>最近更新: 2021年5月</b><br>
      <h2>序言</h2>
      <p align='justify'>我们公司关注个人数据的保护和保密性，并致力于确保按照欧洲（RGPD）和法国适用的现行个人数据保护条例，对您的个人数据进行最高级别的保护。
      本隐私政策旨在告知您我们公司采取的实际措施和承诺，以确保您和您的客户的个人数据得到尊重和保护。</p>
      <ul>
        <li>\"我们\"和\"我们的\"是指在capitolehelpdes.ut-capitole.fr网站上插入的数据控制者，以及我们提供的服务。</li>
        <li>\"您\"和\"您的\"是指我们服务的所有用户或工具的访问者。</li>
        <li>名词\"客户\"定义了我们的客户</li>
      </ul>
      <h2>1 – 数据控制者的身份</h2>
        <p align='justify'>根据自2018年5月25日起适用的数据处理管理的法律框架，在2016年4月27日被称为 \"通用数据保护条例\"，上述条例赋予该术语的意义上的数据处理负责人（R.T.）是Université Toulouse 1 Capitole。
        我们的数据保护官（DPO）是XXX。可以通过电子邮件（XXX@ut-capitole.fr）或邮寄到以下的地址与他联系。
        Université Toulouse 1 Capitole,<br>
        2 Rue Gabriel Marty<br>
        31042 Toulouse <br>
        France <br></p>
      <h2>2 - 我们收集的个人数据</h2>
        <p align='justify'>当您注册我们的任何服务时，您可能需要向我们提供：<br>
        • 您的个人资料，如您的地址、电子邮件地址、学号、出生日期、电话号码和身份证明（身份证、护照、学生证，或任何能清楚表明您身份的有效文件）；<br>
        在提供他人的个人数据时，您必须确定他们同意，并且您被授权这样做。您还应酌情确保他们了解我们如何使用他们的个人数据。
      <h2>3 - 您的个人数据的使用</h2>
          我们以下列方式使用您的个人数据。
          <ol>
            <li>为了向您提供您要求的产品和服务。<br>
            我们需要处理您的个人数据，以便管理您的账户或通信，并协助您获得与我们向您提供的工具或服务有关的任何帮助。</li>
            <li>为了管理和改善我们的产品、服务和日常运作。<br>
            我们使用个人数据来管理和改善我们的服务和网站。我们监测我们的服务如何被使用，以保护您的个人数据，检测和防止欺诈、其他犯罪和滥用我们的服务。这是为了确保您安全地使用我们的服务。
            我们可能将个人数据用于市场研究、内部研究和开发，以及推出和改进我们的产品和服务范围、我们的商店、我们的IT系统、我们的安全、我们的专业知识以及我们与您沟通的方式。</li>
            <li>为了联系您并与您互动。 <br>
            我们一直热衷于为作为客户和用户的您提供尽可能好的服务。例如，如果您与我们联系，例如通过电子邮件、邮寄、电话或社交网络，我们可能会将您的个人数据用于您要求的任何澄清或协助。
            我们可能会邀请您参加由本公司和其他组织代表我们进行的调查、问卷调查和其他客户市场研究。我们不向第三方出售您的个人数据。</li>
          </ol>
      <h2> 4 - 处理个人数据的法律依据</h2>
        我们只有在以下至少一种情况下才会收集和使用您的个人数据：<br>
        <ul>
          <li>我们有您的授权；例如：注册。</li>
          -> 当您注册该工具时，您授权我们处理您的个人数据。<br>
          <li>为了遵守法律义务所必需的；例如：与监督机构共享个人数据。</li>
          <li>对于保护您或他人的切身利益是必要的；例如，在紧急情况下。</li>
          <li>我们获得官方授权符合公共利益；例如：安全行动。</li>
          -> 我们可能使用个人数据来应对和管理安全行动、事故或类似事件，包括用于医疗和保险目的。
          <li>这符合我们或第三方的合法利益，而且这些利益不会被您的利益或权利所取代。例如：为了使您的体验个性化。</li>
          -> 我们可能使用您的个人数据来更好地了解您的兴趣，以便我们可以尝试预测哪些产品、服务和信息是您最感兴趣的。这使我们能够定制我们的通信，使之尽可能地与您相关和有趣。
        </ul>
      <h2>5 - 与服务供应商共享个人数据</h2>
        <p align='justify'>为了向您提供您所要求的产品或服务，我们可能会与您的通信安排供应商分享您的个人数据，包括工具经理、解决问题的承包商、大学领导……
        我们还与精心挑选的服务提供商合作，代表我们履行某些职能。例如，公司负责IT服务、数据存储和完善。
        我们也可能需要分享个人数据，以建立、行使或捍卫我们的合法权利；这包括将个人数据传递给第三方以防止欺诈。当我们与其他组织共享个人数据时，我们要求他们保证数据的安全，并且不得将其用于自己的商业目的。特别是，这些组织有义务将保留您的数据的时间限制在执行服务所需的时间，或遵守其法律或监管义务，并确保他们有一个程序，一旦保留期满，就按照RGPD的规定销毁个人数据。
        我们只分享绝对必要的个人数据，以使我们的服务供应商能够向您/我们提供服务。</p>
      <h2>6 - 与监管机构共享个人数据</h2>
        <p align='justify'>为了使您能够进行沟通，在发生欺诈、不当沟通或沟通不充分的情况下，可能需要披露和处理您的个人数据。
        如果法律要求或我们被合法授权或要求，我们可能会与其他公共机构分享严格必要的个人数据。</p>
      <h2>7 - 保护您的个人数据</h2>
        我们理解保护和管理您的个人数据的重要性。我们采取适当的安全措施，以帮助保护您的个人数据免遭意外损失和未经授权的访问、使用、更改和披露。
        Ainsi :
        <ul>
          <li>我们使用加密的信息编码手段来存储对您的数据的访问；</li>
          <li>我们不在计算机数据库中储存您的银行数据；</li>
          <li>我们不存储违反RGPD的敏感数据；</li>
          <li>我们在与供应商或服务提供商的协议中包含保密条款，允许识别所传达的信息，并赋予我们对遵守保护程序的意外控制权；</li>
          <li>我们定期更新我们的处理记录。</li>
          <li>对于我们的员工，我们定期提高对保护和负责任地管理您的个人数据的重要性的认识（培训，出版物会议）。我们在雇佣合同中加入了保密条款，员工也在这方面做出了承诺。我们提醒您，您的数据的安全也取决于您。</li>
        </ul>
      <h2>8 - 个人数据的保存</h2>
        <p align='justify'>我们将在本通知中定义的目的和/或为了遵守法律和监管要求所需的时间内保留您的个人数据，即以 3 年为周期可更新。
        当您提出信息请求时，我们会将您的数据保留 3 年。
        当您通过我们的服务与某人交流时，我们会将您的数据保留 3 年，从您发送请求之日算起。这段时间过后，我们将清除通信数据。如果在此期间之后出于分析、历史或其他合法商业目的需要您的数据，我们将采取适当措施使其匿名。</p>
      <h2>9 - 访问和更新您的个人数据和投诉</h2>
        <p align='justify'>您有权索取我们持有的有关您的个人数据的副本。您可以写信给我们，向索取我们持有的关于您的其他个人数据的副本。
        请提供任何有助于我们识别您的身份并找到您的个人数据的详细信息。在我们能够提供的情况下，访问您的数据是免费的。我们希望确保我们持有的有关您的个人数据准确且最新。如果我们掌握的任何信息不正确，请与您的学校秘书处沟通。
        您还可以要求更正或删除您的个人数据，反对对其进行处理，以及，在技术上可能的情况下，要求将所提供的个人数据转移到另一个组织。然而，这种反对只会被该工具的平台考虑在内，而不是被其他拥有它的组织（例如大学）考虑在内。<br><br>
        我们将更新或删除您的数据，除非我们出于合法的商业或法律目的需要保留这些数据。
        如果您对我们收集、存储或使用您的个人数据的方式有任何投诉，您也可以联系我们。我们竭尽所能解决投诉，但如果您对我们的反应不满意，您可以向当地数据保护机构提出投诉：https://www.cnil.fr/fr/plaintes。
        请用普通纸（最好是R.A.R.）向数据保护官（DPO）提交书面请求或投诉，说明：<p>。
        <ul>
          <li>您的姓氏和名字；</li>
          <li>您的邮寄地址；</li>
          <li>您的电子邮箱地址；</li>
          <li>您的手机号码；</li>
          <li>您投诉的原因。</li>
        </ul>
        收件地址：<br>
        Université Toulouse 1 Capitole, <br>
        2 Rue Gabriel Marty <br>
        31042 Toulouse <br>
        France <br> <br>
        或发送电子邮件至 XXX@ut-capitole.fr <br> <br>
        我们想强调的是，在处理您的请求或投诉之前，我们必须检查您的身份。当您代表他人与我们联系时，我们可能会要求您提供更多信息，以确保您被授权提出这样的要求或投诉。<br><br>");


//reglage.php

define('TXT_ACCUEIL_REGLAGE', '设置');
define('CHOIX_LANGUE', '选择语言');
define('ENREGISTRER', '保存');

//menu2.php

define('DECONNEXION', '退出');
define('FAQ', '常见问题');
define('PROFIL', '个人信息');

//entretien.php

define('TXT_ACCUEIL_ENTRETIEN','设备维护');
define('TXT_MAJ_PARC','更新库存');
define('TXT_RAZ','恢复初始设置');
define('TXT_SAV','售后服务');
define('TXT_NUM_MAT','设备号码');
define('TXT_TYPEMAT','设备类型');
define('TXT_MODELE','设备型号');
define('TXT_MARQUE','品牌');
define('TXT_RAM',' 内存 (G)');
define('TXT_PROCESS','处理器');
define('TXT_CAPS','存储容量 (G)');
define('TXT_DATERECEP','入库日期');
define('TXT_ETAT','状态 ');
define('TXT_NOUVEAU','新的 ');
define('TXT_ALERTESUPP','您确定删除此设备吗？ ');
define('TXT_ALERTESUPP2','请注意, 此设备将不会被借用但所有信息仍然储存在数据库中。 ');
define('TXT_ALERTEMAT','设备已添加成功。');
define('TXT_NOUVELLECAT','新的类型 ');
define('TXT_NUM_BON','订单号码');
define('TXT_OUI','是');
define('TXT_NON','否');
define('TXT_ENTRETIEN','维修');
define('TXT_AJOUTER','添加');
define('TXT_MAT_EXISTE', '此设备号码已存在');
define('DATE_RECEPTION', '入库日期');

//RAZ.PHP

define('TXT_RAZ_TERMINE','恢复初始设置成功');

//SAV.PHP

define('TXT_REPONDRE','回复');
define('TXT_TRANSFERER','转移');

//secretaire
define('LISTE_RDV', '所有预约');
define('SUIVI_PRET', '跟踪借用');
define('STATS', '统计');
define('VACATAIRE', '维修人员');
define('DISPONIBLE', '选择可用预约时间');
?>

