SQLite format 3   @    �   �   �   y   ]                                                � .Y   �    ����                                                                                                                                                                                                                                                       i	}W indexsqlite_autoindex_sqlitebrowser_rename_column_new_table_1sqlitebrowser_rename_column_new_table       P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)�\�tableuseruserCREATE TABLE `user` (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cookie_token_expire`	TEXT DEFAULT 0,
	`reg_time`	INTEGER DEFAULT 0,
	`last_login_time`	INTEGER DEFAULT 0
)k�1table<?php <?php CREATE TABLE "<?php " (
	`防止sqlite的数据库文件被直   2   	0   ,   (                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              � � ������d                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              )Wsqlitebrowser_rename_column_new_table#item_member� citem� 
pagepage
cataloguser   page_history %page_history/    �G�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          j !    MM!sfd454dvfdb3ec2ef78a331ba99b289ef3fe5062364dd0b92a8165633e826677852560101b1471249214W:�7W:�>   �#    M tdhtd5e65td92420151b927360e78fb396     M hslb817ea5dc158f4a3e0977d5b11d352390[��@     M heshenglea89da13684490eb9ec9e613f91d24d000[��>[�~= 	    M showdoca89da13684490eb9ec9e613f91d24d000W���[��|� � G�HH       �Q��  7�                             k �                             ]�                             [�    l�    4�    7�    �     c                       �/                          
                                                                                      	�            x/    	�            /                          	�            @/                                                                    	�            �/    	�            �/                          	�            /                                                              ] �Y �%1efa79dd1932f28037857948b6491b35d5ac0bdf494161274d697abac8c0a4d9192.168.28.1\$ 	�%efa75cd0b5088e7693c12543edf83737efe8450a2b393d8552398822cff2a17d\=l|192.168.28.1[��|\# 	�%b0190ae6e8b63139e5787bfea858ec6453440c0121bc7eea930c22f301582547\6��192.168.28.1[��   [�%f3af0040396e15d69870a412aab35ea26111285d61f3845fb1378fb099b31173192.168.28.1[�~      �??           Q��  � �     (�*                    ��xsqli��*                    V �renam��*    �A?    �A?    6 Lrowse�A?           Q��  h ��   0�*    �A?    �A?    �W in                        tebrowser_rename_column_n   �]1!!�tableuser_tokenuser_tokenCREATE TABLE `user_token` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `token` CHAR(200) NOT NULL DEFAULT '',
        `token_expire` int(11) NOT NULL DEFAULT '0' ,
        `ip` CHAR(200) NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )'.; indexsqlite_autoindex_page_1page�>/%%�?tablepa�f2�tabletemplatetemplateCREATE TABLE `template` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `username` CHAR(200) NOT NULL DEFAULT '',
        `template_title` CHAR(200) NOT NULL DEFAULT '' ,
        `template_content` text NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )    i �A? i                                                                                       �(�tableitemitemCREATE TABLE "item" (
	`item_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`item_name`	TEXT,
	`item_description`	TEXT,
	`uid`	INTEGER,
	`username`	TEXT,
	`password`	TEXT,
	`addtime`	INTEGER,
	`last_update_time`	INTEGER DEFAULT 0
, item_domain text NOT NULL DEFAULT '', item_type INT( 1 ) NOT NULL DEFAULT '1', is_archived INT( 1 ) NOT NULL DEFAULT '0', is_del INT( 1 ) NOT NULL DEFAULT '0')5!I# indexsqlite_autoindex_item_member_1item_member� ##�Etableitem_memberitem_member
CREATE TABLE "item_member" (
	`item_member_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`item_id`	INTEGER,
	`uid`	INTEGER,
	`username`	TEXT,
	`addtime`	INTEGER DEFAULT 0
, member_group_id INT( 1 ) NOT NULL DEFAULT '1')P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)k�1table<?php <?php CREATE TABLE "<?php " (
	`防止sqlite的数据库文件被直接下载`	INTEGER
)   & &O��J                     � +�\*�tableuseruserCREATE TABLE "user" (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cook'); indexsqlite_autoindex_item_1item�\*�tableuseruserCREATE TABLE "user" (
	`uid`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`username`	TEXT,
	`groupid`	INTEGER DEFAULT 2,
	`name`	TEXT,
	`avatar`	TEXT,
	`avatar_small`	TEXT,
	`email`	TEXT,
	`password`	TEXT,
	`cookie_token`	BLOB,
	`cookie_token_expire`	TEXT DEFAULT 0,
	`reg_time`	INTEGER DEFAULT 0,
	`last_login_time`	INTEGER DEFAULT 0
)� +�tablecatalogcatalogCREATE TABLE "catalog" (
	`cat_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`cat_name`	TEXT,
	`item_id`	INTEGER,
	`s_number`	INTEGER DEFAULT 99,
	`addtime`	INTEGER DEFAULT 0
, parent_cat_id INT( 10 ) NOT NULL DEFAULT '0', level INT( 10 ) NOT NULL DEFAULT '2')-,A indexsqlite_autoindex_catalog_1catalog    �  �5^�                                                                                                                                                                                     �m-�=tablepagepageCREATE TABLE "page" (
	`page_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`author_uid`	INTEGER,
	`author_username`	TEXT,
	`item_id`	INTEGER,
	`cat_id`	INTEGER,
	`page_title`	TEXT,
	`page_content`	TEXT,
	`s_number`	INTEGER DEFAULT 99,
	`addtime`	INTEGER DEFAULT 0
, page_comments text NOT NULL DEFAULT '', is_del INT( 1 ) NOT NULL DEFAULT '0')'.; indexsqlite_autoindex_page_1page�f/%%�tablepage_historypage_historyCREATE TABLE "page_history" (
	`page_history_id`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`page_id`	INTEGER,
	`author_uid`	INTEGER,
	`author_username`	TEXT,
	`item_id`	INTEGER,
	`cat_id`	INTEGER,
	`page_title`	TEXT,
	`page_content`	TEXT,
	`s_number`	INTEGER,
	`addtime`	INTEGER
