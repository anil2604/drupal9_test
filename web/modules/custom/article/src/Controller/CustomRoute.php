<?php

namespace Drupal\article\Controller;

use Drupal\Core\Controller\ControllerBase;

class CustomRoute extends ControllerBase {
    public function content() {
        $nids = \Drupal::entityQuery('node')->condition('type','article')->sort('nid', 'DESC')->range(0, 5)->execute();
        $nodes =  \Drupal\node\Entity\Node::loadMultiple($nids);

        foreach($nodes as $key => $node){
            $results[$key]['id'] = $node->id();
            $results[$key]['title'] = $node->getTitle();
        }

        return [
            '#theme' => 'template_overview',
            '#org_name' => "key2goal tutorials",
            '#website_link' => "https://www.key2goal.com/",
            '#results' => $results,
        ];
    }
}