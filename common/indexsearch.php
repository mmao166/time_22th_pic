<?php echo 'Theme by time';exit;?>
<!--{if $_G['setting']['search']}-->
	<!--{eval $slist = array();}-->
	<!--{if $_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group'}--><!--{block slist[forumfid]}--><li><a href="javascript:;" rel="curforum" fid="$_G[fid]" >{lang search_this_forum}</a></li><!--{/block}--><!--{/if}-->
	<!--{if $_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)}--><!--{block slist[portal]}--><li><a href="javascript:;" rel="article">{lang article}</a></li><!--{/block}--><!--{/if}-->
	<!--{if $_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)}--><!--{block slist[forum]}--><li><a href="javascript:;" rel="forum" class="curtype">{lang thread}</a></li><!--{/block}--><!--{/if}-->
	<!--{if helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)}--><!--{block slist[blog]}--><li><a href="javascript:;" rel="blog">{lang blog}</a></li><!--{/block}--><!--{/if}-->
	<!--{if helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)}--><!--{block slist[album]}--><li><a href="javascript:;" rel="album">{lang album}</a></li><!--{/block}--><!--{/if}-->
	<!--{if $_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)}--><!--{block slist[group]}--><li><a href="javascript:;" rel="group">$_G['setting']['navs'][3]['navname']</a></li><!--{/block}--><!--{/if}-->
	<!--{block slist[user]}--><li><a href="javascript:;" rel="user">{lang users}</a></li><!--{/block}-->
<!--{/if}-->
<!--{if $_G['setting']['search'] && $slist}-->
<div class="scbar" class="{if $_G['setting']['srchhotkeywords'] && count($_G['setting']['srchhotkeywords']) > 5}scbar_narrow {/if}cl">
	<form id="scbar_form" method="{if $_G[fid] && !empty($searchparams[url])}get{else}post{/if}" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="{if $_G[fid] && !empty($searchparams[url])}$searchparams[url]{else}search.php?searchsubmit=yes{/if}" target="_blank">
		<input type="hidden" name="mod" id="scbar_mod" value="search" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<input type="hidden" name="srchtype" value="title" />
		<input type="hidden" name="srhfid" value="$_G[fid]" />
		<input type="hidden" name="srhlocality" value="$_G['basescript']::{CURMODULE}" />
		<!--{if !empty($searchparams[params])}-->
			<!--{loop $searchparams[params] $key $value}-->
			<!--{eval $srchotquery .= '&' . $key . '=' . rawurlencode($value);}-->
			<input type="hidden" name="$key" value="$value" />
			<!--{/loop}-->
			<input type="hidden" name="source" value="discuz" />
			<input type="hidden" name="fId" id="srchFId" value="$_G[fid]" />
			<input type="hidden" name="q" id="cloudsearchquery" value="" />
			
            <div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
                <div id="st_box" cellpadding="2" cellspacing="0"></div>
            </div>
		<!--{/if}-->
		
			<dl>
				<dt class="scbar_type_td"><a href="javascript:;" id="scbar_type" onclick="showMenu(this.id)" hidefocus="true">{lang search}</a></dt>
				<dt class="scbar_txt_td"><input type="text" name="srchtxt" id="scbar_txt" value="{lang enter_content}" autocomplete="off" x-webkit-speech speech /></dt>
				
				<dt class="time_scbar"><input type="submit" name="searchsubmit" sc="1" value="{lang search}" /></dt>
				
			</dl>
		
	</form>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><!--{echo implode('', $slist);}--></ul>
<script type="text/javascript">
	initSearchmenu('scbar', '$searchparams[url]');
</script>
<!--{/if}-->
