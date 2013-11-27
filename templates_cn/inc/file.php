<?php
/*  
  Copyright (c) 2010-02 Game
  Game All Rights Reserved. 
  QQ:1834219632
  Author: Version:1.0
  Date:2011-12-9
*/

$htmlsrc1='<table class="ths" border="0" cellpadding="0" cellspacing="0" style="margin-top:0px">
    <tr height="24">
        <td class="bolds wanfa">广东快乐十分 <span style="color:#0033FF; font-weight:bold; margin-left:10px;" id="tys">'.$types.'</span></td>
        <td align="left" class="bolds" style="color:#FF0000">
        	<div id="row1" style="FONT-FAMILY: Arial; color: red;"> <span>今天输赢：</span></div>
            <div id="row2"><span id="sy" style="font-size:14px;position:relative; top:-2px">0</span></div>
        </td>
        <td  class="bolds klsfhm" align="right" colspan="2">
            <span id="n" style="line-height:25px;"></span>期开奖<div id="a">&nbsp;</div><div id="b">&nbsp;</div><div id="c">&nbsp;</div><div id="d">&nbsp;</div><div id="e">&nbsp;</div><div id="f">&nbsp;</div><div id="g">&nbsp;</div><div id="h">&nbsp;</div>
        </td>
    </tr>
    <tr height="25">
        <td width="25%"><span id="o" style="color:#009900; font-weight:bold;top:1px"></span>期</td>
        <td width="29%">距离封盘：<span style="font-size:104%" id="endTime">00:00</span></td>
      	<td width="25%">距离开奖：<span style="color:red;font-size:104%" id="endTimes">00:00</span></td>
        <td width="21%" align="right"><span id="endTimea"></span>秒</td>
    </tr>
</table>
<input type="hidden" id="mix" value="'.$ConfigModel['g_mix_money'].'"><div id="look" style="display:none"></div> ';

echo $htmlsrc1.$htmlsrc2;



?>