, page_comments text NOT NULL DEFAULT '')70K% indexsqlite_autoindex_page_history_1page_history   � ��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             		hsl[�� 		heshengle[��
   � ��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          		   t    v�������������������������~yt9T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[����G 				�]showdoc登录eNrdk99rGkEQx59v/orFxyNXo7XS+jcUWvrjWSWKPUg8uTtpoFcwIbEt2mjABqMlNMSaPHkJMQ2NUv+Z7O755L/QudvzvEpKIY/d42B35ju7OzOf5a0z9vGaXZ7Rah34oOL0t1ij4UzOZ+MOAA952d532jgBx75mF9uvXzz1BG9Ms5SKRjc3H6xpG9FsSY2Wjbwe1fMF1TDzuq9mBz/puOEFPH/28hXQxjb7Ik4QU9r8LNHJ7rTySeIXI3pUkxx7yNp74O5WzG7kJda2JcPU1WJBEpfCEChlDeOtpufCXmpX+bct8IJosz83s/YVPz0HZ9Ki3SPeu7n9VQMg5B3+hETyuq7p6TUtl4+kyOqKMOayZhaXQoLrsprDZSQWWQks/u08czz2KIHfwjv30OaQX45YfXvhKuhaueRtFyeBEYuWNlV/t8TD5ONkIpZ8sghazxpmel0rqMVAtup734P7i+RERf36her7Z2H9G0hq0fQLykc7am42rsewL86PXX5zygfHvFml++3ZuBtHKzscTCsdoQba+4BcALDukPY64uhp69Cx7dvRCXYAO8+/1qb9g+nxFe/shF0CMO/iIMtL0MkyAVDIHeShNgyfK1RIhvwDQZIB75glEmUZg10YibtvAKR3uhUUzRJQWqJ2lqidBVZKweHe35uJpUIsxTejYo4GsZBNtAgMiRXAK2RzgpdlRGBMhMrbyJsj0WGVoFqogGCSIbwxQ8hkMuR/oxxzCuUap   �-   �,   �*   �#   �    �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �%   �   �
   �!   �"   �   �      7 7�                    �=.    @�*                                         �=.    ��*                                         �=.    p�*                                        �=.                                                   �=.    8C?    I                                   �]1!!�tableuser_tokenuser_tokenCREATE TABLE `user_token` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `token` CHAR(200) NOT NULL DEFAULT '',
        `token_expire` int(11) NOT NULL DEFAULT '0' ,
        `ip` CHAR(200) NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )�f2�tabletemplatetemplateCREATE TABLE `template` (
        `id`  INTEGER PRIMARY KEY ,
        `uid` int(10) NOT NULL DEFAULT '0',
        `username` CHAR(200) NOT NULL DEFAULT '',
        `template_title` CHAR(200) NOT NULL DEFAULT '' ,
        `template_content` text NOT NULL DEFAULT '',
        `addtime` int(11) NOT NULL DEFAULT '0'
        )      0�=    ��=    0X\                  Y       �*�     �*�                    Q       0        �=    ��=    0�=                                            �      Q       �)�     �)�     �=    ��=    ��=                                    1       X       ��=                                  1       �&�     �n5    Y       �                      ��=    X�=    0�=     �=                            1                     ��=                   Y       0                     H�=     �=            ��=                            Y       �      �              ��=    ��=    �=    ��=                            1       �E      ��=                          Y       �E      �              (�=    ��=    �=    ��=                            !       F      :       X�=    �      !       x�=    x�=    H�3                    1       ��=    ��=    H�3                    ��=    @�=    0X\                  Y       �*�     �*�                    Q       0       ��=        ��mC                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          :	 !!!!ertgtd4fv4ertgtd4fv4ertgtd4fv4ertgtd4fv4W:�)W<6	 !!" 		项目showdoc[�;�[�;�( %		绿色建筑showdoc[��[�Q^" 		团约showdoc[���[��4 			时工网小程序showdoc123456[�$[���7 %		蚂蚁时工小程序showdoc111111[���[�P�    q k7f� qE   7                             i#}W indexsqlite_autoindex_sqlitebrowser_rename_column_�w7�Atableitem_topitem_topCREATE TABLE `item_top` (
        `id`  INTEGER PRIMARY KEY ,
        `item_id` int(11) NOT NULL DEFAULT '0' ,
        `uid` int(11) NOT NULL DEFAULT '0' ,
        `addtime` int(11) NOT NULL DEFAULT '0' 
        )�I3�itableoptionsoptionsCREATE TABLE `options` (
        `option_id`  INTEGER PRIMARY KEY ,
        `option_name` CHAR(200) NOT NULL UNIQUE ,
        `option_value` CHAR(200) NOT NULL 
        )-4A indexsqlite_autoindex_options_1options�b5!!�tableitem_tokenitem_tokenCREATE TABLE `item_token` (
        `id`  INTEGER PRIMARY KEY ,
        `item_id` int(11) NOT NULL DEFAULT '0' ,
        `api_key` CHAR(200) NOT NULL UNIQUE ,
        `api_token` CHAR(200) NOT NULL ,
        `addtime` int(11) NOT NULL DEFAULT '0' ,
        `last_check_time` int(11) NOT NULL DEFAULT '0' 
        )36G! indexsqlite_autoindex_item_token_1item_token   �    �����                                                                � !#�}ertgtd4fv4data-副本
    
**简要描述：** 

- 用户注册接口

**�4 			9showdoc注册欢迎使用ShowDoc！c[���� 			�showdoc登录
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    "error_code": 0,
    "data": {
      "uid": "1",
      "username": "12154545",
      "name": "吴系挂",
      "groupid": 2 ,
      "reg_time": "1436864169",
      "last_login_time": "0",
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

    �   �   �   
   
� ����������                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          

				
                                                                              	�            p:!    	�            H=!                          	�            �8!                                                                    	�            >!    	�            �=!                         	�            89!                                               w =                                                          XL    h8!                                        XL    >!                                        XL    �=!                                       XL    �2!                                        XL    89!                                        XL    �9!                                                                                                                                                                                                                                                                        
   � �����                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  		   0 ����~aJ0                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         api文档c[��W 文档c[�;� %项目信息c[�� %	项目信息c[�� 文档c[��� api接口c[�2 %	数据字典c[��� 	api接口c[���
   � ��������                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          		
   +  �����������������~xrlf`ZTNHB<����60*$ ������ 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
   �33   �22   �11   �00   �//   �..   �--//..--,,++**))((''&&!!  %%$$##""

				   A �A	                  	�� 	          �K�    	�            XN�     �                   	��           �L�     �                                         w                                                                                                                                                                                                                                                                                                                                             �      �§��  �§��  	�    	�                                                                                            ��zX                                       �      ؾ���  ؾ���                                                  ���                  8
�             ts3_tok             ��    q] _]d6b5fe7b1f0273b920a6bbe0dd88ea931107876807cc9cc7f11bd58e2004e20c9524f0a3d29901329[�Q^ 	_a3c929085d89fc3ba8ec7360646a2a60e53915931321d429e9b023b13f1382435a892ce6831614369875[��K
   � ��                                                                                                                    Q     ؾ���  �ќ                            B                     *                                              "                       %       Y               x�             ��    x�      
       ��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               -_d6b5fe7b1f0273b920a6bbe0dd88ea93110787680,_	3c929085d89fc3ba8ec7360646a2a60e539159313      ��                                                                                    �    ���    ؠ�              � �      �3��3�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      00000                    �/                            �/                            `��G                                          �                     ��������                �              �      ��     ��      
          !                                                                        	 		[���    �  �                                                                                                                                                                                                                           � 			�showdoc登录
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    "error_code": 0,
    "data": {
      "uid": "1",
      "username": "12154545",
      "name": "吴系挂",
      "groupid": 2 ,
      "reg_time": "1436864169",
      "last_login_time": "0",
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 



c[�u     � j                K 			eshowdoc注册eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[����G 				�]showdoc登录eNrdk99rGkEQx59v/orFxyNXo7XS+jcUWvrjWSWKPUg8uTtpoFcwIbEt2mjABqMlNMSaPHkJMQ2NUv+Z7O755L/QudvzvEpKIY/d42B35ju7OzOf5a0z9vGaXZ7Rah34oOL0t1ij4UzOZ+MOAA952d532jgBx75mF9uvXzz1BG9Ms5SKRjc3H6xpG9FsSY2Wjbwe1fMF1TDzuq9mBz/puOEFPH/28hXQxjb7Ik4QU9r8LNHJ7rTySeIXI3pUkxx7yNp74O5WzG7kJda2JcPU1WJBEpfCEChlDeOtpufCXmpX+bct8IJosz83s/YVPz0HZ9Ki3SPeu7n9VQMg5B3+hETyuq7p6TUtl4+kyOqKMOayZhaXQoLrsprDZSQWWQks/u08czz2KIHfwjv30OaQX45YfXvhKuhaueRtFyeBEYuWNlV/t8TD5ONkIpZ8sghazxpmel0rqMVAtup734P7i+RERf36her7Z2H9G0hq0fQLykc7am42rsewL86PXX5zygfHvFml++3ZuBtHKzscTCsdoQba+4BcALDukPY64uhp69Cx7dvRCXYAO8+/1qb9g+nxFe/shF0CMO/iIMtL0MkyAVDIHeShNgyfK1RIhvwDQZIB75glEmUZg10YibtvAKR3uhUUzRJQWqJ2lqidBVZKweHe35uJpUIsxTejYo4GsZBNtAgMiRXAK2RzgpdlRGBMhMrbyJsj0WGVoFqogGCSIbwxQ8hkMuR/oxxzCuUapn25eXd2TfGbhm2bt+tvA0P8FIiF78S13OepzJsjXozP9/2fDcBv2c5/tw==c[��J 				eshowdoc登录eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[���                  |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代    码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---    �  �组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|� 7 !#�{ertgtd4fv4data-副本    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----               E   #p://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)   $     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�    ��：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


W:��                                                     &KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   *+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   (QVXQ2rKXJFoX7r2RmbVWN63xlaNteeuRVqFxAkCavT5BLItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAqO04p0b63Tvw4ROSXDb2k9ar1ySXKz4rWMePzN1ply5aZG6qsiSACY5bqKzpCgRBi9XFEepPP1rQc6vkfppZzvQxTXVJccDJMrB7LZyRKFRZnZwAqv5vWB2DERyn5MUiWMYkhyPUayccC+opcDQOnR9cu3GlvvmcYpAXKMLOazcYG5OZpQblQ/F4MYoHG+ScZMGoJWOWJtiZFuSovVJSaolldock98nKrqvYAI/vuiq0dibIo9/qCxV5mNVMp4zRKR/W/Kz5jI0cOR41XxagkU4pfIHvkTl5qAFeLgfRZGQGSC7lSSE6G1D0CUkbCyn9aA0Q6kq7ETuX+bmi29X4mBTFjdvW2E2Tx9MNjNaUusSVPnSMSR4wEmIQf9lqV2FPHfmfmkXWuRRjffl/9cFd2NWifsZx7nBO5juVSqvaC5e739VJmwP047QxnD0BK9V5XOuBsadWBOamysTE2tPKHBeXM86hqeKP3dvVFcnYupoPKvuhXLW2MhawHbFahvoW6Fe5SAQrSlXM9fwsF+ci/RimwOJkikysOJwqT6w1BWNPzOYvBbPwpH6OEzixdoqzsnvWbsItCw3auaTBjQgqmzo1zSFiz+VMgsyMN9iVYDrkVaf/tg9f0Kun8I0ar2tYJgjFaqwf13vkMiOQJ3kznXCbLhxDgVOmRMlzLxqVAMgMYJHWakWMhc0Yzeq/TbsNInbTYCFeUznk/jN6gHEZ3uzC7o9rIq8GBmOVKJQuuamgUVZUTq7ZjJllNa7YhayBCzHsfkZYHbOO52E6g5nopIvmslCjcESjXzKrEKOTowfEIyrV8YH5/Lmeg6C/dtYTIMG2HJeAjvTf1q1fl+DOCVCPxgv1wzLtsPu75uITIznvzKRtFT0dngBEStiBrxUHl5Svopo6oBKfXr3S8dnnHQF1UK3amJPG+qiVfWU8nK1a3   )tnx/ofXOgKxaPXmZV9FVSshF7zCiQ3HfmdO6HmPnhLhfGseLsGB09oZs2ZGPTCOsm/Gwyzc0/Pfs+3RSOyUMgulCsl4MWcWxiAcXbDI/9HVj9mJWIEjMZy4+7WeAEQgeJ3/5hvuU14LlhY1oxB8Qx/JXAzfleTb6KoI3CZBlXI9vMCrQ+hjoLs4BJdpgbKosc/W+Hlnd1d36DoISgoPFMShz1XYIDg5qsC5je5eUB32sRSQ9Nyelf3OnEr+kRjxeGhJTKVI5iEUCTn4uaKGoQOdGNPP9cIWnIov6oWjctJXPciDkJ+2NsSHHdCZBDXG39LtDUaliBKMK3LQvuAHXuAj/ogUBfv8Ssk6f0SENDbbUAyk+HTW2Dh0QLXWQrWegAwJ2N+n8VHsxLHSMIKMswcXDIFdeSucGFY5J5ixvEWOl9lY6TDqQi3YBb8g9fVh2c/T/PVykSqT3tdUSZC4KJZt6bZa6TY/V1lRpX1jkkxOMPOZpLsrVfLUBRvBfuSR3zbWn3g81IjrV/9IDH8q9fER+H+NjmJkIQVsQx/5TG/Rvr7/hLx4yS6yn1AHbDaCUoE1ZPOl9WoL1qj9snQX5PRciowPW5mcdbxIHj1GMlY1WUS9nKBgWl12u/lR+CYXj9+szBc3O7ESB9bnegRcOXKEEZCa+egVxJqBmYUVkvkBxiLzpyzYwQaQRojvx3kHEowA4G0JZnWMWunA/kvAdryqoe1Lfw2cxv9K5QACDUgbLHtgvBwB8oQIF3+csbLDENDiymZx/bGxvGH88sAopK39X5xRBvLne73NJLlpLO1BfBE5Hi+mC+xZ3lecwEOPS7KxvsXwyPewUSyRyTxTgso+Vj3UKz+3iwYETuYGsOCPwDTBBSS5jxXZxUBbcIBhQwTOcAMcL9DM+U8u+mVNwEpzFwPudmS++MM6zH3MHOgfklxpCaEwH41A84dLI1jpbv4n4Bdq9dxBY+lWkI5gQYj3SyKuBoBt3FgDVw+AP8jhXGOMC4DRC82i3oryQ    M1KNQzwOMRKP0o1BmgDgB5OvO10wthIwxLIHYzI9AyWStOZcmGf7jKptFfPLZZylcuH2dMgb5MmQEGIAQrV1Bw2V47IfIqkHpCJ8Ypssw9B9gGQWUEmUmR4tQILOxJZgMl3354WVsydFDNDz080tv4iWA8TzB0N3+J7Q6qsYR8cj8II+hvMN5/lYU0pogA/v22s/Uj2HpK1XRRGTXy0CV1uR001AJIMzOOjN8ONFV8CxXiQV1Tl7RTT3ahOcQ3AWyl+x+ExtLC7c9DE7CBeXBkj9zeM9TRsdIhsj7h4LYbKen2wk6macrnlb0CnWMXRW5x6WdQE4VSD/u6IRI1BJ06/jUEVkP/ToHfBIAGgQnT7gm2sJkg2EYVbfK2+C762MIyS+uEh6zIfIq/3GRd2le53UwoE2kkcQlVSUKC7U+jgPKim9kFKYQs4WmDKmLcw+wL9GXubZG/ZyPwKHaQfbkChnAJH6UXAYp/aDz48OCb5bXbbRyPHboQuWeldczNPG3ItAQ15ydHtH3Zc+3eIvjKAAdjzj3/Sv9QH71mbcXzoLAwN9J8SU26pfOQ2VpvRZXSzdI67WSHhUCjG3cbes3BUU/ztMoa6UVR/O8xnqheausvW12SDslTSJbyMo99W6K3JxxZRjTVrGHGF2spLuJgEZ4maRaIWwzIf+dbJdaHzvtYmHwoGUYXn2NZy/l5rOQpNJ75VI5a1qUPxkkHOminftZNZcauU2hCVoaoda2KcOOS2iBaR76LvUpOnu/k9++0N5MWeZmBeZ08h7auaghHdrMuxv6FhDb/n8dj/Q6E+rF4V6aAZwd5mfzsXjXbQM6P3LP4Mhm0f4mSZG0Jn8QdSdAjuxzWl33v2Dr1X0upHdygSisr8AD23QE/S90ml9zFASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gm/R/Gh8gsRH1KGxIiXzEM9bxlTO5TcUenFFJsyK07BgAFuwN8QxLZX8nY1DTZdbm+hbAkR+ROtSCx+c[��.    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��}   -----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in   &://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   6               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   X码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**     t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   0----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in   3               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   4员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   5码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    1

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   7员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   8码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    F

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   ;               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   <员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   >码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**     �  �|
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &q� : !#�{ertgtd4fv4data-副本    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----               2   ?

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   9----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   @----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in   A

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   B码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    C员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   D               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理    2pWqmGAxyFW+lGqMUAbAPRw4m2nE8ZGGpZA7mBEpmewVJrOlAv7dJdJpb16brGUq1w+zJ4GeZs0AQpCDFCopuawuXJE5lMk9YBMjFdkm30Isg+AzAoykSLDqxVY2JHIAky++/a0sGLupJgZen6isfUXwXqYYO5o+BbfG1JlDfvgeBRG0N9gvvksD2tKEQX4+W1j7Uey95Cs7aIwauKjTehyO2qqAZBkYB4fvRlurPgSKMaDvKIqb6eY7kZ1imsA3krxOw6PoYXdnYMmZgfx4soYub9hrKdho0Nke8TFazFU1uuDnUzVlMstfwM6xSqO3uLUy6ImCKca9HdHJGoMOnH6bQyqgPyfBr0LBgkAFaLbF2xjNUGyiSjc4mv1XfC1hWGU1A8PWZf5EHm9z7iwq3S/m1Ig0E7iEKqSggLdnUIH50E1tQ9SClvA0QJTxryF2Rfoz9jbJHvLRuZX6CD9cAMK5RQ4Si8CFvvUfvDhwTHJb7PbPho5diN0yUrvmpt52pBrCWjIS45u/7Dj2r9D9C8DGIA9//gnfac+eM/ajONDZ2FooB9KTLml8pHbWG1Gl9HN0jnuZoWEQ6EYdxt7z8JRTfG3yxjqRlH97TCfqV5o6i5bX5MNylJJl/Ayjn5bobcmH1tENdasYcQVaisv4WISnCVqFolaDMt85Fsn14XO+1qbfCgYRBWeY1vL+Xut5Sg0nfhWjVjWpg7FSwY5a6Z8105mxa1SakNUhqp2rIlx4pDbIlpEvou+S02e7ub37H9vIC/2NAPzOnsKaV/VFIzoZl2O/Q0Na/g9j8f+DIX6sHpVpINmBHub/e1cNNpBz4zes/gzGLZ9iJNlbgidxR9I0SG4H9eUfu/ZO/ReSasf3aFIKCrzA/TcAj1p/6HEjn5ASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gn/j+JD5T9EfEgZEiNeMg/1vGVM7VByR6U/ptiUWXEKBgxwA95DENteydvVNNh0ub2FsiVE5E+Qciyec[��8   FZ0d7394rSMQi1ZvXvZVVLUScsErnNhw7HfmhJ736CkRDrjm4RKcOK2dMWtm1APjKPtmPMzCPT3/PdsejcROKbNQqpCMF3NmYQzC0QWL/B9d/ZgdiRU4E8ORu1/rCUAEgtf5b77hPuW1YGlRMwrBN/SRzMXwXUm+ja6KwG0SVCnXwwu8OoQ+BrqLQ3CZFiiLGvtsjZ93dnd1h66DoKTwQEEc+lyFDYKTowqc2+juBdVhH0sBSc/tWdnvzKnkH4kRj4eWxFSKZB5CkZCDnytqGDrQiTH9XC9swan4ol44Kid91YM8CPlpa0N82AmdSVBj/C3d3mBUiijBuCIH7Qt+4AU+4o9IUbDPr5Ss80dESGOzDcVAik9njY1DB1RrLVTrCciQgP19Gh/FThwrDSPIOHtywRDYlbfCiWGVc4IZy1vkeJmNlQ6jLtSCXfALUl8flv08zV8vF6ky6X1NlQSJi2LZlm6rlW7zc5UVVdo3JsnkBDOfSbq7UiVPXbAR7Ece+W1j/YnHQ424fvWPxPCnUh8fgc9rdBQjCylgG/rMZ3qL9vX9J+TFS3aR/YQ6YLMRlAqsIZsvrVdbsEbtl6W7IKfnUmR82MrkrONF8ugxkrGqySLq5QQF0+qy282Pwje5ePxmZb642YmVOLA+1yPgypEjjIDUzEevINYMzCyskMwPMBaZP2XBDjaANEJ8P847kGAEAG9LMKtj1EoH9l8CtuNVDW1f+mvgNP5XKgcQaEDaYNkD4+UIkCdEuPjjjJUdhoAWVzaL64+N5Q3jlwdGIW3t/+KMMpA/3+ttJslNY2kP4ovI8XgxXWAP877iBB56XJKN9S2GR76HjWKJTOaZElT2seqpXvnBXTQgcDI3gAV/BKYJLiDJfazILgbaggMMGyJwhhvgeIFmzn9y0S9rAlaauxhwtyPzxR/WYe5j5kD/kORKSwiF+WgEmj9cGsFKd/M/Ab9Qq+cOGku3gnQEC0K8XxJxNQBs48YauHoA/EEO5xpjXACMXmgW9VaUB   Gl9wNaSmzBWJNqZrb2RWjeV9a2zVWHvuWqRVSJwgoEavTyDbApb1/DSAkM0xc37CejFK8ttkfIvMPXUFhNqOc2qk370DHz4hyWVjP2m9ek1yueKzgnX8yNyddumiReamKksCmOC4hcqarkAQtFhdHKH+9KMFPbdK7qeZ5Uwf01SXFAecLAO918IZiUKV1ckJ4Or/htUxGMFxSl4sgmVMcjhCvXbCsaCeAkfj0PnBtRtX6pvPKQZ5gSLsvHaDsTGZWWpQPhSPF6N4sEHOSRaMWjJmaYKdaUGO2islpZZYZndIcp+s7LqKDfD4rqtCa2eCPPqtvlCRh1nNdMoYnfJizc+az9jIkeNR82UBGumUwhf4HpmThxrg5XIQTUZmgORSnhSiswFFn5C0sZDSj9YAoa60G7FzmZ8rul2Nj0lR3Lhtjd00eTzdwGhNqUtc6UXnmOQBIyEG8ZetdhX21JH/qVlknUsx1pf/Vx/chV0t6mcc5w7nZL5TqbSqvXC5+12dtDlAP04bw9kTsFKdx7UeGHtqRWBuqkxMrD2tzHFxOeMcmir+2L1dXZGMrav5oLIfylVrK2MB2xGrZahvgX6Vi0SwolTFXM/PcnEu0o9hCixOpsjEisOp8shaUzD2yGz+UjALT+rnOIETa6c4K7tn7SbcstCgnUsa3IigsqlT0xwi9mDOJMjMeINdCaZDXnX6b/vwBb16Ct+o8bqGZYJQrMb6cb1HLjMCeZI30wm36cIxFDhlSpQ896JRCYDMABZprVbEWNiM0az+27TbIGI3DRbiNZVD7j+jJxiX4c0u7P64JvJqYDBWiULpkpsKGmVF5eSazZhZVuOKXcgauBDD7meE1THreB6mM5iJTrpoLgs1Cmc0+iWzCjE6OXpAPKJSHR+Yz5/rOQj6a2c9ARJsy3EJ6Ej/bd36dQnunAD1aLxQPyzTDru/ay4+MZLzzkzaVtHj4QlApIQd+FpxcEn5KqqpAyrx6dUrHZ993hFQB9WqjTlprI9a2VfGw9mq5    �  �| 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &qu� ; !#�{ertgtd4fv4data-副本    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----               .    �  �|:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码� 8 !#�{ertgtd4fv4data-副本    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----               (    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<   K----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in   L

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   O               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   P员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   M码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**     t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<
   Q----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in   R

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   S码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**     TDA4+Ar/SjVGKANAHo48bbTCGMjDUsgdtAi0ztYKk17yoV9esqk0l49t1iKVS4fZk+DvE2aAAkhBihUU3PYXDki8ymSekAmxiuyzT4E0QdApgWZSJHh1QosnEhkATrffbtbWDF3UkwNPT/RWPuLoD10MHc0fIvvDamyhn1wPQojqG9Q33yWhzUljwL8/Lax9iPZe0jWdlEYNfHRJnS5HTXVAEgyMI+PToYbb3wJNsaDvKIqb7cxPY3qNq4BeKuN33FYDCXsbhwUMbuIF1fGyP0NYz0NBx0i2yMuVouh8r4+OMlUTbnc8jegU6zi6C1OvSxqgnCqQn93eKJGoROj30ahCsj/qdC7oJAAUCF6fMExVuMkm4jCLb5W3wVfWxhaSf3wkFWZD5HX+4wLu0rz3ZQCgXYSh5CVFBTo7hQ6OA9bU/0gpHAEHC2wzZi10PsC/Rl7m2Rv2cj8ChWkH25AopwCR+lFwGKf2g82PDgm+W027aOeYxOhS1Z619zM04JcS0BBXnJU+4cd1/4don8ZQAPs+cc/6Tu1wXvWZhwfOgtNA/1QYsotlY/cxmozuoxulu5xNyskHArFuNvYexauaoq/XcaQN4rqb4f+TPVCUXfZ+zXZoCyUdAkv4+i3FXpr8rFFdMeaNYy4Qm3lJVxMgrtEzSJRi2GZj3zr5LrQeV9rkw8Fg6jCc+xoOX+vteyFphPbqhHLu6lD8ZJCzpwpz9rBrJhVCm2IytCtHWtinDjktogmke+i71KTp7v5PfvfG4iL3c1Av86eQtqjmoIRPazLvr+hYQ2/5/HYn6FQH1avirTRjGBvs7+di0Y76J3RexZ/Bs22D3GyzA2hs/gDKToE83FN6feevUPnSrv60R2KhKIyP0DvLVCT9h9K7OoHpHTjy44vO2592Hn1q45O+FksPLQym8Zi1pgZhp/2/yg+VP5DxIeUITHiJfOQz1vG1A4ld1T6Y4p1mRWjoMEAM+A9BL7tlbxdTYNNl9tbKFuCR/4EzeE8QQ==c[��O   Uv/wWkcgFq0+vOxRVLUSYsErnNiw7XfGhN736C0Rbr7m4RJcRa2dMWtm1APtKPtmPMzCnJ7/nh2PRmKnFFlIVQjGizmzMAbu6IJF/o+ufszuygpcluEu3q/1BMADwev8N99wn/JasLSoGYXgG/pI5mL4riTfRldF4DYJspTr4QVeHUIfA93FwblsF0iLGv3sHT/v7O7qDl0HQUnhgYI49LkKBwQnRxW4t9HTC7LDvpYCkp7bs7LfmVPJPxIjHg9NiakUyTyEJCEHP1e2YehAJ8b0c72wBbfii3rhqBz0VQ/yIOSnpQ3+YVd3JkGV8bd0e4NRKaIE44octAf8wAt8xB+RoqCfXylp54+IEMZmG4qBFJ/OGhuHDqjWWqjWE5AhAfv7ND6KnThWGlqQcfZIgyGwkbfCiWGVc4IZy1vkeJm1lQ6lLtSCXfALUl8flv08jV8vF6lS6X1NlQSJi2LZlm6rlW7zc5UVVbtvTJLJCaY+k3Q3pUqemmAj2I888tvG+hOPhypx/eofieFPpT4+Ap/XaCtGFlLANvRh0PQWrev7T8iLl2yQ/YQ8YL0RpAqsIZsvrVdbsEbtl6W7IKfnUmR82MrkrONF8ugxkrGqySLq5QQF0+yyy82Pwje5ePxmpb+42YmVOLA+1yPgypUjjIDUzEevwNcMzCyskMwP0BaZP9HnPKwBaYT4fpx3IEELANaWYFbHqJYO7L8EbPurGtoe+mvg1P9XKhcQKEBaYNkD4+UIkCd4uPjjjJUdBocWVzaL64+N5Q3jlwdGIW3t/+L0MpA/3+ttJslNY2kP/IvI8XgxXWBP+b7iBB5qXJKN9S2GR76Hg2KJTObZJqhsY9XjvvITvWhA4GRuAAv+CHQTXECS+1iSXQy0BQcYNnjgDDfA8QKNnP9k0C9rAlaauxhwtyPyxR/Woe9j6kD9kORKSwiF+WgEij9casFKs/mfgF+o1nMHjaVbQTqCBSHeL4m4GgCOcWMNTD0A/iCHc40xLgBGLxSLeivKAzUr1   VQVXRWrSXJFoYbrWRmbVWN63xlaNteeuSVqFxAkCavT6BKItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAyO04p0b63Svw4ROSXDb2k9ar1ySXKz4rWMePzN1plypaZGaqsiSACo4pVN7pCjhBi9X5EfJPP1rQc6vkfpppzvZjO9UFxQEny8D7tXBGolCldXICSPy/YXUMRnCckhfzYBmTHI5Qq51wzKmnwFE/dH5w7caV+uJzikFcIAk7r91gbExmlhqkD8XjxSgebBBzkgWlloxZGmBnWJAj90pBqSWW2R2S3Ccru65iAzy+67qhtTNBHv1Wn6jIw7Rme8oYnfJixc+Kz9jIkeNR82UBCumUxBf4HpmThxrg5XLgTUZmgOSSnhSiswFFn5C0sZDSj9YAoS61G7FzmZ8re7sqH5OiuHHZGrtp8ni6gdKaUhe40os2OMkDRkIM4i9r7SrsqSP/U6PIKpdirC//rza4C7tq1M84zh3OyXynUmlVeeFy9bsaaXNAqeuqgJXyPK71QNtTKwJ9U6VjYuVpZY6Lyxln01Sxx67t6oxkbF3NB5XzUK5aW2kL2IlYLUNtC/SrXCSCFaXK53p+lotzkX4MXWBxMkUmVhxGlXvZmoSxe2nzl4JZeFLfxwmcWNvFWdk9azfhFoUG5VzawY0IKoc6Vc0hYnfsTILMjDc4laA75FWn/bYNX9DRU/hGjdcVLBOEZDXWj+stcukRyJO8mU64dReOpsApU6LkuReNUgBkBrBIc7UixtxmjGb136bdGhG7aLAQr8kccv8Zvdq4NG92YvfHNZFXA4OxihdKQ25bUC8rKifXHMZMsxpT7ETWwIQYdr8jrI5Zx/PQnUFPdFJFc1nIUbi80S+ZVfDRydUD/BGV6vjAfP5cz4HTXzvzCZDgWI5LQEf6b+vWr0swcwLUo/FCfbNMK+z+rrn4xEjOOyNpa0XvjScAkRJ24GvFwSXlUVSTB1Ti06tXOj77vCOgDqpVB3PSWB+1sq+Mh7NVyzs73   Y

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   Z----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<    �  � ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户� < !#�{ertgtd4fv4data-副本    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                   9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��|   \+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   ]KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7          $   #   "   #   $��方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	    ^://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)    8 8                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      q      8�ٹ�  8�ٹ�          Q      �ٹ�  �ٹ�  �9 			%�3saedfedfc默认页面### ShowDoc介绍
关于ShowDoc的介绍，请访问：[http://blog.star7th.com/2015/11/1816.html](http://blog.star7th.com/2015/11/1816.html)

### 环境依赖

#### 1、必需环境

- PHP5.3以上版本

#### 2、可选环境

- php-mysql模块、php-pdo模块、mysql数据库

- ShowDoc默认使用Sqlite数据库，数据库文件在/Sqlite目录下。PHP环境默认支持Sqlite，无需额外安装其他数�   �   a��库。如果想使用Mysql数据库，则需要安装环境并参考下文的数据库配置说明做相应配置。


##安装和配置

	
#### 1、全新安装

- 克隆或者下载代码：
[https://github.com/star7th/showdoc](https://github.com/star7th/showdoc)

- 文件夹权限
	请确保/Application/Runtime 、 /Public/Uploads 、 /Sqlite 有可写权限

#### 2、升级安装

- 下载新代码后，覆盖原来的代码。请注意保留/Public/Uploads里的文件。此目录保存着你上传的图片文件。如果你没有上传过图片，则可忽略之。
- 先备份数据库。然后在浏览器访问http://xxxx.com/index.php?s=/home/update/db ，以升级数据库结构


### 数据库

####1、Sqlite数据库 or Mysql数据库？

 ShowDoc默认使用Sqlite数据库，并且自动集成到/Sqlite目录下。用户下载代码后即可使用，无需再安装其他数据库环境（PHP环境便可支持Sqlite数据库）。
使用Sqlite数据库是为了方便，尤其对非web开发人    �：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<�cW<�                                                 9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��}   d+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   eKkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��}   g+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   hKkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   i    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   leHVyNekuSKRKvasjeyqsbxvja0aa889k7QKiRUE1Oj1CURb4GS9MA0geHPMnJ+wXoziwjYe38JzTz0BIbcTrBrt967Ah09watnYT1mvXuN8vvSsaB0/MnenPapokZqpypIAKrimUHmnK+AELV7nR8g//WhBz6/i+xmqOd2P7lQXFBecLMMhUQtnJItVWqcmgPH/G1bHYJRLEPKiHixj4sMRYrUbjjr1FDjih84Prt24Ul98bjGICyRh57UblI3xzFKD9CF4vBjjBhvEHOdAqSVjlgTYHRbkyj0nKLXEMruDU/t4ZddTbIDn7npuaO1M4Ee/1ScqYqjWdE+ZQ6e8aPHT4jM28vh41HxZhEI6JfEFvkdm5aEGePk8eJOSGSB5pCeB6GxA0SckbSyk9aM1QKhL7UbsXObnyt6eyselGNe4bI3dDH483UBpTakLnPMi3VDqgJIQhfjLWnsKM3Xkf2oUaeUSjPXl/9UGb2FPjfopx3nDuZnvVCqtKi+uXP2eRtoc4DRVFTAnzxNaD7Q9tSLQN1U6JlqeVva4tJx1N00Ve+zars5IytbVfFA5D+WqtZW2gJ6I1TLEtmC/ykajnKJU+VwvzLIJNtrPQRdYmkzjiRWXUeXGtyZh7Mbb/KVoFp/U93ECK9Z2cVZuz9pNekWhQTk7O3gRQeVQJ6q5ROz2nkrgmfEGpxJ0h7zqtt+24QsyegrfqIm6gqWCkKzG+nG9RR49An5SMDNJr+7C1RS4ZRxKnnvRKAVAZoATSa5WxKjbjNGc/tu0VyNiFw0nJGoyB99/Ru5BHs2bndj9CU3k1eBgvOIFZ8hrC+JlRWXlmsOYalZjip3IGpgQ57zvCKtj1vE8dGfQE51U0VwOchRueuRLdhV8dHL1AH/EpDo+MJ8/1/Pg9NfufAIkOJYTEtCR/tu69esSzJwA9Wi8UN8skwq7v2suPjFS8+5I2lqRS+YJQNTBDn6tuLikPIpq8oBIfHr1Ssdnn3cE1UG16mBOGeujVu6V8XC2anlnx   m/sfXusIxmPVh5c9iqpWQix4hRUbtv3umJD7HrklwjXZPFyCe6u1M2bNjDLQjtJvxsMczOmF7+nxaCR3nMhCqkIwXsyZxTFwRxcsCnx09WN6sVbgZg0X936tJwgeCF3nv/mG/ZTXQs6iZhSGb+gjmY1zdyX5NroqArdJkKVsDy/w6hD6GOguAc6lu0Ba1Ohn7/h5Z3dXd/g6CEoKDxTEos9VOCBYOabAvY2cXpAd9rUUkPT8npX7zpxK/ZEcYRiSElNpnH0ISYIPfq5sQ9GBTozp53pxC27FF/XiUTnoqwxiEAqQ0gb/0Hs+lSDKBFq6faGYFFVCCUUO2QMB4AU+GohKMdAvoDjaBaIihLHZhqIgpaezxsahC6q1Fqr1BGRI4AJ9Gh/j3DhWBlqQcfr8gyLQkbfCiXMq6wYzlrfw8TJtK11KXagFuxAQpL4+Tg7wJH69bLRKpfc1VRIkNsbJtnRbrXRbgK2sqNp9YxJPTlD1qaS3KVXyxAQbwX7kUdg21p8wDFHi+tU/ksOfSn18FD6vkVYML6SBbciTo+ktUtf3n+AXL+kg/Vl5rAKpAmvw5kvr1RasUftl6S7I6fk0Hh+2snnreBE/eoxkTtVkEfWygsKR7LLLLYAiN9lE4malv7jZySkJYH22R+AqV44IAlIzH70CX1Mws7iCsz9AW2T+RB4K0QakEeL7Cd6FBC0AWOvArI4RLV3YfwnY9lc1tD3018CJ/69ULiBQgKTAcgfGyxEgT/Bw6ccZKzcMDi2tbJbWHxvLG8YvD4xixtr/xe1lIH++19eMU5vG0h74F+Hj8VKmSB8JfsUKPNS4JBvrWxQPfw8HxRKeLNBNUNnGqmeD5cd/saDAyuwAJwSi0E2wQUnuo0l2MdgWGqDY4IEz7ADLCyRygZPBgKwJnNLcRYG7XZEv/bAOfR9VB+oHp1ZawijCx6JQ/BGnBXNmCz8BvxCt5w4aS7eCdJQThES/JHLVAHCMG2tg6gHwBz6ca4xxATB6oVjUWzEeqFmph    gEeB1/pR+nGAG0A0MOKt91GGBsZWAKxgxaZ3MHSGdJTLuyTUyad8en5RSdW+UKEPg3yNWkCJIQYJFBNzRFz5QjPp3H6AZ4Yr8g2+xFEHwCpFngijYdXK7BwIuEF6Hz37W5hxdxJUzX0wkRj7S+C9tDB3NG4W3xvWJU1zg/XowiC+gb1zWcFWON4FODnt421H/HeQ7y2iyKoiY81ocvtqKkGQJKBefxkMtJ440uwMTfIK6rydhuT06hu4xqAt9r4HZfFUMLexkER04t4aWUM398w1jNw0CG8PeJhtRgu7+uHk0zVlMstfwM65VQudotVL4uaIJyq0N9dnqhR6MTot1GoAvJ/KvQuKCQAVJgcX3CM1TjJJqJIi7/Vf8HfFoFWUj88pFXmR/j1PuXCLme+m1Ag0E7yELKSgALdnUIH52Froh+EFI6AowW6GbUWel+gP2NvE+8tG9lfoYL0ww1IlFPgCL0InNin9oMND45xYZtO+4nn6ET4kpXZNTcLpCDXklCQl1zV/mHHtX+HyV8G0AAz//gneSc2+M7ajONHZ6FpIB9KXLml8tHbnNqMLqObzj3uZoWEw+E4e5vznYWrmhJolznIG0UNtEN/pvqgqLvs/ZpsUBpKsoSXudi3FXpr8tNFZMeaNZS4wm3lJWxcgrtEzSJRi3MyH/3WzXXh8/7WJj8KhVCF5+jRcv5ea9kLTSe2VSOWd1OHEo5C7pwpz9rBrJjlhDZMZMjWrjVxVhzyWkSSyH/Rf6mJ6W5+z/73BuJidzPQr9OnkPaopnCIHNZl39/QOI17j2Hsz3C4j1OviqTRjHK+5kA7G4t1kDuj7yz3GTTbfsTKMjuEznIfSLEhmE9oSr/v7B0y5+waQHcIEorJ/AC5t0BN2v8+0asfkNKNLzu+7Lj1YefVrzo64Wep+NDKbhqLOWNmGH7a/6P4UfkPET9ShsSoD89DPm8ZUzuE3JHzxxTtMitGQYMBZsB7GHzbK/m6mgabLre3ELYEj/wJGwtZ7w==c[��m   m    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   n://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)    q文档参考 [ThinkPHP5完全开发手册](http://www.kancloud.cn/manual/thinkphp5)

##环境搭建
```
linux+nginx+mysql+php7
```
##代码拉取下来后配置的修改
###项目配置信息的修改
```
cp .env.example  .env 

修改.env文件的数据库配置信息等
```

## 目录结构

初始的目录结构如下：

~~~
www  WEB部署目录（或者子目录）
├─application                     应用目录
│  ├─config                       配置文件目录
│  │  │ ├─extra                   自定义配置文件目录
│  │  │ ├─redis.php               Redis配置文件
│  │  │ ├─rabbitMQ.php            RabbitMQ配置文件
│  │  │ └─ ...                    更多自定义配置文件
│  │  │
│  │  ├─command.php               命令行工具配置文件
│  │  ├─common.php                公共函数文件
│  │  ├─config.php                公共配置文件
│  │  ├─route.php                 路由配置文件   r
│  │  ├─tags.php                  应用行为扩展定义文件
│  │  └─database.php              数据库配置文件
│  │
│  ├─console                      定时脚本文件目录
│  │
│  ├─call                         Handler事件处理调度入口
│  │
│  ├─dispatch                     队列消费常驻进程目录
│  │  └─controller
│  │     ├─Consume.php            具体业务事件消费进程文件
│  │     ├─Correct.php            总队列消费分发进程文件
│  │     ├─ExceptionHandle.php    异常队列消费处理进程文件
│  │     └─RBMQCommand.php        进程文件调用RMQ初始化文件
│  │
│  └─index                       对外接口目录
│     ├─controller               控制器目录
│     ├─view                     视图文件目录
│   
│
├─core                            公共扩展核心类库目录
│  │
│  ├─library                       s  常用工具类目录
│  │  ├─RabbitMQ.php              RabbitMQ操作类
│  │  └─ ...                      更多工具类
│  │
│  ├─model                         模型目录
│  │  ├─user                      用户数据模型
│  │  └─ ...                      更多数据模型
│  │
│  ├─common                       公共业务模块目录
│  │  ├─user                      用户模块目录
│  │  
│  │
│  ├─handler                      事件处理文件目录
│  │
│  │
│  └─exception                    异常信息目录
│
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         自定义路由文件
│  └─.htaccess          用于apache的重写
│
├─thinkphp              框架系统目录
│  ├─lang               语言文件目录
│  ├─library            框架类库目录
│  │  ├─think           Th   tink类库包目录
│  │  └─traits          系统Trait目录
│  │
│  ├─tpl                系统模板目录
│  ├─base.php           基础定义文件
│  ├─console.php        控制台入口文件
│  ├─convention.php     框架惯例配置文件
│  ├─helper.php         助手函数文件
│  ├─phpunit.xml        phpunit配置文件
│  └─start.php          框架入口文件
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─artisan               命令行入口文件
~~~

## PHP编码规范
本规范是PHP互操作性框架制定小组（[PHP-FIG](https://github.com/PizzaLiu/PHP-FIG) :PHP Framework Interoperability Group）制定的PHP编码规范�   u�[PSR][]:Proposing a Standards Recommendation）中译版。

目前官方已制定的规范包括以下5份文件：
 
  - 基本代码规范[PSR-1](/docs/psr/PSR-1-basic-coding-standard-cn.md)
  - 代码风格规范[PSR-2](/docs/psr/PSR-2-coding-style-guide-cn.md)
  - 补充文档[PSR-2补充](/docs/psr/PSR-2-coding-style-guide-meta-cn.md)
  - 日志接口规范[PSR-3](/docs/psr/PSR-3-logger-interface-cn.md)
  - Autoloader[PSR-4](/docs/psr/PSR-4-autoloader-cn.md)
  - 标准补充[PSR-4补充](/docs/psr/PSR-4-autoloader-meta.md)

## 约束

 - API、Logic、Model响应，若成功就响应成功的数据。若失败就throw，不允许返回 return false。
     - `\app\exception\ResponsableException` 可直接返回给客户端的异常
     - `\app\exception\ApiException` 由API返回的不可直接返给客户端的异常
     - `\app\exception\LogicException` 由Logic返回的不可直接返给客户端的异常

 - Controller中的请求参数验证，除非无法满足，不允许写if()判断。 �   v��须使用Validator来验证和取出参数 
     - 文档参考 (http://d.laravel-china.org/docs/5.4/validation#available-validation-rules)[文档]。
     - 额外验证规则1: `idcard` 用于验证身份证号
     - 额外验证规则2: `cellphone` 用于验证手机号格式
     - 额外验证规则3: `float_digits` 用于验证小数位
     - 额外验证规则4: `bankcard` 用于校验非信用卡的银行卡(且必须为`config('ultron.bank')`白名单内的银行), 不用额外再做银行卡是哪家的这种校验了
     - 额外验证规则5: `unique_if:true,...` 若非空则验证是否未存在 ` 'id' => 'unique_if:true,order,id' `
     - 额外验证规则6: `exists_if:true,...` 若非空则验证是否已存在 ` 'id' => 'exists_if:true,order,id' `
     - 额外验证规则7: `unique_in` 验证是否未存在 可扩展附加条件 如` 'id' => 'unique_in:order,id,status=1&deleted_at=null' `
     - 额外验证规则8: `exists_in` 验证是否已存在 可扩展附加条件 如` 'id' =   � ��                                                                                                                                                                                                                                                                                                                                                                                                                  C/ 	%E
showdoc接口信息eNozfL9n1rPNK5629QAAJDsGrw==c[��~�. 	�}showdoc文档eNqNT71OwlAU3u9TdOnaUgoEnCgKCdGQKCQqG7nc0NZLi22BwISDGo0GSByMC7joBBg1MQJC4qvApWXyFbzFBDQ6eKZzzne+nyNbVmGN5y2jIgicqmT0bEY3kMZBPc9jOmJFy2GFxyUTVeUiPdD4DBv1s5EYK0XYaIgNethQzN0E/azkXzQUEjnZymMAcorFQKxriKFdWAxxgifAeQUf5/V51/iCoasIWjzUNcvQMUbGwsh1oWYcpfxfwUC/uYC0WqRx+TG8KZfLHDar6oHqfgac45HT7U37TeZrGRYCogswpHdit48oYQEEaQG71ZmOb+kKSBAi09xElXiWjlspKe4L+aP7aRPuJQLFFZxE0EAWPSkVxZycNiVP9TCRlkS4bioq3M1tBJPbhdQOsDsjmm5Sa9iDsXP2OH2rk0Hfvm/OzmuTWhPMr8fz0wsa0nm+I/UXqvf9jlllXUYFZNSlWcmwNrsakdcnUn+g8JL+89f39l8Sn6Z35zA=c[�&l    �：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<�e |int(11)     |否   | 0  |   注册时间  |

-    w    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�    �：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<}e |int(11)     |否   | 0  |   注册时间  |

-    y    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   z://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)    v    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   x://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     YYBHodY6UfpxgBtANDDirfdThgbGVgCuYMRmZzB0hkyUy7sk10mnfHp+UUnV/lChD4N8jVpAhSEGCRQTc0Rc+UIz6dx+gGeGK/INvsRZB8AqRV4Io2HVyuwsCPhBZh89+1pYcXcSVMz9MJEY+svgvUwwdzRuFt8b1iVNc4Px6MIgv4G881nBVjjRBTg57eNtR/x3kO8tosiqImPNaHL7aipBkCSgXn85GakseJLoJgb5BVVeTvFZDeqU1wD8FaK33F5DC3s7Rw0MT2Il1bG8P0NYz0DGx3C2yMeXovhsl4/7GSqplxu+RvQKadysVuselnUBOFUg/7uikSNQSdOv41BFZD/06B3wSABoMJk+4JtrCZINhFFWvyt/gv+tgiMkvrhIe0yP8Kv9ykXdjn3uwkFAu0kD6EqCSjQ3Sl0cB5UE/sgpbAFHC1QZdRbmH2B/oy9Tby3bGR/hQ7SDzegUE6BI/QicGKf2g8+PDjGhW16208iR2+EL1mZXXOzQBpyLQkNecnV7R92XPt3mPxjAAMw849/knfig++szTh+dBaGBvKhxJVbKh+9zanN6DK66ZzjblZIOByOs7c531k4qimBdpmDulHUQDvMZ6oPmrrL1tdkg9JUkiW8zMW+rdBbk58uIhpr1lDiCreVl7BxCc4SNYtELc7JfPRbN9eFz/tbm/woFEIVnqNby/l7reUoNJ34Vo1Y1qYOJRyD3DVTvmsns+KWk9owkSGqXWvirDjktYgUkf+i/1IT0938nv3nDeTFnmZgXqdPIe2rmsIhslmXY39D4zTuPYaxP8PhPk69KpJBM8r5mgPtbCzWQc6MvrPcZzBs+xEry+wQOst9IMWG4H5CU/p9Z++Qe47WALpDkFBM5gfIuQV60v7ziR79gJRufNnxZcetDzuvftXRCT9LxYdWdtNYzBkzw/DT/h/Fj8p/iPiRMiRGfXge6nnLmNoh5A4taftFp8yKUzBggBvwHobY9kq+rqbBpsvtLYQtISJ/AliYXlg=c[��   ~Hj/w2sdwXisevOyr6KqlZALXmHFhmO/OyfkvEdOiXBWNg+X4PBq7YxZM6MMjKP0m/EwB/f0wvd0ezSSO05moVQhGS/mzOIYhKMLFgU+uvoxPV0rcLyG03u/1hOECISu8998w37KayFnUTMKwzf0kczGubuSfBtdFYHbJKhStocXeHUIfQx0l4DgUi1QFjX22Ro/7+zu6g5fB0FJ4YGCWPS5ChsEK8cUOLeR3Quqwz6WApKe37Ny35lTqT+SIwxDSmIqjbMPoUjwwc8VNRQd6MSYfq4Xt+BUfFEvHpWTvsogBqEAaW2IDz3sUwliTKCl2xeKSVEllFDkkH0hALzARwNRKQb2BRTHukBUhDQ221AUpPR01tg4dEG11kK1noAMCVygT+NjnBvHysAIMk4fglAEeuWtcOKcyrrBjOUtfLxMx0qXURdqwS4EBKmvj5MDPMlfLxutMul9TZUEiY1xsi3dVivdFmArK6q0b0ziyQlqPpX0dqVKnrhgI9iPPArbxvoThiFGXL/6R3L4U6mPj8LnNTKK4YU0sA15fDS9Rfr6/hP84iW9SH9WnqpAqcAavPnSerUFa9R+WboLcno+jceHrWzeOl7Ejx4jmVM1WUS9rKBwpLrsdgugyE02kbhZmS9udnJKAlif7RG4ypEjgoDUzEevINYUzCyu4OwPMBaZP5FnQnQAaYT4foJ3IcEIAN46MKtjxEoX9l8CtuNVDW1f+mvgJP5XKgcQaEDSYLkD4+UIkCdEuPTjjJUbhoCWVjZL64+N5Q3jlwdGMWPt/+KOMpA/3+trxqlNY2kP4ovw8XgpU6TPBb9iBR56XJKN9S2Kh7+HjWIJTxaoElT2seoBYfkZYCwosDI7wAmBKEwTbFCS+2iRXQy2hQYoNkTgDDvA8gLJXODkYkDWBE5p7qLA3a7Ml35Yh7mPmgP9g1MrLWEU4WNRaP6IM4I5dws/Ab8Qq+cOGku3gnSUE4REvyRy1QCwjRtr4OoB8Ac+nGuMcQEweqFZ1FsxHqhZq   E3f1cjXlLkikSb27I3sqrG8b42tGmvPPYu0CokVBNTo9QlkW+BkvTANIHhzzJyfsF6M4sI2Ht/Cc089AaG2E6wa7ffuwIdPcGrZ2E9Zr17jfL70rGgdPzJ3pz26aJG6qcqSACa4bqGypisQBC1eF0eoP/1oQc+v4vsZajnVRzXVJcUFJ8uwU9TCGclildWpCaD9/4bVMRjlEoS8aATLmPhwhHjthqNBPQWOxKHzg2s3rtQ3n1sM8gJF2HntBmVjPLPUoHwIHi/GuMEGOcc5MGrJmCUJdqcFuWrPSUotsczu4NQ+Xtn1FBvgubueCq2dCfzot/pCRQy1muqUOXTKizY/bT5jI4+PR82XRWikUwpf4HtkVh5qgJfPQzQpmQGSR3kSiM4GFH1C0sZCWj9aA4S60m7EzmV+ruj2ND4uxbjGbWvsZvDj6QZGa0pd4pwXGYlSB5SEKMRfttpTmKkj/1OzSDuXYKwv/68+eAt7WtRPOc4bzs18p1JpVXtx5e73dNLmAGemqoA5dZ7QemDsqRWBuakyMdH2tLLHpeWse2iq+GP3dnVFUrau5oPKfihXra2MBXRHrJYhvgX7VTYa5RSlKuZ6YZZNsNF+DqbA0mQaT6y4nCpPvzUFY0/f5i9Fs/ikfo4TWLF2irNye9Zu0isLDdrZ0eBFBJVNnZjmErFnfCqBZ8Yb7EowHfKq23/bhy/I1VP4Rk3UNSwVhGI11o/rPfKYEfCTgplJek0XrqHALeNQ8tyLRiUAMgOcSGq1IkbDZozm9N+mvQYRu2k4IVFTOfj+M3IY8hje7MLuT2girwYH45UoOJe8VJAoKyor12zG1LIaV+xC1sCFOOd9Rlgds47nYTqDmeiki+ZyUKNw3CNfsqsQo5OjB8QjJtXxgfn8uZ6HoL921xMgwbackICO9N/WrV+X4M4JUI/GC/XDMumw+7vm4hMjNe/OpG0VOWmeAEQd7ODXiotLyldRTR0QiU+vXun47POOoDqoVm3MKWN91Mq9Mh7OVi3v7   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��{    �：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<�cW<                                                 9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��|   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   �://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     �：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<u��用户  |

 **备注** 

- 更多返回错误代   �    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   �://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     �  � � F                                                        e 	1showdoc项目账号信息代码路径：git@39.106.214.242:\project\tryineshop.gitc[��o6 	9showdoc登录欢迎使用ShowDoc！c[�A� 			�showdoc注册
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    "error_code": 0,
    "data": {
      "uid": "1",
      "username": "12154545",
      "name": "吴系挂",
      "groupid": 2 ,
      "reg_time": "1436864169",
      "last_login_time": "0",
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 



c[���    w^ �                                                                                                                                                                      Y 	1eshowdoc项目创库信息eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[��ƂJ
 	1�Eshowdoc项目账号信息eNp7snvy012Tn83pfdq18OnMFU/2L3zWuP79nllcxpZ6hgZmekaGJnpGJkZcz6eseNaxHShRlJ9fwvV0fdvzBY1AnkdapbmxoYWpoQEX15Pdi4GCL7avf7qvBSiVnlnigGqIVUxBUX5WanJJTElRZWZeanFGfoEeUBnXs63dL9ZPhTsCZH1mAZA0NDLUM7Q0A2IjPUNDEwWu0uLUIiuwCwoSi4vL84tSrBQdlDPgjgByuLieTd3wrHcd0FdWXOgGKCiANCtArDc0MjYxNePiAgAN8Gy1c[���	 	1�]showdoc项目账号信息eNrjKsrPL1EoKarMzEs1NDI2MTXjerJ78fMFjS+2r3+6r+X9nlnpmSUOxpZ6hgZmekaGJnpGJkZWMQVF+VmpySUxEH3FGfkFekBlXM+2dr9YP/XZnN6nXQufzlwB1MyVWQAkDY0M9QwtzYDYSM/Q0ESBq7Q4tcgKZDNXQWJxcXl+UYqVooNyRlqlubGhhamhAZDDxfVs6oZnveue7ppsxYVugIICprO5AEKXTP8=c[��߁ 	1�=showdoc项目账号信息eNp7snvx8wWNL7avf7qv5f2eWemZJQ7GlnqGBmZ6RoYmekYmRlYxBUX5WanJJTElRZWZeanFGfkFekBlADREGPU=c[��o    � r �                                                                                                                                � 	1�=showdoc项目账号信息eNp7snvx8wWNL7avf7qv5f2eWemZJQ7GlnqGBmZ6RoYmekYmRlYxBUX5WanJJTElRZWZeanFGfkFekBlADREGPU=c[��oY 	1eshowdoc项目账号信息eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[��9� 				�eshowdoc登录eNp1Ul1LG0EUfZ9fccnj4nZNmgab31Bo6cdzdnGXuKDZMLuhglOIoUaLqRtBJVWQllr1KVG0lZpg/kxnZn3KX+jdnc1GpL3DwNxzz70zhzNE02S/GZ2uizCMxheT0aGmASE6yL1zsXUjrs55uyN2fvDwOyGaFg1uxGXr3esXKVEHE5aCoF42jNXVJ4veimHVXaPhO9SgTtX1A4eCSQCyVnHwm4/CpBubX7188xbiuTxsif3sdqZS3v3M+HjjvvmJycshP95m0eBa9HYYYWUdAzCSk0p1YHoKIyN+Q81acYCJ3gARP6BurQpM6cLRila3fP+9R+3HNOCDtvy6DoqVDErOvHv6kCV6P+XZhWIRQJHjPX50LE9u/9xto0Jimiag/DUSU3IOpR6tLHq2kyvD/JwCbSuwMFUUzBuujWkun5vLkFRKAhfyz4q4ZtVphXev5dVQdFqzUpV6jXoyrgAZiL5UAjedVnxaWigV86Xns6Zlyw8qy17VrWW0+bT6gcQbNT3QqqxSxjw275+u6alpaNvUrv8FtqQSgLm1IEaUfXL40bUno04ef0z0a0Pensn+N9lt893eZHRUQFR86d83DxV7ag4/2cT/nDySkL8qnyfvc[��0   � �                  �n 	1�showdoc框架说明文档eNqlWVtTG0cWftev6Cq7FlGli8HYu1HW7DoOSVxlZ21y2QdMWYPUoAmjGWVmhCGVcom7MMjggMFgsFHMzY6R7MQBWYLwX5LpmdGT/8KenpbESBopTq0eQPT0+c7969NDJxrgVbL+imwkAvTrv89/4Gs7d9HX3tbha+9oD/hjsvQNDql+VR7hReyDLa5OpB2fGEt7enpKf3Lw7mjtywgvDt747MaFd0dzZnbHKEyRowSZf6AvT+vpZ2R+zEyMo57KLpKZI5N7pS0zs2RqrtcdUdVYwO+/c+eOb5ATQ4IUD/tCoj/KiXFO8KtUNBaJXWh1uc6cQcbjDDl+aBQW9ScTLhdJbpDdWWNtwr5Mdsa03CzY5nLdvXvXBbgI/bfro+L4nnH8M9v47iipJ5fNxCTZXyivzLh+X1r/fSnBxWICH+JUXhKR04fklyAATApExhBiciFJ7OcHkPOnOJkyjjMQFK1wUC1a+sEw8LAqcw7i5vQLklnT3s68J46Mw7zig6jV4HTTdTuGszTX18er12/WAnSX1psCLAEA8vl8TlHQH78hW2uOzlTjVP3FghuFegg7uEQeHGuFLTM9Rw63yeRhQ8wyiiQ6gCAy+ZJMvibTx/rDVw2FaX4bCzfVLEY 	1eshowdoc项目创库信息eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[��Ɓ^ 	1�mshowdoc项目创库信息eNp7tmDH0/3NT3bMetq18OXCnc9nr3u2sO3ZvG0KCumZJQrJOfl5qSCWg7GlnqGBmZ6RoYmekYmRlX5BUX5WanKJfklRZWZeqh5QCdez6duebl8KNaRv+dOObU9nriDWnOT8vJKi/Jyc1CL94ozM9Py8dAwzIY4k3sCiVGSjAMNuY/g=c[��G   �    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   �数据库。如果想使用Mysql数据库，则需要安装环境并参考下文的数据库配置说明做相应配置。


##安装和配置

	
### 1、全新安装

- 克隆或者下载代码：
[https://github.com/star7th/showdoc](https://github.com/star7th/showdoc)

- 文件夹权限
	请确保/Application/Runtime 、 /Public/Uploads 、 /Sqlite 有可写权限

### 2、升级安装

- 下载新代码后，覆盖原来的代码。请注意保留/Public/Uploads里的文件。此目录保存着你上传的图片文件。如果你没有上传过图片，则可忽略之。
- 先备份数据库。然后在浏览器访问http://xxxx.com/index.php?s=/home/update/db ，以升级数据库结构


### 数据库

###1、Sqlite数据库 or Mysql数据库？

 ShowDoc默认使用Sqlite数据库，并且自动集成到/Sqlite目录下。用户下载代码后即可使用，无需再安装其他数据库环境（PHP环境便可支持Sqlite数据库）。
使用Sqlite数据库是为了方便，尤其对非web开发�   ��库。如果想使用Mysql数据库，则需要安装环境并参考下文的数据库配置说明做相应配置。


###安装和配置

	
#### 1、全新安装

- 克隆或者下载代码：
[https://github.com/star7th/showdoc](https://github.com/star7th/showdoc)

- 文件夹权限
	请确保/Application/Runtime 、 /Public/Uploads 、 /Sqlite 有可写权限

#### 2、升级安装

- 下载新代码后，覆盖原来的代码。请注意保留/Public/Uploads里的文件。此目录保存着你上传的图片文件。如果你没有上传过图片，则可忽略之。
- 先备份数据库。然后在浏览器访问http://xxxx.com/index.php?s=/home/update/db ，以升级数据库结构


### 数据库

####1、Sqlite数据库 or Mysql数据库？

 ShowDoc默认使用Sqlite数据库，并且自动集成到/Sqlite目录下。用户下载代码后即可使用，无需再安装其他数据库环境（PHP环境便可支持Sqlite数据库）。
使用Sqlite数据库是为了方便，尤其对非web开发人   q q                                                                                                                                                                                                                                                                                                                                                                       � 			�eshowdoc注册eNp1Ul1LG0EUfZ9fccnj4nZNmgab31Bo6cdzdnGXuKDZMLuhglOIoUaLqRtBJVWQllr1KVG0lZpg/kxnZn3KX+jdnc1GpL3DwNxzz70zhzNE02S/GZ2uizCMxheT0aGmASE6yL1zsXUjrs55uyN2fvDwOyGaFg1uxGXr3esXKVEHE5aCoF42jNXVJ4veimHVXaPhO9SgTtX1A4eCSQCyVnHwm4/CpBubX7188xbiuTxsif3sdqZS3v3M+HjjvvmJycshP95m0eBa9HYYYWUdAzCSk0p1YHoKIyN+Q81acYCJ3gARP6BurQpM6cLRila3fP+9R+3HNOCDtvy6DoqVDErOvHv6kCV6P+XZhWIRQJHjPX50LE9u/9xto0Jimiag/DUSU3IOpR6tLHq2kyvD/JwCbSuwMFUUzBuujWkun5vLkFRKAhfyz4q4ZtVphXev5dVQdFqzUpV6jXoyrgAZiL5UAjedVnxaWigV86Xns6Zlyw8qy17VrWW0+bT6gcQbNT3QqqxSxjw275+u6alpaNvUrv8FtqQSgLm1IEaUfXL40bUno04ef0z0a0Pensn+N9lt893eZHRUQFR86d83DxV7ag4/2cT/nDySkL8qnyfvc[���    M1KNQzwOMRKP0o1BmgDgB5OvO10wthIwxLIHYzI9AyWStOZcmGf7jKptFfPLZZylcuH2dMgb5MmQEGIAQrV1Bw2V47IfIqkHpCJ8Ypssw9B9gGQWUEmUmR4tQILOxJZgMl3354WVsydFDNDz080tv4iWA8TzB0N3+J7Q6qsYR8cj8II+hvMN5/lYU0pogA/v22s/Uj2HpK1XRRGTXy0CV1uR001AJIMzOOjN8ONFV8CxXiQV1Tl7RTT3ahOcQ3AWyl+x+ExtLC7c9DE7CBeXBkj9zeM9TRsdIhsj7h4LYbKen2wk6macrnlb0CnWMXRW5x6WdQE4VSD/u6IRI1BJ06/jUEVkP/ToHfBIAGgQnT7gm2sJkg2EYVbfK2+C762MIyS+uEh6zIfIq/3GRd2le53UwoE2kkcQlVSUKC7U+jgPKim9kFKYQs4WmDKmLcw+wL9GXubZG/ZyPwKHaQfbkChnAJH6UXAYp/aDz48OCb5bXbbRyPHboQuWeldczNPG3ItAQ15ydHtH3Zc+3eIvjKAAdjzj3/Sv9QH71mbcXzoLAwN9J8SU26pfOQ2VpvRZXSzdI67WSHhUCjG3cbes3BUU/ztMoa6UVR/O8xnqheausvW12SDslTSJbyMo99W6K3JxxZRjTVrGHGF2spLuJgEZ4maRaIWwzIf+dbJdaHzvtYmHwoGUYXn2NZy/l5rOQpNJ75VI5a1qUPxkkHOminftZNZcauU2hCVoaoda2KcOOS2iBaR76LvUpOnu/k9++0N5MWeZmBeZ08h7auaghHdrMuxv6FhDb/n8dj/Q6E+rF4V6aAZwd5mfzsXjXbQM6P3LP4Mhm0f4mSZG0Jn8QdSdAjuxzWl33v2Dr1X0upHdygSisr8AD23QE/S90ml9zFASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gm/R/Gh8gsRH1KGxIiXzEM9bxlTO5TcUenFFJsyK07BgAFuwN8QxLZX8nY1DTZdbm+hbAkR+ROtSCx+c[��,   �tnx/ofXOgKxaPXmZV9FVSshF7zCiQ3HfmdO6HmPnhLhfGseLsGB09oZs2ZGPTCOsm/Gwyzc0/Pfs+3RSOyUMgulCsl4MWcWxiAcXbDI/9HVj9mJWIEjMZy4+7WeAEQgeJ3/5hvuU14LlhY1oxB8Qx/JXAzfleTb6KoI3CZBlXI9vMCrQ+hjoLs4BJdpgbKosc/W+Hlnd1d36DoISgoPFMShz1XYIDg5qsC5je5eUB32sRSQ9Nyelf3OnEr+kRjxeGhJTKVI5iEUCTn4uaKGoQOdGNPP9cIWnIov6oWjctJXPciDkJ+2NsSHHdCZBDXG39LtDUaliBKMK3LQvuAHXuAj/ogUBfv8Ssk6f0SENDbbUAyk+HTW2Dh0QLXWQrWegAwJ2N+n8VHsxLHSMIKMswcXDIFdeSucGFY5J5ixvEWOl9lY6TDqQi3YBb8g9fVh2c/T/PVykSqT3tdUSZC4KJZt6bZa6TY/V1lRpX1jkkxOMPOZpLsrVfLUBRvBfuSR3zbWn3g81IjrV/9IDH8q9fER+H+NjmJkIQVsQx/5TG/Rvr7/hLx4yS6yn1AHbDaCUoE1ZPOl9WoL1qj9snQX5PRciowPW5mcdbxIHj1GMlY1WUS9nKBgWl12u/lR+CYXj9+szBc3O7ESB9bnegRcOXKEEZCa+egVxJqBmYUVkvkBxiLzpyzYwQaQRojvx3kHEowA4G0JZnWMWunA/kvAdryqoe1Lfw2cxv9K5QACDUgbLHtgvBwB8oQIF3+csbLDENDiymZx/bGxvGH88sAopK39X5xRBvLne73NJLlpLO1BfBE5Hi+mC+xZ3lecwEOPS7KxvsXwyPewUSyRyTxTgso+Vj3UKz+3iwYETuYGsOCPwDTBBSS5jxXZxUBbcIBhQwTOcAMcL9DM+U8u+mVNwEpzFwPudmS++MM6zH3MHOgfklxpCaEwH41A84dLI1jpbv4n4Bdq9dxBY+lWkI5gQYj3SyKuBoBt3FgDVw+AP8jhXGOMC4DRC82i3oryQ   �QVXQ2rKXJFoX7r2RmbVWN63xlaNteeuRVqFxAkCavT5BLItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAqO04p0b63Tvw4ROSXDb2k9ar1ySXKz4rWMePzN1ply5aZG6qsiSACY5bqKzpCgRBi9XFEepPP1rQc6vkfppZzvQxTXVJccDJMrB7LZyRKFRZnZwAqv5vWB2DERyn5MUiWMYkhyPUayccC+opcDQOnR9cu3GlvvmcYpAXKMLOazcYG5OZpQblQ/F4MYoHG+ScZMGoJWOWJtiZFuSovVJSaolldock98nKrqvYAI/vuiq0dibIo9/qCxV5mNVMp4zRKR/W/Kz5jI0cOR41XxagkU4pfIHvkTl5qAFeLgfRZGQGSC7lSSE6G1D0CUkbCyn9aA0Q6kq7ETuX+bmi29X4mBTFjdvW2E2Tx9MNjNaUusSVPnSMSR4wEmIQf9lqV2FPHfmfmkXWuRRjffl/9cFd2NWifsZx7nBO5juVSqvaC5e739VJmwP047QxnD0BK9V5XOuBsadWBOamysTE2tPKHBeXM86hqeKP3dvVFcnYupoPKvuhXLW2MhawHbFahvoW6Fe5SAQrSlXM9fwsF+ci/RimwOJkikysOJwqT6w1BWNPzOYvBbPwpH6OEzixdoqzsnvWbsItCw3auaTBjQgqmzo1zSFiz+VMgsyMN9iVYDrkVaf/tg9f0Kun8I0ar2tYJgjFaqwf13vkMiOQJ3kznXCbLhxDgVOmRMlzLxqVAMgMYJHWakWMhc0Yzeq/TbsNInbTYCFeUznk/jN6gHEZ3uzC7o9rIq8GBmOVKJQuuamgUVZUTq7ZjJllNa7YhayBCzHsfkZYHbOO52E6g5nopIvmslCjcESjXzKrEKOTowfEIyrV8YH5/Lmeg6C/dtYTIMG2HJeAjvTf1q1fl+DOCVCPxgv1wzLtsPu75uITIznvzKRtFT0dngBEStiBrxUHl5Svopo6oBKfXr3S8dnnHQF1UK3amJPG+qiVfWU8nK1a3   �   |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注   �//xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)      �：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<�                                                     �    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�   �://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)    �://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)    �    |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备�    �：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<�                     code        �                �               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��|   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   |://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)    H H�$��� " " "��代码�)R 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   ��)Q 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   �   	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   �   n 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   �   n 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   ��)S 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   ��)T 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   ��)U 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   ��)V 	!�ertgtd4fv4data    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http   �   �员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   �码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    �

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   \----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    �  �                                                                                                                                                                                       � = !#�{ertgtd4fv4data-副本    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                   t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<%   �               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   �员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   �码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    �

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   �----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    �  �                                                                                                                                                                                       � > !#�{ertgtd4fv4data-副本    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----               �    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<'   �               |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理   �员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代   �码请看首页的错误代码描述



    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


    
**简要描述：**    �

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:---   �----    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |int(11)     |否   | 0  |   注册时间  |

- 备注：无



    
-  用户表，储存用户信息

|字段|类型|空|默认|注释|
|:----    |:-------    |:--- |-- -|------      |
|uid	  |int(10)     |否	|	 |	           |
|username |varchar(20) |否	|    |	 用户名	|
|password |varchar(50) |否   |    |	 密码		 |
|name     |varchar(15) |是   |    |    昵称     |
|reg_time |in    �  �                                                                                                                                                                                       � ? !#�{ertgtd4fv4data-副本    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----               �    t(11)     |否   | 0  |   注册时间  |

- 备注：无


    
**简要描述：** 

- 用户注册接口

**请求URL：** 
- ` http://xx.com/api/user/register `
  
**请求方式：**
- POST 

**参数：** 

|参数名|必选|类型|说明|
|:----    |:---|:----- |-----   |
|username |是  |string |用户名   |
|password |是  |string | 密码    |
|name     |否  |string | 昵称    |

 **返回示例**

``` 
  {
    &quot;error_code&quot;: 0,
    &quot;data&quot;: {
      &quot;uid&quot;: &quot;1&quot;,
      &quot;username&quot;: &quot;12154545&quot;,
      &quot;name&quot;: &quot;吴系挂&quot;,
      &quot;groupid&quot;: 2 ,
      &quot;reg_time&quot;: &quot;1436864169&quot;,
      &quot;last_login_time&quot;: &quot;0&quot;,
    }
  }
```

 **返回参数说明** 

|参数名|类型|说明|
|:-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理员；2：普通用户  |

 **备注** 

- 更多返回错误代码请看首页的错误代码描述


cW<(    > 'exists_in:order,id,status=1&deleted_at=null' `
     - 额外验证规则9: `list:integer` 验证是否满足`1,2,3,4`类似格式, 并返回[1,2,3,4]给取值的list中
     - 额外验证规则10: `null_if` 当满足条件时，此字段必传空
     - 额外验证规则11: `length` 长度验证, 如length:6表示必需为6位
     - DEMO:
```php
<?php
list($phone, $code, $sms_ticket) = \library\Validator::make($this->request->post(), [
    'phone' => 'required|cellphone',
    'code' => 'required|digits:4',
    'amount' => 'required|numeric|float_digits:0,2', // 小数位允许0~2位
    'sms_ticket' => 'required',
    'type' => 'list:integer',
    'null_one' => 'null_if:type,2',
    'null_many' => 'null_if:type,2,3,4,5,6'
]);
```
 - 

## 入队列
```
use app\library\Queue;

Queue::getInstance()->addEvent($eName, array $eBody)->push($qName);
```
- queue driver 在 .env 配置 ` QUEUE_DRIVER ` 默认支持 ` redis, rabbitMQ, sync(同步执行) `


## 日志
```
use Log;

Log::info(['x'=>1,...]);c[��}    {  {                                                                                                                 �r 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   �    �  �                                                                                                                                                         �J 	1�Eshowdoc框架说明文档eNqlWVtTG0cWftev6Cq7FlHWxWDsbJQ1u4lDElfFWZtc9gFT1iA1MPFoRp4LhlTKJe7CICABg8Fgo5ibEyPZiQOyBOG/JNMzoyf/hZyelsRIGrHOrh50menznfvXp0ftqI9XydoLsp4I0a//uvBuoOX8pUBrS1ugta01FIzL0tc4ogZVeYgXcQCWeNqRfnRsLu4a6Qnj8f6bw9Uv+nnx9vVPrl98czhjZbfNwgQ5TJC574ylSSP9lMyNWIlR1FVZRTIzZHy3tGRqmkzMdHv7VTUeCgbv3r0buM2JEUHSooGIGIxxosYJQZWKxvvjF5s9njNnzNks+WHUmN8jhbwnHA57BF7UBs+Jfbw4eC42pNwRzsHad+xbZ87ohafmxrAxPUXmlvTctLG+ReZni+Mp8yhjro7pxxlj8bW9NBJHASwOBPAgF4sLGNm/kH2LakXmoww5emAWFozHYx4PSa6TnWlAcF4m2yOgAiLi8dy7d88D3iD0n44PiqO75tHPbOGbw6SRXLIS42RvvnxlyvP74trviwkuHhf4CKfykojcXiS/CGFnUiAyghCTi0hiL9+H3F/MVUiFXtivFi29MQw8qMqci7g1+SPJrOqvp94SR8ZRXglA/GtwOul1J4a7NNfTw6vXbtQCdJaunwqwCAAoEAi4RcF49Ipsrro6U41T9YsFNwZVGHVxiXx3pBc2rfQMOdgi4wcNMcsokugCgsj4czL+kkweGQ9eNBSm+W0sfKpmWdJU7CaLrIOsuXi6sMr1Ka6ypVoE5/Vc3ph6Rl4+YJF1AaJ5iXIq18MpLoZQt1MZk   �    ,  { ,                                M% 	eshowdoc文档eNp7tmbRi/19T/bufz5lRXBGfrlLfvL7PY0ArA4N0A==c[�ݞr$ 	1�showdoc框架说明文档eNqlWWtT21Ya/q5fcWaSWczEl0BIunU37LYpbTPTdBN62Q+EiYUtQI0sOboQ6HQy5m4CBloIBAIJbrilDXbSpuDYUP5LqyPJn/IX+h4d2ci2zKa7/uCLdN7nvT/nPXI76uNVvPYCryfD5Ou/LrwbbDl/Kdja0hZsbWsNhxKy9DUXVUOqPMSLXBCWMO1IPzo2F3eNzITxeP/N4eoX/bx4+/on1y++OZyxcttmcQIfJvHcd8bSpJF5iudGrOQo6qqswtkZPL7rLJmaxhMz3b5+VU2EQ6G7d+8Gb7NiVJC0WDAqhuKsqLFCSCWiif7ExWaGOXPGnM3hH0aN+T1cLDCRSIQReFEbPCf28eLgufiQckc4B2vfsW+dOaMXn5obw8b0FJ5b0vPTxvoWnp8tjafNo6y5OqYfZ43F17DsTCnz2nyUpTf044wxnDu5TZCiCRTkxIEgN8jGEwKH7F+IYegS8gPc1Yv7IGU8eGGks7iwUIW2N2XjgC4EivDRA7O4YDweYxicWsc70yDnvoy3R8BaCC7D3Lt3j4HAIPSfjg9Ko7vm0c904ZvDlJFaspLjeG++fGWK+X1x7ffFJJtICHyUVXlJRF4vXFiEDFIpEBlBiMpFJbGX70PeL+qO42aVqPNGMbhBVWY9xK3JH3F2VX899ZY4MhfjlSCksgank1x3Y3hLsz09vHrtRi1Ap3P9VIBFAEDBYNArCsajV3hz1dOZapyqXzS4cSjomIdL+LsjvbhpZWbwwRYeP2iIWUaRRA8QhMef4/GXePKIFGAjYZLfxsKnapYlTeW8ZJF1kDMXTxdW2T7FU9apRXBezxeMqWf45QMaWQ8gkpcYq7I9rOJhS   �   �fUuXzRcffhZq6hqJ+SCVzix4bXBnhN6X6S3TLiqGkfLxuaouTthzo27YJxl3/RHWXim5X9gx6ue2C1lFkoVkvFq3ihMQDh6YJP3k6ufssutArdbuDxH4n0+iID/Bv/dd9w1Pu4vbWpFAfiGPpG5KL4jyYPoqgjcJkGVcn28wMNJ8ynQXQyCy7RAWdTYZ2n8oru3pzdwAwQlhQcK4tAXKhwQnBxW4N5HTz+oDutaC0habt/MPjBmkn8kxlwuWhIzKZJ5BEVCDn+uqGHoQCf67EutsA236gta4bic9DUXciHkpa0N8dEKzyr2UGO8bb1uf1gKKf6YIvutBS/wAh/yhqQw2OdVStZ5QyKksdWCYiDFZ/f1zSMbVHstVPspyIiAvQNxPoztOGYaRphJ9g6CIbCV98KJYpWzg+kr2+RkhY2lNqPO14Kd9wrSwACWvTzNXz8XqjLpclyVBIkLY9mS7qiV7vBylR1V2jenyfQUM59JOrtSJU9dsBCsVyb5HX3jqctFjbhx9Y/E6DVpgA/B7+t0lCOLKWAb+vZmdpv29b2n5NVrtsj+hDpgsxWUCuwhW6/NN9uwR43I0h2Q03IpMjlqZnLmyRJ5/ATJWI3LIurnBAXT6rLazYuCt7hY7FZlvrjVjZUYsD7XJ+DKlSWIgNSMx28g1gzMKKySzI8wFhk/ZcEONoA0Qrwc421IMAKAtyWYtQlqpQ37LwFb8aqGtpb+GjiN/5XKBQYakDZY9lB/PQbkCREuvpgzs6MQ0OLqVnHjib6yqf/yUC+kzYNf7FEG8uf73a0kuaUv70N8ETmZLKYL7LXc15zAQ49Lsr6xzfDID3BQLJPpPFOCyj5WvZ8rv4IL+wRO5oaw4A3BNMH5JHmAFdkFX4d/iGFDBM5wQxwv0Mx5Txe9clzASmsPA+61Zb744wbMfcwc6B+SXG0LoCAfDkHzB0sjWOlp/ifgF2r1/GFj6XaQDmFBiEUkEVcDwDGur4Orh8Af5Gi+McZ5wOiHZlFvh3mgZqUaB   �qzp6y8di7QKiRME1OjzGWRbwLKWnwUQsjVhLEyZr8ZJfodMbpP5Z46AUNsxTg1FnDvw0VOSXNEPkuabtySXKz4vmCePjb1Zhy5aYm6qsiSACbZHqKzpCgQhHq2LI9Sfdryo5dbIvTSznOljmuqSYoOTZSDaWjg9UaiyOjkFrPlnWF3DIRyj5MUiWMYkR2PUazscC2oTOBqH7o+u37xS33x2McgLFGH39ZuMjcnccoPyoXi8GMbDDXJOsmDUsn6fJtieFmSrvVJSaonl/i5JHpDVPUexIR7fcVRo7k6Rx7/VFypyMauZThmjJh/W/Kz59M0cORk3XhegkZoUvsD3yZw80gAvl4NoMjIDJIfypBDdDSj6lKT1xZR2vA4IdaXdiJ3L/FzR7Wh8VArjxm2r76XJk9kGRseVusSVPnSiSB4yEmIQf9lqR2FXHfk3zSLrXIqxsdLABxhH5HCMk9W69BkvX2o5YN63TeX/NAbOwo4eRRhHOsPZmbMpFVe1Jy6zh2OQLA7RTtL6aPYUrNQnsXgfjE21IjB3VSYu1t5m5qS4krEPXRV/LG6ormjG9tV8UjlP5aq9lbGCnajVMtQ3X0TlQiGsKFUx1/L3uRgXimCYIovTKTK1anOqPHzWFJw1/Bq/FIzC0/o5UODE2inQzO6bewmnLDSgg5IGJyKxFaI4aBOxRmwmQeYmG5xqMF3yqt1/y4cv6WoTvlJjdQ3PBKFY9Y2Teo8cZgzyNG+kE07TiW2osMuUKH3+VaMSAJkhLNJarYixsOnjWe23WadBxmoaLMRqKofce07vIg7Dn1XYkVhc5FXfcLQShdKSkwoaZUUFfqj2n1lW44pVyHFwIYqd7xhrE+bJAkx3MFOddtF8FmoUblv0S2YNYnR6dYF4hCW5ITHZ6wmQ4FiPSUBH2m8b5q/L8OQUqC/OC/XDNu2we3vG0lM9uWDPpGUVveidAoRK2L5vFBuXlFdRTR1QiWtXr3R9/kWXTx1Wqw72pL4xbmbf6I/uV23v7rr88    �  �                                                                                                                                                         �J 	1�Eshowdoc框架说明文档eNqlWWtT21Ya/u5fcWaSWczEl0BIunU37LYpbTPTdBN62Q+EiYV9ADWy5OhCoNPJmLsJGGghEAgkuOGWNthJm4JjQ/kvrY4kf8pf6Ht0bCPbMpvu+gPY0nmf9/6c90jtqI9XydoLsp4I0a//uvBuoOX8pUBrS1ugta01FIzL0tc4ogZVeYgXcQCWeNqRfnRsLu4a6Qnj8f6bw9Uv+nnx9vVPrl98czhjZbfNwgQ5TJC574ylSSP9lMyNWIlR1FVZRTIzZHy3tGRqmkzMdHv7VTUeCgbv3r0buM2JEUHSooGIGIxxosYJQZWKxvvjF5s9njNnzNks+WHUmN8jhbwnHA57BF7UBs+Jfbw4eC42pNwRzsHad+xbZ87ohafmxrAxPUXmlvTctLG+ReZni+Mp8yhjro7pxxlj8bW9NBJHASwOBPAgF4sLGNm/7DtUKTIfZcjRA7OwYDwe83hIcp3sTAOA8zLZHgENEBCP5969ex5wBqH/dHxQHN01j35mC98cJo3kkpUYJ3vz5StTnt8X135fTHDxuMBHOJWXROT2IflFiDqTApERhJhcRBJ7+T7k/mGeQib0wn61aOkPw8CDqsy5iFuTP5LMqv566i1xZBzllQCEvwank153YrhLcz09vHrtRi1AZ+n6qQCLAIACgYBbFIxHr8jmqqsz1ThVv1hwY1CEUReXyHdHemHTSs+Qgy0yftAQs4wiiS4giIw/J+MvyeSR8eBFQ2Ga38bCp2qWJU3FbrLIOsiai6cLq1yf4ipbqkVwXs/ljaln5OUDFlkXIJqXKKdyPZziYgh1O5Uh+   �   �
│  │  ├─tags.php                  应用行为扩展定义文件
│  │  └─database.php              数据库配置文件
│  │
│  ├─console                      定时脚本文件目录
│  │
│  ├─call                         Handler事件处理调度入口
│  │
│  ├─dispatch                     队列消费常驻进程目录
│  │  └─controller
│  │     ├─Consume.php            具体业务事件消费进程文件
│  │     ├─Correct.php            总队列消费分发进程文件
│  │     ├─ExceptionHandle.php    异常队列消费处理进程文件
│  │     └─RBMQCommand.php        进程文件调用RMQ初始化文件
│  │
│  └─index                       对外接口目录
│     ├─controller               控制器目录
│     ├─view                     视图文件目录
│   
│
├─core                            公共扩展核心类库目录
│  │
│  ├─library                       �文档参考 [ThinkPHP5完全开发手册](http://www.kancloud.cn/manual/thinkphp5)

##环境搭建
```
linux+nginx+mysql+php7
```
##代码拉取下来后配置的修改
###项目配置信息的修改
```
cp .env.example  .env 

修改.env文件的数据库配置信息等
```

## 目录结构

初始的目录结构如下：

~~~
www  WEB部署目录（或者子目录）
├─application                     应用目录
│  ├─config                       配置文件目录
│  │  │ ├─extra                   自定义配置文件目录
│  │  │ ├─redis.php               Redis配置文件
│  │  │ ├─rabbitMQ.php            RabbitMQ配置文件
│  │  │ └─ ...                    更多自定义配置文件
│  │  │
│  │  ├─command.php               命令行工具配置文件
│  │  ├─common.php                公共函数文件
│  │  ├─config.php                公共配置文件
│  │  ├─route.php                 路由配置文件   �  常用工具类目录
│  │  ├─RabbitMQ.php              RabbitMQ操作类
│  │  └─ ...                      更多工具类
│  │
│  ├─model                         模型目录
│  │  ├─user                      用户数据模型
│  │  └─ ...                      更多数据模型
│  │
│  ├─common                       公共业务模块目录
│  │  ├─user                      用户模块目录
│  │  
│  │
│  ├─handler                      事件处理文件目录
│  │
│  │
│  └─exception                    异常信息目录
│
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         自定义路由文件
│  └─.htaccess          用于apache的重写
│
├─thinkphp              框架系统目录
│  ├─lang               语言文件目录
│  ├─library            框架类库目录
│  │  ├─think           Th   �ink类库包目录
│  │  └─traits          系统Trait目录
│  │
│  ├─tpl                系统模板目录
│  ├─base.php           基础定义文件
│  ├─console.php        控制台入口文件
│  ├─convention.php     框架惯例配置文件
│  ├─helper.php         助手函数文件
│  ├─phpunit.xml        phpunit配置文件
│  └─start.php          框架入口文件
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─artisan               命令行入口文件
~~~

## PHP编码规范
本规范是PHP互操作性框架制定小组（[PHP-FIG](https://github.com/PizzaLiu/PHP-FIG) :PHP Framework Interoperability Group）制定的PHP编码规范�   ň[PSR][]:Proposing a Standards Recommendation）中译版。

目前官方已制定的规范包括以下5份文件：
 
  - 基本代码规范[PSR-1](/docs/psr/PSR-1-basic-coding-standard-cn.md)
  - 代码风格规范[PSR-2](/docs/psr/PSR-2-coding-style-guide-cn.md)
  - 补充文档[PSR-2补充](/docs/psr/PSR-2-coding-style-guide-meta-cn.md)
  - 日志接口规范[PSR-3](/docs/psr/PSR-3-logger-interface-cn.md)
  - Autoloader[PSR-4](/docs/psr/PSR-4-autoloader-cn.md)
  - 标准补充[PSR-4补充](/docs/psr/PSR-4-autoloader-meta.md)

## 约束

 - API、Logic、Model响应，若成功就响应成功的数据。若失败就throw，不允许返回 return false。
     - `\app\exception\ResponsableException` 可直接返回给客户端的异常
     - `\app\exception\ApiException` 由API返回的不可直接返给客户端的异常
     - `\app\exception\LogicException` 由Logic返回的不可直接返给客户端的异常

 - Controller中的请求参数验证，除非无法满足，不允许写if()判断。 �    � �` �                                                                                                                                                                                                     ��i 	1�showdoc框架说明文档> git地址: git@39.106.214.242:/project/tryine.git
> 使用框架：ThinkPHP5，详细开发   ʂ` 	1�sshowdoc项目创库信息核心业务项目框架  git clone git@39.106.214.242:/project/tryine.git
后台管理框架  git clone git@39.106.214.242:/project/tryineadmin.git
时工项目控制器  git clone git@39.106.214.242:/project/controller/shigong.git
时工项目业务  git clone git@39.106.214.242:/project/core/shigong.gitc[��c�: 	1�'showdoc项目账号信息仓库服务器信息：
39.106.214.242
用户：root
密码：Hfy7318510

代码路径：git clone git@39.106.214.242:/project/tryineshop.git
测试服务器：
ip：121.196.192.114 
user:root
password:!@#hfy7318510!@#

数据库:
121.196.192.114   root tryine123456

c[��0                                                                                                                           �n 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdoYO6ccZYzh3MkEwogkU5MSBIDfIxhMCh+xfiGHoEvIDDNWL+yBlPHhhpLO4sFCFtjdl4xDdkfkoi48emMUF4/EYw+DUOt6ZBkH3MN4eAUXBrwxz7949BnyC0H86PiiN7ppHP9OFbw5TRmrJSo7jvfnyyBTz++La74tJNpEQ+Cir8pKIvF64sAjBo1IgMoIQlYtKYi/fh7xf1B7HzipR541icIOqzHqIW5M/4uyq/nrqLXFkLsYrQYhiDU4nGXdjeEuzPT28eu1GLUCnM34qwCIAoGAw6OUF49ErvLnqaUw1TtUv6tw45HLMwyT83ZFe3LQyM/hgC48fNMQso0iiBwjC48/x+Es8eUQysJEwiW9j4VN3liVN5bxkkXWQMxdPF1bZPsVT1slFMF7PF4ypZ/jlA+pZDyASlxirsj2s4qFIT   �    {  {                                                                                                                 �r  	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   i    �  �                                                                                                                                                         �J 	1�Eshowdoc框架说明文档eNqlWWtT21Ya/u5fcWaSWczEl0BIunU37LYpbTPTdBN62Q+EiYV9ADWy5OhCoNPJmLsJGGghEAgkuOGWNthJm4JjQ/kvrY4kf8pf6Ht0bCPbMpvu+gPY0nmf9/6c90jtqI9XydoLsp4I0a//uvBuoOX8pUBrS1ugta01FIzL0tc4ogZVeYgXcQCWeNqRfnRsLu4a6Qnj8f6bw9Uv+nnx9vVPrl98czhjZbfNwgQ5TJC574ylSSP9lMyNWIlR1FVZRTIzZHy3tGRqmkzMdHv7VTUeCgbv3r0buM2JEUHSooGIGIxxosYJQZWKxvvjF5s9njNnzNks+WHUmN8jhbwnHA57BF7UBs+Jfbw4eC42pNwRzsHad+xbZ87ohafmxrAxPUXmlvTctLG+ReZni+Mp8yhjro7pxxlj8bW9NBJHASwOBPAgF4sLGNm/7DtUKTIfZcjRA7OwYDwe83hIcp3sTAOA8zLZHgENEBCP5969ex5wBqH/dHxQHN01j35mC98cJo3kkpUYJ3vz5StTnt8X135fTHDxuMBHOJWXROT2IflFiDqTApERhJhcRBJ7+T7k/mGeQib0wn61aOkPw8CDqsy5iFuTP5LMqv566i1xZBzllQCEvwank153YrhLcz09vHrtRi1AZ+n6qQCLAIACgYBbFIxHr8jmqqsz1ThVv1hwY1CEUReXyHdHemHTSs+Qgy0yftAQs4wiiS4giIw/J+MvyeSR8eBFQ2Ga38bCp2qWJU3FbrLIOsiai6cLq1yf4ipbqkVwXs/ljaln5OUDFlkXIJqXKKdyPZziYgh1O5Uh+   �    �  �                                                                                                                                         �Z 	1�eshowdoc框架说明文档eNqlWVtTG0cWftev6Cq7FlHWxWDsbJQ1u4lDElfFWZtc9gFT1iA1MPFoRp4LhlTKJe7CICABg8Fgo5ibEyPZiQOyBOG/JNMzoyf/hZyelsRIGrHOrh506e7z9bl+fXrUjvp4lay9IOuJEP36rwvvBlrOXwq0trQFWttaQ8G4LH2NI2pQlYd4EQdgiacd6UfH5uKukZ4wHu+/OVz9op8Xb1//5PrFN4czVnbbLEyQwwSZ+85YmjTST8nciJUYRV2VVSQzQ8Z3S0umpsnETLe3X1XjoWDw7t27gducGBEkLRqIiMEYJ2qcEFSpaLw/frHZ4zlzxpzNkh9Gjfk9Ush7wuGwR+BFbfCc2MeLg+diQ8od4RysfceeOnNGLzw1N4aN6Skyt6Tnpo31LTI/WxxPmUcZc3VMP84Yi69h2Rk2pB+njeHsyQTFiMRRAIsDATzIxeICRvYvZE9RdZD5KEOOHpiFBePxmMdDkutkZxoQnMNkewT2Bld5PPfu3fOAmQj9p+OD4uiuefQzW/jmMGkkl6zEONmbL49MeX5fXPt9McHF4wIf4VReEpHbi+QXIR5MCkRGEGJyEUns5fuQ+4sZDDHSC/vVoqU3hoEHVZlzEbcmfySZVf311FviyDjKKwEITA1OJx13YrhLcz09vHrtRi1AZ2n8VIBFAECBQMDNC8ajV2Rz1dWYapyqX8y5MUjPqItJ5LsjvbBppWfIwRYZP2iIWUaRRBcQRMafk/GXZPLIePCioTCNb2PhU3eWJU3FbrLIOsiai6cLq1yf4ipbykUwXs/ljaln5OUD5lkXIBqXKKdyPZziogg1O5Uh+   �   �文档参考 [ThinkPHP5完全开发手册](http://www.kancloud.cn/manual/thinkphp5)

##环境搭建
```
linux+nginx+mysql+php7
```
##代码拉取下来后配置的修改
###项目配置信息的修改
```
cp .env.example  .env 

修改.env文件的数据库配置信息等
```

## 目录结构

初始的目录结构如下：

~~~
www  WEB部署目录（或者子目录）
├─application                     应用目录
│  ├─config                       配置文件目录
│  │  │ ├─extra                   自定义配置文件目录
│  │  │ ├─redis.php               Redis配置文件
│  │  │ ├─rabbitMQ.php            RabbitMQ配置文件
│  │  │ └─ ...                    更多自定义配置文件
│  │  │
│  │  ├─command.php               命令行工具配置文件
│  │  ├─common.php                公共函数文件
│  │  ├─config.php                公共配置文件
│  │  ├─route.php                 路由配置文件    {  {                                                                                                                 �r 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   �    {  {                                                                                                                 �r 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   �   �
│  │  ├─tags.php                  应用行为扩展定义文件
│  │  └─database.php              数据库配置文件
│  │
│  ├─console                      定时脚本文件目录
│  │
│  ├─call                         Handler事件处理调度入口
│  │
│  ├─dispatch                     队列消费常驻进程目录
│  │  └─controller
│  │     ├─Consume.php            具体业务事件消费进程文件
│  │     ├─Correct.php            总队列消费分发进程文件
│  │     ├─ExceptionHandle.php    异常队列消费处理进程文件
│  │     └─RBMQCommand.php        进程文件调用RMQ初始化文件
│  │
│  └─index                       对外接口目录
│     ├─controller               控制器目录
│     ├─view                     视图文件目录
│   
│
├─core                            公共扩展核心类库目录
│  │
│  ├─library                       �  常用工具类目录
│  │  ├─RabbitMQ.php              RabbitMQ操作类
│  │  └─ ...                      更多工具类
│  │
│  ├─model                         模型目录
│  │  ├─user                      用户数据模型
│  │  └─ ...                      更多数据模型
│  │
│  ├─common                       公共业务模块目录
│  │  ├─user                      用户模块目录
│  │  
│  │
│  ├─handler                      事件处理文件目录
│  │
│  │
│  └─exception                    异常信息目录
│
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         自定义路由文件
│  └─.htaccess          用于apache的重写
│
├─thinkphp              框架系统目录
│  ├─lang               语言文件目录
│  ├─library            框架类库目录
│  │  ├─think           Th   �ink类库包目录
│  │  └─traits          系统Trait目录
│  │
│  ├─tpl                系统模板目录
│  ├─base.php           基础定义文件
│  ├─console.php        控制台入口文件
│  ├─convention.php     框架惯例配置文件
│  ├─helper.php         助手函数文件
│  ├─phpunit.xml        phpunit配置文件
│  └─start.php          框架入口文件
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─artisan               命令行入口文件
~~~

## PHP编码规范
本规范是PHP互操作性框架制定小组（[PHP-FIG](https://github.com/PizzaLiu/PHP-FIG) :PHP Framework Interoperability Group）制定的PHP编码规范�   ш[PSR][]:Proposing a Standards Recommendation）中译版。

目前官方已制定的规范包括以下5份文件：
 
  - 基本代码规范[PSR-1](/docs/psr/PSR-1-basic-coding-standard-cn.md)
  - 代码风格规范[PSR-2](/docs/psr/PSR-2-coding-style-guide-cn.md)
  - 补充文档[PSR-2补充](/docs/psr/PSR-2-coding-style-guide-meta-cn.md)
  - 日志接口规范[PSR-3](/docs/psr/PSR-3-logger-interface-cn.md)
  - Autoloader[PSR-4](/docs/psr/PSR-4-autoloader-cn.md)
  - 标准补充[PSR-4补充](/docs/psr/PSR-4-autoloader-meta.md)

## 约束

 - API、Logic、Model响应，若成功就响应成功的数据。若失败就throw，不允许返回 return false。
     - `\app\exception\ResponsableException` 可直接返回给客户端的异常
     - `\app\exception\ApiException` 由API返回的不可直接返给客户端的异常
     - `\app\exception\LogicException` 由Logic返回的不可直接返给客户端的异常

 - Controller中的请求参数验证，除非无法满足，不允许写if()判断。 �   ؿ�须使用Validator来验证和取出参数 
     - 文档参考 (http://d.laravel-china.org/docs/5.4/validation#available-validation-rules)[文档]。
     - 额外验证规则1: `idcard` 用于验证身份证号
     - 额外验证规则2: `cellphone` 用于验证手机号格式
     - 额外验证规则3: `float_digits` 用于验证小数位
     - 额外验证规则4: `bankcard` 用于校验非信用卡的银行卡(且必须为`config('ultron.bank')`白名单内的银行), 不用额外再做银行卡是哪家的这种校验了
     - 额外验证规则5: `unique_if:true,...` 若非空则验证是否未存在 ` 'id' => 'unique_if:true,order,id' `
     - 额外验证规则6: `exists_if:true,...` 若非空则验证是否已存在 ` 'id' => 'exists_if:true,order,id' `
     - 额外验证规则7: `unique_in` 验证是否未存在 可扩展附加条件 如` 'id' => 'unique_in:order,id,status=1&deleted_at=null' `
     - 额外验证规则8: `exists_in` 验证是否已存在 可扩展附加条件 如` 'id' =    YYBHodY6UfpxgBtANDDirfdThgbGVgCuYMRmZzB0hkyUy7sk10mnfHp+UUnV/lChD4N8jVpAhSEGCRQTc0Rc+UIz6dx+gGeGK/INvsRZB8AqRV4Io2HVyuwsCPhBZh89+1pYcXcSVMz9MJEY+svgvUwwdzRuFt8b1iVNc4Px6MIgv4G881nBVjjRBTg57eNtR/x3kO8tosiqImPNaHL7aipBkCSgXn85GakseJLoJgb5BVVeTvFZDeqU1wD8FaK33F5DC3s7Rw0MT2Il1bG8P0NYz0DGx3C2yMeXovhsl4/7GSqplxu+RvQKadysVuselnUBOFUg/7uikSNQSdOv41BFZD/06B3wSABoMJk+4JtrCZINhFFWvyt/gv+tgiMkvrhIe0yP8Kv9ykXdjn3uwkFAu0kD6EqCSjQ3Sl0cB5UE/sgpbAFHC1QZdRbmH2B/oy9Tby3bGR/hQ7SDzegUE6BI/QicGKf2g8+PDjGhW16208iR2+EL1mZXXOzQBpyLQkNecnV7R92XPt3mPxjAAMw849/knfig++szTh+dBaGBvKhxJVbKh+9zanN6DK66ZzjblZIOByOs7c531k4qimBdpmDulHUQDvMZ6oPmrrL1tdkg9JUkiW8zMW+rdBbk58uIhpr1lDiCreVl7BxCc4SNYtELc7JfPRbN9eFz/tbm/woFEIVnqNby/l7reUoNJ34Vo1Y1qYOJRyD3DVTvmsns+KWk9owkSGqXWvirDjktYgUkf+i/1IT0938nv3nDeTFnmZgXqdPIe2rmsIhslmXY39D4zTuPYaxP8PhPk69KpJBM8r5mgPtbCzWQc6MvrPcZzBs+xEry+wQOst9IMWG4H5CU/p9Z++Qe47WALpDkFBM5gfIuQV60v7ziR79gJRufNnxZcetDzuvftXRCT9LxYdWdtNYzBkzw/DT/h/Fj8p/iPiRMiRGfXge6nnLmNoh5A4taftFp8yKUzBggBvwHobY9kq+rqbBpsvtLYQtISJ/AliYXlg=c[��   �Hj/w2sdwXisevOyr6KqlZALXmHFhmO/OyfkvEdOiXBWNg+X4PBq7YxZM6MMjKP0m/EwB/f0wvd0ezSSO05moVQhGS/mzOIYhKMLFgU+uvoxPV0rcLyG03u/1hOECISu8998w37KayFnUTMKwzf0kczGubuSfBtdFYHbJKhStocXeHUIfQx0l4DgUi1QFjX22Ro/7+zu6g5fB0FJ4YGCWPS5ChsEK8cUOLeR3Quqwz6WApKe37Ny35lTqT+SIwxDSmIqjbMPoUjwwc8VNRQd6MSYfq4Xt+BUfFEvHpWTvsogBqEAaW2IDz3sUwliTKCl2xeKSVEllFDkkH0hALzARwNRKQb2BRTHukBUhDQ221AUpPR01tg4dEG11kK1noAMCVygT+NjnBvHysAIMk4fglAEeuWtcOKcyrrBjOUtfLxMx0qXURdqwS4EBKmvj5MDPMlfLxutMul9TZUEiY1xsi3dVivdFmArK6q0b0ziyQlqPpX0dqVKnrhgI9iPPArbxvoThiFGXL/6R3L4U6mPj8LnNTKK4YU0sA15fDS9Rfr6/hP84iW9SH9WnqpAqcAavPnSerUFa9R+WboLcno+jceHrWzeOl7Ejx4jmVM1WUS9rKBwpLrsdgugyE02kbhZmS9udnJKAlif7RG4ypEjgoDUzEevINYUzCyu4OwPMBaZP5FnQnQAaYT4foJ3IcEIAN46MKtjxEoX9l8CtuNVDW1f+mvgJP5XKgcQaEDSYLkD4+UIkCdEuPTjjJUbhoCWVjZL64+N5Q3jlwdGMWPt/+KOMpA/3+trxqlNY2kP4ovw8XgpU6TPBb9iBR56XJKN9S2Kh7+HjWIJTxaoElT2seoBYfkZYCwosDI7wAmBKEwTbFCS+2iRXQy2hQYoNkTgDDvA8gLJXODkYkDWBE5p7qLA3a7Ml35Yh7mPmgP9g1MrLWEU4WNRaP6IM4I5dws/Ab8Qq+cOGku3gnSUE4REvyRy1QCwjRtr4OoB8Ac+nGuMcQEweqFZ1FsxHqhZq   �E3f1cjXlLkikSb27I3sqrG8b42tGmvPPYu0CokVBNTo9QlkW+BkvTANIHhzzJyfsF6M4sI2Ht/Cc089AaG2E6wa7ffuwIdPcGrZ2E9Zr17jfL70rGgdPzJ3pz26aJG6qcqSACa4bqGypisQBC1eF0eoP/1oQc+v4vsZajnVRzXVJcUFJ8uwU9TCGclildWpCaD9/4bVMRjlEoS8aATLmPhwhHjthqNBPQWOxKHzg2s3rtQ3n1sM8gJF2HntBmVjPLPUoHwIHi/GuMEGOcc5MGrJmCUJdqcFuWrPSUotsczu4NQ+Xtn1FBvgubueCq2dCfzot/pCRQy1muqUOXTKizY/bT5jI4+PR82XRWikUwpf4HtkVh5qgJfPQzQpmQGSR3kSiM4GFH1C0sZCWj9aA4S60m7EzmV+ruj2ND4uxbjGbWvsZvDj6QZGa0pd4pwXGYlSB5SEKMRfttpTmKkj/1OzSDuXYKwv/68+eAt7WtRPOc4bzs18p1JpVXtx5e73dNLmAGemqoA5dZ7QemDsqRWBuakyMdH2tLLHpeWse2iq+GP3dnVFUrau5oPKfihXra2MBXRHrJYhvgX7VTYa5RSlKuZ6YZZNsNF+DqbA0mQaT6y4nCpPvzUFY0/f5i9Fs/ikfo4TWLF2irNye9Zu0isLDdrZ0eBFBJVNnZjmErFnfCqBZ8Yb7EowHfKq23/bhy/I1VP4Rk3UNSwVhGI11o/rPfKYEfCTgplJek0XrqHALeNQ8tyLRiUAMgOcSGq1IkbDZozm9N+mvQYRu2k4IVFTOfj+M3IY8hje7MLuT2girwYH45UoOJe8VJAoKyor12zG1LIaV+xC1sCFOOd9Rlgds47nYTqDmeiki+ZyUKNw3CNfsqsQo5OjB8QjJtXxgfn8uZ6HoL921xMgwbackICO9N/WrV+X4M4JUI/GC/XDMumw+7vm4hMjNe/OpG0VOWmeAEQd7ODXiotLyldRTR0QiU+vXun47POOoDqoVm3MKWN91Mq9Mh7OVi3v7    {  {                                                                                                                 �r! 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   %    {  {                                                                                                                 �r 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   ^    {  {                                                                                                                 �r 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   �    > 'exists_in:order,id,status=1&deleted_at=null' `
     - 额外验证规则9: `list:integer` 验证是否满足`1,2,3,4`类似格式, 并返回[1,2,3,4]给取值的list中
     - 额外验证规则10: `null_if` 当满足条件时，此字段必传空
     - 额外验证规则11: `length` 长度验证, 如length:6表示必需为6位
     - DEMO:
```php
<?php
list($phone, $code, $sms_ticket) = \library\Validator::make($this->request->post(), [
    'phone' => 'required|cellphone',
    'code' => 'required|digits:4',
    'amount' => 'required|numeric|float_digits:0,2', // 小数位允许0~2位
    'sms_ticket' => 'required',
    'type' => 'list:integer',
    'null_one' => 'null_if:type,2',
    'null_many' => 'null_if:type,2,3,4,5,6'
]);
```
 - 

## 入队列
```
use app\library\Queue;

Queue::getInstance()->addEvent($eName, array $eBody)->push($qName);
```
- queue driver 在 .env 配置 ` QUEUE_DRIVER ` 默认支持 ` redis, rabbitMQ, sync(同步执行) `


## 日志
```
use Log;

Log::info(['x'=>1,...]);c[��   ؈[PSR][]:Proposing a Standards Recommendation）中译版。

目前官方已制定的规范包括以下5份文件：
 
  - 基本代码规范[PSR-1](/docs/psr/PSR-1-basic-coding-standard-cn.md)
  - 代码风格规范[PSR-2](/docs/psr/PSR-2-coding-style-guide-cn.md)
  - 补充文档[PSR-2补充](/docs/psr/PSR-2-coding-style-guide-meta-cn.md)
  - 日志接口规范[PSR-3](/docs/psr/PSR-3-logger-interface-cn.md)
  - Autoloader[PSR-4](/docs/psr/PSR-4-autoloader-cn.md)
  - 标准补充[PSR-4补充](/docs/psr/PSR-4-autoloader-meta.md)

## 约束

 - API、Logic、Model响应，若成功就响应成功的数据。若失败就throw，不允许返回 return false。
     - `\app\exception\ResponsableException` 可直接返回给客户端的异常
     - `\app\exception\ApiException` 由API返回的不可直接返给客户端的异常
     - `\app\exception\LogicException` 由Logic返回的不可直接返给客户端的异常

 - Controller中的请求参数验证，除非无法满足，不允许写if()判断。 �    {  {                                                                                                                 �r" 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   f   ݖ�档参考 [ThinkPHP5完全开发手册](http://www.kancloud.cn/manual/thinkphp5)

##环境搭建
```
linux+nginx+mysql+php7
```
##代码拉取下来后配置的修改
###项目配置信息的修改
```
cp .env.example  .env 

修改.env文件的数据库配置信息等
```


## 目录结构

初始的目录结构如下：

~~~
www  WEB部署目录（或者子目录）
├─application                     应用目录
│  ├─config                       配置文件目录
│  │  │ ├─extra                   自定义配置文件目录
│  │  │ ├─redis.php               Redis配置文件
│  │  │ ├─rabbitMQ.php            RabbitMQ配置文件
│  │  │ └─ ...                    更多自定义配置文件
│  │  │
│  │  ├─command.php               命令行工具配置文件
│  │  ├─common.php                公共函数文件
│  │  ├─config.php                公共配置文件
│  │  ├─route.php                 路由配置文件    {  {                                                                                                                 �r 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdqaUeW0+ytIJ/ThjDOdOpglSNIGCnDgQ5AbZeELgkP0LMQxdQn6AuXpxH6SMBy+MdBYXFqrQ9qZsHGIBgp3w0QOzuGA8HmMYnFrHO9Mg6B7G2yOgLniXYe7du8eAZxD6T8cHpdFd8+hnuvDNYcpILVnJcbw3Xx6ZYn5fXPt9MckmEgIfZVVeEpHXCxcWIYRUCkRGEKJyUUns5fuQ94va49hZJeq8UQxuUJVZD3Fr8kecXdVfT70ljszFeCUIsazB6STjbgxvabanh1ev3agF6HTGTwVYBAAUDAa9vGA8eoU3Vz2Nqcap+kWdG4eMjnmYhL870oubVmYGH2zh8YOGmGUUSfQAQXj8OR5/iSePSAY2EibxbSx86s6ypKmclyyyDnLm4unCKtuneMo6uQjG6/mCMfUMv3xAPesBROISY1W2h1U8F   �   �
│  │  ├─tags.php                  应用行为扩展定义文件
│  │  └─database.php              数据库配置文件
│  │
│  ├─console                      定时脚本文件目录
│  │
│  ├─call                         Handler事件处理调度入口
│  │
│  ├─dispatch                     队列消费常驻进程目录
│  │  └─controller
│  │     ├─Consume.php            具体业务事件消费进程文件
│  │     ├─Correct.php            总队列消费分发进程文件
│  │     ├─ExceptionHandle.php    异常队列消费处理进程文件
│  │     └─RBMQCommand.php        进程文件调用RMQ初始化文件
│  │
│  └─index                       对外接口目录
│     ├─controller               控制器目录
│     ├─view                     视图文件目录
│   
│
├─core                            公共扩展核心类库目录
│  │
│  ├─library                       �  常用工具类目录
│  │  ├─RabbitMQ.php              RabbitMQ操作类
│  │  └─ ...                      更多工具类
│  │
│  ├─model                         模型目录
│  │  ├─user                      用户数据模型
│  │  └─ ...                      更多数据模型
│  │
│  ├─common                       公共业务模块目录
│  │  ├─user                      用户模块目录
│  │  
│  │
│  ├─handler                      事件处理文件目录
│  │
│  │
│  └─exception                    异常信息目录
│
├─public                WEB目录（对外访问目录）
│  ├─index.php          入口文件
│  ├─router.php         自定义路由文件
│  └─.htaccess          用于apache的重写
│
├─thinkphp              框架系统目录
│  ├─lang               语言文件目录
│  ├─library            框架类库目录
│  │  ├─think           Th   �ink类库包目录
│  │  └─traits          系统Trait目录
│  │
│  ├─tpl                系统模板目录
│  ├─base.php           基础定义文件
│  ├─console.php        控制台入口文件
│  ├─convention.php     框架惯例配置文件
│  ├─helper.php         助手函数文件
│  ├─phpunit.xml        phpunit配置文件
│  └─start.php          框架入口文件
├─runtime               应用的运行时目录（可写，可定制）
├─vendor                第三方类库目录（Composer依赖库）
├─build.php             自动生成定义文件（参考）
├─composer.json         composer 定义文件
├─LICENSE.txt           授权说明文件
├─README.md             README 文件
├─artisan               命令行入口文件
~~~

## PHP编码规范
本规范是PHP互操作性框架制定小组（[PHP-FIG](https://github.com/PizzaLiu/PHP-FIG) :PHP Framework Interoperability Group）制定的PHP编码规范�                                                                                                                           �n 	1�showdoc框架说明文档eNqlWVtTG0cWfp9f0VV2LaKsi8HY2ShrdhOHJK6Ksza57AOmrEEaYOLRjDwXDKmUS9yFQUACBoPBRjE3J0ayEwdkCcJ/SaZnRk/+Czk9PRIjacQ6u3rQpbvP1+f69elRO+rjVbz2Aq8nw+Trvy68G2w5fynY2tIWbG1rDYcSsvQ1F1VDqjzEi1wQljDtSD86Nhd3jcyE8Xj/zeHqF/28ePv6J9cvvjmcsXLbZnECHybx3HfG0qSReYrnRqzkKOqqrMLZGTy+6yyZmsYTM92+flVNhEOhu3fvBm+zYlSQtFgwKobirKixQkgloon+xMVmhjlzxpzN4R9Gjfk9XCwwkUiEEXhRGzwn9vHi4Ln4kHJHOAdr37GnzpzRi0/NjWFjegrPLen5aWN9C8/PlsbT5lHWXB3Tj7PG4mtYdoYO6ccZYzh3MkEwogkU5MSBIDfIxhMCh+xfiGHoEvIDDNWL+yBlPHhhpLO4sFCFtjdl4xDdkfkoi48emMUF4/EYw+DUOt6ZBkH3MN4eAUXBrwxz7949BnyC0H86PiiN7ppHP9OFbw5TRmrJSo7jvfnyyBTz++La74tJNpEQ+Cir8pKIvF64sAjBo1IgMoIQlYtKYi/fh7xf1B7HzipR541icIOqzHqIW5M/4uyq/nrqLXFkLsYrQYhiDU4nGXdjeEuzPT28eu1GLUCnM34qwCIAoGAw6OUF49ErvLnqaUw1TtUv6tw45HLMwyT83ZFe3LQyM/hgC48fNMQso0iiBwjC48/x+Es8eUQysJEwiW9j4VN3liVN5bxkkXWQMxdPF1bZPsVT1slFMF7PF4ypZ/jlA+pZDyASlxirsj2s4qFIT   k   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��|    �  �                                                                                                                                         �Z 	1�eshowdoc框架说明文档eNqlWVtTG0cWftev6Cq7FlHWxWDsbJQ1u4lDElfFWZtc9gFT1iA1MPFoRp4LhlTKJe7CICABg8Fgo5ibEyPZiQOyBOG/JNMzoyf/hZyelsRIGrHOrh506e7z9bl+fXrUjvp4lay9IOuJEP36rwvvBlrOXwq0trQFWttaQ8G4LH2NI2pQlYd4EQdgiacd6UfH5uKukZ4wHu+/OVz9op8Xb1//5PrFN4czVnbbLEyQwwSZ+85YmjTST8nciJUYRV2VVSQzQ8Z3S0umpsnETLe3X1XjoWDw7t27gducGBEkLRqIiMEYJ2qcEFSpaLw/frHZ4zlzxpzNkh9Gjfk9Ush7wuGwR+BFbfCc2MeLg+diQ8od4RysfceeOnNGLzw1N4aN6Skyt6Tnpo31LTI/WxxPmUcZc3VMP84Yi69h2Rk2pB+njeHsyQTFiMRRAIsDATzIxeICRvYvZE9RdZD5KEOOHpiFBePxmMdDkutkZxoQnMNkewT2Bld5PPfu3fOAmQj9p+OD4uiuefQzW/jmMGkkl6zEONmbL49MeX5fXPt9McHF4wIf4VReEpHbi+QXIR5MCkRGEGJyEUns5fuQ+4sZDDHSC/vVoqU3hoEHVZlzEbcmfySZVf311FviyDjKKwEITA1OJx13YrhLcz09vHrtRi1AZ2n8VIBFAECBQMDNC8ajV2Rz1dWYapyqX8y5MUjPqItJ5LsjvbBppWfIwRYZP2iIWUaRRBcQRMafk/GXZPLIePCioTCNb2PhU3eWJU3FbrLIOsiai6cLq1yf4ipbykUwXs/ljaln5OUD5lkXIBqXKKdyPZziogg1O5Uh+   W   �KkpvBr5mjRXJFLFnrWRXTWW962xVWPtuWeSViGxgoAavT6BaAucrBemAQRvjpnzE9aLUVzYxuNbeO6pJyDkdoJVo/3eFfjwCU4tG/sp69VrnM+XnhWt40fm7rRHFS1SM1VZEkAF1xQq73QFnKDF6/wI+acfLej5VXw/QzWn+9Gd6oLigpNlOCpq4YxksUrr1ATw/n/D6hiMcglCXtSDZUx8OEKsdsNRp54CR/zQ+cG1G1fqi88tBnGBJOy8doOyMZ5ZapA+BI8XY9xgg5jjHCi1ZMySALvDgly55wSlllhmd3BqH6/seooN8Nxdzw2tnQn86Lf6REUM1ZruKXPolBctflp8xkYeH4+aL4tQSKckvsD3yKw81AAvnwdvUjIDJI/0JBCdDSj6hKSNhbR+tAYIdandiJ3L/FzZ21P5uBTjGpetsZvBj6cbKK0pdYFzXqQnSh1QEqIQf1lrT2GmjvxPjSKtXIKxvvy/2uAt7KlRP+U4bzg3851KpVXlxZWr39NImwOcpqoC5uR5QuuBtqdWBPqmSsdEy9PKHpeWs+6mqWKPXdvVGUnZupoPKuehXLW20hbQE7FahtgW7FfZaJRTlCqf64VZNsFG+znoAkuTaTyx4jKq3P7WJIzdfpu/FM3ik/o+TmDF2i7Oyu1Zu0mvKDQoZ2cHLyKoHOpENZeI3eRTCTwz3uBUgu6QV9322zZ8QUZP4Rs1UVewVBCS1Vg/rrfIo0fATwpmJunVXbiaAreMQ8lzLxqlAMgMcCLJ1YoYdZsxmtN/m/ZqROyi4YRETebg+8/IbcijebMTuz+hibwaHIxXvOAMeW1BvKyorFxzGFPNakyxE1kDE+Kc9x1hdcw6nofuDHqikyqay0GOwn2PfMmugo9Orh7gj5hUxwfm8+d6Hpz+2p1PgATHckICOtJ/W7d+XYKZE6AejRfqm2VSYfd3zcUnRmreHUlbK3LVPAGIOtjBrxUXl5RHUU0eEIlPr17p+OzzjqA6qFYdzCljfdTKvTIezlYt7   �+x4/8NrHcF4rPrwskdR1UqIBa+wYsO23x0Tct8jt0S4LJuHS3B7tXbGrJlRBtpR+s14mIM5vfA9PR6N5I4TWUhVCMaLObM4Bu7ogkWBj65+TK/XCtyv4frer/UEwQOh6/w337Cf8lrIWdSMwvANfSSzce6uJN9GV0XgNgmylO3hBV4dQh8D3SXAuXQXSIsa/ewdP+/s7uoOXwdBSeGBglj0uQoHBCvHFLi3kdMLssO+lgKSnt+zct+ZU6k/kiMMQ1JiKo2zDyFJ8MHPlW0oOtCJMf1cL27BrfiiXjwqB32VQQxCAVLa4B9626cSRJlAS7cvFJOiSiihyCF7IAC8wEcDUSkG+gUUR7tAVIQwNttQFKT0dNbYOHRBtdZCtZ6ADAlcoE/jY5wbx8pACzJOn4JQBDryVjhxTmXdYMbyFj5epm2lS6kLtWAXAoLU18fJAZ7Er5eNVqn0vqZKgsTGONmWbquVbguwlRVVu29M4skJqj6V9DalSp6YYCPYjzwK28b6E4YhSly/+kdy+FOpj4/C5zXSiuGFNLANeX40vUXq+v4T/OIlHaQ/K49VIFVgDd58ab3agjVqvyzdBTk9n8bjw1Y2bx0v4kePkcypmiyiXlZQOJJddrkFUOQmm0jcrPQXNzs5JQGsz/YIXOXKEUFAauajV+BrCmYWV3D2B2iLzJ/IQyHagDRCfD/Bu5CgBQBrHZjVMaKlC/svAdv+qoa2h/4aOPH/lcoFBAqQFFjuwHg5AuQJHi79OGPlhsGhpZXN0vpjY3nD+OWBUcxY+7+4vQzkz/f6mnFq01jaA/8ifDxeyhTpg8GvWIGHGpdkY32L4uHv4aBYwpMFugkq21j1hLD8EDAWFFiZHeCEQBS6CTYoyX00yS4G20IDFBs8cIYdYHmBRC5wMhiQNYFTmrsocLcr8qUf1qHvo+pA/eDUSksYRfhYFIo/4rRgzmzhJ+AXovXcQWPpVpCOcoKQ6JdErhoAjnFjDUw9AP7Ah3ONMS4ARi8Ui3orxgM1K    9UwwOPgK/0o3RigDQB6WPG22whjIwNLIHbQIpM7WDpDesqFfXLKpDM+Pb/oxCpfiNCnQb4mTYCEEIMEqqk5Yq4c4fk0Tj/AE+MV2WY/gugDINUCT6Tx8GoFFk4kvACd777dLayYO2mqhl6YaKz9RdAeOpg7GneL7w2rssb54XoUQVDfoL75rABrHI8C/Py2sfYj3nuI13ZRBDXxsSZ0uR011QBIMjCPn0xGGm98CTbmBnlFVd5uY3Ia1W1cA/BWG7/jshhK2Ns4KGJ6ES+tjOH7G8Z6Bg46hLdHPKwWw+V9/XCSqZpyueVvQKecysVuseplUROEUxX6u8sTNQqdGP02ClVA/k+F3gWFBIAKk+MLjrEaJ9lEFGnxt/ov+Nsi0Erqh4e0yvwIv96nXNjlzHcTCgTaSR5CVhJQoLtT6OA8bE30g5DCEXC0QDej1kLvC/Rn7G3ivWUj+ytUkH64AYlyChyhF4ET+9R+sOHBMS5s02k/8RydCF+yMrvmZoEU5FoSCvKSq9o/7Lj27zD5ywAaYOYf/yTvxAbfWZtx/OgsNA3kQ4krt1Q+eptTm9FldNO5x92skHA4HGdvc76zcFVTAu0yB3mjqIF26M9UHxR1l71fkw1KQ0mW8DIX+7ZCb01+uojsWLOGEle4rbyEjUtwl6hZJGpxTuaj37q5Lnze39rkR6EQqvAcPVrO32ste6HpxLZqxPJu6lDCUcidM+VZO5gVs5zQhokM2dq1Js6KQ16LSBL5L/ovNTHdze/Z/95AXOxuBvp1+hTSHtUUDpHDuuz7Gxqnce8xjP0ZDvdx6lWRNJpRztccaGdjsQ5yZ/Sd5T6DZtuPWFlmh9BZ7gMpNgTzCU3p9529Q+acXQPoDkFCMZkfIPcWqEn73yd69QNSuvFlx5cdtz7svPpVRyf8LBUfWtlNYzFnzAzDT/t/FD8q/yHiR8qQGPXhecjnLWNqh5A7cv6Yol1mxShoMMAMeA+Db3slX1fTYNPl9hbCluCRPwEgil5ic[��{    �  �                                                                                                                                                         �J 	1�Eshowdoc框架说明文档eNqlWVtTG0cWftev6Cq7FlHWxWDsbJQ1u4lDElfFWZtc9gFT1iA1MPFoRp4LhlTKJe7CICABg8Fgo5ibEyPZiQOyBOG/JNMzoyf/hZyelsRIGrHOrh50menznfvXp0ftqI9XydoLsp4I0a//uvBuoOX8pUBrS1ugta01FIzL0tc4ogZVeYgXcQCWeNqRfnRsLu4a6Qnj8f6bw9Uv+nnx9vVPrl98czhjZbfNwgQ5TJC574ylSSP9lMyNWIlR1FVZRTIzZHy3tGRqmkzMdHv7VTUeCgbv3r0buM2JEUHSooGIGIxxosYJQZWKxvvjF5s9njNnzNks+WHUmN8jhbwnHA57BF7UBs+Jfbw4eC42pNwRzsHad+xbZ87ohafmxrAxPUXmlvTctLG+ReZni+Mp8yhjro7pxxlj8bW9NBJHASwOBPAgF4sLGNm/kH2LakXmoww5emAWFozHYx4PSa6TnWlAcF4m2yOgAiLi8dy7d88D3iD0n44PiqO75tHPbOGbw6SRXLIS42RvvnxlyvP74trviwkuHhf4CKfykojcXiS/CGFnUiAyghCTi0hiL9+H3F/MVUiFXtivFi29MQw8qMqci7g1+SPJrOqvp94SR8ZRXglA/GtwOul1J4a7NNfTw6vXbtQCdJaunwqwCAAoEAi4RcF49Ipsrro6U41T9YsFNwZVGHVxiXx3pBc2rfQMOdgi4wcNMcsokugCgsj4czL+kkweGQ9eNBSm+W0sfKpmWdJU7CaLrIOsuXi6sMr1Ka6ypVoE5/Vc3ph6Rl4+YJF1AaJ5iXIq18MpLoZQt1MZk   H   �eHVyNekuSKRKvasjeyqsbxvja0aa889k7QKiRUE1Oj1CURb4GS9MA0geHPMnJ+wXoziwjYe38JzTz0BIbcTrBrt967Ah09watnYT1mvXuN8vvSsaB0/MnenPapokZqpypIAKrimUHmnK+AELV7nR8g//WhBz6/i+xmqOd2P7lQXFBecLMMhUQtnJItVWqcmgPH/G1bHYJRLEPKiHixj4sMRYrUbjjr1FDjih84Prt24Ul98bjGICyRh57UblI3xzFKD9CF4vBjjBhvEHOdAqSVjlgTYHRbkyj0nKLXEMruDU/t4ZddTbIDn7npuaO1M4Ee/1ScqYqjWdE+ZQ6e8aPHT4jM28vh41HxZhEI6JfEFvkdm5aEGePk8eJOSGSB5pCeB6GxA0SckbSyk9aM1QKhL7UbsXObnyt6eyselGNe4bI3dDH483UBpTakLnPMi3VDqgJIQhfjLWnsKM3Xkf2oUaeUSjPXl/9UGb2FPjfopx3nDuZnvVCqtKi+uXP2eRtoc4DRVFTAnzxNaD7Q9tSLQN1U6JlqeVva4tJx1N00Ve+zars5IytbVfFA5D+WqtZW2gJ6I1TLEtmC/ykajnKJU+VwvzLIJNtrPQRdYmkzjiRWXUeXGtyZh7Mbb/KVoFp/U93ECK9Z2cVZuz9pNekWhQTk7O3gRQeVQJ6q5ROz2nkrgmfEGpxJ0h7zqtt+24QsyegrfqIm6gqWCkKzG+nG9RR49An5SMDNJr+7C1RS4ZRxKnnvRKAVAZoATSa5WxKjbjNGc/tu0VyNiFw0nJGoyB99/Ru5BHs2bndj9CU3k1eBgvOIFZ8hrC+JlRWXlmsOYalZjip3IGpgQ57zvCKtj1vE8dGfQE51U0VwOchRueuRLdhV8dHL1AH/EpDo+MJ8/1/Pg9NfufAIkOJYTEtCR/tu69esSzJwA9Wi8UN8skwq7v2suPjFS8+5I2lqRS+YJQNTBDn6tuLikPIpq8oBIfHr1Ssdnn3cE1UG16mBOGeujVu6V8XC2anlnx   �/sfXusIxmPVh5c9iqpWQix4hRUbtv3umJD7HrklwjXZPFyCe6u1M2bNjDLQjtJvxsMczOmF7+nxaCR3nMhCqkIwXsyZxTFwRxcsCnx09WN6sVbgZg0X936tJwgeCF3nv/mG/ZTXQs6iZhSGb+gjmY1zdyX5NroqArdJkKVsDy/w6hD6GOguAc6lu0Ba1Ohn7/h5Z3dXd/g6CEoKDxTEos9VOCBYOabAvY2cXpAd9rUUkPT8npX7zpxK/ZEcYRiSElNpnH0ISYIPfq5sQ9GBTozp53pxC27FF/XiUTnoqwxiEAqQ0gb/0Hs+lSDKBFq6faGYFFVCCUUO2QMB4AU+GohKMdAvoDjaBaIihLHZhqIgpaezxsahC6q1Fqr1BGRI4AJ9Gh/j3DhWBlqQcfr8gyLQkbfCiXMq6wYzlrfw8TJtK11KXagFuxAQpL4+Tg7wJH69bLRKpfc1VRIkNsbJtnRbrXRbgK2sqNp9YxJPTlD1qaS3KVXyxAQbwX7kUdg21p8wDFHi+tU/ksOfSn18FD6vkVYML6SBbciTo+ktUtf3n+AXL+kg/Vl5rAKpAmvw5kvr1RasUftl6S7I6fk0Hh+2snnreBE/eoxkTtVkEfWygsKR7LLLLYAiN9lE4malv7jZySkJYH22R+AqV44IAlIzH70CX1Mws7iCsz9AW2T+RB4K0QakEeL7Cd6FBC0AWOvArI4RLV3YfwnY9lc1tD3018CJ/69ULiBQgKTAcgfGyxEgT/Bw6ccZKzcMDi2tbJbWHxvLG8YvD4xixtr/xe1lIH++19eMU5vG0h74F+Hj8VKmSB8JfsUKPNS4JBvrWxQPfw8HxRKeLNBNUNnGqmeD5cd/saDAyuwAJwSi0E2wQUnuo0l2MdgWGqDY4IEz7ADLCyRygZPBgKwJnNLcRYG7XZEv/bAOfR9VB+oHp1ZawijCx6JQ/BGnBXNmCz8BvxCt5w4aS7eCdJQThES/JHLVAHCMG2tg6gHwBz6ca4xxATB6oVjUWzEeqFmph    gEeB1/pR+nGAG0A0MOKt91GGBsZWAKxgxaZ3MHSGdJTLuyTUyad8en5RSdW+UKEPg3yNWkCJIQYJFBNzRFz5QjPp3H6AZ4Yr8g2+xFEHwCpFngijYdXK7BwIuEF6Hz37W5hxdxJUzX0wkRj7S+C9tDB3NG4W3xvWJU1zg/XowiC+gb1zWcFWON4FODnt421H/HeQ7y2iyKoiY81ocvtqKkGQJKBefxkMtJ440uwMTfIK6rydhuT06hu4xqAt9r4HZfFUMLexkER04t4aWUM398w1jNw0CG8PeJhtRgu7+uHk0zVlMstfwM65VQudotVL4uaIJyq0N9dnqhR6MTot1GoAvJ/KvQuKCQAVJgcX3CM1TjJJqJIi7/Vf8HfFoFWUj88pFXmR/j1PuXCLme+m1Ag0E7yELKSgALdnUIH52Froh+EFI6AowW6GbUWel+gP2NvE+8tG9lfoYL0ww1IlFPgCL0InNin9oMND45xYZtO+4nn6ET4kpXZNTcLpCDXklCQl1zV/mHHtX+HyV8G0AAz//gneSc2+M7ajONHZ6FpIB9KXLml8tHbnNqMLqObzj3uZoWEw+E4e5vznYWrmhJolznIG0UNtEN/pvqgqLvs/ZpsUBpKsoSXudi3FXpr8tNFZMeaNZS4wm3lJWxcgrtEzSJRi3MyH/3WzXXh8/7WJj8KhVCF5+jRcv5ea9kLTSe2VSOWd1OHEo5C7pwpz9rBrJjlhDZMZMjWrjVxVhzyWkSSyH/Rf6mJ6W5+z/73BuJidzPQr9OnkPaopnCIHNZl39/QOI17j2Hsz3C4j1OviqTRjHK+5kA7G4t1kDuj7yz3GTTbfsTKMjuEznIfSLEhmE9oSr/v7B0y5+waQHcIEorJ/AC5t0BN2v8+0asfkNKNLzu+7Lj1YefVrzo64Wep+NDKbhqLOWNmGH7a/6P4UfkPET9ShsSoD89DPm8ZUzuE3JHzxxTtMitGQYMBZsB7GHzbK/m6mgabLre3ELYEj/wJGwtZ7w==c[��m    �  �                                                                                                                                                         �J 	1�Eshowdoc框架说明文档eNqlWWtT21Ya/u5fcWaSWczEl0BIunU37LYpbTPTdBN62Q+EiYV9ADWy5OhCoNPJmLsJGGghEAgkuOGWNthJm4JjQ/kvrY4kf8pf6Ht0bCPbMpvu+gPY0nmf9/6c90jtqI9XydoLsp4I0a//uvBuoOX8pUBrS1ugta01FIzL0tc4ogZVeYgXcQCWeNqRfnRsLu4a6Qnj8f6bw9Uv+nnx9vVPrl98czhjZbfNwgQ5TJC574ylSSP9lMyNWIlR1FVZRTIzZHy3tGRqmkzMdHv7VTUeCgbv3r0buM2JEUHSooGIGIxxosYJQZWKxvvjF5s9njNnzNks+WHUmN8jhbwnHA57BF7UBs+Jfbw4eC42pNwRzsHad+xbZ87ohafmxrAxPUXmlvTctLG+ReZni+Mp8yhjro7pxxlj8bW9NBJHASwOBPAgF4sLGNm/7DtUKTIfZcjRA7OwYDwe83hIcp3sTAOA8zLZHgENEBCP5969ex5wBqH/dHxQHN01j35mC98cJo3kkpUYJ3vz5StTnt8X135fTHDxuMBHOJWXROT2IflFiDqTApERhJhcRBJ7+T7k/mGeQib0wn61aOkPw8CDqsy5iFuTP5LMqv566i1xZBzllQCEvwank153YrhLcz09vHrtRi1AZ+n6qQCLAIACgYBbFIxHr8jmqqsz1ThVv1hwY1CEUReXyHdHemHTSs+Qgy0yftAQs4wiiS4giIw/J+MvyeSR8eBFQ2Ga38bCp2qWJU3FbrLIOsiai6cLq1yf4ipbqkVwXs/ljaln5OUDFlkXIJqXKKdyPZziYgh1O5Uh+   '   �QVXRWrSXJFoYbrWRmbVWN63xlaNteeuSVqFxAkCavT6BKItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAyO04p0b63Svw4ROSXDb2k9ar1ySXKz4rWMePzN1plypaZGaqsiSACo4pVN7pCjhBi9X5EfJPP1rQc6vkfpppzvZjO9UFxQEny8D7tXBGolCldXICSPy/YXUMRnCckhfzYBmTHI5Qq51wzKmnwFE/dH5w7caV+uJzikFcIAk7r91gbExmlhqkD8XjxSgebBBzkgWlloxZGmBnWJAj90pBqSWW2R2S3Ccru65iAzy+67qhtTNBHv1Wn6jIw7Rme8oYnfJixc+Kz9jIkeNR82UBCumUxBf4HpmThxrg5XLgTUZmgOSSnhSiswFFn5C0sZDSj9YAoS61G7FzmZ8re7sqH5OiuHHZGrtp8ni6gdKaUhe40os2OMkDRkIM4i9r7SrsqSP/U6PIKpdirC//rza4C7tq1M84zh3OyXynUmlVeeFy9bsaaXNAqeuqgJXyPK71QNtTKwJ9U6VjYuVpZY6Lyxln01Sxx67t6oxkbF3NB5XzUK5aW2kL2IlYLUNtC/SrXCSCFaXK53p+lotzkX4MXWBxMkUmVhxGlXvZmoSxe2nzl4JZeFLfxwmcWNvFWdk9azfhFoUG5VzawY0IKoc6Vc0hYnfsTILMjDc4laA75FWn/bYNX9DRU/hGjdcVLBOEZDXWj+stcukRyJO8mU64dReOpsApU6LkuReNUgBkBrBIc7UixtxmjGb136bdGhG7aLAQr8kccv8Zvdq4NG92YvfHNZFXA4OxihdKQ25bUC8rKifXHMZMsxpT7ETWwIQYdr8jrI5Zx/PQnUFPdFJFc1nIUbi80S+ZVfDRydUD/BGV6vjAfP5cz4HTXzvzCZDgWI5LQEf6b+vWr0swcwLUo/FCfbNMK+z+rrn4xEjOOyNpa0XvjScAkRJ24GvFwSXlUVSTB1Ti06tXOj77vCOgDqpVB3PSWB+1sq+Mh7NVyzs73   �v/wWkcgFq0+vOxRVLUSYsErnNiw7XfGhN736C0Rbr7m4RJcRa2dMWtm1APtKPtmPMzCnJ7/nh2PRmKnFFlIVQjGizmzMAbu6IJF/o+ufszuygpcluEu3q/1BMADwev8N99wn/JasLSoGYXgG/pI5mL4riTfRldF4DYJspTr4QVeHUIfA93FwblsF0iLGv3sHT/v7O7qDl0HQUnhgYI49LkKBwQnRxW4t9HTC7LDvpYCkp7bs7LfmVPJPxIjHg9NiakUyTyEJCEHP1e2YehAJ8b0c72wBbfii3rhqBz0VQ/yIOSnpQ3+YVd3JkGV8bd0e4NRKaIE44octAf8wAt8xB+RoqCfXylp54+IEMZmG4qBFJ/OGhuHDqjWWqjWE5AhAfv7ND6KnThWGlqQcfZIgyGwkbfCiWGVc4IZy1vkeJm1lQ6lLtSCXfALUl8flv08jV8vF6lS6X1NlQSJi2LZlm6rlW7zc5UVVbtvTJLJCaY+k3Q3pUqemmAj2I888tvG+hOPhypx/eofieFPpT4+Ap/XaCtGFlLANvRh0PQWrev7T8iLl2yQ/YQ8YL0RpAqsIZsvrVdbsEbtl6W7IKfnUmR82MrkrONF8ugxkrGqySLq5QQF0+yyy82Pwje5ePxmpb+42YmVOLA+1yPgypUjjIDUzEevwNcMzCyskMwP0BaZP9HnPKwBaYT4fpx3IEELANaWYFbHqJYO7L8EbPurGtoe+mvg1P9XKhcQKEBaYNkD4+UIkCd4uPjjjJUdBocWVzaL64+N5Q3jlwdGIW3t/+L0MpA/3+ttJslNY2kP/IvI8XgxXWBP+b7iBB5qXJKN9S2GR76Hg2KJTObZJqhsY9XjvvITvWhA4GRuAAv+CHQTXECS+1iSXQy0BQcYNnjgDDfA8QKNnP9k0C9rAlaauxhwtyPyxR/Woe9j6kD9kORKSwiF+WgEij9casFKs/mfgF+o1nMHjaVbQTqCBSHeL4m4GgCOcWMNTD0A/iCHc40xLgBGLxSLeivKAzUr1    TDA4+Ar/SjVGKANAHo48bbTCGMjDUsgdtAi0ztYKk17yoV9esqk0l49t1iKVS4fZk+DvE2aAAkhBihUU3PYXDki8ymSekAmxiuyzT4E0QdApgWZSJHh1QosnEhkATrffbtbWDF3UkwNPT/RWPuLoD10MHc0fIvvDamyhn1wPQojqG9Q33yWhzUljwL8/Lax9iPZe0jWdlEYNfHRJnS5HTXVAEgyMI+PToYbb3wJNsaDvKIqb7cxPY3qNq4BeKuN33FYDCXsbhwUMbuIF1fGyP0NYz0NBx0i2yMuVouh8r4+OMlUTbnc8jegU6zi6C1OvSxqgnCqQn93eKJGoROj30ahCsj/qdC7oJAAUCF6fMExVuMkm4jCLb5W3wVfWxhaSf3wkFWZD5HX+4wLu0rz3ZQCgXYSh5CVFBTo7hQ6OA9bU/0gpHAEHC2wzZi10PsC/Rl7m2Rv2cj8ChWkH25AopwCR+lFwGKf2g82PDgm+W027aOeYxOhS1Z619zM04JcS0BBXnJU+4cd1/4don8ZQAPs+cc/6Tu1wXvWZhwfOgtNA/1QYsotlY/cxmozuoxulu5xNyskHArFuNvYexauaoq/XcaQN4rqb4f+TPVCUXfZ+zXZoCyUdAkv4+i3FXpr8rFFdMeaNYy4Qm3lJVxMgrtEzSJRi2GZj3zr5LrQeV9rkw8Fg6jCc+xoOX+vteyFphPbqhHLu6lD8ZJCzpwpz9rBrJhVCm2IytCtHWtinDjktogmke+i71KTp7v5PfvfG4iL3c1Av86eQtqjmoIRPazLvr+hYQ2/5/HYn6FQH1avirTRjGBvs7+di0Y76J3RexZ/Bs22D3GyzA2hs/gDKToE83FN6feevUPnSrv60R2KhKIyP0DvLVCT9h9K7OoHpHTjy44vO2592Hn1q45O+FksPLQym8Zi1pgZhp/2/yg+VP5DxIeUITHiJfOQz1vG1A4ld1T6Y4p1mRWjoMEAM+A9BL7tlbxdTYNNl9tbKFuCR/4EzeE8QQ==c[��O       x   u   /   J   j   S   �   !   4   �   .   3   �       �   �   a   }   b   �   �   |   �   K   2   1   0   �   A   @   �   �   �   c   +   -   ?   >   <   ;   �   �   5   6   7   8   9   :   B   C   D   E   `   �   T   �   R   Z   Y   X   �   �   �            L   M   N   O   P   Q   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   [   I   =   o   n   x   �   w   ,   �   �   �   �   �   �   �   z   {   �   �   y   �   �   p   q   r   s   t   u   v   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   �   ]   �   �   p   �   �   �   �   �   �   �   �   �   �   �   a   a   a   a   �   �-----  |:-----|-----                           |
|groupid |int   |用户组id，1：超级管理    j _�� � j                                                                                        l* 	%�	showdoc文档信息eNozMjTUMzSx1DMyNtczNLQyNrawNOByTMnNzMssLilKLMkv4irNzTNKqko3AQDo9Qxqc[�;Áz) 		+�-showdoc服务器信息eNrLyazITMxLL0jNS7cwU1Dgerq+7fmCxvd7ZpWn5FZl5VQUAEW5ns/c/XTvVLiUD7Ierhf75zxf0f1i/7xnfUvhShQszQyMzI24nraueb53YmaBlaGhpZ6RsZ6JqZ6hoQXX07ZWqLC5kZ6hhZ6ZkZ6pCVduZXFhDsQIKwUUSxS5ns6f/3RCr1V5ebleYTpQYbpecn4uFwClHFVyc[�	�f( 	�showdoc文档eNqNjb0OgzAMhHeegsVrTPipgAmQ4D1QGkGQiVHqVmqfvoGxU7c7352/VeRoESW8tVabm/k+c7BeGd6RoiXnF3JIr4f9rM9Y8DjDWMEwQT/A2ECdQTOdl7qCvrpEjAq1yk5JsjhJDbG3aVRd0Sid3VSuS5WXeYtH4M0aQcNeAhPZcIFOSoSpOPn/Q7C/2y/8fUZtc[�.Y�' 	�showdoc文档eNrLKCkpsNLXLymqNDTUy8pMzE9JzC9KzdNLzs/VzwFyczLz0nMy9XPKilOrMkqBCvL0E1VdTVWd3FQdnVRdLVUtDFQt3UAiFqaqjqZgBlDKWC+jJDcHANKBHOg=c[�l�& 	�showdoc文档eNrLKCkpsNLXLymqNDTUy8pMzE9JzC9KzdNLzs/VzwFyczLz0nMy9XPKilOrMkqBCvL0E1VdTVWd3FQdnVRdLVUtDFQt3UAiFqaqjqZgBlDKWC+jJDcHANKBHOg=c[�	   �l9wNaSmzBWJNqZrb2RWjeV9a2zVWHvuWqRVSJwgoEavTyDbApb1/DSAkM0xc37CejFK8ttkfIvMPXUFhNqOc2qk370DHz4hyWVjP2m9ek1yueKzgnX8yNyddumiReamKksCmOC4hcqarkAQtFhdHKH+9KMFPbdK7qeZ5Uwf01SXFAecLAO918IZiUKV1ckJ4Or/htUxGMFxSl4sgmVMcjhCvXbCsaCeAkfj0PnBtRtX6pvPKQZ5gSLsvHaDsTGZWWpQPhSPF6N4sEHOSRaMWjJmaYKdaUGO2islpZZYZndIcp+s7LqKDfD4rqtCa2eCPPqtvlCRh1nNdMoYnfJizc+az9jIkeNR82UBGumUwhf4HpmThxrg5XIQTUZmgORSnhSiswFFn5C0sZDSj9YAoa60G7FzmZ8rul2Nj0lR3Lhtjd00eTzdwGhNqUtc6UXnmOQBIyEG8ZetdhX21JH/qVlknUsx1pf/Vx/chV0t6mcc5w7nZL5TqbSqvXC5+12dtDlAP04bw9kTsFKdx7UeGHtqRWBuqkxMrD2tzHFxOeMcmir+2L1dXZGMrav5oLIfylVrK2MB2xGrZahvgX6Vi0SwolTFXM/PcnEu0o9hCixOpsjEisOp8shaUzD2yGz+UjALT+rnOIETa6c4K7tn7SbcstCgnUsa3IigsqlT0xwi9mDOJMjMeINdCaZDXnX6b/vwBb16Ct+o8bqGZYJQrMb6cb1HLjMCeZI30wm36cIxFDhlSpQ896JRCYDMABZprVbEWNiM0az+27TbIGI3DRbiNZVD7j+jJxiX4c0u7P64JvJqYDBWiULpkpsKGmVF5eSazZhZVuOKXcgauBDD7meE1THreB6mM5iJTrpoLgs1Cmc0+iWzCjE6OXpAPKJSHR+Yz5/rOQj6a2c9ARJsy3EJ6Ej/bd36dQnunAD1aLxQPyzTDru/ay4+MZLzzkzaVtHj4QlApIQd+FpxcEn5KqqpAyrx6dUrHZ993hFQB9WqjTlprI9a2VfGw9mq5   �Z0d7394rSMQi1ZvXvZVVLUScsErnNhw7HfmhJ736CkRDrjm4RKcOK2dMWtm1APjKPtmPMzCPT3/PdsejcROKbNQqpCMF3NmYQzC0QWL/B9d/ZgdiRU4E8ORu1/rCUAEgtf5b77hPuW1YGlRMwrBN/SRzMXwXUm+ja6KwG0SVCnXwwu8OoQ+BrqLQ3CZFiiLGvtsjZ93dnd1h66DoKTwQEEc+lyFDYKTowqc2+juBdVhH0sBSc/tWdnvzKnkH4kRj4eWxFSKZB5CkZCDnytqGDrQiTH9XC9swan4ol44Kid91YM8CPlpa0N82AmdSVBj/C3d3mBUiijBuCIH7Qt+4AU+4o9IUbDPr5Ss80dESGOzDcVAik9njY1DB1RrLVTrCciQgP19Gh/FThwrDSPIOHtywRDYlbfCiWGVc4IZy1vkeJmNlQ6jLtSCXfALUl8flv08zV8vF6ky6X1NlQSJi2LZlm6rlW7zc5UVVdo3JsnkBDOfSbq7UiVPXbAR7Ece+W1j/YnHQ424fvWPxPCnUh8fgc9rdBQjCylgG/rMZ3qL9vX9J+TFS3aR/YQ6YLMRlAqsIZsvrVdbsEbtl6W7IKfnUmR82MrkrONF8ugxkrGqySLq5QQF0+qy282Pwje5ePxmZb642YmVOLA+1yPgypEjjIDUzEevINYMzCyskMwPMBaZP2XBDjaANEJ8P847kGAEAG9LMKtj1EoH9l8CtuNVDW1f+mvgNP5XKgcQaEDaYNkD4+UIkCdEuPjjjJUdhoAWVzaL64+N5Q3jlwdGIW3t/+KMMpA/3+ttJslNY2kP4ovI8XgxXWAP877iBB56XJKN9S2GR76HjWKJTOaZElT2seqpXvnBXTQgcDI3gAV/BKYJLiDJfazILgbaggMMGyJwhhvgeIFmzn9y0S9rAlaauxhwtyPzxR/WYe5j5kD/kORKSwiF+WgEmj9cGsFKd/M/Ab9Qq+cOGku3gnQEC0K8XxJxNQBs48YauHoA/EEO5xpjXACMXmgW9VaUB    2pWqmGAxyFW+lGqMUAbAPRw4m2nE8ZGGpZA7mBEpmewVJrOlAv7dJdJpb16brGUq1w+zJ4GeZs0AQpCDFCopuawuXJE5lMk9YBMjFdkm30Isg+AzAoykSLDqxVY2JHIAky++/a0sGLupJgZen6isfUXwXqYYO5o+BbfG1JlDfvgeBRG0N9gvvksD2tKEQX4+W1j7Uey95Cs7aIwauKjTehyO2qqAZBkYB4fvRlurPgSKMaDvKIqb6eY7kZ1imsA3krxOw6PoYXdnYMmZgfx4soYub9hrKdho0Nke8TFazFU1uuDnUzVlMstfwM6xSqO3uLUy6ImCKca9HdHJGoMOnH6bQyqgPyfBr0LBgkAFaLbF2xjNUGyiSjc4mv1XfC1hWGU1A8PWZf5EHm9z7iwq3S/m1Ig0E7iEKqSggLdnUIH50E1tQ9SClvA0QJTxryF2Rfoz9jbJHvLRuZX6CD9cAMK5RQ4Si8CFvvUfvDhwTHJb7PbPho5diN0yUrvmpt52pBrCWjIS45u/7Dj2r9D9C8DGIA9//gnfac+eM/ajONDZ2FooB9KTLml8pHbWG1Gl9HN0jnuZoWEQ6EYdxt7z8JRTfG3yxjqRlH97TCfqV5o6i5bX5MNylJJl/Ayjn5bobcmH1tENdasYcQVaisv4WISnCVqFolaDMt85Fsn14XO+1qbfCgYRBWeY1vL+Xut5Sg0nfhWjVjWpg7FSwY5a6Z8105mxa1SakNUhqp2rIlx4pDbIlpEvou+S02e7ub37H9vIC/2NAPzOnsKaV/VFIzoZl2O/Q0Na/g9j8f+DIX6sHpVpINmBHub/e1cNNpBz4zes/gzGLZ9iJNlbgidxR9I0SG4H9eUfu/ZO/ReSasf3aFIKCrzA/TcAj1p/6HEjn5ASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gn/j+JD5T9EfEgZEiNeMg/1vGVM7VByR6U/ptiUWXEKBgxwA95DENteydvVNNh0ub2FsiVE5E+Qciyec[��7    {  {                                                                                                                 �r# 	1�showdoc框架说明文档eNqlWWtT21Ya/q5fcWaSWczEl0BIunU37LYpbTPTdBN62Q+EiYUtQI0sOboQ6HQy5m4CBloIBAIJbrilDXbSpuDYUP5LqyPJn/IX+h4d2ci2zKa7/uCLdN7nvT/nPXI76uNVvPYCryfD5Ou/LrwbbDl/Kdja0hZsbWsNhxKy9DUXVUOqPMSLXBCWMO1IPzo2F3eNzITxeP/N4eoX/bx4+/on1y++OZyxcttmcQIfJvHcd8bSpJF5iudGrOQo6qqswtkZPL7rLJmaxhMz3b5+VU2EQ6G7d+8Gb7NiVJC0WDAqhuKsqLFCSCWiif7ExWaGOXPGnM3hH0aN+T1cLDCRSIQReFEbPCf28eLgufiQckc4B2vfsW+dOaMXn5obw8b0FJ5b0vPTxvoWnp8tjafNo6y5OqYfZ43F17DsTCnz2nyUpTf044wxnDu5TZCiCRTkxIEgN8jGEwKH7F+IYegS8gPc1Yv7IGU8eGGks7iwUIW2N2XjgC4EivDRA7O4YDweYxicWsc70yDnvoy3R8BaCC7D3Lt3j4HAIPSfjg9Ko7vm0c904ZvDlJFaspLjeG++fGWK+X1x7ffFJJtICHyUVXlJRF4vXFiEDFIpEBlBiMpFJbGX70PeL+qO42aVqPNGMbhBVWY9xK3JH3F2VX899ZY4MhfjlSCksgank1x3Y3hLsz09vHrtRi1Ap3P9VIBFAEDBYNArCsajV3hz1dOZapyqXzS4cSjomIdL+LsjvbhpZWbwwRYeP2iIWUaRRA8QhMef4/GXePKIFGAjYZLfxsKnapYlTeW8ZJF1kDMXTxdW2T7FU9apRXBezxeMqWf45QMaWQ8gkpcYq7I9rOJhS   �   �QVXQ2rKXJFoX7r2RmbVWN63xlaNteeuRVqFxAkCavT5BLItYFnPTwMI2Rwz5yesF6Mkv03Gt8jcU1dAqO04p0b63Tvw4ROSXDb2k9ar1ySXKz4rWMePzN1ply5aZG6qsiSACY5bqKzpCgRBi9XFEepPP1rQc6vkfppZzvQxTXVJccDJMrB7LZyRKFRZnZwAqv5vWB2DERyn5MUiWMYkhyPUayccC+opcDQOnR9cu3GlvvmcYpAXKMLOazcYG5OZpQblQ/F4MYoHG+ScZMGoJWOWJtiZFuSovVJSaolldock98nKrqvYAI/vuiq0dibIo9/qCxV5mNVMp4zRKR/W/Kz5jI0cOR41XxagkU4pfIHvkTl5qAFeLgfRZGQGSC7lSSE6G1D0CUkbCyn9aA0Q6kq7ETuX+bmi29X4mBTFjdvW2E2Tx9MNjNaUusSVPnSMSR4wEmIQf9lqV2FPHfmfmkXWuRRjffl/9cFd2NWifsZx7nBO5juVSqvaC5e739VJmwP047QxnD0BK9V5XOuBsadWBOamysTE2tPKHBeXM86hqeKP3dvVFcnYupoPKvuhXLW2MhawHbFahvoW6Fe5SAQrSlXM9fwsF+ci/RimwOJkikysOJwqT6w1BWNPzOYvBbPwpH6OEzixdoqzsnvWbsItCw3auaTBjQgqmzo1zSFiz+VMgsyMN9iVYDrkVaf/tg9f0Kun8I0ar2tYJgjFaqwf13vkMiOQJ3kznXCbLhxDgVOmRMlzLxqVAMgMYJHWakWMhc0Yzeq/TbsNInbTYCFeUznk/jN6gHEZ3uzC7o9rIq8GBmOVKJQuuamgUVZUTq7ZjJllNa7YhayBCzHsfkZYHbOO52E6g5nopIvmslCjcESjXzKrEKOTowfEIyrV8YH5/Lmeg6C/dtYTIMG2HJeAjvTf1q1fl+DOCVCPxgv1wzLtsPu75uITIznvzKRtFT0dngBEStiBrxUHl5Svopo6oBKfXr3S8dnnHQF1UK3amJPG+qiVfWU8nK1a3   �tnx/ofXOgKxaPXmZV9FVSshF7zCiQ3HfmdO6HmPnhLhfGseLsGB09oZs2ZGPTCOsm/Gwyzc0/Pfs+3RSOyUMgulCsl4MWcWxiAcXbDI/9HVj9mJWIEjMZy4+7WeAEQgeJ3/5hvuU14LlhY1oxB8Qx/JXAzfleTb6KoI3CZBlXI9vMCrQ+hjoLs4BJdpgbKosc/W+Hlnd1d36DoISgoPFMShz1XYIDg5qsC5je5eUB32sRSQ9Nyelf3OnEr+kRjxeGhJTKVI5iEUCTn4uaKGoQOdGNPP9cIWnIov6oWjctJXPciDkJ+2NsSHHdCZBDXG39LtDUaliBKMK3LQvuAHXuAj/ogUBfv8Ssk6f0SENDbbUAyk+HTW2Dh0QLXWQrWegAwJ2N+n8VHsxLHSMIKMswcXDIFdeSucGFY5J5ixvEWOl9lY6TDqQi3YBb8g9fVh2c/T/PVykSqT3tdUSZC4KJZt6bZa6TY/V1lRpX1jkkxOMPOZpLsrVfLUBRvBfuSR3zbWn3g81IjrV/9IDH8q9fER+H+NjmJkIQVsQx/5TG/Rvr7/hLx4yS6yn1AHbDaCUoE1ZPOl9WoL1qj9snQX5PRciowPW5mcdbxIHj1GMlY1WUS9nKBgWl12u/lR+CYXj9+szBc3O7ESB9bnegRcOXKEEZCa+egVxJqBmYUVkvkBxiLzpyzYwQaQRojvx3kHEowA4G0JZnWMWunA/kvAdryqoe1Lfw2cxv9K5QACDUgbLHtgvBwB8oQIF3+csbLDENDiymZx/bGxvGH88sAopK39X5xRBvLne73NJLlpLO1BfBE5Hi+mC+xZ3lecwEOPS7KxvsXwyPewUSyRyTxTgso+Vj3UKz+3iwYETuYGsOCPwDTBBSS5jxXZxUBbcIBhQwTOcAMcL9DM+U8u+mVNwEpzFwPudmS++MM6zH3MHOgfklxpCaEwH41A84dLI1jpbv4n4Bdq9dxBY+lWkI5gQYj3SyKuBoBt3FgDVw+AP8jhXGOMC4DRC82i3oryQ    M1KNQzwOMRKP0o1BmgDgB5OvO10wthIwxLIHYzI9AyWStOZcmGf7jKptFfPLZZylcuH2dMgb5MmQEGIAQrV1Bw2V47IfIqkHpCJ8Ypssw9B9gGQWUEmUmR4tQILOxJZgMl3354WVsydFDNDz080tv4iWA8TzB0N3+J7Q6qsYR8cj8II+hvMN5/lYU0pogA/v22s/Uj2HpK1XRRGTXy0CV1uR001AJIMzOOjN8ONFV8CxXiQV1Tl7RTT3ahOcQ3AWyl+x+ExtLC7c9DE7CBeXBkj9zeM9TRsdIhsj7h4LYbKen2wk6macrnlb0CnWMXRW5x6WdQE4VSD/u6IRI1BJ06/jUEVkP/ToHfBIAGgQnT7gm2sJkg2EYVbfK2+C762MIyS+uEh6zIfIq/3GRd2le53UwoE2kkcQlVSUKC7U+jgPKim9kFKYQs4WmDKmLcw+wL9GXubZG/ZyPwKHaQfbkChnAJH6UXAYp/aDz48OCb5bXbbRyPHboQuWeldczNPG3ItAQ15ydHtH3Zc+3eIvjKAAdjzj3/Sv9QH71mbcXzoLAwN9J8SU26pfOQ2VpvRZXSzdI67WSHhUCjG3cbes3BUU/ztMoa6UVR/O8xnqheausvW12SDslTSJbyMo99W6K3JxxZRjTVrGHGF2spLuJgEZ4maRaIWwzIf+dbJdaHzvtYmHwoGUYXn2NZy/l5rOQpNJ75VI5a1qUPxkkHOminftZNZcauU2hCVoaoda2KcOOS2iBaR76LvUpOnu/k9++0N5MWeZmBeZ08h7auaghHdrMuxv6FhDb/n8dj/Q6E+rF4V6aAZwd5mfzsXjXbQM6P3LP4Mhm0f4mSZG0Jn8QdSdAjuxzWl33v2Dr1X0upHdygSisr8AD23QE/S90ml9zFASje+7Piy49aHnVe/6uiEn8XCQyuzaSxmjZlh+Gm/R/Gh8gsRH1KGxIiXzEM9bxlTO5TcUenFFJsyK07BgAFuwN8QxLZX8nY1DTZdbm+hbAkR+ROtSCx+c[��.  �  � I         0
 	%!showdoc接口信息1：注册c[��~Q	 	%cshowdoc文档信息211.149.237.11:33890
Administrator
umn2bzg4c[�;܄b 		+�showdoc服务器信息lixiangpeng86  
密码：wdmzjlxp86 
登录密码：Lixiangpeng86
远程连接密码： 960272
公网ip:119.23.45.118
内网ip:172.18.62.54
mysql密码: Lixiangpeng86!
域名:www.qgmysg.com



小程序账号：18670042229@163.com  密码：cygfcygf88  
appid：wx220138ed7e16e84a AppSecret：d22b1f909edd7da198f5201ee50b7da3


商户号：1513284201 操作密钥:cygfcygf88!   支付密钥:jBYX2qrpNT6FeoeJn72Otftm9Ge3eh2f


微信公众账号：258815165@qq.com  密码：cygfcygf88


阿里云账号：lixiangpeng86  密码：wdmzjlxp86
实例：root  Lixiangpeng86
c[�P�   � 	�Cshowdoc文档http://try11.jiaodaoren.com/liaolingli/lvsezhujian/a%E5%BF%AB%E9%80%9F%E5%85%A5%E5%8F%A3.html

git clone git@39.106.214.242:/project/controller/lvsejianzhu.git

git clone git@39.106.214.242:/project/core/lvsejianzhu.gitc[�?�   " "                                                                                                                                                                                                                                                                                      �r, 	�-showdoc文档eNqNTz1PwkAY3u9XdOl6pZSS1omikBANiUKispHj0g+PFtsDAhMOajQaYDMu6KITkhgTE1D4MVBbJv+CV0zExMWb3vf5eJ/nDEprG4JA3ZYoQsssO5Wy42IbIqcqELYS09aJKZCGh9tGnQlsocxnZD6d5bU0n1F5Jcar2QhRZF6TVwOjJGjQKgFANymHiGNjjk0pSYViLAnjYgLGE/ENoeY6FkZUQI5NXYcQ7K6CohQWBpnl/xdc/NcL/MHA711/vt02m01IvLZ1ZEU/A+HpNHwaLcZ97htMiUkpIjh/dBbcnTDDilDYA8FguJjdMwhoCGHP28atXIWtO0Utl1DlzGHJQwf5ZH1NFzByMWWSRl3SjZKnxdrH+ZImoU3PtNC+vqUUdmvFPRAMp6zdvNMLJrPw4nnx3vUn4+Cx/3HZmXf6YHkzW55fsZLhy4PffWX3fuu4ddefql9tu8E3c[�e�f+ 	�showdoc文档eNqNjb0OgzAMhHeegsVrTPipgAmQ4D1QGkGQiVHqVmqfvoGxU7c7352/VeRoESW8tVabm/k+c7BeGd6RoiXnF3JIr4f9rM9Y8DjDWMEwQT/A2ECdQTOdl7qCvrpEjAq1yk5JsjhJDbG3aVRd0Sid3VSuS5WXeYtH4M0aQcNeAhPZcIFOSoSpOPn/Q7C/2y/8fUZtc[�?�{  � @� �                                                                                                                                                                         �
 	%�Kshowdoc接口信息1：注册

2:短信验证码
http://local.tryine.com/user/sendSmsCode?type=1&phone=13262957532c[�Q^�8 	�;showdoc文档http://try11.jiaodaoren.com/liaolingli/lvsezhujian/a%E5%BF%AB%E9%80%9F%E5%85%A5%E5%8F%A3.html

git clone git@39.106.214.242:/project/controller/lvsejianzhu.git

git clone git@39.106.214.242:/project/core/lvsejianzhu.git


域名：www.lszjkj.com
腾讯云 lszjkj@163.com 密码： lszj8888
短信：
AccessKeyId：LTAI495EYZscXN6u
AccessKeySecret：vu3ghZsA0zqNZA3cCsijcWgD8SQpTR
签名【绿色住建科技】
阿里云账号：绿色住建  密码：lszj8888

微信开放平台：账号：lszjkj@163.com   密码：lszj8888







c[�QJ   2	%!showdoc接口信息1：注册c[��~Q	 	%cshowdoc文档信息211.149.237.11:33890
Administrator
umn2bzg4c[�;�                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     �r- 	�-showdoc文档eNqNTz1PwkAY3u9XdOl6pZSS1omikBANiUKispHj0g+PFtsDAhMOajQaYDMu6KITkhgTE1D4MVBbJv+CV0zExMWb3vf5eJ/nDEprG4JA3ZYoQsssO5Wy42IbIqcqELYS09aJKZCGh9tGnQlsocxnZD6d5bU0n1F5Jcar2QhRZF6TVwOjJGjQKgFANymHiGNjjk0pSYViLAnjYgLGE/ENoeY6FkZUQI5NXYcQ7K6CohQWBpnl/xdc/NcL/MHA711/vt02m01IvLZ1ZEU/A+HpNHwaLcZ97htMiUkpIjh/dBbcnTDDilDYA8FguJjdMwhoCGHP28atXIWtO0Utl1DlzGHJQwf5ZH1NFzByMWWSRl3SjZKnxdrH+ZImoU3PtNC+vqUUdmvFPRAMp6zdvNMLJrPw4nnx3vUn4+Cx/3HZmXf6YHkzW55fsZLhy4PffWX3fuu4ddefql9tu8E3c[�_