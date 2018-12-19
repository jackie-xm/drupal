<?php
/**
 * Created by PhpStorm.
 * User: jiangtian.yan
 * Date: 11/16/2018
 * Time: 4:24 PM
 */
namespace Drupal\mch\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class MchController extends ControllerBase {
    public function items() {
      /*return array(
      '#title' => 'Mch',
      '#markup' => 'Here is Mch.',
      );*/
      //return \Drupal::formBuilder()->getForm('Drupal\mch\Form\SearchForm');
      $response = new JsonResponse();
      $data = array(
        'chunk' => array(
          'size' => 1,
          'pagination_token' => 'H40283950AIS',
        ),
        '_embedded' => array(
          'items' => array(
            'lang' => 'ja_JP',
            'item_name'=>'ベッド',
            'item_code'=>'ITEM0001',
            'item_label'=>'ベッド',
            'item_code_alt'=>'47478619',
            'reservation_flag'=>'true',
            'store_receive_flag'=>'true',
            'status'=>'PUBLISHED',
            'start_timestamp'=>'1467334800000',
            'end_timestamp'=>'1467338399000',
            'memo'=>'ﾍﾞｯﾄﾞ',
            'description'=>'ベッド',
            'attributes'=>array(
              'attr01'=>'登録したキー名1と値1',
              'attr02'=>array(
                'attr03'=>'登録したキー名2と値2'
              )
            )
          ),
          'tags'=>array(),
          'coupon_keywords' => array(
            "クーポンA",
            "クーポンB",
          ),
          'keywords'=>array(),
          'brand_code'=>'',
          'promotion_status'=>"NEW",
          'spec_info'=>array(),
          'access_policy'=>array(
            'statements'=>array(
              'effect'=>'allow',
              'action'=>'read',
              'authorities'=>array(
                'X',
                'Y',
              )
            )
          ),
          'branches'=>array(),
          'badges'=>array(
            'badge1',
            'badge2',
            'badge3'
          ),
          'public_item'=>true,
          'sales_status'=>'SALE',
          'country_code_of_origin'=>'JPY',
          'item_section'=>'null',
          'item_department'=>'null',
          'item_line'=>'null',
          'item_class'=>'null',
          'planned_year'=>'14SS',
          'sales_start_timestamp'=>'1467334800000',
          'sales_end_timestamp'=>'1467338399000',
          'item_type'=>'NORMAL',
          'tax_code'=>'TX0001',
          'tax_area'=>'TA0001',
          'size'=>'null',
          'color'=>'white',
          'purchase_methods'=>array(
            'method1',
            'method2'
          ),
          'owner'=>'CUSTOMER0001',
          'version'=>'0',
          'register_timestamp'=>'1462064400000',
          'register_principal'=>'Tom',
          'update_timestamp'=>'1462071600000',
          'update_principal'=>'Cruise',
          'prn'=>'prismatix:item/items/ITEM0001'
        )
      );

      $response->setData($data);
      return $response;
    }

