<?php

/**
 * @file
 * Contains \Drupal\Tests\node\Unit\Plugin\migrate\source\d6\NodeRevisionTest.
 */

namespace Drupal\Tests\node\Unit\Plugin\migrate\source\d6;

use Drupal\Tests\migrate\Unit\MigrateSqlSourceTestCase;

/**
 * Tests D6 node revision source plugin.
 *
 * @group node
 */
class NodeRevisionTest extends MigrateSqlSourceTestCase {

  const PLUGIN_CLASS = 'Drupal\node\Plugin\migrate\source\d6\NodeRevision';

  // The fake Migration configuration entity.
  protected $migrationConfiguration = [
    'id' => 'test',
    // The fake configuration for the source.
    'source' => [
      'plugin' => 'd6_node_revision',
    ],
    'sourceIds' => [
      'vid' => [
        'alias' => 'v',
      ],
    ],
    'destinationIds' => [
      'vid' => [
        // This is where the field schema would go.
      ],
    ],
  ];

  protected $databaseContents = [
    'node' => [
      [
        'nid' => 1,
        'type' => 'page',
        'language' => 'en',
        'status' => 1,
        'created' => 1279051598,
        'changed' => 1279051598,
        'comment' => 2,
        'promote' => 1,
        'moderate' => 0,
        'sticky' => 0,
        'tnid' => 0,
        'translate' => 0,
        'vid' => 4,
        'uid' => 1,
        'title' => 'title for revision 1 (node 1)',
      ],
      [
        'nid' => 2,
        'type' => 'article',
        'language' => 'en',
        'status' => 1,
        'created' => 1279290908,
        'changed' => 1279308993,
        'comment' => 0,
        'promote' => 1,
        'moderate' => 0,
        'sticky' => 0,
        'tnid' => 0,
        'translate' => 0,
        'vid' => 2,
        'uid' => 1,
        'title' => 'title for revision 2 (node 2)',
      ],
    ],
    'node_revisions' => [
      [
        'nid' => 1,
        'vid' => 1,
        'uid' => 1,
        'title' => 'title for revision 1 (node 1)',
        'body' => 'body for revision 1 (node 1)',
        'teaser' => 'teaser for revision 1 (node 1)',
        'log' => 'log for revision 1 (node 1)',
        'format' => 1,
        'timestamp' => 1279051598,
      ],
      [
        'nid' => 1,
        'vid' => 3,
        'uid' => 1,
        'title' => 'title for revision 3 (node 1)',
        'body' => 'body for revision 3 (node 1)',
        'teaser' => 'teaser for revision 3 (node 1)',
        'log' => 'log for revision 3 (node 1)',
        'format' => 1,
        'timestamp' => 1279051598,
      ],
      [
        'nid' => 1,
        'vid' => 4,
        'uid' => 1,
        'title' => 'title for revision 4 (node 1)',
        'body' => 'body for revision 4 (node 1)',
        'teaser' => 'teaser for revision 4 (node 1)',
        'log' => 'log for revision 4 (node 1)',
        'format' => 1,
        'timestamp' => 1279051598,
      ],
      [
        'nid' => 2,
        'vid' => 2,
        'uid' => 1,
        'title' => 'title for revision 2 (node 2)',
        'body' => 'body for revision 2 (node 2)',
        'teaser' => 'teaser for revision 2 (node 2)',
        'log' => 'log for revision 2 (node 2)',
        'format' => 1,
        'timestamp' => 1279308993,
      ],
    ],
  ];

  // There are three revisions of nid 1, but the NodeRevision source ignores
  // the current revision. So only two revisions will be returned here. nid 2
  // is ignored because it only has one revision (the current one).
  protected $expectedResults = [
    [
      // Node fields.
      'nid' => 1,
      'type' => 'page',
      'language' => 'en',
      'status' => 1,
      'created' => 1279051598,
      'changed' => 1279051598,
      'comment' => 2,
      'promote' => 1,
      'moderate' => 0,
      'sticky' => 0,
      'tnid' => 0,
      'translate' => 0,
      // Node revision fields.
      'vid' => 1,
      'node_uid' => 1,
      'revision_uid' => 1,
      'title' => 'title for revision 1 (node 1)',
      'body' => 'body for revision 1 (node 1)',
      'teaser' => 'teaser for revision 1 (node 1)',
      'log' => 'log for revision 1 (node 1)',
      'format' => 1,
    ],
    [
      // Node fields.
      'nid' => 1,
      'type' => 'page',
      'language' => 'en',
      'status' => 1,
      'created' => 1279051598,
      'changed' => 1279051598,
      'comment' => 2,
      'promote' => 1,
      'moderate' => 0,
      'sticky' => 0,
      'tnid' => 0,
      'translate' => 0,
      // Node revision fields.
      'vid' => 3,
      'node_uid' => 1,
      'revision_uid' => 1,
      'title' => 'title for revision 3 (node 1)',
      'body' => 'body for revision 3 (node 1)',
      'teaser' => 'teaser for revision 3 (node 1)',
      'log' => 'log for revision 3 (node 1)',
      'format' => 1,
    ],
  ];

}
