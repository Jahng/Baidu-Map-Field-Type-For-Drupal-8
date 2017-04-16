# Baidu-Map-Field-Type-For-Drupal-8
Defines a baidu map field type.

This module makes your drupal 8 site possible to define a baidu map field type to show the location of company, school, hospital and so on, and it is able to show the way to the place you marked.

Feature
1. define a baidu map field type to show the location
2. show the way to the place you marked

Install
1. download the baidumap_fieldtype module, and put it under 'modules' folder of your drupal 8 site project.
2. go to "admin/modules", you can find 'BaiduMap' module under FIELD TYPES package, install this module
3. go to "admin/structure/baidumap_fieldtype/settings", you should set the baidu map AK which you applied, if you do not have one, you have to apply one from the following url:
http://lbsyun.baidu.com/.

Usage
1. add a field and select the "Baidu Map" field type
2. config the address, phone, profile and the location you want to mark
3. config the formatter of this field type, says the width,height and title
