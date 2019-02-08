<!--Author: Phill Margetts - President - USQITSN
-->
<?php
    require_once "/var/www/components/member_post_init.php";
?>
<section class="main-content padded-content larger">
<h3 class="center page-title">Know and Tell</h3>
<h4 class="center page-title">Journey from Gmail to Office 365 (ITMEL post)</h4>

<div class="post-info">
  <h5>Author: Phill Margetts</h5>
  <h5>Publication Date: 08/02/2019</h5>
</div>
<p><strong>Post originally appeared on <a target="_blank" href="http://philmargetts.com">philmargetts.com</a></strong></p>
<p><em>This&nbsp;post&nbsp;was&nbsp;originally&nbsp;a&nbsp;reply&nbsp;to&nbsp;an&nbsp;email&nbsp;thread&nbsp;on the&nbsp;<a href="http://itmel.org">ITMEL</a>&nbsp;mailing&nbsp;list,&nbsp;discussing&nbsp;Google&nbsp;to&nbsp;Microsoft&nbsp;migrations&nbsp;and&nbsp;Microsoft&nbsp;Teams.&nbsp;Ended&nbsp;up&nbsp;being&nbsp;somewhat&nbsp;comprehensive&nbsp;so&nbsp;figured&nbsp;I&#8217;d&nbsp;record&nbsp;it&nbsp;(slightly edited) here.&nbsp;Perhaps&nbsp;may&nbsp;discuss&nbsp;some&nbsp;of&nbsp;these&nbsp;topics&nbsp;more&nbsp;at&nbsp;some&nbsp;stage.</em></p>
<br>
<p>All</p>
<p>Essay incoming :) will take the opportunity to summarise our journey so far here (Darling Downs Christian School, February 2019).</p>
<p>A few years ago everyone was on G Suite Gmail, but weren&#8217;t touching Drive/Docs. I think to truly benefit from the G Suite/Docs ecosystem you have to more or less abandon traditional MS Office file formats in some sense. A difficult thing, given MS&#8217; monopoly in this area.</p>
<p>Being tied to these file formats makes O365 attractive to many I think (whether or not the tools/services are always better&#8230;) and as SDA Schools South QLD we&#8217;ve been moving towards more O365 over the past few years. Last year migrated all DDCS mailboxes from Gmail to exchange online. Used an IMAP pull, although from memory had to use <a href="https://github.com/jay0lee/GAM/wiki">GAM </a>(third-party G Suite management) to enable IMAP on all mailboxes. On-prem to online exchange should be easier.</p>
<p>Most staff using the OWA with few complaints (since everyone was used to web-based Gmail). The older OWA felt a bit sluggish at times but &#8220;The new Outlook&#8221; much improved imo.&nbsp;<a rel="noreferrer noopener" href="https://philmargetts.com/free-office-365-email-signatures-with-powershell/" target="_blank">Signatures automated with PowerShell</a>&nbsp;and no mucking around with desktop Outlook application (MFA issues, etc).</p>
<p>We&#8217;ve also jumped on the Teams bandwagon. You&#8217;d wonder how what is fundamentally a chat application could consume so much RAM/CPU but it does play nice with the whole O365 suite. The experience has been consistent with&nbsp;MS&nbsp;philosophy of&nbsp;ship first/fix later but is becoming more mature.&nbsp;Good for staff notices and people love the ability to reply/discuss. Have also started leveraging the attached OneNote Staff Notebooks for meeting agendas/minutes. Like [name redacted], often surprised by the people who&#8217;ll get on board with the collaboration/instant messaging. Have seen some great development in change acceptance at our small school.</p>
<p>PowerShell from SIS to manage membership would be great in a larger environment, but we&#8217;ve done more simple O365 dynamic groups based on AD attributes.<br>Still a bit old school here with file shares, but waiting until we can get a robust O365 backup strategy in place before putting everything in Teams/SharePoint. Some folks on MITIE have talked about&nbsp;<a rel="noreferrer noopener" href="https://foldr.io/ " target="_blank">https://foldr.io/</a>&nbsp;for multiple storage locations.</p>
<p>Also looking at SDS last year; pretty big in US schools. Adventist Schools Australia currently using MAZE which also isn&#8217;t natively supported. We&#8217;ve been testing some SQL queries that generate CSV&#8217;s direct from the database to import into SDS.&nbsp;End goal is to have a Team (+ OneNote Class Notebook) for every class automatically generated, whether the teacher wants to use it or not. Also early days. Teams has great potential in classroom discussion/communication I think.</p>
<p>Forms great for quizzes/surveys, Sway really flexible presentation/publication tool, OneNote is great (I describe as unlimited digital butcher&#8217;s paper!) and teachers love Class Notebooks (new Win10 app syncs much better than 2016).</p>
<p>Like so many tech companies today, I think the power of O365 is in the (buzzword alert) ecosystem, with the many tools interacting together. As a general rule, I think Google build less but more robust products, whereas Microsoft are continuously improving a whole lot more (sometimes buggy) things.&nbsp;</p>
<p>Hope that&#8217;s helpful/interesting. Happy to field any questions on/off list.&nbsp;I don&#8217;t pretend to have all the answers so always keen to see what others have done. I believe Sheldon College may have done some cool stuff with Teams.</p>
<p>Phil</p>
<p><em>Feel free reach out if you have any questions or comments.</em></p>

</section>
<?php
  require_once "/var/www/components/member_post_comment_foot.php";
 ?>
