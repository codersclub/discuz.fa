<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_update.php by Valery Votintsev, codersclub.org
 */

$lang = array(

//===========================
// Main Update Procedure
//---------------------------
//utility/update.php

	'del_update_lock'		=> 'You must first log in to the server by ftp, manually delete the ./data/update.lock file and then restart this page.',//'请您先登录服务器ftp,手工删除 ./data/update.lock 文件,再次运行本文件进行升级.',
	'sql_file'			=> 'SQL file ',//'SQL文件 '
	'does_not_exist'		=> ' does not exist',//' 不存在',
	'table_delete_completed'	=> 'Deleting the table and the fields is completed',//'删除表和字段操作完成了',
	'close_before_update'		=> 'Please close access to the site before performing this upgrade',//'请先关闭站点再执行此升级操作',
	'ucenter160update'		=> 'Please upgrade your UCenter to 1.6.0 or later.<br>If you use the Discuz!X comes with UCenter, please upgrade UCenter by running the uc_server/upgrade/upgrade3.php',//'请先升级UCenter到1.6.0以上版本。<br>如果使用为Discuz! X自带UCenter，请先运行uc_server/upgrade/upgrade3.php进行升级',
	'db_will_upgrade'		=> '<b>Note:</b><br>&nbsp;&nbsp;&nbsp;The update program will take into account the latest SQL file for synchronization of database upgrade.<br>',//'说明：<br>本升级程序会参照最新的SQL文件,对数据库进行同步升级.',
	'check_latest_version'		=> 'Make sure the current ./data/install.sql file is for the latest version!',//'请确保当前目录下 ./data/install.sql 文件为最新版本.',
	'check_plugins'			=> 'After the upgrade is completed, turn off all the plug-ins to ensure the site is work properly. Only after this open plugins one by one for detect if each plug-in is compatible with a new version.',//'升级完成后会关闭所有插件以确保正常运行，请站长逐个开启每一个插件检测是否兼容新版本。',
	'upgade_start'			=> 'Ready, start the upgrade',//'准备完毕,升级开始',
	'contacts'			=> ' Contacts: ',//' 联系方式:',
	'contact'			=> 'Contacts',//'联系方式',
	'ready_to_db_upgrade'		=> 'Ready, the next step will upgrade the database structure',//'准备完毕,进入下一步数据库结构升级',
	'sql_empty'			=> 'SQL file is empty, make sure',//'SQL文件内容为空,请确认',
	'db_structure_upgraded'		=> 'The database structure upgrade is completed, enter to update the next data',//'数据库结构升级完毕,进入下一步数据升级操作',
	'add_table'			=> 'Add table ',//'添加表 ',
	'sql_error'			=> ' Error. Please manually execute the following SQL statement, and then re-run the upgrade program',//' 出错,请手工执行以下SQL语句后,再重新运行本升级程序',
//	'sql_error'			=> ' Error. Please perform the following update statement by hand, then re-run the upgrade program',//'出错,请手工执行以下升级语句后,再重新运行本升级程序',
	'completed'			=> ' completed',//'完成',
	'upgrade_table'			=> 'Upgrade table ',//'升级表 ',
	'table_rename'			=> 'Rename Table ',//'表改名 ',
	'sql_statement'			=> 'Upgrading SQL statement',//'升级SQL语句',
	'check_table'			=> 'Check table ',//'检查表 ',
	'skip_table'			=> ' completed, without upgrading, skipped',//' 完成,不需升级,跳过',
	'real_names_updated'		=> 'Real name feature upgraded',//'实名功能升级完毕',
	'real_name'			=> 'Real name',//'真实姓名',
	'real_name_progress'		=> 'Real names upgrading progress:',//'实名功能升级中',
	'users_updated'			=> 'User section upgrade finished',//'用户栏目升级完毕',
	'recommended_webmaster'		=> 'Recommended by webmaster',//'站长推荐',
	'article_tags'			=>  array (
					    1 => 'Original',//'原创',
					    2 => 'Hot',//'热点',
					    3 => 'Photos',//'组图',
					    4 => 'Breaking News',//'爆料',
					    5 => 'Headline',//'头条',
					    6 => 'Slideshow',//'幻灯',
					    7 => 'Scroll',//'滚动',
					    8 => 'Recommended',//'推荐',
					    ),
	'anonymous'			=> 'Anonymous',//'匿名',
	'politics'			=> 'Politics',//'政治',
	'advertising'			=> 'Advertising',//'广告',
	'userreasons'			=> 'Powerfull!\r\nUsefull\r\nVery nice!\r\nThe best!\r\nInteresting',//'很给力!\r\n神马都是浮云\r\n赞一个!\r\n山寨\r\n淡定'
	'plugin_center'			=> 'Discuz! Plugin Center',//'Discuz! 扩展中心',
	'plugin_forum'			=> 'Discuz! Plugin Forum',//'Discuz! 扩展中心最新的论坛插件',
	'settings_updated'		=> 'Configuration, Settings upgrade is completed',//'配置项升级完成',
	'group_setting_updated'		=> 'Group Settings upgrade is completed',//'管理组设置升级完成',
	'clean_feeds'			=> 'Clean up expired feeds',//'清理过期动态',
	'cron_completed'		=> 'Cron tasks update completed',//'计划任务升级完成',
	'color_card'			=> 'Colorizer',//'变色卡',
	'color_card_descr'		=> 'You can highlight (change color) a thread or blog title',//'可以将帖子或日志的标题高亮，变更颜色',
	'visitor_card'			=> 'Discover card',//'显身卡',
	'visitor_card_descr'		=> 'You can see a real identity of an anonymous user.',//'可以查看一次匿名用户的真实身份。',
	'anonymous_card'		=> 'Anonymous card',//'匿名卡',
	'anonymous_card_descr'		=> 'Show your name as Anonymous in designated areas.',//'在指定的地方，让自己的名字显示为匿名。',
	'apps_completed'		=> 'Application Statistics upgrade is completed',//'漫游应用统计升级完成',
	'navigation_completed'		=> 'Navigation data upgrade is completed',//'导航数据升级完成',
	'group_status_completed'	=> 'Group Status Upgrade is completed',//'版块状态升级完毕',
	'recommendations_completed'	=> 'Recommendations upgrade is completed',//'回帖推荐升级完毕',
	'users_completed'		=> 'Users upgrade is completed',//'用户升级完毕',
	'daylogin'			=> 'Daily login',//'每天登录',
	'portalcomment'			=> 'Comment Article',//'文章评论',
	'points_rules_completed'	=> 'Points Rules upgrade is completed',//'积分规则升级完毕',
	'custom_bbcode_completed'	=> 'Custom BBCode permissions upgrade is completed',//'自定义代码权限升级完毕',
	'edited_by'			=> 'Edited',//'编辑采用',
	'stamps_completed'		=> 'Thread Stamps upgrade is completed',//'鉴定图章升级完毕',
	'perms_updated'			=> 'Permission icons update is completed',//'模块缩略图权限升级完毕',
	'block_permissions_completed'	=> 'Block Permissions upgrade is completed',//'模块权限升级完毕',
	'portal_completed'		=> 'Portal channel permissions Upgrade Completed',//'门户频道权限升级完毕',
	'articles_updated'		=> 'Article upgrade completed',//'文章评论升级完毕',
	'article_comments_completed'	=> 'Article comments upgrade completed',//'文章封面图升级完毕',
	'blocks_completed'		=> 'Block templates upgrade completed',//'模块模板升级完毕',
	'scripts_completed'		=> 'Block scripts upgrade completed',//'模块脚本升级完毕',
	'group_permissions_completed'	=> 'User group permissions upgrade is completed',//'用户组权限升级完毕',
	'group_home_completed'		=> 'Group Home upgrade is completed',//'群组首页升级完毕',
	'domains_completed'		=> 'Domain Settings upgrade is completed',//'域名设置升级完毕',
	'new_pm_completed'		=> 'New short message status reset completed',//'新短消息状态重置完毕',
	'view_img_completed'		=> 'View image rights upgrade completed',//'查看图片权限升级完毕',
	'realname_verify'		=> 'Real name verification',//'实名认证升级中',
	'video_verify'			=> 'Video verification',//'视频认证',
	'real_name_verification'	=> 'Real name verification',//'实名认证升级中',
	'real_name_verification_completed'	=> 'Real name verification data upgrade is completed',//'认证数据升级完毕',
	'attachment_upgrade'		=> 'Forum attachment table upgrading ... ',//'论坛附件表升级中 ... ',
	'attachment_upgraded'		=> 'Forum attachment table upgrade comleted.',//'论坛附件表升级完毕',
	'topic_image_skip'		=> 'Can not process the thread image table, skipped.',//'主题图片表无法处理，跳过',
	'topic_image_upgraded'		=> 'Thread images upgraded',//'主题图片表处理完毕',
	'topic_image_upgrade'		=> 'Thread images upgrading ... ',//'主题图片表处理中 ... ',
	'verify_updated'		=> 'Verification data upgrade completed.',//'审核数据升级完毕',
	'founder_updated'		=> 'Founder Data Upgrade completed',//'创始人数据升级完毕',
	'plugins_updated'		=> 'Plug-in language pack data upgraded.',//'插件语言包数据升级完毕',
	'config_default_lost'		=> 'config_global_default.php was not found, please reupload this file.',//'config_global_default.php was lost, please reupload this file.',
	'data_processing_completed'	=> 'Data processing is completed',//'数据处理完成',
	'config_not_writable'		=> '"config/config_global.php" file is updated, the "config/" directory is not writable, we have saved the updated file to the "data/" directory, please use FTP software to transfer it to the "config/" directory overwriting the existing file.',//'"config/config_global.php" 文件已更新,由于 "config/" 目录不可写入,我们已将更新的文件保存到 "data/" 目录下,请通过 FTP 软件将其转移到 "config/" 目录下覆盖源文件.',
	'config_continue'		=> 'After completion of this operation click here to continue',//'当您完成上述操作后点击这里继续',
	'data_delete_next'		=> 'Data Deletion completed, go to the next step',//'数据删除不处理,进入下一步',
	'tables_unused'			=> '<strong>The following data tables</strong> are unused after comparing with the standard database:<br>decide whether to delete it if required',//'以下 <strong>数据表</strong> 与标准数据库相比是多余的:<br>您可以根据需要自行决定是否删除',
	'index'				=> 'Index',//'索引',
	'field'				=> 'Field',//'字段',
	'fields_unused'			=> '<strong>The following fields</strong> are unused after comparing with the standard database:<br>decide whether to delete it if required',//'以下 <strong>字段</strong> 与标准数据库相比是多余的:<br>您可以根据需要自行决定是否删除',
	'tables_fields_no_unused'	=> 'Compared with the standard database, there is no unused data tables and fields need to be deleted',//'与标准数据库相比,没有需要删除的数据表和字段',
	'click_next_step'		=> 'Click for go to the next step',//'请点击进入下一步',
	'submit_delete'			=> 'Submit for delete',//'提交删除',
	'ignore_unused'			=> 'You can also ignore the extra tables and fields',//'您也可以忽略多余的表和字段',
	'next_step_directly'		=> 'Go to the next step directly',//'直接进入下一步',
	'default_style_restore_sure'	=> 'Please confirm whether you want to restore the default style?',//'请确认是否要恢复默认风格？',
	'yes'				=> 'Yes',//'是',
	'no'				=> 'No',//'否',
	'default_style_restored'	=> 'The default style was restored, go to the next step',//'默认风格已恢复,进入下一步',
	'cache_update'			=> 'Cache update, please wait ...',//'缓存更新中，请稍候 ...',
	'database_updated'		=> 'Congratulations! The database structure upgrade is completed!<br>For data security, delete the file update.php !.',//'恭喜，数据库结构升级完成！为了数据安全，请删除本文件。',
	'jump_to'			=> 'Jump to ...',//'跳转中...',
	'database_update'		=> 'Database upgrade process',//'数据库升级程序',
	'database_update_tool'		=> 'Database upgrade tool',//'数据库升级工具',
	'update_start'			=> 'Update start',//'升级开始',
	'database_update_structure'	=> 'Update the Database',//'数据库结构添加与更新',
	'data_update'			=> 'Update the Data',//'数据更新',
	'database_delete_structure'	=> 'Delete unused data',//'数据库结构删除',
	'update_completed'		=> 'Update Completed',//'升级完成',
	'reports_completed'		=> 'Reports upgrade is completed',//'举报升级完成',
	'magics_updated'		=> 'Magics upgrade is completed',//'道具升级完成',
	'birthday'			=> 'Birthday',//'出生日期',
//-----------------------------------------------------------------------------
// Added in X2.5:
	'table_optimize'	=> 'Optimize table',//'优化数据表',
	'close_wait'		=> 'Your site is not closed, is being closed, please wait...',//'您的站点未关闭，正在关闭，请稍后...',
	'length'		=> '[Length]',//'[时长]',
	'status'		=> '[Status]',//'[状态]',
	'info'			=> '[Info]',//'[信息]',
	'next_step_wait'	=> 'Ready to enter the next step, please wait...',//'准备进入下一步操作，请稍后...',
	'upgrade_wait'		=> 'Is being upgraded, please wait...',//'正在升级数据，请稍后...',
//	'ready_to_db_upgrade'	=> 'Ready to enter the next step: upgrade the database structure',//'准备完毕，进入下一步数据库结构升级',
	'patches_dayly'		=> 'Security patches daily access',//'每日获取安全补丁',
	'regular_publish'	=> 'Regular published topics',//'定时发布主题',
	'archive_weekly'	=> 'Weekly broadcast archive',//'每周广播归档',
	'updates_daily'		=> 'Number of daily update checks',//'更新每日查看数',
	'users_daily'		=> 'Daily user table optimization',//'每日用户表优化',
	'collection_follow'	=> 'Collection followed rule (Taobao album subscription)',//'淘专辑被订阅',
	'new_post'		=> 'New posts',//'新人帖',
	'moderated_completed'	=> 'Moderated data conversion is completed',//'审核数据转换完毕',
	'medal_completed'	=> 'User Medal data upgrade is completed',//'用户勋章数据升级完毕',
	'data_update_completed'	=> 'Data update is completed',//'数据升级结束',
	'group_stat_completed'	=> 'Forum Group statistics upgrade is completed',//'论坛版块统计数据升级完毕',
//-----------------------------------------------------------------------------
// Added in X3.0:
	'cron_todayheats_daily'	=> 'Count today hot posts daily',//'统计今日热帖',
	'hot_posts_completed'	=> 'Hot posts updated',//'热帖处理完毕',
	'reminder_update_completed'	=> 'Remind data upgrade finished',//'提醒数据升级完毕',
	'layout_update_completed'	=> 'Layout settings upgrade finished',//'布局方案设置升级完毕',
	'processed_from'	=> 'Being processed from ',//'正在处理从 ',
	'starting_from'		=> ' starting from ',//' 开始 ',
	'popular_posts'		=> 'popular posts',//'的热帖',
//To lang_template:
	'default_layout'	=> 'Default layout',//'默认方案',
	'qq_bbcode_description'	=> 'QQ online status, points icon and his/her chat',//'显示 QQ 在线状态，点这个图标可以和他（她）聊天',
	'qq_enter'		=> 'Please enter the QQ number',//'请输入 QQ 号码',
	'qq_onlne_status'	=> 'Set QQ online status',//'设置QQ在线状态',
	'open_soso'		=> '<br><br>Tips:<br>In order to reduce the forum loading, this upgrade will help you to use our website Geo-location search service.<br>You can go to',//'<br><br>友情提示：<br>为更好的降低论坛搜索时的数据压力，本次升级已经帮本站开通纵横搜索服务。<br>你可以在',
	'open_soso_link'	=> 'AdminCP -&gt; Cloud platform -&gt; Geo-location search Management',//'站点后台-&gt;云平台-&gt;纵横搜索 进行管理',
	'parameter_invalid'	=> 'Invalid parameter',//'请求的参数不正确',
	'update_sql'		=> '<br><br><b>The following is a database upgrade statement being executed:</b><br>',//'<br><br><b>以下是正在执行的数据库升级语句:</b><br>',
	'builtin'			=> 'Built-in',//'内置',
	'birthdist'			=> 'Birth District',//'出生县',
	'birthdist_info'		=> 'Birth District/County',//'出生行政区/县',
	'birthcommunity'		=> 'Birth Community',//'出生小区',
	'birthcommunity_info'		=> '',//'',
	'birthcity'			=> 'Birth City',//'出生地',
	'residecity'			=> 'Reside City',//'居住地',
	'birthday'			=> 'Birthday',//'出生日期',
	'idcardtype'			=> 'Document type',//'证件类型',
	'alipay'			=> 'AliPay',//'支付宝',
	'taobao'			=> 'TaoBao',//'阿里旺旺',
	'basic_info'			=> 'Basic info',//'基本资料',
	'education_info'		=> 'Education info',//'教育情况',
	'work_info'			=> 'Work info',//'工作情况',
	'personal_info'			=> 'Personal Info',//'个人信息',
	'reglinkname'			=> 'Registration',//'注册',
//SPOILER TAG by jaideejung007
//	'spoiler'		=> 'Spoiler',//'สปอยล์',
//	'spoiler_hide'		=> '[Spoil] click to hide the text',//'[Spoil] คลิกเพื่อซ่อนข้อความ',
//	'spoiler_show'		=> '[Spoil] Click to see hidden text',//'[Spoil] คลิกเพื่อดูข้อความที่ซ่อนไว้',
//	'spoiler_placeholder'	=> 'Enter the text you want to hide in spoiler',//'กรอกข้อความที่คุณต้องการสปอยล์',

);
