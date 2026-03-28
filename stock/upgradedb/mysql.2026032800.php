<?php
$this->DB->BeginTrans();

$this->DB->Execute("ALTER TABLE invoicecontents DROP COLUMN stockid_tbd");

$this->DB->Execute("ALTER TABLE documents DROP COLUMN invcomment_tbd");

$this->DB->Execute('UPDATE stck_dbinfo SET keyvalue = ? WHERE keytype = ?', array('2026032800', 'dbversion'));

$this->DB->CommitTrans();

?>
