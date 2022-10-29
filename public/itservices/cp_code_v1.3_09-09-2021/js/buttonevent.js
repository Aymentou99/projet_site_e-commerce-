/*  the  boutton japonais   */
const btn1 = document.getElementById("jp");
const btn2 = document.getElementById("jpp");
const btn3 = document.getElementById("eng");
const btn4 = document.getElementById("enss");
const element = document.getElementById("res");

btn2.onclick = function(){
    localStorage.setItem("Lang","jp");
    const linkmobile = document.getElementById("homes");
    
    linkmobile.textContent = "家庭";
    changetext();
};


btn4.onclick = function(){
    localStorage.setItem("Lang","english");
    location.reload();
};


/* create  an  event  when click the btn   */


btn1.onclick = ()=>{
    localStorage.setItem("Lang","jp");
    setLanugage("jp");
};

btn3.onclick = ()=>{

    setLanugage("english");
     localStorage.setItem("Lang","english");
};

onload = ()=>{
    setLanugage(localStorage.getItem("Lang"));
};

function setLanugage(getLanuage){

if(getLanuage === "jp"  ){


element.classList.remove("en");
element.classList.remove("dropbtn");
element.classList.add("de");
element.classList.add("dd");
element.textContent="JA";
 const link = document.getElementById("home");

 link.textContent = "家庭";
changetext();

}else if(getLanuage === "english"  && localStorage.getItem("Lang") === "jp") {


element.classList.remove("de");

element.classList.add("en");

element.classList.add("dropbtn");
element.textContent="EN";

location.reload();
}
}

