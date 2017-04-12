<?php echo 'Theme by time';exit;?>
</div>
<!--{if empty($topic) || ($topic[usefooter])}-->
<!--{eval $focusid = getfocus_rand($_G[basescript]);}-->
<!--{if $focusid !== null}-->
<!--{eval $focus = $_G['cache']['focus']['data'][$focusid];}-->
<!--{eval $focusnum = count($_G['setting']['focus'][$_G[basescript]]);}-->

<div class="focus" id="sitefocus">
  <div class="bm">
    <div class="bm_h cl"> <a href="javascript:;" onclick="setcookie('nofocus_$_G[basescript]', 1, $_G['cache']['focus']['cookie']*3600);$('sitefocus').style.display='none'" class="y" title="{lang close}">{lang close}</a>
      <h2> 
        <!--{if $_G['cache']['focus']['title']}-->{$_G['cache']['focus']['title']}<!--{else}-->{lang focus_hottopics}<!--{/if}--> 
        <span id="focus_ctrl" class="fctrl"><img src="{IMGDIR}/pic_nv_prev.gif" alt="{lang footer_previous}" title="{lang footer_previous}" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/$focusnum</em> <img src="{IMGDIR}/pic_nv_next.gif" alt="{lang footer_next}" title="{lang footer_next}" id="focusnext" class="cur1" onclick="showfocus('next')" /></span> </h2>
    </div>
    <div class="bm_c" id="focus_con"> </div>
  </div>
</div>
<!--{eval $focusi = 0;}--> 
<!--{loop $_G['setting']['focus'][$_G[basescript]] $id}-->
<div class="bm_c" style="display: none" id="focus_$focusi">
  <dl class="xld cl bbda">
    <dt><a href="{$_G['cache']['focus']['data'][$id]['url']}" class="xi2" target="_blank">$_G['cache']['focus']['data'][$id]['subject']</a></dt>
    <!--{if $_G['cache']['focus']['data'][$id][image]}-->
    <dd class="m"><a href="{$_G['cache']['focus']['data'][$id]['url']}" target="_blank"><img src="{$_G['cache']['focus']['data'][$id]['image']}" alt="$_G['cache']['focus']['data'][$id]['subject']" /></a></dd>
    <!--{/if}-->
    <dd>$_G['cache']['focus']['data'][$id]['summary']</dd>
  </dl>
  <p class="ptn cl"><a href="{$_G['cache']['focus']['data'][$id]['url']}" class="xi2 y" target="_blank">{lang focus_show} &raquo;</a></p>
</div>
<!--{eval $focusi ++;}--> 
<!--{/loop}--> 
<script type="text/javascript">
			var focusnum = $focusnum;
			if(focusnum < 2) {
				$('focus_ctrl').style.display = 'none';
			}
			if(!$('focuscur').innerHTML) {
				var randomnum = parseInt(Math.round(Math.random() * focusnum));
				$('focuscur').innerHTML = Math.max(1, randomnum);
			}
			showfocus();
			var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
		</script> 
<!--{/if}--> 
<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1}-->
<div class="focus patch" id="patch_notice"></div>
<!--{/if}--> 

<!--{ad/footerbanner/wp a_f/1}--><!--{ad/footerbanner/wp a_f/2}--><!--{ad/footerbanner/wp a_f/3}--> 
<!--{ad/float/a_fl/1}--><!--{ad/float/a_fr/2}--> 
<!--{ad/couplebanner/a_fl a_cb/1}--><!--{ad/couplebanner/a_fr a_cb/2}--> 
<!--{ad/cornerbanner/a_cn}--> 

<!--{hook/global_footer}-->

