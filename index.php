<!DOCTYPE html>
<html>
<head>
    <title>刘强个人网站</title>
    <!--手机响应式显示-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="刘强，强哥，自讽，不敢为天下，PHP，个人网站，计算机，编程，代码，游戏，朋友 ，旅游，电影，音乐，PUA，撩妹"/>
    <meta name="description" content="这是刘强自己的个人网站，主要从事计算机web方向，HTML，CSS，DIV，PHP，mysql，Laravel，框架，游戏，电影等"/>
    <meta name="myname" content="刘强"/>
    <meta name="myid" content="自讽"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!--手机响应式显示-->
    <!--引入css文件-->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/swipebox.css">
    <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon"/>
    <!--//引入结束-->
    <!--jQuery文件引入-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //jQuery文件引入结束 -->
    <!--web-字体引入-->
    <link href='//fonts.googleapis.com/css?family=Overlock:400,400italic,700,700italic,900,900italic' rel='stylesheet'
          type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <!--//web-字体引入结束-->
    <!--启动导航平滑滚动-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!--//结束导航平滑滚动-->
</head>
<body>
<!-- 百度分享按钮开始 -->
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"2","bdPos":"right","bdTop":"100"},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<!-- 百度分享按钮结束 -->
<!--banner-->
<div id="home" class="banner">
    <div class="banner-info">
        <div class="container">
            <div class="col-md-4 header-left">
                <img src="images/head.jpg" alt=""/>
            </div>
            <div class="col-md-8 header-right">
                <h2>HelloWorld!</h2>
                <h1>我是刘强</h1>
                <h6>未来的程序猿</h6>
                <ul class="address">
                    <li>
                        <ul class="address-text">
                            <li><b>出生日期</b></li>
                            <li>1996-08-01</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="address-text">
                            <li><b>电话</b></li>
                            <li>+86 13330295142</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="address-text">
                            <li><b>地址</b></li>
                            <li>中国-重庆-垫江</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="address-text">
                            <li><b>邮箱</b></li>
                            <li>1090035743@qq.com</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="address-text">
                            <li><b>个人网站</b></li>
                            <li><a href="http://www.joker1996.com" target="_blank">www.joker1996.com</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="address-text">
                            <li><b>个人博客</b></li>
                            <li><a href="http://blog.joker1996.com" target="_blank">blog.joker1996.com</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="address-text">
                            <li><b>个人论坛</b></li>
                            <li><a href="http://utopia.joker1996.com" target="_blank">utopia.joker1996.com</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="address-text">
                            <li><b>个人聊天室</b></li>
                            <li><a href="http://webchat.joker1996.com" target="_blank">webchat.joker1996.com</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//banner-->
<!--top-导航栏-->
<div class="top-nav wow">
    <div class="container">
        <div class="navbar-header logo">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                Menu
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="menu">
                <ul class="nav navbar">
                    <li><a href="#about" class="scroll">关于我</a></li>
                    <li><a href="#work" class="scroll">工作经验</a></li>
                    <li><a href="#education" class="scroll">受过教育</a></li>
                    <li><a href="#skills" class="scroll">掌握技能</a></li>
                    <li><a href="#projects" class="scroll">我的项目</a></li>
                    <li><a href="https://github.com/g1090035743" target="_blank">Github</a></li>
                    <li><a href="#contact" class="scroll">给我留言</a></li>
                </ul>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--//top-导航栏结束-->