/* function change  all  the content  to  japonais  langage when click the  boutton */
function changetext() {

    /* change group section image */
 var grp_section = document.getElementById("gr-image");
 grp_section.src="group-sectionjp.png";



 /* home-heading-1  home-heading-2 */
 const wordN1h1 = document.querySelector("#home-heading-1");
 wordN1h1.textContent = "デジタル";

 const wordN2h1 = document.querySelector("#home-heading-2");
 wordN2h1.innerHTML = "クリエイティブ " + "<span>" + "エージェンシー" + "</span>";
 wordN2h1.setAttribute("lang", "jv");

 const wordN3h1 = document.querySelector("#home-heading-2 span");
 wordN3h1.style.color = "#3742da";
 wordN3h1.style.fontWeight = "500";

const se = document.getElementById("se");
se.textContent = "サービス";

 const par1 = document.getElementById("par1");
 par1.textContent = "企業向けの効率的な IoT ソリューションを開発させていただきます";

 const par2 = document.getElementById("par2");
 par2.textContent = "オンラインでビジネスを成長させるためのソフトウェア/ウェブサイトを作成いたします。";

 const par3 = document.getElementById("par3");
 par3.textContent = "AI でビジネスを自動化させていただきます";
                        
 const explore1 = document.getElementById("explore1");
 explore1.textContent = "見る";

 const explore2 = document.getElementById("explore2");
 explore2.textContent = "見る";

 const explore3 = document.getElementById("explore3");
 explore3.textContent = "見る";

 const head1 = document.getElementById("head1");
 head1.textContent = "組み込みシステムの開発";

 const head2 = document.getElementById("head2");
 head2.textContent = "ワイヤレステクノロジー";
 const head3 = document.getElementById("head3");
 head3.textContent = "PCB デザイン";

 const par1head1 = document.getElementById("par1-head1");
 par1head1.textContent = "	FPGA/MCU/DSP 開発、RF 設計、および";
 par1head1.style.fontSize = "1.5rem";
 
 const elem = document.createElement('a');
 elem.textContent = "詳細 >>";
 elem.style.color = "red";

 elem.setAttribute("class", "smooth-scroll");
 elem.setAttribute("href", "#home-start");
 
 par1head1.appendChild(elem);
 

 var par2head2 = document.getElementById("par2-head2");
 par2head2.textContent = "PoC とIoT、LTE/4G、5Gソリューションのプロトタイピング。";
 par2head2.style.fontSize = "1.5rem";

 const elem2 = document.createElement('a');
 elem2.textContent = "詳細 >>";
 elem2.style.color = "red";
 elem2.setAttribute("class", "smooth-scroll");
 elem2.setAttribute("href", "#home2g");
 
 par2head2.appendChild(elem2);

 var par3head3 = document.getElementById("par3-head3");
 par3head3.textContent = "設計アイデア、ブロック図、電力見積もり、回路図キャプチャ、およびBOMコスト見積もり。";
 par3head3.style.fontSize = "1.5rem";

 const elem3 = document.createElement('a');
 elem3.textContent = "詳細 >>";
 elem3.style.color = "red";
 elem3.setAttribute("class", "smooth-scroll");
 elem3.setAttribute("href", "#home3g");

 par3head3.appendChild(elem3);

 /* Embedded system development title */
 const head1_1 = document.getElementById("head1_1");
 head1_1.textContent = "組み込みシステムの開発";
 head1_1.style.fontSize = "5rem";
 head1_1.style.color = "red";

  /* Wireless Technologies title */
  const head1_2 = document.getElementById("head1_2");
  head1_2.textContent = "ワイヤレステクノロジー";
  head1_2.style.fontSize = "5rem";
  head1_2.style.color = "red";
 
  /* PCB Design Technologies title */
  const head1_3 = document.getElementById("head1_3");
  head1_3.textContent = "PCB デザイン";
  head1_3.style.fontSize = "5rem";
  head1_3.style.color = "red";


 /*embedded system development*/
 /* services embedded system development  service 1*/
 const ele1 = document.getElementById("h_service1");
 ele1.textContent = "組み込みシステムを構築します。";
                     
 const ele2 = document.getElementById("p_service1");
 ele2.textContent = "弊社の目標は、組み込みシステムの問題と設計要件について企業を支援するための高度な技術資源を提供することにあります。";

 
 /* Our Services Header */
 const ele1ser = document.getElementById("h_service2");
 ele1ser.textContent = "弊社のサービス"; 

/* Our Services Content */
 const ele2ser = document.getElementById("p_service2");
 ele2ser.textContent = "弊社にはハードウェアとソフトウェアの両方の設計に確かな専門知識があります。"
                     + "<br><br>"
                     + "弊社はこれまでに FPGA/MCU/DSP 開発、RF 設計、およびテストと測定を含むプロジェクトに参加しました。。";

 /* Wireless Technologies */
 const ele1h = document.getElementById("h_service3");
 ele1h.textContent = "インテリジェントソリューション"; 

 const ele2h = document.getElementById("p_service3");
 ele2h.textContent = "新しい接続デバイスとセンサー用の完全なソフトウェアエコシステムを作成しようとしている企業に革新的なソリューションを提供します。";

 /* Our Services Header */
 const ele1serhj = document.getElementById("h_service4");
 ele1serhj.textContent = "弊社のサービス";

 /* Our Services Content */
 const ele2serh = document.getElementById("p_service4");
 ele2serh.innerHTML = "開発フェーズに進む前にアイデアを検証できるように、「コンセプトの実証」とカスタムインテリジェントデバイスのプロトタイプを作成します。"
                        + "<br><br>"
                        + "さらに、LTE/4G、5Gソリューションなどの通信技術に関する専門知識も持っております。";
                        

 const ele1hd = document.getElementById("h_service5");
 ele1hd.textContent = "デザインと製造"; 

 // Question: in p_service5: add します。to previous line? with/out espace?
 const ele2hd = document.getElementById("p_service5");
 ele2hd.textContent =  "弊社のIoT開発会社は、あなたのアイデアを機能するPCBシステムに変換するお手伝いを します。" + "<br><br>"
                        + "回路図キャプチャとPCBレイアウトの専門知識があります。";
 

 /* Our Services Header */
 const ele1serh = document.getElementById("h_service6");
 ele1serh.textContent = "弊社のサービス";

  /* Our Services Content */
  const ele2serhg = document.getElementById("p_service6");
 ele2serhg.innerHTML = "開発フェーズに進む前にアイデアを検証できるように、「コンセプトの実証」とカスタムインテリジェントデバイスのプロトタイプを作成します。 さらに、LTE/4G、5Gソリューションなどの通信技術に関する専門知識も持っております。";



 /* dev  services  section*/


//  const bg_headk = document.getElementById("bg-head-dev");
//  bg_headk.style.fontSize = "2.5rem";
//  bg_headk.textContent = "Dev サービス";

const head1b = document.getElementById("par-dev-h1");
 head1b.textContent = "ウェブサイト";

 const head2b = document.getElementById("par-dev-h2");
 head2b.textContent = "デスクトップアプリケーション";

 // Question: shall i remove spaces between ja-en words?
 const head3b = document.getElementById("par-dev-h3");
 head3b.textContent = "Android および iOS アプリケーション";


 const par1head1g = document.getElementById("par-dev-1");
 par1head1g.textContent = "弊社は御社のビジネスと御社のユーザーのために役に立つサイトを構築します。 例えば、複雑なイントラネットプラットフォーム、プログレッシブWebアプリ、マーケティングWebサイトなどがあります。";
 par1head1g.style.fontSize = "1.3rem";

 const elemj = document.createElement('a');
 elemj.textContent = "詳細 >>";
 elemj.style.color = "red";

 elemj.setAttribute("class", "smooth-scroll");
 elemj.setAttribute("href", "#dd");

 par1head1g.appendChild(elemj);

 var par2head2g = document.getElementById("par-dev-2");
 par2head2g.textContent = "弊社は御社のビジネスを拡大するのに役立つソフトウェアを開発します";
 par2head2g.style.fontSize = "1.5rem";

 const elem2j = document.createElement('a');
 elem2j.textContent = "詳細 >>";
 elem2j.style.color = "red";

 elem2j.setAttribute("class", "smooth-scroll");
 elem2j.setAttribute("href", "#desk");

 par2head2g.appendChild(elem2j);

 var par3head3g = document.getElementById("par-dev-3");
 par3head3g.textContent = "ネイティブおよびハイブリッドモバイル開発の専門知識により、ユーザーがどこにいても接続できるように支援します。";
 par3head3g.style.fontSize = "1.5rem";

 const elem3g = document.createElement('a');
 elem3g.textContent = "詳細 >>";
 elem3g.style.color = "red";

 elem3g.setAttribute("class", "smooth-scroll");
 elem3g.setAttribute("href", "#Android");

 par3head3g.appendChild(elem3g);

 /* Websites Header */
 const serl1 = document.getElementById("ser-l1");
 serl1.textContent = "ウェブサイト";
 serl1.style.fontSize = "5rem";
 serl1.style.color = "red";

 /* service 1 Header : Web Development */
 const eleh = document.getElementById("h-s-1");
 eleh.textContent = "ウェブ開発";

 /* service 1 Content : Web Development */
 const elep = document.getElementById("p-s-1");
 elep.textContent = "高度なWeb開発テクノロジーを活用して、フロントエンド、バックエンド、およびアーキテクチャを統合し、ビジネスニーズに対応します。";


 /* Our Services Header */
 const hs1 = document.getElementById("h-s-2");
 hs1.textContent = "弊社のサービス"; 
 
  /* Our Services Content */
  const ps2 = document.getElementById("p-s-2");
 ps2.innerHTML = "ビジネスの成長に役立つウェブサイトを設計および作成します。"
                 + "<br><br>"
                 + "複雑なエンタープライズプラットフォームとデータストレージ、レスポンシブ Web アプリ、eコマースサイトのいずれであっても、当社のソリューションはスムーズに機能し、ビジネス価値を反映した最高のユーザーエクスペリエンスを提供します。";


 /* Desktop Applications Header */
 const d_big = document.getElementById("d_big");
 d_big.textContent = "デスクトップアプリケーション";
 d_big.style.fontSize = "5rem";
 d_big.style.color = "red";

 /* service 1 : Native & Cross-Platform Software Header */
 const d_h1 = document.getElementById("d_h1");
 d_h1.textContent = "ネイティブおよびクロスプラットフォームソフトウェア";
 
 /* service 1 : Native & Cross-Platform Software Content */
 const d_p1 = document.getElementById("d_p1");
 d_p1.innerHTML = "お客様がテクノロジーを使用してイノベーションを推進し、デジタル的に成熟した組織に移行するのを支援します。"
                    + "<br><br>"
                    + "	私たちはあなたのニーズを満たす高品質のエンタープライズソフトウェアを設計および開発します。";

 const d_h2 = document.getElementById("d_h2");
 d_h2.textContent = "例：クライアント管理";

 const d_p2 = document.getElementById("d_p2");
 d_p2.innerHTML = "このソリューションは、事業主が職場の活動、生産、パフォーマンスを管理、整理、追跡するのに役立ちます。"
                  + "<br><br>"
                  + "このソリューションには、連絡先管理、レポート、および電子メールツールが含まれています。";


 /* Android & iOS Applications title */
 const A_big = document.getElementById("A_big");
 A_big.textContent = "AndroidおよびiOSアプリケーション"; 
 A_big.style.fontSize = "5rem";
 A_big.style.color = "red";

 /*  service 1*/
 const A_h1 = document.getElementById("A_h1");
 A_h1.textContent = "クロスプラットフォームとネイティブモバイル開発";

 const A_p1 = document.getElementById("A_p1");
 A_p1.innerHTML = "モバイル開発の専門知識により、モバイルでユーザーとつながることができます。"
                  + "<br><br>"
                  + "シンプルなアプリでも大規模なソリューションでも、規定された時間で最高の結果を提供します。";


 /* Our Services Header */
 const A_h2 = document.getElementById("A_h2");
 A_h2.textContent = "弊社のサービス";

 /* Our Services Content */
 const A_p2 = document.getElementById("A_p2");
 A_p2.textContent = "モバイル開発チームは、ユーザーに高品質のユーザーエクスペリエンスを提供する iOS/Androidソリューションの開発に豊富な経験を持っております。";


 const head1c = document.getElementById("par-ai-h1");
 head1c.textContent = "ＡＩ相談";

 const AI_consulting_desc = document.getElementById("par-ai-1");
 AI_consulting_desc.textContent = "収集したデータを最大限に活用できるAI主導のソリューションを開発しています。";
 AI_consulting_desc.style.fontSize = "1.3rem";

 const elem_1 = document.createElement('a');
 elem_1.textContent = "詳細 >>";
 elem_1.style.color = "red";

 elem_1.setAttribute("class", "smooth-scroll");
 elem_1.setAttribute("href", "#dd");

 AI_consulting_desc.appendChild(elem_1);


 const head2c = document.getElementById("par-ai-h2");
 head2c.textContent = "データ分析";
 
 const AI_data_analytics_desc = document.getElementById("par-ai-2"); 
 AI_data_analytics_desc.textContent = "弊社は御社のデータから有用かつ競争上優位となる情報を抽出します。";
 AI_data_analytics_desc.style.fontSize = "1.3rem";

 const elem_2 = document.createElement('a');
 elem_2.textContent = "詳細 >>";
 elem_2.style.color = "red";

 elem_2.setAttribute("class", "smooth-scroll");
 elem_2.setAttribute("href", "#dd");

 AI_data_analytics_desc.appendChild(elem_2);
 

 const head3c = document.getElementById("par-ai-h3");
 head3c.textContent = "オートメーション(自動化)";

 const AI_automation_desc = document.getElementById("par-ai-3");
 AI_automation_desc.textContent = "データ主導の世界への参入とビジネスの自動化を支援します。";
 AI_automation_desc.style.fontSize = "1.3rem";

 const elem_3 = document.createElement('a');
 elem_3.textContent = "詳細 >>";
 elem_3.style.color = "red";

 elem_3.setAttribute("class", "smooth-scroll");
 elem_3.setAttribute("href", "#dd");

 AI_automation_desc.appendChild(elem_3);

 /*  AI Consulting title */
 const ai_cons_h = document.getElementById("ai_cons_h");
 ai_cons_h.textContent = "ＡＩ相談";
 ai_cons_h.style.fontSize = "5rem";
 ai_cons_h.style.color = "red";

 /*  AI Consulting section */

 /* AI For Business */
 const hai11 = document.getElementById("h-ai1-1");
 hai11.textContent = "ビジネス用 AI"; 

 const pai11 = document.getElementById("p-ai1-1");
 pai11.textContent = "ニーズに合った最適なAI戦略の開発を支援します。"
                     + "<br><br>"
                     + "お客様のデータを使用して、競合で他社に先んじることができるAI主導のソリューションを開発します。";

 /* Our Services Header */
 const hai12 = document.getElementById("h-ai1-2");
 hai12.textContent = "弊社のサービス";

  /* Our Services Content */
 const pai12 = document.getElementById("p-ai1-2");
 pai12.textContent = "-	異常検出、コンピュータービジョン、レコメンデーションシステム、予測など、AIのいくつかの分野に関する専門知識があります。";


 /* Data Analytics title */
 const ai_data_analytics_h = document.getElementById("ai_data_analytics_h");
 ai_data_analytics_h.textContent = "データ分析";
 ai_data_analytics_h.style.fontSize = "5rem";
 ai_data_analytics_h.style.color = "red";

 /* Data Analytics section */
 const hai21 = document.getElementById("h-ai2-1");
 hai21.textContent = "御社のデータに耳を傾けます";

 const pai21 = document.getElementById("p-ai2-1");
 pai21.textContent = "データの収集、分析、理解を支援します。"
                    + "<br><br>"
                    + "インサイトを使用して、ビジネスを改善し、顧客を知るためのガイドを提供します。";

 /* Our Services Header */
 const hai22 = document.getElementById("h-ai2-2");
 hai22.textContent = "弊社のサービス"; 

  /* Our Services Content */
 const pai22 = document.getElementById("p-ai2-2");
 pai22.innerHTML = "弊社のツールを使用すると、既存のプロセスとシステムをスクラブして冗長性、競合、価値の漏えいを防ぐことで、ビジネスの運用上の「衛生状態」を向上させることができます。"
                 + "<br><br>"
                 + "さらに、製品や顧客に影響を与える主な要因を理解することで、成長を支援します。";


 /* Automation title */
 const ai_automation_h = document.getElementById("ai_automation_h");
 ai_automation_h.textContent = "オートメーション(自動化)";
 ai_automation_h.style.fontSize = "5rem";
 ai_automation_h.style.color = "red";

 /* Intelligent Automation */
 const hai31 = document.getElementById("h-ai3-1");
 hai31.textContent = "-	インテリジェントオートメーション";

  /* Intelligent Automation Content */
 const pai31 = document.getElementById("p-ai3-1");
 pai31.innerHTML = "自動化は、ロボット工学と人工知能（AI）テクノロジーを組み合わせたものです。"
                 + "<br><br>"
                 + "迅速なend-to-endのビジネスプロセスの工業化を促進し、デジタルトランスフォーメーションを加速します。";

 /* Our Services Header */
 const hai32 = document.getElementById("h-ai3-2");
 hai32.textContent = "弊社のサービス"; 

  /* Our Services Content */
 const pai32 = document.getElementById("p-ai3-2");
 pai32.innerHTML = "インフラストラクチャから運用まで、すべてを自動化できる可能性があります。"
                 + "<br><br>"
                 + "必要に応じて、効率を高め、コストを削減し、グローバルプロセスを加速する、実績のある機械学習アプローチを使用します。"
                 + "<br><br>"
                 + "自動化は、ビジネスを拡大し、競合他社に先んじるために不可欠です。";

}

