<?php
$this->DB->BeginTrans();

$this->DB->Execute("ALTER TABLE stck_receivenotes ADD paymentday INT NULL DEFAULT NULL AFTER paid;");

$this->DB->Execute('UPDATE stck_dbinfo SET keyvalue = ? WHERE keytype = ?', array('2026040800', 'dbversion'));

$this->DB->CommitTrans();

?>