<!--关于我-->
<div id="about" class="about">
    <div class="container">
        <h3 class="title">关于我</h3>
        <div class="col-md-8 about-left">
            <p>我，隐藏在茫茫人海中。我既没有柔美的身段，也没有亮丽的双眸，但我有进取的心，有似水的梦怀，有崇高的理想，我坚信腹有诗书气自华。 </p>
            <p>
                我，不愿随波逐流。在《未选择的路》中弗罗斯特曾写过：“黄色的树林里分出两条路，可惜我不能同时去涉足。”“而我选择了人迹更少的一条，从此决定了我一生的道路。”只融于大众的我便成为了实实在在的平凡人。我不愿去走别人庸俗的老路，去过跟别人同样庸俗的生活。在偷觑他人的同时，也否定了自己。 </p>
            <p>
                在《中庸》中，我领会到了知识的主要性，知识真的能改变一个人的运气。子曰：“好学近乎知，力行近乎仁，知耻近乎勇”，学习可以转变人的思惟境界和文化层次。博学之，审讯之，慎思之，明辨之，笃行之。这是学习的五个层次，正所谓质变才能达到量变，在我们积聚量的时候，一定要以中庸的态度来面对事情，以平和的心态处理事情。 </p>
            <p>
                我，幽默宽容。我向来不喜欢看别人满面怒容的样子，我认为他人的笑才是天下最美的风景。所以每天，我都会变成一颗开心果，尽可能地给他们带去欢乐。“比大地宽阔的是海洋，比海洋宽阔的是天空，比天空宽阔的是人的心灵。”宽容使狭隘的胸怀容纳百川，所以对待别人的过失，我都付笑谈中。 </p>
            <p>
                我，要做自己。齐白石老先生曾说过；“学我者生，似我者死。”走不出前人的框架，自然也就不会有自己的天地。当流行泡沫小说时，我感觉那时在浪费时间，当流行网络游戏时，我感觉那是在虚度青春。要做自己，看清真实的我，拿出十二分的信心，告诉自己：“我就是我，凭什么跟他一样？！”抛掉那些人为的浮华雕饰，亮出自己的王牌，追求自己的个性，做我自己，最好！ </p>
            <p>
                我，积极进取。小小的我是一粒沙，但不甘于落后，一生庸碌无为。人皆曰予知，择乎中庸而不能期月守也！我愿做生命的酋长，做一粒不朽的珍珠泪。路漫漫其修远兮，吾将上下而求索。我渴望朝向艺术之塔，文化之巅，事业之厦，庆功之缘，不负这繁花似锦的时代，留一行扎实稳健的足迹，把美和爱洒向人间…… </p>
            <p>
                也许路上会与孤独为伴，但我并不嫌弃它，孤独是灵魂的放射，理性的落寞，也是思想的高度，人生的境界。它没有声音却有思想，没有外延却有内涵，孤独是一种深刻的诠释，是不能替代的美丽。但孤独的另一种说法，亦是自由！ </p>
            <p> 这就是我，风华正茂的我，意气风发的我。</p>
            <p> 这就是我，幽默宽容的我，不甘落后的我。 </p>
        </div>
        <div class="col-md-4 about-right">
            <ul>
                <h5>人生格言</h5>
                <li><span class="glyphicon glyphicon-menu-right"></span>身体发肤，受之父母，不敢毁伤，孝之始也。立身行道，扬名于后世，以显父母，孝之终也。---《孝经·开宗明义章》
                </li>
                <li><span class="glyphicon glyphicon-menu-right"></span>好学近乎知，力行近乎仁，知耻近乎勇。 --- 《礼记·中庸》</li>
                <li><span class="glyphicon glyphicon-menu-right"></span>大丈夫处其厚，不居其薄；处其实，不居其华。---《道德经》</li>
                <li><span class="glyphicon glyphicon-menu-right"></span>生即验之，多时君悔之，往往为其当为，而无成事。</li>
                <li><span class="glyphicon glyphicon-menu-right"></span>要之非子立于彼，而汝正朝何方移。</li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--//关于我结束-->
