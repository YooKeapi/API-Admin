<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"D:\phpStudy\PHPTutorial\WWW\site\api-admin\public/../application/index\view\index\doc.html";i:1611920323;}*/ ?>
<html lang="zh-cmn-Hans">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp">
<title><?php echo $api['name']; ?></title>
<link rel="stylesheet" href="/public/static/doc/css/mdui.min.css">
<link rel="stylesheet" href="/public/static/doc/css/github-gist.css">
<link rel="stylesheet" href="/public/static/doc/css/railscasts.css">
<link rel="stylesheet" href="/public/static/doc/css/docs.css">
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
<script src="/Public/editormd/lib/marked.min.js"></script>
<script src="/Public/editormd/lib/prettify.min.js"></script>
<script src="/Public/editormd/lib/raphael.min.js"></script>
<script src="/Public/editormd/lib/underscore.min.js"></script>
<script src="/Public/editormd/lib/sequence-diagram.min.js"></script>
<script src="/Public/editormd/lib/flowchart.min.js"></script>
<script src="/Public/editormd/lib/jquery.flowchart.min.js"></script>
<script src="/Public/editormd/editormd.js"></script>
<script type="text/javascript">
      $(function () {
          editormd.markdownToHTML("doc-content");
      })
    </script>
</head>
<body class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-accent-pink mdui-loaded mdui-theme-primary-deep-purple">
<header class="mdui-appbar mdui-appbar-fixed">
<div class="mdui-toolbar mdui-color-theme">
	<span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#main-drawer', swipe: true}"><i class="mdui-icon material-icons">menu</i></span>
	<a href="<?php echo $info['url']; ?>" class="mdui-typo-headline mdui-hidden-xs"><?php echo $info['title']; ?></a>
	<div class="mdui-toolbar-spacer">
	</div>
	<span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-dialog="{target: '#dialog-docs-theme'}" mdui-tooltip="{content: '设置主题'}"><i class="mdui-icon material-icons">color_lens</i></span>
	<a href="<?php echo $info['url']; ?>" target="_blank" class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-tooltip="{content: '主页'}">
	<i class="mdui-icon material-icons">&#xe84f;</i>
	</a>
