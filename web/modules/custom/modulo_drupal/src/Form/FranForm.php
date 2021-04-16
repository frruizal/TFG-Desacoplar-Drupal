<?php
namespace Drupal\modulo_drupal\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Routing\TrustedRedirectResponse;
class FranForm extends FormBase {
  public function getFormId() {
    // TODO: Implement getFormId() method.
    return 'modulo_drupal';
  }
  /*public function indice(){
    $nid=1;

    $nodo=node_load($nid);


    drupal_set_message($nodo->label());
    drupal_set_message($nodo->url());

    $items['modulo_drupal'] =[
      '#title'=> t('Pagina a generar'),

    ];
    return $items;
  }*/
  public function buildForm(array $form, FormStateInterface $form_state) {
    // TODO: Implement buildForm() method.
    $nid=1;
    $nodo=node_load($nid);

    $form['caja'] = [
      '#type' => 'fieldset',
      '#title' => $this-> t('Nodos Drupal'),
      '#description' => $this->t('Nodos: @label1
      @url1',
        [ '@label1' => $nodo->label(),
          '@url1' => $nodo->url(),
        ])
    ];

    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this-> t('Pagina a compilar'),
      ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this-> t('Compilar pagina'),
    ];
    //return new TrustedRedirectResponse('http://localhost:8000/');
    return $form;
  }
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // TODO: Implement submitForm() method.
    /*$nid=1;
    $nid2=2;//variable nid =1
    $nodo=node_load($nid);
    $nodo2=node_load($nid2);

    drupal_set_message($nodo->label());
    drupal_set_message($nodo->url());
    drupal_set_message($nodo2->label());
    drupal_set_message($nodo2->url());
    drupal_set_message($form_state->getValue('name'));*/
    drupal_set_message('hola');


  }

  /* Rendering and re-rendering the DOM
   * onItemClick: function(){
   *  this.setState({selectedItem:2});
   * }
   * */

  /* https://www.youtube.com/watch?v=NMW_AMsxK68
   * luego usar  JSX
   */
}