<!--工作经验-->
<div id="work" class="work">
    <div class="container">
        <h3 class="title">工作经验</h3>
        <h2>暂无工作经验！等几年再来看吧~~</h2>
        <!--<div class="work-info">-->
        <!--<div class="col-md-6 work-left">-->
        <!--<h4>2014 - 2016 </h4>-->
        <!--</div>-->
        <!--<div class="col-md-6 work-right">-->
        <!--<h5><span class="glyphicon glyphicon-briefcase"> </span> Company Name</h5>-->
        <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>-->
        <!--</div>-->
        <!--<div class="clearfix"> </div>-->
        <!--</div>-->
        <!--<div class="work-info">-->
        <!--<div class="col-md-6 work-right work-right2">-->
        <!--<h4>2013 - 2014 </h4>-->
        <!--</div>-->
        <!--<div class="col-md-6 work-left work-left2">-->
        <!--<h5> Company Name <span class="glyphicon glyphicon-briefcase"> </span></h5>-->
        <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>-->
        <!--</div>-->
        <!--<div class="clearfix"> </div>-->
        <!--</div>-->
        <!--<div class="work-info">-->
        <!--<div class="col-md-6 work-left">-->
        <!--<h4>2012 - 2013 </h4>-->
        <!--</div>-->
        <!--<div class="col-md-6 work-right">-->
        <!--<h5><span class="glyphicon glyphicon-briefcase"> </span> Company Name</h5>-->
        <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>-->
        <!--</div>-->
        <!--<div class="clearfix"> </div>-->
        <!--</div>-->
        <!--<div class="work-info">-->
        <!--<div class="col-md-6 work-right work-right2">-->
        <!--<h4>2010 - 2012 </h4>-->
        <!--</div>-->
        <!--<div class="col-md-6 work-left work-left2">-->
        <!--<h5> Company Name <span class="glyphicon glyphicon-briefcase"></span> </h5>-->
        <!--<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo </p>-->
        <!--</div>-->
        <!--<div class="clearfix"> </div>-->
    </div>
</div>
</div>
<!--//工作经验结束-->
<!--受过教育-->
<div id="education" class="education">
    <div class="container">
        <h3 class="title">受过教育</h3>
        <div class="work-info">
            <div class="col-md-6 work-left">
                <h4>2002-2008</h4>
            </div>
            <div class="col-md-6 work-right">
                <h5><span class="glyphicon glyphicon-education"> </span>重庆市垫江县沙坪小学</h5>
                <p>青年有梦想，老年才有回忆。<br>
                    青年时的鲁莽，老年时的悔恨。<br>
                    喜欢童话，是因为把它当成了童年。</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="work-info">
            <div class="col-md-6 work-right work-right2">
                <h4>2008-2011</h4>
            </div>
            <div class="col-md-6 work-left work-left2">
                <h5>重庆市垫江县第四中学<span class="glyphicon glyphicon-education"></span></h5>
                <p>回首初中，回首过往，<br>
                    才发现似水年华这个词真是很贴切。<br>
                    三年，在我的记忆长河中堆满了五彩的石子。<br>
                    三年，验证着我们的成长，记录着岁月的痕迹。<br>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="work-info">
            <div class="col-md-6 work-left">
                <h4>2011-2014</h4>
            </div>
            <div class="col-md-6 work-right">
                <h5><span class="glyphicon glyphicon-education"> </span>重庆市垫江县职业教育中心</h5>
                <p>那年，我们在走廊上打望妹子。<br>
                    那年，我们在厕所抽着廉价的香烟。<br>
                    那年，我们尽情的放纵。<br>
                    怀念我那学生时代最快乐的高中生活。</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="work-info">
            <div class="col-md-6 work-right work-right2">
                <h4>2014-2018</h4>
            </div>
            <div class="col-md-6 work-left work-left2">
                <h5>重庆师范大学<span class="glyphicon glyphicon-education"></span></h5>
                <p>虽然我还未毕业！<br>
                    但是作为一个大三的大学生，我对大学深痛恶觉。<br>
                    大学的老师几乎是垃圾。<br>
                    都说大学是天堂，而在我看来，对于有些人来说，是天堂。<br>
                    对于有些人来说是地狱，我不想去抨击传统的教育。<br>
                    因为这是根深蒂固。要改变的是自己的思想。</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="work-info">
            <div class="col-md-6 work-left">
                <h4>2018-forever</h4>
            </div>
            <div class="col-md-6 work-right">
                <h5><span class="glyphicon glyphicon-education"> </span>社会大学</h5>
                <p>起初，我想进大学想得要死；<br>
                    随后，我巴不得赶快大学毕业好开始工作； <br>
                    接着，我想结婚、想有小孩又想得要命； <br>
                    再来，我又巴望小孩快点长大去上学，好让我回去上班；<br>
                    之后，我每天想退休想得要死；<br>
                    现在，我真的快死了......<br>
                    忽然间，我明白了，我一直忘了真正去活！</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//受过教育结束-->