<div id="footer" class="footer cl">
<div id="ft" class="foot cl">
<div class="ftop row fix cl" style="margin-top: 20px;">
  <div class="g15 grid">
    <h5>微信公众号</h5>
    <div class="weixin"> <img src="template/time_22th_pic/src/wx.png" alt=""></div>
  </div>
  <div class="g2 grid">
    <h5>在线交流</h5>
    <dl>
      <dd>关注微博：<a href="#" target="_blank" rel="nofollow" title="PSDESIGN">PSVISION</a></dd>
      <dd>QQ群1交流设计：<a href="#" target="_blank" rel="nofollow">2779181148</a></dd>
      <dd>QQ群2精神疗养：<a href="#" target="_blank" rel="nofollow">1256892221</a></dd>
      <dd>QQ群3粉丝联谊：<a href="#" target="_blank" rel="nofollow">1627894438</a></dd>
    </dl>
  </div>
  <div class="g1 grid">
    <h5>合作伙伴</h5>
    <dl>
      <dd><a href="http://oi22.com" target="_blank" title="爱图小站">爱图小站</a></dd>
      <dd><a href="#" target="_blank">阿里云</a></dd>
      <dd><a href="#" target="_blank">网站导航</a></dd>
      <dd><a href="#" target="_blank">VISION截图社</a></dd>
    </dl>
  </div>
  <div class="g15 grid">
    <h5>传送门</h5>
    <dl>
      <dd><a href="#" target="_blank">如何加入VIP</a></dd>
      <dd><a href="#" target="_blank">升级VIP</a></dd>
      <dd><a href="#" target="_blank">关于本站</a></dd>
      <dd><a href="#" target="_blank">投放广告</a></dd>
    </dl>
  </div>
  <div class="g4 grid">
    <p>PSVISION（visiondz.cn）是一个自由开放的平面设计资源分享网站。致力于开放式分享、介绍、推荐有价值的设计素材元素以及平面设计教学，并鼓励会员参与其中。
      一般情况下发布的文件为RAR压缩包格式。下载方式以国内主流网盘为主（百度云、微盘、云盘、360网盘...）</p>
    <p><!--{loop $_G['setting']['footernavs'] $nav}--><!--{if $nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
						!$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile' || $nav['id'] == 'darkroom'))}-->$nav[code]<!--{/if}--><!--{/loop}--></p>
  </div>
</div>
<div class="row fix cl">
 <div class="index_link cl">
   Copyright &copy; 2016 <a href="http://www.comsenz.com" target="_blank">Comsenz Inc. </a> Powered by <a href="http://www.discuz.net" target="_blank">Discuz!</a> <em>$_G['setting']['version']</em><!--{if !empty($_G['setting']['boardlicensed'])}--> <a href="http://license.comsenz.com/?pid=1&host=$_SERVER[HTTP_HOST]" target="_blank">Licensed</a><!--{/if}-->
        <!--{if $_G['setting']['icp']}--> - <a href="http://www.miitbeian.gov.cn/" target="_blank">$_G['setting']['icp']</a><!--{/if}-->
        <!--{hook/global_footerlink}--> 
        <!--{if $_G['setting']['statcode']}-->$_G['setting']['statcode']<!--{/if}-->
 </div>
</div>
</div>
<!--{eval updatesession();}--> 
<!--{if $_G['uid'] && $_G['group']['allowinvisible']}--> 
<script type="text/javascript">
			var invisiblestatus = '<!--{if $_G['session']['invisible']}-->{lang login_invisible_mode}<!--{else}-->{lang login_normal_mode}<!--{/if}-->';
			var loginstatusobj = $('loginstatusid');
			if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
			</script> 
<!--{/if}--> 

<!--{/if}--> 

<!--{if !$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry']}--> 
<!--{if $_G[uid] && !isset($_G['cookie']['checkpm'])}--> 
<script type="text/javascript" src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=$_G[timestamp]"></script> 
<!--{/if}--> 

<!--{if $_G[uid] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])}--> 
<script type="text/javascript" src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=$_G[timestamp]"></script> 
<!--{/if}--> 

<!--{if !isset($_G['cookie']['sendmail'])}--> 
<script type="text/javascript" src="home.php?mod=misc&ac=sendmail&rand=$_G[timestamp]"></script> 
<!--{/if}--> 

<!--{if $_G[uid] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])}--> 
<script type="text/javascript" src="misc.php?mod=patch&action=checkpatch&rand=$_G[timestamp]"></script> 
<!--{/if}--> 
<!--{/if}--> 

