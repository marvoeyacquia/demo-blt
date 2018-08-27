<?php
// DO NOT MODIFY THIS FILE.
// This file was created by the drush acquia-update command. Changes will be
// lost the next time drush acquia-update runs.

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site mopcc, environment dev.
$aliases['dev'] = array(
  'root' => '/var/www/html/mopcc.dev/docroot',
  'ac-site' => 'mopcc',
  'ac-env' => 'dev',
  'ac-realm' => 'devcloud',
  'uri' => 'mopcc3qdgwjrrjb.devcloud.acquia-sites.com',
  'remote-host' => 'mopcc3qdgwjrrjb.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'mopcc.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['dev.livedev'] = array(
  'parent' => '@mopcc.dev',
  'root' => '/mnt/gfs/mopcc.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site mopcc, environment prod.
$aliases['prod'] = array(
  'root' => '/var/www/html/mopcc.prod/docroot',
  'ac-site' => 'mopcc',
  'ac-env' => 'prod',
  'ac-realm' => 'devcloud',
  'uri' => 'mopccm9lcscfazp.devcloud.acquia-sites.com',
  'remote-host' => 'mopccm9lcscfazp.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'mopcc.prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['prod.livedev'] = array(
  'parent' => '@mopcc.prod',
  'root' => '/mnt/gfs/mopcc.prod/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site mopcc, environment test.
$aliases['test'] = array(
  'root' => '/var/www/html/mopcc.test/docroot',
  'ac-site' => 'mopcc',
  'ac-env' => 'test',
  'ac-realm' => 'devcloud',
  'uri' => 'mopccqheg8xsdwq.devcloud.acquia-sites.com',
  'remote-host' => 'mopccqheg8xsdwq.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'mopcc.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['test.livedev'] = array(
  'parent' => '@mopcc.test',
  'root' => '/mnt/gfs/mopcc.test/livedev/docroot',
);