</div>
</header>
<div class="mdui-drawer" id="main-drawer">
	<div class="mdui-list" mdui-collapse="{accordion: true}" style="margin-bottom: 76px;">
		<?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lists): $mod = ($i % 2 );++$i;?>
			<div class="mdui-collapse-item">
				<div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
					<i class="mdui-list-item-icon mdui-icon material-icons "><?php echo $lists['icon']; ?></i>
					<?php if(($lists['sort'] == 0)): ?> 
					<div class="mdui-list-item-content">
						<a href="<?php echo $lists['doc']; ?>"><?php echo $lists['name']; ?></a>
					</div>
					<?php else: ?>
					<div class="mdui-list-item-content">
						<?php echo $lists['name']; ?>
					</div>
					<?php endif; if(($lists['sort'] == 1)): ?> 
					<i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
					<?php endif; ?>
				</div>
				<?php if(is_array($lists['nr']) || $lists['nr'] instanceof \think\Collection || $lists['nr'] instanceof \think\Paginator): $i = 0; $__LIST__ = $lists['nr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?>
				<div class="mdui-collapse-item-body mdui-list">
					<a href="<?php echo $sub['doc']; ?>" class="mdui-list-item mdui-ripple "><?php echo $sub['name']; ?></a>
				</div>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
<a id="anchor-top"></a>
<div class="mdui-container doc-container">
	<div class="mdui-typo">
		<h1 class="doc-title mdui-text-color-theme"><?php echo $api['name']; ?></h1>
	</div>
	<div class="doc-intro mdui-typo">
		<ul>
			<li><?php echo $api['miaoshu']; ?></li>
		</ul>
	</div>
	<nav class="doc-toc mdui-text-color-theme">
		<ul>
		  <li>
			<a data-scroll href="#style">使用教程</a>
			<ul>
			  <li><a data-scroll href="#1">请求地址</a></li>
			  <li><a data-scroll href="#2">返回数据</a></li>
			  <li><a data-scroll href="#3">调用效果</a></li>
			</ul>
		  </li>
		  <li><a data-scroll href="#type">请求参数</a></li>
		</ul>
	  </nav>
	<div class="doc-cover">
	</div>
	<div class="doc-chapter">
		<div class="mdui-typo">
			<h2 class="doc-chapter-title doc-chapter-title-first mdui-text-color-theme">使用教程 <a class="doc-anchor" id="style"></a></h2>
		</div>
		<div class="mdui-typo">
			<p id="1">
				请求地址：<a><code id="URL" onclick="myCopyFunction()"><?php echo $info['url']; ?><?php echo $api['url']; ?></code></a>
			</p>
			<p id="2">
				返回数据：<code><?php echo $api['request']; ?></code>
			</p>
		</div>
		<div class="doc-example">
			<div class="doc-example-tools">
				<a href="javascript:;" class="viewsource" mdui-tooltip="{content: '查看代码'}"><i class="mdui-icon material-icons">code</i></a>
			</div>
			<div class="doc-example-demo-label">
				Example
			</div>
			<div class="doc-example-demo">
				<p id="3">
					调用效果：<code>
            <?php echo $api['demo']; ?>
					</code>
				</p>
			</div>
			<pre class="doc-example-code">
				<code class="lang-html hljs xml"><span class="hljs-tag"><?php echo $api['democode']; ?></span></code>
			</pre>
		</div>
		<div class="mdui-typo" id="type">
			<h2 class="doc-chapter-title mdui-text-color-theme">请求参数</h2>
			<div class="mdui-table-fluid">
           <?php echo $api['type']; ?>
			</div>
		</div>
	</div>
</div>
<div class="mdui-dialog" id="dialog-docs-theme">
	<div class="mdui-dialog-title">
		设置文档主题
	</div>
	<div class="mdui-dialog-content">
		<p class="mdui-typo-title">
			主题色
		</p>
		<div class="mdui-row-xs-1 mdui-row-sm-2 mdui-row-md-3">
			<div class="mdui-col">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-layout" value="" checked="">
				<i class="mdui-radio-icon"></i>
            Light
				</label>
			</div>
			<div class="mdui-col">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-layout" value="dark">
				<i class="mdui-radio-icon"></i>
            Dark
				</label>
			</div>
		</div>
		<p class="mdui-typo-title mdui-text-color-theme">
			主色
		</p>
		<form class="mdui-row-xs-1 mdui-row-sm-2 mdui-row-md-3">
			<div class="mdui-col mdui-text-color-amber">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="amber">
				<i class="mdui-radio-icon"></i>
            Amber
				</label>
			</div>
			<div class="mdui-col mdui-text-color-blue">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="blue">
				<i class="mdui-radio-icon"></i>
            Blue
				</label>
			</div>
			<div class="mdui-col mdui-text-color-blue-grey">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="blue-grey">
				<i class="mdui-radio-icon"></i>
            Blue Grey
				</label>
			</div>
			<div class="mdui-col mdui-text-color-brown">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="brown">
				<i class="mdui-radio-icon"></i>
            Brown
				</label>
			</div>
			<div class="mdui-col mdui-text-color-cyan">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="cyan">
				<i class="mdui-radio-icon"></i>
            Cyan
				</label>
			</div>
			<div class="mdui-col mdui-text-color-deep-orange">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="deep-orange">
				<i class="mdui-radio-icon"></i>
            Deep Orange
				</label>
			</div>
			<div class="mdui-col mdui-text-color-deep-purple">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="deep-purple">
				<i class="mdui-radio-icon"></i>
            Deep Purple
				</label>
			</div>
			<div class="mdui-col mdui-text-color-green">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="green">
				<i class="mdui-radio-icon"></i>
            Green
				</label>
			</div>
			<div class="mdui-col mdui-text-color-grey">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="grey">
				<i class="mdui-radio-icon"></i>
            Grey
				</label>
			</div>
			<div class="mdui-col mdui-text-color-indigo">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="indigo" checked="">
				<i class="mdui-radio-icon"></i>
            Indigo
				</label>
			</div>
			<div class="mdui-col mdui-text-color-light-blue">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="light-blue">
				<i class="mdui-radio-icon"></i>
            Light Blue
				</label>
			</div>
			<div class="mdui-col mdui-text-color-light-green">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="light-green">
				<i class="mdui-radio-icon"></i>
            Light Green
				</label>
			</div>
			<div class="mdui-col mdui-text-color-lime">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="lime">
				<i class="mdui-radio-icon"></i>
            Lime
				</label>
			</div>
			<div class="mdui-col mdui-text-color-orange">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="orange">
				<i class="mdui-radio-icon"></i>
            Orange
				</label>
			</div>
			<div class="mdui-col mdui-text-color-pink">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="pink">
				<i class="mdui-radio-icon"></i>
            Pink
				</label>
			</div>
			<div class="mdui-col mdui-text-color-purple">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="purple">
				<i class="mdui-radio-icon"></i>
            Purple
				</label>
			</div>
			<div class="mdui-col mdui-text-color-red">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="red">
				<i class="mdui-radio-icon"></i>
            Red
				</label>
			</div>
			<div class="mdui-col mdui-text-color-teal">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="teal">
				<i class="mdui-radio-icon"></i>
            Teal
				</label>
			</div>
			<div class="mdui-col mdui-text-color-yellow">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-primary" value="yellow">
				<i class="mdui-radio-icon"></i>
            Yellow
				</label>
			</div>
		</form>
		<p class="mdui-typo-title mdui-text-color-theme-accent">
			强调色
		</p>
		<form class="mdui-row-xs-1 mdui-row-sm-2 mdui-row-md-3">
			<div class="mdui-col mdui-text-color-amber">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="amber">
				<i class="mdui-radio-icon"></i>
            Amber
				</label>
			</div>
			<div class="mdui-col mdui-text-color-blue">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="blue">
				<i class="mdui-radio-icon"></i>
            Blue
				</label>
			</div>
			<div class="mdui-col mdui-text-color-cyan">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="cyan">
				<i class="mdui-radio-icon"></i>
            Cyan
				</label>
			</div>
			<div class="mdui-col mdui-text-color-deep-orange">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="deep-orange">
				<i class="mdui-radio-icon"></i>
            Deep Orange
				</label>
			</div>
			<div class="mdui-col mdui-text-color-deep-purple">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="deep-purple">
				<i class="mdui-radio-icon"></i>
            Deep Purple
				</label>
			</div>
			<div class="mdui-col mdui-text-color-green">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="green">
				<i class="mdui-radio-icon"></i>
            Green
				</label>
			</div>
			<div class="mdui-col mdui-text-color-indigo">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="indigo">
				<i class="mdui-radio-icon"></i>
            Indigo
				</label>
			</div>
			<div class="mdui-col mdui-text-color-light-blue">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="light-blue">
				<i class="mdui-radio-icon"></i>
            Light Blue
				</label>
			</div>
			<div class="mdui-col mdui-text-color-light-green">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="light-green">
				<i class="mdui-radio-icon"></i>
            Light Green
				</label>
			</div>
			<div class="mdui-col mdui-text-color-lime">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="lime">
				<i class="mdui-radio-icon"></i>
            Lime
				</label>
			</div>
			<div class="mdui-col mdui-text-color-orange">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="orange">
				<i class="mdui-radio-icon"></i>
            Orange
				</label>
			</div>
			<div class="mdui-col mdui-text-color-pink">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="pink" checked="">
				<i class="mdui-radio-icon"></i>
            Pink
				</label>
			</div>
			<div class="mdui-col mdui-text-color-purple">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="purple">
				<i class="mdui-radio-icon"></i>
            Purple
				</label>
			</div>
			<div class="mdui-col mdui-text-color-red">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="red">
				<i class="mdui-radio-icon"></i>
            Red
				</label>
			</div>
			<div class="mdui-col mdui-text-color-teal">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="teal">
				<i class="mdui-radio-icon"></i>
            Teal
				</label>
			</div>
			<div class="mdui-col mdui-text-color-yellow">
				<label class="mdui-radio mdui-m-b-1">
				<input type="radio" name="doc-theme-accent" value="yellow">
				<i class="mdui-radio-icon"></i>
            Yellow
				</label>
			</div>
		</form>
	</div>
	<div class="mdui-divider">
	</div>
	<div class="mdui-dialog-actions">
		<button class="mdui-btn mdui-ripple mdui-float-left" mdui-dialog-cancel="">恢复默认主题</button>
		<button class="mdui-btn mdui-ripple" mdui-dialog-confirm="">ok</button>
	</div>
</div>
<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "https://hm.baidu.com/hm.js?<?php echo $info['baidutongji']; ?>";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
	<script>
		function myCopyFunction() {
		  var myText = document.createElement("textarea")
		  myText.value = document.getElementById("URL").innerHTML;
		  document.body.appendChild(myText)
		  myText.focus();
		  myText.select();
		  document.execCommand('copy');
		  document.body.removeChild(myText);
		  mdui.snackbar("请求链接已复制");
		}
	</script>
<script src="/public/static/doc/js/smooth-scroll.min.js"></script>
<script src="/public/static/doc/js/holder.min.js"></script>
<script src="/public/static/doc/js/highlight.pack.js"></script>
<script src="/public/static/doc/js/mdui.min.js"></script>
<script>var $$ = mdui.JQ;</script>
<script src="/public/static/doc/js/docs.js"></script>
<?php echo $info['code']; ?>
</body>
</html>