<!--{if $_GET['diy'] == 'yes'}--> 
<!--{if check_diy_perm($topic) && (empty($do) || $do != 'index')}--> 
<script type="text/javascript" src="{$_G[setting][jspath]}common_diy.js?{VERHASH}"></script> 
<script type="text/javascript" src="{$_G[setting][jspath]}portal_diy{if !check_diy_perm($topic, 'layout')}_data{/if}.js?{VERHASH}"></script> 
<!--{/if}--> 
<!--{if $space['self'] && CURMODULE == 'space' && $do == 'index'}--> 
<script type="text/javascript" src="{$_G[setting][jspath]}common_diy.js?{VERHASH}"></script> 
<script type="text/javascript" src="{$_G[setting][jspath]}space_diy.js?{VERHASH}"></script> 
<!--{/if}--> 
<!--{/if}--> 
<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1}--> 
<script type="text/javascript">patchNotice();</script> 
<!--{/if}--> 
<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])}-->
<div class="focus plugin" id="plugin_notice"></div>
<script type="text/javascript">pluginNotice();</script> 
<!--{/if}--> 
<!--{if !$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])}-->
<div class="focus plugin" id="ip_notice"></div>
<script type="text/javascript">ipNotice();</script> 
<!--{/if}--> 
<!--{if $_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G[uid]]) || $_G['cookie']['promptstate_'.$_G[uid]] != $_G['member']['newprompt']) && $_GET['do'] != 'notice'}--> 
<script type="text/javascript">noticeTitle();</script> 
<!--{/if}--> 

<!--{if ($_G[member][newpm] || $_G[member][newprompt]) && empty($_G['cookie']['ignore_notice'])}--> 
<script type="text/javascript" src="{$_G[setting][jspath]}html5notification.js?{VERHASH}"></script> 
<script type="text/javascript">
	var h5n = new Html5notification();
	if(h5n.issupport()) {
		<!--{if $_G[member][newpm] && $_GET[do] != 'pm'}-->
		h5n.shownotification('pm', '$_G[siteurl]home.php?mod=space&do=pm', '<!--{avatar($_G[uid],small,true)}-->', '{lang newpm_subject}', '{lang newpm_notice_info}');
		<!--{/if}-->
		<!--{if $_G[member][newprompt] && $_GET[do] != 'notice'}-->
				<!--{loop $_G['member']['category_num'] $key $val}-->
					<!--{eval $noticetitle = lang('template', 'notice_'.$key);}-->
					h5n.shownotification('notice_$key', '$_G[siteurl]home.php?mod=space&do=notice&view=$key', '<!--{avatar($_G[uid],small,true)}-->', '$noticetitle ($val)', '{lang newnotice_notice_info}');
				<!--{/loop}-->
		<!--{/if}-->
	}
	</script> 
<!--{/if}--> 
<!--{eval userappprompt();}--> 
<!--{if $_G['basescript'] != 'userapp'}-->

<div id="share">
<a id="totop" title="">返回顶部</a>
</div>
<script type="text/javascript">
jQuery.noConflict();
jQuery(function(){
        //首先将#back-to-top隐藏
        jQuery("#share").hide();
        //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
        jQuery(function () {
            jQuery(window).scroll(function(){
                if (jQuery(window).scrollTop()>100){
                    jQuery("#share").fadeIn();
                }
                else
                {
                    jQuery("#share").fadeOut();
                }
            });
            //当点击跳转链接后，回到页面顶部位置
            jQuery("#totop").click(function(){
                jQuery('body,html').animate({scrollTop:0},500);
                return false;
            });
        });
    }); 
</script>

<!--{/if}--> 
<!--{if isset($_G['makehtml'])}--> 
<script type="text/javascript" src="{$_G[setting][jspath]}html2dynamic.js?{VERHASH}"></script> 
<script type="text/javascript">
		var html_lostmodify = {TIMESTAMP};
		htmlGetUserStatus();
		<!--{if isset($_G['htmlcheckupdate'])}-->
		htmlCheckUpdate();
		<!--{/if}-->
	</script> 
<!--{/if}--> 
<!--{eval output();}-->
</div>
</div>
</body></html>
