<?php /* Smarty version Smarty-3.1.12, created on 2016-11-10 15:16:03
         compiled from "../tpl/w/article.html" */ ?>
<?php /*%%SmartyHeaderCode:133478611658241eb38a7099-48433441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76e22939961644d74a20a42c197c04325cdb6c99' => 
    array (
      0 => '../tpl/w/article.html',
      1 => 1385357906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133478611658241eb38a7099-48433441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'color' => 1,
    't' => 1,
    'time' => 1,
    'tttt' => 1,
    'view' => 1,
    'text' => 1,
    'id' => 0,
    'note' => 1,
    'content' => 1,
    'copy_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58241eb38e1b49_50779581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58241eb38e1b49_50779581')) {function content_58241eb38e1b49_50779581($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script type="text/javascript">
$(document).ready(function() { 
//resizebg();
wait();
if( $.cookie("nickname") !== null) $('.nickname').val($.cookie("nickname"));

//$(window).resize(function() {  resizebg(); } );

var ts='<img src="../img/more.gif" /><span>加载中……</span>';
var stop=true;
function more(t,f,c) { 
  if(stop==true) { 
  stop=false;
    $(".wait").html(ts);
  if(f==0) $(".wait").show();
  $("#mt").text("加载中……");
  $(".mimg").show();
  
$.ajax( { 
type: "GET",

  data: { "type":'comment',"first":f,'eid':$('#aid').val() } ,
cache: false,
timeout:25000,
  url: '../json_w.php',
dataType: "json",

success: function (result) { 

var a='a';

    var item='';
    for(var i=0;i<result.length-1;i++) { 
    var view='';
    if(result[i].type=='message'){ a='div';view=''; } 
      item += '<div class="item" style="background:'+result[i].color+';" href="article.php?id='+result[i].id+'"><img class="point" src="../img/point.png" /><div class="num none">'+result[i].ext+'</div><div class="view left">#'+result[i].lou+'</div>'+view+'<div class="time right"><span class="timed">'+result[i].timed+'</span>日<span class="timem">'+result[i].timem+'</span>月'+result[i].timey+' '+result[i].week+' '+result[i].time+'</div><h1 class="title">'+result[i].title+'</h1><div class="des feeling">'+result[i].des+'</div></div>'; 
    }  
    if(f==0) $(".content").text("");
    $(".content").append(item);
    $(".mimg").hide();
    $("#mt").text("无更多内容");
    if(result.length == 1) { 
      if(t=='message' && f==0) $("#nt").text('没有评论，来一条吧～');
    } 
    else $("#mt").text("查看更多");
    stop=true;
    $(".wait").hide();
 } ,

error: function (result) { 
$(".mimg").hide();
$(".wait").text('加载失败！');
 setTimeout(function(){
$(".wait").hide();
$(".wait").html(ts);
$(".content").text("");
},1000); 
$("#mt").text("加载失败，请重试");
stop=true;
 } 

 } );//ajax

  } 
}

$(".more").click(function() { 
var first=$(".num:last").text();
more('comment',first,10);
 } );


$("#leave").click(function() { 
 $(".wait").html('<img src="../img/more.gif" /><span>提交评论……</span>');
 $(".wait").show();
 $.ajax( { 
type: "POST",

   data: { 'msgcontent':$('.msgcontent').val(),'nickname':$('.nickname').val(),'color':$('input:radio[name="color"]:checked').val(),'id':$('#aid').val() } ,

cache: false,

timeout:25000,

  url: 'leavemsg.php',

dataType: "html",

success: function (result) { 
  if(result=='-1') { 
  $(".wait").text('请输入评论内容！');
 setTimeout(function(){
$(".wait").hide();
$(".wait").html(ts);
},2500);
  } else if(result!='0') { 
  $(".wait").text('评论失败！');
 setTimeout(function(){
$(".wait").hide();
$(".wait").html(ts);
},2500);
  
  } else {
    $("#nt").text("");
    first=0;
    more('comment',0,10);
    $.cookie('nickname',$('.nickname').val(), { 'path':'/','expires':'0' } );
    $('.msgcontent').val("");
    $('#nknm').text($.cookie("nickname")+' ');
    $(".wait").text('评论成功！');
 setTimeout(function() {
$(".wait").hide();
$(".wait").html(ts);
 } ,2500);
 } 
 } ,

error: function (result) { 
$(".wait").text('评论失败！');
setTimeout(function(){
$(".wait").hide();
$(".wait").html(ts);
},2500);
 } 
} );

return false;
} );

 } );
</script>

<style type="text/css">
h1 { 
font-size:24px;
line-height:1.6em;
border-left:6px <?php echo $_smarty_tpl->tpl_vars['color']->value;?>
 solid;
margin:10px 0px;
 } 

 p { text-indent:2em; } 

</style>

</head>
<body>
<div class="content_ext">
<div class="inf">
<a style="color:#444;" href="index.php"><b><<返回微信墙</b></a><br />
<h1><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</h1>
<div class="ext">
时间:<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
<br />
这是一条<b><?php echo $_smarty_tpl->tpl_vars['tttt']->value;?>
</b><br />
点击:<?php echo $_smarty_tpl->tpl_vars['view']->value;?>

</div>
</div>
<div class="text">
<p>
<?php echo $_smarty_tpl->tpl_vars['text']->value;?>

</p>
</div>


<fieldset>
<legend class="lablee">发表评论</legend>
<form action="leavemsg.php" method="post">
<input id="aid" name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
<input name="msgcontent" class="msgcontent" type="text" placeholder="留下你的评论吧～" />
<div style="margin:10px;"><span style="color:#666;">颜色：</span>
<div class="right" style=" border:10px rgb(229,182,0) solid;margin-left:5px;"><input type="radio" name="color" value="rgba(229,182,0,0.7)" /></div>
<div class="right" style=" border:10px rgb(239,112,39) solid;margin-left:5px;"><input type="radio" name="color" value="rgba(239,112,39,0.7)" /></div>
<div class="right" style=" border:10px rgb(0,175,215) solid;margin-left:5px;"><input checked="checked" type="radio" name="color" value="rgba(0,175,215,0.7)" /></div>
  <div class="clear"></div></div>
<input name="nickname" class="nickname" type="text" placeholder="昵称" />
<button id="leave" class="button" style="padding:8px 10px;font-size:18px;">发布</button>
</form>
</fieldset>

<div id="nt"><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</div>
<div class="content">
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>

<hr /><div style="text-align:center;"><span class="more"><img style="display:none;" class="mimg" src="../img/more.gif" /><span id="mt">查看更多</span></span></div>
<hr />
<cite style="text-align:center;display:block;"><?php echo $_smarty_tpl->tpl_vars['copy_info']->value;?>
</cite>
</div>
  <div class="wait"><img src="../img/more.gif" /><span>加载中……</span></div>
<img class="bg_img" style="width:100%;height:100%" src="../img/bg_w.jpg">
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>