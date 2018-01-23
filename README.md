### php--------使用js生成二维码 
 <div class='BlogContent clearfix'>
                    <p>php生成二维码有多种方式，可以在JS中，也可以使用php库，今天写的这个小案例是使用JS生成二维码。</p> 
<p>网站开发中二维码使用也是常用的。</p> 
<span id="OSC_h3_1"></span>
<h3><span style="color:#008080">JS实现二维码</span></h3> 
<p><span style="color:#000000">效果图</span></p> 
<p><span style="color:#000000">&nbsp;&nbsp;&nbsp; <img alt="" src="https://images2017.cnblogs.com/blog/1041439/201801/1041439-20180123094734397-309896976.png"></span></p> 
<p><span style="color:#000000">首先下载一个qrcode.js</span></p> 
<pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;title&gt;JS二维码&lt;/title&gt;
&lt;script src="qrcode.js"&gt;&lt;/script&gt;
&lt;/head&gt;

&lt;style type="text/css"&gt;
    
    #qrcode{
        margin: 15px;
    }
    
&lt;/style&gt;
&lt;body&gt;

&lt;div id="qrcode"&gt;&lt;/div&gt;
&lt;script type="text/javascript"&gt;
    new QRCode(document.getElementById("qrcode"), "http://blog.csdn.net/DickyQie");
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre> 
<p><a href="https://github.com/DickyQie/qrcodejs" rel="nofollow">qrcode.js下载</a></p>
                </div>

