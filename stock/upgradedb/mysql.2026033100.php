<?php
$this->DB->BeginTrans();

$this->DB->Execute("ALTER TABLE cash DROP COLUMN stockid_tbd");

$this->DB->Execute('UPDATE stck_dbinfo SET keyvalue = ? WHERE keytype = ?', array('2026033100', 'dbversion'));

$this->DB->CommitTrans();

?>