<!--专业技能-->
<div id="skills" class="skills">
    <div class="container">
        <h3 class="title">掌握技能</h3>
        <div class="skills-info">

            <div class="col-md-6 bar-grids">
                <h6>C Language<span>80%</span></h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" style="width: 80%">
                    </div>
                </div>
                <h6>HTML&CSS<span> 60% </span></h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" style="width: 60%">
                    </div>
                </div>
                <h6>JavaScript&jQuery<span> 80% </span></h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" style="width: 80%">
                    </div>
                </div>
                <h6>SQL+MySql<span> 80% </span></h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" style="width: 80%">
                    </div>
                </div>
                <h6>PHP<span>90%</span></h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" style="width: 90%">
                    </div>
                </div>
                <h6>Laravel<span>80%</span></h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" style="width: 80%">
                    </div>
                </div>
                <h2>理想程序猿只比你多六个一点点！</h2>
                <h3>第 1 个一点点：专注眼下</h3>
                <p>
                    许多新手程序猿的通病，见着哪门技术有前途，就跟随大众去做。也喜欢攀比语言好坏。其实根本没必要。任何专业。只要学精，都是前途。不必跟随大众。大众不一定是对的，真理总是掌握在少数人手中。有新技术出来，不要害怕学不会，也不要患得患失，专注眼下，做好自己该做的！</p>
                <h3>第 2 个一点点：思考力与推动力</h3>
                <p>我认为处理bug、崩溃、调优、入侵等突发事件比编程本身更能体现平庸程序员与理想程序员的差距。
                    当面对一个未知的问题时，如何定位复杂条件下的核心问题、如何抽丝剥茧地分析问题的潜在原因、
                    如何排除干扰还原一个最小的可验证场景、如何抓住关键数据验证自己的猜测与实验，都是体现程序员思考力的最好场景。
                    是的，在衡量理想程序员的标准上，思考力比经验更加重要。
                    学习程序不需要别人去推动你，需要你主动去接受知识，主动去学习知识。比如XX框架版本更新。你要去看。学习是自己的事情！
                </p>
                <h3>第 3 个一点点：Never Say No</h3>
                <p>不要轻易说这个用技术无法实现，也不要轻易说，这个我做不到。既然别人都能做到，你为什么不能做到？技术本身不难。
                    大不了别人10天学的东西，我用100天来学，技术总会掌握。当你用自己的想法做出一个东西时，你会发现潮水般的成就感向你袭来！
                    学技术的人都有一种莫名的骄傲！
                </p>
                <h3>第 4 个一点点：投资未来</h3>
                <p>
                    程序员是一个非常残忍的职业。你所学所用的语言、框架、模式，很可能在数年内就成昨日黄花了；你现在嘲笑的另一群程序员，可能马上就能转身来嘲笑你了。所以理想的程序员除了做好自己的本分，还要花费时间来投资未来。
                    什么是「投资」？投资就是你现在投入的时间，在未来会以更多的时间或者金钱（看看早几年学习iOS的程序员现在的薪酬！）回报你。
                    虽然说专一某一样技术是好的，但是我们也要有包容的心态去对待其他技术。技术总会过时，新的东西随时都会出现。你要随时准备投资。
                    好让未来更好过！
                </p>
            </div>
            <div class="col-md-6 bar-grids">


                <h3>第 5 个一点点：善用工具</h3>
                <ul>
                    <li>搜索引擎</li>
                    <li>不相信重复</li>
                    <li>代码片段</li>
                    <li>善于利用别人的代码</li>
                </ul>
                <p>我刚自学新东西时，总是考百度，甚至写一个页面居中都需要百度来解决我的需求。我一度以为我是一个二手程序猿。
                    但是现在，如果别人问我怎么自学，我还是要回答百度。<br>
                    程序员的成长就像膨胀的圆饼，外面是无边无际的大海，圆饼越大，与大海接触的面也越大，懂的越多，不懂的越多。
                    而计算机科学又是一门更新换代异常迅速的学科，同时也是知识互联网化最好的学科，很难利用传统的科班式有教有学的方法，
                    相反通过搜索引擎则很容易获取到最新的知识。<br>
                    不相信重复，代码写多了，会有人为的直觉判断好的和烂的代码，
                    我的标准是简洁和规范，简洁并不是美感上的标准，重复越少，给自己出错的机会也越少，后期维护的成本也越少。
                    比如，我有两个界面都用到了某个css里面的某个类选择器，我为什么要在每个网页里面写这个类选择器？
                    我完全可以直接把所有的css卸载一个.css文件引用就可以了。节约内容，也加快了访问速度。何乐而不为？<br>
                    如果你不幸丢了三周前的代码，也许你能凭着过人的记忆力把脑子里残余的片段复写出来，但如果丢的是三个月前的代码，恐怕就没有那么好的运气了。
                    理想的程序员会着力找寻有效的资料保存方式，把工作里灵光闪现写下的代码、脚本、配置、 经验等短的片段保存起来，以便任何时候都能复查。
                    比如我，我每用过一个新功能，都会打包成一个函数，久而久之，以后我在遇到相同的需求，我完全可以直接去找我以前的代码。而不需要自己在
                    重新写一遍，这样就提高了编程效率。<br>
                    理想的程序员必须懒惰。对我们来说，时间就是一切。既然有人已经把我所需要的需求都已经做好了。为什么我不直接拿来用呢？这不是抄袭。
                    你敢说你会写HelloWorld，而我写HelloWorld就是抄袭了么？显然不可能！
                </p>
                <h3>第 6 个一点点：管理时间</h3>
                <p>因为我们不能随时随地的去写程序，敲代码。我们也需要放松。记得看过一个段子，上面写的程序猿的学习过程。
                    x 语言入门 —> x 语言应用实践 —> x 语言高阶编程 —> x 语言的科学与艺术 —> 编程之美 —> 编程之道 —> 编程之禅—> 颈椎病康复指南。
                    这虽然是一个段子，但是也说明了，程序猿对身体的消耗。所以要注重锻炼(这点我得面壁)。合理的安排时间，偶尔打打游戏也不是不可以！
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//专业技能结束-->
<!--我的项目-->
<div id="projects" class="portfolio">
    <div class="container">
        <h3 class="title wow zoomInLeft animated" data-wow-delay=".5s">My Projects</h3>
        <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list wow fadeInUp animated" data-wow-delay=".7s">
                    <li class="resp-tab-item"><span>全部项目</span></li>
                    <li class="resp-tab-item"><span>HTML&CSS</span></li>
                    <li class="resp-tab-item"><span>Bootstrap</span></li>
                    <li class="resp-tab-item"><span>Laravel</span></li>
                </ul>
                <div class="clearfix"></div>
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content">
                        <div class="tab_img">
                            <div class="col-md-4 portfolio-grids">
                                <div class="grid">
                                    <a href="images/PersonalWebsite.png" class="swipebox"
                                       title="第一个个人网站，虽然不是响应式，布局也蛮难看，但是也是自己的第一张网页。舍不得删就留下来了。">
                                        <img src="images/PersonalWebsite.png" alt="" class="img-responsive"/>
                                        <div class="figcaption">
                                            <h3>My<span> Project</span></h3>
                                            <p>基于HTML+DIV+CSS+PHP的静态网页</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 portfolio-grids">
                                <div class="grid effect-sarah">
                                    <a href="images/Utopia.png" class="swipebox"
                                       title="一个小型论坛，编辑器自己用js写的，极丑。但是好歹是自己写的。我发现我不适合前端。对美术没感觉！">
                                        <img src="images/Utopia.png" alt="" class="img-responsive"/>
                                        <div class="figcaption">
                                            <h3>My<span> Project</span></h3>
                                            <p>基于HTML+CSS+JS+PHP+MySql的个人论坛</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 portfolio-grids">
                                <div class="grid">
                                    <a href="images/HomePage.png" class="swipebox"
                                       title="完全的响应式，许多代码都是用的别人的CSS。不过没关系，前面说过，程序猿就是要用别人的代码！">
                                        <img src="images/HomePage.png" alt="" class="img-responsive"/>
                                        <div class="figcaption">
                                            <h3>My<span> Project</span></h3>
                                            <p>基于html+css+bootstrap的响应式网站</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 portfolio-grids">
                                <div class="grid">
                                    <a href="images/blog.png" class="swipebox" title="个人博客，第一次学laravel跟着一个网络视频老师跟着做的。">
                                        <img src="images/blog.png" alt="" class="img-responsive"/>
                                        <div class="figcaption">
                                            <h3>My<span> Project</span></h3>
                                            <p>基于html+css+bootstrap+Ueditor+php+mysql+laravel</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 portfolio-grids">
                                <div class="grid">
                                    <a href="images/WebChat.png" class="swipebox"
                                       title="用laravel做的一个网页聊天室，做出来还是蛮有成就感的！">
                                        <img src="images/WebChat.png" alt="" class="img-responsive"/>
                                        <div class="figcaption">
                                            <h3>My<span> Project</span></h3>
                                            <p>基于html+css+js+Ajax长轮询+jQuery+bootstrap+wangEditor+laravel</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-1 resp-tab-content">
                        <div class="tab_img">
                            <div class="col-md-4 portfolio-grids">
                                <div class="grid">
                                    <a href="images/PersonalWebsite.png" class="swipebox"
                                       title="第一个个人网站，虽然不是响应式，布局也蛮难看，但是也是自己的第一张网页。舍不得删就留下来了。">
                                        <img src="images/PersonalWebsite.png" alt="" class="img-responsive"/>
                                        <div class="figcaption">
                                            <h3>My<span> Project</span></h3>
                                            <p>基于HTML+DIV+CSS+PHP的静态网页</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 portfolio-grids">
                                <div class="grid">
                                    <a href="images/Utopia.png" class="swipebox"
                                       title="一个小型论坛，编辑器自己用js写的，极丑。但是好歹是自己写的。我发现我不适合前端。对美术没感觉！">
                                        <img src="images/Utopia.png" alt="" class="img-responsive"/>
                                        <div class="figcaption">
                                            <h3>My<span> Project</span></h3>
                                            <p>基于HTML+CSS+JS+PHP+MySql的个人论坛</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-1 resp-tab-content">
                        <div class="tab_img">
                            <div class="col-md-4 portfolio-grids">
                                <div class="grid">
                                    <a href="images/HomePage.png" class="swipebox"
                                       title="完全的响应式，许多代码都是用的别人的CSS。不过没关系，前面说过，程序猿就是要用别人的代码！">
                                        <img src="images/HomePage.png" alt="" class="img-responsive"/>
                                        <div class="figcaption">
                                            <h3>My<span> Project</span></h3>
                                            <p>基于html+css+bootstrap的响应式网站</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-1 resp-tab-content">
                        <div class="tab_img">
                            <div class="col-md-4 portfolio-grids">
                                <div class="grid">
                                    <a href="images/blog.png" class="swipebox" title="个人博客，第一次学laravel跟着一个网络视频老师跟着做的。">
                                        <img src="images/blog.png" alt="" class="img-responsive"/>
                                        <div class="figcaption">
                                            <h3>My<span> Project</span></h3>
                                            <p>基于html+css+js+bootstrap+Ueditor+php+mysql+laravel</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 portfolio-grids">
                                <div class="grid">
                                    <a href="images/WebChat.png" class="swipebox"
                                       title="用laravel做的一个网页聊天室，做出来还是蛮有成就感的！">
                                        <img src="images/WebChat.png" alt="" class="img-responsive"/>
                                        <div class="figcaption">
                                            <h3>My<span> Project</span></h3>
                                            <p>基于html+css+js+Ajax长轮询+jQuery+bootstrap+wangEditor+laravel</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--我的项目标签响应-->
        <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
                });
            });
        </script>
        <!--//我的项目标签响应结束-->
        <!-- 引入swipe box js -->
        <script src="js/jquery.swipebox.min.js"></script>
        <script type="text/javascript">
            jQuery(function ($) {
                $(".swipebox").swipebox();
            });
        </script>
        <!-- //引入swipe box js结束 -->
    </div>
