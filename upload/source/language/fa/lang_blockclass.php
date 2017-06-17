<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_blockclass.php by Valery Votintsev, codersclub.org
 *	Translated to Persian by Discuz.ir and vot (discuz.ml)
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(
	'blockclass_html'			=> 'نوع نمایش',//'展示类',

	'blockclass_html_html'			=> 'استاتیک HTML',//'静态模块',
	'blockclass_html_script_blank'		=> 'سفارشی HTML',//'自定义HTML',
	'blockclass_html_script_search'		=> 'جست و جو مقاله ها',//'搜索条',
	'blockclass_html_script_line'		=> 'خط افقی',//'分割线',
	'blockclass_html_script_banner'		=> 'بنر',//'图片横幅',
	'blockclass_html_script_vedio'		=> 'فیلم',//'网络视频',
	'blockclass_html_script_stat'		=> 'آمار',//'数据统计',
	'blockclass_html_script_forumtree'	=> 'لیست انجمن ها',//'版块列表',
	'blockclass_html_script_google'		=> 'گوگــــل',
	'blockclass_html_script_adv'		=> 'تبلیغات سایت',//'站点广告',
	'blockclass_html_script_friendlink'	=> 'لینک های دوست',//'友情链接',
	'blockclass_html_script_sort'		=> 'نوع اسکریپت',//'分类信息',
	'blockclass_html_script_category'	=> 'دسته بندی اسکریپت',//'分类信息',

	'blockclass_html_announcement'			=> 'اطلاعیه ها',//'公告模块',
	'blockclass_announcement_field_url'		=> 'لینک',//'公告链接',
	'blockclass_announcement_field_title'		=> 'اسم',//'公告标题',
	'blockclass_announcement_field_summary'		=> 'خلاصه',//'公告内容',
	'blockclass_announcement_field_starttime'	=> 'زمان شروع',//'开始时间',
	'blockclass_announcement_field_endtime'		=> 'زمان پایان',//'结束时间',
	'blockclass_announcement_script_announcement'	=> 'اطلاعیه های سایت',//'站点公告',

	'blockclass_html_myapp'			=> 'برنامه ها',//'漫游模块',
	'blockclass_myapp_field_url'		=> 'لینک',//'应用链接',
	'blockclass_myapp_field_title'		=> 'نام',//'应用名称',
	'blockclass_myapp_field_icon'		=> 'آیکون',//'应用图标',
	'blockclass_myapp_field_icon_small'	=> 'آیکوم کوچک',//'应用图标(小)',
	'blockclass_myapp_field_icon_abouts'	=> 'آیکون برنامه',//'应用图标(大图)',
	'blockclass_myapp_script_myapp'		=> 'برنامه ها',//'漫游应游用',

	'blockclass_forum'			=> 'انجمن',//'论坛类',

	'blockclass_forum_thread'			=> 'موضوع',//'帖子模块',
	'blockclass_thread_field_url'			=> 'لینک',//'帖子URL',
	'blockclass_thread_field_title'			=> 'اسم',//'帖子标题',
	'blockclass_thread_field_pic'			=> 'تصویر',//'附件图片',
	'blockclass_thread_field_summary'		=> 'خلاصه',//'帖子内容',
	'blockclass_thread_field_author'		=> 'نویسنده',//'楼主',
	'blockclass_thread_field_authorid'		=> 'UID نویسنده',//'楼主UID',
	'blockclass_thread_field_avatar'		=> 'آواتار نویسنده',//'楼主头像',
	'blockclass_thread_field_avatar_middle'		=> 'آواتار متوسط نویسنده',//'楼主头像(中)',
	'blockclass_thread_field_avatar_big'		=> 'آواتار بزرگ نویسنده',//'楼主头像(大)',
	'blockclass_thread_field_forumurl'		=> 'لینک انجمن',//'版块URL',
	'blockclass_thread_field_forumname'		=> 'نام انجمن',//'版块名称',
	'blockclass_thread_field_typename'		=> 'نام فرمت روز',//'主题分类名称',
	'blockclass_thread_field_typeicon'		=> 'آیکون فرمت روز',//'主题分类图标',
	'blockclass_thread_field_typeurl'		=> 'لینک دسته بندی',//'主题分类URL',
	'blockclass_thread_field_sortname'		=> 'نام دسته بندی',//'分类信息名称',
	'blockclass_thread_field_sorturl'		=> 'لینک دسته بندی',//'分类信息URL',
	'blockclass_thread_field_posts'			=> 'ارسال ها',//'总发帖数',
	'blockclass_thread_field_todayposts'		=> 'ارسال های امروز',//'今日发帖数',
	'blockclass_thread_field_lastposter'            => 'زمان آخرین',//'最后回复作者',
	'blockclass_thread_field_lastpost'		=> 'آخرین ارسال',//'最后回复时间',
	'blockclass_thread_field_dateline'		=> 'تاریخ ارسال',//'发帖时间',
	'blockclass_thread_field_replies'		=> 'پاسخ ها',//'回复数',
	'blockclass_thread_field_views'			=> 'نمایش ها',//'总浏览数',
	'blockclass_thread_field_heats'			=> 'داغ',//'热度值',
	'blockclass_thread_field_recommends'		=> 'پیشنهاد ها',//'推荐数',
	'blockclass_thread_field_hourviews'		=> 'مشاهده در ساعت',//'小时浏览数',
	'blockclass_thread_field_todayviews'		=> 'مشاهده امروز',//'今日浏览数',
	'blockclass_thread_field_weekviews'		=> 'مشاهده در هفته',//'本周浏览数',
	'blockclass_thread_field_monthviews'		=> 'مشاهده در ماه',//'本月浏览数',
	'blockclass_thread_script_threaddigest'		=> 'هضم',//'精华帖',
	'blockclass_thread_script_threadhot'		=> 'موضوعات داغ',//'热门帖',
	'blockclass_thread_script_threadstick'		=> 'مهم شده',//'置顶帖',
	'blockclass_thread_script_threadspecial'	=> 'موضوعات ویژه',//'特殊主题帖',
	'blockclass_thread_script_threadnew'		=> 'آخرین موضوع ها',//'最新帖',
	'blockclass_thread_script_threadspecified'	=> 'موضوعات خاص',//'指定帖子',
	'blockclass_thread_script_thread'		=> 'شخصی سازی',//'高级自定义',

	'blockclass_forum_forum'			=> 'انجمن',//'版块模块',
	'blockclass_forum_field_title'			=> 'اسم',//'版块名称',
	'blockclass_forum_field_url'			=> 'لینک',//'版块介绍',
	'blockclass_forum_field_summary'		=> 'خلاصه',//'版块介绍',
	'blockclass_forum_field_icon'			=> 'آیکون',//'版块图标',
	'blockclass_forum_field_posts'			=> 'ارسال ها',//'版块帖子数',
	'blockclass_forum_field_threads'		=> 'موضوعات',//'版块话题数',
	'blockclass_forum_field_todayposts'		=> 'ارسال های امروز',//'版块今日新帖数',
	'blockclass_forum_script_forum'			=> 'زیر انجمن ها',//'论坛版块',

	'blockclass_sort_sort'			=> 'دسته بندی',//'分类信息',
	'blockclass_sort_field_title'		=> 'اسم',//'帖子名称',
	'blockclass_sort_field_url'		=> 'لینک',//'帖子链接',
	'blockclass_sort_field_summary'		=> 'خلاصه',//'帖子介绍',
	'blockclass_sort_script_sort'		=> 'شخصی سازی',//'高级自定义',

	'blockclass_forum_trade'		=> 'انجمن محصولات',//'商品模块',
	'blockclass_trade_trade'		=> 'محصولات',//'商品模块',
	'blockclass_trade_field_title'		=> 'نام محصول',//'商品名称',
	'blockclass_trade_field_url'		=> 'لینک',//'商品链接',
	'blockclass_trade_field_summary'	=> 'خلاصه',//'商品说明',
	'blockclass_trade_field_pic'		=> 'تصویر',//'商品图片地址',
	'blockclass_trade_field_totalitems'	=> 'در حال بازدید',//'商品累计售出数',
	'blockclass_trade_field_author'		=> 'خریدار',//'商品卖家',
	'blockclass_trade_field_authorid'	=> 'آی دی خریدار',//'商品卖家UID',
	'blockclass_trade_field_price'		=> 'قیمت',//'商品价格',
	'blockclass_trade_script_tradenew'	=> 'حصولات جدید',//'新商品',
	'blockclass_trade_script_tradehot'	=> 'محصولات داغ',//'热门商品',
	'blockclass_trade_script_tradespecified'	=> 'محصولات ویژه',//'指定商品',
	'blockclass_trade_script_trade'			=> 'شخصی سازی',//'高级自定义',

	'blockclass_forum_activity'		=> 'رویداد انجمن',//'活动模块',
	'blockclass_activity_activity'		=> 'رویداد ها',//'活动模块',
	'blockclass_activity_field_url'		=> 'لینک',//'活动帖URL',
	'blockclass_activity_field_title'	=> 'عنوان',//'活动标题',
	'blockclass_activity_field_pic'		=> 'تصویر',//'主题图片',
	'blockclass_activity_field_summary'	=> 'خلاصه',//'活动介绍',
	'blockclass_activity_field_time'	=> 'زمان',//'活动时间',
	'blockclass_activity_field_expiration'	=> 'انقضا',//'报名截止时时间',
	'blockclass_activity_field_author'	=> 'نویسنده',//'发起人',
	'blockclass_activity_field_authorid'	=> 'آی دی نویسنده',//'发起人UID',
	'blockclass_activity_field_cost'		=> 'هزینه مشارکت',//'每人花销',
	'blockclass_activity_field_place'		=> 'مکان ها',//'活动地点',
	'blockclass_activity_field_class'		=> 'فرمت',//'活动类型',
	'blockclass_activity_field_gender'		=> 'جنسیت',//'性别要求',
	'blockclass_activity_field_number'		=> 'عدد مورد نیاز',//'需要人数',
	'blockclass_activity_field_applynumber'		=> 'تعداد کاربری',//'已报名人数',
	'blockclass_activity_script_activitynew'	=> 'رویدادهای اخیر',//'最新活动',
	'blockclass_activity_script_activitycity'	=> 'رویدادهای شهرهای مشابه',//'同城活动',
	'blockclass_activity_script_activity'		=> 'شخصی سازی',//'高级自定义',

	'blockclass_portal'			=> 'سردر',//'门户类',

	'blockclass_portal_article'		=> 'مقالات',//'文章模块',
	'blockclass_article_field_url'		=> 'لینک',//'文章链接',
	'blockclass_article_field_title'	=> 'عنوان مقاله',//'文章标题',
	'blockclass_article_field_pic'		=> 'تصویر',//'文章封面',
	'blockclass_article_field_summary'	=> 'خلاصه',//'文章简介',
	'blockclass_article_field_dateline'	=> 'زمان ارسال',//'发布时间',
	'blockclass_article_field_uid'		=> 'UID نویسنده',//'作者UID',
	'blockclass_article_field_username'	=> 'نام نویسنده',//'作者名',
	'blockclass_article_field_avatar'	=> 'آواار کاربر',//'用户头像',
	'blockclass_article_field_avatar_middle'	=> 'آواتار متوسط کاربر',//'用户头像(中)',
	'blockclass_article_field_avatar_big'		=> 'آواتار بزرگ کاربر',//'用户头像(大)',
	'blockclass_article_field_caturl'		=> 'لینک دسته بندی',//'栏目链接',
	'blockclass_article_field_catname'		=> 'نام دسته بندی',//'栏目名称',
	'blockclass_article_field_viewnum'		=> 'نمایش ها',//'查看数',
	'blockclass_article_field_articles'		=> 'مقاله ها',//'文章数',
	'blockclass_article_field_commentnum'		=> 'نظرات',//'评论数',
	'blockclass_article_script_articlenew'		=> 'مقاله های جدید',//'最新文章',
	'blockclass_article_script_articlehot'		=> 'مقاله های داغ',//'热门文章',
	'blockclass_article_script_articlespecified'	=> 'مقالات معین شده',//'指定文章',
	'blockclass_article_script_article'		=> 'شخصی سازی',//'高级自定义',

	'blockclass_portal_category'			=> 'دسته بندی',//'门户栏目',
	'blockclass_category_field_url'			=> 'لینک ',//'栏目链接',
	'blockclass_category_field_title'		=> 'نام',//'栏目名称',
	'blockclass_category_field_articles'		=> 'تعداد مقاله ها',//'文章数',
	'blockclass_category_script_portalcategory'	=> 'دسته بندی',//'文章栏目',

	'blockclass_portal_topic'		=> 'مقالات',//'专题模块',
	'blockclass_topic_field_url'		=> 'لینک',//'专题链接',
	'blockclass_topic_field_title'		=> 'عنوان',//'专题名称',
	'blockclass_topic_field_pic'		=> 'پوشش موضوع',//'专题封面',
	'blockclass_topic_field_summary'	=> 'توضیحات',//'专题介绍',
	'blockclass_topic_field_uid'		=> 'آی دی نویسنده',//'创建者UID',
	'blockclass_topic_field_username'	=> 'نویسنده',//'创建者',
	'blockclass_topic_field_dateline'	=> 'زمان ارسال',//'创建时间',
	'blockclass_topic_field_viewnum'	=> 'مشاهده ها',//'查看数',
	'blockclass_topic_script_topicnew'	=> 'مقاله های جدید',//'最新专题',
	'blockclass_topic_script_topichot'	=> 'مقاله های داغ',//'热门专题',
	'blockclass_topic_script_topicspecified'	=> 'مقالات معین شده',//'指定专题',
	'blockclass_topic_script_topic'			=> 'شخصی سازی',//'高级自定义',
	'blockclass_member'				=> 'کاربران',//'会员类',

	'blockclass_member_member'		=> 'کاربران',//'会员模块',
	'blockclass_member_field_url'		=> 'لینک',//'空间链接',
	'blockclass_member_field_title'		=> 'نام کاربری',//'用户名',
	'blockclass_member_field_avatar'	=> 'آواتار',//'用户头像',
	'blockclass_member_field_avatar_middle'	=> 'آواتار متوسط',//'用户头像(中)',
	'blockclass_member_field_avatar_big'	=> 'آواتار بزرگ',//'用户头像(大)',
	'blockclass_member_field_credits'	=> 'مقدار امتیازات',//'积分数',
	'blockclass_member_field_reason'	=> 'دلایل پیشنهاد شده',//'推荐原因',
	'blockclass_member_field_unitprice'	=> 'قیمت برای دسترسی به یک واحد',//'竟价单次访问单价',
	'blockclass_member_field_showcredit'	=> 'قیمت کل امتیازات',//'竟价总积分',
	'blockclass_member_field_shownote'	=> 'قیمت برای نمایش یادداشت ها',//'竟价上榜宣言',
	'blockclass_member_field_extcredits1'	=> '1 نقاط فرمت',//'扩展积分1',
	'blockclass_member_field_extcredits2'	=> '2 نقاط فرمت',//'扩展积分2',
	'blockclass_member_field_extcredits3'	=> '3 نقاط فرمت',//'扩展积分3',
	'blockclass_member_field_extcredits4'	=> '4 نقاط فرمت',//'扩展积分4',
	'blockclass_member_field_extcredits5'	=> '5 نقاط فرمت',//'扩展积分5',
	'blockclass_member_field_extcredits6'	=> '6 نقاط فرمت',//'扩展积分6',
	'blockclass_member_field_extcredits7'	=> '7 نقاط فرمت',//'扩展积分7',
	'blockclass_member_field_extcredits8'	=> '8 نقاط فرمت',//'扩展积分8',
	'blockclass_member_field_gender'	=> 'جنسیت',//'性别',
	'blockclass_member_field_birthday'	=> 'تولد',//'出生日期',
	'blockclass_member_field_constellation'	=> 'صورت فلکی',//'星座',
	'blockclass_member_field_zodiac'	=> 'زودیاک',//'生肖',
	'blockclass_member_field_telephone'	=> 'تلفن',//'固定电话',
	'blockclass_member_field_mobile'	=> 'موبایل',//'手机',
	'blockclass_member_field_idcardtype'	=> 'نوع کارت',//'证件号类型',
	'blockclass_member_field_idcard'	=> 'ID کارت',//'证件号',
	'blockclass_member_field_address'	=> 'آدرس',//'邮寄地址',
	'blockclass_member_field_zipcode'	=> 'کد پستی',//'邮编',
	'blockclass_member_field_nationality'	=> 'ملیت',//'国籍',
	'blockclass_member_field_birthcity'	=> 'محل تولد',//'出生城市',
	'blockclass_member_field_residecity'		=> 'اقامت در کشور',//'居住城市',
	'blockclass_member_field_residedist'		=> 'اقامت در منطقه',//'居住县',
	'blockclass_member_field_residecommunity'	=> 'اقامت در شهر',//'居住小区',
	'blockclass_member_field_residesuite'		=> 'اقامت در روستا',//'房间',
	'blockclass_member_field_graduateschool'	=> 'فارغ التحصبل از مدرسه',//'毕业学校',
	'blockclass_member_field_education'		=> 'تحصیلات',//'学历',
	'blockclass_member_field_occupation'		=> 'شغل',//'职业',
	'blockclass_member_field_company'		=> 'شرکت',//'公司',
	'blockclass_member_field_position'		=> 'سمت',//'职位',
	'blockclass_member_field_revenue'		=> 'حقوق',//'年收入',
	'blockclass_member_field_affectivestatus'	=> 'رده عاطفی',//'情感状态',
	'blockclass_member_field_lookingfor'		=> 'به دنبال',//'交友目的',
	'blockclass_member_field_bloodtype'		=> 'گروه خونی',//'血型',
	'blockclass_member_field_height'		=> 'قد',//'身高',
	'blockclass_member_field_weight'		=> 'وزن',//'体重',
	'blockclass_member_field_alipay'		=> 'Alipay account',//'支付宝帐号',
	'blockclass_member_field_icq'			=> 'ICQ',//'ICQ号',
	'blockclass_member_field_qq'			=> 'QQ',//'QQ号',
	'blockclass_member_field_yahoo'			=> 'یاهو',//'YAHOO帐号',
	'blockclass_member_field_msn'			=> 'MSN',//'MSN帐号',
	'blockclass_member_field_taobao'		=> 'Wangwang',//'阿里旺旺帐号',
	'blockclass_member_field_site'			=> 'پروفایل شخصی',//'个人主页',
	'blockclass_member_field_bio'			=> 'درباره خود',//'自我介绍',
	'blockclass_member_field_interest'		=> 'منافع',//'兴趣爱好',
	'blockclass_member_field_field1'		=> 'فیلد اضافی1',//'自定义字段1',
	'blockclass_member_field_field2'		=> 'فیلد اضافی2',//'自定义字段2',
	'blockclass_member_field_field3'		=> 'فیلد اضافی3',//'自定义字段3',
	'blockclass_member_field_field4'		=> 'فیلد اضافی4',//'自定义字段4',
	'blockclass_member_field_field5'		=> 'فیلد اضافی5',//'自定义字段5',
	'blockclass_member_field_field6'		=> 'فیلد اضافی6',//'自定义字段6',
	'blockclass_member_field_field7'		=> 'فیلد اضافی7',//'自定义字段7',
	'blockclass_member_field_field8'		=> 'فیلد اضافی8',//'自定义字段8',
	'blockclass_member_field_posts'			=> 'پست ها',//'发帖数',
	'blockclass_member_field_threads'		=> 'موضوعات',//'主题数',
	'blockclass_member_field_digestposts'		=> 'بحث ها',//'精华帖数',
	'blockclass_member_field_regdate'		=> 'تاریخ عضویت',//'注册时间',
	'blockclass_member_field_hourposts'		=> 'ارسال در یک ساعت اخیر',//'小时发帖数',
	'blockclass_member_field_todayposts'		=> 'ارسالات امروز',//'今日发帖数',
	'blockclass_member_field_weekposts'		=> 'ارسالات هفته اخیر',//'本周发帖数',
	'blockclass_member_field_monthposts'		=> 'ارسالات ماه اخیر',//'本月发帖数',
	'blockclass_member_script_membernew'		=> 'کاربران جدید',//'新会员',
	'blockclass_member_script_memberspecial'	=> 'کاربر ویژه',//'特殊会员',
	'blockclass_member_script_membercredit'		=> 'بیشترین پول',//'积分旺排行',
	'blockclass_member_script_membershow'		=> 'بهترین کاربر',//'竞价排行',
	'blockclass_member_script_memberposts'		=> 'رتبه ارسالات',//'发帖排行',
	'blockclass_member_script_memberspecified'	=> 'اعضای مشخص',//'指定用户',
	'blockclass_member_script_member'		=> 'شخصی',//'高级自定义',
	'blockclass_space'				=> 'پروفایل',//'空间类',

	'blockclass_space_doing'		=> 'فعالیت ها',//'记录模块',
	'blockclass_doing_field_url'		=> 'لینک',//'记录链接',
	'blockclass_doing_field_title'		=> 'عنوان',//'记录内容',
	'blockclass_doing_field_uid'		=> 'آی دی کاربر',//'用户UID',
	'blockclass_doing_field_username'	=> 'نام کاربری',//'用户名',
	'blockclass_doing_field_avatar'		=> 'آواتار',//'用户头像',
	'blockclass_doing_field_avatar_middle'	=> 'آواتار متوسط',//'用户头像(中)',
	'blockclass_doing_field_avatar_big'	=> 'آواتار بزرگ',//'用户头像(大)',
	'blockclass_doing_field_dateline'	=> 'زمان ارسال',//'发布时间',
	'blockclass_doing_field_replynum'	=> 'پاسخ ها',//'回复数',
	'blockclass_doing_script_doingnew'	=> 'فعالیت های اخیر',//'最新记录',
	'blockclass_doing_script_doinghot'	=> 'داغ ترین فعالیت ها',//'热门记录',
	'blockclass_doing_script_doing'		=> 'شخصی سازی',//'高级自定义',

	'blockclass_space_blog'			=> 'وبلاگ ها',//'日志模块',
	'blockclass_blog_field_url'		=> 'لینک',//'日志链接',
	'blockclass_blog_field_title'		=> 'عنوان',//'日志标题',
	'blockclass_blog_field_pic'		=> 'تصویر',//'日志图片',
	'blockclass_blog_field_summary'		=> 'خلاصه',//'日志简介',
	'blockclass_blog_field_dateline'	=> 'زمان ارسال',//'发布时间',
	'blockclass_blog_field_uid'		=> 'UID نویسنده',//'作者UID',
	'blockclass_blog_field_username'	=> 'نویسنده',//'作者名',
	'blockclass_blog_field_avatar'		=> 'آواتار نویسنده',//'用户头像',
	'blockclass_blog_field_avatar_middle'	=> 'آواتار متوسط کاربر',//'用户头像(中)',
	'blockclass_blog_field_avatar_big'	=> 'آواتار بزرگ کاربر',//'用户头像(大)',
	'blockclass_blog_field_replynum'	=> 'تعداد پاسخ ها',//'评论数',
	'blockclass_blog_field_viewnum'		=> 'نمایش ها',//'浏览数',
	'blockclass_blog_field_click1'		=> '1 مورد موقعیت',//'表态项1',
	'blockclass_blog_field_click2'		=> '2 مورد موقعیت',//'表态项2',
	'blockclass_blog_field_click3'		=> '3 مورد موقعیت',//'表态项3',
	'blockclass_blog_field_click4'		=> '4 مورد موقعیت',//'表态项4',
	'blockclass_blog_field_click5'		=> '5 مورد موقعیت',//'表态项5',
	'blockclass_blog_field_click6'		=> '6 مورد موقعیت',//'表态项6',
	'blockclass_blog_field_click7'		=> '7 مورد موقعیت',//'表态项7',
	'blockclass_blog_field_click8'		=> '8 مورد موقعیت',//'表态项8',
	'blockclass_blog_script_blognew'	=> 'آخرین بلاگ ها',//'最新日志',
	'blockclass_blog_script_bloghot'	=> 'داغ ترین بلاگ ها',//'热门日志',
	'blockclass_blog_script_blogspecified'	=> 'بلاگ های مشخص شده',//'指定日志',
	'blockclass_blog_script_blog'		=> 'شخصی سازی',//'高级自定义',

	'blockclass_space_album'		=> 'آلبوم ها',//'相册模块',
	'blockclass_album_field_url'		=> 'لینک',//'相册链接',
	'blockclass_album_field_title'		=> 'عنوان',//'相册名称',
	'blockclass_album_field_pic'		=> 'جلد آلبوم',//'相册封面',
	'blockclass_album_field_dateline'	=> 'زمان ساخت',//'创建日期',
	'blockclass_album_field_updatetime'	=> 'بروزرسانی شده',//'更新日期',
	'blockclass_album_field_username'	=> 'نام کاربری',//'用户名',
	'blockclass_album_field_uid'		=> 'آی دی کاربر',//'用户UID',
	'blockclass_album_field_picnum'		=> 'تصاویر',//'照片数',
	'blockclass_album_script_albumnew'	=> 'آلبوم های جدید',//'最新相册',
	'blockclass_album_script_albumspecified'	=> 'آلبوم های ویژه',//'指定相册',
	'blockclass_album_script_album'			=> 'شخصی سازی',//'高级自定义',

	'blockclass_space_pic'			=> 'تصاویر',//'图片模块',
	'blockclass_pic_field_url'		=> 'لینک',//'图片链接',
	'blockclass_pic_field_title'		=> 'عنوان',//'图片名称',
	'blockclass_pic_field_pic'		=> 'تصویر',//'图片地址',
	'blockclass_pic_field_summary'		=> 'توضیحات',//'图片说明',
	'blockclass_pic_field_dateline'		=> 'زمان ارسال',//'上传时间',
	'blockclass_pic_field_username'		=> 'نام کاربری',//'用户名',
	'blockclass_pic_field_uid'		=> 'آی دی کاربر',//'用户UID',
	'blockclass_pic_field_viewnum'		=> 'نمایش ها',//'查看数',
	'blockclass_pic_field_click1'		=> '1 مورد موقعیت',//'表态项1',
	'blockclass_pic_field_click2'		=> '2 مورد موقعیت',//'表态项2',
	'blockclass_pic_field_click3'		=> '3 مورد موقعیت',//'表态项3',
	'blockclass_pic_field_click4'		=> '4 مورد موقعیت',//'表态项4',
	'blockclass_pic_field_click5'		=> '5 مورد موقعیت',//'表态项5',
	'blockclass_pic_field_click6'		=> '6 مورد موقعیت',//'表态项6',
	'blockclass_pic_field_click7'		=> '7 مورد موقعیت',//'表态项7',
	'blockclass_pic_field_click8'		=> '8 مورد موقعیت',//'表态项8',
	'blockclass_pic_script_picnew'		=> 'آخرین تصاویر',//'最新图片',
	'blockclass_pic_script_pichot'		=> 'تصاویر داغ',//'热门图片',
	'blockclass_pic_script_picspecified'	=> 'تصاویر ویژه',//'指定图片',
	'blockclass_pic_script_pic'		=> 'شخصی سازی',//'高级自定义',
	'blockclass_group'			=> 'گروه ها',//'群组类',

	'blockclass_group_group'		=> 'گروه ها',//'群组模块',
	'blockclass_group_field_url'		=> 'لینک',//'群组链接',
	'blockclass_group_field_title'		=> 'عنوان',//'群组名称',
	'blockclass_group_field_pic'		=> 'تصویر',//'群组图片',
	'blockclass_group_field_summary'	=> 'خلاصه',//'群组介绍',
	'blockclass_group_field_foundername'	=> 'بنیان گذار',//'创始人',
	'blockclass_group_field_founderuid'	=> 'UID بنیانگذار',//'创始人UID',
	'blockclass_group_field_icon'		=> 'آیکون',//'群组图标',
	'blockclass_group_field_threads'	=> 'موضوعات',//'总话题数',
	'blockclass_group_field_posts'		=> 'ارسالات',//'总发帖数',
	'blockclass_group_field_todayposts'	=> 'ارسالات امروز',//'今日发帖数',
	'blockclass_group_field_membernum'	=> 'کاربران',//'成员数',
	'blockclass_group_field_dateline'	=> 'زمان ارسال',//'创建时间',
	'blockclass_group_field_level'		=> 'سطح گروه',//'群组等级',
	'blockclass_group_field_commoncredits'	=> 'امتیازات گروه',//'群组公共积分',
	'blockclass_group_field_activity'	=> 'رویدادهای گروه',//'群组活跃度',
	'blockclass_group_script_groupnew'	=> 'آخرین گروه ها',//'最新群组',
	'blockclass_group_script_grouphot'	=> 'گروه های داغ',//'热门群组',
	'blockclass_group_script_groupspecified'	=> 'گروه های ویژه',//'指定群组',
	'blockclass_group_script_group'			=> 'شخصی سازی',//'高级自定义',

	'blockclass_group_thread'		=> 'موضوع های گروه',//'群组帖子',
	'blockclass_groupthread_field_url'	=> 'لینک موضوع ',//'帖子链接',
	'blockclass_groupthread_field_title'	=> 'عنوان',//'帖子标题',
	'blockclass_groupthread_field_pic'	=> 'تصویر',//'附件图片',
	'blockclass_groupthread_field_summary'	=> 'خلاصه',//'帖子内容',
	'blockclass_groupthread_field_icon'	=> 'آیکون',//'帖子图标',
	'blockclass_groupthread_field_author'	=> 'نویسنده',//'楼主',
	'blockclass_groupthread_field_authorid'	=> 'UID نویسنده',//'楼主UID',
	'blockclass_groupthread_field_avatar'	=> 'آواتار نویسنده',//'楼主头像',
	'blockclass_groupthread_field_avatar_middle'	=> 'آواتار متوسط نویسنده',//'楼主头像(中)',
	'blockclass_groupthread_field_avatar_big'	=> 'آواتار بزرگ نویسنده',//'楼主组头像(大)',
	'blockclass_groupthread_field_posts'		=> 'تمام ارسال های موضوع',//'主题帖子总数',
	'blockclass_groupthread_field_todayposts'	=> 'ارسالات امروز',//'主题今日帖子数',
	'blockclass_groupthread_field_lastpost'		=> 'آخرین ارسالات',//'主题最后发帖时间',
	'blockclass_groupthread_field_dateline'		=> 'زمان ارسال',//'主题发布时间',
	'blockclass_groupthread_field_replies'		=> 'پاسخ ها',//'主题回复数',
	'blockclass_groupthread_field_views'		=> 'نمایش ها',//'主题查看数',
	'blockclass_groupthread_field_heats'		=> 'موضوعات داغ',//'主题热度',
	'blockclass_groupthread_field_recommends'	=> 'موضوعات پیشنهاد شده',//'主题推荐数',
	'blockclass_groupthread_field_groupname'	=> 'نام گروه ها',//'群组名称',
	'blockclass_groupthread_field_groupurl'		=> 'لینک گروه ها',//'群组链接',
	'blockclass_groupthread_script_groupthreadnew'		=> 'مدیریت موضوعات',//'新主题',
	'blockclass_groupthread_script_groupthreadhot'		=> 'موضوعات داغ',//'热门主题',
	'blockclass_groupthread_script_groupthreadspecial'	=> 'موضوعات ویژه',//'特殊主题',
	'blockclass_groupthread_script_groupthreadspecified'	=> 'موضوعات مشخص',//'指定主题',
	'blockclass_groupthread_script_groupthread'		=> 'شخصی سازی',//'高级自定义',

	'blockclass_group_trade'		=> 'محصولات',//'群组商品',
	'blockclass_grouptrade_field_title'	=> 'نام محصول',//'商品名称',
	'blockclass_grouptrade_field_url'	=> 'لینک',//'商品链接',
	'blockclass_grouptrade_field_summary'	=> 'خلاصه',//'商品说明',
	'blockclass_grouptrade_field_pic'		=> 'تصویر',//'商品图片地址',
	'blockclass_grouptrade_field_totalitems'	=> 'موجودی',//'商品累计售出数',
	'blockclass_grouptrade_field_author'		=> 'فروشنده',//'商品卖家',
	'blockclass_grouptrade_field_authorid'		=> 'UID فروشنده',//'商品卖家UID',
	'blockclass_grouptrade_field_price'		=> 'قیمت',//'商品价格',
	'blockclass_grouptrade_script_grouptradenew'	=> 'محصولات جدید',//'新商品',
	'blockclass_grouptrade_script_grouptradehot'	=> 'محصولات داغ',//'热门商品',
	'blockclass_grouptrade_script_grouptradespecified'	=> 'محصولات تعیین شده',//'指定商品',
	'blockclass_grouptrade_script_grouptrade'		=> 'شخصی سازی',//'高级自定义',

	'blockclass_group_groupactivity'		=> 'رویدادهای گروه',//'群组活动',
	'blockclass_group_activity'			=> 'رویداد',//'群组活动',
	'blockclass_groupactivity_field_url'		=> 'لینک',//'活动帖URL',
	'blockclass_groupactivity_field_title'		=> 'عنوان',//'活动标题',
	'blockclass_groupactivity_field_pic'		=> 'تصویر',//'主题图片',
	'blockclass_groupactivity_field_summary'	=> 'خلاصه',//'活动介绍',
	'blockclass_groupactivity_field_time'		=> 'زمان',//'活动时间',
	'blockclass_groupactivity_field_expiration'	=> 'انقضا',//'报名截止时间',
	'blockclass_groupactivity_field_author'		=> 'نویسنده',//'发起人',
	'blockclass_groupactivity_field_authorid'	=> 'UID نویسنده',//'发起人UID',
	'blockclass_groupactivity_field_cost'		=> 'هزینه مشارکت',//'每人花销',
	'blockclass_groupactivity_field_place'		=> 'مکان ها',//'活动地点',
	'blockclass_groupactivity_field_class'		=> 'نوع',//'活动类型',
	'blockclass_groupactivity_field_gender'		=> 'جنسیت',//'性别要求',
	'blockclass_groupactivity_field_number'		=> 'تعداد مورد نیاز',//'需要人数',
	'blockclass_groupactivity_field_applynumber'		=> 'تعداد کاربردی',//'已报名人数',
	'blockclass_groupactivity_script_groupactivitynew'	=> 'رویدادهای اخیر',//'最新活动',
	'blockclass_groupactivity_script_groupactivitycity'	=> 'رخداد های همان شهر',//'同城活动',
	'blockclass_groupactivity_script_groupactivity'		=> 'شخصی',//'高级自定义',

	'blockclass_xml'			=> 'نوع شخص ثالث',//'第三方类',

	'blockclass_other'			=> 'سایر',//'其它类',
	'blockclass_other_script_friendlink'	=> 'شخصی سازی',//'高级自定义',
	'blockclass_other_friendlink'		=> 'لینک دوست',//'友情链接',
	'blockclass_other_friendlink_field_url'	=> 'آدرس سایت',//'站点URL',
	'blockclass_other_friendlink_field_title'	=> 'نام سایت',//'站点名称',
	'blockclass_other_friendlink_field_pic'		=> 'لوگو  سایت',//'站点LOGO',
	'blockclass_other_friendlink_field_summary'	=> 'توضیحات سایت',//'站点简介',

	'blockclass_other_script_stat'		=> 'شخصی',//'高级自定义',
	'blockclass_other_stat'			=> 'بلوک آمار',//'统计模块',
	'blockclass_other_stat_posts'		=> 'مجموع ارسالات',//'发帖总数',
	'blockclass_other_stat_groups'		=> 'مجموع موضوعات',//'群组总数',
	'blockclass_other_stat_members'		=> 'مجموع کاربران',//'会员总数',
	'blockclass_other_stat_groupnewposts'	=> 'ارسال های امروز گروه',//'群组今日发帖',
	'blockclass_other_stat_bbsnewposts'	=> 'ارسالات امروز انجمن',//'论坛今日发帖数',
	'blockclass_other_stat_bbslastposts'	=> 'ارسالات دیروز انجمن',//'论坛昨日发帖数',
	'blockclass_other_stat_onlinemembers'	=> 'کاربران حاضر',//'当前在线会员数',
	'blockclass_other_stat_maxmembers'	=> 'بیشترین تعداد افراد آنلاین',//'历史最高在线会员数',
	'blockclass_other_stat_doings'		=> 'مجموع فعالیت ها',//'动态数',
	'blockclass_other_stat_blogs'		=> 'مجموع وبلاگ ها',//'日志数',
	'blockclass_other_stat_albums'		=> 'مجموع آلبوم ها',//'相册数',
	'blockclass_other_stat_pics'		=> 'مجموع تصاویر',//'图片数',
	'blockclass_other_stat_shares'		=> 'مجموع اشتراک گذاری ها',//'分享数',

	'blockclass_other_stat_posts_title'	=> 'عنوان پست ها',//'帖子显示名',
	'blockclass_other_stat_groups_title'	=> 'عنوان گروه ها',//'群组显示名',
	'blockclass_other_stat_members_title'	=> 'عنوان اعضا',//'会员显示名',
	'blockclass_other_stat_groupnewposts_title'	=> 'عنوان ارسال های گروه جدید',//'今日发帖显示名',
	'blockclass_other_stat_bbsnewposts_title'	=> 'عنوان ارسالات امروز انجمن',//'今日发帖显示名',
	'blockclass_other_stat_bbslastposts_title'	=> 'عنوان ارسالات دیروز انجمن',//'昨日发帖显示名',
	'blockclass_other_stat_onlinemembers_title'	=> 'عنوان کاربران آنلاین',//'当前在线会员显示名',
	'blockclass_other_stat_maxmembers_title'	=> 'عنوان بیشترین تعداد افراد آنلاین',//'历史最高在线显示名',
	'blockclass_other_stat_doings_title'	=> 'عنوان فعالیت ها',//'动态显示名',
	'blockclass_other_stat_blogs_title'	=> 'عنوان وبلاگ ها',//'日志显示名',
	'blockclass_other_stat_albums_title'	=> 'عنوان آلبوم ها',//'相册显显示名',
	'blockclass_other_stat_pics_title'	=> 'عنوان تصاویر',//'图片显示名',
	'blockclass_other_stat_shares_title'	=> 'عنوان اشتراک گذاری ها',//'分享显示名',

	'blockclass_field_id'			=> 'ID فیلد',//'数据ID',

// Added by Valery Votintsev
	'blockclass_member_field_realname'	=> 'اسم واقعی',//'Real Name',//'姓名',

	'blockclass_profile_group_base'		=> 'اطلاعات پایه',//'基本资料',
	'blockclass_profile_group_contact'	=> 'اطلاعات تماس',//'联系方式',
	'blockclass_profile_group_edu'		=> 'اطلاعات آموزش و پرورش',//'教育情况',
	'blockclass_profile_group_work'		=> 'اطلاعات کار',//'工作情况',
	'blockclass_profile_group_info'		=> 'اطلاعات شخصی',//'个人信息',

);
