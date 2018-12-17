<?php
/**
 * Created by PhpStorm.
 * User: jiangtian.yan
 * Date: 11/16/2018
 * Time: 4:24 PM
 */
namespace Drupal\mch\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;



class MchController {
  public function view() {
    /*return array(
    '#title' => 'Mch',
    '#markup' => 'Here is Mch.',
    );*/
    //return \Drupal::formBuilder()->getForm('Drupal\mch\Form\SearchForm');
    $response = new JsonResponse();
    $data = array(
      'date' => time(),
      'site_name' => 'test',
      'site_email' => 'test@test.com',
      'random_node' => array(
        'title' => 'title',
        'body' => 'body',
      )
    );

    $response->setData($data);

    return $response;
  }
}