    public function item() {
      $response = new JsonResponse();
      $data = array(
        'lang'=>'ja_JP',
        'item_code'=>'ITEM0001',
        'item_label'=>'ベッド',
        'item_code_alt'=>'47478619',
        'reservation_flag'=>'true',
        'store_receive_flag'=>'true',
        'status'=>'PUBLISHED',
        'start_timestamp'=>'1467334800000',
        'end_timestamp'=>'1467338399000',
        'item_name'=>'ベッド',
        'memo'=>'ﾍﾞｯﾄﾞ',
        'description'=>'ベッド',
        'attributes'=>array(
            'attr01'=>'登録したキー名1と値1',
            'attr02'=>array(
                'attr03'=>'登録したキー名2と値2',
            )
        ),
        'tags'=>array(),
        'coupon_keywords'=>array(
          'クーポンA',
          'クーポンB'
        ),
        'keywords'=>array(),
        'brand_code'=>'',
        'promotion_status'=>'NEW',
        'access_policy'=>array(
          'statements'=>array(
            'effect'=>'allow',
            'action'=>'read',
            'authorities'=>array(
              'X',
              'Y'
            )
          )
        ),
        'branches'=>array(),
        'badges'=>array(
          'badges1',
          'badges2',
          'badges3'
        ),
        'public_item'=>'true',
        'sales_status'=>'SALE',
        'country_code_of_origin'=>'JPY',
        'item_section'=>'null',
        'item_department'=>'null',
        'item_line'=>'null',
        'item_class'=>'null',
        'planned_year'=>'14SS',
        'sales_start_timestamp'=>'1467334800000',
        'sales_end_timestamp'=>'1467338399000',
        'item_type'=>'NORMAL',
        'tax_code'=>'TX0001',
        'tax_area'=>'TA0001',
        'size'=>'null',
        'color'=>'white',
        'owner'=>'CUSTOMER0001',
        'version'=>'0',
        'register_timestamp'=>'1462064400000',
        'register_principal'=>'Tom',
        'update_timestamp'=>'1462071600000',
        'update_principal'=>'Cruise',
        'prn'=>'prismatix:item/items/ITEM0001',
      );
      $response->setData($data);
      return $response;
    }

    public function catlisting() {
      $response = new JsonResponse();
      $data = array(
        'chunk' => array(
          'size' => 1,
          'pagination_token' => '38B8C72N1U47',
        ),
        '_embedded' => array(
          'categories' => array(
            'lang' => 'ja_JP',
            'category_code'=>'C08090502',
            'parent_category_code'=>'PLANCAMP',
            'category_name'=>'家族で使えるこども食器',
            'status'=>'PUBLISHED',
            'start_timestamp'=>'1467334800000',
            'end_timestamp'=>'1467338399000',
            'memo'=>'ﾍﾞｯﾄﾞ',
            'facet_disp_flag'=>'true',
            'category_path'=>':PLAN:PLANCAMP:C08090502:',
            'priority'=>'0',
            'description'=>'食器',
            'attributes'=>array(
              'attr01'=>'登録したキー名1と値1',
              'attr02'=>array(
                'attr03'=>'登録したキー名2と値2'
              )
            )
          ),
          'tags'=>array(),
          'keywords'=>array(),
          'branches'=>array(),
          'badges'=>array(
            'badge1',
            'badge2',
            'badge3'
          ),
          'version'=>'0',
          'register_timestamp'=>'1462064400000',
          'register_principal'=>'Tom',
          'update_timestamp'=>'1462071600000',
          'update_principal'=>'Cruise',
        )
      );
      $response->setData($data);
      return $response;
    }

    public function category() {
      $response = new JsonResponse();
      $data = array(
        'lang'=>'ja_JP',
        'category_code'=>'C08090502',
        'status'=>'PUBLISHED',
        'start_timestamp'=>'1467334800000',
        'end_timestamp'=>'1467338399000',
        'parent_category_code'=>'PLANCAMP',
        'category_name'=>'家族で使えるこども食器',
        'memo'=>'メモ',
        'facet_disp_flag'=>'true',
        'category_path'=>':PLAN:PLANCAMP:C08090502:',
        'priority'=>'0',
        'description'=>'食器',
        'attributes'=>array(
          'attr01'=>'登録したキー名1と値1',
          'attr02'=>array(
            'attr03'=>'登録したキー名2と値2'
          )
        ),
        'tags'=>array(),
        'keywords'=>array(),
        'branches'=>array(),
        'badges'=>array(
          'badge1',
          'badge2',
          'badge3'
        ),
        'version'=>'0',
        'register_timestamp'=>'1462064400000',
        'register_principal'=>'Tom',
        'update_timestamp'=>'1462071600000',
        'update_principal'=>'Cruise',
      );
      $response->setData($data);
      return $response;
    }
}