</div>
<!--//我的项目结束-->
<!--留言区域 -->
<div class="welcome contact" id="contact">
    <div class="container">
        <h3 class="title">Message</h3>
        <div class="contact-row">
            <div class="col-md-6 contact-left">
                <iframe name="map" src="map.html"></iframe>
            </div>
            <div class="col-md-6 contact-right">
                <div class="address-left">
                    <p id="position"></p>
                </div>
                <div class="address-right">
                    <p>联系我: +86 13330295142</p>
                    <p>E-mail : <a href="https://en.mail.qq.com/cgi-bin/loginpage">1090035743@qq.com</a></p>
                </div>
                <div class="clearfix"></div>
                <div class="contact-form">
                    <form action="index.php" method="post">

                        <input class="phone" name="Name" type="text" placeholder="Name" required="">
                        <textarea name="Message" placeholder="Message" required=""></textarea>
                        <input type="submit" value="留言">
                        <input id="hidden" type="hidden" name="position">
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <br>
    <div align="center" class="down">
        <?php
        //			header("Content-type: text/personalWebsite; charset=utf-8");
        //整个php界面用utf-8形式输出
        $servername = "localhost";
        $username = "root";
        $password = "JokerHosting520";
        $dbName = "message";
        //			//设置时间格式
        //			}
        $conn = mysqli_connect($servername, $username, $password, $dbName);
        //也可以直接用那个mysqli把数据库加上去
        //$conn = mysqli_connect($servername, $username, $password,$dbName);
        $rowsPerPage = 10;
        //定义每页的行数
        mysqli_query($conn, "set names utf8;");
        $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT count(*) AS c FROM homepage_message"));
        //查询表中的总记录数以别名方式保存在row中
        $rows = $row['c'];
        //得到表中总记录数，转换字符串为数值型！
        $pages = ceil($rows / $rowsPerPage);
        //计算出页数
        $curPage = 1;
        //当前要显示第几页，默认显示第1页
        //$_REQUEST变量比较大，一般不用。常用的是$_POST,$_GET，二者与form表单method保持一致。$_GET还支持url传值
        if (!(empty($_POST['Name']) && empty($_POST['Message']))) {
            @$sql = "INSERT INTO `homepage_message` (`昵称`,`留言内容`,`日期`,`位置`) VALUES ('$_POST[Name]',  '$_POST[Message]',now(),'$_POST[postion]');";
            //直接运行的话，这一行会报错，加上@的话，就是报错的话或是警告不要输出,这里的字段必须用`分割，不能用""或者''。//为空的话就不添加内容
            @mysqli_query($conn, $sql);
            //如果上句代码为空成立的话，那么这句话链接查询会报错，加上@符号，报错不输出！
        }
        if (isset($_GET['curPage']))//假如用户提交了指定的页数
            $curPage = $_GET['curPage'];
        // 就将欲显示的页数设定为用户指定的值
        //倒序查询
        //echo $curPage;
        $sql = "SELECT * FROM homepage_message ORDER BY id DESC" . " LIMIT " . ($curPage - 1) * $rowsPerPage . ", $rowsPerPage";
        //修改sql语句，使得可以查询出指定的结果集
        //echo $sql;
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        //列表显示----------显示部分内容不变
        date_default_timezone_set('PRC');
        //设置时区为中国
        ?>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<div style='width: 100%;height:1px;margin-bottom:0px;border-bottom:2px dashed black;'></div>";
            //分割线设置
            echo "<p style='text-align: left;font-family: arial;'>";
            //输入的留言内容的字体属性设置
            echo "&nbsp;&nbsp;<span style='color: blue;'>" . $row["昵称"] . "</span>" . "</br>" . "</br>&nbsp;&nbsp;" . $row["留言内容"] . '</br>' . '</br>&nbsp;&nbsp;' . $row["日期"] . '</br>';
            echo "</p>";

        }
        //循环输出，并显示留言时间！
        echo "<div style='width: 100%;height:1px;border-bottom:2px dashed black;'></div>";
        //分割线设置
        echo "<div align = 'center'>";
        for ($i = 1; $i <= $pages; $i++) {//循环显示，每个链接指定curPage属性为其指向的页数就可以了
            echo "<a href='index.php?curPage=$i'>$i</a>  ";
        }
        //下拉框分页，有多少页，产生 多少页的a标记链接！
        ?>
        <!--选择页数按钮的设置-->
        <p align="center" class="bottom">
            <!--页面设置放在底部！-->
            <?php
            if ($curPage > 1) {
                echo "<a href = 'index.php?curPage=1'>首页</a>  ";
                echo "<a href = 'index.php?curPage=" . ($curPage - 1) . "'>上一页</a>  ";
            }
            //如果不是第一页的话就有上一页和首页的标记。
            if ($curPage < $pages) {
                echo "<a href='index.php?curPage=" . ($curPage + 1) . "'>下一页</a>  ";
                echo "<a href = 'index.php?curPage=$pages'>末页</a>  ";
            }
            //如果不是最后一页的话就有下一页和最后一页的标记
            echo "</div>";
            //列表显示完毕
            echo "<div  style='font-size:20px;'>";
            echo "</div>";
            mysqli_free_result($result);
            //释放结果内存,这样的话可以减少内存垃圾!
            mysqli_close($conn);
            //最后关闭数据库!
            ?>
        </p>
    </div>
</div>
<!--//留言区域结束 -->

<!--脚注-->
<div class="footer">
    <div class="container">
        <p>© 2016 My Project. All rights reserved | Design by <a href="http://www.joker1996.com">www.joker1996.com</a>
        </p>
        <p><img style="width: 18px;height: 18px;border-radius: 9px; " src="images/icp.jpg" alt=""><a style="color: #fff;font-size: 15px; " href="http://www.beianbeian.com/beianxinxi/565ec5c4-fc40-4060-ba09-93bb6239c0e8.html">备案/许可证号：渝ICP备16007281号</a></p>
    </div>
</div>
<!--//脚注结束-->
<!--移动的平滑滚动-->
<script type="text/javascript">
    $(document).ready(function () {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!--//移动的平滑滚动结束-->
<!-- 放置在文档的结尾，使页面加载速度更快 -->
<script>
    function cityPosition(position) {
        document.getElementById('position').innerHTML = '当前位置<br>' + position;
        document.getElementById('hidden').value = position;
    }
    //        返回当前位置
</script>
<script src="js/bootstrap.js"></script>
</body>
</html>